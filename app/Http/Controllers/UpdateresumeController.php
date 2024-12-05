<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reference;
use Auth;
use DB;

class UpdateresumeController extends Controller
{

  public function updatePictureView(){

        return view('Resume.updatePicture');
    }

  public function pictureView(){

        $id = Auth::user()->id;
        $pictures = DB::select('select * from pictures WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updatePicture',['pictures'=> $pictures]);
    }




    public function updateObjectiveView(){

    	return view('Resume.updateObjective');
    }

  public function ObjectiveView(){

    	$id = Auth::user()->id;
        $objectives = DB::select('select * from objectives WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateObjective',['objectives'=> $objectives]);
    }






    public function updateEducationView(){

    	return view('Resume.updateEducationInfo');
    }


    public function EducationView(){
        $id = Auth::user()->id;
        $academic_informations = DB::select('select * from academic_informations WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateEducationInfo',['academic_informations'=> $academic_informations]);
    }






    public function updateWorkExperienceView(){

    	return view('Resume.updateWorkExperience');
    }


    public function WorkExperienceView(){

    	$id = Auth::user()->id;
        $work_experiences = DB::select('select * from work_experiences WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateWorkExperience',['work_experiences'=> $work_experiences]);
    }







    public function updateProjectView(){

    	return view('Resume.updateProject');
    }

    public function ProjectView(){

    	$id = Auth::user()->id;
        $thesis_projects = DB::select('select * from thesis_projects WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateProject',['thesis_projects'=> $thesis_projects]);
    }






    public function updateTraningView(){

    	return view('Resume.updateTraning');
    }

    public function TraningView(){

    	$id = Auth::user()->id;
        $training_certifications = DB::select('select * from training_certifications WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateTraning',['training_certifications'=> $training_certifications]);
    }







    public function updateSkillView(){

    	return view('Resume.updateSkills');
    }


     public function SkillView(){

    	$id = Auth::user()->id;
        $professional_expertises = DB::select('select * from professional_expertises WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateSkills',['professional_expertises'=> $professional_expertises]);
    }








    public function updateLanguageView(){

    	return view('Resume.updateLanguage');
    }


    public function LanguageView(){

    	$id = Auth::user()->id;
        $languages = DB::select('select * from languages WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateLanguage',['languages'=> $languages]);
    }







    public function updateExtraActivityView(){

    	return view('Resume.updateExtraActivity');
    }

    public function ExtraActivityView(){

    	$id = Auth::user()->id;
        $extra_activities = DB::select('select * from extra_activities WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateExtraActivity',['extra_activities'=> $extra_activities]);
    }







    public function updatePersonalinfoView(){

    	return view('Resume.updatePersonalinfo');
    }

    public function PersonalinfoView(){

    	$id = Auth::user()->id;
        $personal_informations = DB::select('select * from personal_informations WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updatePersonalinfo',['personal_informations'=> $personal_informations]);
    }








    public function updateAddressView(){

    	return view('Resume.updateAddress');
    }


    public function AddressView(){

    	$id = Auth::user()->id;
        $addresses = DB::select('select * from addresses WHERE jobseeker_id= ?',[$id]);

        return view('Resume.updateAddress',['addresses'=> $addresses]);
    }






    public function updateReferenceView(){

    	return view('Resume.updateReference');
    }

    public function ReferenceView(){

    	$id = Auth::user()->id;
        $references = Reference::where('jobseeker_id',$id)->get();

        return view('Resume.updateReference',['references'=> $references]);
    }







}
