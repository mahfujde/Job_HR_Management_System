@extends('companypannel.mainCompanymenu')

@section('headTitle')

View Candidate Review
@if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message') }}
       </div>
@endif

@endsection


@section('mainContent')
<table class="table table-success table-striped table-bordered table-hover text-center ">
  <thead>
  <tr>
   <th style="width: 5%;">Sl No</th>
   <th style="width: 10%;">Candidate Name</th>
   <th style="width: 10%;">Candidate Email</th>
   <th style="width: 5%;">Subject Knowlegde</th>
   <th style="width: 5%;">Presentation Skill</th>
   <th style="width: 5%;">Comunication Skill</th>
   <th style="width: 20%;">Remarks</th>
   <th style="width: 5%;">Action 1</th>
   <th style="width: 5%;">Action 1</th>
  <tr>
  </thead>

 <tbody>
   @foreach($data as $i)
   <form method="post" action="{{url('/candidate/review/remarks')}}">
   	@csrf
   	
  <tr>
   <td><input type="number" name="review_id" value="{{$i->review_id}}" style="width: 100%; background-color: none;" readonly class="form-control"></td>
   <td>{{$i->candidate_name}}</td>
   <td>{{$i->candidate_email}}</td>
   <td>{{$i->sub_knowledge}}</td>
   <td>{{$i->pre_skill}}</td>
   <td>{{$i->com_skill}}</td>

   @if(empty($i->remarks))
   <td><input type="text" name="remarks" placeholder="Enter your remarks" style="width: 100%;" class="form-control"></td>
   @else
   <td>{{$i->remarks}}</td>
   @endif

   @if($i->is_published==0)
   <td><input type="submit" name="submit" value="Publish" class="btn btn-success" style="width: 100%;"></td>
   @else
   <td><button class="btn btn-info disabled">Submitted</button></td>
   @endif
   </form>
   <td><a href="{{url('/candidate/review/delete/'.$i->review_id)}}" onclick="return confirm('Do you want to delete this data. If yes then click Ok button?')" class="btn btn-danger">Delete</a></td>
  </tr>

@endforeach

  </tbody>

@endsection