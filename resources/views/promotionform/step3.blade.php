@extends('layout.teacher_promotion')
@section('progress-width','30%')
@section('content')
<fieldset>
    <form action="{{ route('promotion-form.step-3-store') }}" method="post">
        @csrf
    <div class="form-card">
        <div class="row">
            <div class="col-9">
                <h3 class="fs-title"> ACADEMIC QUALIFICATIONS (Graduation onwards):</h3>
            </div>
            <div class="col-3">
                <h2 class="steps">Step 3 - 10</h2>
            </div>
        </div>
        <div class="parent border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row g-3">
                <div class="col">
                    <label for="qualifications">Qualifications</label>
                    <select class="form-select form-select-lg mb-3" name="qualifications[]"
                        aria-label="Default select example">
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
                    <input type="text" id="cou" name="college_university[]"
                        class="form-control" placeholder="College / University"
                        aria-label="College / University">
                </div>
                <div class="col">
                    <label for="Session">Session</label>
                    <input type="text" id="Session" name="session[]" class="form-control"
                        placeholder="session" aria-label="session">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="yp">Year of Passing</label>
                    <input type="text" id="yp" name="year_of_passing[]"
                        class="form-control" placeholder="Year of Passing"
                        aria-label="Year of Passing">
                </div>
                <div class="col">
                    <label for="marks_cgpa">Marks Obtained /Out of Or CGPA Grade</label>
                    <input type="text" id="marks_cgpa" name="marks_obtained_out_of_or_cgpa_grade[]"
                        class="form-control"
                        placeholder="Marks Obtained /Out of Or CGPA Grade"
                        aria-label="marks_cgpa">
                </div>
                <div class="col-md-3">
                    <label for="class_with">Class with %</label>
                    <input type="text" id="class_with" name="class_with[]"
                        class="form-control" placeholder="Class with %"
                        aria-label="Class with %">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="button" class="btn btn-info add">+</button>
                </div>
            </div>
            <div class="add_input"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="fs-title">  RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU
                    (Please Attach Relevant Certificates of Service Experience):</h3>
            </div>
        </div>
        <div class="parent1  border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row g-3">
                <div class="col">
                    <label for="institute">Institution</label>
                    <input type="text" id="institute" name="institution[]"
                        class="form-control" placeholder="Institution"
                        aria-label="Institution">
                </div>
                <div class="col">
                    <label for="designation">Designation</label>
                    <input type="text" id="designation" name="designation[]"
                        class="form-control" placeholder="designation"
                        aria-label="designation">
                </div>
                <div class="col">
                    <label for="nature_appointment">Nature of appointment</label>
                    <input type="text" id="nature_appointment" name="nature_of_appointment[]"
                        class="form-control"
                        placeholder="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)"
                        aria-label="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)">
                </div>
                <div class="col">
                    <label for="nature_duties">Nature of Duties</label>
                    <input type="text" id="nature_duties" name="nature_of_duties[]"
                        class="form-control" placeholder="Nature of Duties"
                        aria-label="nature_duties">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="required_min_qualification">mininmum qualification</label>
                    <input type="text" id="required_min_qualification"
                        name="minimum_qualification_for_the_post[]" class="form-control"
                        placeholder="Institution" aria-label="required_min_qualification">
                </div>
                <div class="col">
                    <label for="Pay_Scale">Pay_Scale / Pay band and AGP</label>
                    <input type="text" id="Pay_Scale" name="pay_scale_pay_band_and_agp[]"
                        class="form-control" placeholder="Pay_Scale / Pay band and AGP"
                        aria-label="Pay_Scale">
                </div>
                <div class="col">
                    <label for="Remarks">Remarks</label>
                    <input type="text" id="Remarks" name="remark[]" class="form-control"
                        placeholder="Remarks" aria-label="Remarks">
                </div>
                <div class="col">
                    <label for="Encl.No.">Encl.No.</label>
                    <input type="text" id="Encl.No." name="encl_no[]" class="form-control"
                        placeholder="Encl.No." aria-label="Encl.No.">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="required_min_qualification">Highest degree obtained</label>
                    <input type="text" id="required_min_qualification"
                        name="highest_degree_obtained[]" class="form-control"
                        placeholder="Institution" aria-label="required_min_qualification">
                </div>
                <div class="col-2">
                    <label for="Duration">Duration</label>
                    <input type="text" id="From" name="duration_from[]" class="form-control"
                        placeholder="From" aria-label="From">
                </div>
                <div class="col-2">
                    <label for="Duration"></label>
                    <input type="text" id="To" name="duration_to[]" class="form-control"
                        placeholder="To" aria-label="To">
                </div>
                <div class="col-2">
                    <label for="Experience">Experience</label>
                    <input type="text" id="Year" name="experience_year[]" class="form-control"
                        placeholder="Year" aria-label="Year">
                </div>
                <div class="col-2">
                    <label for="Experience"></label>
                    <input type="text" id="Months" name="experience_months[]" class="form-control"
                        placeholder="Months" aria-label="Months">
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
        <div class="parent2 border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row g-3">
                <div class="col">
                    <label for="Level">Level</label>
                    <select class="form-select form-select-lg mb-3" name="level[]"
                        aria-label="Default select example">
                        <option selected disabled>Choose Level</option>
                       <option value="l10">Level 10</option>
                       <option value="l11">Level 11</option>
                    </select>
                </div>
                <div class="col">
                    <label for="Designation">Designation</label>
                    <input type="text" id="Designation" name="designation[]"
                        class="form-control" placeholder="Designation"
                        aria-label="Designation">
                </div>
                <div class="col">
                    <label for="Pay">Pay Scale and AGP</label>
                    <input type="text" id="Pay" name="pay_scale_and_agp[]" class="form-control"
                        placeholder="Pay Scale and AGP" aria-label="Pay Scale and AGP">
                </div>
                <div class="col">
                    <label for="Encl.No.">Encl.No.</label>
                    <input type="text" id="Encl.No." name="encl_no[]" class="form-control"
                        placeholder="Encl.No." aria-label="Encl.No.">
                </div>
                <div class="col">
                    <label for="Remarks">Remarks</label>
                    <input type="text" id="Remarks" name="remarks[]" class="form-control"
                        placeholder="Remarks" aria-label="Remarks">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="Duration">Duration (from)</label>
                    <input type="date" id="From" name="duration_from[]" class="form-control"
                        placeholder="From" aria-label="From">
                </div>
                <div class="col">
                    <label for="Duration">Duration (to)</label>
                    <input type="date" id="To" name="duration_to[]" class="form-control"
                        placeholder="To" aria-label="To">
                </div>
                <div class="col">
                    <label for="Experience">Experience (Year)</label>
                    <input type="number" id="Months" name="experience_year[]" class="form-control"
                        placeholder="Months" aria-label="Months">
                </div>
                <div class="col">
                    <label for="Experience">Experience (Months)</label>
                    <input type="number" id="Months" name="experience_months[]" class="form-control"
                        placeholder="Months" aria-label="Months">
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-info add2 mt-4">+</button>
                </div>
            </div>
            <div class="add_input2"></div>
        </div>
        <div class="col-12">
            <h3 class="fs-title text-danger">Please clearly specify the period of Leave Without Pay (LWP)
            </h3>
        </div>
    </div> <input type="submit" name="next" class="next action-button" value="Submit" />
    <input type="button" name="previous" class="previous action-button-previous"
        value="Previous" />
    </form>
