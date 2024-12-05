@extends('jobseeker.mainJobseekermenu')

@section('headTitle')

Job Search
@if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message') }}
       </div>
@endif

@endsection


@section('mainCvcontent')
<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
 
    <div class="s009">
      <form action="{{url('/job/serach/status')}}" method="post">
        @csrf
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
              <input id="search" type="text" name="keywords" placeholder="Type Keywords" required />
              <div class="icon-wrap">
                <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                  <i class="fas fa-search h4 text-body" style="margin-right: 30%; margin-top: 10px;"></i>
                </svg>
              </div>
            </div>
          </div>
          <div class="advance-search">
            <span class="desc" style="color: black;">ADVANCED SEARCH</span>
            <div class="row">
              <div class="input-field">
                <div class="input-select">
                  <select class="form-control form-control-sm" name="experience">
                    <option>Experience</option>
                    <option value="N/A">N/A</option>
                                                <option value="Fresher">Fresher</option>
                                                <option value="1 years">1 year</option>
                                                <option value="2 years">2 years</option>
                                                <option value="3 years">3 years</option>
                                                <option value="4 years">4 years</option>
                                                <option value="5 years">5 years</option>
                                                <option value="6 years">6 years</option>
                                                <option value="7 years">7 years</option>
                                                <option value="8 years">8 years</option>
                                                <option value="9 years">9 years</option>
                                                <option value="10 years">10 years</option>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select class="form-control form-control-sm" name="location">
                    <option>Location</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                           <option value="Sylhet">Sylhet</option>
                                           <option value="Khulna">Khulna</option>
                                           <option value="Barishal">Barishal</option>
                                           <option value="Mymensingh">Mymensingh</option>
                                           <option value="Rajshahi">Rajshahi</option>
                                           <option value="Rangpur">Rangpur</option>
                                           <option value="Gazipur">Gazipur</option>
                                           <option value="Narsingdi">Narsingdi</option>
                                           <option value="Manikganj">Manikganj</option>
                                           <option value="Munshiganj">Munshiganj</option>
                                           <option value="Narayanganj">Narayanganj</option>
                                           <option value="Tangail">Tangail</option>
                                           <option value="Gopalganj">Gopalganj</option>
                                           <option value="Kishoreganj">Kishoreganj</option>
                                           <option value="Faridpur">Faridpur</option> 
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select class="form-control form-control-sm" name="type">
                    <option>Job Type</option>
                     <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Contractual">Contractual</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row third">
              <div class="input-field">
                <div class="result-count">
                  <span></span></div>
                <div class="group-btn">
                 
                  <button class="btn-search">SEARCH</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="{{asset('js/extention/choices.js')}}}"></script>
    
  
@endsection