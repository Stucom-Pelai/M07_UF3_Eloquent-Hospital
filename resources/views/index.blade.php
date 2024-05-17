@extends('layouts.app')
@section('content')

<script>
   var botmanWidget = {
      aboutText: 'Life♥Care',
      introMessage: "{{ __('messages.Clinic_service') }}",
   };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');" {{ $app = App\Models\settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <span class="center"><span class="icon"><img src="{{ ($app->icon_logo_path) ? $app->icon_logo_path:'images/icon-logo.png' }}" alt="#" /></span></span>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Life Care", "We Care Your Health", "We are Expert!" ]'>
                     <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2895f1;">
               <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
               <h3>{{ __('messages.emergency_case') }}</h3>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>{{ __('messages.working_hours') }}</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">{{ __('messages.Monday-Friday') }}</span><span class="right">8.00 – 18.00</span></li>
                     <li><span class="left">{{ __('messages.Saturday') }}</span><span class="right">8.00 – 16.00</span></li>
                     <li><span class="left">{{ __('messages.Sunday') }}</span><span class="right">8.00 – 13.00</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#0060b1;">
               <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
               <h3>{{ __('message.Clinic_timetable') }}</h3>
               <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <!-- <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span> -->
         <span class="icon-logo">
            <img src="{{ asset($app->icon_logo_path ?? 'images/icon-logo.png') }}" alt="#">
         </span>
         <h2>{{ __('messages.The_specialist_clinic') }}</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>{{ __('messages.What_we_do') }}</h4>
               <h2>{{ __('messages.Clinic_service') }}</h2>
               <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
               <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('messages.Digital_control_center') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('messages.Hygienic_operating_room') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('messages.Specialist_physicians') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/pharmacy.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/pharmacy.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('messages.Pharmacy') }}</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="inner-services">
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                     <h4>{{ __('messages.PREMIUM_FACILITIES') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                     <h4>{{ __('messages.LARGE_LABORATORY') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                     <h4>{{ __('messages.DETAILED_SPECIALIST') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                     <h4>{{ __('messages.CHILDREN_CARE_CENTER') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                     <h4>{{ __('messages.FINE_INFRASTRUCTURE') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                     <h4>{{ __('messages.ANYTIME_BLOOD_BANK') }}</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
               </div>
            </div>
         </div>
         @livewire('appointmentform')
      </div>
   </div>
</div>
<!-- end section -->

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
   <div class="container">

      <div class="heading">
         <!-- <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span> -->
         <span class="icon-logo">
            <img src="{{ asset($app->icon_logo_path ?? 'images/icon-logo.png') }}" alt="#">
         </span>
         <h2>{{ __('messages.Our_Team') }}</h2>
      </div>

      <div class="row dev-list text-center">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
            <div class="widget clearfix">
               <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Soren Bo Bostian</h3>
                  <small>{{ __('messages.Clinic_Owner') }}</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div><!--widget -->
         </div><!-- end col -->

         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
            <div class="widget clearfix">
               <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Bryan Saftler</h3>
                  <small>{{ __('messages.Internal_Diseases') }}</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div><!--widget -->
         </div><!-- end col -->

         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
            <div class="widget clearfix">
               <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Matthew Bayliss</h3>
                  <small>{{ __('messages.Orthopedics_Expert') }}</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div><!--widget -->
         </div><!-- end col -->

      </div><!-- end row -->
   </div><!-- end container -->
</div>

<div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <div class="container">
      <div class="heading">
         <!-- <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span> -->
         <span class="icon-logo">
            <img src="{{ asset($app->icon_logo_path ?? 'images/icon-logo.png') }}" alt="#">
         </span>
         <h2>{{ __('messages.Our_Plans') }}</h2>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane active fade in" id="tab1">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Bronze</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-hospital-o"></i> <strong>25</strong> Hospitals</p>
                              <p><i class="fa fa-heartbeat"></i> <strong>2</strong> Checks by year</p>
                              <p><i class="fa fa-ambulance"></i> <strong>4</strong> Ambulance services</p>
                              <p><i class="fa fa-stethoscope"></i> <strong>1</strong> Personal doctor</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>Gold</h2>
                              <h3>$590/year</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-hospital-o"></i> <strong>200</strong> Hospitals</p>
                              <p><i class="fa fa-heartbeat"></i> <strong>4</strong> Checks by year</p>
                              <p><i class="fa fa-ambulance"></i> <strong>Any</strong> Ambulance services</p>
                              <p><i class="fa fa-stethoscope"></i> <strong>3</strong> Personal doctor</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Silver</h2>
                              <h3>$150/MONTH</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>100</strong> Hospitals</p>
                              <p><i class="fa fa-rocket"></i> <strong>3</strong> Checks by year</p>
                              <p><i class="fa fa-database"></i> <strong>10</strong> Ambulance services</p>
                              <p><i class="fa fa-link"></i> <strong>2</strong> Personal doctor</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>               
               <!-- end pane -->
            </div>
            <!-- end content -->
         </div>
         <!-- end col -->
      </div>
   </div>
</div>

<!-- end doctor section --> --}}

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ ($app->icon_logo_path) ? $app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span>
         <h2>{{ __('messages.Testimonials') }}</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>James Fernando <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Andrew Atkinson <small>- Life Manager</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Amanda DOE <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Martin Johnson <small>- Founder of Goosilo</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
@livewire('contactus')

@endsection