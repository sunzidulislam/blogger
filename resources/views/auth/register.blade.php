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
                                    <!--Homes -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdown1" role="button" aria-expanded="false">Home</a>
                                    </li>

                                </ul>
                                </li>

                                <!--Blogs-->
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)" id="navbarDropdown1" role="button" aria-expanded="false">Blog</a>
                                </li>


                                <!--Pages-->
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)" id="navbarDropdown1" role="button" aria-expanded="false">About us</a>
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
                        <h5>Sign Up</h5>
                    </div>

                    <form method="POST" class="sign-form widget-form contact_form " action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                            <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="sign-controls form-group">
                            <div class="custom-control custom-checkbox">
                                <label class="custom-control-label" for="rememberMe">Agree to our <a href="#" class="btn-link">terms & conditions</a> </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-custom">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <p class="form-group text-center">Already have an account? <a href="{{ route('login') }}" class="btn-link">Login</a> </p>

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

