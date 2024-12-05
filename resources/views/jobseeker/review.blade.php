@extends('jobseeker.mainJobseekermenu')

@section('headTitle')

View Candidate Review
@if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message') }}
       </div>
@endif

@endsection


@section('mainCvcontent')
<table class="table table-success table-striped table-bordered table-hover text-center ">
  <thead>
  <tr>
   <th style="width: 5%;">Sl No</th>
   <th style="width: 5%;">Company Email</th>
   <th style="width: 2%;">Subject Knowledge</th>
   <th style="width: 2%;">Presentation Skill</th>
   <th style="width: 2%;">Communication Skill</th>
   <th style="width: 2%;">Remarks</th>
   <th style="width: 2%;">Date</th>
  <tr>
  </thead>

 <tbody>
 	@foreach($data as $i)
  <tr>
   <td>{{$loop->iteration}}</td>
   <td>{{$i->company_email}}</td>
  
   <td>{{$i->sub_knowledge}}</td>
   <td>{{$i->pre_skill}}</td>
   <td>{{$i->com_skill}}</td>
   <td>{{$i->remarks}}</td>
   <td>{{$i->updated_at}}</td>
 </tr>
   @endforeach
  </tbody>


@endsection