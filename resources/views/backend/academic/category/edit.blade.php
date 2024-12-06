@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2> Program Categories</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.programcategory',$getSinglecategory->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Title<span class="text-danger">*</span></label>
                                <input type="text" id="category_title" class="form-control" placeholder="Category Title"
                                    name="title" value="{{$getSinglecategory->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="order" class="form-label">Order<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="order" value="{{$getSinglecategory->order}}">
                                @error('order')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="mb-2">Status<span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="1" {{$getSinglecategory->status==1?'checked':''}} >&nbsp;Active &emsp;
                                <input type="radio" name="status" value="0" {{$getSinglecategory->status==0?'checked':''}} >&nbsp;Inactive
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="btn w-sm btn-success waves-effect waves-light mt-4">
                                Update Category</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>

@endsection