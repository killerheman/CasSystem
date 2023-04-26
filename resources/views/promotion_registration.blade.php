<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LNMU</title>
    <link rel="shortcut icon" href="{{ asset('asset/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #673AB7;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #673AB7;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #673AB7;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #673AB7;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #673AB7;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #673AB7
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #673AB7
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #673AB7
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Application for Promotion under the
                        Career Advancement Scheme (CAS) for University Teachers</h2>
                    <p>(As approved by the Chancellor Vide Letter No- BSU Statute-08/2005-283/GS(I) dt 15.02.2023)</p>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Choose level for promotion :*</label>
                                <select class="form-control" name="levels">
                                    <option selected disabled>--Select Level for Promotion--</option>
                                    <option>Assistant Professor(Academic Level 10) to Assistant Professor (Senior
                                        Scale/Academic Level 11)</option>
                                    <option>Assistant Professor (Senior Scale/Academic Level 11) to Assistant Professor
                                        (Selection
                                        Grade/Academic Level 12)</option>
                                    <option>Assistant Professor (Selection Grade/Academic Level 12) to Associate
                                        Professor (Academic Level
                                        13A)</option>
                                    <option>Associate Professor (Academic Level 13A) to Professor (Academic Level 14)
                                    </option>
                                </select>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label class="fieldlabels">First Name: </label> <input type="text" name="first_name" placeholder="Name" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Last Name: </label> <input type="text" name="last_name" placeholder="Department" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Department: </label> <input type="text" name="department" placeholder="Department" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">College Name: </label> <input type="text" name="college_name" placeholder="College Name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Advertisement Reference No. :: </label> <input type="text" name="advertisement_no" placeholder="Advertisement Reference No" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Date: </label> <input type="date" name="date" />
                                    </div>
                                </div>
                                <div style="border: 2px solid;padding:15px;">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="fieldlabels">Date of Appointment: </label> <input type="date" name="date_of_appointment" />
                                        </div>
                                        <div class="col-2">
                                            <label class="fieldlabels">Date of Confirmation: </label> <input type="date" name="date_of_confirmation" />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (From)
                                            </label> <input type="date" name="assessment_period_for_promotion_from" />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (To) </label>
                                            <input type="date" name="assessment_period_for_promotion_to" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="fieldlabels">Date of the Last Promotion </label> <input type="date" name="date_of_last_promotion" />

                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Notification No. of the Last Promotion </label>
                                            <input type="text" name="last_promotion_notification_no" placeholder="Last Promotion Notification No." />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (To)
                                            </label> <input type="date" name="assessment_period_for_promotion_to" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label class="fieldlabels">Grade in Annual Performance Report of the last 3
                                                years of the assessment period </label> <input type="text" name="date_of_last_promotion" />

                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Total Academic / Research Scores </label> <input type="text" name="assessment_period_for_promotion_to" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>
                                            NOTE: The research scores claimed by the applicant must be based on
                                            objectively verifiable
                                            criteria, and supported with documentary evidence. Research scores that
                                            cannot be verified will not
                                            be considered. PLEASE READ THE INSTRUCTIONS FOR EACH CATEGORY CAREFULLY,
                                            AND FOLLOW THEM.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">GENERAL INFORMATION AND ACADEMIC BACKGROUND:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Name (in Block Letters): </label> <input type="text" name="name" placeholder="Name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Gender: </label>
                                        <select class="form-control">
                                            <option>--Select Gender--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Category: </label>
                                        <select class="form-control">
                                            <option>--Select Category--</option>
                                            <option>SC</option>
                                            <option>ST</option>
                                            <option>EBC</option>
                                            <option>BC</option>
                                            <option>EWS</option>
                                            <option>General</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Father's Name (in Block Letters): </label> <input type="text" name="name" placeholder="Name" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Mother's Name (in Block Letters): </label> <input type="text" name="name" placeholder="Name" />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="fieldlabels">Date of birth: </label>
                                        <input type="date" name="name" />
                                    </div>
                                    <div class="col-2">
                                        <label class="fieldlabels">Nationality: </label>
                                        <select class="form-control">
                                            <option>--Select Nationality--</option>
                                            <option>Indian</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Current Designation: </label>
                                        <input type="text" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Current Pay Scale & Grade Pay: </label>
                                        <input type="text" name="name" />
                                    </div>
                                    {{-- <div class="col-2">
                                        <label class="fieldlabels">Date of Confirmation: </label>
                                        <input type="date" name="name"  />
                                    </div> --}}
                                    <div class="col-2">
                                        <label class="fieldlabels">Mobile Number: </label>
                                        <input type="number" name="name" />
                                    </div>
                                    {{-- <div class="col-2">
                                        <label class="fieldlabels">E-Mail ID: </label>
                                        <input type="email" name="name"  />
                                    </div> --}}

                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Confirmation: </label>
                                        <input type="date" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Last Promotion: </label>
                                        <input type="date" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Eligibility for Promotion: </label>
                                        <input type="date" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Position, Stage and Grade Pay applied for: </label>
                                        <input type="text" name="name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Date of Initial Appointment and Present Stage with
                                            Pay Scale at LNMU: </label>
                                        <input type="text" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Mobile Number: </label>
                                        <input type="text" name="name" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Email ID: </label>
                                        <input type="text" name="name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Address for Correspondence (with Pin Code): </label>
                                        <textarea placeholder="Address"> </textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Permanent Address (with Pin Code): </label>
                                        <textarea placeholder="Permanent Address"> </textarea>

                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="fs-title"> ACADEMIC QUALIFICATIONS (Graduation onwards):</h3>
                                    </div>
                                    <div class="col-3">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                <div class="parent">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="qualifications">Qualifications</label>
                                            <select class="form-select form-select-lg mb-3" name="qualifications" aria-label="Default select example">
                                                <option selected disabled>Choose qualifications</option>
                                                <option value="ug">Graduate Degree (UG)</option>
                                                <option value="pg">Post Graduate Degree (PG)</option>
                                                <option value="mp">M. Phil.</option>
                                                <option value="phd">Ph.D.</option>
                                                <option value="ot">Others (if any)</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="cou">College / University</label>
                                            <input type="text" id="cou" name="colleg_university" class="form-control" placeholder="College / University" aria-label="College / University">
                                        </div>
                                        <div class="col">
                                            <label for="Session">Session</label>
                                            <input type="text" id="Session" name="Session" class="form-control" placeholder="session" aria-label="session">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="yp">Year of Passing</label>
                                            <input type="text" id="yp" name="Year_of_Passing" class="form-control" placeholder="Year of Passing" aria-label="Year of Passing">
                                        </div>
                                        <div class="col">
                                            <label for="marks_cgpa">Marks Obtained /Out of Or CGPA Grade</label>
                                            <input type="text" id="marks_cgpa" name="marks_cgpa" class="form-control" placeholder="Marks Obtained /Out of Or CGPA Grade" aria-label="marks_cgpa">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="class_with">Class with %</label>
                                            <input type="text" id="class_with" name="class_with_%" class="form-control" placeholder="Class with %" aria-label="Class with %">
                                        </div>
                                        <div class="col-md-1 mt-5">
                                            <button type="button" class="btn btn-info add">+</button>
                                        </div>
                                    </div>
                                    <div class="add_input"></div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fs-title"> . RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU
                                            (Please Attach Relevant Certificates of Service Experience):</h3>
                                    </div>
                                </div>
                                <div class="parent1">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="institute">Institution</label>
                                            <input type="text" id="institute" name="Institution" class="form-control" placeholder="Institution" aria-label="Institution">
                                        </div>
                                        <div class="col">
                                            <label for="designation">Designation</label>
                                            <input type="text" id="designation" name="designation" class="form-control" placeholder="designation" aria-label="designation">
                                        </div>
                                        <div class="col">
                                            <label for="nature_appointment">Nature of appointment</label>
                                            <input type="text" id="nature_appointment" name="nature_appointment" class="form-control" placeholder="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)" aria-label="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)">
                                        </div>
                                        <div class="col">
                                            <label for="nature_duties">Nature of Duties</label>
                                            <input type="text" id="nature_duties" name="nature_duties" class="form-control" placeholder="Nature of Duties" aria-label="nature_duties">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="required_min_qualification">mininmum qualification</label>
                                            <input type="text" id="required_min_qualification" name="required_min_qualification" class="form-control" placeholder="Institution" aria-label="required_min_qualification">
                                        </div>
                                        <div class="col">
                                            <label for="Pay_Scale">Pay_Scale / Pay band and AGP</label>
                                            <input type="text" id="Pay_Scale" name="Pay_Scale" class="form-control" placeholder="Pay_Scale / Pay band and AGP" aria-label="Pay_Scale">
                                        </div>
                                        <div class="col">
                                            <label for="Remarks">Remarks</label>
                                            <input type="text" id="Remarks" name="remarks" class="form-control" placeholder="Remarks" aria-label="Remarks">
                                        </div>
                                        <div class="col">
                                            <label for="Encl.No.">Encl.No.</label>
                                            <input type="text" id="Encl.No." name="Encl_No" class="form-control" placeholder="Encl.No." aria-label="Encl.No.">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="required_min_qualification">Highest degree obtained</label>
                                            <input type="text" id="required_min_qualification" name="required_min_qualification" class="form-control" placeholder="Institution" aria-label="required_min_qualification">
                                        </div>
                                        <div class="col-2">
                                            <label for="Duration">Duration</label>
                                            <input type="text" id="From" name="duration_from" class="form-control" placeholder="From" aria-label="From">
                                        </div>
                                        <div class="col-2">
                                            <label for="Duration"></label>
                                            <input type="text" id="To" name="duration_to" class="form-control" placeholder="To" aria-label="To">
                                        </div>
                                        <div class="col-2">
                                            <label for="Experience">Experience</label>
                                            <input type="text" id="Year" name="Year" class="form-control" placeholder="Year" aria-label="Year">
                                        </div>
                                        <div class="col-2">
                                            <label for="Experience"></label>
                                            <input type="text" id="Months" name="Months" class="form-control" placeholder="Months" aria-label="Months">
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-info add1 mt-4">+</button>
                                        </div>
                                    </div>
                                    <div class="add_input1"></div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fs-title">RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER:</h3>
                                    </div>
                                </div>
                                <div class="parent2">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="Level">Level</label>
                                            <select class="form-select form-select-lg mb-3" name="level" aria-label="Default select example">
                                                <option selected disabled>Choose Level</option>
                                                <option value="l10">Level 10</option>
                                                <option value="l11">Level 11</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="Designation">Designation</label>
                                            <input type="text" id="Designation" name="designation" class="form-control" placeholder="Designation" aria-label="Designation">
                                        </div>
                                        <div class="col">
                                            <label for="Pay">Pay Scale and AGP</label>
                                            <input type="text" id="Pay" name="Pay_Scale_AGP" class="form-control" placeholder="Pay Scale and AGP" aria-label="Pay Scale and AGP">
                                        </div>
                                        <div class="col">
                                            <label for="Encl.No.">Encl.No.</label>
                                            <input type="text" id="Encl.No." name="Encl_No" class="form-control" placeholder="Encl.No." aria-label="Encl.No.">
                                        </div>
                                        <div class="col">
                                            <label for="Remarks">Remarks</label>
                                            <input type="text" id="Remarks" name="remarks" class="form-control" placeholder="Remarks" aria-label="Remarks">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="Duration">Duration</label>
                                            <input type="date" id="From" name="duration_from" class="form-control" placeholder="From" aria-label="From">
                                        </div>
                                        <div class="col">
                                            <label for="Duration"></label>
                                            <input type="date" id="To" name="duration_to" class="form-control" placeholder="To" aria-label="To">
                                        </div>
                                        <div class="col">
                                            <label for="Experience">Experience</label>
                                            <input type="text" id="Year" name="Year" class="form-control" placeholder="Year" aria-label="Year">
                                        </div>
                                        <div class="col">
                                            <label for="Experience"></label>
                                            <input type="month" id="Months" name="Months" class="form-control" placeholder="Months" aria-label="Months">
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-info add2 mt-4">+</button>
                                        </div>
                                    </div>
                                    <div class="add_input2"></div>
                                </div>
                                <div class="col-12">
                                    <h3 class="fs-title">Please clearly specify the period of Leave Without Pay (LWP)
                                    </h3>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })
            // ACADEMIC QUALIFICATIONS (Graduation onwards)
            var html = '<div class="parent">\
                                        <div class="row g-3">\
                                            <div class="col">\
                                                <label for="qualifications">Qualifications</label>\
                                                <select class="form-select form-select-lg mb-3" name="qualifications"\
                                                    aria-label="Default select example">\
                                                    <option selected disabled>Choose qualifications</option>\
                                                    <option value="ug">Graduate Degree (UG)</option>\
                                                    <option value="pg">Post Graduate Degree (PG)</option>\
                                                    <option value="mp">M. Phil.</option>\
                                                    <option value="phd">Ph.D.</option>\
                                                    <option value="ot">Others (if any)</option>\
                                                </select></div>\
                                            <div class="col">\
                                                <label for="cou">College / University</label>\
                                                <input type="text" id="cou" name="colleg_university"\
                                                    class="form-control" placeholder="College / University"\
                                                    aria-label="College / University">\
                                            </div>\
                                            <div class="col">\
                                                <label for="Session">Session</label>\
                                                <input type="text" id="Session" name="Session" class="form-control"\
                                                    placeholder="session" aria-label="session">\
                                            </div></div>\
                                        <div class="row g-3">\
                                            <div class="col">\
                                                <label for="yp">Year of Passing</label>\
                                                <input type="text" id="yp" name="Year_of_Passing"\
                                                    class="form-control" placeholder="Year of Passing"\
                                                    aria-label="Year of Passing">\
                                            </div><div class="col">\
                                                <label for="marks_cgpa">Marks Obtained /Out of Or CGPA Grade</label>\
                                                <input type="text" id="marks_cgpa" name="marks_cgpa"\
                                                    class="form-control"\
                                                    placeholder="Marks Obtained /Out of Or CGPA Grade"\
                                                    aria-label="marks_cgpa">\
                                            </div><div class="col-md-3">\
                                                <label for="class_with">Class with %</label>\
                                                <input type="text" id="class_with" name="class_with_%"\
                                                    class="form-control" placeholder="Class with %"\
                                                    aria-label="Class with %">\
                                            </div>\
                                            <div class="col-md-1 mt-5">\
                                            <button type="button" class="btn btn-info remove">-</button>\
                                        </div></div>\
                                        </div>';
            $(document).on('click', '.add', function() {
                $('.add_input').append(html);
            });
            $(document).on('click', '.remove', function() {
                $(this).closest('.parent').remove();
            });
            // RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU (Please Attach Relevant Certificates of Service Experience)
            var html1 = '<div class="parent1">\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="institute">Institution</label>\
                                            <input type="text" id="institute" name="Institution"\
                                                class="form-control" placeholder="Institution"\
                                                aria-label="Institution">\
                                        </div>\
                                        <div class="col">\
                                            <label for="designation">Designation</label>\
                                            <input type="text" id="designation" name="designation"\
                                                class="form-control" placeholder="designation"\
                                                aria-label="designation">\
                                        </div>\
                                        <div class="col">\
                                            <label for="nature_appointment">Nature of appointment</label>\
                                            <input type="text" id="nature_appointment" name="nature_appointment"\
                                                class="form-control"\
                                                placeholder="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)"\
                                                aria-label="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)">\
                                        </div>\
                                        <div class="col">\
                                            <label for="nature_duties">Nature of Duties</label>\
                                            <input type="text" id="nature_duties" name="nature_duties"\
                                                class="form-control" placeholder="Nature of Duties"\
                                                aria-label="nature_duties">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="required_min_qualification">mininmum qualification</label>\
                                            <input type="text" id="required_min_qualification"\
                                                name="required_min_qualification" class="form-control"\
                                                placeholder="Institution" aria-label="required_min_qualification">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Pay_Scale">Pay_Scale / Pay band and AGP</label>\
                                            <input type="text" id="Pay_Scale" name="Pay_Scale"\
                                                class="form-control" placeholder="Pay_Scale / Pay band and AGP"\
                                                aria-label="Pay_Scale">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Remarks">Remarks</label>\
                                            <input type="text" id="Remarks" name="remarks" class="form-control"\
                                                placeholder="Remarks" aria-label="Remarks">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Encl.No.">Encl.No.</label>\
                                            <input type="text" id="Encl.No." name="Encl_No" class="form-control"\
                                                placeholder="Encl.No." aria-label="Encl.No.">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="required_min_qualification">Highest degree obtained</label>\
                                            <input type="text" id="required_min_qualification"\
                                                name="required_min_qualification" class="form-control"\
                                                placeholder="Institution" aria-label="required_min_qualification">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Duration">Duration</label>\
                                            <input type="date" id="From" name="duration_from" class="form-control"\
                                                placeholder="From" aria-label="From">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Duration"></label>\
                                            <input type="date" id="To" name="duration_to" class="form-control"\
                                                placeholder="To" aria-label="To">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Experience">Experience</label>\
                                            <input type="text" id="Year" name="Year" class="form-control"\
                                                placeholder="Year" aria-label="Year">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Experience"></label>\
                                            <input type="text" id="Months" name="Months" class="form-control"\
                                                placeholder="Months" aria-label="Months">\
                                        </div>\
                                        <div class="col-1">\
                                            <button type="button" class="btn btn-info remove1 mt-4">-</button>\
                                        </div>\
                                    </div>\
                                </div>';

            $(document).on('click', '.add1', function() {
                $('.add_input1').append(html1);
            });
            $(document).on('click', '.remove1', function() {
                $(this).closest('.parent1').remove();
            });
            // RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER:
            var html2 = '<div class="parent2">\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="Level">Level</label>\
                                            <select class="form-select form-select-lg mb-3" name="level"\
                                                aria-label="Default select example">\
                                                <option selected disabled>Choose Level</option>\
                                               <option value="l10">Level 10</option>\
                                               <option value="l11">Level 11</option>\
                                            </select>\
                                        </div>\
                                        <div class="col">\
                                            <label for="Designation">Designation</label>\
                                            <input type="text" id="Designation" name="designation"\
                                                class="form-control" placeholder="Designation"\
                                                aria-label="Designation">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Pay">Pay Scale and AGP</label>\
                                            <input type="text" id="Pay" name="Pay_Scale_AGP" class="form-control"\
                                                placeholder="Pay Scale and AGP" aria-label="Pay Scale and AGP">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Encl.No.">Encl.No.</label>\
                                            <input type="text" id="Encl.No." name="Encl_No" class="form-control"\
                                                placeholder="Encl.No." aria-label="Encl.No.">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Remarks">Remarks</label>\
                                            <input type="text" id="Remarks" name="remarks" class="form-control"\
                                                placeholder="Remarks" aria-label="Remarks">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="Duration">Duration</label>\
                                            <input type="date" id="From" name="duration_from" class="form-control"\
                                                placeholder="From" aria-label="From">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Duration"></label>\
                                            <input type="date" id="To" name="duration_to" class="form-control"\
                                                placeholder="To" aria-label="To">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Experience">Experience</label>\
                                            <input type="text" id="Year" name="Year" class="form-control"\
                                                placeholder="Year" aria-label="Year">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Experience"></label>\
                                            <input type="month" id="Months" name="Months" class="form-control"\
                                                placeholder="Months" aria-label="M\onths">\
                                        </div>\
                                        <div class="col-1">\
                                            <button type="button" class="btn btn-info remove2 mt-4">-</button>\
                                        </div></div></div>';
            $(document).on('click', '.add2', function() {
                $('.add_input2').append(html2);
            });
            $(document).on('click', '.remove2', function() {
                $(this).closest('.parent2').remove();
            });
        });
    </script>
</body>

</html>