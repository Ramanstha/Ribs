@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{route('create.galleryandfee')}}" class="btn btn-danger mb-2">
                            <i class="fa fa-plus-circle me-2"></i> Gallery & Fee Structure</a>
                    </div>
                </div>

                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                {{-- <div class="table-responsive"> --}}
                    <table id="example" class="table table-centered table-striped dt-responsive nowrap w-100"
                        id="products-datatable">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecontents">
                            @foreach($data as $key=>$site)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if (pathinfo($site->image, PATHINFO_EXTENSION) == 'pdf')
                                    <iframe src="{{asset('storage/galleryfeestructure/thumbnail/'.$site->image)}}" frameborder="0"
                                        height="100" width="100"></iframe>
                                    @else
                                    <img src="{{asset('storage/galleryfeestructure/thumbnail/'.$site->image)}}" alt="" width="100"
                                        height="100">
                                    @endif
                                </td>
                                <td class="text-capitalize">{{$site->type}}</td>
                                <td>
                                    <a href="{{route('edit.galleryandfee',$site->id)}}" title="Edit"><i
                                            class="fa fa-edit "></i></a>
                                    <a href="{{route('delete.galleryandfee',$site->id)}}"
                                        onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                        title="Delete"><i class="fa fa-trash mx-1 text-danger"></i>
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