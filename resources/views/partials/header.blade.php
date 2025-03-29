<!-- start preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
<!-- end preloader -->

<!-- Start header -->
    <header id="header" class="site-header header-style-1 header-style-2">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo1.png') }}" alt="Logo" width="100px" height="100px"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!-- <li><a href="{{ url('/about') }}">About</a></li> -->
                        <li><a href="{{ url('/projects') }}">Projects</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="cart-search-contact">
                    <div class="get-quote">
                        <a href="https://www.linkedin.com/in/francis-uramah-89250a187/" class="theme-btn">Find Me Here!</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<!-- End header -->