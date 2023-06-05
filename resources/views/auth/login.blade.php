@extends('layouts.app')

@section('content')

<div id="wrapper" class="wrapper">
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->

    <!-- Header -->
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
                                    <!--Homes -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item " href="index.html">homepage 1 </a></li>
                                            <li><a class="dropdown-item" href="index-2.html">homepage 2</a></li>
                                            <li><a class="dropdown-item" href="index-3.html">homepage 3</a></li>
                                            <li><a class="dropdown-item" href="index-4.html">homepage 4 </a></li>
                                            <li><a class="dropdown-item" href="index-5.html">homepage 5 </a></li>
                                            <li><a class="dropdown-item" href="index-6.html">homepage 6 </a></li>
                                            <li><a class="dropdown-item" href="index-7.html">homepage 7 </a></li>
                                            <li><a class="dropdown-item" href="index-8.html">homepage 8 </a></li>
                                            <li><a class="dropdown-item" href="index-9.html">homepage 9</a></li>
                                        </ul>
                                    </li>

                                    <!--Posts features -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Post features</a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item " href="post-default.html">post default </a></li>
                                            <li><a class="dropdown-item" href="post-left-sidebar.html">post left sidebar </a></li>
                                            <li><a class="dropdown-item" href="post-no-sidebar.html">post no sidebar</a></li>
                                            <li><a class="dropdown-item" href="post-video.html">post video </a></li>
                                            <li><a class="dropdown-item" href="post-audio.html">post audio </a></li>
                                            <li><a class="dropdown-item" href="post-gallery.html">post gallery </a></li>
                                        </ul>
                                    </li>

                                    <!--Blogs-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"> blogs </a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item " href="blog-grid.html">Blog grid</a></li>
                                            <li><a class="dropdown-item" href="blog-masonry.html">Blog masonry</a></li>
                                            <li><a class="dropdown-item" href="blog-list.html">Blog list</a></li>
                                            <li><a class="dropdown-item" href="blog-classic.html">Blog classic</a></li>
                                        </ul>
                                    </li>

                                    <!--Pages-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle active" href="javascript:void(0)" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false"> pages </a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item" href="author.html">author </a></li>
                                            <li><a class="dropdown-item" href="about.html">about us </a> </li>
                                            <li><a class="dropdown-item" href="contact.html">contact us</a></li>
                                            <li><a class="dropdown-item active " href="login.html">login</a></li>
                                            <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                                            <li><a class="dropdown-item" href="page404.html">404 page</a></li>
                                        </ul>
                                    </li>

                                    <!--contact -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html"> contact </a>
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
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
                        <div class="search-icon"> <a href="#search"> <i class="fas fa-search"></i></a></div>

                        <!--navbar-toggler-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header><!--/-->

    <main class="main">
        <!--Login-->
        <section class="mt-60 mb-60">
            <div class="container">
                <div class="sign widget ">
                    <div class="section-title">
                        <h5>Login</h5>
                    </div>
                    <form method="POST"  class="sign-form widget-form " action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="sign-controls form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link ml-auto" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-custom"> {{ __('Login Now') }}</button>
                        </div>

                        <p class="form-group text-center">Don't have an account? <a href="{{ route('register') }}" class="btn-link">Create One</a> </p>

                     </form>

                </div>
            </div>
        </section>

        <!--newslettre-->
        <section class="newslettre">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-11 m-auto">
                        <div class="newslettre-width text-center">
                            <div class="newslettre-info">
                                <h3 class="title">
                                    Get The Best Blog Stories into Your inbox!</h3>
                                <p> Sign up for free and be the first to get notified about new posts. </p>
                            </div>
                            <form action="#" class="newslettre-form">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email adress" required="required">
                                    </div>
                                    <button class="submit-btn" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <div class="social-icones">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>Twitter </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>Instagram </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>Youtube</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>© Copyright 2021 <a href="#">AssiaGroupe</a>, All rights reserved.</p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                    <div class="search-width  text-center">
                        <button type="button" class="close">
                            <i class="fas fa-times"></i>
                        </button>
                        <form class="search-form" action="#">
                            <input type="search" value="" placeholder="What are you looking for?">
                            <button type="submit" class="search-btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/-->
</div>
@endsection
