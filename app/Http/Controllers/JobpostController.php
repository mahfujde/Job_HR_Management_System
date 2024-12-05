<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Job_post;
use DB;
use Auth;
use App\Applied;
use App\user;

class JobpostController extends Controller
{
    public function jobPost(){
        return view('jobPostApply.jobPost');
    }


     public function saveJobPost(Request $request){

        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_description' => 'required',
            'address' => 'required',
            'job_responsibilities' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
            'employment_status' => 'required',
            'educational_requirements' => 'required',
            'experience_requirements' => 'required',
            'key_skills'=>'required',
            'vacancy_no' => 'required',
            'educational_requirements' => 'required',
            'curcular_date' => 'required|date|after:yesterday',
            'deadline' => 'required|date|after:curcular_date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



    $Job_post = new Job_post();
    $Job_post->company_id = Auth::guard('company')->user()->id;
    $Job_post->job_title = $request->input('job_title');
    $Job_post->job_description = $request->input('job_description');
    //$Job_post->company_name = $request->input('company_name');
    $Job_post->company_name = Auth::guard('company')->user()->company_name;
    $Job_post->address = $request->input('address');
    $Job_post->job_responsibilities = $request->input('job_responsibilities');
    $Job_post->job_location = $request->input('job_location');
    $Job_post->salary = $request->input('salary');
    $Job_post->employment_status = $request->input('employment_status');
    $Job_post->educational_requirements = $request->input('educational_requirements');
    $Job_post->experience_requirements = $request->input('experience_requirements');
    $Job_post->key_skills = $request->input('key_skills');
    $Job_post->vacancy_no = $request->input('vacancy_no');
    $Job_post->curcular_date = $request->input('curcular_date');
    $Job_post->deadline = $request->input('deadline');
     
     $Job_post->save();
     return redirect('/job/post/list');

    }


     public function viewJobPostPage(){
        return view('jobPostApply.viewJobPost');
    }

   public function viewJobPost(){
     
     //$job_id = Auth::guard('company')->user()->id;
    // $job_posts=DB::select('select* from job_posts  WHERE company_id= ?',[$job_id]);

     $job_posts = Job_post::
        orderBy('curcular_date','dsc')
        ->get();
        //->paginate(5);
     return view('jobPostApply.viewJobPost',['job_posts'=> $job_posts]);


   }

    
     public function viewJobPostDetails($job_id){

         $job_posts=DB::table('job_posts')->where('job_id',$job_id)->get();

         $email = Auth::user()->email;
        $data =  Applied::
                 where('job_id',$job_id)
                 ->where('candidate_email',$email)
                 ->get();

         return view('jobPostApply.viewJobPostDetails',compact('job_posts','data'));
    }

     public function jobPostList(){
        return view('jobPostApply.jobPostList');
    }
  

   public function viewPostList(){
      $job_id = Auth::guard('company')->user()->id;
      $job_posts=DB::select('select* from job_posts  WHERE company_id= ?',[$job_id]);
     return view('jobPostApply.jobPostList',['job_posts'=> $job_posts]);
       //$company_name=Auth::guard('company')->user()->company_name;
       //$job_lists=DB::table('job_posts')->where('company_name',$company_name)->get();
       // return view('companypannel.jobPostList',compact('job_lists'));
    }

    public function applied($id)
    {
        $str1 = rand(1000,9999);
        $str2 = strval($str1);

        $str4 = rand(100,999);
        $str5 = strval($str4);

        $str3 = "JHR";

        $final = $str3 . '-' .$str2 . '-' .$str5;

        $applied =  new Applied();

        $job_id = decrypt($id);

        $applied->job_id = $job_id;
        $applied->identification_no = $final;
        $applied->candidate_name = Auth::user()->first_name;
        $applied->candidate_email = Auth::user()->email;
        $applied->candidate_contact = Auth::user()->contact;
        $applied->is_applied = 1;

        $applied->save();
        return redirect('/view/job/post')->with('success', 'Applied Successfully Done');

    }

    public function applied_check()
    {
        $email = Auth::user()->email;
        $data =  Applied::where('candidate_email',$email)->get();

        return view('jobPostApply.viewJobPostDetails',compact('data'));
    }


    public function candidateList(){
         
         $id =  Auth::guard('company')->user()->id;
        $data = DB::table('applieds')
                ->join('job_posts', 'job_posts.job_id', '=' ,'applieds.job_id')
                ->select('applieds.*', 'job_posts.*')
                ->where('job_posts.company_id',$id)
                ->get();

        return view('companypannel.candidateList',compact('data'));
    }


    public function deleteJobpost($job_id){

        DB::delete('delete from job_posts where job_id = ?',[$job_id]);
        return redirect('/job/post/list')->with('success', 'Delete Successfully Done');

    }
    public function candidateReview(Request $request)
    {
        $remarks =  $request->input('remarks');
        $selection = $request->input('expected_salary');

        $email = $request->input('candidate_email');

        DB::table('applieds')
                ->where('candidate_email',$email)
                ->update(
                    ['expected_salary'=> $selection,
                    'remarks' => $remarks
                    ]
                );
             return redirect('/see/candidate/list');
    }


    
  
   

}

