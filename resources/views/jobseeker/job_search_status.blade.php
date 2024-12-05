@extends('jobseeker.mainJobseekermenu')

@section('headTitle')
 
@endsection

@section('mainCvcontent')



@if(!empty($data))
@if(session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
@endif
<span class="desc" style="color: black; font-size: 20px; text-align: center;">Job Found:{{$count}}</span>
	@foreach($data as $job_post)
   <div class="card m-5">
   	
	<div class="card-header">
		<p class="ml-2"><b>{{$job_post->company_name}}</b></p>
	</div>
		<div class="card-body ml-5">
      <b>Title:</b>
             <p class="ml-4">{{$job_post->job_title}}</p>
  

<a href="{{url('/view/job/post/details/'.$job_post->job_id)}}"class="btn btn-success">
  Read more
</a>
</div>




</div>
	
@endforeach

@endif


@endsection