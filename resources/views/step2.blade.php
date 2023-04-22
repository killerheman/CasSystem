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
                                        <h2 class="fs-title">TEACHING EXPERIENCE (UG/PG):</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <label class="fieldlabels">In Years :</label> <input type="text"
                                            name="in_year" placeholder="In Years" />
                                    </div>
                                    <div class="col-4">
                                        <label class="fieldlabels">Period: : </label> <input type="text"
                                            name="period_from" placeholder="period_from" />
                                    </div>
                                    <div class="col-4">
                                        <label class="fieldlabels"></label> <input type="text"
                                            name="period_to" placeholder="period_to" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">TEACHING EXPERIENCE (UG/PG):</h2>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <label class="fieldlabels">Years Spent in:</label> <input type="text"
                                            name="total_in_year" placeholder="Total Number of Years:" />
                                    </div>
                                    <div class="col-4">
                                        <label class="fieldlabels">Period: : </label> <input type="text"
                                            name="period_from" placeholder="period_from" />
                                    </div>
                                    <div class="col-4">
                                        <label class="fieldlabels"></label> <input type="text"
                                            name="period_to" placeholder="period_to" />
                                    </div>
                                </div>
                               <div class="parerent3">
                                <div class="row mt-3">
                                    <div class="col-3">
                                        <label class="fieldlabels">Years Spent in:</label>
                                        <select class="form-select form-select-lg mb-3" name="total_in_year" aria-label=".form-select-lg example">
                                            <option selected disabled>choose option...</option>
                                            <option value="m_phil">M. Phil.</option>
                                            <option value="ph_d">Ph.D.</option>
                                          </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Period of</label>
                                        <input type="text" name="Period_of_from" placeholder="Period_of_from" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels"></label> <input type="text"
                                            name="period_of_to" placeholder="period_of_to" />
                                    </div>
                                    <div class="col-3">
                                        <label class="fieldlabels">Name of Institute/University</label>
                                        <input type="text" name="name_of_university_institute" placeholder="Name of Institute/University" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <label class="fieldlabels">Research Topic(Dissertation)</label>
                                        <input type="text" name="Dissertation" placeholder="Research Topic(Dissertation)" />
                                    </div>
                                    <div class="col-4">
                                        <label class="fieldlabels">Date of Notification of result</label>
                                         <input type="text" name="result_conferring_degree" placeholder="Date of Notification of result conferring the degree" />
                                    </div>
                                    <div class="col-2">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="encl_no" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-info add3 mt-4">+</button>
                                    </div>
                                </div>
                                <div class="add_input3"></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="fs-title h3">Post Doctoral Research Experience as a research scientist, research associate etc. (in yrs) :</h3>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h3 class="fs-title h3">Years of Guiding Ph.D.:</h3>
                                <div class="col">
                                    <label class="fieldlabels">Completed</label>
                                    <input type="text" name="Completed" placeholder="Completed" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels">Registered</label>
                                    <input type="text" name="Registered" placeholder="Registered" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h3 class="fs-title h3">Total No. of Papers Published:</h3>
                                <div class="col">
                                    <label class="fieldlabels">International Journals</label>
                                    <input type="text" name="International_Journals" placeholder="International Journals" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels">National Journals</label>
                                    <input type="text" name="National_Journals" placeholder="National Journals" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels">State Level Journals </label>
                                    <input type="text" name="State_Level_Journals " placeholder="State Level Journals " />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h3 class="fs-title h3">Total No. of Conferences/Seminars/Workshops Attended and papers presented:
                                    </h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <h2 class="fs-title">i. International:</h2>
                                <div class="col">
                                    <label class="fieldlabels">Attended</label>
                                    <input type="text" name="Attended " placeholder="Attended" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels"> Attended and Papers Presented</label>
                                    <input type="text" name=" Attended_and_Papers_Presented " placeholder=" Attended and Papers Presented" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <h2 class="fs-title">ii. National: </h2>
                                <div class="col">
                                    <label class="fieldlabels">Attended</label>
                                    <input type="text" name="Attended " placeholder="Attended" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels"> Attended and Papers Presented</label>
                                    <input type="text" name=" Attended_and_Papers_Presented " placeholder=" Attended and Papers Presented" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <h2 class="fs-title">iii. State Level:</h2>
                                <div class="col">
                                    <label class="fieldlabels">Attended</label>
                                    <input type="text" name="Attended " placeholder="Attended" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels"> Attended and Papers Presented</label>
                                    <input type="text" name=" Attended_and_Papers_Presented " placeholder=" Attended and Papers Presented" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="fieldlabels">Total:</label>
                                    <input type="text" name="Total" placeholder="Total" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels">Attended</label>
                                    <input type="text" name="Attended " placeholder="Attended" />
                                </div>
                                <div class="col">
                                    <label class="fieldlabels"> Attended and Papers Presented</label>
                                    <input type="text" name=" Attended_and_Papers_Presented " placeholder=" Attended and Papers Presented" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h3 class="fs-title h3">AWARDS /PRIZES/HONOURS/RECOGNITIONS :</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="floatingTextarea">AWARDS /PRIZES/HONOURS/RECOGNITIONS</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="fs-title h3">FIELDS OF SPECIALIZATION IN THE SUBJECT/DISCIPLINE: :</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="floatingTextarea">A:</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <input type="button" name="next" class="action-button" value="Next" />
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

            var html3 ='<div class="parerent3">\
                                    <div class="row mt-3">\
                                    <div class="col-3">\
                                    <label class="fieldlabels">Years Spent in:</label>\
                                    <select class="form-select form-select-lg mb-3" name="total_in_year" aria-label=".form-select-lg example">\
                                        <option selected disabled>choose option...</option>\
                                        <option value="m_phil">M. Phil.</option>\
                                        <option value="ph_d">Ph.D.</option>\
                                        </select>\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels">Period of</label>\
                                    <input type="text" name="Period_of_from" placeholder="Period_of_from" />\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels"></label> <input type="text" name="period_of_to" placeholder="period_of_to" />\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels">Name of Institute/University</label>\
                                    <input type="text" name="name_of_university_institute" placeholder="Name of Institute/University" />\
                                    </div></div><div class="row mt-3"><div class="col-4">\
                                    <label class="fieldlabels">Research Topic(Dissertation)</label>\
                                    <input type="text" name="Dissertation" placeholder="Research Topic(Dissertation)" />\
                                    </div><div class="col-4"><label class="fieldlabels">Date of Notification of result</label>\
                                    <input type="text" name="result_conferring_degree" placeholder="Date of Notification of result conferring the degree" />\
                                    </div><div class="col-2">\
                                    <label class="fieldlabels">Encl. No.</label>\
                                    <input type="text" name="encl_no" placeholder="Encl. No." />\
                                    </div><div class="col-2"><button type="button" class="btn btn-info remove3 mt-4">-</button></div></div></div>';
                                    $(document).on('click', '.add3', function() {
                                        $('.add_input3').append(html3);
                                    });
                                    $(document).on('click', '.remove3', function() {
                                        $(this).closest('.parerent3').remove();
                                    });
        });
    </script>
</body>

</html>
