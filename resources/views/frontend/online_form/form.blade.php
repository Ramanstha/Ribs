@extends('frontend.main')
@section('title','online-admission')
@section('content')
<div class="content">
    <div class="container">
        <div class="row d-print-none text-center mb-3 align-items-center d-flex justify-content-center">
            <div class="col-2 col-sm-2 col-xs-2">
                <div class="print-logo-left fixed-image contain">
                    <img src="{{asset('frontend/img/logo (1).png')}} " class="form-logo" width="170"
                        alt="KATHMANDU SHIKSHA CAMPUS Logo">
                </div>
            </div>
            <div class="col-8 col-sm-8 col-xs-8">
                <h2 class="school-name mb-0 fw-bold" style="color: #0D4DA1;">KATHMANDU SHIKSHA CAMPUS</h2>
                <div class="address-info">Satungal, Chandragiri-10, kathmandu, Nepal<br>014311843
                    | kscrmc13@gmail.com</div>

            </div>
        </div>
        <p class="text-danger">Fields with (*) are compulsory.</p>

        <!-- Choose Subject -->
        @if(Session::has('message'))
        <p style="color:rgb(36, 235, 36);text-align:center;font-size:24px">{{Session::get('message')}}</p>
        @endif
        <form action="{{route('store.form')}}" method="post" class="form-block active">
            @csrf
            <div class="subjectBlock">
                <h2 class="heading">Choose The Program</h2>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label class="mr-3 label-60">Level <span class="text-danger">*</span>:</label>
                        <select class="form-control" name="level" id="mainprogram">
                            <option value="">--- Select ---</option>
                            <option value="+2" {{old('type')=='+2'?'selected':''}}>+2</option>
                            <option value="bachelor" {{old('type')=='bachelor'?'selected':''}}>Bachelor</option>
                            <option value="master" {{old('type')=='master'?'selected':''}}>Master's</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label class="mr-3 label-60">Subject <span class="text-danger">*</span>:</label>
                        {{-- <select class="form-control " name="subject" id="subject"></select> --}}
                        <div class="form-group">
                            <input type="text" class="form-control text-uppercase" name="subject"
                                placeholder="Subject" value="{{old('subject')}}">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Personal Information -->
            <h2 class="heading">Personal Information</h2>
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

            <div class="row student-info-row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mb-2 ">
                    <div class="input-group">
                        <label style="margin-top:2px;">Date of Birth</label>
                        <div class="birth-days-container">
                            <div class="input-group align-items-center mb-2">
                                <label class="px-3 my-0">(BS)<span class="text-danger">*</span>:</label>
                                <input type="date" class="form-control" name="dobbs" placeholder="DD-MM-YYYY"
                                    value="{{old('dobbs')}}">
                                @error('dobbs')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group align-items-center">
                                <label class="px-3 my-0">(AD)<span class="text-danger"></span>:</label>
                                <input type="date" class="form-control" name="dobad" placeholder="DD-MM-YYYY"
                                    value="{{old('dobad')}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="gender-class">
                                <label class="my-2 mr-3 label-60">Gender<span class="text-danger">*</span>:</label>
                                <label>Male</label> &nbsp;
                                <input type="radio" value="male" name="gender">&numsp;
                                <label>Female</label> &nbsp;
                                <input type="radio" value="female" name="gender">&numsp;
                                <label>Other</label> &nbsp;
                                <input type="radio" value="other" name="gender">&numsp;
                                @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group gender-class">
                                <label class="mr-3 label-60">Religion <span class="text-danger">*</span>:</label>
                                <select class="form-control" name="religion">

                                    <option value="">--- Select ---</option>

                                    <option value="hindu" {{old('type')=='hindu'?'selected':''}}>Hindu</option>

                                    <option value="christian" {{old('type')=='christian'?'selected':''}}>Christian
                                    </option>

                                    <option value="buddhist" {{old('type')=='buddhist'?'selected':''}}>Buddhist</option>

                                    <option value="muslim" {{old('type')=='muslim'?'selected':''}}>Muslim</option>

                                    <option value="kirat" {{old('type')=='kirat'?'selected':''}}>Kirat</option>

                                    <option value="others" {{old('type')=='others'?'selected':''}}>Others</option>

                                </select>
                                @error('religion')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact information -->
            <h2 class="heading">CONTACT ADDRESS</h2>

            <div class="text-primary mb-2 permanent-address">PERMANENT ADDRESS</div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Country <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="pcountry"
                            value="{{old('pcountry')}}">
                        @error('pcountry')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Province <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="pprovince"
                            value="{{old('pprovince')}}">
                        @error('pprovince')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>District <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="pdistrict"
                            value="{{old('pdistrict')}}">
                        @error('pdistrict')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Munciplicity <span class="text-danger">*</span>:
                        </label>
                        <input type="text" class="form-control text-capitalize" name="pmunciplicity"
                            value="{{old('pmunciplicity')}}">
                        @error('pmunciplicity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Ward No <span class="text-danger">*</span>:
                        </label> <input type="number" min="1" class="form-control" name="pward"
                            value="{{old('pward')}}">
                        @error('pward')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span>:
                        </label> <input type="email" class="form-control" name="pemail" value="{{old('pemail')}}">
                        @error('pemail')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Phone No<span class="text-danger">*</span>:
                        </label> <input type="tel" class="form-control" name="pphone" value="{{old('pphone')}}">
                        @error('pphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-primary my-2 contact-address">CURRENT ADDRESS</div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Country <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="ccountry"
                            value="{{old('ccountry')}}">
                        @error('ccountry')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Province <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="cprovince"
                            value="{{old('cprovince')}}">
                        @error('cprovince')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>District <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="cdistrict"
                            value="{{old('cdistrict')}}">
                        @error('cdistrict')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Munciplicity <span class="text-danger">*</span>:
                        </label>
                        <input type="text" class="form-control text-capitalize" name="cmunciplicity"
                            value="{{old('cmunciplicity')}}">
                        @error('cmunciplicity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Ward No <span class="text-danger">*</span>:
                        </label> <input type="number" min="1" class="form-control" name="cward"
                            value="{{old('cward')}}">
                        @error('cward')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span>:
                        </label> <input type="email" class="form-control" name="cemail" value="{{old('cemail')}}">
                        @error('cemail')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Phone No<span class="text-danger">*</span>:
                        </label> <input type="tel" minlength="6" maxlength="10" class="form-control" name="cphone"
                            value="{{old('cphone')}}">
                        @error('cphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Parent information -->
            <h2 class="heading">Parent's Information</h2>

            <div class="text-primary mb-2">FATHER'S INFORMATION</div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Father's Name<span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="fathername"
                            value="{{old('fathername')}}">
                        @error('fathername')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Email<span class="text-danger"></span>:</label>
                        <input type="email" class="form-control" name="femail" value="{{old('femail')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Profession<span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="fprofession"
                            value="{{old('fprofession')}}">
                        @error('fprofession')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Mobile No.<span class="text-danger">*</span>:</label>
                        <input type="text" minlength="6" maxlength="10" class="form-control" name="fphone"
                            value="{{old('fphone')}}">
                        @error('fphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-primary my-2">MOTHER'S INFORMATION</div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Mother's Name<span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="mothername"
                            value="{{old('mothername')}}">
                        @error('mothername')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Email<span class="text-danger"></span>:</label>
                        <input type="email" class="form-control" name="memail" value="{{old('memail')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Profession<span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control" name="mprofession" value="{{old('mprofession')}}">
                        @error('mprofession')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Mobile No<span class="text-danger">*</span>:</label>
                        <input type="text" minlength="6" maxlength="10" class="form-control" name="mphone"
                            value="{{old('mphone')}}">
                        @error('mphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <h2 class="heading">Emergency Contact</h2>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span>:</label>
                        <input type="text" class="form-control text-capitalize" name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Relationship<span class="text-danger">*</span>:</label>
                        <select class="form-control" name="relationship">
                            <option value="">--- Select ---</option>

                            <option value="aunt" {{old('type')=='aunt'?'selected':''}}>Aunt</option>

                            <option value="brother" {{old('type')=='brother'?'selected':''}}>Brother</option>

                            <option value="daughter" {{old('type')=='daughter'?'selected':''}}>Daughter</option>

                            <option value="father" {{old('type')=='father'?'selected':''}}>Father</option>

                            <option value="fathers_in_law" {{old('type')=='fathers_in_law'?'selected':''}}>Fathers in
                                Law</option>

                            <option value="friends" {{old('type')=='friends'?'selected':''}}>Friends</option>

                            <option value="grand_father" {{old('type')=='grand_father'?'selected':''}}>Grand Father
                            </option>

                            <option value="grand_mother" {{old('type')=='grand_mother'?'selected':''}}>Grand Mother
                            </option>

                            <option value="maternal_uncle" {{old('type')=='maternal_uncle'?'selected':''}}>Maternal
                                Uncle</option>

                            <option value="mother" {{old('type')=='mother'?'selected':''}}>Mother</option>

                            <option value="mothers_in_law" {{old('type')=='mothers_in_law'?'selected':''}}>Mothers in
                                Law</option>

                            <option value="others" {{old('type')=='others'?'selected':''}}>Others</option>

                            <option value="sister" {{old('type')=='sister'?'selected':''}}>Sister</option>

                            <option value="sisters_in_law" {{old('type')=='sisters_in_law'?'selected':''}}>Sisters in
                                Law</option>

                            <option value="son" {{old('type')=='son'?'selected':''}}>Son</option>

                            <option value="spouse" {{old('type')=='spouse'?'selected':''}}>Spouse</option>

                            <option value="uncle" {{old('type')=='uncle'?'selected':''}}>Uncle</option>

                        </select>
                        @error('relationship')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>
                            Mobile No.<span class="text-danger">*</span>:
                        </label>
                        <input type="number" minlength="6" maxlength="10" class="form-control" name="phone"
                            value="{{old('phone')}}">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Email<span class="text-danger"></span>:</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                </div>
            </div>

            <!-- Academic Information -->
            <h2 class="heading">Academic Information</h2>
            <div class="row">
                <label class="fw-bold">Level<span class="text-danger">*</span>:</label>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="slc" {{old('type')=='slc'?'selected':''}}>
                    <label>S.L.C/NEB</label>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="+2" {{old('type')=='+2'?'selected':''}}>
                    <label>PCL/+2</label>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="bachelor" {{old('type')=='bachelor'?'selected':''}}>
                    <label>Bachelor</label>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="b_ed" {{old('type')=='b_ed'?'selected':''}}>
                    <label>One-Year B.ED</label>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="master" {{old('type')=='master'?'selected':''}}>
                    <label>Master's Level</label>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <input type="radio" name="alevel" value="other" {{old('type')=='other'?'selected':''}}>
                    <label>Other's</label>
                </div>
                @error('level')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row my-2">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <label>Board/University<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control text-capitalize" name="university"
                        value="{{old('university')}}">
                    @error('university')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label>Passed Year<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control" name="passedyear" value="{{old('passedyear')}}">
                    @error('passedyear')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label>Symbol No<span class="text-danger"></span>:</label>
                    <input type="text" class="form-control" name="symbol" value="{{old('symbol')}}">
                    @error('symbole')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label>Division/GPA<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control text-capitalize" name="division" value="{{old('division')}}">
                    @error('division')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label>Faculty<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control text-capitalize" name="faculty" value="{{old('faculty')}}">
                    @error('faculty')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="submit-btn">
                    Submit</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mainprogram').on('change', function(e) {
            var cat_id = e.target.value;
            $.ajax({
                url: '/select-subject',
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    console.log(data);
                    var d = $('select[name="subject"]').empty();
                    $('select[name="subject"]').append(
                        '<option value="">Select Category</option>');
                    $.each(data.allsubject, function(key, value) {
                        $('select[name="subject"]').append(
                            '<option value="' + value.title +
                            '" class="text-uppercase">' + value
                            .title + '</option>');
                    });
                }
            })
        });
    });
    // // Separate event listener for subject selection
    // $('#subject').on('change', function(e) {
    //     var subject_id = e.target.value;
    //     // Perform necessary actions based on the selected subject
    // });
</script>
@endsection