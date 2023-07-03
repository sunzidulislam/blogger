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
         <!--contact us-->
         <section class="mt-90">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-8 m-auto">
                         <div class="contact">
                             <div class="google-map">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.5761533072873!2d-78.19644468515456!3d38.91080675375955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b5c5dc680d0b2b%3A0x1e9ff0b6bb7a2f87!2s1000%20Proctor%20Ln%2C%20Front%20Royal%2C%20VA%2022630%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sma!4v1578068093888!5m2!1sfr!2sma"
                                         allowfullscreen="">
                                 </iframe>
                             </div>
                             <form action="https://formspree.io/f/mqkvzvkk" class="widget-form contact_form " method="POST" id="main_contact_form">
                                 <h5>Feel free to contact any time.</h5> @csrf
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, repudiandae.</p>
                                 <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                     Your message was sent successfully.
                                 </div>
                                 <div class="form-group">
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Your Name*" required="required">
                                 </div>

                                 <div class="form-group">
                                     <input type="email" name="email" id="email" class="form-control" placeholder="Your Email*" required="required">
                                 </div>

                                 <div class="form-group">
                                     <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject*" required="required">
                                 </div>

                                 <div class="form-group">
                                     <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message*" required="required"></textarea>
                                 </div>

                                 <button type="submit" name="submit" class="btn-custom">Send Message</button>
                             </form>
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
