@extends ('layout.app')
@section('content')

@include('clientheader.header')

<!-- Carousel Section -->
<section class="h-100">
    @include('slider.carousel')
</section>
<!-- Ona Section -->
<section class="pt-5">
    <div class="container">
        <h3 class="message-heading">ONA CONFERENCES</h3>
        <p class="message-description ">See our event</p>
        <div class="row">
            <div class="slider-1 owl-carousel">
                <div class="mb-2">
                    <div class="new-shadow p-3 mb-5 bg-white rounded" id="card-ona">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('image/ONA.png')}}" class="img-fluid img-size">
                            <div class="ml-auto">
                                <h4 class="ona-year pull-right">ONA 2023</h4>
                            </div>
                        </div>
                        <hr style="color: #DF7426;">
                        <h5 class="mt-2 date">19-20 December 2019</h5>
                        <p class="v-des">The aims of the third Regional Conference on Optical character recognition and
                            Natural
                            language processing...<br></p>
                        <div class="read-more-link text-right">
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="  mb-2">
                    <div class="new-shadow p-3 mb-5 bg-white rounded" id="card-ona">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('image/ONA.png')}}" class="img-fluid img-size">
                            <div class="ml-auto">
                                <h4 class="ona-year pull-right">ONA 2022</h4>
                            </div>
                        </div>
                        <hr style="color: #DF7426;">
                        <h5 class="mt-2 date">19-20 December 20192</h5>
                        <p class="v-des">The aims of the third Regional Conference on Optical character recognition and
                            Natural
                            language processing...<br></p>
                        <div class="read-more-link text-right">
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="  mb-2">
                    <div class="new-shadow p-3 mb-5 bg-white rounded" id="card-ona">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('image/ONA.png')}}" class="img-fluid img-size">
                            <div class="ml-auto">
                                <h4 class="ona-year pull-right">ONA 2021</h4>
                            </div>
                        </div>
                        <hr style="color: #DF7426;">
                        <h5 class="mt-2 date">19-20 December 20192</h5>
                        <p class="v-des">The aims of the third Regional Conference on Optical character recognition and
                            Natural
                            language processing...<br></p>
                        <div class="read-more-link text-right">
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Our Lab Research Section -->
<section class="new-section pt-5 " style="background-color:#f6f9fe;">
    <div class="container">
        <h3 class="message-heading">OUR LAB RESEARCH</h3>
        <p class="message-description ">See our research</p>
        <div class="row animate__animated animate__fadeInLeft">
            <div class="owl-carousel lab-carousel">
                <div class="lab-item">
                    <a href="#">
                        <div class="new-shadow p-5 bg-white mb-5 rounded text-center  ">
                            <img src="{{ asset('image/svg/data-science.svg') }}" class="img-fluid lab-img mb-4 w-50"
                                alt="slide">
                            <h4 class="message-heading"> Data Science </h4>
                        </div>
                    </a>
                </div>
                <div class="lab-item">
                    <a href="#">
                        <div class="new-shadow p-5 bg-white mb-5 rounded text-center lol">
                            <img src="{{ asset('image/svg/learning.svg') }}" class="img-fluid lab-img mb-4 w-50"
                                alt="slide">
                            <h4 class="message-heading"> AI </h4>
                        </div>
                    </a>
                </div>
                <div class="lab-item">
                    <a href="#">
                        <div class="new-shadow p-5 mb-5 bg-white rounded text-center">
                            <img src="{{ asset('image/svg/smart-farm.svg') }}" class="img-fluid lab-img mb-4 w-50"
                                alt="slide">
                            <h4 class="message-heading"> IOT </h4>
                        </div>
                    </a>
                </div>
                <div class="lab-item">
                    <a href="">
                        <div class="new-shadow p-5 mb-5 bg-white rounded text-center">
                            <img src="{{ asset('image/svg/benchmark.svg') }}" class="img-fluid lab-img mb-4 w-50"
                                alt="slide">
                            <h4 class="message-heading"> Policy </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>
<!-- Message From director Section -->
<section id="message" class="pt-5 pb-5">
    <div class="container">
        <div class="row animate__animated animate__fadeInLeft d-flex flex-wrap align-items-center">
            <div class="col-md-6 mb-2">
                <div class="">
                    <img src="{{asset('image/oudom.jpg')}}" class="img-fluid new-shadow rounded" style="width:350px;">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="">
                    <h3 class="message-heading"> MESSAGE FROM DIRECTOR</h3>
                    <p class="message-description">
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <p class="message-description"> We are excited to announce the winners of ASEAN DSE 2020!
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <button class="btn read-more-btn">Read More</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Vision Section -->
<section id="message" class="pt-5 pb-5" style="background-color:#f6f9fe;">
    <div class="container">
        <div class="row animate__animated animate__fadeInLeft d-flex flex-wrap align-items-center">
            <div class="col-md-6 mb-2">
                <div class="">
                    <h3 class="message-heading"> OUR VISION</h3>
                    <p class="message-description">
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <p class="message-description"> We are excited to announce the winners of ASEAN DSE 2020!
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <button class="btn read-more-btn">Read More</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="text-center">
                    <img src="{{ asset('image/svg/svg-pic1.svg') }}" class="img-fluid rounded" style="width:350px;">
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Mission Section -->
<section id="message" class="pt-5 pb-5">
    <div class="container">
        <div class="row animate__animated animate__fadeInLeft d-flex flex-wrap align-items-center">
            <div class="col-md-6 mb-2">
                <div>
                    <img src="{{ asset('image/svg/svg-pic2.svg') }}" class="img-fluid rounded" style="width:350px;">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="">
                    <h3 class="message-heading"> OUR MISSION</h3>
                    <p class="message-description">
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <p class="message-description"> We are excited to announce the winners of ASEAN DSE 2020!
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <button class="btn read-more-btn">Read More</button>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Core Value Section -->
<section id="message" class="pt-5 pb-5" style="background-color:#f6f9fe;">
    <div class="container">
        <div class="row animate__animated animate__fadeInLeft d-flex flex-wrap align-items-center">
            <div class="col-md-6 mb-2">
                <div class="">
                    <h3 class="message-heading"> OUR CORE VALUE</h3>
                    <p class="message-description">
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <p class="message-description"> We are excited to announce the winners of ASEAN DSE 2020!
                        Find out which teams emerged as the top three regional finalists with their sustainable &
                        innovative ideas and catch the virtual competition replay!</p>
                    <button class="btn read-more-btn">Read More</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="text-center">
                    <img src="{{ asset('image/svg/svg-pic3.png') }}" class="img-fluid rounded" style="width:350px;">
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Our Partner Section -->
<section id="message" class="pt-5 pb-5">
    <div class="container">
        <h3 class="message-heading"> OUR PARTNER</h3>
        <p class="message-description">
            Without them we barely win</p>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{asset('image/partner/p2.jpg')}}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p2.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p2.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p2.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p2.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p2.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Apple</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="text-center new-shadow p-3 bg-white rounded">
                                <img src="{{ asset('image/partner/p1.jpg') }}" class="img-fluid rounded-circle"
                                    style="width:70px;">
                                <p class="message-heading">Cisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
 <!-- Start: Footer Dark -->
 <footer id="footer">
 <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
 </footer>

@include('clientfooter.footer')
@endsection