@extends('companypannel.mainCompanymenu')

@section('headTitle')

View Job Post Pannel

@endsection


@section('mainContent')
<table class="table table-success table-striped table-bordered table-hover text-center ">
  <thead>
  <tr>
   <th>Sl No</th>
   <th>Job Title</th>
   <th>Descripton</th>
   <th>Vacancy No</th>
   <th>Deadline</th>
   <th>Delete</th>
  <tr>
  </thead>

 <tbody>
   @foreach($job_posts as $job_post)
  <tr>
   <td>{{$loop->iteration}}</td>
   <td>{{$job_post->job_title}}</td>
   <td>{{$job_post->job_description}}</td>
   <td>{{$job_post->vacancy_no}}</td>
   <td>{{$job_post->deadline}}</td>
   <td><a href="{{url('/job_post/delete/'.$job_post->job_id)}}" class="btn btn-danger">Delete</a></td>
  </tr>
@endforeach
  </tbody>
  

@endsection