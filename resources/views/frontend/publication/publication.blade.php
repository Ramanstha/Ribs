@extends('frontend.main')
@section('title', 'Publication')
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
          @foreach($getpublication as $key=>$publication)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $publication->title }}</td>
            <td>{{$publication->author}}</td>
            <td>{{ $publication->reference }}</td>
            <td>
              <a href="{{route('publication.details',$publication->id)}}"><i class="fa-solid fs-3 px-3 fa-eye text-danger"></i></a>
              <a href="" class="publication-download"><i class="fa-solid fs-2 fa-file-pdf"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection