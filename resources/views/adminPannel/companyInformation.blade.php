@extends('adminPannel.mainAdmin')



<!-- title head-->
@section('headTitle')

Companys Information

@endsection


<!-- Company information table -->
@section('adminMainContent')

<table class="table table-success table-striped table-bordered table-hover text-center ">
	<thead>
	<tr>
	 <th>Sl No</th>
	 <th>Job Title</th>
	 <th>Vacancy No</th>
	 <th>Deadline</th>
	 <th>Location</th>
	<tr>
	</thead>
	@foreach($companys as $company)
	<tr>
	 <td>{{$loop->iteration}}</td>
	 <td>{{$company->company_name}}</td>
	 <td>{{$company->contract}}</td>
	 <td>{{$company->email}}</td>
	 <td>location</td>
	</tr>

	</tbody>
	@endforeach

	@endsection