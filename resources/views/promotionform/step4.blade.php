@extends('layout.teacher_promotion')
@section('progress-width','40%')
@section('content')
<fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">TEACHING EXPERIENCE <small class="text-danger">(UG/PG)</small>:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 4 - 10</h2>
            </div>
        </div>
        <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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
                <h2 class="fs-title">RESEARCH EXPERIENCE <small class="text-danger">(including M.Phil/Ph.D Duration) </small>:</h2>
            </div>
        </div>
        <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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
       <div class="parerent3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-3 ">
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
    <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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
    <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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

    <div class="row mt-5">
        <div class="col-12">
            <h3 class="fs-title h3">Total No. of Conferences/Seminars/Workshops Attended and papers presented:
            </h3>
        </div>
    </div>
    <div class="border border-4 rounded rounded-5  border-danger mb-5 p-3">
    <div class="row mt-2 ">
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
</div>
    <div class="row">
        <div class="col-12">
            <h3 class="fs-title h3">AWARDS /PRIZES/HONOURS/RECOGNITIONS :</h3>
        </div>
    </div>
    <div class="row mt-2 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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
    <div class="row mt-2 border border-4 rounded rounded-5  border-danger mb-5 p-3">
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
@endsection

@section('script')
<script>
         var html3 ='<div class="parerent3"><hr/>\
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
                                    </div><div class="col-2"><button type="button" class="btn btn-danger remove3 mt-4">-</button></div></div></div>';
                                    $(document).on('click', '.add3', function() {
                                        $('.add_input3').append(html3);
                                    });
                                    $(document).on('click', '.remove3', function() {
                                        $(this).closest('.parerent3').remove();
                                    });
       
</script>
@endsection