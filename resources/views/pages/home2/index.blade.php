
@extends('layouts.app')


@section('content')

    <!-- ================ start banner area ================= -->
    <section class="home-banner-area" id="home">
      <div class="container h-100">
        <div class="home-banner">
          <div class="text-center">
            <h4>See What a Difference a stay makes</h4>
            <h1>Luxury <em>is</em> personal</h1>
            <a class="button home-banner-btn" href="#">Book Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->

    <!-- ================ start banner form ================= -->
    {{-- <form class="form-search form-search-position">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 gutters-19">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Enter your keywords.." required>
            </div>
          </div>
          <div class="col-lg-6 gutters-19">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <div class="form-select-custom">
                    <select name="" id="">
                      <option value="" disabled selected>Arrival</option>
                      <option value="8 AM">8 AM</option>
                      <option value="12 PM">12 PM</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm gutters-19">
                <div class="form-group">
                  <div class="form-select-custom">
                    <select name="" id="">
                      <option value="" disabled selected>Number of room</option>
                      <option value="8 AM">8 AM</option>
                      <option value="12 PM">12 PM</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Departure</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Adult</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Child</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-4 gutters-19">
            <div class="form-group">
              <button class="button button-form" type="submit">Check Availability</button>
            </div>
          </div>
        </div>
      </div>
    </form>
     --}}
    <!-- ================ end banner form ================= -->
    
    <section class="section-margin mb-5 pb-5">
      <div class="container">
        <div class="section-intro text-center pb-5">
          <div class="section-intro__style">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <h2>Welcome to Labookellie Villa</h2>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0">
             <p>Nestled within the lush embrace of Labookellie Estate in Nuwara Eliya, Labookellie Villa beckons you to step into a bygone era. Meticulously restored to its original glory, this classical colonial tea planter's bungalow emanates timeless elegance. Whether you seek a family getaway or a gathering with friends, our villa promises a warm and cozy retreat amidst the enchanting misty hills of Sri Lanka <span id="dots">...</span></p>   
          </div>
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" id="section1_more">
             <p>Embark on an extraordinary journey into the heart of Sri Lanka's allure at Labookellie Villa. Nestled within the Labookellie tea plantation, our villa extends a gracious invitation to savor each moment—a chance to immerse yourself in the captivating beauty and storied history of the Labookellie tea estate. Poised at a lofty elevation of 1,538 meters (5,046 feet) above sea level in the tranquil Nuwara Eliya, Labookellie Villa serves as your gateway to an authentic escape, a sanctuary of tranquility embraced by the lush landscapes of the Labookellie tea plantation.</p> 
             <p>One captivating aspect is Labookellie's esteemed guardianship of more than 5,000 hectares of flourishing tea plantations, meticulously spread across the key tea-growing regions in Sri Lanka. From the low-lying valleys of Sabaragamuwa to the elevated central hills, where elevations exceed 1,500 meters, Labookellie Villa stands as a vibrant testament to the rich tapestry of Sri Lanka's illustrious tea heritage.</p>
             <p>Conveniently situated near the historic Labookallie Tea Centre, this venerable establishment is positioned along the Peradeniya-Badulla-Chenkaladi Highway in Nuwara Eliya.</p>
             <p>Discover the splendor of Labookellie Villa, where each visit is an opportunity to create cherished memories amidst the unparalleled beauty and history of Sri Lanka's tea country.</p>
          </div>
          <div id="" class="col-md-12 col-lg-12 text-center">
              <button type="button" class="button button--active home-banner-btn mt-4" id="readMoreBtn">Read more</button>
          </div>
        </div>
      </div>
    </section>  

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-3 pt-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <!--<div class="col-sm-7">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                </div>
              </div>-->
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home-page-secion-459x290_1.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Welcome</span> to our residence</h2>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed moved firmament gathered </p>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed</p>
              <a class="button button--active home-banner-btn mt-4" href="{{ URL::to('') }}/about-us">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-5 pt-5">
      <div class="container">
        <div class="row align-items-center">
            
          <div class="col-lg-6">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Welcome</span> to our residence</h2>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed moved firmament gathered </p>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed</p>
              <a class="button button--active home-banner-btn mt-4" href="{{ URL::to('') }}/about-us">Read More</a>
            </div>
          </div>
          
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <!--<div class="col-sm-7">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                </div>
              </div>-->
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home-page-secion-459x290.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->


    <!-- ================ Explore section start ================= -->
    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <h2>Explore Our Rooms</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/rooms-secion-360x343_1.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
                <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name1">Classic Bed Room</a></h4>
                <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
                <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
                <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name1">Book Now <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/rooms-secion-360x343.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
                <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name2">Premium Room</a></h4>
                <p>Beginning fourth dominion a creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
                <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
                <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name2">Book Now <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/rooms-secion-360x343_1.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
                <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name3">Family Room</a></h4>
                <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
                <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
                <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name3">Book Now <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Explore section end ================= -->



    <!-- ================ video section start ================= -->
    <section class="video-area pl-0 pr-0">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center flex-column text-center">
            <div class="col-12 col-md-12 pl-0 pr-0">
                <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="auto"
                        height="600"
                        poster="{{ URL::to('') }}/resources/images/home/video_background.jpg"
                        data-setup="{}"
                    >
                    <source src="{{ URL::to('') }}/resources/videos/home_video.mp4" type="video/mp4" />
                    <source src="{{ URL::to('') }}/resources/videos/home_video.mp4" type="video/webm" />
                    <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                    >
                    </p>
                </video>
          </div>
        </div>
      </div>
    </section>

    <!-- ================ video section end ================= -->

    <!-- ================ special section start ================= -->
    <section class="section-padding bg-porcelain">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <h2>Special Facilities</h2>
        </div>
        <div class="special-img mb-30px">
          <img class="img-fluid" src="{{ URL::to('') }}/resources/images/home/special_facilities.jpg" alt="">
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Luxury Rooms</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-harddrive"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Play Billiard</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-paint-bucket"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Tea Lounge</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ special section end ================= -->

    <!-- ================ carousel section start ================= -->
    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-20px">
          <div class="section-intro__style">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <h2>Our Guest Love Us</h2>
        </div>
        <div class="owl-carousel owl-theme testi-carousel">
          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial1.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>Robert Mack</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial2.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>David Alone</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial3.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>Adam Pallin</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial1.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>Robert Mack</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial2.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>David Alone</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="{{ URL::to('') }}/resources/images/home/testimonial3.png" alt="">
              </div>
              <div class="media-body">
                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                <div class="testi-carousel__intro">
                  <h3>Adam Pallin</h3>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="{{ URL::to('') }}/resources/images/home/testimonial1.png" alt="">
                </div>
                <div class="media-body">
                  <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                  <div class="testi-carousel__intro">
                    <h3>Robert Mack</h3>
                    <p>CEO & Founder</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="{{ URL::to('') }}/resources/images/home/testimonial2.png" alt="">
                </div>
                <div class="media-body">
                  <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
                  <div class="testi-carousel__intro">
                    <h3>David Alone</h3>
                    <p>CEO & Founder</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ================ carousel section end ================= -->


    <!-- ================ news section start ================= -->
    {{-- <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <h2>News & Events</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/explore1.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Hotel companies tipped the scales</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/explore2.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Try your hand inaugural industry crossword</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
                <img class="card-img" src="{{ URL::to('') }}/resources/images/home/explore3.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Hoteliers resolve to invest in guests</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- ================ news section end ================= -->




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
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script>
        // function init() {
        // var player = videojs('my-video', {
        //     autoplay: true,
        //     muted: true
        // });
        // }
</script>
@endpush

