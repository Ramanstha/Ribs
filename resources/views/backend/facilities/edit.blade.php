@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Facilities</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.facilities',$data->id)}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control"
                                    name="title" value="{{ $data->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">image<span
                                        class="text-danger">*</span></label>
                                <input type="file" id="simpleinput" class="form-control" name="image"
                                    value="{{ $data->image }}">
                                <iframe src="{{asset('storage/facilities/'.$data->image)}}" height="200"
                                    width="150"></iframe>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="short_description" rows="5"
                                    name="description">{{ $data->description }}</textarea>
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
                                Facilities</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('short_description');
</script>
@endsection