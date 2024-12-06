@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Sitesetting</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.sitesetting')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Name<span
                                        class="text-danger">*</span></label>
                                    <textarea type="text" id="name" class="form-control" name="name" ></textarea>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">Logo<span
                                        class="text-danger">*</span></label>
                                <input type="file" id="example-file" class="form-control" name="logo">
                                @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea type="text" id="description" class="form-control"
                                    name="description"></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Copyright<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Copyright"
                                    name="copyright">
                                @error('copyright')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add
                                Sitesetting</button>
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
    CKEDITOR.replace('name');
    CKEDITOR.replace('description');
</script>
@endsection