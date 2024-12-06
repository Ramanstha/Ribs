<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="pro-user-name ms-1">
                        {{Auth::User()->name}} <i class="fa-solid fa-angle-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !!! {{Auth::user()->name}}</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>

                    <a href="{{route('changepassword')}}" class="dropdown-item notify-item">
                        <i class="fa-solid fa-lock"></i>
                        <span>Change Password</span>
                    </a>

                    <a href="{{route('changedetails')}}" class="dropdown-item notify-item">
                        <i class="fa-solid fa-user"></i>
                        <span>Change Details</span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>