<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('titulo') </title>
  <link rel="icon" href="{{asset('assets/img/logo-icon.png')}}">
  <!-- CSS only -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

   <!-- fancybox -->
   <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/WS.css')}}">
   <!-- Font Awesome 6 -->
   <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
   <!-- style -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <!-- responsive -->
   <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
   <!-- color -->
   <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
   <!-- jQuery -->
   <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
   <script src="{{asset('assets/js/preloader.js')}}"></script>
   @yield('menu_styles') 
</head>
<body>
 
    @yield('contenido')

    

 
    

<!-- Bootstrap Js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- fancybox -->
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- Form Script -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script type="text/javascript" src=" {{asset('assets/js/sweetalert.min.js')}}"></script> 
@yield('menu_scripts')
</body>
</html>