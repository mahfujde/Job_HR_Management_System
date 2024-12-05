<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
class AdminpannelController extends Controller
{
 


   public function companys(){

   	return view('adminPannel.companyInformation');
   }



   public function blog(){

   	return view('adminPannel.writeBlog');
   }



   public function govtjob(){

   	 return view('adminPannel.writeGovtJob');
   }


public function viewgovtjob(){

       return view('adminPannel.viewGovtJob');
   }




   public function jobpost(){

   	return view('adminPannel.postJobInformation');
   }




   
}
