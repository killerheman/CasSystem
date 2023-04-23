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
                                    <div class="col-9">
                                        <h2 class="fs-title">PUBLICATIONS (other than Research papers)
                                        </h2>
                                    </div>
                                    <div class="col-3">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <div class="parent7">
                                    <div class="row">
                                        (a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected disabled hidden>Open this select menu</option>
                                                <option value="1">Editor of Book by National Publisher</option>
                                                <option value="1">Editor of Book by International Publisher
                                                </option>
                                                <option value="1">Chapter in Edited Book</option>
                                                <option value="1">National publishers</option>
                                                <option value="1">International publishers</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Title of the Book:</label> <input type="text"
                                                name="Title_of_the_Book" placeholder="Title_of_the_Book" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Author:</label> <input type="text"
                                                name="Author" placeholder="Author" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                                                name="Co_Author(s)" placeholder="Co_Author(s)" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">ISBN /ISSN</label>
                                            <input type="text" name="duration_to" placeholder="duration_to" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Name of the Publisher</label>
                                            <input type="text" name="Name_of_the_Publisher_Month_Year"
                                                placeholder="Name of the Publisher,Month, Year" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">,Month, Year</label>
                                            <input type="month" name="Month_Year" placeholder=",Month, Year" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Claimed Score</label>
                                            <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">IQAC Verified Score</label>
                                            <input type="text" name="IQAC_Verified_Score"
                                                placeholder="IQAC Verified Score" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Encl. No.</label>
                                            <input type="text" name="Encl_no" placeholder="Encl. No." />
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-info add7 mt-3">+</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="add_input7"></div>
                                    <div class="mb-5">Note: Attach front, index and back pages justifying the claim showing the ISBN/ISSN No.
                                    </div>
                                </div>
                                <div class="parent8">
                                    <div class="row">
                                        (b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected disabled hidden>Open this select menu</option>
                                                <option value="1">CHAPTER OR RESEARCH PAPER</option>
                                                <option value="1">BOOK</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Title of the Book:</label> <input
                                                type="text" name="Title_of_the_Book"
                                                placeholder="Title_of_the_Book" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Author:</label> <input type="text"
                                                name="Author" placeholder="Author" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                                                name="Co_Author(s)" placeholder="Co_Author(s)" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">ISBN /ISSN</label>
                                            <input type="text" name="duration_to" placeholder="duration_to" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Name of the Publisher</label>
                                            <input type="text" name="Name_of_the_Publisher_Month_Year"
                                                placeholder="Name of the Publisher,Month, Year" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">,Month, Year</label>
                                            <input type="month" name="Month_Year" placeholder=",Month, Year" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Claimed Score</label>
                                            <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">IQAC Verified Score</label>
                                            <input type="text" name="IQAC_Verified_Score"
                                                placeholder="IQAC Verified Score" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Encl. No.</label>
                                            <input type="text" name="Encl_no" placeholder="Encl. No." />
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-info add8 mt-3">+</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="add_input8"></div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <h2 class="fs-title">CREATION OF ICT MEDIATED TEACHING LEARNING PEDAGOGY AND
                                            CONTENT
                                            AND DEVELOPMENT OF NEW AND INNOVATIVE COURSES AND CURRICULA.</h2>
                                    </div>
                                </div>
                                <div class="parent9">
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">Select Type</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected disabled hidden>Open this select menu</option>
                                                <optgroup label="PEDAGOGY">
                                                    <option value="1"> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                                                    <option value="2">DESIGN OF NEW CURRICULA AND COURSES</option>
                                                </optgroup>
                                                <optgroup label="MOOCs">
                                                    <option value="3">Development of complete MOOCs in 4 quadrants
                                                        (4 credit course) (In case of MOOCs of lesser
                                                        credits 05 marks/credit)
                                                    </option>
                                                    <option value="4">MOOCs (developed in 4 quadrant) per
                                                        module/lecture</option>
                                                    <option value="5">Content writer/subject matter expert for
                                                        each module of MOOCs (at least one quadrant)
                                                    </option>
                                                    <option value="6">
                                                        Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                                                        of lesser credits 02 marks/credit)
                                                    </option>
                                                </optgroup>
                                                <optgroup label="E-CONTENT">
                                                    <option value="7">Development of e-Content in 4 quadrants for
                                                        a complete course/e-book
                                                    </option>
                                                    <option value="8">e-Content (developed in 4 quadrants) per
                                                        module</option>
                                                    <option value="9">Contribution to development of e-content
                                                        module in complete course/paper/e-book (at least one
                                                        quadrant)
                                                    </option>
                                                    <option value="10">
                                                        Editor of e-content for complete course/ paper /e-book
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Activity*</label> <input type="text"
                                                name="Activity*" placeholder="Activity*" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Claimed Score</label> <input type="text"
                                                name="Claimed_Score" placeholder="Claimed Score" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">Verified by the Committee</label>
                                            <input type="text" name="Verified_by_the_Committee"
                                                placeholder="Verified by the Committee" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Encl. No.</label>
                                            <input type="text" name="Encl_No" placeholder="Encl. No." />
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-info add9 mt-4">+</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="add_input9"></div>
                                    <div>* Each activity should be claimed by the applicant with supporting documents.</div>
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
            var html7 =
                `<div class="parent7">
            <div class="row mt-3">
                <div class="col-4">
                    <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                    <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">
                        <option selected disabled hidden>Open this select menu</option>
                        <option value="1">Editor of Book by National Publisher</option>
                        <option value="1">Editor of Book by International Publisher</option>
                        <option value="1">Chapter in Edited Book</option>
                        <option value="1">National publishers</option>
                        <option value="1">International publishers</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Book:</label> <input type="text"
                        name="Title_of_the_Book" placeholder="Title_of_the_Book" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text"
                        name="Author" placeholder="Author" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                        name="Co_Author(s)" placeholder="Co_Author(s)" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN /ISSN</label>
                    <input type="text" name="duration_to" placeholder="duration_to" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" name="Name_of_the_Publisher_Month_Year"
                        placeholder="Name of the Publisher,Month, Year" />
                </div>
                <div class="col">
                    <label class="fieldlabels">,Month, Year</label>
                    <input type="month" name="Month_Year"
                        placeholder=",Month, Year" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="text" name="Claimed_Score" placeholder="Claimed Score"/>
                </div>
                <div class="col">
                    <label class="fieldlabels">IQAC Verified Score</label>
                    <input type="text" name="IQAC_Verified_Score" placeholder="IQAC Verified Score"/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" name="Encl_no" placeholder="Encl. No."/>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-danger remove7 mt-3">-</button>
                </div>
            </div><hr></div>`;
            $(document).on('click', '.add7', function() {
                $('.add_input7').append(html7);
            });
            $(document).on('click', '.remove7', function() {
                $(this).closest('.parent7').remove();
            });
            var html8 =
                `<div class="parent8">
            <div class="row mt-3">
                <div class="col-4">
                    <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                    <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">
                        <option selected disabled hidden>Open this select menu</option>
                        <option value="1">CHAPTER OR RESEARCH PAPER</option>
                        <option value="1">BOOK</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Book:</label> <input type="text"
                        name="Title_of_the_Book" placeholder="Title_of_the_Book" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text"
                        name="Author" placeholder="Author" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                        name="Co_Author(s)" placeholder="Co_Author(s)" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN /ISSN</label>
                    <input type="text" name="duration_to" placeholder="duration_to" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" name="Name_of_the_Publisher_Month_Year"
                        placeholder="Name of the Publisher,Month, Year" />
                </div>
                <div class="col">
                    <label class="fieldlabels">,Month, Year</label>
                    <input type="month" name="Month_Year"
                        placeholder=",Month, Year" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="text" name="Claimed_Score" placeholder="Claimed Score"/>
                </div>
                <div class="col">
                    <label class="fieldlabels">IQAC Verified Score</label>
                    <input type="text" name="IQAC_Verified_Score" placeholder="IQAC Verified Score"/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" name="Encl_no" placeholder="Encl. No."/>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-danger remove8 mt-3">-</button>
                </div>
            </div><hr></div>`;
            $(document).on('click', '.add8', function() {
                $('.add_input8').append(html8);
            });
            $(document).on('click', '.remove8', function() {
                $(this).closest('.parent8').remove();
            });
            var html9 =
                ` <div class="parent9">
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">Select Type</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected disabled hidden>Open this select menu</option>
                                                <optgroup label="PEDAGOGY">
                                                    <option value="1"> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                                                    <option value="2">DESIGN OF NEW CURRICULA AND COURSES</option>
                                                </optgroup>
                                                <optgroup label="MOOCs">
                                                    <option value="3">Development of complete MOOCs in 4 quadrants
                                                        (4 credit course) (In case of MOOCs of lesser
                                                        credits 05 marks/credit)
                                                    </option>
                                                    <option value="4">MOOCs (developed in 4 quadrant) per
                                                        module/lecture</option>
                                                    <option value="5">Content writer/subject matter expert for
                                                        each module of MOOCs (at least one quadrant)
                                                    </option>
                                                    <option value="6">
                                                        Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                                                        of lesser credits 02 marks/credit)
                                                    </option>
                                                </optgroup>
                                                <optgroup label="E-CONTENT">
                                                    <option value="7">Development of e-Content in 4 quadrants for
                                                        a complete course/e-book
                                                    </option>
                                                    <option value="8">e-Content (developed in 4 quadrants) per
                                                        module</option>
                                                    <option value="9">Contribution to development of e-content
                                                        module in complete course/paper/e-book (at least one
                                                        quadrant)
                                                    </option>
                                                    <option value="10">
                                                        Editor of e-content for complete course/ paper /e-book
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Activity*</label> <input type="text"
                                                name="Activity*" placeholder="Activity*" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Claimed Score</label> <input type="text"
                                                name="Claimed_Score" placeholder="Claimed Score" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label class="fieldlabels">Verified by the Committee</label>
                                            <input type="text" name="Verified_by_the_Committee"
                                                placeholder="Verified by the Committee" />
                                        </div>
                                        <div class="col">
                                            <label class="fieldlabels">Encl. No.</label>
                                            <input type="text" name="Encl_No" placeholder="Encl. No." />
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-danger remove9 mt-4">-</button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>`;
            $(document).on('click', '.add9', function() {
                $('.add_input9').append(html9);
            });
            $(document).on('click', '.remove9', function() {
                $(this).closest('.parent9').remove();
            });
        });
    </script>
</body>

</html>
