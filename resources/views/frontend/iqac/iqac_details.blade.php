@extends('frontend.main')
@section('title', "$getiqacDetails->title")
@section('content')
    <div class="container mt-5">
        <div class="program-title"> 
           <h2 >About {{ $getiqacDetails->title }}  </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            <div class="program-details col-md-12">
                @if($getiqacDetails->image!=NULL)
                @if (pathinfo($getiqacDetails->image, PATHINFO_EXTENSION) == 'pdf')
                <iframe src="{{ asset('storage/iqacactivities/'.$getiqacDetails->image) }}" frameborder="0" height="700"
                    width="100%"></iframe>
                @else
                <img src="{{ asset('storage/iqac/'.$getiqacDetails->image) }}" class="img-fluid academic-img" alt="{{ $getiqacDetails->title }}">
                @endif
                @endif
                <h4 id="allprogram-title">
                    {{ $getiqacDetails->title }}
                </h4>
                </div>
                <p>{!! $getiqacDetails->description !!}</p>
            </div>
        </div>
    </div>
@endsection