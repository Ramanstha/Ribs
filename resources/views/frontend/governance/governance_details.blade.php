@extends('frontend.main')
@section('title', "$getGovernancesetails->title ")
@section('content')
    <div class="container mt-5">
        <div class="program-title"> 
           <h2 >About {{ $getGovernancesetails->title }}  </h2>
           <div class="p-photo"></div> 
        </div>
        <div class="row">
            <div class="program-details col-md-12">
                @if($getGovernancesetails->image!=NULL)
                @if (pathinfo($getGovernancesetails->image, PATHINFO_EXTENSION) == 'pdf')
                <iframe src="{{ asset('storage/governance/'.$getGovernancesetails->image) }}" frameborder="0" height="700"
                    width="100%"></iframe>
                @else
                <img src="{{ asset('storage/governance/'.$getGovernancesetails->image) }}" class="img-fluid academic-img" alt="{{ $getGovernancesetails->title }}">
                @endif
                @endif
                <h4 id="allprogram-title">
                    {{ $getGovernancesetails->title }}
                </h4>
                </div>
                <p>{!! $getGovernancesetails->description !!}</p>
            </div>
        </div>
    </div>
@endsection