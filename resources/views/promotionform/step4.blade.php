@extends('layout.teacher_promotion', ['activeClass' => 4])
@section('content')
<fieldset>
    <form action="{{ route('promotion-form.step-4-store') }}" method="post">
        @csrf
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
                    name="ug_pg_in_years" placeholder="In Years" value="{{ $user->step4->ug_pg_in_years??'' }}" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Period (from) : </label> 
                <input type="text" name="ug_pg_from" placeholder="period_from" value="{{ $user->step4->ug_pg_from??'' }}" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">to</label> <input type="text"
                    name="ug_pg_to" placeholder="period_to"  value="{{ $user->step4->ug_pg_to??'' }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">RESEARCH EXPERIENCE <small class="text-danger">(including M.Phil/Ph.D Duration) </small>:</h2>
            </div>
        </div>
        <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="col-4">
                <label class="fieldlabels">Years Spent in (M.phil/Ph.D):</label> <input type="text"
                    name="mphil_phd_in_years" placeholder="Total Number of Years:" value="{{ $user->step4->mphil_phd_in_years??'' }}" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Period (from) : </label> <input type="text"
                    name="mphil_phd_from" placeholder="period_from"  value="{{ $user->step4->mphil_phd_from??'' }}"/>
            </div>
            <div class="col-4">
                <label class="fieldlabels"></label>Period (to)<input type="text"
                    name="mphil_phd_to" placeholder="period_to" value="{{ $user->step4->mphil_phd_to??'' }}" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Total Year Spent in M.Phil</label>
                <input type="number" name="years_spent_in_mphil" value="{{ $user->step4->years_spent_in_mphil??'' }}" placeholder="spent in M.Phil" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Total Year Spent in Ph.D</label>
                <input type="number" name="years_spent_in_phd" value="{{ $user->step4->years_spent_in_phd??'' }}" placeholder="spent in Ph.D" />
            </div>
        </div>
       <div class="parerent3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-3 ">
            <div class="col-3">
                
                <label class="fieldlabels">Years Spent in:</label>
                <select class="form-select form-select-lg mb-3" name="type[]" aria-label=".form-select-lg example">
                    <option selected disabled>choose option...</option>
                    <option value="m_phil" @isset($user->step4_phdrecord[0]) @selected($user->step4_phdrecord[0]->type=='m_phil') @endisset>M. Phil.</option>
                    <option value="ph_d" @isset($user->step4_phdrecord[0]) @selected($user->step4_phdrecord[0]->type=='ph_d') @endisset>Ph.D.</option>
                  </select>
            </div>
             <div class="col-3">
                <label class="fieldlabels">Period of</label>
                <input type="text" name="period_of_from[]" value="{{  !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->period_of_from:'' }}" placeholder="Period_of_from" />
            </div>
            <div class="col-3">
                <label class="fieldlabels"></label> <input type="text"
                    name="period_of_to[]" placeholder="period_of_to" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->period_of_to:'' }}" />
            </div> 
            <div class="col-3">
                <label class="fieldlabels">Name of Institute/University</label>
                <input type="text" name="name_of_institute_university[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->name_of_institute_university:'' }}" placeholder="Name of Institute/University" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">Research Topic(Dissertation)</label>
                <input type="text" name="research_topic[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->research_topic:'' }}" placeholder="Research Topic(Dissertation)" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Date of Notification of result</label>
                 <input type="text" name="date_of_notification_result_conferring_the_degree[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->date_of_notification_result_conferring_the_degree:'' }}" placeholder="Date of Notification of result conferring the degree" />
            </div>
            <div class="col-2">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="encl_no[]"  value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->encl_no:'' }}" placeholder="Encl. No." />
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-info add3 mt-4">+</button>
            </div>
        </div> 
        <div class="add_input3">

