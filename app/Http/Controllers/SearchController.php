<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job_post;
use DB;
use Auth;
use App\Applied;
use App\user;
use Session;
use Redirect;

class SearchController extends Controller
{
    public function search(Request $request)
    {

    	$keywords = $request->input('keywords');
    	$experience = $request->input('experience');
    	$location = $request->input('location');
    	$type = $request->input('type');

    	

    	//$result = Job_post::query();

		/*if (!empty($keywords)) {
		$result = $result->where('job_title','like','%'.$keywords.'%');
		}

		elseif (!empty($location)) {
		$result = $result->where('job_location','like','%'.$location.'%');
		}

		elseif (!empty($type)) {
		$result = $result->where('employment_status','like','%'.$type.'%');
		}

		elseif (!empty($experience)) {
		$result = $result->where('experience_requirements','like','%'.$experience.'%');
		}

		else{
			return "No Result";
		}*/

		//$result2 = $result->where('job_title','like','%'.$keywords.'%')->first();

		


		//$data = $result->get();


    	$data = Job_post::
    			where('job_title','like','%'.$keywords.'%')
    			->orWhere('job_location','like','%'.$location.'%')
    			->orWhere('employment_status','like','%'.$type.'%')
    			->orWhere('experience_requirements','like','%'.$experience.'%')
    			->get();
    	if($data == null){

			$msg = "Data Not Found";
			//return view('jobseeker.job_search_status',compact('msg'));
		//	return Redirect::route('/job/serach/status')->withMessage($msg);
			return 'Data Not Found';
			//return redirect('/job/serach/status')->with('success', 'Data Not Found');
		}

    	$count = Job_post::
    			where('job_title','like','%'.$keywords.'%')
    			->orWhere('job_location','like','%'.$location.'%')
    			->orWhere('employment_status','like','%'.$type.'%')
    			->orWhere('experience_requirements','like','%'.$experience.'%')
    			->count();

    	return view('jobseeker.job_search_status',compact('data','count'));
    }

    public function fontPageSerch(Request $request){

    	$keywords = $request->input('keywords');
    	$experience = $request->input('experience');
    	$location = $request->input('location');
    	$type = $request->input('type');


    //Do real escaping here

    $query = DB::select('select * from job_posts');
    $conditions = array();

    if(! empty($keywords)) {
      $conditions[] = "job_title='$keywords'";
    }
    if(! empty($experience)) {
      $conditions[] = "experience_requirements='$experience'";
    }
    if(! empty($location)) {
      $conditions[] = "job_location='$location'";
    }
    if(! empty($type)) {
      $conditions[] = "employment_status='$type'";
    }

    /*$sql = '';
    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }*/

    //$data = DB::statement('$sql');
    //$data = DB::select("select * from job_posts where implode('AND', $conditions)");
     $data = DB::table('job_posts')
    		->implode(job_title, $conditions)->get();

    return view('jobseeker.job_search_status',compact('data'));
    }
}
