<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;


class ViewcompanyprofileController extends Controller
{
     public function viewProfile(){

    	
         $id = Auth::guard('company')->user()->id;
         $company_abouts = DB::select('select * from company_abouts WHERE company_id= ?',[$id]);

         $company_addresses = DB::select('select * from company_addresses WHERE company_id= ?',[$id]);

         $company_sociallinks = DB::select('select * from company_sociallinks WHERE company_id= ?',[$id]);

         $company_coverpictures = DB::select('select * from company_coverpictures WHERE company_id= ?',[$id]);

         $company_profilepictures= DB::select('select * from company_profilepictures WHERE company_id= ?',[$id]);

          return view('companypannel.companyProfile',compact('company_abouts','company_addresses','company_sociallinks','company_coverpictures','company_profilepictures'));
          
    }


    public function checkAbout()
    {
        $id = Auth::guard('company')->user()->id;
        $company_abouts = DB::select('select * from company_abouts WHERE company_id= ?',[$id]);

        return view('companypannel.companyProfileAbout',['company_abouts'=> $company_abouts]);
    }

    public function updateAbout(Request $request)
    {
        $company_about = $request->input('about_company');

        $id = Auth::guard('company')->user()->id;
        DB::table('company_abouts')
            ->where('company_id', $id)
            ->update(['about_company' => $company_about]);

        return redirect('companyProfile');
    }

    public function checkAddress()
    {
        $id = Auth::guard('company')->user()->id;
        $company_addresses = DB::select('select * from company_addresses WHERE company_id= ?',[$id]);

        return view('companypannel.companyProfileAddress',['company_addresses'=> $company_addresses]);
   }


   public function updateAddress(Request $request)
    {
        $company_addresse = $request->input('company_address');

       $id = Auth::guard('company')->user()->id;
        DB::table('company_addresses')
            ->where('company_id', $id)
            ->update(['company_address' => $company_addresse]);

        return redirect('companyProfile');
    }


    public function checkSocialLink()
    {
        $id = Auth::guard('company')->user()->id;
        $company_sociallinks = DB::select('select * from company_sociallinks WHERE company_id= ?',[$id]);

        return view('companypannel.companyProfileSocialLink',['company_sociallinks'=> $company_sociallinks]);
   }


   public function updateSocialLink(Request $request)
    {
        $facebook = $request->input('facebook');
        $twiter = $request->input('twiter');
        $linkedin = $request->input('linkedin');
        $website = $request->input('website');


        $id = Auth::guard('company')->user()->id;
        DB::table('company_sociallinks')
            ->where('company_id', $id)
            ->update(['facebook' => $facebook,'twiter' => $twiter,'linkedin' => $linkedin,'website' => $website]);

        return redirect('companyProfile');
    }


    public function checkCoverPicture()
    {
        $id = Auth::guard('company')->user()->id;
        $company_coverpictures = DB::select('select * from company_coverpictures WHERE company_id= ?',[$id]);

        return view('companypannel.companyCoverPicture',['company_coverpictures'=> $company_coverpictures]);
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
      $file->move('uploads/companycover_picture/',$filename);
      $cover_picture = $filename;
     }
     else{
        return $request;
        $cover_picture->cover_picture ='';
     }

        $id = Auth::guard('company')->user()->id;
        DB::table('company_coverpictures')
            ->where('company_id', $id)
            ->update(['cover_picture' => $cover_picture]);

        return redirect('companyProfile');
    }



    public function checkPicturePicture()
    {
       $id = Auth::guard('company')->user()->id;
        $company_profilepictures = DB::select('select * from company_profilepictures WHERE company_id= ?',[$id]);

        return view('companypannel.companyProfilePicture',['company_profilepictures'=> $company_profilepictures]);
     
}


        public function updatePicturePicture(Request $request)
    {
        if($request->hasFile('profile_picture')){

      $file=$request->file('profile_picture');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/companyprofile_picture/',$filename);
      $profile_picture = $filename;
     }
     else{
        return $request;
        $profile_picture->profile_picture ='';
     }

        $id = Auth::guard('company')->user()->id;
        DB::table('company_profilepictures')
            ->where('company_id', $id)
            ->update(['profile_picture' => $filename]);

        return redirect('companyProfile');
    }


}
