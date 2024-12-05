<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Seekerabout;
use App\Seekereducation;
use App\Seekersociallink;
use App\Cover_picture;
use App\Profile_picture;
use Auth;




class SeekerprofileController extends Controller
{

   public function coverPicture(){

    return view('jobseeker.seekerCoverPicture ');
}

public function profilePicture(){

    return view('jobseeker.seekerProfilePicture');
}



    public function about(){

    return view('jobseeker.seekerProfileAbout');
}

public function education(){

    return view('jobseeker.seekerProfileEducation');
}

public function socialLink(){

    return view('jobseeker.seekerProfileSocialLink');
}



public function saveCoverPicture(Request $request){


       $validator = Validator::make($request->all(), [
            'cover_picture' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



      $cover_picture  = new Cover_picture();

       $cover_picture->jobseeker_id=Auth::user()->id;
      if($request->hasFile('cover_picture')){

      $file=$request->file('cover_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/cover_picture/',$filename);
      $cover_picture->cover_picture=$filename;
     }
     else{
        return $request;
        $cover_picture->cover_picture ='';
     }
      $cover_picture->save();
      
      return redirect('jobseekerProfile');

    }




    public function saveProfilePicture(Request $request){




       $validator = Validator::make($request->all(), [
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



      $profile_picture  = new Profile_picture();

       $profile_picture->jobseeker_id=Auth::user()->id;

      if($request->hasFile('profile_picture')){

      $file=$request->file('profile_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/profile_picture/',$filename);
      $profile_picture->profile_picture=$filename;
     }
     else{
        return $request;
        $profile_picture->profile_picture ='';
     }
      $profile_picture->save();
     
     return redirect('jobseekerProfile');


    }

public function saveAbout(Request $request){


      $validator = Validator::make($request->all(), [
            'about_me' => 'required',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $seekerabout = new Seekerabout();

       $seekerabout->jobseeker_id = Auth::user()->id;
       $seekerabout->about_me = $request->input('about_me');
      

       $seekerabout->save();
         return redirect('jobseekerProfile');


    }



    public function saveEducation(Request $request){


      $validator = Validator::make($request->all(), [
            'education_info' => 'required',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $education = new Seekereducation();

       $education->jobseeker_id = Auth::user()->id;
       $education->education_info = $request->input('education_info');
      

       $education->save();
         return redirect('jobseekerProfile');


    }


public function saveSosialLink(Request $request){


       $sociallink = new Seekersociallink();

       $sociallink->jobseeker_id = Auth::user()->id;
       $sociallink->facebook = $request->input('facebook');
       $sociallink->twiter = $request->input('twiter');
       $sociallink->linkedin = $request->input('linkedin');
      

       $sociallink->save();
         return redirect('jobseekerProfile');


    }

 


    


}
