@extends('frontend.main')
@section('title', $getresourcedetails->id)
@section('content')
<style>
.resource-text{
  font-weight:bold;
  font-size: 22px;
}
</style>
<div class="container mt-6">
  <div class="row">
    <div class="resource-text">
      <label class="text-capitalize">Title : <span>{{$getresourcedetails->title}}</span></label><br>
      <label class="text-capitalize">Author : <span>{{$getresourcedetails->author}}</span></label><br>
      <label class="text-capitalize">Reference : <span>{{$getresourcedetails->reference}}</span></label><br>
      <label class="text-capitalize"  >resource Type : <span>
        @if ($getresourcedetails->resource_type == 'our')
        Our resource
        @elseif ($getresourcedetails->resource_type == 'reference')
        Reference resource
        @else
        Reports resource
        @endif
      </span></label><br>
    </div>
    <div class="table-responsive" style="margin-top:50px">
      <iframe src="{{asset('storage/resource/'.$getresourcedetails->file)}}" width="100%" height="600"></iframe>
    </div>
  </div>
</div>
@endsection