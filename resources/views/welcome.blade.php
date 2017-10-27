<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

<div id="page" class="animsition equal" data-loader-type="loader2" data-page-loader-text="Langama"
     data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" style="transform-origin: 50% 50vh;">

    @include('header')
    @include('navigation')


    <div id="page-2">
        <section id="about-section" class="about-section section" style="padding: 15px;">
            <div style="background-color: #fff; padding-top: 80px">  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="widget" style="margin: 0">
                            <div class="widget-body">
                                <div class="tags">
                                    @foreach($tags as $tag)
                                        <a class="categoryItem" data-id = '{{$tag->id}}'>{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="text-align: center">
                        <input type="text" id="amount" readonly style="border:0" class="font-second hs-text-12">
                        <div id="slider-range"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="padding: 10px; text-align: center">
                        <div class="widget">
                            <form class="" role="form">
                                <div class="search-wrap">
                                    <button class="search-button" type="submit" title="Start Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <input id = 'searchQuery' type="text" class="input-field " placeholder="Search...">
                                </div>
                            </form>
                        </div>

                        <div class="widget" style="margin-bottom: 10px">
                            <form class="" role="form">
                                <div class="search-wrap">
                                    <button class="search-button" type="submit" title="Start Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <select name="sortBy" id="orderBy" class="input-field">
                                        <option value="votes">Popularity</option>
                                        <option value="name">Title</option>
                                        <option value="price">Price Low to High</option>
                                        <option value="priceDesc">Price High to Low</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"   style="text-align: center">
                        <button id="btn-find" style="background-color: #551313" type="submit" class="btn btn-animated btn-contact ripple-alone" data-text="FIND MY ITEMS"><span class="btn-icon"><span class="loader-parent"><span class="loader2"></span></span>
                                                </span>
                        </button>
                    </div>
                </div>
            </div>


            <div class="container" style="width: 100%;">
                <div class="main" style="text-align: center">
                    <div class="gridWrapper">
                        @include('load')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/grid.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {

            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 999,
                    values: [ 0, 999 ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    }
                });
                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            } );

            $(function () {
                Grid.init();

            });

            $(function () {
                $(".item").hover(
                    function () {
                        $(this).parent().find('.details').addClass("active");
                    }, function () {
                        $(this).parent().find('.details').removeClass("active");
                    }
                );
            })

            $(function () {
                $('#btn-find').click(function(e) {

                    var categoryIds = [];
                    $( ".categoryItem" ).each(function( index ) {
                        if ($(this).attr('class') == 'categoryItem categorySelected')
                            categoryIds.push($( this ).data("id"));
                    });
                    $('.gridWrapper').css('opacity', '0.6');
                    $('#spinner').show();
                    categoryIds = categoryIds.length === 0  ? [0] : categoryIds
                    var priceFrom = $( "#slider-range" ).slider( "values", 0 );
                    var priceTo = $( "#slider-range" ).slider( "values", 1 );
                    var query = $( "#searchQuery" ).val() === '' ? '0' : $( "#searchQuery" ).val();
                    var order = $('#orderBy').val();
                    console.log(query);

                    $.ajax({
                        type: 'GET',
                        url: 'http://localhost:8000/find/'+categoryIds + '/' + priceFrom + '/' + priceTo + '/' + query + '/' + order,
                        before: function () {
                            console.log('Before in');
                        },
                        success: function (data) {
                            $('.gridWrapper').html(data);
                            $('.gridWrapper').css('opacity', '1');
                            var Grid = (function () {
                                // list of items
                                var $grid = $('#og-grid'),
                                    // the items
                                    $items = $grid.children('li'),
                                    // current expanded item's index
                                    current = -1,
                                    // position (top) of the expanded item
                                    // used to know if the preview will expand in a different row
                                    previewPos = -1,
                                    // extra amount of pixels to scroll the window
                                    scrollExtra = 0,
                                    // extra margin when expanded (between preview overlay and the next items)
                                    marginExpanded = 10,
                                    $window = $(window), winsize,
                                    $body = $('html, body'),
                                    // transitionend events
                                    transEndEventNames = {
                                        'WebkitTransition': 'webkitTransitionEnd',
                                        'MozTransition': 'transitionend',
                                        'OTransition': 'oTransitionEnd',
                                        'msTransition': 'MSTransitionEnd',
                                        'transition': 'transitionend'
                                    },
                                    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
                                    // support for csstransitions
                                    support = Modernizr.csstransitions,
                                    // default settings
                                    settings = {
                                        minHeight: 500,
                                        speed: 350,
                                        easing: 'ease'
                                    };

                                function init(config) {
                                    console.log('Gridas initas')

                                    // the settings..
                                    settings = $.extend(true, {}, settings, config);

                                    // preload all images
                                    $grid.imagesLoaded(function () {

                                        // save item´s size and offset
                                        saveItemInfo(true);
                                        // get window´s size
                                        getWinSize();
                                        // initialize some events
                                        initEvents();

                                    });

                                }

                                // add more items to the grid.
                                // the new items need to appended to the grid.
                                // after that call Grid.addItems(theItems);
                                function addItems($newitems) {

                                    $items = $items.add($newitems);

                                    $newitems.each(function () {
                                        var $item = $(this);
                                        $item.data({
                                            offsetTop: $item.offset().top,
                                            height: $item.height()
                                        });
                                    });

                                    initItemsEvents($newitems);

                                }

                                // saves the item´s offset top and height (if saveheight is true)
                                function saveItemInfo(saveheight) {
                                    $items.each(function () {
                                        var $item = $(this);
                                        $item.data('offsetTop', $item.offset().top);
                                        if (saveheight) {
                                            $item.data('height', $item.height());
                                        }
                                    });
                                }

                                function initEvents() {

                                    // when clicking an item, show the preview with the item´s info and large image.
                                    // close the item if already expanded.
                                    // also close if clicking on the item´s cross
                                    initItemsEvents($items);

                                    // on window resize get the window´s size again
                                    // reset some values..
                                    $window.on('debouncedresize', function () {

                                        scrollExtra = 0;
                                        previewPos = -1;
                                        // save item´s offset
                                        saveItemInfo();
                                        getWinSize();
                                        var preview = $.data(this, 'preview');
                                        if (typeof preview != 'undefined') {
                                            hidePreview();
                                        }

                                    });

                                }

                                function initItemsEvents($items) {
                                    $items.on('click', 'span.og-close', function () {
                                        hidePreview();
                                        return false;
                                    }).children('a').on('click', function (e) {

                                        var $item = $(this).parent();
                                        // check if item already opened
                                        current === $item.index() ? hidePreview() : showPreview($item);
                                        return false;

                                    });
                                }

                                function getWinSize() {
                                    winsize = {width: $window.width(), height: $window.height()};
                                }

                                function showPreview($item) {

                                    var preview = $.data(this, 'preview'),
                                        // item´s offset top
                                        position = $item.data('offsetTop');

                                    scrollExtra = 0;

                                    // if a preview exists and previewPos is different (different row) from item´s top then close it
                                    if (typeof preview != 'undefined') {

                                        // not in the same row
                                        if (previewPos !== position) {
                                            // if position > previewPos then we need to take te current preview´s height in consideration when scrolling the window
                                            if (position > previewPos) {
                                                scrollExtra = preview.height;
                                            }
                                            hidePreview();
                                        }
                                        // same row
                                        else {
                                            preview.update($item);
                                            return false;
                                        }

                                    }

                                    // update previewPos
                                    previewPos = position;
                                    // initialize new preview for the clicked item
                                    preview = $.data(this, 'preview', new Preview($item));
                                    // expand preview overlay
                                    preview.open();

                                }

                                function hidePreview() {
                                    current = -1;
                                    var preview = $.data(this, 'preview');
                                    preview.close();
                                    $.removeData(this, 'preview');
                                }

                                // the preview obj / overlay
                                function Preview($item) {
                                    this.$item = $item;
                                    this.expandedIdx = this.$item.index();
                                    this.create();
                                    this.update();
                                }

                                Preview.prototype = {
                                    create: function () {
                                        // create Preview structure:
                                        this.$title = $('<h3></h3>');
                                        this.$price = $('<h2></h2> ');
                                        this.$description = $('<p></p>');
                                        this.$href = $('<a href="#">Buy now</a>');
                                        this.$details = $('<div class="og-details"></div>').append(this.$title, this.$price, this.$description, this.$href);
                                        this.$loading = $('<div class="og-loading"></div>');
                                        this.$fullimage = $('<div class="og-fullimg"></div>').append(this.$loading);
                                        this.$closePreview = $('<span class="og-close"></span>');
                                        this.$previewInner = $('<div class="og-expander-inner"></div>').append(this.$closePreview, this.$fullimage, this.$details);
                                        this.$previewEl = $('<div class="og-expander"></div>').append(this.$previewInner);
                                        // append preview element to the item
                                        this.$item.append(this.getEl());
                                        // set the transitions for the preview and the item
                                        if (support) {
                                            this.setTransition();
                                        }
                                    },
                                    update: function ($item) {

                                        if ($item) {
                                            this.$item = $item;
                                        }

                                        // if already expanded remove class "og-expanded" from current item and add it to new item
                                        if (current !== -1) {
                                            var $currentItem = $items.eq(current);
                                            $currentItem.removeClass('og-expanded');
                                            this.$item.addClass('og-expanded');
                                            // position the preview correctly
                                            this.positionPreview();
                                        }

                                        // update current value
                                        current = this.$item.index();

                                        // update preview´s content
                                        var $itemEl = this.$item.children('a'),
                                            eldata = {
                                                href: $itemEl.attr('href'),
                                                largesrc: $itemEl.data('largesrc'),
                                                title: $itemEl.data('title'),
                                                price: $itemEl.data('price') + ' bucks',
                                                description: $itemEl.data('description')
                                            };

                                        this.$title.html(eldata.title);
                                        this.$price.html(eldata.price);
                                        this.$description.html(eldata.description);
                                        this.$href.attr('href', eldata.href);

                                        var self = this;

                                        // remove the current image in the preview
                                        if (typeof self.$largeImg != 'undefined') {
                                            self.$largeImg.remove();
                                        }

                                        // preload large image and add it to the preview
                                        // for smaller screens we don´t display the large image (the media query will hide the fullimage wrapper)
                                        if (self.$fullimage.is(':visible')) {
                                            this.$loading.show();
                                            $('<img/>').load(function () {
                                                var $img = $(this);
                                                if ($img.attr('src') === self.$item.children('a').data('largesrc')) {
                                                    self.$loading.hide();
                                                    self.$fullimage.find('img').remove();
                                                    self.$largeImg = $img.fadeIn(350);
                                                    self.$fullimage.append(self.$largeImg);
                                                }
                                            }).attr('src', eldata.largesrc);
                                        }

                                    },
                                    open: function () {

                                        setTimeout($.proxy(function () {
                                            // set the height for the preview and the item
                                            this.setHeights();
                                            // scroll to position the preview in the right place
                                            this.positionPreview();
                                        }, this), 25);

                                    },
                                    close: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    $(this).off(transEndEventName);
                                                }
                                                self.$item.removeClass('og-expanded');
                                                self.$previewEl.remove();
                                            };

                                        setTimeout($.proxy(function () {

                                            if (typeof this.$largeImg !== 'undefined') {
                                                this.$largeImg.fadeOut('fast');
                                            }
                                            this.$previewEl.css('height', 0);
                                            // the current expanded item (might be different from this.$item)
                                            var $expandedItem = $items.eq(this.expandedIdx);
                                            $expandedItem.css('height', $expandedItem.data('height')).on(transEndEventName, onEndFn);

                                            if (!support) {
                                                onEndFn.call();
                                            }

                                        }, this), 25);

                                        return false;

                                    },
                                    calcHeight: function () {

                                        var heightPreview = winsize.height - this.$item.data('height') - marginExpanded,
                                            itemHeight = winsize.height;

                                        if (heightPreview < settings.minHeight) {
                                            heightPreview = settings.minHeight;
                                            itemHeight = settings.minHeight + this.$item.data('height') + marginExpanded;
                                        }

                                        this.height = heightPreview;
                                        this.itemHeight = itemHeight;

                                    },
                                    setHeights: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    self.$item.off(transEndEventName);
                                                }
                                                self.$item.addClass('og-expanded');
                                            };

                                        this.calcHeight();
                                        this.$previewEl.css('height', this.height);
                                        this.$item.css('height', this.itemHeight).on(transEndEventName, onEndFn);

                                        if (!support) {
                                            onEndFn.call();
                                        }

                                    },
                                    positionPreview: function () {

                                        // scroll page
                                        // case 1 : preview height + item height fits in window´s height
                                        // case 2 : preview height + item height does not fit in window´s height and preview height is smaller than window´s height
                                        // case 3 : preview height + item height does not fit in window´s height and preview height is bigger than window´s height
                                        var position = this.$item.data('offsetTop'),
                                            previewOffsetT = this.$previewEl.offset().top - scrollExtra,
                                            scrollVal = this.height + this.$item.data('height') + marginExpanded <= winsize.height ? position : this.height < winsize.height ? previewOffsetT - ( winsize.height - this.height ) : previewOffsetT;

                                        $body.animate({scrollTop: scrollVal}, settings.speed);

                                    },
                                    setTransition: function () {
                                        this.$previewEl.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                        this.$item.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                    },
                                    getEl: function () {
                                        return this.$previewEl;
                                    }
                                }

                                return {
                                    init: init,
                                    addItems: addItems
                                };

                            })();
                            Grid.init();
                            $(function () {
                                $(".item").hover(
                                    function () {
                                        $(this).parent().find('.details').addClass("active");
                                    }, function () {
                                        $(this).parent().find('.details').removeClass("active");
                                    }
                                );
                            })
                            $('#spinner').hide();
                        },
                        error: function(error) {
                            console.log('Error');
                            console.log(error);
                        }
                    });


                });
                // $('html, body').animate({
                //   scrollTop: $("#about-section").offset().top + offset
                //   }, 1000);
            })


            $(function () {
                $('.categoryItem').click(function(e) {
                    $(this).toggleClass('categorySelected');
                });
               // $('html, body').animate({
                 //   scrollTop: $("#about-section").offset().top + offset
             //   }, 1000);
            })

            $(document).ready(function () {
                function ajax() {
                    $('.gridWrapper').css('opacity', '0.6');

                    $.ajax({
                        url: "/find",
                        type: "GET",
                        before: function () {

                        },
                        success: function (data) {
                            console.log(data)
                            $('.gridWrapper').html(data);
                            $('.gridWrapper').css('opacity', '1');
                            var Grid = (function () {
                                // list of items
                                var $grid = $('#og-grid'),
                                    // the items
                                    $items = $grid.children('li'),
                                    // current expanded item's index
                                    current = -1,
                                    // position (top) of the expanded item
                                    // used to know if the preview will expand in a different row
                                    previewPos = -1,
                                    // extra amount of pixels to scroll the window
                                    scrollExtra = 0,
                                    // extra margin when expanded (between preview overlay and the next items)
                                    marginExpanded = 10,
                                    $window = $(window), winsize,
                                    $body = $('html, body'),
                                    // transitionend events
                                    transEndEventNames = {
                                        'WebkitTransition': 'webkitTransitionEnd',
                                        'MozTransition': 'transitionend',
                                        'OTransition': 'oTransitionEnd',
                                        'msTransition': 'MSTransitionEnd',
                                        'transition': 'transitionend'
                                    },
                                    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
                                    // support for csstransitions
                                    support = Modernizr.csstransitions,
                                    // default settings
                                    settings = {
                                        minHeight: 500,
                                        speed: 350,
                                        easing: 'ease'
                                    };

                                function init(config) {
                                    console.log('Gridas initas')

                                    // the settings..
                                    settings = $.extend(true, {}, settings, config);

                                    // preload all images
                                    $grid.imagesLoaded(function () {

                                        // save item´s size and offset
                                        saveItemInfo(true);
                                        // get window´s size
                                        getWinSize();
                                        // initialize some events
                                        initEvents();

                                    });

                                }

                                // add more items to the grid.
                                // the new items need to appended to the grid.
                                // after that call Grid.addItems(theItems);
                                function addItems($newitems) {

                                    $items = $items.add($newitems);

                                    $newitems.each(function () {
                                        var $item = $(this);
                                        $item.data({
                                            offsetTop: $item.offset().top,
                                            height: $item.height()
                                        });
                                    });

                                    initItemsEvents($newitems);

                                }

                                // saves the item´s offset top and height (if saveheight is true)
                                function saveItemInfo(saveheight) {
                                    $items.each(function () {
                                        var $item = $(this);
                                        $item.data('offsetTop', $item.offset().top);
                                        if (saveheight) {
                                            $item.data('height', $item.height());
                                        }
                                    });
                                }

                                function initEvents() {

                                    // when clicking an item, show the preview with the item´s info and large image.
                                    // close the item if already expanded.
                                    // also close if clicking on the item´s cross
                                    initItemsEvents($items);

                                    // on window resize get the window´s size again
                                    // reset some values..
                                    $window.on('debouncedresize', function () {

                                        scrollExtra = 0;
                                        previewPos = -1;
                                        // save item´s offset
                                        saveItemInfo();
                                        getWinSize();
                                        var preview = $.data(this, 'preview');
                                        if (typeof preview != 'undefined') {
                                            hidePreview();
                                        }

                                    });

                                }

                                function initItemsEvents($items) {
                                    $items.on('click', 'span.og-close', function () {
                                        hidePreview();
                                        return false;
                                    }).children('a').on('click', function (e) {

                                        var $item = $(this).parent();
                                        // check if item already opened
                                        current === $item.index() ? hidePreview() : showPreview($item);
                                        return false;

                                    });
                                }

                                function getWinSize() {
                                    winsize = {width: $window.width(), height: $window.height()};
                                }

                                function showPreview($item) {

                                    var preview = $.data(this, 'preview'),
                                        // item´s offset top
                                        position = $item.data('offsetTop');

                                    scrollExtra = 0;

                                    // if a preview exists and previewPos is different (different row) from item´s top then close it
                                    if (typeof preview != 'undefined') {

                                        // not in the same row
                                        if (previewPos !== position) {
                                            // if position > previewPos then we need to take te current preview´s height in consideration when scrolling the window
                                            if (position > previewPos) {
                                                scrollExtra = preview.height;
                                            }
                                            hidePreview();
                                        }
                                        // same row
                                        else {
                                            preview.update($item);
                                            return false;
                                        }

                                    }

                                    // update previewPos
                                    previewPos = position;
                                    // initialize new preview for the clicked item
                                    preview = $.data(this, 'preview', new Preview($item));
                                    // expand preview overlay
                                    preview.open();

                                }

                                function hidePreview() {
                                    current = -1;
                                    var preview = $.data(this, 'preview');
                                    preview.close();
                                    $.removeData(this, 'preview');
                                }

                                // the preview obj / overlay
                                function Preview($item) {
                                    this.$item = $item;
                                    this.expandedIdx = this.$item.index();
                                    this.create();
                                    this.update();
                                }

                                Preview.prototype = {
                                    create: function () {
                                        // create Preview structure:
                                        this.$title = $('<h3></h3>');
                                        this.$price = $('<h2></h2> ');
                                        this.$description = $('<p></p>');
                                        this.$href = $('<a href="#">Buy now</a>');
                                        this.$details = $('<div class="og-details"></div>').append(this.$title, this.$price, this.$description, this.$href);
                                        this.$loading = $('<div class="og-loading"></div>');
                                        this.$fullimage = $('<div class="og-fullimg"></div>').append(this.$loading);
                                        this.$closePreview = $('<span class="og-close"></span>');
                                        this.$previewInner = $('<div class="og-expander-inner"></div>').append(this.$closePreview, this.$fullimage, this.$details);
                                        this.$previewEl = $('<div class="og-expander"></div>').append(this.$previewInner);
                                        // append preview element to the item
                                        this.$item.append(this.getEl());
                                        // set the transitions for the preview and the item
                                        if (support) {
                                            this.setTransition();
                                        }
                                    },
                                    update: function ($item) {

                                        if ($item) {
                                            this.$item = $item;
                                        }

                                        // if already expanded remove class "og-expanded" from current item and add it to new item
                                        if (current !== -1) {
                                            var $currentItem = $items.eq(current);
                                            $currentItem.removeClass('og-expanded');
                                            this.$item.addClass('og-expanded');
                                            // position the preview correctly
                                            this.positionPreview();
                                        }

                                        // update current value
                                        current = this.$item.index();

                                        // update preview´s content
                                        var $itemEl = this.$item.children('a'),
                                            eldata = {
                                                href: $itemEl.attr('href'),
                                                largesrc: $itemEl.data('largesrc'),
                                                title: $itemEl.data('title'),
                                                price: $itemEl.data('price') + ' bucks',
                                                description: $itemEl.data('description')
                                            };

                                        this.$title.html(eldata.title);
                                        this.$price.html(eldata.price);
                                        this.$description.html(eldata.description);
                                        this.$href.attr('href', eldata.href);

                                        var self = this;

                                        // remove the current image in the preview
                                        if (typeof self.$largeImg != 'undefined') {
                                            self.$largeImg.remove();
                                        }

                                        // preload large image and add it to the preview
                                        // for smaller screens we don´t display the large image (the media query will hide the fullimage wrapper)
                                        if (self.$fullimage.is(':visible')) {
                                            this.$loading.show();
                                            $('<img/>').load(function () {
                                                var $img = $(this);
                                                if ($img.attr('src') === self.$item.children('a').data('largesrc')) {
                                                    self.$loading.hide();
                                                    self.$fullimage.find('img').remove();
                                                    self.$largeImg = $img.fadeIn(350);
                                                    self.$fullimage.append(self.$largeImg);
                                                }
                                            }).attr('src', eldata.largesrc);
                                        }

                                    },
                                    open: function () {

                                        setTimeout($.proxy(function () {
                                            // set the height for the preview and the item
                                            this.setHeights();
                                            // scroll to position the preview in the right place
                                            this.positionPreview();
                                        }, this), 25);

                                    },
                                    close: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    $(this).off(transEndEventName);
                                                }
                                                self.$item.removeClass('og-expanded');
                                                self.$previewEl.remove();
                                            };

                                        setTimeout($.proxy(function () {

                                            if (typeof this.$largeImg !== 'undefined') {
                                                this.$largeImg.fadeOut('fast');
                                            }
                                            this.$previewEl.css('height', 0);
                                            // the current expanded item (might be different from this.$item)
                                            var $expandedItem = $items.eq(this.expandedIdx);
                                            $expandedItem.css('height', $expandedItem.data('height')).on(transEndEventName, onEndFn);

                                            if (!support) {
                                                onEndFn.call();
                                            }

                                        }, this), 25);

                                        return false;

                                    },
                                    calcHeight: function () {

                                        var heightPreview = winsize.height - this.$item.data('height') - marginExpanded,
                                            itemHeight = winsize.height;

                                        if (heightPreview < settings.minHeight) {
                                            heightPreview = settings.minHeight;
                                            itemHeight = settings.minHeight + this.$item.data('height') + marginExpanded;
                                        }

                                        this.height = heightPreview;
                                        this.itemHeight = itemHeight;

                                    },
                                    setHeights: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    self.$item.off(transEndEventName);
                                                }
                                                self.$item.addClass('og-expanded');
                                            };

                                        this.calcHeight();
                                        this.$previewEl.css('height', this.height);
                                        this.$item.css('height', this.itemHeight).on(transEndEventName, onEndFn);

                                        if (!support) {
                                            onEndFn.call();
                                        }

                                    },
                                    positionPreview: function () {

                                        // scroll page
                                        // case 1 : preview height + item height fits in window´s height
                                        // case 2 : preview height + item height does not fit in window´s height and preview height is smaller than window´s height
                                        // case 3 : preview height + item height does not fit in window´s height and preview height is bigger than window´s height
                                        var position = this.$item.data('offsetTop'),
                                            previewOffsetT = this.$previewEl.offset().top - scrollExtra,
                                            scrollVal = this.height + this.$item.data('height') + marginExpanded <= winsize.height ? position : this.height < winsize.height ? previewOffsetT - ( winsize.height - this.height ) : previewOffsetT;

                                        $body.animate({scrollTop: scrollVal}, settings.speed);

                                    },
                                    setTransition: function () {
                                        this.$previewEl.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                        this.$item.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                    },
                                    getEl: function () {
                                        return this.$previewEl;
                                    }
                                }

                                return {
                                    init: init,
                                    addItems: addItems
                                };

                            })();
                            Grid.init();
                            $(function () {
                                $(".item").hover(
                                    function () {
                                        $(this).parent().find('.details').addClass("active");
                                    }, function () {
                                        $(this).parent().find('.details').removeClass("active");
                                    }
                                );
                            })
                        }
                    });
                }


                $("#search").click(function () {
                    ajax();
                });


                $(function () {
                    $('body').on('click', '.pagination a', function (e) {
                        e.preventDefault();

                        $('#load a').css('color', '#dfecf6');
                        $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

                        var url = $(this).attr('href');
                        console.log(url);
                        getArticles(url);
                        window.history.pushState("", "", url);
                        var offset = 20; //Offset of 20px

                        $('html, body').animate({
                            scrollTop: $("#about-section").offset().top + offset
                        }, 1000);
                    });

                    function getArticles(url) {
                        $.ajax({
                            url: url
                        }).done(function (data) {
                            $('.gridWrapper').html(data);
                            var Grid = (function () {
                                // list of items
                                var $grid = $('#og-grid'),
                                    // the items
                                    $items = $grid.children('li'),
                                    // current expanded item's index
                                    current = -1,
                                    // position (top) of the expanded item
                                    // used to know if the preview will expand in a different row
                                    previewPos = -1,
                                    // extra amount of pixels to scroll the window
                                    scrollExtra = 0,
                                    // extra margin when expanded (between preview overlay and the next items)
                                    marginExpanded = 10,
                                    $window = $(window), winsize,
                                    $body = $('html, body'),
                                    // transitionend events
                                    transEndEventNames = {
                                        'WebkitTransition': 'webkitTransitionEnd',
                                        'MozTransition': 'transitionend',
                                        'OTransition': 'oTransitionEnd',
                                        'msTransition': 'MSTransitionEnd',
                                        'transition': 'transitionend'
                                    },
                                    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
                                    // support for csstransitions
                                    support = Modernizr.csstransitions,
                                    // default settings
                                    settings = {
                                        minHeight: 500,
                                        speed: 350,
                                        easing: 'ease'
                                    };

                                function init(config) {
                                    console.log('Gridas initas')

                                    // the settings..
                                    settings = $.extend(true, {}, settings, config);

                                    // preload all images
                                    $grid.imagesLoaded(function () {

                                        // save item´s size and offset
                                        saveItemInfo(true);
                                        // get window´s size
                                        getWinSize();
                                        // initialize some events
                                        initEvents();

                                    });

                                }

                                // add more items to the grid.
                                // the new items need to appended to the grid.
                                // after that call Grid.addItems(theItems);
                                function addItems($newitems) {

                                    $items = $items.add($newitems);

                                    $newitems.each(function () {
                                        var $item = $(this);
                                        $item.data({
                                            offsetTop: $item.offset().top,
                                            height: $item.height()
                                        });
                                    });

                                    initItemsEvents($newitems);

                                }

                                // saves the item´s offset top and height (if saveheight is true)
                                function saveItemInfo(saveheight) {
                                    $items.each(function () {
                                        var $item = $(this);
                                        $item.data('offsetTop', $item.offset().top);
                                        if (saveheight) {
                                            $item.data('height', $item.height());
                                        }
                                    });
                                }

                                function initEvents() {

                                    // when clicking an item, show the preview with the item´s info and large image.
                                    // close the item if already expanded.
                                    // also close if clicking on the item´s cross
                                    initItemsEvents($items);

                                    // on window resize get the window´s size again
                                    // reset some values..
                                    $window.on('debouncedresize', function () {

                                        scrollExtra = 0;
                                        previewPos = -1;
                                        // save item´s offset
                                        saveItemInfo();
                                        getWinSize();
                                        var preview = $.data(this, 'preview');
                                        if (typeof preview != 'undefined') {
                                            hidePreview();
                                        }

                                    });

                                }

                                function initItemsEvents($items) {
                                    $items.on('click', 'span.og-close', function () {
                                        hidePreview();
                                        return false;
                                    }).children('a').on('click', function (e) {

                                        var $item = $(this).parent();
                                        // check if item already opened
                                        current === $item.index() ? hidePreview() : showPreview($item);
                                        return false;

                                    });
                                }

                                function getWinSize() {
                                    winsize = {width: $window.width(), height: $window.height()};
                                }

                                function showPreview($item) {

                                    var preview = $.data(this, 'preview'),
                                        // item´s offset top
                                        position = $item.data('offsetTop');

                                    scrollExtra = 0;

                                    // if a preview exists and previewPos is different (different row) from item´s top then close it
                                    if (typeof preview != 'undefined') {

                                        // not in the same row
                                        if (previewPos !== position) {
                                            // if position > previewPos then we need to take te current preview´s height in consideration when scrolling the window
                                            if (position > previewPos) {
                                                scrollExtra = preview.height;
                                            }
                                            hidePreview();
                                        }
                                        // same row
                                        else {
                                            preview.update($item);
                                            return false;
                                        }

                                    }

                                    // update previewPos
                                    previewPos = position;
                                    // initialize new preview for the clicked item
                                    preview = $.data(this, 'preview', new Preview($item));
                                    // expand preview overlay
                                    preview.open();

                                }

                                function hidePreview() {
                                    current = -1;
                                    var preview = $.data(this, 'preview');
                                    preview.close();
                                    $.removeData(this, 'preview');
                                }

                                // the preview obj / overlay
                                function Preview($item) {
                                    this.$item = $item;
                                    this.expandedIdx = this.$item.index();
                                    this.create();
                                    this.update();
                                }

                                Preview.prototype = {
                                    create: function () {
                                        // create Preview structure:
                                        this.$title = $('<h3></h3>');
                                        this.$price = $('<h2></h2> ');
                                        this.$description = $('<p></p>');
                                        this.$href = $('<a href="#">Buy now</a>');
                                        this.$details = $('<div class="og-details"></div>').append(this.$title, this.$price, this.$description, this.$href);
                                        this.$loading = $('<div class="og-loading"></div>');
                                        this.$fullimage = $('<div class="og-fullimg"></div>').append(this.$loading);
                                        this.$closePreview = $('<span class="og-close"></span>');
                                        this.$previewInner = $('<div class="og-expander-inner"></div>').append(this.$closePreview, this.$fullimage, this.$details);
                                        this.$previewEl = $('<div class="og-expander"></div>').append(this.$previewInner);
                                        // append preview element to the item
                                        this.$item.append(this.getEl());
                                        // set the transitions for the preview and the item
                                        if (support) {
                                            this.setTransition();
                                        }
                                    },
                                    update: function ($item) {

                                        if ($item) {
                                            this.$item = $item;
                                        }

                                        // if already expanded remove class "og-expanded" from current item and add it to new item
                                        if (current !== -1) {
                                            var $currentItem = $items.eq(current);
                                            $currentItem.removeClass('og-expanded');
                                            this.$item.addClass('og-expanded');
                                            // position the preview correctly
                                            this.positionPreview();
                                        }

                                        // update current value
                                        current = this.$item.index();

                                        // update preview´s content
                                        var $itemEl = this.$item.children('a'),
                                            eldata = {
                                                href: $itemEl.attr('href'),
                                                largesrc: $itemEl.data('largesrc'),
                                                title: $itemEl.data('title'),
                                                price: $itemEl.data('price') + ' bucks',
                                                description: $itemEl.data('description')
                                            };

                                        this.$title.html(eldata.title);
                                        this.$price.html(eldata.price);
                                        this.$description.html(eldata.description);
                                        this.$href.attr('href', eldata.href);

                                        var self = this;

                                        // remove the current image in the preview
                                        if (typeof self.$largeImg != 'undefined') {
                                            self.$largeImg.remove();
                                        }

                                        // preload large image and add it to the preview
                                        // for smaller screens we don´t display the large image (the media query will hide the fullimage wrapper)
                                        if (self.$fullimage.is(':visible')) {
                                            this.$loading.show();
                                            $('<img/>').load(function () {
                                                var $img = $(this);
                                                if ($img.attr('src') === self.$item.children('a').data('largesrc')) {
                                                    self.$loading.hide();
                                                    self.$fullimage.find('img').remove();
                                                    self.$largeImg = $img.fadeIn(350);
                                                    self.$fullimage.append(self.$largeImg);
                                                }
                                            }).attr('src', eldata.largesrc);
                                        }

                                    },
                                    open: function () {

                                        setTimeout($.proxy(function () {
                                            // set the height for the preview and the item
                                            this.setHeights();
                                            // scroll to position the preview in the right place
                                            this.positionPreview();
                                        }, this), 25);

                                    },
                                    close: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    $(this).off(transEndEventName);
                                                }
                                                self.$item.removeClass('og-expanded');
                                                self.$previewEl.remove();
                                            };

                                        setTimeout($.proxy(function () {

                                            if (typeof this.$largeImg !== 'undefined') {
                                                this.$largeImg.fadeOut('fast');
                                            }
                                            this.$previewEl.css('height', 0);
                                            // the current expanded item (might be different from this.$item)
                                            var $expandedItem = $items.eq(this.expandedIdx);
                                            $expandedItem.css('height', $expandedItem.data('height')).on(transEndEventName, onEndFn);

                                            if (!support) {
                                                onEndFn.call();
                                            }

                                        }, this), 25);

                                        return false;

                                    },
                                    calcHeight: function () {

                                        var heightPreview = winsize.height - this.$item.data('height') - marginExpanded,
                                            itemHeight = winsize.height;

                                        if (heightPreview < settings.minHeight) {
                                            heightPreview = settings.minHeight;
                                            itemHeight = settings.minHeight + this.$item.data('height') + marginExpanded;
                                        }

                                        this.height = heightPreview;
                                        this.itemHeight = itemHeight;

                                    },
                                    setHeights: function () {

                                        var self = this,
                                            onEndFn = function () {
                                                if (support) {
                                                    self.$item.off(transEndEventName);
                                                }
                                                self.$item.addClass('og-expanded');
                                            };

                                        this.calcHeight();
                                        this.$previewEl.css('height', this.height);
                                        this.$item.css('height', this.itemHeight).on(transEndEventName, onEndFn);

                                        if (!support) {
                                            onEndFn.call();
                                        }

                                    },
                                    positionPreview: function () {

                                        // scroll page
                                        // case 1 : preview height + item height fits in window´s height
                                        // case 2 : preview height + item height does not fit in window´s height and preview height is smaller than window´s height
                                        // case 3 : preview height + item height does not fit in window´s height and preview height is bigger than window´s height
                                        var position = this.$item.data('offsetTop'),
                                            previewOffsetT = this.$previewEl.offset().top - scrollExtra,
                                            scrollVal = this.height + this.$item.data('height') + marginExpanded <= winsize.height ? position : this.height < winsize.height ? previewOffsetT - ( winsize.height - this.height ) : previewOffsetT;

                                        $body.animate({scrollTop: scrollVal}, settings.speed);

                                    },
                                    setTransition: function () {
                                        this.$previewEl.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                        this.$item.css('transition', 'height ' + settings.speed + 'ms ' + settings.easing);
                                    },
                                    getEl: function () {
                                        return this.$previewEl;
                                    }
                                }

                                return {
                                    init: init,
                                    addItems: addItems
                                };

                            })();
                            Grid.init();
                            $(function () {
                                $(".item").hover(
                                    function () {
                                        $(this).parent().find('.details').addClass("active");
                                    }, function () {
                                        $(this).parent().find('.details').removeClass("active");
                                    }
                                );
                            })
                        }).fail(function () {
                            alert('Articles could not be loaded.');
                        });
                    }
                });

            })
        })
    </script>

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
