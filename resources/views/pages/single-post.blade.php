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
                             <!--Post-single-->
                             <div class="post-single">
                                 <div class="post-single-image">
                                     <img src="{{ asset($post->image) }}" alt="">
                                 </div>
                                 <div class="post-single-content">
                                     <a href="blog-grid.html" class="categorie">{{ $post->category->name }}</a>
                                     <h3 class="title">{{ $post->title }}</h3>
                                     <ul class="entry-meta list-inline">
                                         <li class="post-author-img"><a href="author.html"> <img src="{{ asset($post->user->avatar) }}" alt=""></a></li>
                                         <li class="post-author"><a href="author.html">{{ $post->user->name }}</a> </li>
                                         <li class="post-date"> <span class="dot"></span> {{ date("F d, Y", strtotime( $post->created_at )) }}</li>
                                         <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                         <li class="post-comment"> <span class="dot"></span> 2 comments</li>
                                     </ul>

                                 </div>

                                 <div class="post-single-body">
                                     {{ $post->description }}
                                 </div>

                                 <div class="post-single-footer">
                                     <div class="tags">
                                         <ul class="list-inline">
                                             @foreach($tags as  $tag)
                                             <li><a href="#">{{ $tag }}</a></li>
                                             @endforeach
                                         </ul>
                                     </div>
                                     <div class="social-media">
                                         <ul class="list-inline">
                                             <li>
                                                 <a href="#" class="color-facebook">
                                                     <i class="fab fa-facebook"></i>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#" class="color-instagram">
                                                     <i class="fab fa-instagram"></i>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#" class="color-twitter">
                                                     <i class="fab fa-twitter"></i>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#" class="color-youtube">
                                                     <i class="fab fa-youtube"></i>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#" class="color-pinterest">
                                                     <i class="fab fa-pinterest"></i>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div> <!--/-->

                             <!--next & previous-posts-->
                             <div class="row">
                                 @if(!is_null($prevPost))

                                 <div class="col-md-6">
                                     <div class="widget">
                                         <div class="widget-next-post">
                                             <div class="post-item">
                                                 <div class="image">
                                                     <a href="{{ route('single.post', ['id'=> $prevPost->id]) }}"> <img src="{{ asset($prevPost->image) }}" alt="..."></a>
                                                 </div>

                                                 <div class="content">
                                                     <a class="btn-link" href="{{ route('single.post', ['id'=> $prevPost->id]) }}"><i class="fas fa-arrow-left"></i>Preview post</a>
                                                     <p class="entry-title"><a href="{{ route('single.post', ['id'=> $prevPost->id]) }}">{{ $prevPost->title }}</a></p>

                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                 </div>

                                 @endif

                                 @if(!is_null($nextPost))
                                 <div class="col-md-6">
                                     <div class="widget">
                                         <div class="widget-previous-post">
                                             <div class="post-item">
                                                 <div class="image">
                                                     <a href="{{ route('single.post', ['id'=> $nextPost->id]) }}"> <img src="{{ asset($nextPost->image) }}" alt="..."></a>
                                                 </div>

                                                 <div class="content">
                                                     <a class="btn-link" href="{{ route('single.post', ['id'=> $nextPost->id]) }}"><i class="fas fa-arrow-right"></i>Next post</a>
                                                     <p class="entry-title"><a href="{{ route('single.post', ['id'=> $nextPost->id]) }}">{{ $nextPost->title }}</a></p>

                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                                     @endif
                             </div><!--/-->

                             <!--widget-comments-->
                             <div class="widget mb-50">
                                 <div class="widget-comments">
                                     <div class="title">
                                         @if(count($comments) >0 )
                                         <h5>{{ count($comments) . " " }} Comments</h5>
                                         @else
                                             <h5>No Comment</h5>
                                         @endif
                                     </div>
                                     <ul class="widget-comments-items">

                                         @foreach($comments as $comment)

                                             <li class="comment-item">
                                                 <img src="{{ asset($comment->user->avatar) ?? asset('uploads/avatar/1.jpg') }}" alt="">
                                                 <div class="content">
                                                     <ul class="info list-inline">
                                                         <li>{{ $comment->user->name }}</li>
                                                         <li class="dot"></li>
                                                         <li>{{ date("F d, Y", strtotime( $comment->created_at )) }}</li>
                                                     </ul>
                                                     <p>{{ $comment->content }}
                                                     </p>
                                                     <div><a href="#" class="btn-link"> <i class="arrow_back"></i> Reply</a></div>
                                                 </div>
                                             </li>
                                         @endforeach


                                     </ul>
                                 </div>

                                 <!--Leave-comments-->
                                 <div class="widget-form">
                                     <div class="title">
                                         <h5>Leave a Reply</h5>
                                     </div>
                                     <form class="widget-contact-form" action="{{ route('post.comment', ['id'=> $post->id]) }}" method="POST" id="main_contact_form">
                                         @csrf
                                         <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                                         <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                             Your message was sent successfully.
                                         </div>
                                         <div class="row">
                                             @auth
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
                                                 </div>
                                             </div>
                                             @endauth
                                             @guest
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                                 </div>
                                             </div>
                                             <div class="col-12 mb-20">
                                                 <div class="form-group">
                                                     <input type="text" name="website" id="website" class="form-control" placeholder="website">
                                                 </div>
                                                 <label>
                                                     <input name="name" type="checkbox" value="1" required="required">
                                                     <span>save my name , email and website in this browser for the next time I comment.</span>
                                                 </label>
                                             </div>
                                                 @endguest
                                             <div class="col-12">
                                                 <button type="submit" name="submit" class="btn-custom">
                                                     Send Comment
                                                 </button>
                                             </div>
                                         </div>
                                     </form>
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
                                             I'm David Smith, husband and father ,
                                             I love Photography,travel and nature. I'm working as a writer and blogger with experience
                                             of 5 years until now.
                                         </p>
                                         <div class="social-media">
                                             <ul class="list-inline">
                                                 <li>
                                                     <a href="#" class="color-facebook">
                                                         <i class="fab fa-facebook"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="#" class="color-instagram">
                                                         <i class="fab fa-instagram"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="#" class="color-twitter">
                                                         <i class="fab fa-twitter"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="#" class="color-youtube">
                                                         <i class="fab fa-youtube"></i>
                                                     </a>
                                                 </li>
                                                 <li>
                                                     <a href="#" class="color-pinterest">
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
