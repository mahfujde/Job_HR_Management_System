<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Govtjobpost;

class AddgovtjobController extends Controller
{
    public function savegovtjob(Request $request){



        $validator = Validator::make($request->all(), [
            'agency_name' => 'required',
            'job_title' => 'required',
            'description' => 'required',
            'picture' => 'required|mimes:jpeg,jpg,bmp,png,gif,svg,webp',
            'publish_date' => 'required|date|after:yesterday',
            'deadline' => 'required|date|after:publish_date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



    $govtjob = new Govtjobpost();
    $govtjob->agency_name = $request->input('agency_name');
    $govtjob->job_title = $request->input('job_title');
    $govtjob->vacancy_no = $request->input('vacancy_no');
    $govtjob->description = $request->input('description');

     if($request->hasFile('picture')){

     	$file=$request->file('picture');
     	$extension=$file->getClientOriginalExtension();
     	$filename=time().'.'.$extension;
     	$file->move('uploads/govtjob/',$filename);
     	$govtjob->picture=$filename;
     }
     else{
        return $request;
        $govtjob->picture ='';
     }

    $govtjob->publish_date = $request->input('publish_date');
    $govtjob->deadline = $request->input('deadline');
     
     $govtjob->save();
     return 'success';


    }

     
}
