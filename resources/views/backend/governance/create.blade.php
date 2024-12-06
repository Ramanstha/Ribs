@extends('backend.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>Governance</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            @if (Session::has('message'))
                                <span class="text-primary">{{ Session::get('message') }}</span>
                            @endif
                            <form action="{{ route('store.governance') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="IQAC Activities" class="form-label">Main Category Type<span
                                            class="text-danger">*</span></label>
                                    <select name="type" class="form-control" id="category">
                                        <option value="">Select Main Category</option>
                                        <option value="download" >Downloads</option>
                                        <option value="governance" >Governance</option>
                                        <option value="iqac" >IQAC</option>
                                        <option value="rmc" >RMC</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Category<span
                                            class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control" id="subcategory">
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="simpletitle" class="form-control" placeholder="Title"
                                        name="title" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description<span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" rows="5" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="example-file" class="form-label">Image</label>
                                    <input type="file" id="example-file" class="form-control" name="image">
                                </div>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                <div class="mb-3">
                                    <p class="mb-2">Status</p>
                                    <input type="radio" name="status" value="0" checked>&nbsp;Inactive &emsp;
                                    <input type="radio" name="status" value="1">&nbsp;Active
                                </div>

                                <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add  </button>
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#category').on('change', function(e) {
                var cat_id = e.target.value;
                $.ajax({
                    url: "{{ route('select.category') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        cat_id: cat_id
                    },
                    success: function(data) {
                        console.log(data);
                    var d = $('select[name="category_id"]').empty();
                    $('select[name="category_id"]').append(
                        '<option value="">Select  Category</option>');
                    $.each(data.subcategories, function(key, value) {
                        $('select[name="category_id"]').append(

                            '<option value="' + value.id + '" class="text-uppercase">' + value
                            .category_name + '</option>');
                    });
                }
                })
            });
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
