@extends('frontend.main')
@section('title', 'Bachelor Academic Programs')
@section('content')
    <div class="container mt-5">
        <div class="program-title">
           <h2>Our Academic Program </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            
            <div class="all-course-div col-md-12 mt-4">
                <div class="allcourses">
                    <div class="all-b-title">
                        Bachelor Programs
                    </div>
                    @foreach($getBachelorprogram as $bachelor)
                    <div class="all-b-subject">
                        {{$bachelor->title}}  <a href="{{ route('academic.program.details',$bachelor->id) }}">learn more<i class="fa fa-angles-right"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
           
        </div>
    </div>
@endsection