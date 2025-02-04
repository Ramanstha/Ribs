@php
use App\Models\Contact;
use App\Models\Sitesetting;
use App\Models\Smessage;
use App\Models\Academic;
use App\Models\Facilities;
use App\Models\Category;
use App\Models\AboutCategory;
use App\Models\AboutSubCategory;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use App\Models\Publication;
// use App\Models\Resource;

$getcontact = Contact::first();
$getsitesetting = Sitesetting::first();
$getsmessage=Smessage::first();
$getacademic=Academic::get();
$getfacilities=Facilities::where('status',1)->get();
$getcategory=Category::orderBy('id','asc')->where('status',1)->get();
$getaboutcategory=AboutCategory::with('about')->orderBy('id','asc')->where('status',1)->get();
// $getaboutsubcategory=AboutSubCategory::where('status',1)->get();
$getprogramcategory=ProgramCategory::with('category')->orderBy('id','desc')->where('status',1)->get();
$getprogramsubcategory=ProgramSubCategory::with('program')->orderBy('id','asc')->where('status',1)->get();
$publication=Publication::orderBy('id','asc')->where('status',1)->get();
// $resource=Resource::orderBy('id','asc')->where('status',1)->get();

@endphp
<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center py-4 px-xl-5">
        @if (!empty($getcontact))
        <div class="col-lg-3">
            @if (!empty($getsitesetting))    
            <a href="{{route('Home')}}" class="text-decoration-none">
                <img class="logo" src="{{asset('storage/sitesetting/'.$getsitesetting->logo)}}">
                <span class="pt-3" style="font-weight: bold; font-size: x-large;">ABC</span>
            </a>
            @endif
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Our location</h6>
                    <small class="text-capitalize">{!!$getcontact->address!!}</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                    <small>{{$getcontact->email}}</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                    <small>{{$getcontact->phone}}</small>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5 bg-dark">
        <div class="col-lg-9 ml-auto">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if(!empty($getsitesetting))
                <a href="{{route('Home')}}" class="text-decoration-none navbar-toggler">
                    <img class="logo" src="{{asset('storage/sitesetting/'.$getsitesetting->logo)}}">
                    <span class="pt-3 text-primary" style="font-weight: bold; font-size: x-large;">ABC</span>
                </a>
                @endif
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{route('Home')}}"
                            class="nav-item nav-link {{ Request::routeIs('Home') ? 'active' : '' }}">Home</a>

                        <a href="{{route('aboutus')}}"
                            class="nav-item nav-link {{ Request::routeIs('aboutus') ? 'active' : '' }}">About</a>

                        <div class="nav-item dropdown">
                            <a href="#"
                                class="nav-link dropdown-toggle  {{ Request::routeIs('academic.details') ? 'active' : '' }}"
                                data-toggle="dropdown">Academic</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                @foreach ($getacademic as $academic)
                                @switch($academic->title)
                                @case('pre-primary')
                                <a href="{{ route('academic.details', ['id' => $academic->id]) }}"
                                    class="dropdown-item">Pre-Primary</a>
                                @break

                                @case('primary')
                                <a href="{{ route('academic.details', ['id' => $academic->id]) }}"
                                    class="dropdown-item">Primary </a>
                                @break

                                @case('secondary')
                                <a href="{{ route('academic.details', ['id' => $academic->id]) }}"
                                    class="dropdown-item">Secondary</a>
                                @break

                                @case('higher secondary')
                                <a href="{{ route('academic.details', ['id' => $academic->id]) }}"
                                    class="dropdown-item">Higher Secondary</a>
                                @break

                                @endswitch
                                @endforeach
                            </div>
                        </div>

                        <a href="{{route('gallery')}}"
                            class="nav-item nav-link {{ Request::routeIs('gallery') ? 'active' : '' }}">Gallery</a>

                            <div class="nav-item dropdown">
                                <a href="#"
                                    class="nav-link dropdown-toggle  {{ Request::routeIs('ribs.facilities') ? 'active' : '' }}"
                                    data-toggle="dropdown">Facilities</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    @foreach ($getfacilities as $facilities)
                                    @switch($facilities->title)
                                    @case('library')
                                    <a href="{{ route('ribs.facilities', ['id' => $facilities->id]) }}"
                                        class="dropdown-item">Library</a>
                                    @break
    
                                    @case('transportation')
                                    <a href="{{ route('ribs.facilities', ['id' => $facilities->id]) }}"
                                        class="dropdown-item">Transportation </a>
                                    @break
    
                                    @case('food and nutrition')
                                    <a href="{{ route('ribs.facilities', ['id' => $facilities->id]) }}"
                                        class="dropdown-item">Food and Nutrition</a>
                                    @break

                                    @endswitch
                                    @endforeach
                                </div>
                            </div>

                        <a href="{{route('ribs.activities')}}"
                            class="nav-item nav-link {{ Request::routeIs('ribs.activities') ? 'active' : '' }}">Activities</a>

                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog List</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div> --}}
                        <a href="{{route('show_user.contact')}}"
                            class="nav-item nav-link  {{ Request::routeIs('show_user.contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    {{-- <a class="btn btn-primary py-2 ml-auto d-none d-lg-block" href="">Join Now</a> --}}
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->