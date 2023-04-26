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
            text-align: center;
            font-weight: 700;
        }

        .photo {
            height: 170px;
            width: 140px;
            border: 2px solid;
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
    {{-- Page 1 --}}
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
                    @php
                        if($users->step1->promotion_level == 1){
                            $promotion_level = ['10','11'];
                        }
                        elseif($users->step1->promotion_level == 2){
                            $promotion_level = ['11','12'];
                        }
                        elseif($users->step1->promotion_level == 3){
                            $promotion_level = ['12','13A'];
                        }
                        elseif($users->step1->promotion_level == 4){
                            $promotion_level = ['13A','14'];
                        }
                        else{
                            $promotion_level = ['10','11'];
                        }
                    @endphp
                    Application for promotion from Level <span class="col-4 sp">{{ $promotion_level[0] ?? 'N/A' }}</span>to Level <span
                        class="col-2 sp">{{ $promotion_level[1] ?? 'N/A' }}</span>
                </div>
            </div>

            <div class="row p-2">
                Name :<span class="col-8 sp">{{ $users->step1->name ?? 'N/A' }}</span>
            </div>
            <div class="photo">
                @if($users->step1->profile_image)
                 <img src="{{ asset('storage/'.$users->step1->profile_image) }}" style="height: 170px;width: 140px;" />
                @else
                N/A
                @endif
            </div>
            <div class="row p-2">
                Department:<span class="col-8 sp">{{ $users->step1->department ?? 'N/A' }}</span>
            </div>
            <div class="row p-2">
                College:<span class="col-8 sp">{{ $users->step1->college ?? 'N/A' }}</span>
            </div>
            <div class="row p-2">
                Notification Reference No. <span class="col-4 sp">{{ $users->step1->notification_reference_no ?? 'N/A' }}</span>Date:<span class="col-4 sp">{{ \Carbon\Carbon::parse($users->step1->notification_reference_date)->format('d-m-Y') ?? 'N/A' }}</span>
            </div>
            <div class="row p-2 mt-5 contain">
                <div class="row p-2">
                    Date of Appointment: <span class="col-4 sp">{{ \Carbon\Carbon::parse($users->step1->date_of_appointment)->format('d-m-Y') ?? 'N/A' }}</span>Date of Confirmation:<span
                        class="col-2 sp">{{ \Carbon\Carbon::parse($users->step1->date_of_confirmation)->format('d-m-Y') ?? 'N/A' }}</span>
                </div>
                <div class="row p-2">
                    Period of Assessment for promotion: From <span class="col-4 sp">{{ \Carbon\Carbon::parse($users->step1->assessment_promotion_from)->format('d-m-Y') ?? 'N/A' }}</span>to<span
                        class="col-2 sp">{{ \Carbon\Carbon::parse($users->step1->assessment_promotion_to)->format('d-m-Y') ?? 'N/A' }}</span>
                </div>
                <div class="row p-2">
                    Date of the last Promotion (with Notification No. & Date) <span class="col-6 sp">{{ \Carbon\Carbon::parse($users->step1->date_of_confirmation)->format('d-m-Y') ?? 'N/A' }}</span>
                </div>
                <div class="row p-2">
                    Grade in Annual Performance Report of the last 4/5/6 years of the assessment period:<span
                        class="col-2 sp">{{ $users->step1->grade_annual_performance ?? 'N/A' }}</span>(As per Table-1 of the Statute referred above)
                </div>
                <div class="row">
                    Total Academic / Research Scores (as per Table 2 of the Statutes)<span class="col-2 sp">{{ $users->step1->total_academic_research_scores ?? 'N/A' }}</span>
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
    {{-- Page 2 --}}
    <section class="section1">
        <div class="container">
            <div class="row">
                <h4 class="text-center"><span class="bottom">PART – A</span></h4>
                <h6 class="text-center"><span class="bottom mt-3">GENERAL INFORMATION AND ACADEMIC BACKGROUND</span>
                </h6>
            </div>

            <div class="col-12">
                <ol class="mt-4">
                    <li>Name (in Block Letters) : <strong>{{ strtoupper($users->step2->name ?? 'N/A') }}</strong></li>
                    <li>Category : <strong>{{ strtoupper($users->step2->category_a ?? 'N/A') }}</strong></li>
                    <li>Father’s Name (in Block Letters) : <strong>{{ strtoupper($users->step2->father_name ?? 'N/A') }}</strong></li>
                    <li>Mother’s Name (in Block Letters) : <strong>{{ strtoupper($users->step2->mother_name ?? 'N/A') }}</strong></li>
                    <li>Date of Birth and Age : <strong>{{ $users->step2->date_of_birth ?? 'N/A' }} / {{ $users->step2->age ?? 'N/A' }} Years </strong></li>
                    <li>Gender : <strong>{{ strtoupper(isset($users->step2->gender) ? ($users->step2->gender == 'm' ? 'Male' : 'Female' ) : 'N/A') }}</strong></li>
                    <li>Nationality : <strong>{{ strtoupper($users->step2->nationality ?? 'N/A') }}</strong></li>
                    <li>Category (SC/ST/EBC/BC/EWS/General) : <strong>{{ strtoupper($users->step2->category ?? 'N/A') }}</strong></li>
                    <li>Current Designation : <strong>{{ strtoupper($users->step2->current_designation ?? 'N/A') }}</strong></li>
                    <li>Current Pay Scale & Grade Pay : <strong>{{ strtoupper($users->step2->current_pay_scale ?? 'N/A') }} / {{ $users->step2->current_grade_pay ?? 'N/A' }}</strong></li>
                    <li>Date of Confirmation : {{ \Carbon\Carbon::parse($users->step2->date_of_confirmation)->format('d-m-Y') ?? 'N/A' }}</li>
                    <li>Date of Initial Appointment and Present Stage with Pay Scale at LNMU: {{ \Carbon\Carbon::parse($users->step2->date_of_initial_appointment)->format('d-m-Y') ?? 'N/A' }} / {{ strtoupper($users->step2->present_stage ?? 'N/A') }} with {{ strtoupper($users->step2->pay_scale_at_lnmu ?? 'N/A') }} (Payscale) </li>
                    <li>Position, Stage and Grade Pay applied for : <strong>{{ strtoupper($users->step2->applied_for_position ?? 'N/A') }} / {{ strtoupper($users->step2->applied_for_stage ?? 'N/A') }} / {{ strtoupper($users->step2->applied_for_grade_pay ?? 'N/A') }}</strong></li>
                    <li>Date of Last Promotion : {{ \Carbon\Carbon::parse($users->step2->date_of_last_promotion)->format('d-m-Y') ?? 'N/A' }}</li>
                    <li>Date of Eligibility for Promotion : {{ \Carbon\Carbon::parse($users->step2->date_of_eligibility_for_promotion)->format('d-m-Y') ?? 'N/A' }}</li>
                    <li>Address for Correspondence (with Pin Code) : <strong>{{ $users->step2->address_for_correspondence ?? 'N/A' }}(Pincode - {{ $users->step2->address_for_correspondence_pincode ?? 'N/A' }})</strong></li>
                    <li>Permanent Address (with Pin Code) : <strong>{{ $users->step2->permanent_address ?? 'N/A' }}(Pincode - {{ $users->step2->permanent_address_pincode ?? 'N/A' }})</strong></li>
                    <li>Mobile Number : <strong>{{ $users->step2->mobile_number ?? 'N/A' }}</strong></li>
                    <li>E-Mail ID : <strong>{{ $users->step2->email_id ?? 'N/A' }}</strong></li>
                    <li><b>ACADEMIC QUALIFICATIONS(Graduation onwards) :</b> <strong>{{ strtoupper($users->step1->name ?? 'N/A') }}</strong></li>
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
                        @foreach($users->step3_a as $data)
                        <tr>
                            <th scope="row">{{$data->qualifications??''}}</th>
                            <td>{{$data->college_university??''}}</td>
                            <td>{{$data->session??''}}</td>
                            <td>{{$data->year_of_passing??''}}</td>
                            <td>{{$data->marks_obtained_out_of_or_cgpa_grade??''}}</td>
                            <td>{{$data->class_with??''}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <hr>

    {{-- Page 3 --}}
    <section>
        <div class="container-fluid">
            <p>
                <b>21. RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU (Please Attach
                    Relevant Certificates of Service Experience)
                </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Institution</strong></th>
                        <th rowspan="2"><strong>Designation</strong></th>
                        <th rowspan="2"><strong>Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/
                                Part-time)</strong></th>
                        <th rowspan="2"><strong>Nature of Duties</strong></th>
                        <th rowspan="2">pay-Scale / Pay band and AGP</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th colspan="2"><strong>Experience</strong></th>
                        <th rowspan="2"><strong>Required minimum qualification for the pos</strong></th>
                        <th rowspan="2"><strong>Highest degree obtained at the time of appointment</strong></th>
                        <th rowspan="2"><strong>Remark</strong></th>
                        <th rowspan="2"><strong>Encl.No</strong></th>

                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Year</th>
                        <th>Months</th>
                    </tr>
                    @foreach($users->step3_b as $data)
                    <tr>
                        <td>{{$data->institution??''}}</td>
                        <td>{{$data->designation??''}}</td>
                        <td>{{$data->nature_of_appointment??''}}</td>
                        <td>{{$data->nature_of_duties}}</td>
                        <td>{{$data->pay_scale_pay_band_and_a??''}}</td>
                        <td>{{$data->duration_from??''}}</td>
                        <td>{{$data->duration_to??''}}</td>
                        <td>{{$data->experience_year}}</td>
                        <td>{{$data->experience_months}}</td>
                        <td>{{$data->minimum_qualification_for_the_post??''}}</td>
                        <td>{{$data->highest_degree_obtained??''}}</td>
                        <td>{{$data->remark??''}}</td>
                        <td>{{$data->encl_no??''}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><b>22.RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER</b></p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Level</strong></th>
                        <th rowspan="2"><strong>Designation</strong></th>
                        <th rowspan="2"><strong>Pay Scale and AG</strong></th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th colspan="2"><strong>Experience</strong></th>
                        <th rowspan="2"><strong>Remark</strong></th>
                        <th rowspan="2"><strong>Encl.No</strong></th>

                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Year</th>
                        <th>Months</th>
                    </tr>
                    @foreach($users->step3_c as $data)

                    <tr>
                        <td>Level {{$data->level??''}}</td>
                        <td>{{$data->designation??''}}</td>
                        <td>{{$data->pay_scale_and_agp??''}}</td>
                        <td>{{$data->duration_from??''}}</td>
                        <td>{{$data->duration_to??''}}</td>
                        <td>{{$data->experience_year??''}}</td>
                        <td>{{$data->experience_months??''}}</td>
                        <td>{{$data->remarks??''}}</td>
                        <td>{{$data->encl_no??''}}</td>

                    </tr>
                    <tr>
                        <td colspan="7">Please clearly specify the period of Leave Without Pay (LWP)</td>
                        <td></td>
                        <td></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <hr />
    {{-- Page 4 --}}
    <section class="section2 mt-5">
        <div class="container">
            <div class="row">
                <h5>23. TEACHING EXPERIENCE (UG/PG): </h5>
            </div>
            <div class="row p-2">
                In Years: <span class="col-3 sp">{{$users->step4->ug_pg_in_years??''}}</span>&nbsp;Period: &nbsp;From<span
                    class="col-2 sp">{{ $users->step4->ug_pg_from??'' }}</span> &nbsp;To<span class="col-2 sp">{{ $users->step4->ug_pg_to??'' }}</span>
            </div>
            <div class="row mt-3">
                <h5>24. RESEARCH EXPERIENCE: (including M.Phil/Ph.D Duration) </h5>
            </div>
            <div class="row p-2">
                i. &nbsp;&nbsp; Total Number of Years: <span class="col-3 sp"></span>&nbsp;&nbsp;&nbsp;Period:
                &nbsp;From<span class="col-2 sp"></span> &nbsp;&nbsp;To<span class="col-2 sp"></span>
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
                b)&nbsp; &nbsp;&nbsp; Years Spent in M. Phil. &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:<span class="col-3 sp"></span>
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
                ii. &nbsp;&nbsp; Years of Guiding Ph.D.: <span class="col-3 sp"></span>&nbsp;&nbsp;&nbsp;Ph.D.: <span
                    class="col-2 sp"></span>
            </div>
            <div class="row p-2">
                iii. &nbsp;&nbsp;&nbsp;&nbsp; Total No. of Papers Published: <span class="col-2"></span> &nbsp;&nbsp;
                &nbsp; &nbsp; &nbsp; i.International Journals <span class="col-2 sp"></span>
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
                <b> iv.&nbsp;&nbsp;&nbsp;&nbsp;Total No. of Conferences/Seminars/Workshops Attended and papers
                    presented:</b>
            </div>
            <div class="row p-2">
                i. &nbsp;&nbsp;&nbsp;&nbsp; International: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span>
                &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
            </div>
            <div class="row p-2">
                ii. &nbsp;&nbsp;&nbsp;&nbsp; National: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span>
                &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
            </div>
            <div class="row p-2">
                iii. &nbsp;&nbsp;&nbsp;&nbsp; State Level: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span>
                &nbsp;&nbsp; &nbsp; : Attended and Papers Presented <span class="col-2 sp"></span>
            </div>
            <div class="row p-2">
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                Total: &nbsp;&nbsp;&nbsp; Attended<span class="col-2 sp"></span> &nbsp;&nbsp; &nbsp; : Attended and
                Papers Presented <span class="col-2 sp"></span>
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

    {{-- Page5 and 6 --}}
    <section>
        <hr>
        <div class="container">
            <h6> 28.FIELDS OF SPECIALIZATION IN THE SUBJECT/DISCIPLINE:</h6>
            <div class="row">
                <span>&#10146;</span>
                <span>&#10146;</span>
                <span>&#10146;</span>
            </div>
            <h6> 29. ORIENTATION/REFRESHER COURSE ATTENDED <span>(ONLY UGC RECOGNIZED):(Attach certificates)</span></h6>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl.No</th>
                        <th scope="col">Particulars</th>
                        <th scope="col">Place</th>
                        <th scope="col" colspan="2">Duration </th>
                        <th scope="col">Sponsoring Agency</th>
                        <th scope="col">Encl. No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <th></th>
                        <th></th>
                        <th>From</th>
                        <th>To</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                    </tr>
                </tbody>
            </table>
            <h6>
                30. ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL / WORKSHOPS/ QIP/ FIP/FDP
                ETC ATTENDED: <span> (Attach certificates)</span>
            </h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl.No</th>
                        <th scope="col">Particulars</th>
                        <th scope="col">Place</th>
                        <th scope="col" colspan="2">Duration </th>
                        <th scope="col">Sponsoring Agency</th>
                        <th scope="col">Encl. No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <h6 class="mt-5">31. YOUR VISION FOR THE DEPARTMENT /COLLEGE/UNIVERSITY:</h6>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
            </div>

            <div class="row">
                <h6 class="mt-5">32. YOUR CONTRIBUTION TO THE DEPARTMENT /COLLEGE/DISCIPLINE AND
                    UNIVERSITY:</h6>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
            </div>
            <div class="row">
                <h6 class="mt-5">33. FUTURE ACADEMIC DEVELOPMENT PLAN FOR SELF AS WELL AS DEPARTMENT
                    /COLLEGE/UNIVERSITY:</h6>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
            </div>
            <div class="row">
                <h6 class="mt-5">34. ANY OTHER RELEVANT INFORMATION:</h6>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
                <span class="col-12 sp pt-5 mb-2"></span>
            </div>
        </div>
    </section>
    <hr />

    {{-- Page 7 / 8 --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center p-0 mt-3 mb-2">
                    <div class="">
                        <h2>PART-B</h2>
                        <p class="partBp"> <b>BRIEF NOTE:</b> Based on the teacher’s self-assessment,
                            Grading
                            criteria,
                            and Scores and or
                            publications. The minimum Grading criteria and scores and or publications required by teachers
                            from
                            this category are different for different levels of promotion. The self-assessment grades,
                            scores,
                            and or
                            publications should be based on objectively verifiable records. It shall be finalized by the
                            screening
                            cum evaluation/selection committee.</p>
                        <h5>(As per CAS Statutes approved by the Chancellor Vide Letter No- BSU Statute-08/2005-
                            283/GS(I) dt 15.02.2023 )
                        </h5>

                        <h6><b>A. TEACHING, INVOLVEMENT IN THE UNIVERSITY STUDENTS
                                RELATED ACTIVITIES/ RESEARCH ACTIVITIES*:</b></h6>

                        <div class="border p-2">

                            <h6> <b>1.<u>TEACHING:</u>(Classes taught includes sessions on tutorials, lab and other
                                    teaching
                                    related
                                    activities) (Give Semester/Year-wise details, wherever necessary)</b></h6>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" rowspan="2">Sl.No</th>
                                        <th scope="col" rowspan="2">Academic Year</th>
                                        <th scope="col" rowspan="2">Semester</th>
                                        <th scope="col" colspan="3"><b>TEACHING</b></th>

                                        <th scope="col" rowspan="2">Claimed
                                            by the
                                            Candidate</th>
                                        <th scope="col" rowspan="2">Verified
                                            by the
                                            Committ
                                            ee</th>
                                        <th scope="col" rowspan="2">Remarks</th>
                                        <th scope="col" rowspan="2">*Encl No.</th>
                                        <th scope="col" rowspan="2">File</th>
                                    </tr>
                                    <tr>
                                        <th>Total
                                            Classes
                                            Assigned</th>
                                        <th>
                                            Number
                                            of
                                            Classes
                                            Taught
                                        </th>
                                        <th>
                                            Teaching=
                                            (Number of
                                            Classes
                                            Taught /
                                            Total
                                            Classes
                                            Assigned)
                                            X 100%

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th rowspan="12">1</th>
                                        <th rowspan="2">Year 1</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">Year 2</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">Year 3</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>

                                    <tr>
                                        <th rowspan="2">Year 4</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>

                                    <tr>
                                        <th rowspan="2">Year 5</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>

                                    <tr>
                                        <th rowspan="2">Year 6</th>
                                        <td>Odd Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>

                                    </tr>
                                    <tr>
                                        <td>Event Sem</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                    </tr>
                                </tbody>
                            </table>



                            <h6> <b>2. INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH
                                    ACTIVITIES:</b></h6>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" rowspan="2">Sl.No</th>
                                        <th scope="col" rowspan="2">Academic Year</th>
                                        <th scope="col" rowspan="2">Semester</th>
                                        <th scope="col" colspan="3"><b>Activity</b></th>

                                        <th scope="col" rowspan="2">Claimed
                                            by the
                                            Candidate</th>
                                        <th scope="col" rowspan="2">Verified
                                            by the
                                            Committ
                                            ee</th>
                                        <th scope="col" rowspan="2">Remarks</th>
                                        <th scope="col" rowspan="2">*Encl No.</th>
                                        <th scope="col" rowspan="2">File</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <tr>
                                        <th rowspan="24">1</th>
                                        <th rowspan="2">Year 1</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>

                                    <tr>
                                        <th rowspan="2">Year 2</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>

                                    <tr>

                                        <th rowspan="2">Year 3</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>

                                    <tr>

                                        <th rowspan="2">Year 4</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>

                                    <tr>

                                        <th rowspan="2">Year 5</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>

                                    <tr>

                                        <th rowspan="2">Year 6</th>
                                        <td>Odd Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Even Sem</td>
                                        <td colspan="3">1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <span>* Should be claimed by the applicant with supporting documents.For UG, only the Academic
                    Year will matter</span>
            </div>
        </div>
    </section>

    {{-- Page 9 / 10/ 11/ 12 --}}
    <section>
        <div class="container-fluid">
            <p>
                <b>B. ACADEMIC / RESEARCH SCORE. . (As per Table 2 and 3 of the CAS
                    Statute approved by the Chancellor Vide Letter No- BSU
                    Statute-08/2005-283/GS(I) dt 15.02.2023)
                </b>
            </p>
            <p>1. RESEARCH PAPERS IN PEER-REVIEWED OR UGC LISTED JOURNALS:</p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.No</strong></th>
                        <th><strong>Title of the Research Paper </strong></th>
                        <th><strong>Name of the Journal</strong></th>
                        <th><strong>Vol.PP.No & Year</strong></th>
                        <th>Impact Factor</th>
                        <th><strong>Number of authors</strong></th>
                        <th>
                            <strong>Type of Authorship (First author/corresponding
                                author/principal/co-author)</strong>
                        </th>
                        <th>
                            <strong>Sr. No. in UGC listed Journals</strong>
                        </th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <small class="text-danger mt-0">*Impact factor to be determined as per Thomson Reuters list</small>
            <p>
                <b>2. PUBLICATIONS (other than Research papers)</b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.No</strong></th>
                        <th><strong>Title of the Book </strong></th>
                        <th><strong>Author</strong></th>
                        <th><strong>Co-author(s)</strong></th>
                        <th>Name of the publisher,Month,Year</th>
                        <th><strong>ISBN/ISSN</strong></th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <td colspan="9">(a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:</td>
                    </tr>
                    <tr>
                        <td colspan="9">International publishers</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">National publishers</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">Chapter in Edited Book</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">Editor of Book by International Publisher</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">Editor of Book by National Publisher</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">(b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9">CHAPTER OR RESEARCH PAPER</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">BOOKS</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
            <small class="text-danger">Note: Attach front, index and back pages justifying the claim showing the
                ISBN/ISSN
                No.</small>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <p>
                <b>3. CREATION OF ICT MEDIATED TEACHING LEARNING PEDAGOGY AND CONTENT
                    AND DEVELOPMENT OF NEW AND INNOVATIVE COURSES AND CURRICULA.</b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.No</strong></th>
                        <th colspan="5" class="p-4"><strong>*Activity </strong></th>

                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <td colspan="9">(a) DEVELOPMENT OF INNOVATIVE PEDAGOGY</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">(b) DESIGN OF NEW CURRICULA AND COURSES</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">(c) MOOCs</td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Development of complete MOOCs in 4 quadrants (4 credit course)
                            (In case of MOOCs of lesser credits 05 marks/credit)
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            MOOCs (developed in 4 quadrant) per module/lectur
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Content writer/subject matter expert for each module of MOOCs
                            (at least one quadrant)
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                            of lesser credits 02 marks/credit)
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">(d) E-CONTENT</td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Development of e-Content in 4 quadrants for a complete
                            course/e-book
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            e-Content (developed in 4 quadrants) per module
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Contribution to development of e-content module in complete
                            course/paper/e-book (at least one quadrant)
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            Editor of e-content for complete course/ paper /e-book
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <small class="text-danger">* Each activity should be claimed by the applicant with supporting
                documents.</small>
            <p>
                <b>4. (a) RESEARCH GUIDANCE - Ph.D. awarded / Thesis submitted* </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.No</strong></th>
                        <th>
                            <strong>Name of the Scholar</strong>
                        </th>

                        <th><strong>Title of the Thesis </strong></th>
                        <th>
                            <strong>Awarded / Thesis submitte</strong>
                        </th>
                        <th>
                            <strong>University</strong>
                        </th>
                        <th>
                            <strong>Month and Year</strong>
                        </th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <small class="text-danger">* Submit Ph.D. Notification/Certificate of Submission</small>
            <p>
                <b>M. Phil./P.G. Dissertation Supervised</b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.No</strong></th>
                        <th>
                            <strong>Name of the Scholar</strong>
                        </th>

                        <th><strong>Title of the Dissertation/Thesis </strong></th>
                        <th>
                            <strong>M.Phil. / P.G. </strong>
                        </th>
                        <th>
                            <strong>University</strong>
                        </th>
                        <th>
                            <strong>Month and Year</strong>
                        </th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>(b) RESEARCH PROJECTS COMPLETED </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Sr.no</strong></th>
                        <th rowspan="2">
                            <strong>Title of the Project (More than 10 lakhs</strong>
                        </th>
                        <th rowspan="2">
                            <strong>Names of PI and co-PI</strong>
                        </th>
                        <th rowspan="2"><strong>Funding Agency</strong></th>
                        <th rowspan="2">Grant Sanctioned</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th rowspan="2"><strong>Claimed Score</strong></th>
                        <th rowspan="2">
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th rowspan="2"><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Sr.no</strong></th>
                        <th rowspan="2">
                            <strong>Title of the Project (More than 10 lakhs</strong>
                        </th>
                        <th rowspan="2">
                            <strong>Names of PI and co-PI</strong>
                        </th>
                        <th rowspan="2"><strong>Funding Agency</strong></th>
                        <th rowspan="2">Grant Sanctioned</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th rowspan="2"><strong>Claimed Score</strong></th>
                        <th rowspan="2">
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th rowspan="2"><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>(c) RESEARCH PROJECTS ONGOING </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Sr.no</strong></th>
                        <th rowspan="2">
                            <strong>Title of the Project (More than 10 lakhs</strong>
                        </th>
                        <th rowspan="2">
                            <strong>Names of PI and co-PI</strong>
                        </th>
                        <th rowspan="2"><strong>Funding Agency</strong></th>
                        <th rowspan="2">Grant Sanctioned</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th rowspan="2"><strong>Claimed Score</strong></th>
                        <th rowspan="2">
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th rowspan="2"><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Sr.no</strong></th>
                        <th rowspan="2">
                            <strong>Title of the Project (More than 10 lakhs</strong>
                        </th>
                        <th rowspan="2">
                            <strong>Names of PI and co-PI</strong>
                        </th>
                        <th rowspan="2"><strong>Funding Agency</strong></th>
                        <th rowspan="2">Grant Sanctioned</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th rowspan="2"><strong>Claimed Score</strong></th>
                        <th rowspan="2">
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th rowspan="2"><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <p>
                <b>(d) CONSULTANCY </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th rowspan="2"><strong>Sr.no</strong></th>
                        <th rowspan="2">
                            <strong>Title and nature of the Project (More than 10 lakhs</strong>
                        </th>
                        <th rowspan="2">
                            <strong>Agency to it is offered</strong>
                        </th>
                        <th rowspan="2"><strong>Funding Agency</strong></th>
                        <th rowspan="2">Grant Sanctioned</th>
                        <th colspan="2"><strong>Duration</strong></th>
                        <th rowspan="2"><strong>Claimed Score</strong></th>
                        <th rowspan="2">
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th rowspan="2"><strong>Encl.No</strong></th>
                    </tr>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>5 (a) Parents </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.no</strong></th>
                        <th>
                            <strong>Details of Patent</strong>
                        </th>
                        <th>
                            <strong>International/ National</strong>
                        </th>
                        <th><strong>Year</strong></th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>(b) *Policy Document (Submitted to an International
                    body/organization like UNO/UNESCO/World Bank/International Monetary
                    Fund etc. or Central Government or State Government)
                </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.no</strong></th>
                        <th>
                            <strong>Details of Policy Document</strong>
                        </th>
                        <th>
                            <strong>International/ National</strong>
                        </th>
                        <th><strong>Year</strong></th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>(c) Awards/Fellowship</b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.no</strong></th>
                        <th>
                            <strong>Name of the Award / Fellowship</strong>
                        </th>
                        <th>
                            <strong>Awarding Institute/ Organization</strong>
                        </th>
                        <th>
                            <strong>International/ National</strong>
                        </th>
                        <th><strong>Date Awarded</strong></th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <b>6. *INVITED LECTURES / RESOURCE PERSON/ PAPER PRESENTATION IN
                    SEMINARS/ CONFERENCES/FULL PAPER IN CONFERENCE PROCEEDINGS (Paper
                    presented in Seminars/Conferences and also published as full paper
                    in Conference Proceedings will be counted only once)
                </b>
            </p>
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <th><strong>Sr.no</strong></th>
                        <th>
                            <strong>Title</strong>
                        </th>
                        <th>
                            <strong>Name
                                of the
                                Event</strong>
                        </th>
                        <th><strong>Invited/Or
                                al/Poster</strong></th>
                        <th>
                            <strong>Organiser/
                                Institute</strong>
                        </th>
                        <th>
                            <strong>Duration</strong>
                        </th>
                        <th>
                            <strong>International(Ab road)/Internation al(within country) /
                                National / State / University level
                            </strong>
                        </th>
                        <th><strong>Claimed Score</strong></th>
                        <th>
                            <strong>Verified by the Committee</strong>
                        </th>
                        <th><strong>Encl.No</strong></th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>

                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <b>Notes</b>
            <ul>
                <li>Paper presented if part of edited book or proceeding then it can be claimed only once. </li>
                <li>For joint supervision of research students, the formula shall be 70% of the total score for
                    Supervisor
                    and Co-supervisor. Supervisor and Co-supervisor, both shall get 7 marks eac</li>
                <li>*For the purpose of calculating research score of the teacher, the combined research score from the
                    categories of
                    5(b). Policy Document and 6. Invited lectures/Resource Person/Paper presentation shall have an upper
                    capping of
                    thirty percent of the total research score of the teacher concerned.</li>
                <li>The research score shall be from the minimum of three categories out of six categories.</li>

            </ul>
        </div>
    </section>

    {{-- Page 13 --}}
    <section class="section13 mt-5">
        <div class="container">
            <div class="row">
                <ul>
                    <li>*For the purpose of calculating research score of the teacher, the combined research score from
                        the categories of
                        5(b). Policy Document and 6. Invited lectures/Resource Person/Paper presentation shall have an
                        upper capping of
                        thirty percent of the total research score of the teacher concerned.
                    </li>
                    <li>The research score shall be from the minimum of three categories out of six categories.</li>
                </ul>
            </div>
            <div class="row">
                <h6>APPLICANT CLAIMED
                    SCORE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text">
                </h6>
                <table class="table table-bordered mt-2">

                    <thead>
                        <tr>
                            <th scope="col">Sl.No</th>
                            <th scope="col">Particulars</th>
                            <th scope="col">Place</th>
                            <th scope="col" colspan="2">Duration </th>
                            <th scope="col">Sponsoring Agency</th>
                            <th scope="col">Encl. No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <th></th>
                            <th></th>
                            <th>From</th>
                            <th>To</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h6>VERIFIED BY THE SELECTION
                    COMMITTEE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text">
                </h6>
                <table class="table table-bordered mt-2">

                    <thead>
                        <tr>
                            <th scope="col">Sl.No</th>
                            <th scope="col">Particulars</th>
                            <th scope="col">Place</th>
                            <th scope="col" colspan="2">Duration </th>
                            <th scope="col">Sponsoring Agency</th>
                            <th scope="col">Encl. No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <th></th>
                            <th></th>
                            <th>From</th>
                            <th>To</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <h4 class="text-center">Declaration</h4>
                <div class="row">
                    I, <span class="col-6 sp"></span> hereby solemnly certify that the information
                    provided in and documents attached to this application form is true, correct, and complete to the
                    best
                    of my knowledge and belief. If any information/document is found to be fake/forged/incomplete, the
                    University is well within its rights to reject my application and also to cumulatively reverse the
                    promotion(s)
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <h6>
                        Place:
                    </h6>
                    <h6>
                        Date:
                    </h6>

                </div>
            </div>
        </div>
    </section>
    <hr />

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>
