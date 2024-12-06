@extends('frontend.main')
@section('title', "$getrmcDetails->title")
@section('content')
    <div class="container mt-5">
        <div class="program-title"> 
           <h2 >About {{ $getrmcDetails->title }}  </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            <div class="program-details col-md-12">
                @if($getrmcDetails->image!=NULL)
                @if (pathinfo($getrmcDetails->image, PATHINFO_EXTENSION) == 'pdf')
                <iframe src="{{ asset('storage/rmc/'.$getrmcDetails->image) }}" frameborder="0" height="700"
                    width="100%"></iframe>
                @else
                <img src="{{ asset('storage/rmc/'.$getrmcDetails->image) }}" class="img-fluid academic-img" alt="{{ $getrmcDetails->title }}">
               @endif
                @endif
                <h4 id="allprogram-title">
                    {{ $getrmcDetails->title }}
                </h4>
                </div>
                <p>{!! $getrmcDetails->description !!}</p>
            </div>
        </div>
    </div>
@endsection