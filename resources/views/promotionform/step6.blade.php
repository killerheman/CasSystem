@extends('layout.teacher_promotion', ['activeClass' => 6])
@section('content')
<form action="{{ route('promotion-form.step-6-store') }}" method="post" enctype="multipart/form-data">
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
                <div class="col-sm-2">
                    <label for="academicyear">Academic Year</label>
                    {{-- <select class="form-select form-select-lg mb-3" required name="acadmicYears[]" aria-label="Default select example">
                        <option selected disabled>Choose Years</option>
                        @for($i=1;$i<7;$i++) <option value="{{ $i }}" @isset($user->step6[0])
                            @selected($user->step6[0]->A1_academic_year==$i) @endisset>Year {{ $i }}</option>
                            @endfor
                    </select> --}}
                    <input type="text" class="form-control" required name="acadmicYears[]" @isset($user->step6[0]) value="{{ $user->step6[0]->A1_academic_year??'' }}" @endisset>
                </div>
                {{-- <div class="col-sm-2">
                    <label for="semester">Semester</label>
                    <select class="form-select form-select-lg mb-3" required name="semester[]" aria-label="Default select example">
                        <option selected disabled>Choose Semester</option>
                        @for($i=1;$i<13;$i++) <option value="{{ $i }}" @isset($user->step6[0])
                            @selected($user->step6[0]->A1_semester==$i) @endisset>Sem {{ $i }}</option>
                            @endfor
                    </select>
                </div> --}}
                
                <div class="col-sm-2">
                    <label for="class_Assigned">Total Classes Assigned</label>
                    <input type="text" id="class_Assigned" required name="class_Assigned[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->total_classes_assigned }} @endisset" placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
                </div>
                
                <div class="col-sm-2">
                    <label for="classes_Taught">Number of Classes Taught</label>
                    <input type="text" id="classes_Taught" required name="classes_Taught[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->number_of_classes_tought }} @endisset" placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
                <div class="col-sm-5">
                    <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                        100%</label>
                    <input type="text" id="teaching" required name="teaching[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->number_of_classes_tought??'' }} @endisset" placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-sm-2">
                    <label for="committee">Verified by the Committee</label>
                    <input type="text" id="committee" required name="committee[]" class="form-control" placeholder="Verified by the Committee" aria-label="committee" value="Pending" readonly>
                </div>
                <div class="col-sm-2">
                    <label for="claimed_candidate">Claimed by the Candidate</label>
                    <input type="text" id="claimed_candidate" required name="claimed_candidate[]" class="form-control" value="@isset($user->step6[0]) {{ $user->step6[0]->claimed_by_the_candidate }} @endisset" placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
                </div>
                
                <div class="col-sm-3">
                    <label for="activity_file">File Attachement</label>
                    <input type="file" accept="application/pdf, image/*" id="activity_file" 
                     name="activity_file[]" class="form-control" placeholder="activity_file" aria-label="activity_file" @isset($user->step6[0])
                    {{ $user->step6[0]->A1_file?'required':'' }} @endisset >
                    @error('activity_file.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-sm-2">
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" required name="remarks[]" class="form-control" placeholder="remarks" value="@isset($user->step6[0]) {{ $user->step6[0]->remark_ks }} @endisset" aria-label="remarks">
                </div>
                <div class="col-sm-1">
                    <label for="enclNo">*Encl No.</label>
                    <input type="text" id="enclNo" required name="enclNo[]" class="form-control" placeholder="enclNo" value="@isset($user->step6[0]) {{ $user->step6[0]->encl_no }} @endisset" aria-label="enclNo">
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
                            <div class="col-sm-2">
                                <label for="academicyear">Academic Year</label>
                                {{-- <select class="form-select form-select-lg mb-3" required name="acadmicYears[]" aria-label="Default select example">
                                    <option selected disabled>Choose Years</option>
                                    @for($i=1;$i<7;$i++) <option value="{{ $i }}" @isset($user->step6[0])
                                        @selected($user->step6[0]->A1_academic_year==$i) @endisset>Year {{ $i }}</option>
                                        @endfor
                                </select> --}}
                                <input type="text" class="form-control" required name="acadmicYears[]" @isset($user->step6[$j]) value="{{ $user->step6[$j]->A1_academic_year??'' }}" @endisset>
                            </div>
                            {{-- <div class="col-sm-2">
                                <label for="semester">Semester</label>
                                <select class="form-select form-select-lg mb-3" required name="semester[]" aria-label="Default select example">
                                    <option selected disabled>Choose Semester</option>
                                    @for($i=1;$i<13;$i++) <option value="{{ $i }}" @isset($user->step6[$j])
                                        @selected($user->step6[$j]->A1_semester==$i) @endisset>Sem {{ $i }}</option>
                                        @endfor
                                </select>
                            </div> --}}
                            <div class="col-sm-2">
                                <label for="class_Assigned">Total Classes Assigned</label>
                                <input type="text" id="class_Assigned" required name="class_Assigned[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->total_classes_assigned }} @endisset" placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
                            </div>
                            <div class="col-sm-2">
                                <label for="classes_Taught">Number of Classes Taught</label>
                                <input type="text" id="classes_Taught" required name="classes_Taught[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->number_of_classes_tought }} @endisset" placeholder="Number of Classes Taught" aria-label="classes_Taught">
                            </div>
                            <div class="col-sm-5">
                                <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                                    100%</label>
                                <input type="text" id="teaching" required name="teaching[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->number_of_classes_tought??'' }} @endisset" placeholder="Number of Classes Taught" aria-label="classes_Taught">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-2">
                                <label for="committee">Verified by the Committee</label>
                                <input type="text" id="committee" required name="committee[]" class="form-control" placeholder="Verified by the Committee" aria-label="committee" value="Pending" readonly>
                            </div>
                            <div class="col-sm-2">
                                <label for="claimed_candidate">Claimed by the Candidate</label>
                                <input type="text" id="claimed_candidate" required name="claimed_candidate[]" class="form-control" value="@isset($user->step6[$j]) {{ $user->step6[$j]->claimed_by_the_candidate }} @endisset" placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
                            </div>
                            
                            <div class="col-sm-3">
                                <label for="activity_file">File Attachement</label>
                                <input type="file" accept="application/pdf, image/*" id="activity_file"  name="activity_file[]" class="form-control" placeholder="activity_file" aria-label="activity_file" @isset($user->step6[$j])
                                {{ $user->step6[$j]->A1_file?'required':'' }} @endisset >
                                @error('activity_file.0') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-2">
                                <label for="remarks">Remarks</label>
                                <input type="text" id="remarks" required name="remarks[]" class="form-control" placeholder="remarks" value="@isset($user->step6[$j]) {{ $user->step6[$j]->remark_ks }} @endisset" aria-label="remarks">
                            </div>
                            <div class="col-sm-1">
                                <label for="enclNo">*Encl No.</label>
                                <input type="text" id="enclNo" required name="enclNo[]" class="form-control" placeholder="enclNo" value="@isset($user->step6[$j]) {{ $user->step6[$j]->encl_no }} @endisset" aria-label="enclNo">
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
                <h3 class="fs-title">INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH ACTIVITIES:
                </h3>
            </div>
        </div>
        <div class="parent1 border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="academicyear">Academic Year</label>
                    {{-- <select class="form-select form-select-lg mb-3" required name="acadmicYear_b[]" aria-label="Default select example">
                        <option selected disabled>Choose Years</option>
                        @for($i=1;$i<7;$i++) <option value="{{ $i }}" @isset($user->step6_b[0])
                            @selected($user->step6_b[0]->academic_year==$i) @endisset>Year {{ $i }}</option>
                            @endfor

                    </select> --}}
                    <input type="text" required name="acadmicYear_b[]" id="" class="form-control" @isset($user->step6_b[0]) value="{{ $user->step6_b[0]->academic_year??'' }}" @endisset>
                </div>
                {{-- <div class="col-md-3">
                    <label for="semester">Semester</label>
                    <select class="form-select form-select-lg mb-3" required name="semester_b[]" aria-label="Default select example">
                        <option selected disabled>Choose Semester</option>
                        @for($i=1;$i<13;$i++) <option value="{{ $i }}" @isset($user->step6_b[0])
                            @selected($user->step6_b[0]->semester==$i) @endisset>Sem {{ $i }}</option>
                            @endfor
                    </select>
                </div> --}}
                <div class="col-md-3">
                    <label for="academicyear">Activity</label>
                    <select class="form-select form-select-lg mb-3" required name="activity[]" aria-label="Activity">
                        <option selected disabled>Choose Activity</option>
                        <option value="1" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==1) @endisset>
                            Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator,
                            Warden
                            etc.
                        </option>
                        <option value="2" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==2) @endisset>
                            Examination and evaluation duties assigned by the Department/ College /University or
                            attending
                            the
                            examination paper evaluation.</option>
                        <option value="3" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==3) @endisset>
                            Student related co-curricular, extension and field based activities such as student clubs,
                            career
                            counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                            community services.</option>
                        <option value="4" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==4) @endisset>
                            Organising seminars/ conferences/ workshops, other Department/ College/University
                            activities.
                        </option>
                        <option value="5" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==5)
                            @endisset>Evidence of actively
                            involved
                            in guiding Ph.D students.</option>
                        <option value="6" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==6) @endisset>
                            Conducting minor or major research project sponsored by national or international agencies.
                        </option>
                        <option value="7" @isset($user->step6_b[0]) @selected($user->step6_b[0]->activity==7) @endisset>
                            At
                            least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="involment_file">File (Attachement)</label>
                    <input type="file" accept="application/pdf, image/*"  name="involment_file[]" class="form-control" id="involment_file" @isset($user->step6_b[0]) {{ $user->step6_b[0]->file?'required':'' }} @endisset>
                    @error('involment_file.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="claimed_candidate">Claimed by the Candidate</label>
                    <input type="text" id="claimed_candidate" required name="claimed_candidate_b[]" class="form-control" placeholder="Claimed by the Candidate" aria-label="claimed_candidate" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->claimed_by_candidate }} @endisset">
                </div>
                <div class="col">
                    <label for="committee">Verified by the Committee</label>
                    <input type="text" id="committee_b[]" required name="committee_b[]" class="form-control" placeholder="Verified by the Committee" aria-label="committee" value="Pending" readonly>
                </div>
                <div class="col">
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" required name="remarks_b[]" class="form-control" placeholder="remarks" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->remark }} @endisset" aria-label="remarks">
                </div>
                <div class="col-md-3">
                    <label for="enclNo">*Encl No.</label>
                    <input type="text" id="enclNo" required name="enclNo_b[]" class="form-control" placeholder="enclNo" value="@isset($user->step6_b[0]) {{ $user->step6_b[0]->encl_no }} @endisset" aria-label="enclNo">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-info add1">+</button>
                </div>
            </div>
            <div class="add_input1">
                @isset($user->step6_b)
                @for($j=1;$j<count($user->step6_b);$j++)

                    <div class="parent1">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="academicyear">Academic Year</label>
                                {{-- <select class="form-select form-select-lg mb-3" required name="acadmicYear_b[]" aria-label="Default select example">
                                    <option selected disabled>Choose Years</option>
                                    @for($i=1;$i<7;$i++) <option value="{{ $i }}" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->academic_year==$i) @endisset>Year {{ $i }}
                                        </option>
                                        @endfor

                                </select> --}}
                                <input type="text" required name="acadmicYear_b[]" id="" class="form-control" @isset($user->step6_b[$j]) value="{{ $user->step6_b[$j]->academic_year??'' }}" @endisset>
                            </div>
                            {{-- <div class="col-md-3">
                                <label for="semester">Semester</label>
                                <select class="form-select form-select-lg mb-3" required name="semester_b[]" aria-label="Default select example">
                                    <option selected disabled>Choose Semester</option>
                                    @for($i=1;$i<13;$i++) <option value="{{ $i }}" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->semester==$i) @endisset>Sem {{ $i }}</option>
                                        @endfor
                                </select>
                            </div> --}}
                            <div class="col-md-3">
                                <label for="academicyear">Activity</label>
                                <select class="form-select form-select-lg mb-3" required name="activity[]" aria-label="Activity">
                                    <option selected disabled>Choose Activity</option>
                                    <option value="1" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==1) @endisset>
                                        Administrative responsibilities such as Head, Chairperson/ Dean/ Director/
                                        Co-ordinator, Warden
                                        etc.
                                    </option>
                                    <option value="2" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==2) @endisset>
                                        Examination and evaluation duties assigned by the Department/ College
                                        /University or attending
                                        the
                                        examination paper evaluation.</option>
                                    <option value="3" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==3) @endisset>
                                        Student related co-curricular, extension and field based activities such as
                                        student clubs,
                                        career
                                        counselling, study visits, student seminars and other events, cultural, sports,
                                        NCC, NSS and
                                        community services.</option>
                                    <option value="4" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==4) @endisset>
                                        Organising seminars/ conferences/ workshops, other Department/
                                        College/University activities.
                                    </option>
                                    <option value="5" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==5) @endisset>Evidence of actively
                                        involved
                                        in guiding Ph.D students.</option>
                                    <option value="6" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==6) @endisset>
                                        Conducting minor or major research project sponsored by national or
                                        international agencies.
                                    </option>
                                    <option value="7" @isset($user->step6_b[$j])
                                        @selected($user->step6_b[$j]->activity==7) @endisset>
                                        At
                                        least one single or joint publication in peer reviewed or UGC list of Journals.
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="involment_file">File (Attachement)</label>
                                <input type="file" accept="application/pdf, image/*"  name="involment_file[]" class="form-control" id="involment_file" @isset($user->step6_b[$j]) {{ $user->step6_b[$j]->file?'required':'' }} @endisset>
                                @error('involment_file.'.$j) <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="claimed_candidate">Claimed by the Candidate</label>
                                <input type="text" id="claimed_candidate" required name="claimed_candidate_b[]" class="form-control" placeholder="Claimed by the Candidate" aria-label="claimed_candidate" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->claimed_by_candidate??'' }} @endisset">
                            </div>
                            <div class="col">
                                <label for="committee">Verified by the Committee</label>
                                <input type="text" id="committee_b[]" required name="committee_b[]" class="form-control" placeholder="Verified by the Committee" aria-label="committee" value="Pending" readonly>
                            </div>
                            <div class="col">
                                <label for="remarks">Remarks</label>
                                <input type="text" id="remarks" required name="remarks_b[]" class="form-control" placeholder="remarks" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->remark??'' }} @endisset" aria-label="remarks">
                            </div>
                            <div class="col-md-3">
                                <label for="enclNo">*Encl No.</label>
                                <input type="text" id="enclNo" required name="enclNo_b[]" class="form-control" placeholder="enclNo" value="@isset($user->step6_b[$j]) {{ $user->step6_b[$j]->encl_no??'' }} @endisset" aria-label="enclNo">
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
        <hr />
        <div class="row">
            <div class="col-12">
                <h3 class="fs-title">RESEARCH PAPERS IN PEER-REVIEWED OR UGC-LISTED JOURNALS:</h3>
            </div>
        </div>
        <div class="parent2  border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="research_paper">Title of the Research Paper</label>
                    <input type="text" id="research_paper" required name="research_paper[]" class="form-control" placeholder="Title of the Research Paper" aria-label="research_paper" value="@isset($user->step6_c[0]) {{ $user->step6_c[0]->title_research_chapter??'' }} @endisset">
                </div>
                <div class="col-md-2">
                    <label for="name_journal">Name of the Journal</label>
                    <input type="text" id="name_journal" required name="name_journal[]" class="form-control" placeholder="Name of the Journal" aria-label="name_journal" value="@isset($user->step6_c[0]) {{ $user->step6_c[0]->name_journal??'' }} @endisset">
                </div>
                <div class="col-md-2">
                    <label for="vol_pp_year">Vol., PP No. & Year</label>
                    <input type="text" id="vol_pp_year" required name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year" aria-label="Vol., PP No. & Year" value="@isset($user->step6_c[0]) {{ $user->step6_c[0]->vol_pp_no_year??'' }} @endisset">
                </div>
                <div class="col-md-2">
                    <label for="impact_factor*">Impact Factor</label>
                    <input type="text" id="impact_factor"  name="impact_factor[]" value="0" class="form-control" placeholder="Impact Factor" aria-label="impact_factor" value="@isset($user->step6_c[0]) {{ $user->step6_c[0]->impact_factor??'' }} @endisset">
                </div>
                <div class="col-md-2">
                    <label for="name_authors*">Number of authors</label>
                    <select class="form-select form-select-lg mb-3 number_of_authors" required name="name_authors[]" aria-label="Activity">
                        <option selected disabled>Choose Activity</option>
                        <option
                        value="individual" @isset($user->step6_c[0]) @selected($user->step6_c[0]->no_authors=='individual') @endisset>
                          Individual
                        </option>
                        <option
                        value="multiple"  @isset($user->step6_c[0]) @selected($user->step6_c[0]->no_authors=='multiple') @endisset>
                          Multiple</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="research_file">File</label>
                    <input type="file" accept="application/pdf, image/*" id="research_file"  name="research_file[]" class="form-control" placeholder="research_file" aria-label="research_file" @isset($user->step6_c[0])
                    {{ $user->step6_c[0]->file?'required':'' }} @endisset>
                    @error('research_file.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            @isset($user->step6_c[0])  
            @php $co_author= json_decode($user->step6_c[0]->co_author)@endphp
            @endisset
            <div class="row g-3 " >
                <div class="col-sm-4 @isset($user->step6_c[0]) @if($user->step6_c[0]->no_authors=='individual')showdatahide  @endif @endisset">
                    <label for="authorship*">Type of Authorship (First author/corresponding
                        author/principal/co-author)</label>
                    <input type="text" id="authorship"  name="co_auth[0][authorship]" class="form-control" placeholder="Type of Authorship" aria-label="authorship" value="@isset($co_author) {{ $co_author->authorship??'' }} @endisset">
                </div>
                <div class="col-sm-2">
                    <label for="UGC_listed_journals*">Nature Journals</label>
                    <select required name="co_auth[0][UGC_listed_journals]" class="form-control" id="">
                        <option @isset($co_author) @selected($co_author->UGC_listed_journals=='UGC care listed')@endisset>UGC care listed</option>
                        <option @isset($co_author) @selected($co_author->UGC_listed_journals=='UGC approved')@endisset>UGC approved</option>
                        <option @isset($co_author) @selected($co_author->UGC_listed_journals=='Peer Review Journal')@endisset>Peer Review Journal</option>
                        <option @isset($co_author) @selected($co_author->UGC_listed_journals=='Other')@endisset>Other</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="verified_committee*">Verified by the Committee</label>
                    <input type="text" id="verified_committee"  name="co_auth[0][verified_committee_c]" class="form-control" placeholder="Verified by the Committee" aria-label="verified_committee" value="Pending" readonly>
                </div>
                <div class="col-sm-2">
                    <label for="claimed_score*">Claimed Score</label>
                    <input type="number"  id="claimed_score" step="0.5" name="co_auth[0][claimed_score]" class="form-control" placeholder="Claimed Score" aria-label="claimed_score" value="@isset($co_author){{ $co_author->claimed_score??0 }}@endisset">
                </div>
                <div class="col-sm-1">
                    <label for="Encl*">Encl.No.</label>
                    <input type="text" id="Encl" name="co_auth[0][encl_no_c]" class="form-control" placeholder="Encl.No" aria-label="Encl" value="@isset($co_author) {{ $co_author->encl_no_c??'' }} @endisset">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-info add2 mt">+</button>
                </div>
            </div>
            <div class="add_input2">
                {{-- @for($g=1;$g<count($co_author);$g++)
                    <div class="parent2">
                        <hr />
                         <div class="row g-3 " >
                            <div class="col-sm-4 @isset($user->step6_c[0]) @if($user->step6_c[0]->no_authors=='individual') showdatahide @endif @else showdatahide @endisset">
                                <label for="authorship*">Type of Authorship (First author/corresponding
                                    author/principal/co-author)</label>
                                <input type="text" id="authorship"  name="co_auth[{{ $g }}][authorship]" class="form-control" placeholder="Type of Authorship" aria-label="authorship" value="@isset($co_author) {{ $co_author[$g]->authorship??'' }} @endisset">
                            </div>
                            <div class="col-sm-2">
                                <label for="UGC_listed_journals*">Nature Journals</label>
                                <select required name="co_auth[{{ $g }}][UGC_listed_journals]" class="form-control" id="">
                                    <option @isset($co_author[$g]) @selected($co_author[$g]->UGC_listed_journals=='UGC care listed')@endisset>UGC care listed</option>
                                    <option @isset($co_author[$g]) @selected($co_author[$g]->UGC_listed_journals=='UGC approved')@endisset>UGC approved</option>
                                    <option @isset($co_author[$g]) @selected($co_author[$g]->UGC_listed_journals=='Peer Review Journal')@endisset>Peer Review Journal</option>
                                    <option @isset($co_author[$g]) @selected($co_author[$g]->UGC_listed_journals=='Other')@endisset>Other</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label for="verified_committee*">Verified by the Committee</label>
                                <input type="text" id="verified_committee"  name="co_auth[{{ $g }}][verified_committee_c]" class="form-control" placeholder="Verified by the Committee" aria-label="verified_committee" value="Pending" readonly>
                            </div>
                            <div class="col-sm-2">
                                <label for="claimed_score*">Claimed Score</label>
                                <input type="number" id="claimed_score" name="co_auth[{{ $g }}][claimed_score]" class="form-control" placeholder="Claimed Score" aria-label="claimed_score" value="@isset($co_author[$g]){{ $co_author[$g]->claimed_score??0 }}@endisset">
                            </div>
                            <div class="col-sm-1">
                                <label for="Encl*">Encl.No.</label>
                                <input type="text" id="Encl" name="co_auth[{{ $g }}][encl_no_c]" class="form-control" placeholder="Encl.No" aria-label="Encl" value="@isset($co_author[$g]) {{ $co_author[$g]->encl_no_c??'' }} @endisset">
                            </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-danger remove2 mt">-</button>
                </div>
            </div>

                    </div>

                    @endfor --}}
                  
                    @isset($user->step6_c)
                    @for ($i=1;$i<count($user->step6_c);$i++ )
                        
                    
                    <div class="parent2  p-3">
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-2">
                                <label for="research_paper">Title of the Research Paper</label>
                                <input type="text" id="research_paper" required name="research_paper[]" class="form-control" placeholder="Title of the Research Paper" aria-label="research_paper" value="@isset($user->step6_c[$i]) {{ $user->step6_c[$i]->title_research_chapter??'' }} @endisset">
                            </div>
                            <div class="col-md-2">
                                <label for="name_journal">Name of the Journal</label>
                                <input type="text" id="name_journal" required name="name_journal[]" class="form-control" placeholder="Name of the Journal" aria-label="name_journal" value="@isset($user->step6_c[$i]) {{ $user->step6_c[$i]->name_journal??'' }} @endisset">
                            </div>
                            <div class="col-md-2">
                                <label for="vol_pp_year">Vol., PP No. & Year</label>
                                <input type="text" id="vol_pp_year" required name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year" aria-label="Vol., PP No. & Year" value="@isset($user->step6_c[$i]) {{ $user->step6_c[$i]->vol_pp_no_year??'' }} @endisset">
                            </div>
                            <div class="col-md-2">
                                <label for="impact_factor*">Impact Factor</label>
                                <input type="text" id="impact_factor"  name="impact_factor[]" value="0" class="form-control" placeholder="Impact Factor" aria-label="impact_factor" value="@isset($user->step6_c[$i]) {{ $user->step6_c[$i]->impact_factor??'' }} @endisset">
                            </div>
                            <div class="col-md-2">
                                <label for="name_authors*">Number of authors</label>
                                <select class="form-select form-select-lg mb-3 number_of_authors" required name="name_authors[]" aria-label="Activity">
                                    <option selected disabled>Choose Activity</option>
                                    <option
                                    value="individual" @isset($user->step6_c[$i]) @selected($user->step6_c[$i]->no_authors=='individual') @endisset>
                                      Individual
                                    </option>
                                    <option
                                    value="multiple"  @isset($user->step6_c[$i]) @selected($user->step6_c[$i]->no_authors=='multiple') @endisset>
                                      Multiple</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="research_file">File</label>
                                <input type="file" accept="application/pdf, image/*" id="research_file"  name="research_file[]" class="form-control" placeholder="research_file" aria-label="research_file" @isset($user->step6_c[$i])
                                {{ $user->step6_c[$i]->file?'required':'' }} @endisset>
                                @error('research_file.0') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @isset($user->step6_c[$i])  
                        @php $co_author= json_decode($user->step6_c[$i]->co_author)@endphp
                        @endisset
                        <div class="row g-3 " >
                            <div class="col-sm-4  @if($user->step6_c[$i]->no_authors=='individual')showdatahide  @endif">
                                <label for="authorship*">Type of Authorship (First author/corresponding
                                    author/principal/co-author)</label>
                                <input type="text" id="authorship"  name="co_auth[{{ $i }}][authorship]" class="form-control" placeholder="Type of Authorship" aria-label="authorship" value="@isset($co_author) {{ $co_author->authorship??'' }} @endisset">
                            </div>
                            <div class="col-sm-2">
                                <label for="UGC_listed_journals*">Nature Journals</label>
                                <select required name="co_auth[{{ $i }}][UGC_listed_journals]" class="form-control" id="">
                                    <option @isset($co_author) @selected($co_author->UGC_listed_journals=='UGC care listed')@endisset>UGC care listed</option>
                                    <option @isset($co_author) @selected($co_author->UGC_listed_journals=='UGC approved')@endisset>UGC approved</option>
                                    <option @isset($co_author) @selected($co_author->UGC_listed_journals=='Peer Review Journal')@endisset>Peer Review Journal</option>
                                    <option @isset($co_author) @selected($co_author->UGC_listed_journals=='Other')@endisset>Other</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label for="verified_committee*">Verified by the Committee</label>
                                <input type="text" id="verified_committee"  name="co_auth[{{ $i }}][verified_committee_c]" class="form-control" placeholder="Verified by the Committee" aria-label="verified_committee" value="Pending" readonly>
                            </div>
                            <div class="col-sm-2">
                                <label for="claimed_score*">Claimed Score</label>
                                <input type="number" id="claimed_score" step="0.5" name="co_auth[{{ $i }}][claimed_score]" class="form-control" placeholder="Claimed Score" aria-label="claimed_score" value="@isset($co_author){{ $co_author->claimed_score??0 }}@endisset">
                            </div>
                            <div class="col-sm-1">
                                <label for="Encl*">Encl.No.</label>
                                <input type="text" id="Encl" name="co_auth[{{ $i }}][encl_no_c]" class="form-control" placeholder="Encl.No" aria-label="Encl" value="@isset($co_author) {{ $co_author->encl_no_c??'' }} @endisset">
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

    @isset($user->step) @if($user->step>=6)<a href="{{route('promotion-form.step-7')}}" class="action-button">Next</a>
    @endif @endisset

    <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-5') }}" class="action-button">Previous</a>
    @endsection


    @section('script')
    <script>
        $(document).ready(function() {
            var html =
                `<div class="parent"><hr/>
                <div class="row g-3">
            <div class="col-sm-2">
                <label for="academicyear">Academic Year</label>
                <input type="text" class="form-control" required name="acadmicYears[]">
            </div>
            <div class="col-sm-2">
                <label for="class_Assigned">Total Classes Assigned</label>
                <input type="text" id="class_Assigned" required name="class_Assigned[]" class="form-control"
                    placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
            </div>
            <div class="col-sm-2">
                <label for="classes_Taught">Number of Classes Taught</label>
                <input type="text" id="classes_Taught" required name="classes_Taught[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
            <div class="col-sm-5">
                <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                    100%</label>
                <input type="text" id="teaching" required name="teaching[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
           
            
        </div>
        <div class="row g-3">
            <div class="col-sm-2">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" required name="committee[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee" value="pending" readonly>
            </div>
            <div class="col-sm-2">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" required name="claimed_candidate[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col-sm-3">
                <label for="activity_file">File Attachement</label>
                <input type="file" accept="application/pdf, image/*" id="activity_file"  name="activity_file[]" class="form-control"
                    placeholder="Activity File" aria-label="Activity File">
            </div>
            <div class="col-sm-2">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" required name="remarks[]" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-sm-1">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" required name="enclNo[]" class="form-control" placeholder="enclNo"
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

            var html1 =
                `<div class="parent1"><hr/>
        <div class="row g-3">
            <div class="col-md-3">
                <label for="academicyear">Academic Year</label>
                
                <input type="text" class="form-control" required name="acadmicYear_b[]" >
            </div>
            <div class="col-md-3">
                <label for="academicyear">Activity</label>
                <select class="form-select form-select-lg mb-3" required name="activity[]" aria-label="Activity">
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
            <div class="col-md-3">
                <label for="involment_file">File (Attachement)</label>
                <input type="file" accept="application/pdf, image/*"  name="involment_file[]" class="form-control" id="involment_file" >
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" required name="claimed_candidate_b[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" required name="committee_b[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee" value="pending" readonly>
            </div>
            <div class="col">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" required name="remarks_b[]" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-md-3">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" required name="enclNo_b[]" class="form-control" placeholder="enclNo"
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
            var count=1;
            function htmladd(c){
            var html2 =
                `
         <div class="parent2 "><hr/>
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="research_paper">Title of the Research Paper</label>
                    <input type="text" id="research_paper" required name="research_paper[]" class="form-control" placeholder="Title of the Research Paper" aria-label="research_paper" >
                </div>
                <div class="col-md-2">
                    <label for="name_journal">Name of the Journal</label>
                    <input type="text" id="name_journal" required name="name_journal[]" class="form-control" placeholder="Name of the Journal" aria-label="name_journal" >
                </div>
                <div class="col-md-2">
                    <label for="vol_pp_year">Vol., PP No. & Year</label>
                    <input type="text" id="vol_pp_year" required name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year" aria-label="Vol., PP No. & Year" >
                </div>
                <div class="col-md-2">
                    <label for="impact_factor*">Impact Factor</label>
                    <input type="text" id="impact_factor"  name="impact_factor[]" value="0" class="form-control" placeholder="Impact Factor" aria-label="impact_factor" value="0">
                </div>
                <div class="col-md-2">
                    <label for="name_authors*">Number of authors</label>
                    <select class="form-select form-select-lg mb-3 number_of_authors" required name="name_authors[]" aria-label="Activity">
                        <option selected disabled>Choose Activity</option>
                        <option value="individual" > Individual </option>
                        <option value="multiple" selected>  Multiple </option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="research_file">File</label>
                    <input type="file" accept="application/pdf, image/*" id="research_file"  name="research_file[]" class="form-control" placeholder="research_file" aria-label="research_file" >
                </div>
            </div>
            <div class="row g-3 " >
                <div class="col-sm-4  showdatahide ">
                    <label for="authorship*">Type of Authorship (First author/corresponding
                        author/principal/co-author)</label>
                    <input type="text" id="authorship"  name="co_auth[`+count+`][authorship]" class="form-control" placeholder="Type of Authorship" aria-label="authorship" >
                </div>
                <div class="col-sm-2">
                    <label for="UGC_listed_journals*">Nature Journals</label>
                    <select required name="co_auth[`+count+`][UGC_listed_journals]" class="form-control" id="">
                        <option >UGC care listed</option>
                        <option >UGC approved</option>
                        <option >Peer Review Journal</option>
                        <option >Other</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="verified_committee*">Verified by the Committee</label>
                    <input type="text" id="verified_committee"  name="co_auth[`+count+`][verified_committee_c]" class="form-control" placeholder="Verified by the Committee" aria-label="verified_committee" value="Pending" readonly>
                </div>
                <div class="col-sm-2">
                    <label for="claimed_score*">Claimed Score</label>
                    <input type="number" id="claimed_score" step="0.5" name="co_auth[`+count+`][claimed_score]" class="form-control" placeholder="Claimed Score" aria-label="claimed_score" >
                </div>
                <div class="col-sm-1">
                    <label for="Encl*">Encl.No.</label>
                    <input type="text" id="Encl" name="co_auth[`+count+`][encl_no_c]" class="form-control" placeholder="Encl.No" aria-label="Encl" >
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-danger remove2 mt">-</button>
                </div>
            </div>
    </div>`;
    return html2;
}
            $(document).on('click', '.add2', function() {
                var c=$('.parent2').length;
                var html2=htmladd(c);
                count=count+1;
                $('.remove2').addClass('d-none');
                $('.add_input2').append(html2);
            });
            $(document).on('click', '.remove2', function() {
                $(this).closest('.parent2').remove();
                var c=$('.remove2').length;
                $('.remove2').eq(c-1).removeClass('d-none');
            });
            $('.showdatahide').addClass('d-none');
            $(document).on('change','.number_of_authors',function(){
                alert();
               var value = $(this).val();
               if(value=='individual'){
                $(this).closest('.parent2').children('.row').children('.showdatahide').addClass('d-none');
               }else{
                $(this).closest('.parent2').children('.row').children('.showdatahide').removeClass('d-none');
               }
            });
        });

   </script>
    @endsection