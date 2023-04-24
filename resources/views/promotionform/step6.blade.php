@extends('layout.teacher_promotion', ['activeClass' => 6])
@section('content')
<form action="{{ route('promotion-form.step-6-store') }}" method="post">
    @csrf
<div class="form-card">
    <div class="row">
        <div class="col-7">
            <h2 class="fs-title">TEACHING, INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES/ RESEARCH
                ACTIVITIES:</h2>
        </div>
        <div class="col-5">
            <h2 class="steps">Step 6 - 10</h2>
        </div>
    </div>
    {{-- < class="row mt-3"> --}}
    <div class="parent border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row g-3">
            <div class="col-sm-3">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYears[]" aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    @for($i=1;$i<7;$i++)
                    <option value="{{ $i }}" @isset($user->step6[0])  @selected($user->step6[0]->A1_academic_year==$i) @endisset>Year {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-sm-3">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    @for($i=1;$i<13;$i++)
                    <option value="{{ $i }}" @isset($user->step6[0])  @selected($user->step6[0]->A1_semester==$i) @endisset>Sem {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-sm-6">
                <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                    100%</label>
                <input type="text" id="teaching" name="teaching[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->teaching }} @endisset"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-2">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee" value="@isset($user->step6[0]) {{ $user->step6[0]->varified_by_the_committee }} @endisset">
            </div>
            <div class="col-sm-2">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->claimed_by_the_candidate }} @endisset"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col-sm-2">
                <label for="classes_Taught">Number of Classes Taught</label>
                <input type="text" id="classes_Taught" name="classes_Taught[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->number_of_classes_tought }} @endisset"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
            <div class="col-sm-2">
                <label for="class_Assigned">Total Classes Assigned</label>
                <input type="text" id="class_Assigned" name="class_Assigned[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->total_classes_assigned }} @endisset"
                    placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
            </div>
            <div class="col-sm-2">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks[]" class="form-control" placeholder="remarks" value="@isset($user->step6[0]) {{ $user->step6[0]->remark_ks }} @endisset"
                    aria-label="remarks">
            </div>
            <div class="col-sm-1">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo[]" class="form-control" placeholder="enclNo" value="@isset($user->step6[0]) {{ $user->step6[0]->encl_no }} @endisset"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-info add">+</button>
            </div>
        </div>
        <div class="add_input">
            @isset($user->step6)
                @for($j=1;$j<count($user->step6);$j++)
                <div class="parent">
                    <hr>
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <label for="academicyear">Academic Year</label>
                            <select class="form-select form-select-lg mb-3" name="acadmicYears[]" aria-label="Default select example">
                                <option selected disabled>Choose Years</option>
                                @for($i=1;$i<7;$i++)
                                <option value="{{ $i }}" @isset($user->step6[$j])  @selected($user->step6[$j]->A1_academic_year==$i) @endisset>Year {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="semester">Semester</label>
                            <select class="form-select form-select-lg mb-3" name="semester[]" aria-label="Default select example">
                                <option selected disabled>Choose Semester</option>
                                @for($i=1;$i<13;$i++)
                                <option value="{{ $i }}" @isset($user->step6[$j])  @selected($user->step6[$j]->A1_semester==$i) @endisset>Sem {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                                100%</label>
                            <input type="text" id="teaching" name="teaching[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->teaching }} @endisset"
                                placeholder="Number of Classes Taught" aria-label="classes_Taught">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-2">
                            <label for="committee">Verified by the Committee</label>
                            <input type="text" id="committee" name="committee[]" class="form-control"
                                placeholder="Verified by the Committee" aria-label="committee" value="@isset($user->step6[$j]) {{ $user->step6[$j]->varified_by_the_committee }} @endisset">
                        </div>
                        <div class="col-sm-2">
                            <label for="claimed_candidate">Claimed by the Candidate</label>
                            <input type="text" id="claimed_candidate" name="claimed_candidate[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->claimed_by_the_candidate }} @endisset"
                                placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
                        </div>
                        <div class="col-sm-2">
                            <label for="classes_Taught">Number of Classes Taught</label>
                            <input type="text" id="classes_Taught" name="classes_Taught[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->number_of_classes_tought }} @endisset"
                                placeholder="Number of Classes Taught" aria-label="classes_Taught">
                        </div>
                        <div class="col-sm-2">
                            <label for="class_Assigned">Total Classes Assigned</label>
                            <input type="text" id="class_Assigned" name="class_Assigned[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->total_classes_assigned }} @endisset"
                                placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
                        </div>
                        <div class="col-sm-2">
                            <label for="remarks">Remarks</label>
                            <input type="text" id="remarks" name="remarks[]" class="form-control" placeholder="remarks" value="@isset($user->step6[$j]) {{ $user->step6[$j]->remark_ks }} @endisset"
                                aria-label="remarks">
                        </div>
                        <div class="col-sm-1">
                            <label for="enclNo">*Encl No.</label>
                            <input type="text" id="enclNo" name="enclNo[]" class="form-control" placeholder="enclNo" value="@isset($user->step6[$j]) {{ $user->step6[$j]->encl_no }} @endisset"
                                aria-label="enclNo">
                        </div>
                        <div class="col-md-1 mt-5">
                            <button type="button" class="btn btn-danger remove">-</button>
                        </div>
                    </div>
                </div>
                @endfor
            @endisset

        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-12">
            <h3 class="fs-title">INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH ACTIVITIES:</h3>
        </div>
    </div>
    <div class="parent1 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row g-3">
            <div class="col">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYear_b[]"
                    aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    @for($i=1;$i<7;$i++)
                    <option value="{{ $i }}" @isset($user->step6_b[0])  @selected($user->step6_b[0]->academic_year==$i) @endisset>Year {{ $i }}</option>
                    @endfor
                    
                </select>
            </div>
            <div class="col">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester_b[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    @for($i=1;$i<13;$i++)
                    <option value="{{ $i }}" @isset($user->step6_b[0])  @selected($user->step6_b[0]->semester==$i) @endisset>Sem {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col">
                <label for="academicyear">Activity</label>
                <select class="form-select form-select-lg mb-3" name="activity[]" aria-label="Activity">
                    <option selected disabled>Choose Activity</option>
                    <option value="1"  @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==1) @endisset>
                        Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden
                        etc.
                    </option>
                    <option value="2" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==2) @endisset>
                        Examination and evaluation duties assigned by the Department/ College /University or attending
                        the
                        examination paper evaluation.</option>
                    <option value="3" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==3) @endisset>
                        Student related co-curricular, extension and field based activities such as student clubs,
                        career
                        counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                        community services.</option>
                    <option value="4" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==4) @endisset>
                        Organising seminars/ conferences/ workshops, other Department/ College/University activities.
                    </option>
                    <option value="5" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==5) @endisset>Evidence of actively
                        involved
                        in guiding Ph.D students.</option>
                    <option value="6" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==6) @endisset>
                        Conducting minor or major research project sponsored by national or international agencies.
                    </option>
                    <option value="7" @isset($user->step6_b[0])  @selected($user->step6_b[0]->activity==7) @endisset>
                        At
                        least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate_b[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->claimed_by_candidate??'' }} @endisset">
            </div>
            <div class="col">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee_b" name="committee_b[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->verify_by_committee }} @endisset">
            </div>
            <div class="col">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks_b[]" class="form-control" placeholder="remarks" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->remark }} @endisset"
                    aria-label="remarks">
            </div>
            <div class="col-md-3">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo_b[]" class="form-control" placeholder="enclNo" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->encl_no }} @endisset"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-info add1">+</button>
            </div>
        </div>
        <div class="add_input1">
            @isset($user->step6_b)
            @for($j=1;$j<count($user->step6_b);$j++)

                <div class="parent1"><hr>
                    <div class="row g-3">
                        <div class="col">
                            <label for="academicyear">Academic Year</label>
                            <select class="form-select form-select-lg mb-3" name="acadmicYear_b[]"
                                aria-label="Default select example">
                                <option selected disabled>Choose Years</option>
                                @for($i=1;$i<7;$i++)
                                <option value="{{ $i }}" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->academic_year==$i) @endisset>Year {{ $i }}</option>
                                @endfor
                                
                            </select>
                        </div>
                        <div class="col">
                            <label for="semester">Semester</label>
                            <select class="form-select form-select-lg mb-3" name="semester_b[]" aria-label="Default select example">
                                <option selected disabled>Choose Semester</option>
                                @for($i=1;$i<13;$i++)
                                <option value="{{ $i }}" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->semester==$i) @endisset>Sem {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col">
                            <label for="academicyear">Activity</label>
                            <select class="form-select form-select-lg mb-3" name="activity[]" aria-label="Activity">
                                <option selected disabled>Choose Activity</option>
                                <option value="1"  @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==1) @endisset>
                                    Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden
                                    etc.
                                </option>
                                <option value="2" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==2) @endisset>
                                    Examination and evaluation duties assigned by the Department/ College /University or attending
                                    the
                                    examination paper evaluation.</option>
                                <option value="3" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==3) @endisset>
                                    Student related co-curricular, extension and field based activities such as student clubs,
                                    career
                                    counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                                    community services.</option>
                                <option value="4" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==4) @endisset>
                                    Organising seminars/ conferences/ workshops, other Department/ College/University activities.
                                </option>
                                <option value="5" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==5) @endisset>Evidence of actively
                                    involved
                                    in guiding Ph.D students.</option>
                                <option value="6" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==6) @endisset>
                                    Conducting minor or major research project sponsored by national or international agencies.
                                </option>
                                <option value="7" @isset($user->step6_b[$j])  @selected($user->step6_b[$j]->activity==7) @endisset>
                                    At
                                    least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="claimed_candidate">Claimed by the Candidate</label>
                            <input type="text" id="claimed_candidate" name="claimed_candidate_b[]" class="form-control"
                                placeholder="Claimed by the Candidate" aria-label="claimed_candidate" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->claimed_by_candidate }} @endisset">
                        </div>
                        <div class="col">
                            <label for="committee">Verified by the Committee</label>
                            <input type="text" id="committee_b[]" name="committee_b[]" class="form-control"
                                placeholder="Verified by the Committee" aria-label="committee" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->verify_by_committee }} @endisset">
                        </div>
                        <div class="col">
                            <label for="remarks">Remarks</label>
                            <input type="text" id="remarks" name="remarks_b[]" class="form-control" placeholder="remarks" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->remark }} @endisset"
                                aria-label="remarks">
                        </div>
                        <div class="col-md-3">
                            <label for="enclNo">*Encl No.</label>
                            <input type="text" id="enclNo" name="enclNo_b[]" class="form-control" placeholder="enclNo" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->encl_no }} @endisset"
                                aria-label="enclNo">
                        </div>
                        <div class="col-md-1 mt-5">
                            <button type="button" class="btn btn-danger remove1">-</button>
                        </div>
                    </div>
                </div>
                            
            @endfor
            @endisset



        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-12">
            <h3 class="fs-title">RESEARCH PAPERS IN PEER-REVIEWED OR UGC-LISTED JOURNALS:</h3>
        </div>
    </div>
    <div class="parent2 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row g-3">
            <div class="col">
                <label for="research_paper">Title of the Research Paper</label>
                <input type="text" id="research_paper" name="research_paper[]" class="form-control"
                    placeholder="Title of the Research Paper" aria-label="research_paper" @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->title_research_chapter??'' }}" @endisset>
            </div>
            <div class="col">
                <label for="name_journal">Name of the Journal</label>
                <input type="text" id="name_journal" name="name_journal[]" class="form-control" @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->name_journal??'' }}" @endisset
                    placeholder="Name of the Journal" aria-label="name_journal">
            </div>
            <div class="col">
                <label for="vol_pp_year">Vol., PP No. & Year</label>
                <input type="text" id="vol_pp_year" name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year" @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->vol_pp_no_year??'' }}" @endisset
                    aria-label="Vol., PP No. & Year">
            </div>
            <div class="col">
                <label for="impact_factor*">Impact Factor*</label>
                <input type="text" id="impact_factor" name="impact_factor[]" class="form-control" placeholder="Impact Factor" @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->impact_factor??'' }}" @endisset
                    aria-label="impact_factor">
            </div>
            <div class="col">
                <label for="name_authors*">Number of authors</label>
                <input type="text" id="name_authors" name="name_authors[]" class="form-control" placeholder="Number of authors"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->no_authors??'' }}" @endisset
                    aria-label="name_authors">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-4">
                <label for="authorship*">Type of Authorship (First author/corresponding author/principal/co-author)</label>
                <input type="text" id="authorship" name="authorship[]" class="form-control" placeholder="Type of Authorship"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->type_authorship??'' }}" @endisset
                    aria-label="authorship">
            </div>
            <div class="col-sm-2">
                <label for="UGC_listed_journals*">Sr. No. in UGC listed Journals</label>
                <input type="text" id="UGC_listed_journals" name="UGC_listed_journals[]" class="form-control" placeholder="UGC listed Journals"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->sr_in_ugc??'' }}" @endisset
                    aria-label="UGC_listed_journals">
            </div>
            <div class="col-sm-2">
                <label for="verified_committee*">Verified by the Committee</label>
                <input type="text" id="verified_committee" name="verified_committee_c[]" class="form-control" placeholder="Verified by the Committee"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->varified_by_committee??'' }}" @endisset
                    aria-label="verified_committee">
            </div>
            <div class="col-sm-2">
                <label for="claimed_score*">Claimed Score</label>
                <input type="text" id="claimed_score" name="claimed_score[]" class="form-control" placeholder="Claimed Score"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->claimed_score??'' }}" @endisset
                    aria-label="claimed_score">
            </div>
            <div class="col-sm-1">
                <label for="Encl*">Encl.No.</label>
                <input type="text" id="Encl" name="encl_no_c[]" class="form-control" placeholder="Encl.No"  @isset($user->step6_c[0]) value="{{ $user->step6_c[0]->encl_no??'' }}" @endisset
                    aria-label="Encl">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-info add2 mt">+</button>
            </div>
        </div>
        <div class="add_input2">
            @isset($user->step6_c[1])
                @for ($m=1;$m<count($user->step6_c);$m++)
                    <div class="parent2 "> <hr>
                        <div class="row g-3">
                            <div class="col">
                                <label for="research_paper">Title of the Research Paper</label>
                                <input type="text" id="research_paper" name="research_paper[]" class="form-control"
                                    placeholder="Title of the Research Paper" aria-label="research_paper" @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->title_research_chapter??'' }}" @endisset>
                            </div>
                            <div class="col">
                                <label for="name_journal">Name of the Journal</label>
                                <input type="text" id="name_journal" name="name_journal[]" class="form-control" @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->name_journal??'' }}" @endisset
                                    placeholder="Name of the Journal" aria-label="name_journal">
                            </div>
                            <div class="col">
                                <label for="vol_pp_year">Vol., PP No. & Year</label>
                                <input type="text" id="vol_pp_year" name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year" @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->vol_pp_no_year??'' }}" @endisset
                                    aria-label="Vol., PP No. & Year">
                            </div>
                            <div class="col">
                                <label for="impact_factor*">Impact Factor*</label>
                                <input type="text" id="impact_factor" name="impact_factor[]" class="form-control" placeholder="Impact Factor" @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->impact_factor??'' }}" @endisset
                                    aria-label="impact_factor">
                            </div>
                            <div class="col">
                                <label for="name_authors*">Number of authors</label>
                                <input type="text" id="name_authors" name="name_authors[]" class="form-control" placeholder="Number of authors"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->no_authors??'' }}" @endisset
                                    aria-label="name_authors">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label for="authorship*">Type of Authorship (First author/corresponding author/principal/co-author)</label>
                                <input type="text" id="authorship" name="authorship[]" class="form-control" placeholder="Type of Authorship"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->type_authorship??'' }}" @endisset
                                    aria-label="authorship">
                            </div>
                            <div class="col-sm-2">
                                <label for="UGC_listed_journals*">Sr. No. in UGC listed Journals</label>
                                <input type="text" id="UGC_listed_journals" name="UGC_listed_journals[]" class="form-control" placeholder="UGC listed Journals"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->sr_in_ugc??'' }}" @endisset
                                    aria-label="UGC_listed_journals">
                            </div>
                            <div class="col-sm-2">
                                <label for="verified_committee*">Verified by the Committee</label>
                                <input type="text" id="verified_committee" name="verified_committee_c[]" class="form-control" placeholder="Verified by the Committee"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->varified_by_committee??'' }}" @endisset
                                    aria-label="verified_committee">
                            </div>
                            <div class="col-sm-2">
                                <label for="claimed_score*">Claimed Score</label>
                                <input type="text" id="claimed_score" name="claimed_score[]" class="form-control" placeholder="Claimed Score"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->claimed_score??'' }}" @endisset
                                    aria-label="claimed_score">
                            </div>
                            <div class="col-sm-1">
                                <label for="Encl*">Encl.No.</label>
                                <input type="text" id="Encl" name="encl_no_c[]" class="form-control" placeholder="Encl.No"  @isset($user->step6_c[$m]) value="{{ $user->step6_c[$m]->encl_no??'' }}" @endisset
                                    aria-label="Encl">
                            </div>
                            <div class="col-md-1 mt-5">
                                <button type="button" class="btn btn-danger remove2 mt">-</button>
                            </div>
                        </div>
                       
                
                    </div>
                @endfor
            @endisset

        </div>

    </div>

