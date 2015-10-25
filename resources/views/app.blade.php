<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5IMVPW9CwcqxirQ8kzjnNv_B_0iUgohw&sensor=false"></script>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">


    <!-- Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="col-md-2 nav">
    <ul class="sidebar-nav col-md-12">
        <div class="imetop col-md-12"><a href="/" >Home</a></div>
        <div class="ime col-md-12">

            <div class="outter"><img src="http://www.80proofdigital.com/wp-content/uploads/2015/07/contact-icon.png" class="image-circle"/></div>

            <h1>NIKOLA VIDOVIC</h1>
            <p>---- User ----</p>

        </div>
        <li>
            <a href="/lessTyp/1">HTML</a>
        </li>
        <li>
            <a href="/lessTyp/2">CSS</a>
        </li>
        <li>
            <a href="/essTyp/3">JavaScript</a>
        </li>
        <li>
            <a href="lessTyp/4">Angular Js</a>
        </li>
        <li>
            <a href="/lessTyp/5">PHP</a>
        </li>
        <li>
            <a href="/lessTyp/6">Laravel</a>
        </li>
        <li>
            <a href="/lessTyp/7">Bootstrap</a>
        </li>
        <li>
            <a href="/lessTyp/8">Quizz</a>
        </li>
    </ul>
</div>
    <!-- /#sidebar-wrapper -->
<div class="col-md-10 pad">
    <div class="hed col-md-12">
        <div class="col-md-3"> <p>Welcome to e-learning application</p></div>
        <div class="col-md-7"></div>
        <div class="col-md-2"><a class="logout" href="/auth/logout"></a></div>


    </div>
@yield('content')
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/all.js') }}"></script>


</body>
</html>