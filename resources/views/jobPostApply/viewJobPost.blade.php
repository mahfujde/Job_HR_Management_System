@extends('jobseeker.mainJobseekermenu')

@section('headTitle')
 view and apply job
@endsection

@section('mainCvcontent')

@if(!empty($job_posts))
@if(session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
        @foreach($job_posts as $job_post)
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
   <a href="{{url('/job/search')}}" class="float" style=" position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#0C9;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999; ">
<i class="fa fa-search my-float" style="margin-top:22px;"></i>
</a>
@endsection