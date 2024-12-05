<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class ViewseekerprofileController extends Controller
{
     public function viewProfile(){

    	
         $id = Auth::user()->id;
         $abouts = DB::select('select * from seekerabouts WHERE jobseeker_id= ?',[$id]);

         $educations = DB::select('select * from seekereducations WHERE jobseeker_id= ?',[$id]);

         $sociallinks = DB::select('select * from seekersociallinks WHERE jobseeker_id= ?',[$id]);

         $coverpictures = DB::select('select * from cover_pictures WHERE jobseeker_id= ?',[$id]);

         $profilepictures= DB::select('select * from profile_pictures WHERE jobseeker_id= ?',[$id]);

          return view('jobseeker.jobseekerProfile',compact('abouts','educations','sociallinks','coverpictures','profilepictures'));
          
    }
    public function checkAbout()
    {
        $id = Auth::user()->id;
        $abouts = DB::select('select * from seekerabouts WHERE jobseeker_id= ?',[$id]);

        return view('jobseeker.seekerProfileAbout',['abouts'=> $abouts]);
    }

    public function updateAbout(Request $request)
    {
        $about = $request->input('about_me');

        $id = Auth::user()->id;
        DB::table('seekerabouts')
            ->where('jobseeker_id', $id)
            ->update(['about_me' => $about]);

        return redirect('jobseekerProfile');
    }

    public function checkEducation()
    {
        $id = Auth::user()->id;
        $educations = DB::select('select * from seekereducations WHERE jobseeker_id= ?',[$id]);

        return view('jobseeker.seekerProfileEducation',['educations'=> $educations]);
   }


   public function updateEducation(Request $request)
    {
        $education = $request->input('education_info');

        $id = Auth::user()->id;
        DB::table('seekereducations')
            ->where('jobseeker_id', $id)
            ->update(['education_info' => $education]);

       return redirect('jobseekerProfile');
    }


    public function checkSocialLink()
    {
        $id = Auth::user()->id;
        $sociallinks = DB::select('select * from seekersociallinks WHERE jobseeker_id= ?',[$id]);

        return view('jobseeker.seekerProfileSocialLink',['sociallinks'=> $sociallinks]);
   }


   public function updateSocialLink(Request $request)
    {
        $facebook = $request->input('facebook');
        $twiter = $request->input('twiter');
        $linkedin = $request->input('linkedin');


        $id = Auth::user()->id;
        DB::table('seekersociallinks')
            ->where('jobseeker_id', $id)
            ->update(['facebook' => $facebook,'twiter' => $twiter,'linkedin' => $linkedin]);

        return redirect('jobseekerProfile');
    }


    public function checkCoverPicture()
    {
        $id = Auth::user()->id;
        $coverpictures = DB::select('select * from cover_pictures WHERE jobseeker_id= ?',[$id]);

        return view('jobseeker.seekerCoverPicture',['coverpictures'=> $coverpictures]);
   }

   public function updateCoverPicture(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'cover_picture' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        
        if($request->hasFile('cover_picture')){

      $file=$request->file('cover_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/cover_picture/',$filename);
      $cover_picture = $filename;
     }
     else{
        return $request;
        $cover_picture->cover_picture ='';
     }

        $id = Auth::user()->id;
        DB::table('cover_pictures')
            ->where('jobseeker_id', $id)
            ->update(['cover_picture' => $cover_picture]);

        return redirect('jobseekerProfile');
    }



    public function checkPicturePicture()
    {
        $id = Auth::user()->id;
        $profilepictures = DB::select('select * from profile_pictures WHERE jobseeker_id= ?',[$id]);

        return view('jobseeker.seekerProfilePicture',['profilepictures'=> $profilepictures]);
     
}


        public function updatePicturePicture(Request $request)
    {
        if($request->hasFile('profile_picture')){

      $file=$request->file('profile_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/profile_picture/',$filename);
      $profile_picture = $filename;
     }
     else{
        return $request;
        $profile_picture->profile_picture ='';
     }

        $id = Auth::user()->id;
        DB::table('profile_pictures')
            ->where('jobseeker_id', $id)
            ->update(['profile_picture' => $filename]);

        return redirect('jobseekerProfile');
    }


}
