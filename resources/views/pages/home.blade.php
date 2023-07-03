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
                       @foreach($sliderPosts as $post)
                           <div class="swiper-slide slider-item" style="background-image: url({{ asset($post->image) }});">
                               <div class="container-fluid">
                                   <div class="row">
                                       <div class="col-xl-7 col-lg-9 col-md-12">
                                           <div class="slider-item-inner">
                                               <div class="slider-item-content">
                                                   <div class="entry-cat ">
                                                       <a href="{{ route('single.post', ['id' => $post->id]) }}" class="categorie">{{ $post->category->name }} </a>
                                                   </div>
                                                   <h1 class="entry-title">
                                                       <a href="{{ route('single.post', ['id' => $post->id]) }}"> {{ $post->title }}</a>
                                                   </h1>
                                                   <div class="post-exerpt">
                                                       <p>{{ $post->description }}</p>
                                                   </div>

                                                   <ul class="entry-meta list-inline">
                                                       <li class="post-author-img"><a href="#"> <img src="{{ asset($post->user->avatar) }}" alt=""></a></li>
                                                       <li class="post-author"><a href="#">{{ $post->user->name }}</a> </li>
                                                       <li class="post-date"> <span class="dot"></span>  {{ date('F j, Y', strtotime($post->created_at)) }}</li>
                                                       <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @endforeach

                   </div>
                </div>

                <div thumbsSlider="" class="swiper swiper-bottom container-fluid" >
                    <div class="swiper-wrapper ">
                        <!--slider1-->
                        @foreach($thumbPosts as $post)
                            <div class="swiper-slide">
                                <div class="post-item">
                                    <img src="{{ asset($post->image) }}"  alt="">
                                    <div class="details">
                                        <p class="entry-title">
                                            <a href="{{ route('single.post', ['id' => $post->id]) }}"><span>{{ $post->title }}</span></a>
                                        </p>
                                        <ul class="entry-meta list-inline">
                                            <li class="post-date"> <i class="fas fa-clock"></i>  {{ date('F j, Y', strtotime($post->created_at)) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
                                        <a href="{{ route('single.post', ['id' => $post->id]) }}">
                                            <img src="{{ asset($post->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-card-content">
                                        <div class="entry-cat">
                                            <a href="{{ route('single.post', ['id' => $post->id]) }}" class="categorie"> {{ $post->category->name }}</a>
                                        </div>

                                        <h5 class="entry-title">
                                            <a href="{{ route('single.post', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                        </h5>

                                        <div class="post-exerpt">
                                            <p>{{ $post->description }}</p>
                                        </div>

                                        <ul class="entry-meta list-inline">
                                            <li class="post-author-img"><a href="#"> <img src="{{ asset($post->user->avatar) }}" alt=""></a></li>
                                            <li class="post-author"><a href="#">{{ $post->user->name }}</a> </li>
                                            <li class="post-date"> <span class="dot"></span>{{ date("F d, Y", strtotime( $post->created_at )) }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/-->
                            </div>
                        @endforeach

                            <div class="col-lg-12">
                                <div class="pagination">
                                   <ul class="list-inline">
                                        @if ($posts->currentPage() > 1)
                                            <li><a href="{{ $posts->previousPageUrl() }}"><i class="fas fa-arrow-left"></i></a></li>
                                        @endif

                                        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                            @if ($page == $posts->currentPage())
                                                <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                                            @else
                                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        @if ($posts->currentPage() < $posts->lastPage())
                                            <li><a href="{{ $posts->nextPageUrl() }}"><i class="fas fa-arrow-right"></i></a></li>
                                        @endif
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
                                            <a href="{{ $social->fb_url }}">
                                                <i class="fab fa-facebook-f"></i>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="{{ $social->tw_url }}">
                                                <i class="fab fa-twitter"></i>Twitter</a>
                                        </li>
                                        <li>
                                            <a href="{{ $social->li_url }}">
                                                <i class="fab fa-linkedin"></i>LinkedIn</a>
                                        </li>
                                        <li>
                                            <a href="{{ $social->in_url }}">
                                                <i class="fab fa-instagram"></i>Instagram</a>
                                        </li>
                                        <li>
                                            <a href="{{ $social->be_url }}">
                                                <i class="fab fa-behance"></i>Behance</a>
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
