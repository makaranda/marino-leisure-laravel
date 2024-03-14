
@extends('layouts.app')


@section('content')

    <!-- ================ start banner area ================= -->
    <section class="home-banner-area1 main-paralex-area" id="home">
      <div class="container h-100">
        <div class="main-paralex-banner">
            <img src="{{ asset('public/images/main_slider_image.jpg') }}" class="img-fuild main-paralex-image" class="img-fluid"/>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->
    
    <section class="section-margin mb-0 pb-5 mt-0 pt-5">
      <div class="container">

        <div class="row pt-5">
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0 text-center pt-4 after-slider-text">
             <h1>We are Marino Lesure</h1> 
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dignissimos, rerum at voluptates repellat distinctio neque</p>
             <a href="#" class="button button--active home-banner-btn mt-4">Explore Our Hotels</a>
          </div>
        </div>   

      </div>
    </section> 
    

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
          <div class="col-lg-8 mb-4 mb-lg-0 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Company Strategy</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ratione nesciunt suscipit aspernatur vel quasi voluptatum inventore delectus libero sint iusto eaque in mollitia tempora quae aliquam doloribus, praesentium possimus.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Our Strategy</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->  
    
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
            
          <div class="col-lg-4 order-2 order-sm-1">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Diversity & Inclusion</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ratione nesciunt suscipit aspernatur vel quasi voluptatum inventore delectus libero sint iusto eaque in mollitia tempora quae aliquam doloribus, praesentium possimus.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Our Values</a>
            </div>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0 order-1 order-sm-2 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= --> 
    

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
          <div class="col-lg-8 mb-4 mb-lg-0 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Sustainability & Social Impact</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ratione nesciunt suscipit aspernatur vel quasi voluptatum inventore delectus libero sint iusto eaque in mollitia tempora quae aliquam doloribus, praesentium possimus.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->     
     
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-0 mb-0 pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center bg-white shadow">
            
          <div class="col-lg-4 order-2 order-sm-1">
            <div class="welcome-content p-4">    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Marino Lesure Careers</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ratione nesciunt suscipit aspernatur vel quasi voluptatum inventore delectus libero sint iusto eaque in mollitia tempora quae aliquam doloribus, praesentium possimus.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Search Careers</a>
            </div>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0 order-1 order-sm-2 p-0">
            <div class="row no-gutters welcome-images">
              <div class="col-lg-12">
                <div class="card m-0">
                  <img class="" src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Card image cap" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->    

   
    
    <section class="section-margin mb-0 pb-5 mt-0 pt-5">
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
                                    <p>asdasd asdadasd asdasasd asdasd asdasd</p>
                                    <a href="#" class="owl-button">Learn More</a>
                                 </div>  
                                 <img src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Slide 1">
                              </div>
                              <div class="item">
                                 <div class="owl-slider-text-area">
                                    <h4>Sigiriya Forest Edge</h4>
                                    <p>asdasd asdadasd asdasasd asdasd asdasd</p>
                                    <a href="#" class="owl-button">Learn More</a>
                                 </div>
                                 <img src="{{ asset('public/images/home/labookelie_section_img.jpg') }}" alt="Slide 2">
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

