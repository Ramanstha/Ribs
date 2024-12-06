@extends('frontend.main')
@section('title', 'Field Trip')
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
                @foreach($getfieldTrip as $key=>$fieldtrip) 
                  <tr>  
                    <td>{{ $key+1 }}</td>  
                    <td>{{ $fieldtrip->title }}</td>  
                    <td>@if($fieldtrip->type=='field_trip') Field Trip @endif</td>  
                    <td><a href="{{ route('rmc.details',$fieldtrip->id) }}" class="notice-download"><i class="fa-solid fa-eye" style="font-size:20px"></i></a></td>
                  </tr>  
                 @endforeach
                </tbody>  
              </table>
        </div>
    </div>
</div>
@endsection