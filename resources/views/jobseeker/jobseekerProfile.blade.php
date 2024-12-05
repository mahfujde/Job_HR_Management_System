@extends('jobseeker.mainJobseekermenu')

@section('headTitle')
Job seeker profile
@endsection

@section('mainCvcontent')

<div class="container">
	 <div class="row">
	 <div class="col-12">
	 	@foreach($coverpictures as $coverpicture)
       <div class="coverPic" style="background-image:url('/uploads/cover_picture/{{$coverpicture->cover_picture}}');">
      	@endforeach

      	<label class="custom-file">
	      	<a href="{{url('/coverPicture')}}">
           <span class="btn btn-light  coverpicEdit"><big><i class="fas fa-camera"></i>Edit Cover Photo</big></span>
            </a>
          </label>
	  

        @foreach($profilepictures as $profilepicture)
	     <img src="/uploads/profile_picture/{{$profilepicture->profile_picture}}" class="rounded-circle profilePic">
	     @endforeach
	      <label class="custom-file">
	      	<a href="{{url('/picturePicture')}}">
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
	  <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
	  <hr/>
	  </div>
	  </div>
	  
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>About me</h5>

	  @foreach($abouts as $about)
	   <p>
	   {{ $about->about_me }}
		</p>
		@endforeach


	  </div>
	  <div class="col-2">
	  <br/>
	  <a href="{{url('/about')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>
	  
	  
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Education</h5>
	  @foreach($educations as $education)
	   <p>
	   {{$education->education_info}}
		</p>
		@endforeach
	  </div>
	  <div class="col-2">
	   <br/>
	  <a href="{{url('/seekereducation')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>
	  
	 
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Contract info</h5>
	   <p class="">
	    {{ Auth::user()->contact }}
		</p>
	  </div>
	  <div class="col-2">
	   
	  </div>
	  </div>
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Email</h5>
	   <p class="">
	   {{ Auth::user()->email}}
		</p>
	  </div>
	  <div class="col-2">
	   
	  </div>
	  </div>
	  
	  <div class="row ml-5 mr-5">
	  <div class="col-10">
	  <h5>Website and Social link</h5>
	  @foreach($sociallinks as $sociallink)
	   <p>
	   {{$sociallink->facebook}}
		</p>
		<p>
	   {{$sociallink->twiter}}
		</p>
		<p>
	   {{$sociallink->linkedin}}
		</p>
		  @endforeach
	  </div>
	 <div class="col-2">
	   <br/>
	  <a href="{{url('/socialLink')}}" class="btn btn-outline-info rounded-circle">
	  <i class="far fa-edit"></i>
	  </a>
	  </div>
	  </div>


<br/><br/><br/><br/><br/><br/>
   
</div>
@endsection
