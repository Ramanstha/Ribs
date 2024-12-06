@php
use App\Models\Sitesetting;
use App\Models\Contact;
use App\Models\Socialmedia;
use App\Models\Affiliations;
$getsitesetting = Sitesetting::first();
$getcontact = Contact::first();
$getsocialmedia = Socialmedia::first();
$getaffiliation = Affiliations::where('status',1)->get();
@endphp
<div class="container footer-map mt-5">
    <div class="large-map" style="border: ridge;">
        @if (!empty($getcontact))
        <iframe src="{{$getcontact->map}}" frameborder="0" height="300px" width="100%">{{$getcontact->map}}</iframe>
        @endif
    </div>
</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white pt-5 px-sm-3 px-lg-5" style="margin-top: 20px;">
    <div class="row pt-2">
        <div class="col-lg-7 col-md-12">
            <div class="row">
                @if(!empty($getcontact))
                <div class="col-md-6">
                    {{-- <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5> --}}
                    @if (!empty($getsitesetting))
                    <img class="ml-5" src="{{asset('storage/sitesetting/'.$getsitesetting->logo)}}">
                    @endif
                    <p>{!!$getcontact->description!!}</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{{$getcontact->phone}}</p>
                    <p><i class="fa fa-envelope mr-2"></i>{{$getcontact->email}}</p>
                </div>
                @endif
                <div class="col-md-6">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>AboutUs</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Facilities</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                        <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="col-md-8">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Affiliations</h5>
                <div class="d-flex flex-column justify-content-start">
                    @foreach ($getaffiliation as $affiliation)
                    <div class="links ">
                        {!!$affiliation->affiliation!!}
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2"
                        href="https://www.facebook.com/p/RIBS-Rhododendron-International-Boarding-School-100057060985335/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
    style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">RIBS</a>. All Rights Reserved. Designed by <a
                    href="https://ramanstha.github.io/Raman-shrestha/" target="_blank">Raman Shrestha</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->