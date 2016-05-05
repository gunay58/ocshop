<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OCShop</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img alt="Brand" src="/img/brand.png"> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><img src="/img/ico/newspaper.png"> Neuigkeiten</a></li>
                <li><a href="#contact"><img src="/img/ico/support.png"> Support</a></li>
                <li><a href="#contact"><img src="/img/ico/section.png"> FAQ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><img src="/img/ico/folders.png"> Produkte<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Kategorie</a></li>
                        <li><a href="#">Kategorie</a></li>
                        <li><a href="#">Kategorie</a></li>
                        <li><a href="#">Kategorie</a></li>
                        <li><a href="#">Kategorie</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><img src="/img/ico/user.png"> {{Auth::user()->username}}<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="/img/ico/user.png"> Profil</a></li>
                            <li><a href="#"><img src="/img/ico/tag.png"> Meine Einkäufe <span class="badge">0</span></a></li>
                            <li><a href="#"><img src="/img/ico/money_add.png"> Guthaben aufladen</a></li>
                            <li><a href="#"><img src="/img/ico/support.png"> Meine Tickets <span class="badge">0</span> </a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><img src="/img/ico/logout.png"> Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><img src="/img/ico/tag.png"> Warenkorb <span class="badge">0</span> </a></li>
                    <span class="navbar-text"> Guthaben: {{Auth::user()->guthaben}}€</span>
                @else

                    <li>
                        <button onclick="location.href='{{ url('/login') }}';" type="button"
                                class="btn btn-default navbar-btn"><img src="/img/ico/user.png"> Anmelden
                        </button>
                        oder
                        <button onclick="location.href='{{ url('/register') }}';" type="button"
                                class="btn btn-default navbar-btn"><img src="/img/ico/user_add.png"> Registrieren
                        </button>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<br><br>

<!-- Begin page content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @yield('content')
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">OCShop CMS v1.0 Copyright © by B0ss</p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
