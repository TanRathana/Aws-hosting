@extends ('layout.app')
@section('content')

@include('clientheader.header')
<!-- Research Lab:Section -->
<section class="academi-section ">
    <div class="container d-flex h-100">
        <div class="row  align-self-center">
            <div>
                <h3 class=" message-heading text-white">RESEARCH LAB </h3>
                <h3 class=" message-heading-color ">Data Science</h3>
            </div>

        </div>
</section>
<!-- Project Section -->
<section class="research pt-5 pb-5">
    <div class="container">
        <h4 class="message-heading">Project</h4>
        <p class="message-description">What we have achieved lately...</p>
        <div class="row">
            <div class="col-md-4  card-project">
                <div class="p-3 mb-5 new-shadow card-project">
                    <div class=>
                        <img src="{{asset('image/project/project01.png')}}"
                            class="img-fluid new-shadow img-project mt-3 ">
                        <h4 class="message-heading mt-2">UNITRAIN</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="text-right">
                        <a href="">
                            <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-4  card-project">
                <div class="p-3 mb-5 new-shadow card-project">
                    <div class=>
                        <img src="{{asset('image/project/project01.png')}}"
                            class="img-fluid new-shadow img-project mt-3 ">
                        <h4 class="message-heading mt-2">UNITRAIN</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="text-right">
                        <a href="">
                            <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-4  card-project">
                <div class="p-3 mb-5 new-shadow card-project">
                    <div class=>
                        <img src="{{asset('image/project/project01.png')}}"
                            class="img-fluid new-shadow img-project mt-3 ">
                        <h4 class="message-heading mt-2">UNITRAIN</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="text-right">
                        <a href="">
                            <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="read-more-link text-right mr-4">
            <a href="#" class="read-more">
                <img src="{{asset('image/svg/next.svg')}}" class="img-fluid " style="width:20px;">
                SEE ALL
            </a>
        </div>
    </div>
</section>
<!-- Application Section -->

<!-- Publication Section -->
<section class="publication pt-5 pb-5" style="background-color:#f6f9fe;">
    <div class="container">
        <h4 class="message-heading">Publication</h4>
        <p class="message-description">What we have achieved lately...</p>
        <div class="row">
            <div class="col-md-4 ">
                <div class="p-3 mb-5 d-flex align-items-center  new-shadow  rounded">
                    <img src="{{asset('image/publication/book1.jpg')}}" class="img-fluid publication-img"
                        style="width:120px;">
                    <div class="ml-auto ">
                        <h5 class="message-heading ">Blue is Darkness</h5>
                        <p class="message-description mt-1">Author: Donal-Trump</p>
                        <p class="message-description">ISBN:978-1-940366-80-7</p>

                        <a href="/publication-detail">
                            <button class="btn btn-outline-warning btn-sm btn-read-more">
                                Read More
                            </button></a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="p-3 mb-5 d-flex align-items-center  new-shadow  rounded">
                    <img src="{{asset('image/publication/pub-1.jpg')}}" class="img-fluid publication-img"
                        style="width:120px;">
                    <div class="ml-auto ">
                        <h5 class="message-heading ">Blue is Darkness</h5>
                        <p class="message-description mt-1">Author: Donal-Trump</p>
                        <p class="message-description">ISBN:978-1-940366-80-7</p>
                        <a href="/publication-detail">
                            <button class="btn btn-outline-warning btn-sm btn-read-more">
                                Read More
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="p-3 mb-5 d-flex align-items-center  new-shadow  rounded">
                    <img src="{{asset('image/publication/pub-2.jpg')}}" class="img-fluid publication-img"
                        style="width:120px;">
                    <div class="ml-auto ">
                        <h5 class="message-heading ">Blue is Darkness</h5>
                        <p class="message-description mt-1">Author: Donal-Trump</p>
                        <p class="message-description">ISBN:978-1-940366-80-7</p>
                        <a href="/publication-detail">
                            <button class="btn btn-outline-warning btn-sm btn-read-more">
                                Read More
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Team Section -->
<section id="team" class="pt-5 pb-5 team" >
    <div class="container">
        <h4 class="message-heading">Our Member</h4>
        <p class="message description">The strong pillar of our organization...</p>
        <div class="section-title">

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('image/team/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('image/team/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('image/team/team-3.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>

                        </div>
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->

@include('clientfooter.footer')
@endsection