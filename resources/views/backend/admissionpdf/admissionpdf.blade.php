<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h2.heading {
            background: #0D4DA1;
            text-align: center;
            font-size: 26px;
            text-transform: uppercase;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>

<body>
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
                        <input type="text" class="form-control text-capitalize" value="{{$getApplicantInfo->level}}">
                    </div>
                    <div class="col-4">
                        <label class="mr-3 label-60">Subject </label>
                        <input class="form-control text-capitalize" type="text" value="{{$getApplicantInfo->subject}}">
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
                                <input type="text" class="form-control text-uppercase"
                                    value="{{$getApplicantInfo->fname. $getApplicantInfo->mname. $getApplicantInfo->lname}}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row student-info-row">
                <div class="col-12 mb-2 ">
                    <div class="input-group">
                        <label style="margin-top:2px;">Date of Birth</label>
                        <div class="birth-days-container">
                            <div>
                                <label>(BS)</label>
                                <input type="text" class="form-control" name="dobbs"
                                    value="{{$getApplicantInfo->dobbs}}">
                            </div>
                            <div>
                                <label>(AD)</label>
                                <input type="text" class="form-control" name="dobad"
                                    value="{{$getApplicantInfo->dobad}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-8">
                            <div class="gender-class">
                                <label class=" mr-3 label-60">Gender</label>
                                <input type="text" class="form-control text-capitalize" name="gender"
                                    value="{{$getApplicantInfo->gender}}">
                            </div>
                            <div class="form-group gender-class">
                                <label class="mr-3 label-60">Religion </label>
                                <input type="text" class="form-control text-capitalize" name="religion"
                                    value="{{$getApplicantInfo->religion}}">
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
                        <input type="text" class="form-control text-capitalize" name="pcountry" value="{{$getApplicantInfo->pcountry}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Province </label>
                        <input type="text" class="form-control text-capitalize" name="pprovince"
                            value="{{$getApplicantInfo->pprovince}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>District </label>
                        <input type="text" class="form-control text-capitalize" name="pdistrict"
                            value="{{$getApplicantInfo->pdistrict}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Municipality
                        </label>
                        <input type="text" class="form-control text-capitalize" name="pmunciplicity"
                            value="{{$getApplicantInfo->pmunciplicity}}">
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-2">
                    <div class="form-group">
                        <label>Ward No</label>
                        <input type="text" class="form-control" name="pward" value="{{$getApplicantInfo->pward}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Email
                        </label> <input type="text" class="form-control" name="pemail"
                            value="{{$getApplicantInfo->pemail}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Phone No
                        </label> <input type="text" class="form-control" name="pphone"
                            value="{{$getApplicantInfo->pphone}}">
                    </div>
                </div>
            </div>

            <div class="col-6 text-primary my-2 contact-address">CURRENT CONTACT ADDRESS</div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Country </label>
                        <input type="text" class="form-control text-capitalize" name="ccountry" value="{{$getApplicantInfo->ccountry}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Province </label>
                        <input type="text" class="form-control text-capitalize" name="cprovince"
                            value="{{$getApplicantInfo->cprovince}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>District </label>
                        <input type="text" class="form-control text-capitalize" name="cdistrict"
                            value="{{$getApplicantInfo->cdistrict}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Municipality
                        </label>
                        <input type="text" class="form-control text-capitalize" name="cmunciplicity"
                            value="{{$getApplicantInfo->cmunciplicity}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="form-group">
                        <label>Ward No
                        </label> <input type="text" class="form-control" name="cward"
                            value="{{$getApplicantInfo->cward}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Email
                        </label> <input type="text" class="form-control" name="cemail"
                            value="{{$getApplicantInfo->cemail}}">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Phone No
                        </label> <input type="text" class="form-control" name="cphone"
                            value="{{$getApplicantInfo->cphone}}">
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
                        <input type="text" class="form-control text-capitalize" value="{{$getApplicantInfo->Parent->fathername}}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="femail"
                            value="{{$getApplicantInfo->Parent->femail}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Profession</label>
                        <input type="text" class="form-control" name="fprofession"
                            value="{{$getApplicantInfo->Parent->fprofession}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" minlength="6" maxlength="10" class="form-control" name="fphone"
                            value="{{$getApplicantInfo->Parent->fphone}}">
                    </div>
                </div>
            </div>

            <div class="text-primary my-2">MOTHER'S INFORMATION</div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Mother's Name</label>
                        <input type="text" class="form-control text-capitalize" name="mothername"
                            value="{{$getApplicantInfo->Parent->mothername}}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="memail"
                            value="{{$getApplicantInfo->Parent->memail}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Profession</label>
                        <input type="text" class="form-control" name="mprofession"
                            value="{{$getApplicantInfo->Parent->mprofession}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" class="form-control" name="mphone"
                            value="{{$getApplicantInfo->Parent->mphone}}">
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
                            value="{{$getApplicantInfo->EmergencyContact->name}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Relationship</label>
                        <input type="text" class="form-control text-capitalize" name="relationship"
                            value="{{$getApplicantInfo->EmergencyContact->relationship}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label> Mobile No.</label>
                        <input type="text" class="form-control" name="phone"
                            value="{{$getApplicantInfo->EmergencyContact->phone}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email"
                            value="{{$getApplicantInfo->EmergencyContact->email}}">
                    </div>
                </div>
            </div>

            <!-- Academic Information -->
            <h2 class="heading">Academic Information</h2>
            <div class="row">
                <div class="col-4">
                    <label class="fw-bold">Level</label>
                    <input type="text" class="form-control text-capitalize" name="alevel"
                        value="{{$getApplicantInfo->AcademicInformation->alevel}}">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-8">
                    <label>Board/University</label>
                    <input type="text" class="form-control text-capitalize" name="university"
                        value="{{$getApplicantInfo->AcademicInformation->university}}">
                </div>
                <div class="col-4">
                    <label>Passed Year</label>
                    <input type="text" class="form-control" name="passedyear"
                        value="{{$getApplicantInfo->AcademicInformation->passedyear}}">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4">
                    <label>Symbol No</label>
                    <input type="text" class="form-control" name="symbol"
                        value="{{$getApplicantInfo->AcademicInformation->symbol}}">
                </div>
                <div class="col-4">
                    <label>Division/GPA</label>
                    <input type="text" class="form-control text-capitalize" name="division"
                        value="{{$getApplicantInfo->AcademicInformation->division}}">
                </div>
                <div class="col-4">
                    <label>Faculty</label>
                    <input type="text" class="form-control text-capitalize" name="faculty"
                        value="{{$getApplicantInfo->AcademicInformation->faculty}}">
                </div>
            </div>
        </div>
    </div>
</body>

</html>