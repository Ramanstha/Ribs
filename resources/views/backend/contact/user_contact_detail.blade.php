@extends('backend.main')
@section('title','User Message')
@section('content')
<div class="container pt-5">
    <div class="row">
        <h3 class="mt-2"><b>Name:<br></b></h3>
        <h3 class="m-1">{{$userMessage->name}}</h3>

        <h3 class="mt-2"><b>Email:<br></b></h3>
        <h3 class="m-1">{{$userMessage->email}}</h3>

        <h3 class="mt-2"><b>Address:<br></b></h3>
        <h3 class="m-1">{{$userMessage->address}}</h3>

        <h3 class="mt-2"><b>Phone:<br></b></h3>
        <h3 class="m-1">{{$userMessage->phone}}</h3>

        <h3 class="mt-2"><b>Message:<br></b></h3>
        <h3 class="m-1">{{$userMessage->message}}</h3>
    </div>
</div>
@endsection