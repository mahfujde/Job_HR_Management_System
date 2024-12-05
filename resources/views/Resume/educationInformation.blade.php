@extends('Resume.mainResume')
@section('cvMainInformation')

             <!-- accordion link id -->
       <div class="accordion" id="accordion2" role="tablist">
	   
	   <!--education section start-->
         <div class="card">
          <!-- education Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_education">
              <big>Academic Qualification</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- education Card header end -->
			
                    
                            <!-- education Card body start -->
							<div id="collapsecall_education" class="collapse">
                               <div class="card-body" data-parent="#accordion2">

  <form action="{{route('educationInformation')}}"  method="post"  id="education_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
          @endif
         <label class="col-md-12 control-label" for="education"><b> Add Academic information</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="education_table">
                <thead>
                    <tr>
                        <th width="20%">Education Title</th>
                        <th width="25%">Major Subject</th>
                        <th width="20%">Institution's Name</th>
                        <th width="15%">Result</th>
                        <th width="15%">Pass Year</th>
                        <th width="5%">Add</th>
                      
                    </tr>
                    
               </thead>

               <tbody class="education-table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="7">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                       
                    </tr>
              </tfoot>
           </table>
        </form>  
        </div>
      </div>
<!--javascript code start for education field -->
  <script>
$(document).ready(function(){

 var count = 1;

 education_dynamic_field(count);

 function education_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><select name="level_education[]" class="form-control"><option value="ssc">SSC</option><option value="hsc">HSC</option><option value="bsc">BSc</option><option value="pse">PEC</option><option value="jsc">JSC</option><option value="honors">Honors</option><option value="diploma">Diploma</option><option value="open">Open</option><option value="bms">BMS</option><option value="alim">Alim</option><option value="fazil">Fazil</option></select></td>';

        
        html += '<td><input class="form-control" name="major_subject[]" id="major_subject" type="text" value=""></td>';
        html += '<td><input class="form-control" name="institution_name[]" id="institution_name" type="text" value=""></td>';
        html += '<td><input class="form-control" name="result[]" id="result" type="text"></td>';
        html += '<td> <input class="form-control" name="pass_year[]" id="pass_year" type="text" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_education" id="remove_education" class="form-contorl btn btn-danger "><i class="fas fa-minus"></i></button></td></tr>';
            $('.education-table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_education" id="add_education" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('.education-table').html(html);
        }
 }

 $(document).on('click', '#add_education', function(){
  count++;
  education_dynamic_field(count);
 });

 $(document).on('click', '#remove_education', function(){
  count--;
  $(this).closest("tr").remove();
 });

 
});
</script>    
<!--javascript code end for education field -->                        
							  
								  <!-- education section end -->

								  
				<!-- Thesis and Projects section start -->				  
         <div class="card">
          <!-- Thesis and Projects Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_project">
              <big>Thesis and Projects</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Thesis and Projects Card header end -->
			
                    
                            <!-- Thesis and Projects Card body start -->
							<div id="collapsecall_project" class="collapse">
                               <div class="card-body" data-parent="#accordion2">



      <form action="{{route('ThesisProject')}}"  method="post"  id="project_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <label class="col-md-12 control-label" for="thsise"><b>Thesis/Project</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="">
                <thead>
                    <tr>
                        <th width="75%">Thesis/Project(Title)</th>
                        <th width="20%">Date(year)</th>
                        <th width="5%">Add</th>
                        
                    </tr>
                    
               </thead>

               <tbody id="project_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="3">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>  
        </div>
      </div>
    </div>
