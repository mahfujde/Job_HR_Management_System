<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\PersonalInformation;
use App\Address;
use App\Objective;
use App\Picture;
use App\Reference;
use App\AcademicInformation;
use App\ThesisProject;
use App\ProfessionalExpertise;
use App\TrainingCertification;
use App\Language;
use App\WorkExperience;
use App\ExtraActivitie;
use Auth;


class SaveresumeinformationController extends Controller
{
    public function savePersonalInformation(Request $request){


      $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'bdate' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'mstatus' => 'required',
            'nationality' => 'required',
            'mobile_number' => 'required|max:11|min:11',
            'email' => 'required|email',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $personalInformation = new PersonalInformation();

       $personalInformation->jobseeker_id = Auth::user()->id;
       $personalInformation->first_name = $request->input('first_name');
       $personalInformation->last_name = $request->input('last_name');
       $personalInformation->father_name = $request->input('father_name');
       $personalInformation->mother_name = $request->input('mother_name');
       $personalInformation->bdate = $request->input('bdate');
       $personalInformation->gender = $request->input('gender');
       $personalInformation->religion = $request->input('religion');
       $personalInformation->mstatus = $request->input('mstatus');
       $personalInformation->nationality = $request->input('nationality');
       $personalInformation->national_id = $request->input('national_id');
       $personalInformation->bath_id = $request->input('bath_id');
       $personalInformation->passport = $request->input('passport');
       $personalInformation->mobile_number = $request->input('mobile_number');
       $personalInformation->email = $request->input('email');

       $personalInformation->save();
        return redirect('/view/cv/page');


    }


    public function saveAddress(Request $request){

      $validator = Validator::make($request->all(), [
            'present_address' => 'required',
            'parmanent_address' => 'required',
           
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


    $address = new Address();

    $address->jobseeker_id=Auth::user()->id;
    $address->present_address=$request->input('present_address');
    $address->parmanent_address=$request->input('parmanent_address');
    $address->save();
    return redirect('/view/cv/page');

    }


    public function saveObjective(Request $request){



       $validator = Validator::make($request->all(), [
            'objective' => 'required',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



      $objective = new Objective();

      $objective->jobseeker_id=Auth::user()->id;
      $objective->objective=$request->input('objective');
      $objective->save();
      return redirect('/view/cv/page');

    }

    public function savePicture(Request $request){




       $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



      $picture  = new Picture();

       $picture->jobseeker_id=Auth::user()->id;

      if($request->hasFile('photo')){

      $file=$request->file('photo');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/cvimage/',$filename);
      $picture->photo=$filename;
     }
     else{
        return $request;
        $picture->photo ='';
     }
      $picture->save();
      return redirect('/view/cv/page');


    }


  public function saveReference(Request $request){

       $rules = array(
                  'name.*' => 'required',
            'designation.*' => 'required',
            'email.*' => 'required|email',
            'organization.*' => 'required',
            'mobile.*' => 'required|max:11|min:11',
            'relation.*' => 'required',
      );

        $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();

        }

        
          $name = $request->name;
          $designation= $request->designation;
          $organization = $request->organization;
          $email = $request->email;
          $mobile = $request->mobile;
          $relation= $request->relation;

         
      for($count = 0; $count < count($name); $count++)
      {
       $data = array(
        'jobseeker_id'=>Auth::user()->id,
        'name' => $name[$count],
        'designation' => $designation[$count],
        'email' => $email[$count],
        'organization' => $organization[$count],
        'mobile' => $mobile[$count],
        'relation' => $relation[$count],
       );
       $insert_data[] = $data; 
      }

      Reference::insert($insert_data);
      return redirect('/view/cv/page');

  }

  public function saveAcademicInformation(Request $request){


     $rules = array(
       'level_education.*'  => 'required',
       'major_subject.*'  => 'required',
       'institution_name.*' => 'required',
       'pass_year.*' => 'required|numeric',
      );
      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
       //$user = Auth::user();

       $level_education = $request->level_education;
       $major_subject = $request->major_subject;
       $institution_name = $request->institution_name;
       $result = $request->result;
       $pass_year= $request->pass_year;
      // $name = $user->name;

      for($count = 0; $count < count($level_education); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
        'level_education' => $level_education[$count],
        'major_subject' => $major_subject[$count],
        'institution_name' => $institution_name[$count],
        'result' => $result[$count],
        'pass_year' => $pass_year[$count],
       );
       $insert_data[] = $data; 
      }

      AcademicInformation::insert($insert_data);
      return redirect('/view/cv/page');
  

  }




   public function saveThesisProject(Request $request){


     $rules = array(
       'date.*'  => 'required',
       'title.*'  => 'required',
      );

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $date = $request->date;
       $title = $request->title;

      for($count = 0; $count < count($date); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
        'date' => $date[$count],
        'title' => $title[$count],

       );
       $insert_data[] = $data; 
      }

      ThesisProject::insert($insert_data);
      return redirect('/view/cv/page');
  

  }
   
   public function saveprofessionalExpertise(Request $request){

          $rules = array(
       'skill.*'  => 'required',

      );

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $skill = $request->skill;

      for($count = 0; $count < count($skill); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
        'skill' => $skill[$count],

       );
       $insert_data[] = $data; 
      }

      ProfessionalExpertise::insert($insert_data);
      return redirect('/view/cv/page');
  

  }
      

