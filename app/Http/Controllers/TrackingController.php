<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applied;
use Auth;
use DB;

class TrackingController extends Controller
{
    public function view()
    {
    	return view('jobseeker.job_tracking');
    }

    public function track(Request $request){

    	$ident_no = $request->get('identification_no');
    	$job_id = 0;
    	$email = Auth::user()->email;

    	$data = Applied::
        where('identification_no', 'like', '%'.$ident_no.'%')
        ->where('candidate_email', $email)
        ->get();

        foreach ($data as $key) {
        	$job_id = $key->job_id;
        }

        $count = Applied::
        where('job_id',$job_id)
        ->count();


        return view('jobseeker.job_tracking_status',compact('data','count'));
    }
    public function viewTracking(){

        $email = Auth::user()->email;
        $data = DB::table('applieds')
       ->join('job_posts', 'job_posts.job_id', '=', 'applieds.job_id')
       ->select('job_posts.*', 'applieds.*')
       ->where('applieds.candidate_email',$email)
       ->get();

        return view('jobseeker.jobseekerDashboard', compact('data'));
    }
}