<!--javascript code start for project/thesis field -->
<script>
$(document).ready(function(){

 var count = 1;

 project_dynamic_field(count);

 function project_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="title[]" id="title" type="text" value=""></td>';
        html += '<td><input class="form-control" name="date[]" id="date" type="text" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_project" id="remove_project" class="form-contorl btn btn-danger "><i class="fas fa-minus"></i></button></td></tr>';
            $('#project_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_project" id="add_project" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#project_table').html(html);
        }
 }

 $(document).on('click', '#add_project', function(){
  count++;
  project_dynamic_field(count);
 });

 $(document).on('click', '#remove_project', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>  
<!--javascript code end for project/thesis field -->
<!--end project/thesis section -->
							   
								  
						<!-- Professional Expertise section start-->
         <div class="card">
          <!-- Professional Expertise Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_expertise">
              <big>Professional Expertise/Skills</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Professional Expertise Card header end -->
			
                    
                            <!-- Professional Expertise Card body start -->
							<div id="collapsecall_expertise" class="collapse">
                               <div class="card-body" data-parent="#accordion2">


			<form action="{{route('professionalExpertise')}}"  method="post"  id="skill_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <label class="col-md-12 control-label" for="reference"><b>Add Professional Expertise/Skills</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="95%"> Professional Expertise/Skills</th>
                        <th width="5%">Add</th>
                    </tr>
                    
               </thead>

               <tbody id="skill_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>
   </div>
  </div>
</div>

<!--javascript code start for skills field -->
<script>
$(document).ready(function(){

 var count = 1;

 skill_dynamic_field(count);

 function skill_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><textarea class="form-control" name="skill[]" value=""  rows="1" placeholder="" required></textarea></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_skill" id="remove_skill" class="form-contorl btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
            $('#skill_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_skill" id="add_skill" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#skill_table').html(html);
        }
 }

 $(document).on('click', '#add_skill', function(){
  count++;
  skill_dynamic_field(count);
 });

 $(document).on('click', '#remove_skill', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>
 <!--javascript code end for skills field -->
      <!-- Professional Expertise section end-->
								  

								  
								  
					<!--Training and certifications section start-->
         <div class="card">
          <!-- Training and certifications Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_traning">
              <big>Training and Certifications</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Training and certifications Card header end -->
			
                    
                            <!-- Training and certifications Card body start -->
							<div id="collapsecall_traning" class="collapse">
                               <div class="card-body" data-parent="#accordion2">
							 
      <form action="{{route('TrainingCertification')}}"  method="post"  id="traning_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <label class="col-md-12 control-label" for="reference"><b>Add Training and Certifications</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="30%">Training Title</th>
                        <th width="25%">Institution's Name</th>
                        <th width="30%">Training Location</th>
                        <th width="10%">Duration</th>
                        <th width="5%">Add</th>
                    </tr>
                    
               </thead>

               <tbody id="traning_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="5">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>
   </div>
  </div>
</div>

 <!--javascript code start for traning field -->
<script>
$(document).ready(function(){

 var count = 1;

 traning_dynamic_field(count);

 function traning_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="training_title[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="training_institution[]" type="text" value=""></td>';
        html += '<td><textarea class="form-control" name="training_location[]" rows="1"  value=""></textarea></td>';
        html += '<td><input class="form-control" name="training_duration[]" type="text" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_traning" id="remove_traning" class="form-contorl btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
            $('#traning_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_traning" id="add_traning" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#traning_table').html(html);
        }
 }

 $(document).on('click', '#add_traning', function(){
  count++;
  traning_dynamic_field(count);
 });

 $(document).on('click', '#remove_traning', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>
 <!--javascript code end for traning field -->
									<!-- Training and certifications section end -->
									




		
									
		<!--Language Proficiency section start-->
         <div class="card">
          <!-- Language Proficiency Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_language">
              <big>Language Proficiency</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Language Proficiency Card header end -->
			
                    
                            <!-- Language Proficiency Card body start -->
							<div id="collapsecall_language" class="collapse">
                               <div class="card-body" data-parent="#accordion2">
							 <form action="{{route('Language')}}"  method="post"  id="language_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <label class="col-md-12 control-label" for="language"><b>Add Language Information</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="35%">Language</th>
                        <th width="20%">Reading</th>
                        <th width="20%">Writing</th>
                        <th width="20%">Speaking</th>
                        <th width="5%">Add</th>
                    </tr>
                    
               </thead>

               <tbody id="language_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="5">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>
   </div>
  </div>
</div>

 <!--javascript code start for language field -->
<script>
$(document).ready(function(){

 var count = 1;

 language_dynamic_field(count);

 function language_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="language[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="reading[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="writing[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="speaking[]" type="text" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_language" id="remove_language" class="form-contorl btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
            $('#language_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_language" id="add_language" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#language_table').html(html);
        }
 }

 $(document).on('click', '#add_language', function(){
  count++;
  language_dynamic_field(count);
 });

 $(document).on('click', '#remove_language', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>
 <!--javascript code end for language field -->

<!--Language Proficiency section end-->
									

									
</div>	




@endsection

