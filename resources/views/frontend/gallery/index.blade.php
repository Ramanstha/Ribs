@extends('frontend.main')
@section('title','Gallery')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Gallery</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid">
        <div class="container pb-5">
			<div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Gallery</h5>
                <h1>Here are some clicks</h1>
            </div>
            <div class="row align-items-center">
                <div class="row ">
					<div class="tz-gallery d-flex flex-wrap justify-content-between">
						@foreach ($gallery as $gallery)
						<div class="cat-item col-sm-12 col-md-3 col-lg-3 py-3 overflow-hidden">
							<a class="" href="{{asset('storage/galleryfeestructure/main/'.$gallery->image)}}" target="_blank">
								<img class="" src="{{asset('storage/galleryfeestructure/thumbnail/'.$gallery->image)}}"
									alt="Gallery Images" width="100%">
							</a>
						</div>
						@endforeach
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
{{-- <div class="gallery-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h1><strong>Gallery</strong></h1>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="tz-gallery d-flex flex-wrap justify-content-between">
				@foreach ($gallery as $gallery)
				<div class="col-sm-12 col-md-3 col-lg-3 all-image-div">
					<a class="" href="{{asset('storage/galleryfeestructure/main/'.$gallery->image)}}" target="_blank">
						<img class="" src="{{asset('storage/galleryfeestructure/thumbnail/'.$gallery->image)}}"
							alt="Gallery Images" width="100%">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div> --}}