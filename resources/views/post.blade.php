<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/" />
    <title>{{$post->name}}</title>

    <meta property="og:url"           content="http://fakingoodideas/{{$post->id}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$post->name}} {{$post->price}}"$ />
    <meta property="og:description"   content="{{$post->desc}}" />
    <meta property="og:image"         content="{{$post->url}}" />

    <meta name="description" content="{{$post->desc}}" />


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

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=341948169308496';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="top"></div>
<div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" data-loader-type="loader2" data-page-loader-text="Fakin good ideas loading" style="transform-origin: 50% 50vh;">


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
                                    <a class="ripple-group" href="/get/memorry">
                                        <span data-hover="about">MEMORIES</span>
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
                        <section class="blog-post" style="margin-bottom: 0">
                            <!-- Post Media -->
                            <div class="blog-page-media" style="height: 500px;text-align: center;">
                               <img src="{{$post->imageUrl}}" style="max-width:100%; max-height:100%;    ">
                            </div>
                            <div class="shareHolder" style="text-align: center;">
                                <div style="padding: 20px" class="fb-share-button" data-href="https://fakingoodideas.com/{{$post->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a style="padding: 20px" class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffakingoodideas.com%2F1&amp;src=sdkpreparse">Share</a></div>
                            </div>
                        </section>


                        <div id="end-content"></div>
                    </div>

                    <div class="col-sm-6">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12" style=" border-bottom: 1px solid black;">
                                <h1 class="blog-page-post-title font-second">{{$post->name}} </h1>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span>{{$post->rating}}</span>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6" style="text-align: left">
                                <h1 class="blog-page-post-title font-second">{{$post->price}} </h1>
                            </div>
                        </div>
                        <!--/ End widget search -->
                        <div class="widget widget-text">

                            <div class="row">
                                <div class="col-xs-12" style="padding: 20px">
                                    <a style="color: white; background: #000;border: 1px solid black; padding: 10px;" href="{{$post->url}}">Buy now</a>
                                    <a style="color: white; background: #000;border: 1px solid black; padding: 10px;" href="{{$post->url}}">Vote</a>
                                </div>
                            </div>


                            <div class="row" style="margin-top:40px">
                                <div class="col-xs-9">
                                    <h1 class="blog-page-post-title font-second"> Votes</h1>
                                </div>
                                <div class="col-xs-3" >
                                    <h1 class="blog-page-post-title font-second">  {{$post->votes}}</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <h1 class="blog-page-post-title font-second">Rating</h1>
                                </div>
                                <div class="col-xs-3" >
                                    <h1 class="blog-page-post-title font-second"> 4.75</h1>
                                </div>
                            </div>






                            <h4 class="widget-title font-second" style="margin-top: 20px">Description</h4>
                            <div class="widget-body">
                                <div>
                                    {{$post->description}}


                                </div>
                            </div>


                            <h4 class="widget-title font-second">Item specification</h4>
                            <div class="widget-body">
                                <div>
                                    {{$post->features}}
                                </div>
                            </div>


                        </div>


                        <!--/ End widget-categories -->
                    </div>
                    <!--/ End col -->
                </div>
                <div class="row">

                    <div class="col-sm-9">
                        <section class="blog-comment-section" style="margin-top: 0">
                            <h2 class="blog-page-post-title margin-bottom-60 font-second">Comments</h2>
                            <ul class="media-list text comment-list clearlist">


                                @foreach($comments as $comment)
                                    <li class="media comment-item">
                                        <a class="pull-left" href="#"><i class="comment-avatar fa fa-user"></i>
                                        </a>
                                        <div class="media-body">
                                            <div class="comment-item-data">
                                                <div class="comment-author">
                                                    <a href="#">{{$comment->name}}</a>
                                                </div>
                                                {{$comment->created_at}}
                                            </div>
                                            <p>
                                                {{$comment->message}}
                                            </p>
                                        </div>
                                    </li>
                            @endforeach
                            <!-- End Comment Item -->
                            </ul>
                        </section>

                        <section class="blog-comment-section">
                            <h2 class="blog-page-post-title font-second margin-bottom-60">Leave a reply</h2>
                            <!-- Form -->
                            <form>
                                <fieldset>
                                    <div class="row">
                                        <!--/ End from messages -->
                                        <div class="input col-xs-12 col-sm-6 padding-bottom-xs-50 padding-bottom-40">
                                            <label class="input-label" for="name">
                                                <span class="input-label-content font-second" data-content="name">name *</span>
                                            </label>
                                            <input class="input-field" type="text" name="name" id="name" required="">
                                        </div>

                                        <div class="input col-xs-12 col-sm-6 padding-bottom-xs-50 padding-bottom-40">
                                            <label class="input-label" for="email">
                                                <span class="input-label-content font-second" data-content="email">email *</span>
                                            </label>
                                            <input class="input-field" type="email" name="email" id="email" required="">
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-20 margin-top-xs-10">
                                        <div class="message col-xs-12 ">
                                            <label class="textarea-label font-second" for="message">message *</label>
                                            <textarea class="input-field textarea" name="message" id="message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 padding-top-sm-20 padding-top-xs-10 text-left">
                                            <input type="hidden" value="{{$post->id}}" id="id"/>
                                            <button id="commentMe" class="btn btn-animated btn-contact ripple-alone" data-text="send it"><span class="btn-icon"><span class="loader-parent"><span class="loader2"></span></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 padding-top-sm-20 padding-top-xs-10">
                                            <div id="form-messages" class="form-message"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <!-- End Form -->
                        </section>
                    </div>
                    <div class="col-sm-6"></div>
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
    <script src="js/comments.js"></script>
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
