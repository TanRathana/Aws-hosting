@extends ('layout.app')
@section('content')

@include('clientheader.header')
<section class="academi-section ">
    <div class="container d-flex h-100">
        <div class="row  align-self-center">
            <div>
                <h3 class=" message-heading text-white">OPPORTUNITY </h3>
            </div>

        </div>
</section>
<section class=" pt-5 pb-5">
    <div class="container">
        <h4 class="message-heading">Employement</h4>
        <p class="message-description">Please Follow us to see more</p>
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <a href="#">
                        <img src="{{asset('image/publication/chance1.png')}}" class="shadow-sm employment">
                    </a>
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance1.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance1.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
        </div>
        <div class="read-more-link text-right mr-5">
            <a href="#" class="read-more">
                <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                SEE ALL
            </a>
        </div>
    </div>
</section>

<section class=" pt-5 pb-5 " style="background-color:#f6f9fe;">
    <div class="container">
        <h4 class="message-heading">VOLUNTEER OR <br>INTERNSHIP AND CADT</h4>
        <p class="">Please Follow us to see more</p>
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance2.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance2.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance2.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
        </div>
        <div class="read-more-link text-right mr-5">
            <a href="#" class="read-more">
                <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                SEE ALL
            </a>
        </div>
    </div>
</section>

<section class=" pt-5 pb-5" >
    <div class="container">
        <h4 class="message-heading">SCHORLARSHIP</h4>
        <p class="">Please Follow us to see more</p>
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance3.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance3.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="employment-div">
                    <img src="{{asset('image/publication/chance3.png')}}" class="shadow-sm employment">
                    <h5 class="mt-3">The University of Auckland</h5>
                    <p>Deadline: 01 Apr 2021</p>
                </div>
            </div>
        </div>
        <div class="read-more-link text-right mr-5">
            <a href="#" class="read-more">
                <img src="{{asset('image/svg/next.svg')}}" class="img-fluid" style="width:20px;">
                SEE ALL
            </a>
        </div>
    </div>
</section>
@include('clientfooter.footer')
@endsection