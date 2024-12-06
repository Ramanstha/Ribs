@extends('frontend.main')
@section('title', 'Message from KSC')
@section('content')
    <div class="container">
        <div class="row">
            <h4 class="all-message-from-c">{{$getMessage->title}}</h4>

            <div class="col-md-12 d-flex justify-content-between all-message">
                @if(!empty($getMessage))
                <div class="col-md-4 allchairman">
                    <img src="{{asset('storage/message/'.$getMessage->image)}}" alt="flag" class="all-chairman-img" />
                    <h4 class="all-c-name text-capitalize">{{$getMessage->name}}</h4>
                </div>
                <div class="col-md-8 allchairman-details">
                    <p class="all-c-message">{!!$getMessage->message!!}</p>
                    
                </div>
                @endif
            </div>

        </div>
    </div>
@endsection