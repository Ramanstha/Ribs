@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2> About us SubCategories</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.aboutsubcategory',$getSinglesubcategory->id)}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category<span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">----------------Select Category----------------</option>
                                    @foreach ($getCategory as $subcategory)
                                        <option value="{{$subcategory->id}}"{{ $getSinglesubcategory->category_id==$subcategory->id?'selected':'' }}>{{$subcategory->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subcategory_name" class="form-label">SubCategory Title<span class="text-danger">*</span></label>
                                <input type="text" id="category_title" class="form-control" placeholder="SubCategory Title"
                                    name="title" value="{{$getSinglesubcategory->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="mb-2">Status<span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="1" checked >&nbsp;Active &emsp;
                                <input type="radio" name="status" value="0">&nbsp;Inactive

                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="btn w-sm btn-success waves-effect waves-light mt-4">
                                Update SubCategory</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>

@endsection