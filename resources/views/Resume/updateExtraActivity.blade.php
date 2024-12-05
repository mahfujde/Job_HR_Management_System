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
     
       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
          @endif
         <label class="col-md-12 control-label" for="education"><b>Update Extra Curricular Activities</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="education_table">
                <thead>
                    <tr>
                        <th width="1%" style="visibility: hidden;">Sl</th>
                        <th width="25%">Title</th>
                        <th width="34%">Details</th>
                        <th width="20%">Location</th>
                        <th width="10%">Date</th>
                        <th width="10">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                @foreach($extra_activities as $extra_activitie)
                <form method="post" action="{{url('/update/extra/activity')}}">
                      @csrf
             <tr>
              <td>
                <input class="form-control" name="id"type="hidden" value="{{$extra_activitie->id}}">
              </td>
               <td>
                <input class="form-control" name="extra_title" id="extra_title" type="text" value="{{$extra_activitie->extra_title}}">
              </td>

        
      <td>
        <input class="form-control" name="extra_details" id="extra_details" type="text" value="{{$extra_activitie->extra_details}}">
      </td>

        <td>
          <input class="form-control" name="location" id="location" type="text" value="{{$extra_activitie->location}}">
        </td>

      <td>
        <input class="form-control" name="edate" id="edate" type="text" value="{{$extra_activitie->edate}}">
      </td>

      
      <td>
      <input type="submit" name="save" id="save" class="btn btn-success ml-5" value="Update">
     </td>
   </tr>
   </tbody>
     </form>
      @endforeach      
           </table>
          <a href="{{url('/view/cv/page')}}"  class="btn btn-danger" style="margin-left:75%;">Cancel</a>
        </div>
      </div>
    </div>
     
  </body>
  </html>





       
         
                
  