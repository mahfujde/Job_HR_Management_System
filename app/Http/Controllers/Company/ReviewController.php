<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Review;
use Validator;
use DB;




class ReviewController extends Controller
{
    public function addReviewPage()
    {
    	return view('companypannel.review');
    }

    public function saveReview(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'candidate_name' => 'required',
            'candidate_email' => 'required',
            'sub_knowledge' => 'required',
            'pre_skill' => 'required',
            'com_skill' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $review = new Review();

        $review->company_email = Auth::guard('company')->user()->email;
	    $review->candidate_name = $request->input('candidate_name');
	    $review->candidate_email = $request->input('candidate_email');
	    $review->sub_knowledge = $request->input('sub_knowledge');
	    $review->pre_skill = $request->input('pre_skill');
	    $review->com_skill = $request->input('com_skill');
	    $review->is_published = 0;
	     
	    $review->save();

	    return redirect('/candidate/review/list')->with('message', 'Data Inserted Successfully');
    }


   

    /*public function viewReview()
    {
        $name =  Auth::guard('company')->user()->company_email;
        $data = Review::
                orderBy('candidate_name','asc')
                ->where('company_email',$name)
                ->get();

     return view('companypannel.viewReview',compact('data'));
    
    }*/

     public function viewReview()
    {
        $name =  Auth::guard('company')->user()->email;
        $data = Review::
                orderBy('candidate_name','asc')
                 ->where('company_email',$name)
                ->get();

     return view('companypannel.viewReview',compact('data'));
    }




 /*public function viewReview()
    {
        $name =  Auth::guard('company')->user()->company_email;
        $data = Review::
                orderBy('candidate_name','asc')
                ->where('company_email',$name)
                ->get();

     return view('companypannel.viewReview',compact('data'));
    }*/





    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'remarks' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $id =  $request->input('review_id');
       $remarks = $request->input('remarks');
       $published = 1;
       

       
        DB::table('reviews')
            ->where('review_id', $id)
            ->update(['remarks' => $remarks,'is_published' => $published]);

        return redirect('/candidate/review/list')->with('message', 'Published Successfully');
    } 
    public function delete($review_id)
   {
    
    
   	DB::delete('delete from reviews where review_id = ?',[$review_id]);
   
    return redirect('/candidate/review/list')->with('message', 'Data Delete Successfully');
   }

   public function seeReview()
   {
        $candidate_email = Auth::user()->email;

        $company = '';
        $data = Review::
                where('candidate_email',$candidate_email)
                ->where('is_published', '=', 1)
                ->get();
        foreach ($data as $key) {
            $company = $key->company_email;
        }

        $company = DB::table('companies')
                   ->where('email',$company)
                   ->get();

        return view('jobseeker.review',compact('data','company'));
   }
}
