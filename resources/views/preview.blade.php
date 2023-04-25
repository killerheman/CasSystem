<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
        .main {
            border-top: 5px solid;
            border-bottom: 5px solid;
        }

        .main1 {
            border-bottom: 2px solid;
            padding-bottom: 5px;
        }

        .sp {
            border-bottom: 2px solid;
        }

        .photo {
            height: 170px;
            border: 2px solid;
            width: 140px;
            position: absolute;
            right: 100px;
            top: 460px;
        }

        .contain {
            border: 2px solid;
        }

        .main2 {
            border-bottom: 2px solid;
        }

        .bottom {
            border-bottom: 2px solid;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="main p-2">
                    <h1 class="text-center">LALIT NARAYAN MITHILA UNIVERSITY</h1>
                    <h5 class="text-center">KAMESHWARANAGAR, DARBHANGA</h5>
                    <h5 class="text-center">846008</h5>
                    <div class="col-12 text-center"><img src="{{ asset('logo.png') }}" alt="" class="img-fluid"
                            style="height: 100px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="second text-center">
                    <h5>Application for Promotion under the</h5>
                    <h5>Career Advancement Scheme (CAS) for University Teachers </h5>
                    <p>(As approved by the Chancellor Vide Letter No- BSU Statute-08/2005-283/GS(I) dt 15.02.20231)</p>
                </div>
            </div>
            <div class="row">
                <div class="main1">
                    <p>For Promotion:</p>
                    <li>Assistant Professor(Academic Level 10) to Assistant Professor (Senior Scale/Academic Level 11)
                    </li>
                    <li>Assistant Professor (Senior Scale/Academic Level 11) to Assistant Professor (Selection
                        Grade/Academic Level 12)</li>
                </div>
                <div class="row p-2">
                    Application for promotion from Level <span class="col-4 sp"></span>to Level <span
                        class="col-2 sp"></span>
                </div>
            </div>

            <div class="row p-2">
                Name :<span class="col-8 sp"></span>
            </div>
            <div class="photo">
                Paste Self-attested Recent
                Passport Size
                Photograph
            </div>
            <div class="row p-2">
                Department:<span class="col-8 sp"></span>
            </div>
            <div class="row p-2">
                College:<span class="col-8 sp"></span>
            </div>
            <div class="row p-2">
                Notification Reference No. <span class="col-4 sp"></span>Date:<span class="col-4 sp"></span>
            </div>
            <div class="row p-2 mt-5 contain">
                <div class="row p-2">
                    Date of Appointment: <span class="col-4 sp"></span>Date of Confirmation:<span
                        class="col-2 sp"></span>
                </div>
                <div class="row p-2">
                    Period of Assessment for promotion: From <span class="col-4 sp"></span>to<span
                        class="col-2 sp"></span>
                </div>
                <div class="row p-2">
                    Date of the last Promotion (with Notification No. & Date) <span class="col-6 sp"></span>
                </div>
                <div class="row p-2">
                    Grade in Annual Performance Report of the last 4/5/6 years of the assessment period:<span
                        class="col-2 sp"></span>(As per Table-1 of the Statute referred above)
                </div>
                <div class="row">
                    Total Academic / Research Scores (as per Table 2of the Statutes)<span class="col-2 sp"></span>
                </div>
            </div>
            <div class="row mt-4 main2">
                <p class="bold"><b>NOTE:</b> The Grade/Research Scores claimed by the applicant must be based on
                    objectively verifiable
                    criteria, and supported with documentary evidence. Research scores that cannot be verified will not
                    be considered.<b>PLEASE READ THE INSTRUCTIONS FOR EACH CATEGORY CAREFULLY,
                        AND FOLLOW THEM.</b></p>
            </div>
            <div class="p-5">
                <span class="col-2 sp"></span>
                1 CAS Statutes-2018 can be downloaded here:
                https://lnmu.ac.in/upload/Bihar%20CAS%20Promotion-2018_(2023).pdf
            </div>
        </div>
    </section>
    <hr>
    <section class="section1">
        <div class="container">
            <div class="row">
                <h4 class="text-center"><span class="bottom">PART – A</span></h4>
                <h6 class="text-center"><span class="bottom mt-3">GENERAL INFORMATION AND ACADEMIC BACKGROUND</span>
                </h6>
            </div>

            <div class="col-12">
                <ol class="mt-4">
                    <li>Name (in Block Letters) :</li>
                    <li>Category :</li>
                    <li>Father’s Name (in Block Letters) :</li>
                    <li>Mother’s Name (in Block Letters) :</li>
                    <li>Date of Birth and Age :</li>
                    <li>Gender :</li>
                    <li>Nationality :</li>
                    <li>Category (SC/ST/EBC/BC/EWS/General) :</li>
                    <li>Current Designation :</li>
                    <li>Current Pay Scale & Grade Pay :</li>
                    <li>Date of Confirmation :</li>
                    <li>Date of Initial Appointment and Present Stage with Pay Scale at LNMU:</li>
                    <li>Position, Stage and Grade Pay applied for :</li>
                    <li>Date of Last Promotion :</li>
                    <li>Date of Eligibility for Promotion :</li>
                    <li>Address for Correspondence (with Pin Code) :</li>
                    <li>Permanent Address (with Pin Code) :</li>
                    <li>Mobile Number :</li>
                    <li>E-Mail ID :</li>
                    <li><b>ACADEMIC QUALIFICATIONS(Graduation onwards) :</b></li>
                </ol>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Qualifications</th>
                            <th scope="col">College /University</th>
                            <th scope="col">Session</th>
                            <th scope="col">Year of Passing</th>
                            <th scope="col">Marks Obtained/Out of Or CGPA Grade </th>
                            <th scope="col">Class with %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Graduate Degree (UG)</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">Post Graduate Degree (PG)</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">Integrated IMA/IMSc/IMS(UG-PG)</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">M. Phil.</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">Ph.D./D.Phil.</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">Others (if any)</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <hr>
    <section class="section2 mt-5">
        <div class="container">
            <div class="row">
                <h5>23. TEACHING EXPERIENCE (UG/PG): </h5>
            </div>
            <div class="row p-2">
                In Years: <span class="col-3 sp"></span>&nbsp;&nbsp;&nbsp;Period: &nbsp;From<span class="col-2 sp"></span>   &nbsp;&nbsp;To<span class="col-2 sp"></span>
            </div>
            <div class="row mt-3">
                <h5>24. RESEARCH EXPERIENCE: (including M.Phil/Ph.D Duration) </h5>
            </div>
            <div class="row p-2">
               i. &nbsp;&nbsp; Total Number of Years: <span class="col-3 sp"></span>&nbsp;&nbsp;&nbsp;Period: &nbsp;From<span class="col-2 sp"></span>   &nbsp;&nbsp;To<span class="col-2 sp"></span>
            </div>
            <div class="row p-2">
               a)&nbsp; &nbsp;&nbsp; Years Spent in M. Phil.: <span class="col-3 sp"></span>
            </div>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">Period of M.Phil.</th>
                        <th scope="col">Name ofInstitute/University</th>
                        <th scope="col">Research Topic(Dissertation)</th>
                        <th scope="col">Date of Notification of result conferring the degree</th>
                        <th scope="col">Encl. No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">From</td>
                        <td>To</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">hello</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            <div class="row p-2">
                b)&nbsp; &nbsp;&nbsp; Years Spent in M. Phil. &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:<span class="col-3 sp"></span>
             </div>
             <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">Period of Ph.D</th>
                        <th scope="col">Name of Institute/University</th>
                        <th scope="col">Research Topic(Dissertation)</th>
                        <th scope="col">Date of Notification of result conferring the degree</th>
                        <th scope="col">Encl. No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">From</td>
                        <td>To</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">hello</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            <div class="row p-2">
                ii. &nbsp;&nbsp;  Years of Guiding Ph.D.: <span class="col-3 sp"></span>&nbsp;&nbsp;&nbsp;Ph.D.: <span class="col-2 sp"></span>
             </div>
            <div class="row p-2">
                iii. &nbsp;&nbsp;&nbsp;&nbsp; Total No. of Papers Published: <span class="col-2"></span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; i.International Journals <span class="col-2 sp"></span>
             </div>
            <div class="row p-2">
                 <span class="col-5"></span> ii.International Journals <span class="col-2 sp"></span>
             </div>
            <div class="row p-2">
                <span class="col-5"></span> iii.International Journals <span class="col-2 sp"></span>
             </div>
            <div class="row p-2">
                <span class="col-3"></span> (Not Abstract but Full paper only) Total <span class="col-3 sp"></span>
             </div>
             <div class="row pt-2">
                <b> iv.&nbsp;&nbsp;&nbsp;&nbsp;Total No. of Conferences/Seminars/Workshops Attended and papers presented:</b>
             </div>
             <div class="row p-2">
                i. &nbsp;&nbsp;&nbsp;&nbsp; International: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span> &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
             </div>
             <div class="row p-2">
                ii. &nbsp;&nbsp;&nbsp;&nbsp; National: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span> &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
             </div>
             <div class="row p-2">
                iii. &nbsp;&nbsp;&nbsp;&nbsp; State Level: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span> &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
             </div>
             <div class="row p-2">
                 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  Total: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span> &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
             </div>
             <div class="row pt-2">
                <b> 27. AWARDS /PRIZES/HONOURS/RECOGNITIONS :</b>
             </div>
             <div class="row pt-2">
                1.&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class="col-8 sp"></span>
             </div>
             <div class="row pt-2">
                2.&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class="col-8 sp"></span>
             </div>
             <div class="row pt-2">
                3.&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class="col-8 sp"></span>
             </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>
