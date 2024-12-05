<!DOCTYPE html>
<html lang="en">
<head>

<title>@yield('headTitle')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/admin-icon.png">


  
  
   <!--   css  -->
  <link rel="stylesheet" href="{{asset('css/fontEnd/home.css')}}">
 


  <!--  bootstrap -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="/css/app.css">
 <link rel="stylesheet" href="{{asset('icon/fontawesome-free-5.13.0-web/css/all.css')}}">

</head>
<body>
  <div>
@include('mainlayout.header')
</div>

<div>
@yield('createAccount')
</div>

<div>
@include('mainlayout.footer')
</div>
</body>
</html>