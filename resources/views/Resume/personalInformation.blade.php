@extends('Resume.mainResume')
@section('cvMainInformation')


  <!--personal information section start-->
      <!-- personal information start -->
       <div class="accordion" id="accordion2" role="tablist">
         <div class="card">
          <!-- personal Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_personal">
              <big>Personal Details</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
         <!-- personal Card header end -->
      
                    
                            <!-- personal Card body start -->
              <div id="collapsecall_personal" class="collapse">
                               <div class="card-body" data-parent="#accordion2">
                            
                                   
                       <form action="{{route('savePersonalInformation')}}" method="POST">
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
                  <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="fname">First Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="first_name" type="text" value="" placeholder="First Name" >
                                         </div>
                                     </div>
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="nationality">Nationality Person:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="nationality">
                                                        <option value="">select your country</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="India">India</option>
                                                    </select>
                                         </div>
                                     </div>
                                          
                                         
                                           <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="lname">Last Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="last_name" type="text" value="" placeholder="Last Name" >
                                         </div>
                                     </div>
                   
                   
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="nid">National Id No:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="national_id" type="text" value="" placeholder="National Id No" >
                                         </div>
                                     </div>
                                            
                      
                       <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="father_name">Father's Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="father_name" type="text" value="" placeholder="Father's Name" >
                                         </div>
                                     </div>
                      
                      
                      <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="bid">Birth Id No:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="bath_id" type="text" value="" placeholder="Birth Id No" >
                                         </div>
                                     </div>
                      
                      
                       <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="mother_name">Mother's Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="mother_name" type="text" value="" placeholder="Mother's Name" >
                                         </div>
                                     </div>
                      
                      
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="passport">Passport Number:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="passport" type="text" value="" placeholder="Passport Number" >
                                         </div>
                                     </div>
                      
                      <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="bdate">Date of Birth:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="bdate" type="date" value="" placeholder="Date of Birth" >
                                         </div>
                                     </div>
                      
                      
                         <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="mobile">Mobile Number:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="mobile_number" type="text" value="" placeholder="Mobile Number" >
                                         </div>
                                     </div>
                                            
                                          <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="gender">Gender:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="gender">
                                                        <option value=""></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                         </div>
                     </div>   
                   
                   
                   
                   
                      
                                           
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="religion">Religion:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="religion">
                                       <option value=""></option>
                                    <option value="Islam">Islam</option>
                                <option value="Buddhism">Buddhism</option>
                        <option value="Christianity">Christianity</option>
                            <option value="Christian">Christian</option>
                             <option value="Others">Others</option>
                                                    </select>
                                         </div>
                                            </div>    
                   
                   
                   
                      <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="gender">Marital Status:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="mstatus">
                                                        <option value=""></option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                    </select>
                                         </div>
                                        </div> 
                                            
                                         
                                       
                                            
                                           <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="email">Email:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="email" type="text" value="" placeholder="email" >
                                         </div>
                                     </div>
                
                        
                                           
                                            
                     
                    <div class="col-md-6 form-group">
                    <div class="col-md-7">
                     <input class="form-control btn btn-success" type="submit"  name="save"  value="Save Personal Information">
                                        </div>
                                         </div>
                                    </form>
                                   </div>  
                                   </div>
                                     </div>
                                </div>
                 <!-- End personnel information -->
                        
            
            <!-- address section start -->
                        <div class="card">
                            <!-- address Card header start -->
                             <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_address">
              <big>Address Details</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
                 <!-- address Card header end -->  
                              
                
                <!-- address Card body start--> 
                             <div id="collapsecall_address" class="collapse">
                               <div class="card-body" data-parent="#accordion2">             
                               
                                     <form action="{{route('saveaddress')}}" method="post">
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
                                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="pre_address">Present Address:</label>
                                        <div class="col-md-7">
                                        <textarea class="form-control" name="present_address"  value="" placeholder="Present Address:" ></textarea>
                                         </div>
                                     </div>
                   
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="par_address">Parmanent Address:</label>
                                        <div class="col-md-7">
                                        <textarea class="form-control" name="parmanent_address" value="" placeholder="Parmanent Address:" ></textarea>
                                         </div>
                                     </div>
                    
                    <div class="col-md-6 form-group">
                    
                                        <div class="col-md-7">
                     <input class="form-control btn btn-success" type="submit"  name="save"  value="Save Address">
                                        </div>
                    </div>
                                     
                    
                   
                   </div>
                   </form>
                   </div>
                   </div>
                  <!-- address details end  --> 
                   
          <!-- application and career summary section start -->
                        <div class="card">
                            <!--  Card header start -->
                             <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_career">
              <big>Career Summary</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
                 <!--Card header end -->  
                              

                                <!-- Card body start --> 
                             <div id="collapsecall_career" class="collapse">
                               <div class="card-body" data-parent="#accordion2"> 
                 
                                  <form action="{{route('objective')}}" method="post">
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
                                      <label class="col-md-5 control-label" for="objective">Career Objective:</label>
                                        <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="objective"  value="" ></textarea>
                                         </div>
                                     </div>
                                
                   
                   <div class="col-md-6 form-group">
                    
                                        <div class="col-md-7">
                     <input class="form-control btn btn-success" type="submit"  name="save"  value="Save Career Objective">
                                        </div>
                    </div>
                                          
                                       
                                            
                   
                   </div>
                   </form>
                   </div>
                   </div>
                 
                                         
@endsection