<div class="parerent3 "><hr/>
    @for($i=1;$i<count($user->step4_phdrecord);$i++ )
        <div class="row mt-3 ">
            <div class="col-3">
                
                <label class="fieldlabels">Years Spent in:</label>
                <select class="form-select form-select-lg mb-3" name="type[]" aria-label=".form-select-lg example">
                    <option selected disabled>choose option...</option>
                    <option value="m_phil" @isset($user->step4_phdrecord[$i]) @selected($user->step4_phdrecord[$i]->type=='m_phil') @endisset>M. Phil.</option>
                    <option value="ph_d" @isset($user->step4_phdrecord[$i]) @selected($user->step4_phdrecord[$i]->type=='ph_d') @endisset>Ph.D.</option>
                  </select>
            </div>
             <div class="col-3">
                <label class="fieldlabels">Period of</label>
                <input type="text" name="period_of_from[]" value="{{  !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->period_of_from:'' }}" placeholder="Period_of_from" />
            </div>
            <div class="col-3">
                <label class="fieldlabels"></label> <input type="text"
                    name="period_of_to[]" placeholder="period_of_to" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->period_of_to:'' }}" />
            </div> 
            <div class="col-3">
                <label class="fieldlabels">Name of Institute/University</label>
                <input type="text" name="name_of_institute_university[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->name_of_institute_university:'' }}" placeholder="Name of Institute/University" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">Research Topic(Dissertation)</label>
                <input type="text" name="research_topic[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->research_topic:'' }}" placeholder="Research Topic(Dissertation)" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Date of Notification of result</label>
                 <input type="text" name="date_of_notification_result_conferring_the_degree[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->date_of_notification_result_conferring_the_degree:'' }}" placeholder="Date of Notification of result conferring the degree" />
            </div>
            <div class="col-2">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="encl_no[]"  value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->encl_no:'' }}" placeholder="Encl. No." />
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-danger remove3 mt-4">-</button>
            </div>
        </div> 
    @endfor
        
        
    </div>
        </div>
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
            <input type="text" name="years_of_guiding_completed"  value="{{ $user->step4->years_of_guiding_completed??'' }}" placeholder="Completed" />
        </div>
        <div class="col">
            <label class="fieldlabels">Registered</label>
            <input type="text" name="years_of_guiding_registered" value="{{ $user->step4->years_of_guiding_registered??'' }}" placeholder="Registered" />
        </div>
    </div>
    <div class="row mt-3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <h3 class="fs-title h3">Total No. of Papers Published:</h3>
        <div class="col">
            <label class="fieldlabels">International Journals</label>
            <input type="text" name="papers_published_international_journals" value="{{ $user->step4->papers_published_international_journals??'' }}" placeholder="International Journals" />
        </div>
        <div class="col">
            <label class="fieldlabels">National Journals</label>
            <input type="text" name="papers_published_national_journals" value="{{ $user->step4->papers_published_national_journals??'' }}" placeholder="National Journals" />
        </div>
        <div class="col">
            <label class="fieldlabels">State Level Journals </label>
            <input type="text" name="papers_published_state_level_journals" value="{{ $user->step4->papers_published_state_level_journals??'' }}" placeholder="State Level Journals " />
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
            <input type="text" name="conferences_seminars_international_attended" value="{{ $user->step4->conferences_seminars_international_attended??'' }}" placeholder="Attended" />
        </div>
        <div class="col">
            <label class="fieldlabels"> Attended and Papers Presented</label>
            <input type="text" name="conferences_seminars_international_papers_presented" value="{{ $user->step4->conferences_seminars_international_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
        </div>
    </div>
    <div class="row mt-2">
        <h2 class="fs-title">ii. National: </h2>
        <div class="col">
            <label class="fieldlabels">Attended</label>
            <input type="text" name="conferences_seminars_national_attended" value="{{ $user->step4->conferences_seminars_national_attended??'' }}" placeholder="Attended" />
        </div>
        <div class="col">
            <label class="fieldlabels"> Attended and Papers Presented</label>
            <input type="text" name="conferences_seminars_national_papers_presented" value="{{ $user->step4->conferences_seminars_national_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
        </div>
    </div>
    <div class="row mt-2">
        <h2 class="fs-title">iii. State Level:</h2>
        <div class="col">
            <label class="fieldlabels">Attended</label>
            <input type="text" name="conferences_seminars__state_level_attended" value="{{ $user->step4->conferences_seminars__state_level_attended??'' }}" placeholder="Attended" />
        </div>
        <div class="col">
            <label class="fieldlabels"> Attended and Papers Presented</label>
            <input type="text" name="conferences_seminars__state_level_papers_presented" value="{{ $user->step4->conferences_seminars__state_level_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <label class="fieldlabels">Total:</label>
            <input type="text" name="papers_published_total" value="{{ $user->step4->papers_published_total??'' }}" placeholder="Total" />
        </div>
        <div class="col">
            <label class="fieldlabels">Attended</label>
            <input type="text" name="conferences_seminars_total_attended" value="{{ $user->step4->conferences_seminars_total_attended??'' }}" placeholder="Attended" />
        </div>
        <div class="col">
            <label class="fieldlabels"> Attended and Papers Presented</label>
            <input type="text" name="conferences_seminars_total_papers_presented" value="{{ $user->step4->conferences_seminars_total_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name='awards_prizes_honours_recognitions'>{{ $user->step4->awards_prizes_honours_recognitions??'' }}</textarea>
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
                <textarea class="form-control" name="specialization_in_the_subject_discipline" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->step4->specialization_in_the_subject_discipline??''    }}</textarea>
            </div>
        </div>
    </div>
    </div>
    <input type="submit" name="next" class="action-button" value="Next" />
