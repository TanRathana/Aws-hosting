@extends ('layout.app')
@section('content')

@include('clientheader.header')
<section class="academi-section ">
    <div class="container d-flex h-100">
        <div class="row align-self-center">
            <div>
                <h3 class=" message-heading text-white">NEWS</h3>
            </div>
        </div>
</section>
<section class="new-section pt-3">
    <div class="container">
        <h4 class="message-heading">Out Latest News </h4>
        <p class="message-description ">Please Follow us to see more</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3 ">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3 ">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 new-shadow card-style" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('image/publication/Training1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                        <p class="card-text">Expand your knowledge through
                            our range of ICT courses</p>
                        <a href="#" class="btn btn-primary learn-more-btn mt-3">Learn more <i
                                class="fas fa-angle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-4 mr-4">
            <nav aria-label="...">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

@include('clientfooter.footer')



@endsection