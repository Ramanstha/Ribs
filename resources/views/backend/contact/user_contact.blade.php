@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                {{-- <div class="table-responsive">  --}}
                    <table id="example" class="table table-centered table-striped dt-responsive nowrap w-100"
                        id="products-datatable">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                {{-- <th>Message</th> --}}
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecontents">
                            @foreach($userContactMessage as $key=>$usermessage)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$usermessage->name}}</td>
                                <td>{{$usermessage->email}}</td>
                                <td>{{$usermessage->phone}}</td>
                                <td>{{$usermessage->address}}</td>
                                {{-- <td>{{$usermessage->message}}</td> --}}
                                <td>
                                    <a href="{{route('view_user_message.contact',$usermessage->id)}}"><i class="fa fa-eye mx-1 fs-3 mx-3 text-danger"></i>
                                    </a>
                                    <a href="{{route('delete_user.contact',$usermessage->id)}}" onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                        title="Delete"><i class="fa fa-trash mx-1 fs-3 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection