@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>News/Notices</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.notice',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Title"
                                    name="title" value="{{$data->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-blog-type" class="form-label">Type<span
                                        class="text-danger">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="download" {{$data->type=='download'?'selected':''}}>Downloads
                                    </option>
                                    <option value="notice" {{$data->type=='notice'?'selected':''}}>Notice</option>
                                    <option value="news" {{$data->type=='news'?'selected':''}}>News/Events</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">File
                                    <span class="text-danger">(Use Pdf for Downloads/Notice, Use image for
                                        News/Events.)</span></label>
                                <input type="file" id="example-file" class="form-control" name="image" />
                                @if (pathinfo($data->image, PATHINFO_EXTENSION) == 'pdf')
                                    <iframe src="{{asset('storage/notice/'.$data->image)}}" frameborder="0" height="100"
                                        width="100"></iframe>
                                    @else
                                    <img src="{{asset('storage/notice/'.$data->image)}}" alt="" width="100"
                                        height="100">
                                    @endif
                                     @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="short_description" rows="5" name="description"
                                    value="{{$data->description}}">{{$data->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!--<div class="mb-3">-->
                            <!--    <label for="example-published-date" class="form-label">Date<span-->
                            <!--            class="text-danger">*</span></label>-->
                                <input type="hidden" class="form-control" placeholder="Date" name="date"
                                    value="{{$data->date}}"/>
                            <!--    @error('date')-->
                            <!--    <span class="text-danger">{{ $message }}</span>-->
                            <!--    @enderror-->
                            <!--</div>-->

                            <!--<div class="mb-3">-->
                            <!--    <label for="example-published-time" class="form-label">Time</label>-->
                            <!--    <input type="text" class="form-control" placeholder="Time" name="time"-->
                            <!--        value="{{$data->time}}"/>-->
                            <!--</div>-->

                            <div class="mb-3">
                                <p class="mb-2">Status<span class="text-danger">*</span></p>
                                <input type="radio" name="status" value="0"
                                    {{$data->status=='0'?'checked':''}}>&nbsp;Inactive &emsp;
                                <input type="radio" name="status" value="1"
                                    {{$data->status=='1'?'checked':''}}>&nbsp;Active
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="btn w-sm btn-success waves-effect waves-light mt-4">Update</button>
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
    CKEDITOR.replace('short_description');
</script>
@endsection