@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Change User Details</h2>
                <div class="row">
                    @if(Session::has('status'))
                            <span class="alert alert-success">{{Session::get('status')}}
                            </span>                               
                        @endif
                    <div class="col-lg-12">
                        
                        <form action="{{route('updatedetails')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="changename" class="form-label">Change User's Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control" name="name"
                                    placeholder="Change Name" value="{{Auth::user()->name}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ChangeEmail" class="form-label">Change Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Change Email" value="{{Auth::user()->email}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                         

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">
                                Update Details</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection