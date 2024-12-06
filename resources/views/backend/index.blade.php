@extends('backend.main')
@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                @if(Session::has('message'))
                <span class="text-danger">{{Session::get('message')}}</span>
                @endif
                <div class="page-title-box">
                    <h4 class="page-title fw-bold">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                    <i class="fa-solid fa-clipboard font-24 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <a href="{{route('view.notice')}}">
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark mt-1"><span
                                                data-plugin="counterup">{{App\Models\Notice::count()}}</span>
                                        </h3>
                                        <p class="text-dark mb-1 fw-bold text-truncate">Total Notices</p>
                                    </div>
                                </div>
                            </a>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                    <i class="fa-solid fa-graduation-cap font-24 avatar-title text-success"></i>
                                </div>
                            </div>
                            <a href="{{route('view.academic')}}">
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span
                                            data-plugin="counterup">{{App\Models\Academic::count()}}</span>
                                    </h3>
                                    <p class="text-dark mb-1 fw-bold text-truncate">Acadamic Programs</p>
                                </div>
                            </div>
                        </a>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                    <i class="fa-solid fa-chart-line font-24 avatar-title text-info"></i>
                                </div>
                            </div>
                            <a href="{{route('view.category')}}">
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{App\Models\Governance::count()}}</span></h3>
                                    <p class="text-dark mb-1 fw-bold text-truncate">Governance/IQAC/RMC</p>
                                </div>
                            </div>
                        </a>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-info border-primary border">
                                    <i class="fa-solid fa-film font-24 avatar-title text-info"></i>
                                </div>
                            </div>
                            <a href="{{route('view.galleryandfee')}}">
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{App\Models\Galleryfeestructure::count()}}</span></h3>
                                    <p class="text-dark mb-1 fw-bold text-truncate">Gallery</p>
                                </div>
                            </div>
                        </a>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-info border">
                                    <i class="fa-solid fa-comment font-24 avatar-title text-info"></i>
                                </div>
                            </div>
                            <a href="{{route('view.message')}}">
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{App\Models\Message::count()}}</span></h3>
                                    <p class="text-dark mb-1 fw-bold text-truncate">Message</p>
                                </div>
                            </div>
                        </a>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
    </div> <!-- container -->
    @endsection