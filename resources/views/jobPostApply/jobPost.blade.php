@extends('companypannel.mainCompanymenu')

@section('headTitle')
Jop Post Dashboard
@endsection


@section('mainContent')
<div class="card m-3">
	<div class="card-body mr-2 mt-3 mb-3">
	 <form action="{{url('/save/job/post')}}" method="post" style="margin-left:10px">
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
         <div class="row">
									
				
               <div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="job_title">Job Title:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="job_title" type="text" placeholder="" >
                      </div>
                </div>
				
				
				<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="job_description">Job Description:</label>
                  <div class="col-md-12">
                   <textarea class="form-control" name="job_description" value="" placeholder="" ></textarea>
                        </div>
                            </div>
				
				 
				
				<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="address">Address:</label>
                  <div class="col-md-12">
                   <textarea class="form-control" name="address" value="" placeholder="" ></textarea>
                        </div>
                            </div>
							
							<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="job_responsibilities">Job Responsibilities:</label>
                  <div class="col-md-12">
                   <textarea class="form-control" name="job_responsibilities" value="" placeholder="" ></textarea>
                        </div>
                            </div>
							
					
					<div class="col-md-12 form-group">
                 <label class="col-md-2 control-label" for="job_location">Job Location:</label>
                 <div class="col-md-12">
                     <select class="form-control" name="job_location">
                                            <option value="">------</option> 
<option value="Dhaka">Dhaka</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                           <option value="Sylhet">Sylhet/option>
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
							
							
					<div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="salary">Salary:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="salary" type="text" placeholder="" >    
                    </div>
                </div>		
					
					<div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="employment_status">Employment Status:</label>
                     <div class="col-md-12">
                     <select class="form-control" name="employment_status">
                                                  <option value="">------</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Contractual">Contractual</option>
                                                    </select>
                </div>
              </div>
				
				
				<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="educational_requirements">Educational Requirements:</label>
                  <div class="col-md-12">
                   <textarea class="form-control" name="educational_requirements" value="" placeholder="" ></textarea>
                        </div>
                            </div>
							
					<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="experience_requirements">Experience Requirements:</label>

                 <div class="col-md-12">
                     <select class="form-control" name="experience_requirements">
                                                  <option value="">------</option>
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


                            <div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="key_skills">Key Skills :</label>
                  <div class="col-md-12">
                   <textarea class="form-control" name="key_skills" value="" placeholder="" ></textarea>
                        </div>
                            </div>
				
				
				<div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="vacancy_no">Vacancy No:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="vacancy_no" type="text" placeholder="" >   
                    </div>
                </div>
				
				
				

                 <div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="curcular_date">Circular Date:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="curcular_date" type="date" placeholder="" >
                        
                    </div>
                </div>
				
				
				<div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="deadline">Deadline:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="deadline" type="date" placeholder="" >  
                    </div>
                </div>


                                 
                                        <div class="col-md-3 ml-5">
										 <input class="form-control btn btn-success" type="submit"  name="save"  value="Save">
                                        </div>
										
										<div class="col-md-3 mr-5">
										 
                                        </div>
										
										
										</div>
                                  </div>
                               </form>	
                          </div>	
                        </div>	
                        <br/>
                        <br/>	
                        @endsection