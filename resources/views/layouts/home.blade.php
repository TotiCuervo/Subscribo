<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Free Trials, The Right Way</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
          rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>


    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="#intro" class="scrollto"><img class="logo" src="img/subscribologo.png"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @guest
                    <li><a href="{{ route('login') }}" class="w3-button w3-black w3-round-xxlarge" id="login">Login</a></li>
                    <li><a href="{{ route('register') }}" class="btn btn-primary btn-lg" id="subscribe">Subscribe</a></li>
                @else
                    <li><a href="{{ route('subscribo') }}" class="w3-button w3-black w3-round-xxlarge" id="login">Login</a></li>
                    @endguest
                {{--<li><a href="{{ route('login') }}" class="w3-button w3-black w3-round-xxlarge" id="login">Login</a></li>--}}
                {{--<li><a href="{{ route('register') }}" class="btn btn-primary btn-lg" id="subscribe">Subscribe</a></li>--}}
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<div>
    @yield('content')
</div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script>
    jQuery(document).ready(function(){

    });
</script>

</body>
</html>
