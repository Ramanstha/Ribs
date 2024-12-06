@extends('frontend.main')
@section('title', $getpublicationdetails->id)
@section('content')
<style>
.publication-text{
  font-weight:bold;
  font-size: 22px;
}
</style>
<div class="container mt-6">
  <div class="row">
    <div class="publication-text">
      <label>Title : <span>{{$getpublicationdetails->title}}</span></label><br>
      <label>Author : <span>{{$getpublicationdetails->author}}</span></label><br>
      <label>Reference : <span>{{$getpublicationdetails->reference}}</span></label><br>
      <label>Publication Type : <span>
        @if ($getpublicationdetails->publication_type == 'our')
        Our Publication
        @elseif ($getpublicationdetails->publication_type == 'reference')
        Reference Publication
        @else
        Reports Publication
        @endif
      </span></label><br>
    </div>
    <div class="table-responsive" style="margin-top:50px">
      <iframe src="{{asset('storage/publication/file/'.$getpublicationdetails->file)}}" width="100%" height="600"></iframe>
    </div>
  </div>
</div>
@endsection