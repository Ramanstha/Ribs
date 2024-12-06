@extends('frontend.main')
@section('title','Fee Structure')
@section('content')
<div class="container">
    @if (!empty($getfeestructure))
    <div class="row">
        <div class="col-lg-12">
            @if (pathinfo($getfeestructure->image, PATHINFO_EXTENSION) == 'pdf')
            <iframe src="{{asset('storage/galleryfeestructure/main'.$getfeestructure->image)}}" frameborder="0" height="700px" width="100%"></iframe>
            @else
            <img src="{{asset('storage/galleryfeestructure/main'.$getfeestructure->image)}}" alt="" width="100%" height="700px">
            @endif
        </div>
    </div>
    @endif
</div>
@endsection