</fieldset>
@endsection

@section('script')
<script>
  // ACADEMIC QUALIFICATIONS (Graduation onwards)
  var html = '<div class="parent">\
    <hr/>\
                                        <div class="row g-3">\
                                            <div class="col">\
                                                <label for="qualifications">Qualifications</label>\
                                                <select class="form-select form-select-lg mb-3" name="qualifications[]"\
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
                                                <input type="text" id="cou" name="college_university[]"\
                                                    class="form-control" placeholder="College / University"\
                                                    aria-label="College / University">\
                                            </div>\
                                            <div class="col">\
                                                <label for="Session">Session</label>\
                                                <input type="text" id="Session" name="session[]" class="form-control"\
                                                    placeholder="session" aria-label="session">\
                                            </div></div>\
                                        <div class="row g-3">\
                                            <div class="col">\
                                                <label for="yp">Year of Passing</label>\
                                                <input type="text" id="yp" name="year_of_passing[]"\
                                                    class="form-control" placeholder="Year of Passing"\
                                                    aria-label="Year of Passing">\
                                            </div><div class="col">\
                                                <label for="marks_cgpa">Marks Obtained /Out of Or CGPA Grade</label>\
                                                <input type="text" id="marks_cgpa" name="marks_obtained_out_of_or_cgpa_grade[]"\
                                                    class="form-control"\
                                                    placeholder="Marks Obtained /Out of Or CGPA Grade"\
                                                    aria-label="marks_cgpa">\
                                            </div><div class="col-md-3">\
                                                <label for="class_with">Class with %</label>\
                                                <input type="text" id="class_with" name="class_with[]"\
                                                    class="form-control" placeholder="Class with %"\
                                                    aria-label="Class with %">\
                                            </div>\
                                            <div class="col-md-1 mt-5">\
                                            <button type="button" class="btn btn-danger remove">-</button>\
                                        </div></div>\
                                        </div>';
            $(document).on('click', '.add', function() {
                $('.add_input').append(html);
            });
            $(document).on('click', '.remove', function() {
                $(this).closest('.parent').remove();
            });


// RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU (Please Attach Relevant Certificates of Service Experience)
              var html1='<div class="parent1">\
                <hr/>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="institute">Institution</label>\
                                            <input type="text" id="institute" name="institution[]"\
                                                class="form-control" placeholder="Institution"\
                                                aria-label="Institution">\
                                        </div>\
                                        <div class="col">\
                                            <label for="designation">Designation</label>\
                                            <input type="text" id="designation" name="designation[]"\
                                                class="form-control" placeholder="designation"\
                                                aria-label="designation">\
                                        </div>\
                                        <div class="col">\
                                            <label for="nature_appointment">Nature of appointment</label>\
                                            <input type="text" id="nature_appointment" name="nature_of_appointment[]"\
                                                class="form-control"\
                                                placeholder="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)"\
                                                aria-label="Nature of appointment (Regular/ Fixed term/Temporary/Ad-hoc/ Part_time)">\
                                        </div>\
                                        <div class="col">\
                                            <label for="nature_duties">Nature of Duties</label>\
                                            <input type="text" id="nature_duties" name="nature_of_duties[]"\
                                                class="form-control" placeholder="Nature of Duties"\
                                                aria-label="nature_duties">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="required_min_qualification">mininmum qualification</label>\
                                            <input type="text" id="required_min_qualification"\
                                                name="minimum_qualification_for_the_post[]" class="form-control"\
                                                placeholder="Institution" aria-label="required_min_qualification">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Pay_Scale">Pay_Scale / Pay band and AGP</label>\
                                            <input type="text" id="Pay_Scale" name="pay_scale_pay_band_and_agp[]"\
                                                class="form-control" placeholder="Pay_Scale / Pay band and AGP"\
                                                aria-label="Pay_Scale">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Remarks">Remarks</label>\
                                            <input type="text" id="Remarks" name="remark[]" class="form-control"\
                                                placeholder="Remarks" aria-label="Remarks">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Encl.No.">Encl.No.</label>\
                                            <input type="text" id="Encl.No." name="encl_no[]" class="form-control"\
                                                placeholder="Encl.No." aria-label="Encl.No.">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="required_min_qualification">Highest degree obtained</label>\
                                            <input type="text" id="required_min_qualification"\
                                                name="highest_degree_obtained[]" class="form-control"\
                                                placeholder="Institution" aria-label="required_min_qualification">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Duration">Duration</label>\
                                            <input type="date" id="From" name="duration_from[]" class="form-control"\
                                                placeholder="From" aria-label="From">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Duration"></label>\
                                            <input type="date" id="To" name="duration_to[]" class="form-control"\
                                                placeholder="To" aria-label="To">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Experience">Experience</label>\
                                            <input type="text" id="Year" name="experience_year[]" class="form-control"\
                                                placeholder="Year" aria-label="Year">\
                                        </div>\
                                        <div class="col-2">\
                                            <label for="Experience"></label>\
                                            <input type="text" id="Months" name="experience_months[]" class="form-control"\
                                                placeholder="Months" aria-label="Months">\
                                        </div>\
                                        <div class="col-1">\
                                            <button type="button" class="btn btn-danger remove1 mt-4">-</button>\
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
                                            <select class="form-select form-select-lg mb-3" name="level[]"\
                                                aria-label="Default select example">\
                                                <option selected disabled>Choose Level</option>\
                                               <option value="l10">Level 10</option>\
                                               <option value="l11">Level 11</option>\
                                            </select>\
                                        </div>\
                                        <div class="col">\
                                            <label for="Designation">Designation</label>\
                                            <input type="text" id="Designation" name="designation[]"\
                                                class="form-control" placeholder="Designation"\
                                                aria-label="Designation">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Pay">Pay Scale and AGP</label>\
                                            <input type="text" id="Pay" name="pay_scale_and_agp[]" class="form-control"\
                                                placeholder="Pay Scale and AGP" aria-label="Pay Scale and AGP">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Encl.No.">Encl.No.</label>\
                                            <input type="text" id="Encl.No." name="encl_no[]" class="form-control"\
                                                placeholder="Encl.No." aria-label="Encl.No.">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Remarks">Remarks</label>\
                                            <input type="text" id="Remarks" name="remarks[]" class="form-control"\
                                                placeholder="Remarks" aria-label="Remarks">\
                                        </div>\
                                    </div>\
                                    <div class="row g-3">\
                                        <div class="col">\
                                            <label for="Duration">Duration</label>\
                                            <input type="date" id="From" name="duration_from[]" class="form-control"\
                                                placeholder="From" aria-label="From">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Duration"></label>\
                                            <input type="date" id="To" name="duration_to[]" class="form-control"\
                                                placeholder="To" aria-label="To">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Experience">Experience (year)</label>\
                                            <input type="number" id="Year" name="experience_year[]" class="form-control"\
                                                placeholder="Year" aria-label="Year">\
                                        </div>\
                                        <div class="col">\
                                            <label for="Experience">Experience (Months)</label>\
                                            <input type="number" id="Months" name="experience_months[]" class="form-control"\
                                                placeholder="Months" aria-label="M\onths">\
                                        </div>\
                                        <div class="col-1">\
                                            <button type="button" class="btn btn-danger remove2 mt-4">-</button>\
                                        </div></div></div>';
            $(document).on('click', '.add2', function() {
                $('.add_input2').append(html2);
            });
            $(document).on('click', '.remove2', function() {
                $(this).closest('.parent2').remove();
            });
        
</script>
@endsection