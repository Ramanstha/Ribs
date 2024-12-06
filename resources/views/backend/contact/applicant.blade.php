@extends('backend.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('message'))
                    <span class="text-primary">{{Session::get('message')}}</span>
                    @endif
                    {{-- <div class="table-responsive"> --}}
                    <table id="example" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Level</th>
                                <th>Subject</th>
                                <th>Phone</th>
                                <th>Submission Date</th>
                                <th>Download</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecontents">
                            @foreach($admission as $key=>$admission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="text-capitalize">
                                    {{$admission->fname}}&nbsp;&nbsp;{{$admission->mname}}&nbsp;&nbsp;{{$admission->lname}}
                                </td>
                                <td class="text-capitalize">{{$admission->level}}</td>
                                <td>{{$admission->subject}}</td>
                                <td>{{$admission->pphone}}</td>
                                <td>{{$admission->created_at}}</td>
                                <td>
                                    <a href="{{route('info.download',$admission->id)}}">
                                        <i class="fas fa-arrow-down fs-3"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('delete.applicants',$admission->id)}}"
                                        onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                        title="Delete"><i class="fa fa-trash fs-4 text-danger"></i>
                                    </a>
                                    <a href="{{route('view.application',$admission->id)}}"><i
                                            class="fa-solid fa-eye mx-2 fs-4 text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
</div>

@endsection