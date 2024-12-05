@extends('companypannel.mainCompanymenu')

@section('headTitle')

View Candidate List

@endsection


@section('mainContent')
<table class="table table-success table-striped table-bordered table-hover text-center ">
  <thead>
  <tr>
   <th style="width: 2%;">Sl No</th>
   <th style="width: 15%;">Name</th>
   <th style="width: 15%;">Email</th>
   <th style="width: 10%;">Contact No.</th>
   <th style="width: 8%;">View CV</th>
   <th style="width: 10%;">S/R</th>
   <th style="width: 20%;">Remarks</th>
   <th style="width: 5%;">Action</th>
  </tr>
  </thead>

 <tbody>
  @foreach($data as $candidate)
  <tr>
   <td>{{$loop->iteration}}</td>

   <form action="{{url('/update/job/status')}}" method="post">
    @csrf
   <td>{{$candidate->candidate_name}}</td>
   <td><input type="text" class="form-control form-control-sm" name="candidate_email" value="{{$candidate->candidate_email}}" class="table table-success" readonly></td>
   <td>{{$candidate->candidate_contact}}</td>
   <td><a href="{{url('/view/cv/'.$candidate->candidate_email)}}" class="table table-success"><i class="fa fa-eye">View</i></a></td>
   
     
     <td><select name="expected_salary" class="table table-success" style="color: black; font-weight: bold;">
       <option>{{$candidate->expected_salary}}</option>
       <option value="Selected">Selected</option>
       <option value="Rejected">Rejected</option>
     </select></td>

     <td><input type="text" name="remarks" class="table table-success"  value="{{$candidate->remarks}}"></td>

     <td><input type="submit" name="submit" value="Submit"></td>

   </form>

   
  @endforeach
 </tr>
  </tbody>
</table>

@endsection