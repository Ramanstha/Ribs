@extends('frontend.main')
@section('title', 'LOI Letter')
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
                    <th>View Details</th> 
                  </tr>  
                </thead>  
                <tbody> 
                @foreach($getloiletter as $key=>$loi) 
                  <tr>  
                    <td>{{ $key+1 }}</td>  
                    <td>{{ $loi->title }}</td>  
                    <td>@if($loi->type=='loi_letter') LOI Letter @endif</td>  
                    <td><a href="{{ route('iqac.details',$loi->id) }}" class="notice-download"><i class="fa-solid fa-eye" style="font-size:20px"></i></a></td>
                  </tr>  
                 @endforeach
                </tbody>  
              </table>
        </div>
    </div>
</div>
@endsection