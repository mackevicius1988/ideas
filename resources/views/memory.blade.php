<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/" />
    <title>Fakin good ideas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900%7COpen+Sans:300,400,600,700'
          rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>

    <!-- Animation Libraries -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magic.min.css">
    <!-- Google Fonts -->

    <!-- Fonts Icons -->
    <link rel="stylesheet" href="css/custom-icons.css">
    <link rel="stylesheet" href="css/et-line-icons.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox/lightbox-theme.css">
    <!-- Animated Headlines -->
    <link rel="stylesheet" href="css/animated-hedlines.css">
    <!-- Main Styles -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Theme -->
    <link href="css/theme/scuba-blue.css" rel="stylesheet" data-color="" id="theme">
    <!-- Animsition -->
    <link href="css/animsition.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>

        @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
        body {
            font-family: 'Open Sans', sans-serif;
        }

        body p {
            font-style: italic;
            font-weight: 100; /* You specify the number you see next to the fonts to change from light to bold ie you would put 700 etc. etc. */
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .cover {
            background-size: cover;
            width: 350px;
            height: 350px;
        }

        .og-grid {
            width: 100%;
        }

        .transition {
            -webkit-transform: scale(1.6);
            -moz-transform: scale(1.6);
            -o-transform: scale(1.6);
            transform: scale(1.6);
        }

        .details {
            position: absolute;
            left: 0;
            bottom: 0;
            background-color: black;
            width: 100%;
            padding: 7px;
            color: white;
            opacity: 0.7;
            text-align: left;
        }

        div.item {
            transition: all 2s ease;
            overflow: hidden;

        }

        div.item:HOVER {
            opacity: 1;
            transform: scale(1.5);
            -moz-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5); /* IE 9 */
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand')"; /* IE8 */
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand');
        }

        div.item:hover .details {
            display: none;
        }

        .active {
            font-weight: 700;
        }

        .container {
            padding: 0;
        }

        .search {
            width: 50px;
            -webkit-transition: opacity 1s ease-in-out;
            -moz-transition: opacity 1s ease-in-out;
            -ms-transition: opacity 1s ease-in-out;
            -o-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out;
            z-index: 99999;
        }

        .search.searchActive {
            opacity: 1;
            width: 150px;
        }

        .loader2 {
            display: block;
            position: relative;
            width: 50px;
            height: 50px;
            margin: 25px auto;
            box-shadow: inset 0 0 0 1px #171724;
            border-radius: 50%;
            font-size: 11px;
            text-indent: -99em;
            -webkit-animation: load2 3s infinite linear;
            animation: load2 3s infinite linear;
        }

        .loader2:before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            width: 28px;
            height: 56px;
            border-radius: 56px 0 0 56px;
            -webkit-animation: load1 1.2s infinite ease-in-out 0.4s;
            animation: load1 1.2s infinite ease-in-out 0.4s;
            -webkit-transform-origin: 28px 28px;
            -ms-transform-origin: 28px 28px;
            transform-origin: 28px 28px;
        }

        .loader2:after {
            content: '';
            position: absolute;
            top: -3px;
            right: -3px;
            width: 28px;
            height: 56px;
            border-radius: 0 56px 56px 0;
            -webkit-animation: load1 1.2s infinite ease-in-out;
            animation: load1 1.2s infinite ease-in-out;
            -webkit-transform-origin: 0 28px;
            -ms-transform-origin: 0 28px;
            transform-origin: 0 28px;
        }

        .categoryItem {
            font-size : 28px;
            cursor : pointer;
        }
        .categorySelected {
            background-color : #551313;
            color : #fff !important;
        }

    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<div id="top"></div>
<div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" data-loader-type="loader2" data-page-loader-text="Volar" style="transform-origin: 50% 50vh;">


    <div id="top"></div>
    <div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" data-loader-type="loader2" data-page-loader-text="Volar" style="transform-origin: 50% 50vh;">

        <!--/ page-header -->
        <!-- Navbar -->
        <div class="position-relative">
            <!-- sticky: 1) add class="sticky-navbar" to #nav-wrapper | 2) remove navbar-fixed-top navbar-transparent class from #nav -->
            <div id="nav-wrapper" class="transp-nav" >
                <nav style="background-color: black" id="nav" class="navbar navbar-default navbar-fixed-top navbar-transparent ripple-group-parent init-animation-1" role="navigation">
                    <!-- progressbar -->
                    <div id="scroll-progressbar" class="scroll-progressbar">
                        <div>
                            <span class="scroll-shadow"></span>
                        </div>
                    </div>
                    <div class="container in-page-scroll">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" id="animated-navicon" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand ripple-group" href="index.html#top">
                                <p class="pull-left font-second">Fakin good ideas</p>
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mobile-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right cl-effect-5">
                                <li>
                                    <a class="ripple-group" href="/">
                                        <span data-hover="home">home</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ripple-group" href="/about">
                                        <span data-hover="about">about</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
            </div>
        </div>
        <!--/ End Navbar -->
        <!-- Do not remove the div below if you want to a sticky navbar! -->
        <div id="about-section"></div>
        <!-- section -->
        <div class="section" style="padding-top: 150px; padding-left: 10px; padding-right: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 padding-right-sm-50">
                        <!-- Post -->
                        <section class="blog-post" id="memories">


                        </section>


                        <div id="end-content"></div>
                    </div>
                    <!--/ End col -->
                </div>
                <!--/ End row -->
            </div>
            <!--/ End container -->
        </div>
        <!--/ End section -->
        <footer class="footer-section section no-padding-bottom ">
            <div class="footer-bottom">
                <!-- Copyright -->
                <a class="footer-bottom-text font-second" href="" target="_blank">Fakin good ideas © 2017. All Right Reserved.</a>
                <!-- End Copyright -->
            </div>
        </footer>
        <!--/ End Footer Section -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var ids = localStorage.getItem('ids');
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8000/memories/' + ids,
                before: function () {
                    console.log('Before in');
                },
                success: function (data) {
                    $('#memories').html(data);
                },
                error: function (error) {
                    console.log('Error');
                    console.log(error);
                }
            });

        })
    </script>




    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/grid.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/jquery.animsition.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/animateSlider.js"></script>
    <script src="js/animated-headlines.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/jquery.particleground.min.js"></script>
    <script src="js/fss.min.js"></script>
    <script src="js/fssinit.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/contactForm.js"></script>
    <script src="js/scripts.min.js"></script>
</div>
</body>
</html>
