@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Gallery & Fee Structure</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.galleryandfee')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="example-blog-type" class="form-label">Type</label>
                                <select name="type" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="gallery"{{old('type')=='gallery'?'selected':''}}>Gallery</option>
                                    <option value="fee_structure"{{old('type')=='fee_structure'?'selected':''}}>Fee Structure</option>
                                    <option value="scholorship"{{old('type')=='scholorship'?'selected':''}}>Scholorship</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">Image</label>
                                <input type="file" id="example-file" class="form-control" name="image[]" multiple>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add Gallery
                                & Fee Structure</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection