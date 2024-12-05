@extends('jobseeker.mainJobseekermenu')

@section('headTitle')
Job seeker dashboard
@endsection

@section('mainCvcontent')

<table class="table table-info table-striped table-bordered table-hover text-center ">
	<thead>
	<tr>
	 <th>Company Name</th>
	 <th>Job Title</th>
	 <th>Tacking Id</th>
	 <th>Dead Line</th>
	<tr>
	</thead>
	
	@foreach($data as $i)
	<tbody class="bodycontent">
	
	<tr>
	 <td>{{$i->company_name}}</td>
	 <td>{{$i->job_title}}</td>
	 <td>{{$i->identification_no}}</td>
	 <td>{{$i->deadline}}</td>
	 
	<tr>

	</tbody>
	@endforeach
   </table>	

   @endsection