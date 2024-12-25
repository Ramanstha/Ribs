@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <table id="exampletbl" class="table table-centered  dt-responsive nowrap w-100">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tablecontents">
                        @foreach($userContactMessage as $key=>$usermessage)
                        <tr class="{{ $usermessage->is_read == '0' ? 'text-black fw-bolder fs-5' : '' }}"
                            id="message-{{ $usermessage->id }}">
                            <td>{{$key+1}}</td>
                            <td>{{$usermessage->name}}</td>
                            <td>{{$usermessage->email}}</td>
                            <td>{{$usermessage->phone}}</td>
                            <td>{{$usermessage->address}}</td>
                            <td>
                                <a href="{{route('view_user_message.contact',$usermessage->id)}}"
                                    onclick="markAsRead({{ $usermessage->id }})"><i
                                        class="fa fa-eye mx-1 fs-3 mx-2 text-danger"></i>
                                </a>
                                <a href="{{route('delete_user.contact',$usermessage->id)}}"
                                    onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                    title="Delete"><i class="fa fa-trash mx-1 fs-3 text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function markAsRead(usermessageId) {
        $.ajax({
            url: '/messages/' + usermessageId + '/mark-as-read',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Update the message's appearance to indicate it is read
                $('#message-' + usermessageId).removeClass('unread').addClass('read');
            },
            error: function(xhr) {
                console.error('Error marking message as read:', xhr);
            }
        });
    }
</script>
@endsection