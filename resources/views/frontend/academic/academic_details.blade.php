@extends('frontend.main')
@section('title', 'Academic Program Details')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Academic</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Academic</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About</h5>
                    <h1 class="text-capitalize">{{ $programsDetails->title }}</h1>
                </div>
                <p>{!! $programsDetails->description !!}</p>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('storage/academic/'.$programsDetails->image) }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <div class="container">
    <div class="program-title">
        <h2>About {{ $programsDetails->title }} Programs </h2>
        <div class="p-photo"></div>
    </div>
    <div class="row">
        <div class="program-details col-md-12">
            <img src="{{ asset('storage/academic/'.$programsDetails->image) }}" class="academic-img"
                alt="{{ $programsDetails->title }}">
            <h4 id="allprogram-title">
                {{ $programsDetails->title }}
            </h4>
            {{-- <div class="program-duration">
                    @if($programsDetails->type=='+2')
                     <h5>Duration : <span>2 Years</span></h5> 
                     <h5>Degree : <span>+2</span></h5> 
                     @endif
                    @if($programsDetails->type=='bachelor')
                    <h5>Duration : <span>4 Years</span></h5> 
                    <h5>Degree : <span>Bachelor</span></h5> 
                    @endif
                    @if($programsDetails->type=='masters')
                    <h5>Duration : <span>2 Years</span></h5> 
                    <h5>Degree : <span>Master</span></h5>  
                    @endif
                </div> --}}
            {{-- <p>{!! $programsDetails->description !!}</p> --}}
        {{-- </div>
    </div>
</div> --}}