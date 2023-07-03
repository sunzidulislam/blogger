@php
$tags = $post->tags ?? "";
if (isset($tags)){
    $tags =explode(' ', $tags);
}
 @endphp

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
         <!--post-default-->
         <section class="mt-60  mb-30">
             <div class="container-fluid">
                 <div class="row">

                     <div class="col-xl-9 order-xl-2 order-lg-1 order-md-1 order-sm-1 order-1 side-content">
                         <div class="theiaStickySidebar">
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
                                                     <li class="post-author-img"><a href="author.html"> <img src="{{ asset($post->user->avatar) }}" alt=""></a></li>
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
                                         {{--                                {{ $posts->links() }}--}}
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
                     </div>
                     <div class="col-xl-3 order-xl-1  order-md-2 order-sm-2  order-2 max-width side-sidebar">
                         <div class="theiaStickySidebar">
                             <!--widget-latest-posts-->

                             <!--widget-author-->
                             <div class="widget">
                                 <div class="widget-author">
                                     <div class="author-img">
                                         <a href="author.html" class="image">
                                             <img src="{{ asset($post->user->avatar) }}" alt="">
                                         </a>
                                     </div>
                                     <div class="author-content">
                                         <h6 class="name"> Hi, I'm {{ $post->user->name }}</h6>
                                         <p class="bio">
                                             A professional Laravel Developer.
                                             I love Photography,travel and nature. I'm working as a writer and blogger with experience
                                             of 5 years until now.
                                         </p>
                                         <div class="social-media">
                                             <ul class="list-inline">
                                                 <li>
                                                     <a href="https://www.facebook.com/sunzidulislam.12" class="color-facebook">
                                                         <i class="fab fa-facebook"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="https://www.youtube.com/" class="color-instagram">
                                                         <i class="fab fa-instagram"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="https://twitter.com/elonmusk" class="color-twitter">
                                                         <i class="fab fa-twitter"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="https://www.linkedin.com/in/sunzidul-islam-777b19163/" class="color-youtube">
                                                         <i class="fab fa-youtube"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="https://www.linkedin.com/in/sunzidul-islam-777b19163/" class="color-pinterest">
                                                         <i class="fab fa-pinterest"></i>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!--/-->


                             <div class="widget ">
                                 <div class="section-title">
                                     <h5>Latest Posts</h5>
                                 </div>
                                 <ul class="widget-latest-posts">

                                     @foreach($latestPosts as $key => $post)

                                         <li class="post-item">
                                         <div class="image">
                                             <a href="{{ route('single.post', ['id' => $post->id]) }}"> <img src="{{ asset($post->image) }}" alt="..."></a>
                                         </div>
                                         <div class="count">{{ $key+1 }}</div>
                                         <div class="content">
                                             <p class="entry-title"><a href="post-default.html">{{ $post->title }}</a></p>
                                             <small class="post-date"><i class="fas fa-clock"></i> {{ date("F d, Y", strtotime( $post->created_at )) }}</small>
                                         </div>
                                     </li>
                                     @endforeach
                                 </ul>
                             </div>
                             <!--/-->

                             <!--widget-categories-->
                             <div class="widget">
                                 <div class="section-title">
                                     <h5>Categories</h5>
                                 </div>
                                 <ul class="widget-categories">

                                     @foreach($categories as $cat)
                                         <li>
                                             <a href="#" class="categorie">{{ ucwords($cat->name) }}</a>
                                             <span class="ml-auto">{{ $cat->posts_count. " " }} Posts</span>
                                         </li>
                                     @endforeach


                                 </ul>
                             </div>

                         </div>
                     </div>

                 </div>
             </div>
         </section><!--/-->

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


     <!--/-->
    </div>


@endsection
