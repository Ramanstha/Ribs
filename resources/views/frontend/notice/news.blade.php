@extends('frontend.main')
@section('title', 'News-Events')
@section('content')
<div class="container mt-5">
    <div class="program-title">
        <h2>Latest News And Events </h2>
        <div class="p-photo"></div>
    </div>
    <div class="row">
        <div class="program-details col-md-12">
            <h4 id="allprogram-title">
                {{ $getNews->title }}
            </h4>
            <div class="program-duration">
                <h5 class="text-white">Date : <span>{{ $getNews->created_at }}</span></h5>
                {{-- <h5>Time : <span>{{ $getNews->time }}</span></h5> --}}

            </div>
            <p>{!! $getNews->description !!}</p>
            <a href="{{ asset('storage/notice/'.$getNews->image) }}" target="_blank">
                <img src="{{ asset('storage/notice/'.$getNews->image) }}" class="img-fluid" alt="{{ $getNews->title }}">
            </a>
        </div>
    </div>
</div>
@endsection