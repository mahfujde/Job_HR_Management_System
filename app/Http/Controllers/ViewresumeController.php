<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reference;
use DB;
use Auth;
use PDF;
class ViewresumeController extends Controller
{
    public function viewResumePage(){

         

    	return view('viewResume');
    }

    
     public function viewResume(Request $request){

      
         $id = Auth::user()->id;
         $objectives = DB::select('select * from objectives WHERE jobseeker_id= ?',[$id]);

         $personal_informations = DB::select('select * from personal_informations WHERE jobseeker_id= ?',[$id]);

         $academicinformations = DB::select('select * from academic_informations WHERE jobseeker_id= ?',[$id]);

         $workexperiences = DB::select('select * from work_experiences WHERE jobseeker_id= ?',[$id]);

         $thesis_projects = DB::select('select * from thesis_projects WHERE jobseeker_id= ?',[$id]);

         $training_certifications = DB::select('select * from training_certifications WHERE jobseeker_id= ?',[$id]);

         $professional_expertises= DB::select('select * from professional_expertises WHERE jobseeker_id= ?',[$id]);

          $languages= DB::select('select * from languages WHERE jobseeker_id= ?',[$id]);

           $extra_activities= DB::select('select * from extra_activities WHERE jobseeker_id= ?',[$id]);

            $addresses= DB::select('select * from addresses WHERE jobseeker_id= ?',[$id]);

             $pictures= DB::select('select * from pictures WHERE jobseeker_id= ?',[$id]);
             

            $references = Reference::where('jobseeker_id',$id)->get();

          
          return view('viewResume',compact('objectives','personal_informations','academicinformations','workexperiences','thesis_projects','training_certifications','professional_expertises','languages','extra_activities','addresses','pictures','references'));
          
    }

 public function download(Request $request)
    {
         
            $id = Auth::user()->id;
         $objectives = DB::select('select * from objectives WHERE jobseeker_id= ?',[$id]);

         $personal_informations = DB::select('select * from personal_informations WHERE jobseeker_id= ?',[$id]);

         $academicinformations = DB::select('select * from academic_informations WHERE jobseeker_id= ?',[$id]);

         $workexperiences = DB::select('select * from work_experiences WHERE jobseeker_id= ?',[$id]);

         $thesis_projects = DB::select('select * from thesis_projects WHERE jobseeker_id= ?',[$id]);

         $training_certifications = DB::select('select * from training_certifications WHERE jobseeker_id= ?',[$id]);

         $professional_expertises= DB::select('select * from professional_expertises WHERE jobseeker_id= ?',[$id]);

          $languages= DB::select('select * from languages WHERE jobseeker_id= ?',[$id]);

           $extra_activities= DB::select('select * from extra_activities WHERE jobseeker_id= ?',[$id]);

            $addresses= DB::select('select * from addresses WHERE jobseeker_id= ?',[$id]);

             $pictures= DB::select('select * from pictures WHERE jobseeker_id= ?',[$id]);
             

            $references = Reference::where('jobseeker_id',$id)->get();

          
            $pdf = PDF::loadView('downloadCv',compact('objectives','personal_informations','academicinformations','workexperiences','thesis_projects','training_certifications','professional_expertises','languages','extra_activities','addresses','pictures','references'));
            return $pdf->download('myCV.pdf');
        
    }


    // new added by me on 06th August
    public function viewCandidateResume($email){

        $id =0;
        $user_id=DB::table('users')->where('email',$email)->get();

        foreach ($user_id as $key) {
            $id = $key->id;
        }
    
         $objectives = DB::select('select * from objectives WHERE jobseeker_id= ?',[$id]);

         $personal_informations = DB::select('select * from personal_informations WHERE jobseeker_id= ?',[$id]);

         $academicinformations = DB::select('select * from academic_informations WHERE jobseeker_id= ?',[$id]);

         $workexperiences = DB::select('select * from work_experiences WHERE jobseeker_id= ?',[$id]);

         $thesis_projects = DB::select('select * from thesis_projects WHERE jobseeker_id= ?',[$id]);

         $training_certifications = DB::select('select * from training_certifications WHERE jobseeker_id= ?',[$id]);

         $professional_expertises= DB::select('select * from professional_expertises WHERE jobseeker_id= ?',[$id]);

          $languages= DB::select('select * from languages WHERE jobseeker_id= ?',[$id]);

           $extra_activities= DB::select('select * from extra_activities WHERE jobseeker_id= ?',[$id]);

            $addresses= DB::select('select * from addresses WHERE jobseeker_id= ?',[$id]);

             $pictures= DB::select('select * from pictures WHERE jobseeker_id= ?',[$id]);
             

            $references = Reference::where('jobseeker_id',$id)->get();

          return view('applicantCV',compact('objectives','personal_informations','academicinformations','workexperiences','thesis_projects','training_certifications','professional_expertises','languages','extra_activities','addresses','pictures','references'));
          
    }

   






}
