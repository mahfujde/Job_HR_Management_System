@extends('jobseeker.mainJobseekermenu')

@section('headTitle')

Job Tracking Status
@if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message') }}
       </div>
@endif

@endsection


@section('mainCvcontent')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
  <div class="row justify-content-center">
  	<!-- Encrypt URL Kora Lagbe Reference site: https://stackoverflow.com/questions/41276128/how-to-encrypt-laravel-5-2-url-or-routes-->
                        <div class="col-12 col-md-10 col-lg-8">
                            <form action="{{url('/job/tracking/status')}}" class="card card-sm" method="post">
                              @csrf
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" name="identification_no" placeholder="Enter your Job identification Tracking No.">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
              @if(count($data))
              @foreach($data as $i)
              
              @if($i->expected_salary=='Selected')
              <h1 style="text-align: center; margin-top: 130px; color: green;">{{$i->expected_salary}}</h1>
              @else
              <h1 style="text-align: center; margin-top: 130px; color: red;">{{$i->expected_salary}}</h1>
              @endif
              <h2 style="text-align: center;">Total Applied:{{$count}}</h2>
              <h2 style="text-align: center;">Remarks:{{$i->remarks}}</h2>
              @endforeach
              @else
                
              @endif


</div>


@endsection