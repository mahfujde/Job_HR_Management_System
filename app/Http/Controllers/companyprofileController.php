<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Company_coverpicture;
use App\Company_profilepicture;
use App\Company_about;
use App\Company_address;
use App\Company_sociallink;
use Auth;

class companyprofileController extends Controller
{
    public function coverPicture(){

    return view('companypannel.companyCoverPicture ');
}

public function profilePicture(){

    return view('companypannel.companyProfilePicture');
}



    public function about(){

    return view('companypannel.companyProfileAbout');
}

public function address(){

    return view('companypannel.companyProfileAddress');
}

public function socialLink(){

    return view('companypannel.companyProfileSocialLink');
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



      $cover_picture  = new Company_coverpicture();

      $cover_picture->company_id=Auth::guard('company')->user()->id;
      if($request->hasFile('cover_picture')){

      $file=$request->file('cover_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/companycover_picture/',$filename);
      $cover_picture->cover_picture=$filename;
     }
     else{
        return $request;
        $cover_picture->cover_picture ='';
     }
      $cover_picture->save();
      
      return redirect('companyProfile');

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



      $profile_picture  = new Company_profilepicture();

       $profile_picture->company_id=Auth::guard('company')->user()->id;
      if($request->hasFile('profile_picture')){

      $file=$request->file('profile_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/companyprofile_picture/',$filename);
      $profile_picture->profile_picture=$filename;
     }
     else{
        return $request;
        $profile_picture->profile_picture ='';
     }
      $profile_picture->save();
     
     return redirect('companyProfile');


    }

public function saveAbout(Request $request){


      $validator = Validator::make($request->all(), [
            'about_company' => 'required',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $company_about = new Company_about();

       $company_about->company_id = Auth::guard('company')->user()->id;
       $company_about->about_company = $request->input('about_company');
      

       $company_about->save();
         return redirect('companyProfile');


    }



    public function saveAddress(Request $request){


      $validator = Validator::make($request->all(), [
            'company_address' => 'required',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $company_address = new Company_address();

       $company_address->company_id = Auth::guard('company')->user()->id;
       $company_address->company_address = $request->input('company_address');
      

       $company_address->save();
        return redirect('companyProfile');


    }


public function saveSosialLink(Request $request){


       $company_sociallink = new Company_sociallink();

       $company_sociallink->company_id = Auth::guard('company')->user()->id;
       $company_sociallink->facebook = $request->input('facebook');
       $company_sociallink->twiter = $request->input('twiter');
       $company_sociallink->linkedin = $request->input('linkedin');
       $company_sociallink->website = $request->input('website');
      

       $company_sociallink->save();
       return redirect('companyProfile');
        


    }
}
