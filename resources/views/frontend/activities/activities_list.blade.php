@extends('frontend.main')
@section('title', 'About-Us')
@section('content')

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Activities</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('Home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Activities</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row pb-3">
                    <div class="col-lg-6 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/a1.jpg')}}" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Pre-Teen DSA Dancing Star</h5>
                                <p class="text-primary m-0">Jan 28, 2019</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/a2.jpg')}}" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Celebrating Sarswoti Puja</h5>
                                <p class="text-primary m-0">Jan 01, 2020</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/a3.jpg')}}" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Food Fastival</h5>
                                <p class="text-primary m-0">Jan 31, 2020</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100086101817342&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="500" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection