@extends('adminPannel.mainAdmin')



<!-- title head-->
@section('headTitle')

Job Seekers Information

@endsection


<!-- job seekers information table  -->
@section('adminMainContent')

<table class="table table-info table-striped table-bordered table-hover text-center ">
	<thead>
		
	<tr>
	 <th>SI No</th>	
	 <th>First Name</th>
	 <th>Last Name</th>
	 <th>Contract</th>
	 <th>Email</th>
	 </tr>

	</thead>

	<tbody>
	@foreach($jobseekers as $jobseeker)
	<tr>
	 <td>{{$loop->iteration}}</td>
	 <td>{{$jobseeker->first_name}}</td>
	 <td>{{$jobseeker->last_name}}</td>
	 <td>{{$jobseeker->contract}}</td>
	 <td>{{$jobseeker->email}}</td>
	</tr>

	</tbody>
	@endforeach

	@endsection



