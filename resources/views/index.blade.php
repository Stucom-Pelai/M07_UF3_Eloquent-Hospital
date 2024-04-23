@extends('layouts.app')
@section('content')
<script>
   // document.addEventListener('DOMContentLoaded', function() {
   //    alert('Please update the Livewire package.   Steps: 3, 7, 8, 10(More information in "Readme.md")');
   // });

</script>
<livewire:language-switcher />
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
               <h3>{{ __('message.emergency_case') }}</h3>

               <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>{{ __('message.working_hours') }}</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">{{ __('message.Monday-Friday') }}</span><span class="right">8.00 – 18.00</span></li>
                     <li><span class="left">{{ __('message.Saturday') }}</span><span class="right">8.00 – 16.00</span></li>
                     <li><span class="left">{{ __('message.Sunday') }}</span><span class="right">8.00 – 13.00</span></li>
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
         <h2>{{ __('message.The_specialist_clinic') }}</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>{{ __('message.What_we_do') }}</h4>
               <h2>{{ __('message.Clinic_service') }}</h2>
               <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p>
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
               <h3>{{ __('message.Digital_control_center') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('message.Hygienic_operating_room') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('message.Specialist_physicians') }}</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/pharmacy.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/pharmacy.jpg" alt="" class="img-responsive">
               </div>
               <h3>{{ __('message.Pharmacy') }}</h3>
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
                      <h4>{{ __('message.PREMIUM_FACILITIES') }}</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>{{ __('message.LARGE_LABORATORY') }}</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>{{ __('message.DETAILED_SPECIALIST') }}</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>{{ __('message.CHILDREN_CARE_CENTER') }}</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>{{ __('message.FINE_INFRASTRUCTURE') }}</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>{{ __('message.ANYTIME_BLOOD_BANK') }}</h4>
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
         <h2>{{ __('message.Our_Team') }}</h2>
      </div>

      <div class="row dev-list text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="widget clearfix">
                  <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Soren Bo Bostian</h3>
                      <small>{{ __('message.Clinic_Owner') }}</small>
                  </div>
                  <!-- end title -->
                  <p>{{ __('message.Team_Presentation') }}</p>

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
                      <small>{{ __('message.Internal_Diseases') }}</small>
                  </div>
                  <!-- end title -->
                  <p>{{ __('message.Team_Presentation') }}</p>

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
                      <small>{{ __('message.Orthopedics_Expert') }}</small>
                  </div>
                  <!-- end title -->
                  <p>{{ __('message.Team_Presentation') }}</p>

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

{{-- <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane active fade in" id="tab1">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Shared Hosting</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
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
                              <h2>WordPress Hosting</h2>
                              <h3>$59/year</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
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
                              <h2>Reseller Hosting</h2>
                              <h3>$85/one-time</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
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
               <div class="tab-pane fade" id="tab2">
                  <div class="row text-center">
                     <div class="col-md-6">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Dedicated Server</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>VPS Server</h2>
                              <h3>$59/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
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
         <h2>{{ __('message.Testimonials') }}</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> {{ __('message.The_amazing_clinic') }}</h3>
                  <p class="lead">{{ __('message.Description_Testimonials') }}</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>James Fernando <small>{{ __('message.Manager_of_Racer') }}</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> {{ __('message.Thanks_for_Help_us') }}</h3>
                  <p class="lead">{{ __('message.Description_Testimonials') }}</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Andrew Atkinson <small>{{ __('message.Life_Manager') }}</small></h4>
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
                  <h3><i class="fa fa-quote-left"></i> {{ __('message.The_amazing_clinic') }}</h3>
                  <p class="lead">{{ __('message.Description_Testimonials') }}</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Amanda DOE <small>{{ __('message.Manager_of_Racer') }}</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> {{ __('message.Thanks_for_Help_us') }}</h3>
                  <p class="lead">{{ __('message.Description_Testimonials') }}</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Martin Johnson <small>{{ __('message.Founder_of_Goosilo') }}</small></h4>
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
