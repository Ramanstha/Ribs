@extends('frontend.main')
@section('title', 'Master Academic Programs')
@section('content')
    <div class="container mt-5">
        <div class="program-title">
           <h2>Our Academic Program </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            <div class="all-course-div col-md-12">
                <div class="allcourses">
                    <div class="all-b-title text-uppercase">
                       {{$getMasterprogram->title}}
                    </div>
                    @foreach($getMasterprogram->program as $course)
                    <div class="all-b-subject">
                        {{ $course->title}} <a href="{{ route('academic.program.details',$course->id) }}">learn more<i class="fa fa-angles-right"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection