<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LNMU</title>
    <link rel="shortcut icon" href="{{ asset('asset/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
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
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <label class="fieldlabels">First Name: </label> <input type="text"
                                            name="first_name" placeholder="Name" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Last Name: </label> <input type="text"
                                            name="last_name" placeholder="Department" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Department: </label> <input type="text"
                                            name="department" placeholder="Department" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">College Name: </label> <input type="text"
                                            name="college_name" placeholder="College Name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Advertisement Reference No. :: </label> <input
                                            type="text" name="advertisement_no"
                                            placeholder="Advertisement Reference No" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Date: </label> <input type="date"
                                            name="date" />
                                    </div>
                                </div>
                                <div style="border: 2px solid;padding:15px;">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="fieldlabels">Date of Appointment: </label> <input
                                                type="date" name="date_of_appointment" />
                                        </div>
                                        <div class="col-2">
                                            <label class="fieldlabels">Date of Confirmation: </label> <input
                                                type="date" name="date_of_confirmation" />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (From)
                                            </label> <input type="date"
                                                name="assessment_period_for_promotion_from" />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (To) </label>
                                            <input type="date" name="assessment_period_for_promotion_to" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="fieldlabels">Date of the Last Promotion </label> <input
                                                type="date" name="date_of_last_promotion" />

                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Notification No. of the Last Promotion </label>
                                            <input type="text" name="last_promotion_notification_no"
                                                placeholder="Last Promotion Notification No." />
                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Period of Assessment for promotion: (To)
                                            </label> <input type="date"
                                                name="assessment_period_for_promotion_to" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label class="fieldlabels">Grade in Annual Performance Report of the last 3
                                                years of the assessment period </label> <input type="text"
                                                name="date_of_last_promotion" />

                                        </div>
                                        <div class="col-4">
                                            <label class="fieldlabels">Total Academic / Research Scores </label> <input
                                                type="text" name="assessment_period_for_promotion_to" />
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
                                        <label class="fieldlabels">Name (in Block Letters): </label> <input type="text"
                                            name="name" placeholder="Name" />
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
                                        <label class="fieldlabels">Father's Name (in Block Letters): </label> <input type="text"
                                            name="name" placeholder="Name" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Mother's Name (in Block Letters): </label> <input type="text"
                                            name="name" placeholder="Name" />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="fieldlabels">Date of birth: </label>
                                        <input type="date" name="name"  />
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
                                        <input type="text" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Current Pay Scale & Grade Pay: </label>
                                        <input type="text" name="name"  />
                                    </div>
                                    {{-- <div class="col-2">
                                        <label class="fieldlabels">Date of Confirmation: </label>
                                        <input type="date" name="name"  />
                                    </div> --}}
                                    <div class="col-2">
                                        <label class="fieldlabels">Mobile Number: </label>
                                        <input type="number" name="name"  />
                                    </div>
                                    {{-- <div class="col-2">
                                        <label class="fieldlabels">E-Mail ID: </label>
                                        <input type="email" name="name"  />
                                    </div> --}}

                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Confirmation: </label>
                                        <input type="date" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Last Promotion: </label>
                                        <input type="date" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Date of Eligibility for Promotion: </label>
                                        <input type="date" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Position, Stage and Grade Pay applied for: </label>
                                        <input type="text" name="name"  />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Date of Initial Appointment and Present Stage with Pay Scale at LNMU: </label>
                                        <input type="text" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Mobile Number: </label>
                                        <input type="text" name="name"  />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Email ID: </label>
                                        <input type="text" name="name"  />
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
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file"
                                    name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature
                                    Photo:</label> <input type="file" name="pic" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
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
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png"
                                            class="fit-image"> </div>
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

        });
    </script>
</body>

</html>
