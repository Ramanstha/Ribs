<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#cms" data-bs-toggle="collapse">
                        <i class="fa-brands fa-font-awesome"></i>
                        CMS <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="cms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('view.sitesetting')}}">
                                    <span> Sitesetting </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.banner')}}">
                                    <span> Banner </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.contact')}}">
                                    <span> Contact </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.socialmedia')}}">
                                    <span> Social Media </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#aboutus" data-bs-toggle="collapse">
                        <i class="fa-solid fa-film"></i>
                        About Us <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="aboutus">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('view.aboutcategory')}}">
                                    <span> Category </span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{route('view.aboutsubcategory')}}">
                                    <span> Sub Category </span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{route('view.aboutus')}}">
                                    <span> About Us </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#message" data-bs-toggle="collapse">
                        <i class="far fa-comment"></i>
                        Messages <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="message">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('view.message')}}">
                                    <span> Message </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('view.smessage')}}">
                                    <span> Special Message </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('view.notice')}}">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span> Notice/Downloads/Events</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{route('view.publication')}}">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span> Publication</span>
                    </a>
                </li> --}}

                <li>
                    <a href="#gallery" data-bs-toggle="collapse">
                        <i class="fa-solid fa-film"></i>
                        Gallery <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="gallery">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('view.video')}}">
                                    <span> Videos </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.galleryandfee')}}">
                                    <span> Gallery </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#program" data-bs-toggle="collapse">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Academic Program <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="program">
                        <ul class="nav-second-level">
                            {{-- <li>
                                <a href="{{route('view.programcategory')}}">
                                    <span> Category </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('view.programsubcategory')}}">
                                    <span> SubCategory </span>
                                </a>
                            </li> --}}

                            <li>
                                <a href="{{route('view.academic')}}">
                                    <span> Academic Program</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('view.affiliations')}}">
                        <i class="fa-solid fa-hands-holding-circle"></i>
                        <span> Affiliations </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('view.facilities')}}">
                        <i class="fa-solid fa-children"></i>
                        <span> Facilities </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{route('view.category')}}">
                        <i class="fa-solid fa-chart-line"></i>
                        <span> Gov/IQAC/RMC/Downloads Category </span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{route('view.governance')}}">
                        <i class="fa-solid fa-chart-line"></i>
                        <span> Governance/IQAC/RMC </span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{route('view_user.contact')}}">
                        <i class="fa-solid fa-users"></i>
                        <span> Feedback/User Message </span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{route('view.applicants')}}">
                        <i class="fa-solid fa-user"></i>
                        <span> Applicants </span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{route('view.applicants')}}">
                        <i class="fa-solid fa-user"></i>
                        <span> Scholarship </span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->
</div>
<!-- Sidebar -left -->