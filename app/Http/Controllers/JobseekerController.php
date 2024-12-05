<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    
     public function jobseekerProfile(){

    return view('jobseeker.jobseekerProfile');
}    


    public function createResume(){

    return view('Resume.mainResume');
}







}
