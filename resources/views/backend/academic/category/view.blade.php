@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{route('create.programcategory')}}" class="btn btn-danger mb-2"><i class="fa fa-plus-circle me-2"></i>
                            Add Category</a>
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
                                <th>Category Title</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecontents">
                            @foreach($getallCategory as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="text-uppercase">{{$category->title}}</td>
                                <td>{{$category->order}}</td>
                                <td>
                                    <input data-id="{{$category->id}}" class="programcategory" type="checkbox"
                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                        data-on="Active" data-off="InActive" {{ $category->status ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <a href="{{ route('edit.programcategory',$category->id) }}" title="Edit"><i
                                            class="fa fa-edit "></i></a>
                                    <a href="{{ route('delete.programcategory',$category->id) }}"
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