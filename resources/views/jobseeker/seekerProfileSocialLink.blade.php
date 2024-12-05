      
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

     @if(empty($sociallinks))
      <div class="card cardProfile">
	  <div class="card-body m-3">
	 <form action="{{url('/save/socialLink')}}" method="post">
	 	{{csrf_field()}}
	 <label class="control-label" for="social_link"><h5>Add Website or Social Link:</h5>
	 </label>
	 <div class="row m-1">
     <big><i class="fab fa-facebook-square" style="color:#3b5998;"></i>Facebook</big>
	 <input class="form-control col-12" name="facebook" type="text" value="" placeholder="">
	  
	  <big><i class="fab fa-twitter-square" style="color:#1DA1F2;"></i>Twiter</big>
	  <input class="form-control col-12" name="twiter" type="text" value="" placeholder="">
	   
	   <big><i class="fab fa-linkedin" style="color:#2867B2;" ></i>Linkedin</big>
	   <input class="form-control col-12" name="linkedin" type="text" value="" placeholder="">
	  </div>
	  
	  <div class="row m-5">
	  <input class="form-control btn btn-success col-md-3" type="submit"  name="save"  value="Save">
	  <div class="col-md-3">
	  </div>
	   <div class="col-md-3">
	  </div>
	  <a href="{{url('/jobseekerProfile')}}" class="btn btn-danger col-md-3">Cancle</a>
	  </div>
	 </form>
	 </div>
	 </div>
	 @else

      @foreach($sociallinks as $sociallink)
       <div class="card cardProfile">
	  <div class="card-body m-3">
	 <form action="{{url('/update/socialLink')}}" method="post">
	 	{{csrf_field()}}
	 <label class="control-label" for="social_link"><h5>Update Website or Social Link:</h5>
	 </label>
	 <div class="row m-1">
     <big><i class="fab fa-facebook-square" style="color:#3b5998;"></i>Facebook</big>
	 <input class="form-control col-12" name="facebook" type="text" value="" placeholder="{{$sociallink->facebook}}">
	  
	  <big><i class="fab fa-twitter-square" style="color:#1DA1F2;"></i>Twiter</big>
	  <input class="form-control col-12" name="twiter" type="text" value="" placeholder="{{$sociallink->twiter}}">
	   
	   <big><i class="fab fa-linkedin" style="color:#2867B2;" ></i>Linkedin</big>
	   <input class="form-control col-12" name="linkedin" type="text" value="" placeholder="{{$sociallink->linkedin}}">
	  </div>
	  
	  <div class="row m-5">
	  <input class="form-control btn btn-success col-md-3" type="submit"  name="save"  value="Update">
	  <div class="col-md-3">
	  </div>
	   <div class="col-md-3">
	  </div>
	  <a href="{{url('/jobseekerProfile')}}" class="btn btn-danger col-md-3">Cancle</a>
	  </div>
	 </form>
	 </div>
	 </div>
     @endforeach
	  @endif


	</body>
	</html>