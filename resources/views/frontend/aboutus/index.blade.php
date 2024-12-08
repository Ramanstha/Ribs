@extends('frontend.main')
@section('title', 'About-Us')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">About</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">About</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5 bg-dark">
    <div class="container py-3">
        <div class="row align-items-center">
            @if (!empty($getaboutus))
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('storage/aboutus/'.$getaboutus->image)}}">
            </div>
            <div class="about col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1 class="text-light">{{$getaboutus->title}}</h1>
                </div>
                <p>{!!$getaboutus->description!!}</p>
                {{-- <a href="{{route('aboutus')}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                    More</a> --}}
            </div>
            @endif
        </div>
    </div>
</div>
<!-- About End -->

<!-- Facilities Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Facilities</h5>
            <h1>Our Facilities</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/library.jpeg')}}" alt="">
                    <div class="bg-dark p-4">
                        {{-- <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                        </div> --}}
                        <a class="h5 text-white" href="">Library</a>
                        {{-- <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small>
                                </h6>
                                <h5 class="m-0">$99</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/bus.jpeg')}}" alt="">
                    <div class="bg-dark p-4">
                        {{-- <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                        </div> --}}
                        <a class="h5 text-white" href="">Transportation</a>
                        {{-- <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small>
                                </h6>
                                <h5 class="m-0">$99</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/food.jpeg')}}" alt="">
                    <div class="bg-dark p-4">
                        {{-- <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                        </div> --}}
                        <a class="h5 text-white" href="">Food and Nutrition</a>
                        {{-- <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small>
                                </h6>
                                <h5 class="m-0">$99</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facilities End -->
@endsection