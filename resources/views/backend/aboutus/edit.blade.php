@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>About Us</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.aboutus',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf                            
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category<span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">----------------Select Category----------------</option>
                                    @foreach ($getCategory as $category)
                                        <option value="{{$category->id}}" {{ $data->category_id==$category->id?'selected':'' }}>{{$category->title}}</option>
                                        @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- <div class="mb-3">
                                <label for="simpleinput" class="form-label">SubCategory<span
                                        class="text-danger">*</span></label>
                                        <select name="subcategory_id" class="form-control" id="subcategory">
                                    @foreach ($getsubCategory as $category)
                                    <option value="{{$category->id}}" {{ $data->subcategory_id==$category->id?'selected':'' }}>{{$category->title}}</option>
                                @endforeach
                                </select>
                                @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Title</label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Title"
                                    name="title" value="{{$data->title}}"/>
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Order</label>
                                <input type="number" id="simpleinput" class="form-control" name="order"
                                    value="{{$data->order}}">
                                @error('order')
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
                                <label for="example-file" class="form-label">Image <span class="text-danger">*</span></label>
                                <input type="file" id="example-file" class="form-control" name="image"/>
                                <img src="{{asset('storage/aboutus/'.$data->image)}}" height="100" width="100"/>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update Aboutus</button>
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
                url: "{{ route('select.aboutcategory') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    console.log(data);
                var d = $('select[name="subcategory_id"]').empty();
                $('select[name="subcategory_id"]').append(
                    '<option value="">Select  SubCategory</option>');
                $.each(data.subcategories, function(key, value) {
                    $('select[name="subcategory_id"]').append(
                        '<option value="' + value.id + '" class="text-capitalize">' + value
                        .title + '</option>');
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