<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
    @yield('more-css')

</head>
<body>
@include('common.navbar')
<div class="container">

@yield('content')
</div>
<div class="my-5"></div>


<script src="{{asset('/assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('/assets/js/fontawesome.min.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
@yield('more-js')
</body>
</html>
