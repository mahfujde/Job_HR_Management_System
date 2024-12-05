@extends('companypannel.mainCompanymenu')

@section('headTitle')

Company Profile

@endsection

@section('mainContent')



    <div class="row">
	 <div class="col-12">
	 	@foreach($company_coverpictures as $company_coverpicture)
       <div class="coverPic" style="background-image:url('/uploads/companycover_picture/{{$company_coverpicture->cover_picture}}');">
      	@endforeach

      	<label class="custom-file">
	      	<a href="{{url('/companyCoverPicture')}}">
           <span class="btn btn-light  coverpicEdit"><big><i class="fas fa-camera"></i>Edit Cover Photo</big></span>
            </a>
          </label>
	  

    

       
       @foreach($company_profilepictures as $company_profilepicture)
	     <img src="/uploads/companyprofile_picture/{{$company_profilepicture->profile_picture}}" class="rounded-circle profilePic">
	     @endforeach
	      <label class="custom-file">
	      	<a href="{{url('/companyPicturePicture')}}">
           <span class="btn btn-light rounded-circle profileEdit"><big><i class="fas fa-camera"></i></big></span>
       </a>
          </label>
         </div>
	     </div>
	     </div>
    
	   <br/>
	   <br/>
	   <br/>
	  
	  <div class="row mt-4 ml-5">
	  <div class="col-12">
	  <h2>{{ Auth::guard('company')->user()->company_name }}</h2>
	  <hr/>
	  </div>
	  </div>
	  
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>About Company</h5>

	 @foreach($company_abouts as $company_about)
	   <p>
	   {{ $company_about->about_company }}
		</p>
		@endforeach


	  </div>
	  <div class="col-2">
	  <br/>
	  <a href="{{url('/company/about')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>
	  
	  
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Address</h5>
	  @foreach($company_addresses as $company_addresse)
	   <p>
	   {{$company_addresse->company_address}}
		</p>
		@endforeach
	  </div>
	  <div class="col-2">
	   <br/>
	  <a href="{{url('/companyaddress')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>
	  
	 
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Contract info</h5>
	   <p class="">
	    {{ Auth::guard('company')->user()->contact}}
		</p>
	  </div>
	  <div class="col-2">
	   
	  </div>
	  </div>
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Email</h5>
	   <p class="">
	  {{ Auth::guard('company')->user()->email }}
		</p>
	  </div>
	  <div class="col-2">
	   
	  </div>
	  </div>
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Website and Social link</h5>
	    @foreach($company_sociallinks as $company_sociallink)
	   <p>
	   {{$company_sociallink->facebook}}
		</p>
		<p>
	   {{$company_sociallink->twiter}}
		</p>
		<p>
	   {{$company_sociallink->linkedin}}
		</p>
		<p>
	   {{$company_sociallink->website}}
		</p>
		  @endforeach
	  </div>
	 <div class="col-2">
	   <br/>
	  <a href="{{url('/companySocialLink')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>


<br/><br/><br/><br/><br/><br/>
   

@endsection
