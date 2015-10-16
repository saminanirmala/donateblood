<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hege Refsnes">

    <title>Blood-donation</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" media="screen">


<link href="{{ URL::asset('public/css/custom.css') }}" rel="stylesheet" media="screen">
<link href="{{ URL::asset('public/css/custom-media.css') }}" rel="stylesheet" media="screen">

  <link href="{{ URL::asset('public/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" media="screen">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="{{ URL::asset('public/js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('public/js/respond.min.js') }}"></script>
    <![endif]-->


</head>




<body>

<header>
    <div class="container">
        <div class="header_wrper">

            <div class="scial">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/donor') }}" class="sgn">Donor Registeration</a>
                <a href="{{ url('/request') }}" class="sgn">Request Registeration</a>
            </div><!-- end of social -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <a href="#"><img src="{{asset('public/images/logo.png')}}" class="img-responsive" alt="logo"/></a>
                </div><!-- end of col -->
                <div class="col-md-8 col-sm-8 mnu_wrp">
                    <div class="mnu">
                        <div class="menu_wp">

                            <nav class="navbar-wrapper navbar-default nav_cvr" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand alightgp" href="index.php">BLOOD BANK</a>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav main_nav">
                                        <li><a href="#">HOME</a></li>
                                        <li><a href="#">REGISTER</a></li>
                                        <li><a href="#">ABOUT BLOOD</a></li>
                                        <li><a href="#">SEARCH</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </nav>

                        </div><!-- end of menu_wp -->
                    </div>

                </div><!-- end of col -->
            </div><!-- end of row -->
        </div><!-- end of header_wrper -->
    </div><!-- end of container -->

</header><!-- end of header -->

