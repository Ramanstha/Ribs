@extends('frontend.main')
@section('title','online-schoolarship')
@section('content')
<div class="content">
    <div class="container">
        <div style="background-color: #0D4DA1">
            <h2 class="text-white fs-3 d-flex justify-content-center text-align-center">Apply for Scholarship</h2>
            <h2 class="text-white fs-3 d-flex justify-content-center text-align-center">KATHMANDU SHIKSHA MULTIPLE
                CAMPUS, Satungal-10</h2>
            <h2 class="text-white fs-3 d-flex justify-content-center text-align-center">Please Fill the Scholarship Form
            </h2>
        </div>

        <!-- Choose Subject -->
        @if(Session::has('message'))
        <p style="color:rgb(36, 235, 36);text-align:center;font-size:24px">{{Session::get('message')}}</p>
        @endif
        <form action="{{route('store.schoolarship')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="name-form-group">
                <label class="fs-5 mb-3">PLEASE NOTE: This application is to be used ONLY if you are applying for the
                    scholarship listed below.</label>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                        <div class="form-group">
                            <input type="radio" name="sfield" value="merit">&nbsp;Entrance Topper Scholarship<br>
                            <input type="radio" class="my-3" name="sfield" value="remote">&nbsp;Remote Area
                            Scholarship<br>
                            <input type="radio" name="sfield" value="poor">&nbsp;Poor/Disadvantage Group
                            Scholarship<br>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                        <div class="form-group">
                            <input type="radio" name="sfield" value="chandragiri">&nbsp;Chandragiri Munciplicity
                            Scholarship<br>
                            <input type="radio" name="sfield" class="my-3" value="chairman">&nbsp;Sportsmanship
                            Scholarship<br>
                            <input type="radio" name="sfield" value="community">&nbsp;Community School
                            Scholarship<br>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                        <div class="form-group">
                            <input type="radio" name="sfield" value="martys">&nbsp;Martyr's Family
                            Scholarship<br>
                            <input type="radio" name="sfield" class="my-3" value="martys">&nbsp;Terminal Based Exams
                            Scholarship<br>
                            <input type="radio" name="sfield" value="principal">&nbsp;Grade/Yearly/Semester Topper
                            Scholarship<br>
                        </div>
                    </div>
                </div>
                <label>This scholarship application form must be submitted by the needy graduates, who
                    wants to pursue their
                    studies at KSMC with the financial supports for the further study in the field of <span
                        class="fw-bold">(Grade XI/XII/BBS/BCA/
                        BED and B.Ed Science/ MBS and M.ED).</span></label>
            </div>

            <!-- General Instructions -->
            <h2 class="heading">General Instructions to Applicant</h2>
            <ul class="fs-5">
                <li>1. Applicants are request to submit the necessary supporting documents directly to the campus
                    administration or attach here with</li>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <label>Attachment<span class="text-danger">*</span>:</label>
                    <input type="file" class="form-control" name="attachment" value="{{old('attachment')}}">
                    @error('attachment')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </ul>

            <!-- Personal Information -->
            <h2 class="heading">1. Personal Information</h2>
            <div class="name-form-group">
                <label>Name of Applicant (Full Name)<span class="text-danger">*</span>:</label>
                <div class="name_input">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <input type="text" class="form-control text-uppercase" name="fname"
                                    placeholder="First name" value="{{old('fname')}}">
                                @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <input type="text" class="form-control text-uppercase" name="mname"
                                    placeholder="Middle name" value="{{old('mname')}}">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <input type="text" class="form-control text-uppercase" name="lname"
                                    placeholder="Last name" value="{{old('lname')}}">
                                @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="name-form-group">
                <div class="name_input">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <label> Cell No<span class="text-danger">*</span>:</label>
                                <input type="number" class="form-control" name="cell" placeholder="98xxxxxxxx"
                                    value="{{old('cell')}}">
                                @error('cell')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="example@gmail.com"
                                    value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <label>Current Address<span class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="address" value="{{old('address')}}">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="name-form-group">
                <div class="name_input">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <label>City<span class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="city" value="{{old('city')}}">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group">
                                <label>Muncipality/Villagepalika<span class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="muncipality"
                                    value="{{old('muncipality')}}">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parent information -->
            <h2 class="heading">2. Parent's Information</h2>
            <div class="text-primary my-2">FATHER'S INFORMATION</div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>FATHER's Name:</label>
                        <input type="text" class="form-control text-capitalize" name="fathername"
                            value="{{old('fathername')}}">
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Occupation:</label>
                        <input type="text" class="form-control" name="foccupation" value="{{old('foccupation')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control text-capitalize" name="faddress"
                            value="{{old('faddress')}}">
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Cell No:</label>
                        <input type="number" class="form-control" name="fcell" placeholder="98xxxxxx"
                            value="{{old('fcell')}}">
                    </div>
                </div>
            </div>

            <div class="text-primary my-2">MOTHER'S INFORMATION</div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Mother's Name:</label>
                        <input type="text" class="form-control text-capitalize" name="mothername"
                            value="{{old('mothername')}}">
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Occupation:</label>
                        <input type="text" class="form-control" name="moccupation" value="{{old('moccupation')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control text-capitalize" name="maddress"
                            value="{{old('maddress')}}">
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Cell No:</label>
                        <input type="number" class="form-control" name="mcell" placeholder="98xxxxxx"
                            value="{{old('mcell')}}">
                    </div>
                </div>
            </div>

            <!-- Education -->
            <h2 class="heading">3. Education</h2>
            <div class="row">
                <div>
                    <div class="form-group">
                        <label>a. Name the schools/ Colleges from where you have passed SEE or the grade XII or the
                            Bachelors level studies.</label>
                        <input type="text" class="form-control text-capitalize" name="school" value="{{old('school')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div>
                    <div class="form-group">
                        <label>b. What course of study would you like to pursue?</label><br>
                        <input type="radio" value="gradex" name="level">&nbsp;Grade XI&numsp;&numsp;&numsp;
                        <input type="radio" value="bbs" name="level">&nbsp;BBS&numsp;&numsp;&numsp;
                        <input type="radio" value="bca" name="level">&nbsp;BCA&numsp;&numsp;&numsp;
                        <input type="radio" value="bed" name="level">&nbsp;B.ED&numsp;&numsp;&numsp;
                        <input type="radio" value="bscience" name="level">&nbsp;B.ED Science&numsp;&numsp;&numsp;
                        <input type="radio" value="mbs" name="level">&nbsp;MBS&numsp;&numsp;&numsp;
                        <input type="radio" value="med" name="level">&nbsp;M.ED
                    </div>
                </div>
            </div>

            <!-- Extra -->
            <h2 class="heading">4. Academic, Athletic, Service, and extra activities</h2>
            <div class="row">
                <div>
                    <div class="form-group">
                        <label class="mb-2">a. List academic awards, Community Service, extra-curricular activities and
                            achievements by dates.(If any)</label>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <input type="file" class="form-control" name="eca[]" value="{{old('eca')}}" multiple>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic History -->
            <h2 class="heading">5. Terminal Examination scholarship</h2>
            <label class="text-muted mb-3">Note:Applicable only for admitted students.</label>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <label class="mr-3 label-60">Types:</label>
                    <select class="form-control" name="rank">
                        <option value="" class="text-center">------- Select -------</option>

                        <option value="firstterm" {{old('rank')=='firstterm'?'selected':''}}>First Term Exam</option>

                        <option value="secondterm" {{old('rank')=='secondterm'?'selected':''}}>Second Term Exam</option>

                        <option value="tu" {{old('rank')=='tu'?'selected':''}}>Preboard/TU Exam</option>

                        <option value="grade" {{old('rank')=='grade'?'selected':''}}>Grade/Year/Semester Exam</option>

                    </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <label>Results:</label>
                    <select class="form-control" name="result">
                        <option value="" class="text-center">------- Select -------</option>

                        <option value="first" {{old('result')=='first'?'selected':''}}>First</option>

                        <option value="second" {{old('result')=='second'?'selected':''}}>Second</option>

                        <option value="third" {{old('result')=='third'?'selected':''}}>Third</option>

                    </select>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
        <label class="fs-6 mt-4">NOTE: This scholarship application form must be submitted to <span
                class="fw-bold">Kathmandu Shiksha Multiple
                Campus</span>Office. For more details Contact Campus administration at 01-4311843/015916060 or visit
            Campus near Bishnudevi Mandir Naikap /Satungal during Office Hours(6.30 AM to 4.30 PM) or
            Call at 9851152148/9841292399</label>
        <label class="fw-bold fs-5 mt-3 d-flex justify-content-center">!!!Good Luck!!!</label>
    </div>
</div>
@endsection