<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicInformation;
use Auth;
use DB;

class UpdateSaveResumeController extends Controller
{
    
    public function updatePicture(Request $request)
    {
        if($request->hasFile('photo')){

      $file=$request->file('photo');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/cvimage/',$filename);
      $photo = $filename;
     }
     else{
        return $request;
        $photo->photo ='';
     }

        $id = Auth::user()->id;
        DB::table('pictures')
            ->where('jobseeker_id', $id)
            ->update(['photo' => $filename]);

        return redirect('/view/cv/page');
    }






    public function updatePersonalinfo(Request $request)
    {
       $first_name = $request->input('first_name');
       $last_name = $request->input('last_name');
       $father_name = $request->input('father_name');
       $mother_name = $request->input('mother_name');
       $bdate = $request->input('bdate');
       $gender = $request->input('gender');
       $religion = $request->input('religion');
       $mstatus = $request->input('mstatus');
       $nationality = $request->input('nationality');
       $national_id = $request->input('national_id');
       $bath_id = $request->input('bath_id');
       $passport = $request->input('passport');
       $mobile_number = $request->input('mobile_number');
       $email = $request->input('email');

        $id = Auth::user()->id;
        DB::table('personal_informations')
            ->where('jobseeker_id', $id)
            ->update(['first_name' => $first_name,'last_name' => $last_name,'father_name' => $father_name,'mother_name' => $mother_name,'bdate' => $bdate,'gender' => $gender,'religion' => $religion,'mstatus' => $mstatus,'nationality' => $nationality,'national_id' => $national_id,'bath_id' => $bath_id,'passport' => $passport,'mobile_number' => $mobile_number,'email' => $email]);

        return redirect('/view/cv/page');
    }


    public function updateObjective(Request $request)
    {
        $objective=$request->input('objective');

        $id = Auth::user()->id;
        DB::table('objectives')
            ->where('jobseeker_id', $id)
            ->update(['objective' => $objective]);

        return redirect('/view/cv/page');
    }


    public function updateAddress(Request $request)
    {
      

    $present_address=$request->input('present_address');
    $parmanent_address=$request->input('parmanent_address');
    $id = Auth::user()->id;
        DB::table('addresses')
            ->where('jobseeker_id', $id)
            ->update(['present_address' => $present_address,'parmanent_address' => $parmanent_address]);
    return redirect('/view/cv/page');

    }


    public function updateEducation(Request $request)
    {
        $id = $request->input('id');
        $level_education = $request->input('level_education');
        $major_subject = $request->input('major_subject');
        $institution_name = $request->input('institution_name');
        $result = $request->input('result');
        $pass_year = $request->input('pass_year');

        DB::table('academic_informations')
            ->where('id', $id)
            ->update([

              'level_education' => $level_education,
              'major_subject' => $major_subject,
              'institution_name' => $institution_name,
              'result' => $result,
              'pass_year' => $pass_year
            ]);

        return redirect('/view/cv/page');

    }




    public function updateWorkExperience(Request $request)
    {
        $id = $request->input('id');
        $company_name = $request->input('company_name');
        $designation = $request->input('designation');
        $responsibilities = $request->input('responsibilities');
        $join_date = $request->input('join_date');
        $resign_date = $request->input('resign_date');

        DB::table('work_experiences')
            ->where('id', $id)
            ->update([

              'company_name' => $company_name,
              'designation' => $designation,
              'responsibilities' => $responsibilities,
              'join_date' => $join_date,
              'resign_date' => $resign_date
            ]);

        return redirect('/view/cv/page');

    }




    public function updateProject(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $date = $request->input('date');

        DB::table('thesis_projects')
            ->where('id', $id)
            ->update([

              'title' => $title,
              'date' => $date
            ]);

        return redirect('/view/cv/page');

    }



    public function updateTraning(Request $request)
    {
        $id = $request->input('id');
        $training_title = $request->input('training_title');
        $training_institution = $request->input('training_institution');
        $training_location = $request->input('training_location');
        $training_duration = $request->input('training_duration');

        DB::table('training_certifications')
            ->where('id', $id)
            ->update([

              'training_title' => $training_title,
              'training_institution' => $training_institution,
              'training_location' => $training_location,
              'training_duration' => $training_duration
            ]);

        return redirect('/view/cv/page');

    }


    public function updateSkills(Request $request)
    {
        $id = $request->input('id');
        $skill = $request->input('skill');

        DB::table('professional_expertises')
            ->where('id', $id)
            ->update([

              'skill' => $skill
            ]);

        return redirect('/view/cv/page');

    }


    public function updateLanguage(Request $request)
    {
        $id = $request->input('id');
        $language = $request->input('language');
        $writing = $request->input('writing');
        $reading = $request->input('reading');
        $speaking = $request->input('speaking');

        DB::table('languages')
            ->where('id', $id)
            ->update([

              'language' => $language,
              'writing' => $writing,
              'reading' => $reading,
              'speaking' => $speaking
            ]);

        return redirect('/view/cv/page');

    }


    public function updateExtraActivity(Request $request)
    {
        $id = $request->input('id');
        $extra_title = $request->input('extra_title');
        $extra_details = $request->input('extra_details');
        $location = $request->input('location');
        $edate = $request->input('edate');

        DB::table('extra_activities')
            ->where('id', $id)
            ->update([

              'extra_title' => $extra_title,
              'extra_details' => $extra_details,
              'location' => $location,
              'edate' => $edate
            ]);

        return redirect('/view/cv/page');

    }


     public function updateReference(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $designation = $request->input('designation');
        $organization = $request->input('organization');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $relation = $request->input('relation');

        DB::table('references')
            ->where('id', $id)
            ->update([

              'name' => $name,
              'designation' => $designation,
              'organization' => $organization,
              'email' => $email,
              'mobile' => $mobile,
              'relation' => $relation
            ]);

        return redirect('/view/cv/page');

    }

}

       
