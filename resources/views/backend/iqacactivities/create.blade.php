@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>IQAC Activities</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.iqac')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="IQAC Activities" class="form-label">Type<span
                                        class="text-danger">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="loi"{{old('type')=='loi'?'selected':''}}>LOI LETTER</option>
                                    <option value="ssr"{{old('type')=='ssr'?'selected':''}}>SSR LETTER</option>
                                    <option value="prt"{{old('type')=='prt'?'selected':''}}>PRT RESPONSE REPORT</option>
                                    <option value="sat"{{old('type')=='sat'?'selected':''}}>SAT ACTIVITIES</option>
                                    <option value="strategic"{{old('type')=='strategic'?'selected':''}}>STRATIGIC PLAN</option>
                                    <option value="tracer"{{old('type')=='tracer'?'selected':''}}>TRACER STUDY REPORT</option>
                                    <option value="master"{{old('type')=='master'?'selected':''}}>MASTER PLAN</option>
                                    <option value="campus"{{old('type')=='campus'?'selected':''}}>CAMPUS DEVELOPMENT PLAN</option>
                                    <option value="logbook"{{old('type')=='logbook'?'selected':''}}>DAILY LOG BOOK</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" class="form-control" placeholder="Title"
                                    name="title">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="example-file" class="form-label">Image</label>
                                <input type="file" id="example-file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="mb-2">Status<span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="0" checked>&nbsp;Inactive &emsp;
                                <input type="radio" name="status" value="1">&nbsp;Active
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add IQACActivities</button>
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