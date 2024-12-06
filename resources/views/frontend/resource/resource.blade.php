@extends('frontend.main')
@section('title', 'Resource')
@section('content')
<div class="container mt-6">
  <div class="row">
    <div class="table-responsive " style="margin-top:50px">
      <table id="example" class="cell-border" width="100%">

        <thead>
          <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Reference</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          @foreach($getresource as $key=>$resource)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $resource->title }}</td>
            <td>{{$resource->author}}</td>
            <td>{{ $resource->reference }}</td>
            <td>
              <a href="{{route('resource.details',$resource->id)}}"><i class="fa-solid fs-3 px-3 fa-eye text-danger"></i></a>
              <a href="" class="resource-download"><i class="fa-solid fs-2 fa-file-pdf"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection