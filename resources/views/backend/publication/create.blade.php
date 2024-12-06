@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Publication</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.publication')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">File<span
                                        class="text-danger">*</span></label>
                                <input type="file" id="simpleinput" class="form-control" name="file"
                                    value="{{ old('file') }}">
                                @error('file')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Title</label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Title"
                                    name="title" value="{{ old('title') }}">
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="short_description" rows="5"
                                    name="description">{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Author <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Author"
                                    name="author" value="{{ old('author') }}">
                                @error('author')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Reference</label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Reference"
                                    name="reference" value="{{ old('reference') }}">
                            </div>

                            <div class="mb-3">
                                <label for="status">Publication Type <span
                                    class="text-danger">*</span></label>
                                <select class="form-control " name="publication_type">
                                    <option value="">-------Select Type-------</option>
                                    <option value="our" {{old('type') == 'our' ? 'selected':''}}>Our publication
                                    </option>
                                    <option value="reference" {{old('type') == 'reference' ? 'selected':''}}>Reference
                                        Publication</option>
                                    <option value="reports" {{old('type') == 'reports' ? 'selected':''}}>Reports
                                        Publication</option>
                                </select>
                                @error('publication_type')
                                <span class="text-danger">{{$message}}</span>
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
                                Publication</button>
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