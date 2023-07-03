<header class="header fixed-top">
    <div class="header-main navbar-expand-xl">
        <div class="container-fluid">
            <div class="header-main">
                <!-- logo -->
                <div class="site-branding">
                    <a class="dark-logo" href="index.html">
                        <img src="assets/img/logo/logo-dark.png" alt="">
                    </a>
                    <a class="light-logo" href="index.html">
                        <img src="assets/img/logo/logo-white.png" alt="">
                    </a>
                </div><!--/-->

                <div class="main-menu header-navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">

                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('home') }}"> Home </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}"> Blog </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{  route('aboutUs') }}"> About us </a>
                                </li>

                                <!--contact -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}"> Contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!-- header actions -->
                <div class="header-action-items">
                    <!--header-social-->
                    <ul class="header-social list-inline">
                        @auth
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <li><a href="{{ route('register') }}">Register</a></li>|
                            <li><a href="{{ route('login') }}">Login </a></li>
                        @endguest

                    </ul>


                    <!--theme-switch-->
                    <div class="theme-switch-wrapper switch-icon">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <span class="slider round ">
                                    <i class="lar la-sun icon-light"></i>
                                    <i class="lar la-moon icon-dark"></i>
                                </span>
                        </label>
                    </div>

                    <!--search-icon-->
                    <div class="search-icon">
                        <a href="{{ route('post.create') }}">
                            <i class="fas fa-search-plus"></i>
                        </a>

                    </div>



                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header><
