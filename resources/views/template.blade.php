
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{url('/css/now-ui-kit.css')}}" rel="stylesheet"/>
    <link href="{{url('/css/plugins/owl.carousel.css')}}" rel="stylesheet"/>
    <link href="{{url('/css/plugins/owl.theme.default.min.css')}}" rel="stylesheet"/>
    <link href="{{url('/css/main.css')}}" rel="stylesheet"/>
</head>

<body class="index-page sidebar-collapse">

@include('header')

@yield('content')

</body>
<!--   Core JS Files   -->
<script src="{{url('/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{url('/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{url('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{url('/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="{{url('/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{url('/js/now-ui-kit.js')}}" type="text/javascript"></script>
<!--  CountDown -->
<script src="{{url('/js/plugins/countdown.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Sliders -->
<script src="{{url('/js/plugins/owl.carousel.min.js')}}" type="text/javascript"></script>
<!--  Jquery easing -->
<script src="{{url('/js/plugins/jquery.easing.1.3.min.js')}}" type="text/javascript"></script>
<!-- Main Js -->
<script src="{{url('/js/main.js')}}" type="text/javascript"></script>

</html>
