<!DOCTYPE html>
<html lang="en">
<head>

<title>job HR management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

 <!--   css  -->

   <link rel="stylesheet" type="text/css" href="/css/fontEnd/resume.css">

  <!--  bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
  
   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  
 <link rel="stylesheet" href="\icon\fontawesome-free-5.13.0-web\css\all.css">

  
</head>
<body style= "font-family Times New Roman,serif;background-color:#E5E4E2;">

<div class="container mt-5">
  <div class="card updateform">
    <div class="card-body">
      <label class="col-md-5 control-label" for="fname"><b>Update Personal Information</b></label>
      <hr/>
     <form action="{{url('/update/personalinfo')}}" method="POST">
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

                       @foreach($personal_informations as $personal_information)
                                  <div class="ml-5">
                                    <div class="row">
                  <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="fname">First Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="first_name" type="text" value="{{$personal_information->first_name}}" >
                                         </div>
                                     </div>
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="nationality">Nationality Person:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="nationality">
                                                        <option value="{{$personal_information->nationality}}">{{$personal_information->nationality}}</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="India">India</option>
                                                    </select>
                                         </div>
                                     </div>
                                          
                                         
                                           <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="lname">Last Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="last_name" type="text" value="{{$personal_information->last_name}}" >
                                         </div>
                                     </div>
                   
                   
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="nid">National Id No:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="national_id" type="text" value="{{$personal_information->national_id}}" >
                                         </div>
                                     </div>
                                            
                      
                       <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="father_name">Father's Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="father_name" type="text" value="{{$personal_information->father_name}}" >
                                         </div>
                                     </div>
                      
                      
                      <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="bid">Birth Id No:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="bath_id" type="text" value="{{$personal_information->bath_id}}" >
                                         </div>
                                     </div>
                      
                      
                       <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="mother_name">Mother's Name:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="mother_name" type="text" value="{{$personal_information->mother_name}}" >
                                         </div>
                                     </div>
                      
                      
                   <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="passport">Passport Number:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="passport" type="text" value="{{$personal_information->passport}}" >
                                         </div>
                                     </div>
                      
                      <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="bdate">Date of Birth:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="bdate" type="text" value="{{$personal_information->bdate}}" >
                                         </div>
                                     </div>
                      
                      
                         <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="mobile">Mobile Number:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="mobile_number" type="text" value="{{$personal_information->mobile_number}}" >
                                         </div>
                                     </div>
                                            
                                          <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="gender">Gender:</label>
                                        <div class="col-md-7">
                                        <select class="form-control" name="gender">
                                                        <option value="{{$personal_information->gender}}">{{$personal_information->gender}}</option>
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
                                       <option value="{{$personal_information->religion}}">{{$personal_information->religion}}</option>
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
                                                        <option value="{{$personal_information->mstatus}}">{{$personal_information->mstatus}}</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                    </select>
                                         </div>
                                        </div> 
                                            
                                         
                                       
                                            
                                           <div class="col-md-6 form-group">
                                      <label class="col-md-5 control-label" for="email">Email:</label>
                                        <div class="col-md-7">
                                        <input class="form-control" name="email" type="text" value="{{$personal_information->email}}" >
                                         </div>
                                     </div>
                                  @endforeach
                                           
                     
                    <div class="col-md-12 form-group">
                      <hr/>
                    <div class="col-md-12">
                     <input type="submit" name="save" id="save" class="btn btn-success ml-5" value="Update">
                            <a href="{{url('/view/cv/page')}}"  class="btn btn-danger" style="margin-left:65%;">Cancel</a>
                                        </div>
                                         </div>
                                       </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
          
<br/>
	</body>
	</html>