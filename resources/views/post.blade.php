<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/"/>
    <title>{{$post->name}}</title>

    <meta property="og:url" content="http://fakingoodideas/{{$post->id}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{$post->name}} {{$post->price}}" $/>
    <meta property="og:description" content="{{$post->desc}}"/>
    <meta property="og:image" content="{{$post->url}}"/>

    <meta name="description" content="{{$post->desc}}"/>

    <link rel="stylesheet" type="text/css" href="css/simplegallery.demo1.min.css"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900%7COpen+Sans:300,400,600,700'
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

        @font-face {
            font-family: Questrial;
            src: url("fonts/Questrial-Regular.otf") format("opentype");
        }

        @font-face {
            font-family: Futura;
            src: url("fonts/UniversalisADFStd-Regular.otf") format("opentype");
        }

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
            font-size: 28px;
            cursor: pointer;
        }

        .categorySelected {
            background-color: #551313;
            color: #fff !important;
        }

        .checked {
            color: #c59d5f;
        }

        .fa-star {
            font-size: 24px;
        }

        .blog-page-media {
            min-height: 300px;

        }

        @media only screen and (max-width: 500px) {
            .blog-page-media {
                height: auto !important;

            }
        }

        .buyNow:HOVER {
            background: black;
            color: white !important;
            border: 1px solid white;
        }

        .buyNow {
            color: black;
            background: white;
            letter-spacing: 3px;
            padding: 10px 80px;
            font-family: "Questrial";
            border: 1px solid black;
            font-weight: 200;
            margin: 0 auto;
        }

        .padding20 {
            padding: 20px;
        }

        .textCenter {
            text-align: center
        }

        .money {
            letter-spacing: 3px;
            font-family: "Futura";
            font-size: 1.2em;
            text-transform: uppercase;

        }

        .navItem {
            float: right;
            color: white;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin: 5px 10px;
        }

        .categoryDesc {
            font-size: 1.5em;
            margin: 10px;
            letter-spacing: 3px;
            font-weight: normal;
            line-height: 1.4;
            font-family: "Futura";
            text-transform: uppercase;
            letter-spacing: 2px;
            -webkit-font-smoothing: antialiased;
            color: #656565;
        }

        .relatedImage {
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
            transition: all 0.5s ease;
            width: 100%;
            cursor:pointer;

        }

        .relatedImage:HOVER {
            -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
            filter: grayscale(0%);

        }




    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/css/gallery/vendor/magic/magic.min.css">
    <link rel="stylesheet" href="/css/gallery/vendor/animate/animate.min.css">

    <link rel="stylesheet" href="/css/gallery/jquery.desoslide.css">
