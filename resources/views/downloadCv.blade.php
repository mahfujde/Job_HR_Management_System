<!DOCTYPE html>
<html lang="en">
<head>

   <!--   css  -->
  <link rel="stylesheet" type="text/css" href="css/fontEnd/download.css">

  <!--  bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
  
</head>

<body style= "font-family Times New Roman,serif;">
			   <br/>
			   <br/>
<div class="row">
<div class="col-6">
<p class="ml-2 mb-1 name">
<b>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</b>
   @foreach($addresses as $addresse)
   <p class="ml-2 mb-1 bodycontent">{{$addresse->present_address}}.</p>
  @endforeach
   <p class="ml-2 mb-1 bodycontent">{{ Auth::user()->email }}</p>
   <p class="ml-2 mb-1 bodycontent">{{ Auth::user()->contact}}</p>	
</p>
</div>
<div class="col-6">

<div>
 @foreach($pictures as $picture)
	     <img src="uploads/cvimage/{{$picture->photo}}" class="imgbox">
	     @endforeach
</div>	
</div>
</div>

<div class="row">
<div class="col-12">
@if(!empty($objectives))
<p class="headtitle">Carrer Objective:</p>
@foreach ($objectives as $objective)
<p class="bodycontent ml-2">{{ $objective->objective}}</p>	
@endforeach
@endif		   
</div>
</div>

  <div class="row">
  <div class="col-12">
  	@if(!empty($academicinformations))
  <p class="headtitle">Academic Qualification:</p>
	
	<table class="table table-bordered  text-center ">
	<thead>
	<tr>
	 <th>Education Title</th>
	 <th>Major Group/Subject</th>
	 <th>Institution's Name</th>
	 <th>Result</th>
	 <th>Passing Year</th>
	</tr>
	</thead>
	
	<tbody class="bodycontent">
	@foreach ($academicinformations as $academicinformation)	
	<tr>
	 <td>{{ $academicinformation->level_education}}</td>
	 <td>{{ $academicinformation->major_subject}}</td>
	 <td>{{ $academicinformation->institution_name}}</td>
	 <td>{{ $academicinformation->result}}</td>
	 <td>{{ $academicinformation->pass_year}}</td>
	</tr>
		@endforeach
      @endif
	</tbody>
   </table>	
  </div>
  </div>



<div class="row">
<div class="col-12">
	@if(!empty($workexperiences))
<p class="headtitle">Work Experience:</p>
	
	<table class="table table-bordered text-center ">
	<thead>
	<tr>
	 <th>Company Name</th>
	 <th>Designation</th>
	 <th>Responsibilities</th>
	 <th>From</th>
	 <th>To</th>
	</tr>
	</thead>
	<tbody class="bodycontent">
		@foreach($workexperiences as $workexperience)
	<tr>
	 <td>{{$workexperience->company_name}}</td>
	 <td>{{$workexperience->designation}}</td>
	 <td>{{$workexperience->responsibilities}}</td>
	 <td>{{$workexperience->join_date}}</td>
	 <td>{{$workexperience->resign_date}}</td>


	</tr>
		@endforeach
		@endif
	</tbody>
</table>	
</div>
</div>


<div class="row">
<div class="col-12">
	@if(!empty($thesis_projects))
<p class="headtitle">Project and Thesis:</p>
@foreach($thesis_projects as $thesis_project)
<p class="bodycontent">{{$thesis_project->title}}.{{$thesis_project->date}}</p>
@endforeach
@endif
</div>
</div>



	
<div class="row">
<div class="col-12">
	@if(!empty($training_certifications))
 <p class="headtitle">Traning and certification:</p>
	
	<table class="table table-bordered text-center ">
	<thead>
	<tr>
	 <th>Training Title</th>
	 <th>Training Institution</th>
	 <th>Training Location</th>
	 <th>Training Duration</th>
	</tr>
	</thead>
	<tbody class="bodycontent">
		@foreach($training_certifications as $training_certification)
	<tr>
	 <td>{{$training_certification->training_title}}</td>
	 <td>{{$training_certification->training_institution}} </td>
	 <td>{{$training_certification->training_location}} </td>
	 <td>{{$training_certification->training_duration}}</td>
	</tr>
		@endforeach
	@endif
	</tbody>
	
