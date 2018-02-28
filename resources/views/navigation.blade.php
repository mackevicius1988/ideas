<!-- Navbar -->
<div class="position-relative">
    <!-- sticky: 1) remove"transp-nav" class, add class="sticky-navbar" to #nav-wrapper | 2) remove navbar-fixed-top class from #nav [and navbar-transparent class too] -->
    <div id="nav-wrapper" class="transp-nav sticky-navbar sticky-visible">
        <nav id="nav" class="navbar navbar-transparent navbar-default ripple-group-parent init-animation-2"
             role="navigation">
            <!-- progressbar -->
            <div id="scroll-progressbar" class="scroll-progressbar" ">
                <div style="background-color: #551313">
                    <span class="scroll-shadow" ></span>
                </div>
            </div>
            <div class="container in-page-scroll">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" id="animated-navicon" class="navbar-toggle" data-toggle="collapse"
                            data-target="#mobile-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand ripple-group" href="#top">
                        <img  class="init-animation-4" src="img/logo.png" width="200px"/>

                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="mobile-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right cl-effect-5">
                        <li>
                            <a class="ripple-group" href="#" style="color:white !important;">
                                <span data-hover="home" style="color:white !important;">home</span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#" style="color:white !important;">
                                <span data-hover="SHOP" style="color:white !important;">SHOP</span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="/v1/about" style="color:white !important;">
                                <span data-hover="about" style="color:white !important;">about</span>
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
<!--/ Map Section -->