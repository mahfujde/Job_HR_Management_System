<!DOCTYPE html>
<html lang="en">
<head>  
 
<title>job HR management system (Admin Pannel)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="images/admin-icon.png">



   <!--   css  -->
  <link rel="stylesheet" href="{{asset('css/fontEnd/style.css')}}">
  

  <!--  bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
  

   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  
 <link rel="stylesheet" href="icon\fontawesome-free-5.13.0-web\css\all.css">

  
</head>

<body style= "font-family Times New Roman,serif;">

<div class="row sticky-top">

<div style="background-color:ghostwhite" class="col-2">

<div class="logo-image-small">
            <img src="images/admin-icon.png" class="rounded-circle" alt="" width="40" height="40" >
      <p class="logo-text">{{ Auth::guard('admin')->user()->name }}</p> 
                                
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
  <div class="sidebar">
    
   

    <ul>

          <li>
            <a href="{{url('/adminDashboard')}}">
             <i class="fas fa-laptop-house "></i>
              Dashboard
            </a>
          </li>
      
          <li>
            <a href="{{url('/jobseekerInformation')}}">
           <i class="fas fa-users"></i>
              Job Seekers 
            </a>
          </li>
      
          <li>
      <a href="{{url('/companyInformation')}}">
             <i class="fas fa-building"></i>
              Companys
            </a>
          </li>
      
          <li>
            <a href="{{route('/blog')}}">
            <i class="fas fa-file-alt"></i>
            Blog
            </a>
          </li>
      
      <li>
            <a href="{{route('/govtjob')}}">
           <i class="fas fa-newspaper"></i>
            Govt Jobs
            </a>
          </li>

           <li>
            <a href="{{route('/viewgovtjob')}}">
           <i class="fas fa-list-alt"></i>
            View Govt Job
            </a>
          </li>
      
          <li>
            <a href="{{route('/jobpost')}}">
          <i class="fas fa-pen-square"></i>
            Job Post
            </a>
          </li>
      
          <li>
            <a href="{{route('/jobpost')}}">
            <i class="fas fa-question-circle"></i>
              FAQ/Chatbot
            </a>
          </li>
  

                              
                                    
      
          <li>
            <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
                Loguot
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


  <!-- main content -->
  <div class="col-10">
  <div class="container">
   @yield('adminMainContent')
    
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
</html
