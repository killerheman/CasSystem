@extends('layout.teacher_promotion')
@section('content')
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">TEACHING, INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES/ RESEARCH
                    ACTIVITIES:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 1 - 4</h2>
            </div>
        </div>
        {{-- <div class="row mt-3"> --}}
        <div class="parent">
            <div class="row g-3">
                <div class="col">
                    <label for="academicyear">Academic Year</label>
                    <select class="form-select form-select-lg mb-3" name="acadmicYears" aria-label="Default select example">
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
                    <select class="form-select form-select-lg mb-3" name="semester" aria-label="Default select example">
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
                    <label for="class_Assigned">Total Classes Assigned</label>
                    <input type="text" id="class_Assigned" name="class_Assigned" class="form-control"
                        placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="classes_Taught">Number of Classes Taught</label>
                    <input type="text" id="classes_Taught" name="classes_Taught" class="form-control"
                        placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
                <div class="col">
                    <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                        100%</label>
                    <input type="text" id="classes_Taught" name="classes_Taught" class="form-control"
                        placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
                <div class="col">
                    <label for="claimed_candidate">Claimed by the Candidate</label>
                    <input type="text" id="claimed_candidate" name="claimed_candidate" class="form-control"
                        placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="committee">Verified by the Committee</label>
                    <input type="text" id="committee" name="committee" class="form-control"
                        placeholder="Verified by the Committee" aria-label="committee">
                </div>
                <div class="col">
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" name="remarks" class="form-control" placeholder="remarks"
                        aria-label="remarks">
                </div>
                <div class="col-md-3">
                    <label for="enclNo">*Encl No.</label>
                    <input type="text" id="enclNo" name="enclNo" class="form-control" placeholder="enclNo"
                        aria-label="enclNo">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-info add">+</button>
                </div>
            </div>
            <div class="add_input"></div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-12">
            <h3 class="fs-title">INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH ACTIVITIES:</h3>
        </div>
    </div>
    <div class="parent1">
        <div class="row g-3">
            <div class="col">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYears" aria-label="Default select example">
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
                <select class="form-select form-select-lg mb-3" name="semester" aria-label="Default select example">
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
                <select class="form-select form-select-lg mb-3" name="acadmicYears" aria-label="Activity">
                    <option selected disabled>Choose Activity</option>
                    <option
                        value="Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden etc.">
                        Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden
                        etc.
                    </option>
                    <option
                        value="Examination and evaluation duties assigned by the Department/ College /University or attending the examination paper evaluation.">
                        Examination and evaluation duties assigned by the Department/ College /University or attending
                        the
                        examination paper evaluation.</option>
                    <option
                        value="Student related co-curricular, extension and field based activities such as student clubs, career counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and community services.">
                        Student related co-curricular, extension and field based activities such as student clubs,
                        career
                        counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                        community services.</option>
                    <option
                        value="Organising seminars/ conferences/ workshops, other Department/ College/University activities.">
                        Organising seminars/ conferences/ workshops, other Department/ College/University activities.
                    </option>
                    <option value="Evidence of actively involved in guiding Ph.D students.">Evidence of actively
                        involved
                        in guiding Ph.D students.</option>
                    <option
                        value="Conducting minor or major research project sponsored by national or international agencies.">
                        Conducting minor or major research project sponsored by national or international agencies.
                    </option>
                    <option value="At least one single or joint publication in peer reviewed or UGC list of Journals.">
                        At
                        least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee">
            </div>
            <div class="col">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-md-3">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo" class="form-control" placeholder="enclNo"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-info add">+</button>
            </div>
        </div>
        <div class="add_input1"></div>
    </div>
    </div>
    <input type="button" name="next" class="action-button" value="Next" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var html =
                `<div class="parent">
            <div class="row g-3">
                <div class="col">
                    <label for="academicyear">Academic Year</label>
                    <select class="form-select form-select-lg mb-3" name="acadmicYears" aria-label="Default select example">
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
                    <select class="form-select form-select-lg mb-3" name="semester" aria-label="Default select example">
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
                    <label for="class_Assigned">Total Classes Assigned</label>
                    <input type="text" id="class_Assigned" name="class_Assigned" class="form-control"
                        placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="classes_Taught">Number of Classes Taught</label>
                    <input type="text" id="classes_Taught" name="classes_Taught" class="form-control"
                        placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
                <div class="col">
                    <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                        100%</label>
                    <input type="text" id="classes_Taught" name="classes_Taught" class="form-control"
                        placeholder="Number of Classes Taught" aria-label="classes_Taught">
                </div>
                <div class="col">
                    <label for="claimed_candidate">Claimed by the Candidate</label>
                    <input type="text" id="claimed_candidate" name="claimed_candidate" class="form-control"
                        placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="committee">Verified by the Committee</label>
                    <input type="text" id="committee" name="committee" class="form-control"
                        placeholder="Verified by the Committee" aria-label="committee">
                </div>
                <div class="col">
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" name="remarks" class="form-control" placeholder="remarks"
                        aria-label="remarks">
                </div>
                <div class="col-md-3">
                    <label for="enclNo">*Encl No.</label>
                    <input type="text" id="enclNo" name="enclNo" class="form-control" placeholder="enclNo"
                        aria-label="enclNo">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-info remove">-</button>
                </div>
            </div>
        </div>`;
            $(document).on('click', '.add', function() {
                $('.add_input').append(html);
            });
            $(document).on('click', '.remove', function() {
                $(this).closest('.parent').remove();
            });
        });
    </script>
@endsection