</table>	
</div>
</div>

		
<div class="row">
<div class="col-12">
@if(!empty($professional_expertises))
<p class="headtitle">Professional Expertise/Skills:</p>
 @foreach($professional_expertises as $professional_expertise)
 <ul class="bodycontent">
 <li><b>{{$loop->iteration}}.</b>{{$professional_expertise->skill}}</li>
 @endforeach
 @endif
 </ul>
</div> 
</div>
									
									

<div class="row">
<div class="col-12">
	@if(!empty($languages))
<p class="headtitle">Language proficiency:</p>
	
	<table class="table table-bordered text-center ">
	<thead>
	<tr>
	 <th>Language</th>
	 <th>Writing</th>
	 <th>Reading</th>
	 <th>Speaking</th>
	</tr>
	</thead>
	<tbody class="bodycontent">
		@foreach($languages as $language)
	<tr>
	 <td>{{$language->language}}</td>
	 <td>{{$language->writing}}</td>
	 <td>{{$language->reading}}</td>
	 <td>{{$language->speaking}}</td>
	</tr>
		@endforeach
		@endif
	</tbody>
</table>	
</div>
</div>



<div class="row">
<div class="col-12">
	@if(!empty($extra_activities))
<p class="headtitle">Extra curricular activities:</p>
	
	<table class="table table-bordered text-center ">
	<thead>
	<tr>
	 <th>Title</th>
	 <th>Details</th>
	 <th>Date</th>
	 <th>Location</th>
	</tr>
	</thead>
	<tbody class="bodycontent">
		@foreach($extra_activities as $extra_activitie)
	<tr>
	 <td>{{$extra_activitie->extra_title}}</td>
	 <td>{{$extra_activitie->extra_details}}</td>
	 <td>{{$extra_activitie->edate}}</td>
	 <td>{{$extra_activitie->location}}</td>
	</tr>
		@endforeach
		@endif
	</tbody>
</table>	
</div>
</div>

  <div class="row">
<div class="col-12">
	@if(!empty($personal_informations))
<p class="headtitle">Personal Details:</p>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="70%" style="word-break: break-all;">
                                        
          <tbody class="bodycontent">
         	   @foreach($personal_informations as $personal_information)
                    <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Father's Name </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->father_name}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Mother's Name </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->mother_name}}</td>
                     </tr>


                      <tr class="ml-2">
                      	@foreach($addresses as $addresse)
                    <td width="22%" align="left" style="padding-left:5px;">Parmanent Address
                    </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left" class="">{{$addresse->parmanent_address}}.</td>
                    @endforeach
                     </tr>


                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Mobile: </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->mobile_number}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Date of Birth: </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->bdate}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Gender </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->gender}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Religion </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->religion}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Marital Status </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->mstatus}}</td>
                     </tr>

                     <tr class="ml-2">
                    <td width="22%" align="left" style="padding-left:5px;">Nationality Person </td>
                     <td width="2%" align="center">:</td>
                    <td width="46%" align="left">{{$personal_information->nationality}}</td>
                     </tr>
                     @endforeach
                     @endif
                                        </tbody>
                                    </table>

</div> 
</div>
<br/>	

<div class="row">
<div class="col-12">

	@if(count($references))
<p class="headtitle">References:</p>
</div>
</div>
<div class="row">
	@foreach($references as $reference)

<div class="col-6">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="word-break:break-all;">
    <tbody class="bodycontent">
  
       <tr>
       <td width="25%" align="left" style="padding-left:5px;">Name</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->name}}</td>
       </tr>

              <tr>
       <td width="25%" align="left" style="padding-left:5px;">Designation</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->designation}}</td>
       </tr>

              <tr>
       <td width="25%" align="left" style="padding-left:5px;">Organization</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->organization}}</td>
       </tr>

              <tr>
       <td width="25%" align="left" style="padding-left:5px;">Email</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->email}}</td>
       </tr>

              <tr>
       <td width="25%" align="left" style="padding-left:5px;">Contract</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->mobile}}</td>
       </tr>

              <tr>
       <td width="25%" align="left" style="padding-left:5px;">Relation</td>
       <td width="2%" align="center">:</td>
       <td width="73%" align="left">{{$reference->relation}}</td>
       </tr>

           </tbody>
         </table>
     </div>
     @endforeach
         @endif
</div>	                                     
									 

</body>
</html>