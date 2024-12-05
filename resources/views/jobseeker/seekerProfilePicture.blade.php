<!DOCTYPE html>
<html lang="en">
<head>

<title>job HR management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

 <!--   css  -->

   <link rel="stylesheet" type="text/css" href="css/fontEnd/profile.css">

  <!--  bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
  

   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  
 <link rel="stylesheet" href="icon\fontawesome-free-5.13.0-web\css\all.css">

  
 
  
</head>
<body style= "font-family Times New Roman,serif;background-color:#E5E4E2;">

         @if(empty($profilepictures))
        <div class="card card-picture">
	    <div class="card-body m-3">
        <form action="{{url('/save/profilePicture')}}" method="post" enctype="multipart/form-data">
        	 {{csrf_field()}}
        <label class="col-md-12 control-label" for="about_me">
	    <h5>Add Profile Picture:</h5></label>
	    <hr/>
	      <label class="custom-file m-3">
           <input type="file" name="profile_picture" class="choose-pictire">
          </label>
          <hr/>
       

       <div class="row m-5">
	  <input class="form-control btn btn-success col-md-3" type="submit"  name="save"  value="Save">
	  <div class="col-md-3">
	  </div>
	   <div class="col-md-3">
	  </div>
	  <a href="{{url('/jobseekerProfile')}}" class="btn btn-danger col-md-3">Cancle</a>
	  </form>
	  </div>
	     </div>


       @else

       @foreach($profilepictures as $profilepicture)
       <div class="card card-picture">
      <div class="card-body m-3">
        <form action="{{url('/update/picturePicture')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
        <label class="col-md-12 control-label" for="about_me">
      <h5>Update Profile Picture:</h5></label>
      <hr/>
        <label class="custom-file m-3">
           <input type="file" name="profile_picture" class="choose-pictire" placeholder="{{$profilepicture->profile_picture}}">
          </label>
          <hr/>
       

       <div class="row m-5">
    <input class="form-control btn btn-success col-md-3" type="submit"  name="save"  value="Update">
    <div class="col-md-3">
    </div>
     <div class="col-md-3">
    </div>
    <a href="{{url('/jobseekerProfile')}}" class="btn btn-danger col-md-3">Cancle</a>
    </form>
    </div>
       </div>
	      @endforeach
        @endif




	</body>
	</html>