@extends('frontend.main')
@section('title', 'Notice-Downloads')
@section('content')
<div class="container mt-6">
    <div class="row">
        <div class="table-responsive " style="margin-top:50px">
            <table id="example" class="cell-border" width="100%" >
            
                <thead>  
                  <tr>  
                    <th>S.N.</th>  
                    <th>Title</th>  
                    <th>Type</th>  
                    <th>Date</th> 
                    <th>Download</th> 
                  </tr>  
                </thead>  
                <tbody> 
                @foreach($getdownload as $key=>$download) 
                  <tr>  
                    <td>{{ $key+1 }}</td>  
                    <td>{{ $download->title }}</td>  
                    <td>@if($download->type=='download') Download @endif</td>  
                    <td>{{ $download->date }}</td>  
                    <td>
                        <a href="{{ route('notice.download',$notice->image?? '') }}" class="notice-download"><i class="fa-solid fa-file-pdf"></i></a>
                        <a href="{{route('notice.download',$notice->id)}}"><i class="fa-solid fs-3 px-3 fa-eye text-danger"></i></a>
                    </td>
                  </tr>  
                 @endforeach
                </tbody>  
              </table>
        </div>
    </div>
</div>
@endsection