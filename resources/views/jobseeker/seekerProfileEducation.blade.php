      
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

 
	  
	  @if(empty($educations))
     <div class="card cardProfile">
	  <div class="card-body m-3">
	  <form action="{{url('/save/seekereducation')}}" method="post">
	  	{{csrf_field()}}
	  <label class="col-md-12 control-label" for="education_info">
	  <h5>Add Education Information:</h5></label>


	  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


	  <textarea class="form-control" name="education_info" type="text" rows="6" value="" placeholder=""></textarea>
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
      
      @foreach($educations as $education)
	  <div class="card cardProfile">
	  <div class="card-body m-3">
	  <form action="{{url('/seekereducation/update')}}" method="post">
	  	{{csrf_field()}}
	  <label class="col-md-12 control-label" for="education_info">
	  <h5>Update Education Information:</h5></label>

	  <textarea class="form-control" name="education_info" type="text" rows="6" value="" placeholder="">{{$education->education_info}}</textarea>
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