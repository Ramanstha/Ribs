@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Social Media</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.socialmedia',$data->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Facebook</label>
                                <input type="url" id="simpleinput" class="form-control" placeholder="Facebook"
                                    name="facebook" value="{{$data->facebook}}"/>
                                @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Youtube</label>
                                <input type="url" id="simpleinput" class="form-control" placeholder="Youtube"
                                    name="youtube" value="{{$data->youtube}}"/>
                                @error('youtube')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Instagram</label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Instagram"
                                    name="instagram" value="{{$data->instagram}}"/>
                                @error('instagram')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Twitter</label>
                                <input type="url" id="simpleinput" class="form-control" placeholder="Twitter"
                                    name="twitter" value="{{$data->twitter}}"/>
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update media</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection