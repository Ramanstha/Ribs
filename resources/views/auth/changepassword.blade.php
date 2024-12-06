@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Change Password</h2>
                <div class="row">
                    @if(Session::has('status'))
                    <span class="alert alert-success">{{Session::get('status')}}
                    </span>
                        @elseif(Session::has('error'))
                            <span class="alert alert-danger">{{Session::get('error')}}
                            </span>
                @endif
                    <div class="col-lg-12">
                       
                        <form action="{{route('updatenewpassword')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" id="oldPass" class="form-control" name="oldPass"
                                    placeholder="Old Password">
                                @error('oldPass')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" id="newPass" class="form-control" name="newPass"
                                    placeholder="New Password">
                                @error('newPass')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password <span
                                        class="text-danger">*</span></label>
                                <input name="confirmpass" type="password" class="form-control" id="confirmpass"
                                    placeholder="Confirm New Password"> 
                                    @error('confirmpass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror                               
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">
                                Update Password</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection