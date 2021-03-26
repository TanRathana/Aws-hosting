@extends ('layout.app')
@section('content')

@include('clientheader.header')

<section class="pt-5 pb-5 h-100 " id="form-section">
    <div class="container">
        <div class="row align-items-center ">
            <form class="p-5 shadow w-auto mx-auto contact-form ">
            <div class="form-group ">
                    <h3 class="text-center">Contact Us</h3>
                </div>
                <div class="form-group ">
                    <label for="exampleInputname">Name</label>
                    <input type="text" class="form-control " id="exampleInputname" aria-describedby="emailHelp"
                        placeholder="Jonh">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control " id="exampleInputPassword1" placeholder="user@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your Company</label>
                    <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Company">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Write a note for us, and we will make the best demo for your bussiness</label>
                    <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"
                        placeholder="Write your message here"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                </div>

            </form>
        </div>
    </div>
</section>


@include('clientfooter.footer')
@endsection