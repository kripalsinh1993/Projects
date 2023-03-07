@extends('rapid.layout')
@section ('Register')
Register Page
@endsection
@section('content')
<main id="main">

<!-- ======= Contact Us Section ======= -->

<section id="contact-us" class="contact-us">
  <div class="container-fluid" data-aos="fade-up">
  <h1 class="mt-5 p-5">Register Form</h1>
<div class="row">
  <div class="col-md-3 mx-auto ml-4 mt-2 p-5">
     <div data-aos="zoom-in" data-aos-delay="100">
        
          <img src="{{ asset('rapid/assets/img/avatar.jpg')}}" alt="" class="img-fluid">
          <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.
        
            Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
            et temporibus. Labore est odio.
            Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
          </p>
</div>
        </div>
          <div class="col-md-9 mx-auto mt-2">
            <h1 align="center">Customer Register Here</h1>
            <hr class="border border-2 border-dark w-25 mx-auto">
            <div class="form-group col-md-8 mx-auto mt-2 ">
              <!-- success flash data message -->
              @if(Session("success"))
              <div class="alert alert-success">
                <span class="text-dark"><strong>Hey!</strong>{{session('success')}}</span>
              </div>
              @endif
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </div>
            <form method="post" class="me-5" style="margin-top:5%">
              @csrf
              <div class="form-group col-md-8 mx-auto mt-2">
                <input type="text" name="name" placeholder="Enter Name *" class="form-control">
              </div>
              <div class="form-group col-md-8 mx-auto mt-2">
                <input type="text" name="email" placeholder="Enter email *" class="form-control">
              </div>
              <div class="form-group col-md-8 mx-auto mt-2">
                <input type="password" name="pass" placeholder="Enter Password *" class="form-control">
              </div>
              <div class="form-group col-md-8 mx-auto mt-2">
                <input type="password" name="cpass" placeholder="Enter Confirm Password *" class="form-control">
              </div>
              <div class="form-group col-md-8 mx-auto mt-2">
                <input type="text" name="mobile" placeholder="Enter Phone *" class="form-control">
              </div>
              
              <div class="form-group col-md-8 mx-auto mt-2">
                <label class="text-success">Address *</label>
                <textarea name="address" placeholder="Address*"  class="form-control">     
                </textarea>
                </div>
                  <div class="form-group col-md-8 mx-auto mt-5">
                <input type="submit" name="sub" value="Send" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="sub" value="Reset" class="btn btn-danger btn-lg">
                </div> 
            </form>
      </div>
</div>
</div>
          
    
  <div class="container mt-5">
    <div class="row counters" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Clients</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
        <p>Projects</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hours Of Support</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hard Workers</p>
      </div>

    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
  <div class="container" data-aos="zoom-out">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-start">
        <h3 class="cta-title">Call To Action</h3>
        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Call To Action</a>
      </div>
    </div>

  </div>
</section><!--  End Call To Action Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row feature-item">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('rapid/assets/img/features-1.svg" class="img-fluid')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
        <p>
          Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
        </p>
        <p>
          Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
        </p>
      </div>
    </div>

    <div class="row feature-item mt-5 pt-5">
      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{ asset('rapid/assets/img/features-2.svg" class="img-fluid')}}" alt="">
      </div>

      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
        <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
        <p>
          Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
        </p>
        <p>
          Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
        </p>
        <p>
          Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
        </p>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->


<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container" data-aos="zoom-in">

    <header class="section-header">
      <h3>Testimonials</h3>
    </header>

    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('rapid/assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('rapid/assets/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('rapid/assets/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('rapid/assets/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Testimonials Section -->



<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="zoom-in">

    <header class="section-header">
      <h3>Our Clients</h3>
    </header>

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('rapid/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing section-bg wow fadeInUp">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Pricing</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </header>

    <div class="row flex-items-xs-middle flex-items-xs-center">

      <!-- Basic Plan  -->
      <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title">
              Basic Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>

      <!-- Regular Plan  -->
      <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title">
              Regular Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>

      <!-- Premium Plan  -->
      <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title">
              Premium Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</section><!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3>Frequently Asked Questions</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </header>

    <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
          <p>
            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection