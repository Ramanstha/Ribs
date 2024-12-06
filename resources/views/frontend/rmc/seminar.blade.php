@extends('frontend.main')
@section('title', 'Seminar ')
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
                @foreach($getseminar as $key=>$seminar) 
                  <tr>  
                    <td>{{ $key+1 }}</td>  
                    <td>{{ $seminar->title }}</td>  
                    <td>@if($seminar->type=='seminar') Seminar @endif</td>  
                    <td><a href="{{ route('rmc.details',$seminar->id) }}" class="notice-download"><i class="fa-solid fa-eye" style="font-size:20px"></i></a></td>
                  </tr>  
                 @endforeach
                </tbody>  
              </table>
        </div>
    </div>
</div>
@endsection