</form>
    {{-- <input type="button" name="next" class="action-button" value="Next" /> --}}
    {{-- <a type="button" href="{{ route('promotion-form.step-5') }}" class="action-button">Next</a> --}}
<a type="button" href="{{ route('promotion-form.step-3') }}" class="action-button">Previous</a>
</fieldset>
@endsection

@section('script')
<script>
         var html3 ='<div class="parerent3"><hr/>\
                                    <div class="row mt-3">\
                                    <div class="col-3">\
                                    <label class="fieldlabels">Years Spent in:</label>\
                                    <select class="form-select form-select-lg mb-3" name="type[]" aria-label=".form-select-lg example">\
                                        <option selected disabled>choose option...</option>\
                                        <option value="m_phil">M. Phil.</option>\
                                        <option value="ph_d">Ph.D.</option>\
                                        </select>\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels">Period of</label>\
                                    <input type="text" name="period_of_from[]" placeholder="Period_of_from" />\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels"></label> <input type="text" name="period_of_to[]" placeholder="period_of_to" />\
                                    </div><div class="col-3">\
                                    <label class="fieldlabels">Name of Institute/University</label>\
                                    <input type="text" name="name_of_institute_university[]" placeholder="Name of Institute/University" />\
                                    </div></div><div class="row mt-3"><div class="col-4">\
                                    <label class="fieldlabels">Research Topic(Dissertation)</label>\
                                    <input type="text" name="research_topic[]" placeholder="Research Topic(Dissertation)" />\
                                    </div><div class="col-4"><label class="fieldlabels">Date of Notification of result</label>\
                                    <input type="text" name="date_of_notification_result_conferring_the_degree[]" placeholder="Date of Notification of result conferring the degree" />\
                                    </div><div class="col-2">\
                                    <label class="fieldlabels">Encl. No.</label>\
                                    <input type="text" name="encl_no[]" placeholder="Encl. No." />\
                                    </div><div class="col-2"><button type="button" class="btn btn-danger remove3 mt-4">-</button></div></div></div>';
                                    $(document).on('click', '.add3', function() {
                                        $('.add_input3').append(html3);
                                    });
                                    $(document).on('click', '.remove3', function() {
                                        $(this).closest('.parerent3').remove();
                                    });

</script>
@endsection
