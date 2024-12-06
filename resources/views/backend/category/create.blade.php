@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>{{ isset($getSinglecategory)?'Edit':'Add' }} Governance/IQAC/RMC Categories</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{isset($getSinglecategory)?route('update.category',$getSinglecategory->id):route('store.category')}}" method="post" >
                            @csrf
                            <div class="mb-3">
                                <label for="IQAC Activities" class="form-label">Main Category Type<span
                                        class="text-danger">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="">Select Main Category</option>
                                    <option value="download"  @if( isset($getSinglecategory)){{ $getSinglecategory->type=='download'? 'selected':'' }} @endif>Downloads</option>
                                    <option value="governance"  @if( isset($getSinglecategory)){{ $getSinglecategory->type=='governance'? 'selected':'' }} @endif>Governance</option>
                                    <option value="iqac"  @if( isset($getSinglecategory)){{ $getSinglecategory->type=='iqac'? 'selected':'' }} @endif>IQAC</option>
                                    <option value="rmc"  @if( isset($getSinglecategory)){{ $getSinglecategory->type=='rmc'? 'selected':'' }} @endif>RMC</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" id="category_name" class="form-control" placeholder="Category Name"
                                    name="category_name" value="{{ $getSinglecategory->category_name?? old('category_name') }}">
                                @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="mb-2">Status<span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="1"  @if(isset($getSinglecategory)){{$getSinglecategory->status==1?'checked':''}} @endif  checked>&nbsp;Active &emsp;
                                <input type="radio" name="status" value="0"  @if(isset($getSinglecategory)){{$getSinglecategory->status==0?'checked':''}} @endif >&nbsp;Inactive 

                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">{{ isset($getSinglecategory)?'Edit':'Add' }} Category</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>

@endsection