 public function saveTrainingCertification(Request $request){

          $rules = array(
            'training_title.*' => 'required',
            'training_institution.*' => 'required',
            'training_location.*' => 'required',
            'training_duration.*' => 'required',
           
           );

       $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

   $training_title = $request->training_title;
   $training_institution = $request->training_institution;
   $training_location = $request->training_location;
   $training_duration = $request->training_duration;
     
      for($count = 0; $count < count($training_title); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
        'training_title' => $training_title[$count],
        'training_institution' => $training_institution[$count],
        'training_location' => $training_location[$count],
        'training_duration' => $training_duration[$count],
       );
       $insert_data[] = $data; 
      }

      TrainingCertification::insert($insert_data);
      return redirect('/view/cv/page');
  }

  public function saveLanguage(Request $request){

          $rules = array(
            'language.*' => 'required',
            'writing.*' => 'required',
            'reading.*' => 'required',
            'speaking.*' => 'required',
           
           );

       $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

   $language = $request->language;
   $writing = $request->writing;
   $reading = $request->reading;
   $speaking = $request->speaking;
     
      for($count = 0; $count < count($language); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
         'language' => $language[$count],
        'writing' => $writing[$count],
        'reading' => $reading[$count],
        'speaking' => $speaking[$count],
       );
       $insert_data[] = $data; 
      }

      Language::insert($insert_data);
      return redirect('/view/cv/page');

  }



  public function saveWorkExperience(Request $request){

            $rules = array(
            'company_name.*' => 'required',
            'designation.*' => 'required',
            'responsibilities.*' => 'required',
            'join_date.*' => 'required|date',
            'resign_date.*' => 'required|date|after:join_date.*',
           
           );

       $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

  
     $company_name = $request->company_name;
     $designation = $request->designation;
     $responsibilities = $request->responsibilities;
     $join_date = $request->join_date;
     $resign_date = $request->resign_date;
     
      for($count = 0; $count < count($company_name); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
         'company_name' => $company_name[$count],
        'designation' => $designation[$count],
        'responsibilities' => $responsibilities[$count],
        'join_date' => $join_date[$count],
        'resign_date' => $resign_date[$count],
       );
       $insert_data[] = $data; 
      }

      WorkExperience::insert($insert_data);
      return redirect('/view/cv/page');

  }



  public function saveExtraActivitie(Request $request){

             $rules = array(
            'extra_title.*' => 'required',
            'extra_details.*' => 'required',
            'location.*' => 'required',
            'edate.*' => 'required|date',
           
           );

       $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

  
      $extra_title = $request->extra_title;
      $extra_details = $request->extra_details;
      $location = $request->location;
      $edate = $request->edate;
     
      for($count = 0; $count < count($extra_title); $count++)
      {
       $data = array(
        'jobseeker_id' => Auth::user()->id,
         'extra_title' => $extra_title[$count],
         'extra_details' => $extra_details[$count],
         'location' => $location[$count],
         'edate' => $edate[$count],
       );
       $insert_data[] = $data; 
      }

      ExtraActivitie::insert($insert_data);
      return redirect('/view/cv/page');

  }
}
