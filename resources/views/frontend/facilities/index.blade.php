@extends('frontend.main')
@section('title','Facilities')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Facilities</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Facilities</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Detail Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="row">
            @if (!empty($getfacilities))
            <div class="mb-5">
                <h1 class="mb-5 text-capitalize">{{$getfacilities->title}}</h1>
                <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="{{asset('storage/facilities/'.$getfacilities->image)}}"
                    alt="Image">
                <p>{!!$getfacilities->description!!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Detail End -->
@endsection