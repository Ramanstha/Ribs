@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Affiliations</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.affiliations',$data->id)}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Names<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="name" rows="5" name="affiliation"
                                    value="{{$data->affiliation}}">{{$data->affiliation}}</textarea>
                                @error('affiliation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
                                Affiliations</button>
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
</script>
@endsection