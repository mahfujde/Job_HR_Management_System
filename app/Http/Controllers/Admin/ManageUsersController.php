<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Company;

class ManageUsersController extends Controller
{
    public function viewJobSeeker(){
         
         $jobseekers = User::all();

         return view('adminPannel.seekerInformation',['jobseekers'=>$jobseekers]);

    }


    public function viewCompany(){
         
         $companys = Company::all();

         return view('adminPannel.companyInformation',['companys'=>$companys]);

    }
}
