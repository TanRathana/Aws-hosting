@extends ('layout.app')
@section('content')

@include('clientheader.header')

<section class="academi-section ">
    <div class="container d-flex h-100">
    <div class="row justify-content-center align-self-center">
        <h3 class=" message-heading text-white">ACADEMIC</h3>
    </div>
</section>
<section class="pt-5 pb-5">

    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div>
                    <img src="{{ asset('image/news/news1.jpg') }}" class="img-fluid rounded shadow-sm">
                </div>
            </div>
            <div class="col-md-6">

                <h3 class="message-heading">
                    Program Overview
                </h3>
                <p class="message-description">

                    Our Bachelor of E-commerce is a three-and-a-half-year undergraduate program,
                    specifically designed to prepare students for the contemporary workforce and a global
                    career, especially for the emerging market. The program aims to equip students with
                    effective<br>
                    digital knowledge and a strong commercial grounding in business by combining theory
                    and practice to build their understanding of business operations alongside technology
                    development. Students will not only gain analytical, technical, and practical.
                </p>
            </div>
        </div>
    </div>

</section>

@include('clientfooter.footer')
@endsection