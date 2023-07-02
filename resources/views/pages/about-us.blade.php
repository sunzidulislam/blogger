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

     <main class="main ">
         <!--about-us-->
         <section class=" mt-90 mb-10">
             <div class="container-fluid">
                 <div class="row ">
                     <div class="col-xl-9 m-auto">
                         <div class="about-us">
                             <div class="about-us-image">
                                 <img src="assets/img/pic/about-us.jpg" alt="">
                             </div>
                             <div class="description">
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                     perferendis minima accusamus aliquam reprehenderit autem
                                 </p>
                                 <p>
                                     praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                     perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                 </p>
                                 <p>
                                     praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                     perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                 </p>
                                 <div class="quote">
                                     <div>
                                         <i class="fas fa-quote-left"></i>
                                     </div>
                                     <h3>
                                         "My website’s kind of fun for me. I get to do drawings on that.
                                         It’s kind of fun.”
                                     </h3>
                                     <small>Jeff Bridges.</small>
                                 </div>
                                 <p>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
                                     quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
                                     Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
                                     magna faucibus id.
                                 </p>
                                 <p>
                                     praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                     perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                 </p>
                             </div>
                         </div>
                     </div>

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
        <!--/-->
    </div>


@endsection
