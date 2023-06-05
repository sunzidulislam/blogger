@extends('layouts.default')

@section('content')

  <!-- wrapper -->
 <div id="wrapper" class="wrapper">
      <!--loading -->
      <div class="loading">
          <div class="circle"></div>
      </div>
      <!--/-->

        @include('components.header')

        <main class="main">
            <!--slider-style-2-->
            <div class="slider-style2">
                <div  class="swiper swiper-top">
                   <div class="swiper-wrapper">
                      <!--slider1-->
                      <div class="swiper-slide slider-item" style="background-image: url(assets/img/blog/1.jpg);">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9 col-md-12">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-content">
                                        <div class="entry-cat ">
                                            <a href="blog-grid.html" class="categorie">interior </a>
                                        </div>
                                        <h1 class="entry-title">
                                            <a href="post-default.html"> 7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                        </h1>
                                        <div class="post-exerpt">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, harum eligendi. Ab obcaecati ratione facere ut minus illo sequi rerum!</p>
                                       </div>

                                        <ul class="entry-meta list-inline">
                                            <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                            <li class="post-author"><a href="author.html">David Smith</a> </li>
                                            <li class="post-date"> <span class="dot"></span>  February 10, 2022</li>
                                            <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                            <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                       <!--slider2-->
                      <div class="swiper-slide slider-item" style="background-image: url(assets/img/blog/2.jpg);">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-content">
                                            <div class="entry-cat ">
                                                <a href="blog-grid.html" class="categorie">livestyle</a>
                                            </div>
                                            <h1 class="entry-title">
                                                <a href="post-default.html">5 Effective Ways I’m Finding Focus in a Busy Season of Life</a>
                                            </h1>
                                            <div class="post-exerpt">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, harum eligendi. Ab obcaecati ratione facere ut minus illo sequi rerum!</p>
                                            </div>

                                            <ul class="entry-meta list-inline">
                                                <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                <li class="post-date"> <span class="dot"></span>  February 10, 2022</li>
                                                <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                                <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                        <!--slider3-->
                        <div class="swiper-slide slider-item" style="background-image: url(assets/img/blog/9.jpg);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="slider-item-inner">
                                            <div class="slider-item-content">
                                            <div class="entry-cat ">
                                                <a href="blog-grid.html" class="categorie ">
                                                    food
                                                </a>
                                            </div>
                                            <h1 class="entry-title">
                                                <a href="post-default.html">11 Things Every New Nintendo Switch Owner Should Try Or Consider</a>
                                            </h1>
                                            <div class="post-exerpt">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, harum eligendi. Ab obcaecati ratione facere ut minus illo sequi rerum!</p>
                                            </div>
                                            <ul class="entry-meta list-inline">
                                                <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                <li class="post-date"> <span class="dot"></span>  February 10, 2022</li>
                                                <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                                <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--slider4-->
                        <div class="swiper-slide slider-item" style="background-image: url(assets/img/blog/15.jpg);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="slider-item-inner">
                                            <div class="slider-item-content">
                                            <div class="entry-cat ">
                                                <a href="blog-grid.html" class="categorie">
                                                   travel
                                                </a>
                                            </div>
                                            <h1 class="entry-title">
                                                <a href="post-default.html">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                            </h1>
                                            <div class="post-exerpt">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, harum eligendi. Ab obcaecati ratione facere ut minus illo sequi rerum!</p>
                                            </div>

                                            <ul class="entry-meta list-inline">
                                                <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                <li class="post-date"> <span class="dot"></span>  February 10, 2022</li>
                                                <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                                <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

                <div thumbsSlider="" class="swiper swiper-bottom container-fluid" >
                    <div class="swiper-wrapper ">
                        <!--slider1-->
                        <div class="swiper-slide">
                            <div class="post-item">
                                <img src="assets/img/blog/1.jpg"  alt="">
                                <div class="details">
                                    <p class="entry-title">
                                        <span>7 Holiday Decor Ideas and Exactly What I Love About Each One </span>
                                        </p>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-date"> <i class="fas fa-clock"></i> February 10, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--slider2-->
                        <div class="swiper-slide">
                            <div class="post-item">
                                <img src="assets/img/blog/2.jpg"  alt="">
                                <div class="details">
                                    <h6 class="entry-title">
                                        <span>5 Effective Ways I’m Finding Focus in a Busy Season of Life </span>
                                    </h6>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-date"> <i class="fas fa-clock"></i> February 10, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--slider3-->
                        <div class="swiper-slide">
                            <div class="post-item">
                                <img src="assets/img/blog/9.jpg"  alt="">
                                <div class="details">
                                    <h6 class="entry-title">
                                        <span>11 Things Every New Nintendo Switch Owner Should Try Or Consider </span>
                                    </h6>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-date"> <i class="fas fa-clock"></i> February 10, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--slider4-->
                        <div class="swiper-slide">
                            <div class="post-item">
                                <img src="assets/img/blog/15.jpg"  alt="">
                                <div class="details">
                                    <h6 class="entry-title">
                                        <span>Get the Most Out of Iceland with our 10 Travel Tips </span>
                                        </h6>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-date"> <i class="fas fa-clock"></i> February 10, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--grid-layout-->
            <section class="mt-90">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <!--Post-1-->
                                <div class="post-card">
                                    <div class="post-card-image">
                                        <a href="post-default.html">
                                            <img src="{{ asset($post->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-card-content">
                                        <div class="entry-cat">
                                            <a href="blog-grid.html" class="categorie"> {{ $post->category->name }}</a>
                                        </div>

                                        <h5 class="entry-title">
                                            <a href="post-default.html">{{ $post->title }}</a>
                                        </h5>

                                        <div class="post-exerpt">
                                            <p>{{ $post->description }}</p>
                                        </div>

                                        <ul class="entry-meta list-inline">
                                            <li class="post-author-img"><a href="author.html"> <img src="" alt=""></a></li>
                                            <li class="post-author"><a href="author.html">{{ $post->user->name }}</a> </li>
                                            <li class="post-date"> <span class="dot"></span>{{ date("F d, Y", strtotime( $post->created_at )) }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/-->
                            </div>
                        @endforeach

                        <!--pagination-->
                        <div class="col-lg-12">
                            <div class="pagination">
                                <ul class="list-inline">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fas fa-arrow-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/-->

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