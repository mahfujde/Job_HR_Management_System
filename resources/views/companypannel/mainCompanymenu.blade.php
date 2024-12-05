<!DOCTYPE html>
<html lang="en">
<head>

<title>job HR management system(Job Seekers Profiles)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/admin-icon.png">


  
  
   <!--   css  -->
   <link rel="stylesheet" type="text/css" href="css/fontEnd/profile.css">
  <link rel="stylesheet" href="/css/fontEnd/style.css">
  <link rel="stylesheet" href="/css/fontEnd/jobPost.css">


  <!--  bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
  

   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  
 <link rel="stylesheet" href="\icon\fontawesome-free-5.13.0-web\css\all.css">
<link rel="stylesheet" type="text/css" href="/css/fontEnd/resume.css">

</head>

<body style= "font-family Times New Roman,serif;">

<div class="row sticky-top">

<div style="background-color:ghostwhite" class="col-2">

<div class="logo-image-small">
            <img src="img/admin-icon.png" class="rounded-circle" alt="" width="40" height="40" >
			<p class="logo-text">{{ Auth::guard('company')->user()->company_name }}</p>
       </div>
	 
	   </div>
<div style="background-color:#EAECEE"class="col-10">
	<span class="ml-4">@yield('headTitle')</span>
	</div>
</div>
<!-- sidebar start -->

<div class="row">
<div style="background-color:#EAECEE" class="col-2">
<div class="wrapper position-fixed">
	<div class="sidebar  ">
    
   

    <ul>
          

         
		       <li>
            <a href="/">
             <i class="fas fa-home"></i>
              Home
            </a>
          </li>

          
          <li>
            <a href="{{url('/companyDashboard')}}">
             <i class="fas fa-tachometer-alt"></i>
              Dashboard
            </a>
          </li>


          <li>
            <a href="{{url('/companyProfile')}}">
            <i class="fas fa-address-card"></i>
              Profile
            </a>
          </li>

          <li>
            <a href="{{url('/job/post')}}">
            <i class="fas fa-pen-nib"></i>
              Job Post
            </a>
          </li>

          <li>
            <a href="{{url('/see/candidate/list')}}">
            <i class="fas fa-list-alt"></i>
             Candidates List
            </a>
          </li>

          <li>
            <a href="{{url('/candiate/review')}}">
            <i class="fas fa-plus-circle"></i>
             Add Review
            </a>
          </li>


          <li>
            <a href="{{url('/candidate/review/list')}}">
            <i class="fas fa-edit"></i>
             Edit Review
            </a>
          </li>
          

           <li>
            <a href="{{url('/job/post/list')}}">
            <i class="fas fa-list"></i>
             Job Post List
            </a>
          </li>
          

          
	
          
		  
          <li>
            <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
          </li>
		  
        </ul>
	</div>
		</div>
	</div>
	<!-- sidebar end -->
	<div class="col-10">
	<div class="container">
	
 @yield('mainContent')


	</div>
	</div>

<script type="text/javascript">
const currenylocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for(let i = 0; i<menuLength; i++){
if(menuItem[i].href===currenylocation){

  menuItem[i].className = "active"
}

}

</script>
</body>
</html>