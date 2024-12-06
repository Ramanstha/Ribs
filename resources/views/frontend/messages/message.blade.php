@extends('frontend.main')
@section('title', 'Message from KSC')
@section('content')
    <div class="container">
        <div class="row">
            <h4 class="all-message-from-c">{{$getChairmanMessage->title}}</h4>

            <div class="col-md-12 d-flex justify-content-between all-message">
                @if(!empty($getChairmanMessage))
                <div class="col-md-4 allchairman">
                    <img src="{{asset('storage/message/'.$getChairmanMessage->image)}}" alt="flag" class="all-chairman-img" />
                    <h4 class="all-c-name">{{$getChairmanMessage->name}}</h4>
                </div>
                <div class="col-md-8 allchairman-details">
                    <div class="visible-content">
                    <p class="all-c-message">{!!Str::limit($getChairmanMessage->message,750)!!}</p>
                    </div>
                    <div class="invisible-content">
                    <p class="all-c-message">{!!$getChairmanMessage->message!!}</p>
                    </div>
                    <button class="btn more-less">Read more <i class="fa-solid fa-angle-down"></i></button>
                </div>
                @endif
            </div>

            <h4 class="all-message-from-c mt-4">{{$getChiefMessage->title}}</h4>
           
            <div class="col-md-12 d-flex justify-content-between all-message sam">
                @if(!empty($getChiefMessage))
                <div class="col-md-8 allchairman-details">
                    <div class="visible-content">
                    <p class="all-c-message">{!!Str::limit($getChiefMessage->message,750)!!}</p>
                    </div>
                    <div class="invisible-content">
                    <p class="all-c-message">{!!$getChiefMessage->message!!}</p>
                    </div>
                    <button class="btn more-less">Read more <i class="fa-solid fa-angle-down"></i></button>
                </div>
                <div class="col-md-4 allchairman">
                    <img src="{{asset('storage/message/'.$getChiefMessage->image)}}" alt="flag" class="all-chairman-img" />
                    <h4 class="all-c-name">{{$getChiefMessage->name}}</h4>
                </div>
                
                @endif
            </div>
        </div>
    </div>
@endsection