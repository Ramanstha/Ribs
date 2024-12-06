@php
use App\Models\Contact;
$getcontact = Contact::first();
@endphp
@extends('frontend.main')
@section('title','Contact-Us')
@section('content')
<div class="container py-4">
    <div class="usercontact-row row">
        <div class="col-md-6 col-sm-12">
            @if (!empty($getcontact))
            <iframe src="{{$getcontact->map}}" frameborder="0" height="590px" width="100%">{{$getcontact->map}}</iframe>
            @endif
        </div>
        <div class="col-md-6 col-sm-12 " id="contact-form">
            @if(Session::has('message'))
            <span class="text-primary">{{Session::get('message')}}</span>
            @endif
            <form action="{{route('user_contact.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder="Name" name="name" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email: <span class="text-danger">*</span> </label>
                    <input class="form-control" type="email" placeholder="Email" name="email" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="Address"> Address: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder=" Address" name="address" />
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Phone: <span class="text-danger">*</span></label>
                    <input class="form-control" type="tel" placeholder="+977" name="phone" />
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="message">Message: <span class="text-danger">*</span></label>
                    <textarea class="form-control" type="text" placeholder="Message" style="height: 10rem;"
                        name="message"></textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-grid">
                    <button class="btn contact-btn btn-lg" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection