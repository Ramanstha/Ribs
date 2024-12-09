@extends('frontend.main')
@section('title', 'Homepage')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($getbanner as $index => $banner)
            <li data-target="#header-carousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}">
            </li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($getbanner as $index => $banner)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="min-height: 300px;">
                <img class="w-100" src="{{ asset('storage/banner/'.$banner->image) }}" height="700px">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                        <h1 class="display-3 text-white mb-md-4 text-capitalize">{{ $banner->title }}</h1>
                        {{-- <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5 bg-dark">
    <div class="container py-3">
        <div class="row align-items-center">
            @if (!empty($getaboutus))
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('storage/aboutus/'.$getaboutus->image)}}">
            </div>
            <div class="about col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1 class="text-light">{{$getaboutus->title}}</h1>
                </div>
                <p>{!!Str::limit($getaboutus->description,500)!!}</p>
                <a href="{{route('aboutus')}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                    More</a>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- About End -->

<!-- Academic Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Programs</h5>
            <h1>Academic Program</h1>
        </div>
        <div class="row">
            @foreach ($getacademic as $academic)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="{{asset('storage/academic/'.$academic->image)}}">
                    <a class="cat-overlay text-white text-decoration-none"
                        href="{{route('academic.details',$academic->id)}}">
                        <h4 class="text-white text-capitalize font-weight-medium">{{$academic->title}}</h4>
                        <p><span>{!!Str::limit($academic->description,100)!!}</span></p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Academic End -->

<!-- Facilities Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Facilities</h5>
            <h1>Our Facilities</h1>
        </div>
        <div class="row">
            @foreach ($getfacilities as $facilities)  
            <div class="col-lg-4 col-md-6 mb-4 ">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="{{asset('storage/facilities/'.$facilities->image)}}" alt="">
                    <div class="bg-dark p-4">
                        <a class="h5 text-white text-capitalize" href="{{route('ribs.facilities',$facilities->id)}}">{{$facilities->title}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Facilities End -->

<!-- Registration Start -->
<div class="bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0" data-mdb-animation="fade-in-up">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">For Higher Secondary </h5>
                    <h1 class="text-white">Scholorship Also Available For Impressive Grade</h1>
                </div>
                <p class="text-white"></p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
            </div>
            {{-- <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-light text-center p-4">
                        <h1 class="m-0">Sign Up Now</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select a course</option>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 1</option>
                                    <option value="3">Course 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Registration End -->

<!-- gallery Start -->
<div class="container-xxl py-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Gallery</h5>
            <h1 class="mb-5">Here Are Some Clicks</h1>
        </div>
        <div class="owl-carousel gallery-carousel">
            @foreach ($getgallery as $gallery)
            <div class="gallery-item border rounded p-3">
                <div class="d-flex align-items-center">
                    <a href="{{asset('storage/galleryfeestructure/main/'.$gallery->image)}}">
                        <img class="img-fluid"
                            src="{{asset('storage/galleryfeestructure/thumbnail/'.$gallery->image)}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Team Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
            <h1>Meet Our Team</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('frontend/img/team-1.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Principle</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('frontend/img/team-2.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0"> Vice Principle</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('frontend/img/team-3.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Chairman</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('frontend/img/team-4.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">co-ordinator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h6>
            <h1> Our Students Says</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($getstudentmessage as $student)
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary"></i>
                <a href="{{route('student.message.details',$student->id)}}" class="text-decoration-none text-dark">
                    <p>{!!Str::limit($student->message,200)!!}</p>
                </a>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle"
                        src="{{asset('storage/message/'.$student->image)}}" style="width: 80px; height: 80px;">
                    <div class="pl-3">
                        <h5 class="mb-1">{{$student->name}}</h5>
                        <small>{{$student->title}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Activities</h5>
            <h1>Events / Activities</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/a1.jpg')}}" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Pre-Teen DSA Dancing Star</h5>
                        <p class="text-primary m-0">Jan 28, 2019</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/a2.jpg')}}" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Celebrating Sarswoti Puja</h5>
                        <p class="text-primary m-0">Jan 01, 2020</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="{{asset('frontend/img/a3.jpg')}}" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Food Fastival</h5>
                        <p class="text-primary m-0">Jan 31, 2020</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection