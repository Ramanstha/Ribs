@extends('frontend.main')
@section('title', 'Academic Programs')
@section('content')
    <div class="container mt-5">
        <div class="program-title">
           <h2>Our Academic Programs </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            <div class="all-course-div col-md-12">
                <div class="allcourses">
                    <div class="all-b-title">
                        Masters Programs
                    </div>
                    @foreach($getprogram as $course)
                    @if($course->type=='masters')
                    <div class="all-b-subject">
                        {{ $course->title}} <a href="{{ route('academic.program.details',$course->id) }}">learn more<i class="fa fa-angles-right"></i></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            {{-- <div class="all-course-div col-md-12 mt-4">
                <div class="allcourses">
                    <div class="all-b-title">
                        Bachelor Programs
                    </div>
                    @foreach($getprogram as $bachelor)
                    @if($bachelor->type=='bachelor')
                    <div class="all-b-subject">
                        {{$bachelor->title}}  <a href="{{ route('academic.program.details',$bachelor->id) }}">learn more<i class="fa fa-angles-right"></i></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="all-course-div col-md-12 mt-4">
                <div class="allcourses">
                    <div class="all-b-title">
                        +2 Programs
                    </div>
                    @foreach($getprogram as $program)
                    @if($program->type=='+2')
                    <div class="all-b-subject">
                       {{$program->title}} <a href="{{ route('academic.program.details',$program->id) }}">learn more<i class="fa fa-angles-right"></i></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
@endsection