</head>
<body>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=341948169308496';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="top"></div>
<div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm"
     data-loader-type="loader2" data-page-loader-text="Fakin good ideas loading" style="transform-origin: 50% 50vh;">


    <div id="top"></div>
    <div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm"
         data-loader-type="loader2" data-page-loader-text="Volar" style="transform-origin: 50% 50vh;">

        <!--/ page-header -->
        <!-- Navbar -->
    @include('navigation2')
    <!--/ End Navbar -->
        <!-- Do not remove the div below if you want to a sticky navbar! -->
        <div id="about-section"></div>
        <!-- section -->
        <div class="section" style="padding-top: 70px; padding-left: 10px; padding-right: 10px">

            <div class="container">

                <div class="row">
                    <div class="col-sm-6 padding-right-sm-50">
                        <!-- Post -->
                        <section class="blog-post" style="margin-bottom: 0">
                            <!-- Post Media -->
                            <div style="max-height: 400px;text-align: center;">

                                <div class="row">
                                    <div id="slideshow5" class="col-lg-9" style="float: none; margin: 0 auto; "></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul id="slideshow5_thumbs"
                                            class="desoslide-thumbs-horizontal list-inline text-center">

                                            @foreach($post->images as $image)
                                                <li>
                                                    <a href="{{$image->imageUrl}}">
                                                        <img src="{{$image->imageUrl}}" alt="dolmens" width="80px">
                                                    </a>
                                                </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a044870d03de004"></script>
                        </section>
                        <div id="end-content"></div>
                    </div>

                    <div class="col-sm-6" style="margin-top: 30px;">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12"
                                 style="text-align:center;  padding: 20px; padding-top: 50px">
                                <i>{{$post->tags}}</i>
                                <span class="money">{{$post->price}} USD</span> <br/>
                                <span style="text-align: center;    font-family: 'Futura';">{{$post->savings}}</span>

                                <h1 class="categoryDesc">SMART TECHNOLOGY IDEAS </h1>

                                <p class="blog-page-post-title font-second"
                                   style="     font-family: 'Futura', sans-serif;color: #333;font-style:normal; margin-bottom:10px;font-size: 18px;  letter-spacing: 2px">{{$post->name}} </p>

                                <p style="margin-bottom: 10px; margin-top: 25px;">
                                    @foreach($stars as $star)
                                        <span class="fa fa-star {{$star}}"></span>
                                    @endforeach
                                </p>
                                <span style="letter-spacing: 3px;font-family: 'Futura'">{{$post->rating}}</span><br/>
                                <a class="animsition-link" href="{{$post->url}}#customerReviews"
                                   style="font-family: 'Futura'">Read customers reviews</a>


                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12" style="text-align: center">
                                <span style="text-align: center; font-family: 'Futura'">{{$post->availability}}</span>
                            </div>
                        </div>
                        <!--/ End widget search -->
                        <div class="widget widget-text">

                            <div class="row">
                                <div class="col-xs-12 padding20 textCenter">
                                    <a class="buyNow animsition-link " href="{{$post->url}}">BUY ON AMAZON</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12" style="padding:20px">
                            <h1 style="width: 100%; text-align: center; color: #3c3c3c; margin-bottom: 2em">RELATED</h1>

                            @foreach($post->images as $image)
                                <div class="col-xs-12 col-sm-3" style="text-align: center">
                                    <img src="{{$image->imageUrl}}"  class="relatedImage">
                                    <p class="listName" style="font-style: normal; padding: 0; margin: 0"> {{ str_limit($post->name, 40) }}</p>

                                    <span class="money">{{$post->price}} USD</span>

                                    <div class="detailed">
                                    <span style="color: #ccc;
    font-size: 0.75em;"> {{$post->savings}} </span> <br/>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star  checked"></span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
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
                                                <span class="input-label-content font-second"
                                                      data-content="name">name *</span>
                                                </label>
                                                <input class="input-field" type="text" name="name" id="name"
                                                       required="">
                                            </div>

                                            <div class="input col-xs-12 col-sm-6 padding-bottom-xs-50 padding-bottom-40">
                                                <label class="input-label" for="email">
                                                    <span class="input-label-content font-second" data-content="email">email *</span>
                                                </label>
                                                <input class="input-field" type="email" name="email" id="email"
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-20 margin-top-xs-10">
                                            <div class="message col-xs-12 ">
                                                <label class="textarea-label font-second" for="message">message
                                                    *</label>
                                                <textarea class="input-field textarea" name="message" id="message"
                                                          required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 padding-top-sm-20 padding-top-xs-10 text-left">
                                                <input type="hidden" value="{{$post->id}}" id="id"/>
                                                <button id="commentMe" class="btn btn-animated btn-contact ripple-alone"
                                                        data-text="send it"><span class="btn-icon"><span
                                                                class="loader-parent"><span
                                                                    class="loader2"></span></span>
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

                    </div>
                    <!--/ End row -->
                </div>
                <!--/ End container -->
            </div>
            <!--/ End section -->

            <!--/ End Footer Section -->
        </div>
        @include('footer')

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

        <script src="js/gallery/jquery.desoslide.min.js"></script>
        <script src="js/gallery/app/demo.js"></script>
        <script>

            function goBack() {
                window.history.back();
            }
        </script>

    </div>
</body>
</html>
