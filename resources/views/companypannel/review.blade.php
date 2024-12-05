@extends('companypannel.mainCompanymenu')

@section('headTitle')
Candidate Review Form
@endsection


@section('mainContent')
<div class="card m-3">
	<div class="card-body mr-2 mt-3 mb-3">
	 <form action="{{url('/candidate/review/post')}}" method="post" style="margin-left:10px">
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
                     <label class="col-md-12 control-label" for="job_title">Candidate Name</label>
                    <div class="col-md-12">
                    <input class="form-control" name="candidate_name" type="text" placeholder="Enter Candidate Name" >
                      </div>
                </div>
				
				
				        <div class="col-md-12 form-group">
                     <label class="col-md-12 control-label" for="company_name">Candidate Email:</label>
                    <div class="col-md-12">
                   <input class="form-control" name="candidate_email" type="email" placeholder="Enter Candidate Email">   
                    </div>
                </div>
				
			
							
							<div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="job_responsibilities">Subject Knowledge</label>
                  <div class="col-md-12">
                    <select class="form-control" name="sub_knowledge">
                      <option>--Select any from here--</option>
                      <option value="1">Below Average</option>
                      <option value="2">Average</option>
                      <option value="3">Good</option>
                      <option value="4">Very Good</option>
                      <option value="5">Excellent</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="job_responsibilities">Presentation Skill</label>
                  <div class="col-md-12">
                    <select class="form-control" name="pre_skill" required>
                      <option>--Select any from here--</option>
                      <option value="1">Below Average</option>
                      <option value="2">Average</option>
                      <option value="3">Good</option>
                      <option value="4">Very Good</option>
                      <option value="5">Excellent</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-12 form-group">
                 <label class="col-md-12 control-label" for="job_responsibilities">Communication Skill</label>
                  <div class="col-md-12">
                    <select class="form-control" name="com_skill">
                      <option>--Select any from here--</option>
                      <option value="1">Below Average</option>
                      <option value="2">Average</option>
                      <option value="3">Good</option>
                      <option value="4">Very Good</option>
                      <option value="5">Excellent</option>
                    </select>
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