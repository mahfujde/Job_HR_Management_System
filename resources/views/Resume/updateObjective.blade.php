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
     <form action="{{url('/update/objective')}}" method="post">
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
                                      <label class="col-md-5 control-label" for="objective"><b>Update Career Objective:</b></label>
                                        <div class="col-md-12">
                                          @foreach ($objectives as $objective)
                                        <textarea class="form-control" rows="5" name="objective"  value="" >{{ $objective->objective}}</textarea>
                                        @endforeach 
                                         </div>
                                     </div>
                                
                   
                   <div class="col-md-12 form-group">
                    
                                        <div class="col-md-12">
                    <input type="submit" name="save" id="save" class="btn btn-success ml-5" value="Update">
                            <a href="{{url('/view/cv/page')}}"  class="btn btn-danger" style="margin-left:75%;">Cancel</a>
                                        </div>
                    </div>
                                                          
                   
                   </div>
                   </form>
                 </div>
               </div>
             </div>

	</body>
	</html>