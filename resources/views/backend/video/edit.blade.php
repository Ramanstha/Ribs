@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Video</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.video',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Name"
                                    name="name" value="{{$data->name}}"/>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" rows="5"
                                    name="description" value="{{$data->description}}">{{$data->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Link <span class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Link"
                                    name="link" value="{{$data->link}}">
                                @error('link')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="mb-2">Status <span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="0" {{$data->status=='0'?'checked':''}}>&nbsp;Inactive &emsp;
                                <input type="radio" name="status" value="1" {{$data->status=='1'?'checked':''}}>&nbsp;Active
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update Video</button>
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
    CKEDITOR.replace('description');
</script>
@endsection 