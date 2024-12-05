@extends('adminPannel.mainAdmin')



<!-- title head-->
@section('headTitle')

Govt job information

@endsection


<!-- govt job information  -->
@section('adminMainContent')

<div class="card">
<div class="card-header text-center bg-">
<h4>Add Govt Job Form</h4>

</div>
	<div class="card-body">
	 <form action="{{route('savegovtjob')}}" method="POST" enctype="multipart/form-data"  style="margin-left:20px"  >
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
                     <label class="col-md-2 control-label" for="aname">Agency Name:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="agency_name" type="text" placeholder="" value="{{old('agency_name')}}" >
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="jtitle">Job Title:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="job_title" type="text" placeholder="" value="{{old('job_title')}}"  >
                        
                    </div>
                </div>
				
				<div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="vno">Vacancy No:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="vacancy_no" type="" placeholder="" value="{{old('vacancy_no')}}" >
                        
                    </div>
                </div>
				
				 <div class="col-md-12 form-group">
                 <label class="col-md-2 control-label" for="jdescription">Description:</label>
                  <div class="col-md-10">
                   <textarea class="form-control" name="description" placeholder="" value="{{old('description')}}" ></textarea>
                        </div>
                            </div>
				
				<div class="col-md-12 form-group">
                 <label class="col-md-2 control-label" for="picture">Picture:</label>
                  <div class="col-md-10">
				<div class="custom-file">
        
      <input type="file" class="custom-file-input" id="imgFile" name="picture" value="{{old('picture')}}">
      <label class="custom-file-label" for="imgFile">Choose file</label>
    </div>
		</div>	
</div>

                 <div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="pdate">Published Date:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="publish_date" type="date" placeholder="" value="{{old('publish_date')}}" >
                        
                    </div>
                </div>
				
				
				<div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="deadline">Deadline:</label>

                    
                    <div class="col-md-10">
                    <input class="form-control" name="deadline" type="date" placeholder="" value="{{old('deadline')}}">
                   
               
                        
                    </div>
                </div>


                                 <div class="col-md-12 form-group">
										
                                        <div class="col-md-10">
										 <input class="form-control btn btn-success" type="submit"  name="submit"  value="Save job Information ">
                                        </div>
										</div>
                                     
										
										
                                       
									 


</div>
</form>	
</div>	
		</div>	

	@endsection