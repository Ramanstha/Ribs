@extends('frontend.main')
@section('title', 'Message from Ribs')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Testimonial</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Testimonial</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between all-message">
            @if(!empty($studentMessage))
            <div class="col-md-4">
                <img src="{{asset('storage/message/'.$studentMessage->image)}}" height="250px" width="250px"/>
                <h4 class="text-capitalize t-name">{{$studentMessage->name}}</h4>
                <h4 class="t-grade">{{$studentMessage->title}}</h4>
            </div>
            <div class="col-md-8">
                <p class="text-black">{!!$studentMessage->message!!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection