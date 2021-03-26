@extends ('layout.app')
@section('content')

@include('clientheader.header')

<section class="academi-section ">
    <div class="container d-flex h-100">
        <div class="row  align-self-center">
            <div>
                <h3 class=" message-heading text-white">Project</h3>
            </div>
        </div>
</section>
<section class="publication pt-5 pb-5">
    <div class="container new-shadow  p-4 rounded">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="p-3 mb-5 d-flex align-items-center hr publication-shadow">
                    <img src="{{asset('image/publication/book1.jpg')}}" class="img-fluid publication-img"
                        style="width:120px;">
                    <div class="ml-5 ">
                        <h5 class="message-heading ">Blue is Darkness</h5>
                        <p class="message-description mt-1">Author: Donal-Trump</p>
                        <p class="message-description">ISBN:978-1-940366-80-7</p>
                        <button class="btn btn-outline-warning btn-sm btn-read-more">
                            Download
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <h2 class="message-heading-pub">Author(s)</h2>
                    <p>Robert T. Deck, received his PhD in theoretical physics from the University of Notre Dame with a
                        specialty in quantum electrodynamics and particle physics. He then held a postdoctoral position
                        at
                        the University of Michigan before assuming a faculty position at the University of Toledo. </p>
                        <hr>
                        <h3 class="message-heading-pub">Description</h3>
                    
                    <p>Robert T. Deck, received his PhD in theoretical physics from the University of Notre Dame with a
                        specialty in quantum electrodynamics and particle physics. He then held a postdoctoral position
                        at
                        the University of Michigan before assuming a faculty position at the University of Toledo. </p>
                    <p>The latter principle is used to uniquely derive all the known specific uncertainty relations from
                        the general uncertainty principle as shown in author’s paper
                        "A Formulation of Quantum Theory Based on Two Physical Principles" R.T. Deck, Journal of Modern
                        Physics, January 2015. (Also online in SciRes. at http://www.scrip.org/journal/jmp,
                        http://dx.doi.org/10.4236/jmp.2014.)</p>
                </div>
            </div>
        </div>
    </div>
</section>




@include('clientfooter.footer')
@endsection