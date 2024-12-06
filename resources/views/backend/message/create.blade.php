@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>News/Notices</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.message')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Name" name="name"
                                    value="{{old('name')}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-blog-type" class="form-label">Type<span
                                        class="text-danger">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="chairperson" {{old('type')=='chairperson'?'selected':''}}>Chair
                                        Person</option>
                                    <option value="teacher" {{old('type')=='teacher'?'selected':''}}>Campus Chief
                                    </option>
                                    <option value="student" {{old('type')=='student'?'selected':''}}>Student</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Message Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Message Title"
                                    name="title" value="{{old('title')}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Message<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="short_message" rows="5" name="message"
                                    value="{{old('message')}}">{{old('message')}}</textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">Image<span
                                        class="text-danger">*</span></label>
                                <input type="file" id="example-file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add
                                Message</button>
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
    CKEDITOR.replace('short_message');
</script>
@endsection