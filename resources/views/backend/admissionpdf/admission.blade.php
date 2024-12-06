@extends('backend.main')
@section('content')
<div class="content">
    <div class="container">
        <div class="row d-print-none text-center mb-3 align-items-center">
            <div class="col-8">
                <h2 class="school-name mb-0 mt-4 fw-bold" style="color: #0D4DA1;">KATHMANDU SHIKSHA CAMPUS</h2>
                <div class="address-info">Satungal, Chandragiri-10, kathmandu, Nepal<br>014311843
                    | kscrmc13@gmail.com</div>
            </div>
        </div>
        <!-- Choose Subject -->
        <div class="subjectBlock">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Program</h2>
                </div>
                <div class="col-4">
                    <label class="mr-3 label-60">Level </label>
                    <input type="text" class="form-control text-capitalize" value="{{$getApplicantInfo->level}}" readonly>
                </div>
                <div class="col-4">
                    <label class="mr-3 label-60">Subject </label>
                    <input class="form-control" type="text" value="{{$getApplicantInfo->subject}}" readonly>
                </div>
            </div>
        </div>
        <!-- Personal Information -->
        <h2 class="heading">Personal Information</h2>
        <div class="name-form-group">
            <label>Name of Applicant (Full Name)</label>
            <div class="name_input">
                <div class="row">
                    <div class="col-4 mb-2">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                value="{{$getApplicantInfo->fname. $getApplicantInfo->mname. $getApplicantInfo->lname}}" readonly readonly>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row student-info-row">
            <div class="col-6 mb-2 ">
                <div class="input-group">
                    <label style="margin-top:2px;">Date of Birth</label>
                    <div class="birth-days-container">
                        <div class="input-group align-items-center mb-2">
                            <label class="px-3 my-0">(BS)</label>
                            <input type="date" class="form-control" name="dobbs" value="{{$getApplicantInfo->dobbs}}" readonly>
                        </div>
                        <div class="input-group align-items-center">
                            <label class="px-3 my-0">(AD)</label>
                            <input type="date" class="form-control" name="dobad" value="{{$getApplicantInfo->dobad}}" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-8">
                        <div class="gender-class">
                            <label class=" mr-3 label-60">Gender</label>
                            <input type="text" class="form-control text-capitalize" name="gender" value="{{$getApplicantInfo->gender}}" readonly>
                        </div>
                        <div class="form-group gender-class">
                            <label class="mr-3 label-60">Religion </label>
                            <input type="text" class="form-control text-capitalize" name="religion"
                                value="{{$getApplicantInfo->religion}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact information -->
        <h2 class="heading">CONTACT ADDRESS</h2>

        <div class="text-primary mb-2 permanent-address">PERMANENT ADDRESS</div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Country </label>
                    <input type="text" class="form-control text-capitalize" name="pcountry" value="{{$getApplicantInfo->pcountry}}" readonly>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>Province </label>
                    <input type="text" class="form-control text-capitalize" name="pprovince" value="{{$getApplicantInfo->pprovince}}" readonly>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>District </label>
                    <input type="text" class="form-control text-capitalize" name="pdistrict" value="{{$getApplicantInfo->pdistrict}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Municipality
                    </label>
                    <input type="text" class="form-control text-capitalize" name="pmunciplicity"
                        value="{{$getApplicantInfo->pmunciplicity}}" readonly>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-2">
                <div class="form-group">
                    <label>Ward No</label>
                    <input type="number" class="form-control" name="pward" value="{{$getApplicantInfo->pward}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Email
                    </label> <input type="email" class="form-control" name="pemail"
                        value="{{$getApplicantInfo->pemail}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Phone No
                    </label> <input type="tel" class="form-control" name="pphone" value="{{$getApplicantInfo->pphone}}" readonly>
                </div>
            </div>
        </div>

        <div class="col-6 text-primary my-2 contact-address">CURRENT CONTACT ADDRESS</div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Country </label>
                    <input type="text" class="form-control text-capitalize" name="ccountry" value="{{$getApplicantInfo->ccountry}}" readonly>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>Province </label>
                    <input type="text" class="form-control text-capitalize" name="cprovince" value="{{$getApplicantInfo->cprovince}}" readonly>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>District </label>
                    <input type="text" class="form-control text-capitalize" name="cdistrict" value="{{$getApplicantInfo->cdistrict}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Municipality
                    </label>
                    <input type="text" class="form-control text-capitalize" name="cmunciplicity"
                        value="{{$getApplicantInfo->cmunciplicity}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label>Ward No
                    </label> <input type="number" class="form-control" name="cward"
                        value="{{$getApplicantInfo->cward}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Email
                    </label> <input type="email" class="form-control" name="cemail"
                        value="{{$getApplicantInfo->cemail}}" readonly>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Phone No
                    </label> <input type="tel" class="form-control" name="cphone" value="{{$getApplicantInfo->cphone}}" readonly>
                </div>
            </div>
        </div>

        <!-- Parent information -->
        <h2 class="heading">Parent's Information</h2>

        <div class="text-primary mb-2">FATHER'S INFORMATION</div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" class="form-control text-capitalize" value="{{$getApplicantInfo->Parent->fathername}}" readonly>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="femail"
                        value="{{$getApplicantInfo->Parent->femail}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Profession</label>
                    <input type="text" class="form-control" name="fprofession"
                        value="{{$getApplicantInfo->Parent->fprofession}}" readonly>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" minlength="6" maxlength="10" class="form-control" name="fphone"
                        value="{{$getApplicantInfo->Parent->fphone}}" readonly>
                </div>
            </div>
        </div>

        <div class="text-primary my-2">MOTHER'S INFORMATION</div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Mother's Name</label>
                    <input type="text" class="form-control text-capitalize" name="mothername"
                        value="{{$getApplicantInfo->Parent->mothername}}" readonly>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="memail"
                        value="{{$getApplicantInfo->Parent->memail}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Profession</label>
                    <input type="text" class="form-control" name="mprofession"
                        value="{{$getApplicantInfo->Parent->mprofession}}" readonly>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" class="form-control" name="mphone" value="{{$getApplicantInfo->Parent->mphone}}" readonly>
                </div>
            </div>
        </div>

        <!-- Emergency Contact -->
        <h2 class="heading">Emergency Contact</h2>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control text-capitalize" name="name"
                        value="{{$getApplicantInfo->EmergencyContact->name}}" readonly>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label>Relationship</label>
                    <input type="text" class="form-control text-capitalize" name="relationship"
                        value="{{$getApplicantInfo->EmergencyContact->relationship}}" readonly>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> Mobile No.</label>
                    <input type="number" class="form-control" name="phone"
                        value="{{$getApplicantInfo->EmergencyContact->phone}}" readonly>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"
                        value="{{$getApplicantInfo->EmergencyContact->email}}" readonly>
                </div>
            </div>
        </div>

        <!-- Academic Information -->
        <h2 class="heading">Academic Information</h2>
        <div class="row">
            <div class="col-4">
                <label class="fw-bold">Level</label>
                <input type="text" class="form-control text-capitalize" name="alevel"
                    value="{{$getApplicantInfo->AcademicInformation->alevel}}" readonly>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-8">
                <label>Board/University</label>
                <input type="text" class="form-control text-capitalize" name="university"
                    value="{{$getApplicantInfo->AcademicInformation->university}}" readonly>
            </div>
            <div class="col-4">
                <label>Passed Year</label>
                <input type="text" class="form-control" name="passedyear"
                    value="{{$getApplicantInfo->AcademicInformation->passedyear}}" readonly>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-4">
                <label>Symbol No</label>
                <input type="text" class="form-control" name="symbol"
                    value="{{$getApplicantInfo->AcademicInformation->symbol}}" readonly>
            </div>
            <div class="col-4">
                <label>Division/GPA</label>
                <input type="text" class="form-control text-capitalize" name="division"
                    value="{{$getApplicantInfo->AcademicInformation->division}}" readonly>
            </div>
            <div class="col-4">
                <label>Faculty</label>
                <input type="text" class="form-control text-capitalize" name="faculty"
                    value="{{$getApplicantInfo->AcademicInformation->faculty}}" readonly>
            </div>
        </div>
    </div>
</div>
@endsection