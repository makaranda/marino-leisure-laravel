
@extends('layouts.app')


@section('content')

    <!-- ================ start banner area ================= -->
    <section class="home-banner-area1 main-paralex-area" id="home">
      <div class="container h-100">
        <div class="main-paralex-banner">
            <img src="{{ asset('public/images/sliders/main_slider_image0.jpg') }}" class="img-fuild main-paralex-image" class="img-fluid"/>      
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->
    
    <section class="section-margin mb-0 pb-5 mt-0 pt-5 main-sections section-area-0">
      <div class="container">

        <div class="row pt-5">
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0 text-center pt-4 after-slider-text">
             <h1>We are Marino Leisure</h1> 
             <h4>Your Gateway to Exceptional Hospitality</h4>
             <p>Join us on a journey of exploration as we expand our horizons, enrich the lives of those around us, and unlock a world of possibilities.</p>
             <a href="#" class="button button--active home-banner-btn mt-4">Explore Our Hotels</a>
          </div>
        </div>   

      </div>
    </section> 
    

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5 main-sections section-area-1">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
          <div class="col-lg-8 mb-4 mb-lg-0 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/home_section_company_strategy.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Company Strategy</span>
              </h2>
              <p>Marino Leisure prioritizes sustainable growth while delivering exceptional hospitality. Our focus is on providing the renowned Marino experience globally. With personalized service and a commitment to excellence, we exceed expectations and create unforgettable memories for every guest.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Our Strategy</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->  
    
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5 main-sections section-area-2">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
            
          <div class="col-lg-4 order-2 order-sm-1">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Diversity & Inclusion</span>
              </h2>
              <p>At Marino Leisure, we embrace diversity and inclusion as fundamental pillars of our core values and strategic objectives. We believe that nurturing the well-being of our people is not only a responsibility but also our most cherished cultural legacy.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Our Values</a>
            </div>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0 order-1 order-sm-2 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/home_section_diversity_and_inclusion.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= --> 
    

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5 main-sections section-area-3">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
          <div class="col-lg-8 mb-4 mb-lg-0 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/home_section_sustainability_and_social_impact.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Sustainability & Social Impact</span>
              </h2>
              <p>At Marino Leisure, we champion eco-friendly practices to safeguard our environment and uphold our brand's integrity. Through sustainable initiatives, we enhance community well-being and create positive social change, guided by our platform, Doing Good in Every Direction.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->     
     
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5 main-sections section-area-4">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
            
          <div class="col-lg-4 order-2 order-sm-1">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Marino Lesure Careers</span>
              </h2>
              <p>At Marino Leisure, we recognize the invaluable role our associates play in shaping our future. Now, you have the opportunity to be part of this exciting journey ahead.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Search Careers</a>
            </div>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0 order-1 order-sm-2 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/home_section_careers.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->    

   
    
    <section class="section-margin mb-0 pb-5 mt-0 pt-5 main-sections section-area-5">
      <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-12 mt-3">
               <div class="card destinations-items shadow-none border-0 bg-transparent hotel-carousel-area">
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12">
                          <div class="carousel-container">
                            <div class="owl-carousel owl-theme">
                              <div class="item">
                                 <div class="owl-slider-text-area">
                                    <h4>Marino Beach</h4>
                                    <p>The Hotel boasts of 300 spacious & luxurious rooms with sea or partial sea view.</p>
                                    <a href="#" class="owl-button">Learn More</a>
                                    <a href="https://marinobeach.com/" class="theme-btn2">Visit Website</a>
                                 </div>  
                                 <img src="{{ asset('public/images/hotels/marino_hotel_section_img1.jpg') }}" alt="Slide 1">
                              </div>
                              <div class="item">
                                 <div class="owl-slider-text-area">
                                    <h4>Sigiriya Forest Edge</h4>
                                    <p>Sigiriya Forest Edge offers a serene retreat just a short 10-minute ride from the Ruins.</p>
                                    <a href="#" class="owl-button">Learn More</a>   
                                    <a href="https://labookellievilla.marinobeach.com/" class="theme-btn2">Visit Website</a>
                                 </div>
                                 <img src="{{ asset('public/images/hotels/sigiriya_hotel_section_img1.jpg') }}" alt="Slide 2">
                              </div>
                            </div>
                          </div>  
                       </div>
                   </div>
               </div> 
            </div>
        </div>  
      </div>
    </section>
    
    

@endsection

@push('css')
    <style>
        .stu-manage-button-area{
            margin-top:50px;
            text-align: center;
        }
    </style>
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
@endpush

@push('js')
    <script>

    </script>
@endpush

