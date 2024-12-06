@extends('frontend.main')
@section('title','Scholorship')
@section('content')
<div class="container">
    @if (!empty($scholorship))
    <div class="row">
        <div class="col-lg-12">
            @if (pathinfo($scholorship->image, PATHINFO_EXTENSION) == 'pdf')
            <iframe src="{{asset('storage/galleryfeestructure/main'.$scholorship->image)}}" frameborder="0" height="700px"
                width="100%"></iframe>
            @else
            <img src="{{asset('storage/galleryfeestructure/main'.$scholorship->image)}}" alt="" width="100%" height="700px">
            @endif
        </div>
    </div>
    @endif
</div>
@endsection