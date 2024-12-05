<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumemakeController extends Controller
{

  public function personalInformation(){


    return view('Resume.personalInformation');

  }
 

   public function educationInformation(){

         return view('Resume.educationInformation');

    }


    public function employmentInformation(){

          return view('Resume.employmentInformation');
    	
    }

    public function otherInformation(){

          return view('Resume.othersInformation');

    }


}