</div>
{{-- <input type="button" name="next" class="action-button" value="Next" /> --}}

{{-- <a type="button" href="{{ route('promotion-form.step-7') }}" class="action-button">Next</a> --}}
<button type="submit" class="action-button">Next</button>
</form>
<a type="button" href="{{ route('promotion-form.step-5') }}" class="action-button">Previous</a>
@endsection


@section('script')
<script>
    $(document).ready(function() {
        var html =
            `<div class="parent"><hr/>
                <div class="row g-3">
            <div class="col-sm-3">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYears[]" aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="5">Year 5</option>
                    <option value="6">Year 6</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    <option value="1">Sem 1</option>
                    <option value="2">Sem 2</option>
                    <option value="3">Sem 3</option>
                    <option value="4">Sem 4</option>
                    <option value="5">Sem 5</option>
                    <option value="6">Sem 6</option>
                    <option value="7">Sem 7</option>
                    <option value="8">Sem 8</option>
                    <option value="9">Sem 9</option>
                    <option value="10">Sem 10</option>
                    <option value="11">Sem 11</option>
                    <option value="12">Sem 12</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                    100%</label>
                <input type="text" id="teaching" name="teaching[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-2">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee">
            </div>
            <div class="col-sm-2">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col-sm-2">
                <label for="classes_Taught">Number of Classes Taught</label>
                <input type="text" id="classes_Taught" name="classes_Taught[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
            <div class="col-sm-2">
                <label for="class_Assigned">Total Classes Assigned</label>
                <input type="text" id="class_Assigned" name="class_Assigned[]" class="form-control"
                    placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
            </div>
            <div class="col-sm-2">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks[]" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-sm-1">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo[]" class="form-control" placeholder="enclNo"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-danger remove">-</button>
            </div>
        </div>
    </div>`;
        $(document).on('click', '.add', function() {
            $('.add_input').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('.parent').remove();
        });

        var html1=
        `<div class="parent1"><hr/>
        <div class="row g-3">
            <div class="col">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYear_b[]"
                    aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="5">Year 5</option>
                    <option value="6">Year 6</option>
                </select>
            </div>
            <div class="col">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester_b[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    <option value="1">Sem 1</option>
                    <option value="2">Sem 2</option>
                    <option value="3">Sem 3</option>
                    <option value="4">Sem 4</option>
                    <option value="5">Sem 5</option>
                    <option value="6">Sem 6</option>
                    <option value="7">Sem 7</option>
                    <option value="8">Sem 8</option>
                    <option value="9">Sem 9</option>
                    <option value="10">Sem 10</option>
                    <option value="11">Sem 11</option>
                    <option value="12">Sem 12</option>
                </select>
            </div>
            <div class="col">
                <label for="academicyear">Activity</label>
                <select class="form-select form-select-lg mb-3" name="activity[]" aria-label="Activity">
                    <option selected disabled>Choose Activity</option>
                    <option
                        value="1">
                        Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden
                        etc.
                    </option>
                    <option
                        value="2">
                        Examination and evaluation duties assigned by the Department/ College /University or attending
                        the
                        examination paper evaluation.</option>
                    <option
                        value="3">
                        Student related co-curricular, extension and field based activities such as student clubs,
                        career
                        counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                        community services.</option>
                    <option
                        value="4">
                        Organising seminars/ conferences/ workshops, other Department/ College/University activities.
                    </option>
                    <option value="5">Evidence of actively
                        involved
                        in guiding Ph.D students.</option>
                    <option
                        value="6">
                        Conducting minor or major research project sponsored by national or international agencies.
                    </option>
                    <option value="7">
                        At
                        least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate_b[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee_b[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee">
            </div>
            <div class="col">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks" class="form-control" placeholder="remarks_b[]"
                    aria-label="remarks">
            </div>
            <div class="col-md-3">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo_b[]" class="form-control" placeholder="enclNo"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-3">
                <button type="button" class="btn btn-danger remove1 mt-4">-</button>
            </div>
        </div>
    </div>`;
    $(document).on('click', '.add1', function() {
            $('.add_input1').append(html1);
        });
        $(document).on('click', '.remove1', function() {
            $(this).closest('.parent1').remove();
        });
         var html2 =
         `<div class="parent2"><hr/>
        <div class="row g-3">
            <div class="col">
                <label for="research_paper">Title of the Research Paper</label>
                <input type="text" id="research_paper" name="research_paper[]" class="form-control"
                    placeholder="Title of the Research Paper" aria-label="research_paper">
            </div>
            <div class="col">
                <label for="name_journal">Name of the Journal</label>
                <input type="text" id="name_journal" name="name_journal[]" class="form-control"
                    placeholder="Name of the Journal" aria-label="name_journal">
            </div>
            <div class="col">
                <label for="vol_pp_year">Vol., PP No. & Year</label>
                <input type="text" id="vol_pp_year" name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year"
                    aria-label="Vol., PP No. & Year">
            </div>
            <div class="col">
                <label for="impact_factor*">Impact Factor*</label>
                <input type="text" id="impact_factor" name="impact_factor[]" class="form-control" placeholder="Impact Factor"
                    aria-label="impact_factor">
            </div>
            <div class="col">
                <label for="name_authors*">Number of authors</label>
                <input type="text" id="name_authors" name="name_authors[]" class="form-control" placeholder="Number of authors"
                    aria-label="name_authors">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-4">
                <label for="authorship*">Type of Authorship (First author/corresponding author/principal/co-author)</label>
                <input type="text" id="authorship" name="authorship[]" class="form-control" placeholder="Type of Authorship"
                    aria-label="authorship">
            </div>
            <div class="col-sm-2">
                <label for="UGC_listed_journals*">Sr. No. in UGC listed Journals</label>
                <input type="text" id="UGC_listed_journals" name="UGC_listed_journals[]" class="form-control" placeholder="UGC listed Journals"
                    aria-label="UGC_listed_journals">
            </div>
            <div class="col-sm-2">
                <label for="verified_committee*">Verified by the Committee</label>
                <input type="text" id="verified_committee" name="verified_committee[]" class="form-control" placeholder="Verified by the Committee"
                    aria-label="verified_committee">
            </div>
            <div class="col-sm-2">
                <label for="claimed_score*">Claimed Score</label>
                <input type="text" id="claimed_score" name="claimed_score[]" class="form-control" placeholder="Claimed Score"
                    aria-label="claimed_score">
            </div>
            <div class="col-sm-1">
                <label for="Encl*">Encl.No.</label>
                <input type="text" id="Encl" name="encl_no_c[]" class="form-control" placeholder="Encl.No"
                    aria-label="Encl">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-danger remove2 mt-4">-</button>
            </div>
        </div>


    </div>`;
    $(document).on('click', '.add2', function() {
            $('.add_input2').append(html2);
        });
        $(document).on('click', '.remove2', function() {
            $(this).closest('.parent2').remove();
        });
    });
</script>
@endsection
