@extends('layout.teacher_promotion', ['activeClass' => 4])
@section('content')
<fieldset>
    <form action="{{ route('promotion-form.step-4-store') }}" method="post" enctype="multipart/form-data">
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
                <div class="col">
                    <label class="fieldlabels">In Years :</label> <input type="text" required name="ug_pg_in_years" placeholder="In Years" value="{{ $user->step4->ug_pg_in_years??'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Period (from) : </label>
                    <input type="text" required name="ug_pg_from" placeholder="period_from" value="{{ $user->step4->ug_pg_from??'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">to</label> <input type="text" required name="ug_pg_to" placeholder="period_to" value="{{ $user->step4->ug_pg_to??'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels" id="teaching_file">File (Attachement)</label>
                    <input type="file"  name="teaching_file" placeholder="period_to" @isset($user->step4)
                    {{ $user->step4->file?'required':'' }} @endisset/>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <h2 class="fs-title">RESEARCH EXPERIENCE <small class="text-danger">(including M.Phil/Ph.D Duration)
                        </small>:</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="checkbox" name="" class="form-check" id="section2_check">
                </div>
            </div>
            <div class="row mt-3 border border-4 rounded rounded-5 p2 border-danger mb-5 p-3">
                <div class="col-4">
                    <label class="fieldlabels">Years Spent in (M.phil/Ph.D):</label> <input type="text" required name="mphil_phd_in_years" placeholder="Total Number of Years:" value="{{ $user->step4->mphil_phd_in_years??'' }}" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels">Period (from) : </label> <input type="text" required name="mphil_phd_from" placeholder="period_from" value="{{ $user->step4->mphil_phd_from??'' }}" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels"></label>Period (to)<input type="text" required name="mphil_phd_to" placeholder="period_to" value="{{ $user->step4->mphil_phd_to??'' }}" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels">Total Year Spent in M.Phil</label>
                    <input type="number" required name="years_spent_in_mphil" value="{{ $user->step4->years_spent_in_mphil??'' }}" placeholder="spent in M.Phil" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels">Total Year Spent in Ph.D</label>
                    <input type="number" required name="years_spent_in_phd" value="{{ $user->step4->years_spent_in_phd??'' }}" placeholder="spent in Ph.D" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels" id="research_file">File (Attachement)</label>
                    <input type="file"  name="research_file" placeholder="research_file" @isset($user->step4->file) value="{{ $user->step4->file?'required':'' }}" @endisset/>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Are you want to fill this Section
                    <input type="checkbox" name="" class="form-check check" id="section3_check">
                </div>
            </div>
            <div class="parerent3 border border-4 rounded rounded-5  border-danger mb-5 p-3">
                
                <div class="row mt-3 ">
                    <div class="col">

                        <label class="fieldlabels">Years Spent in:</label>
                        <select class="form-select form-select-lg mb-3" required name="type[]" aria-label=".form-select-lg example">
                            <option selected disabled>choose option...</option>
                            <option value="m_phil" @isset($user->step4_phdrecord[0])
                                @selected($user->step4_phdrecord[0]->type=='m_phil') @endisset>M. Phil.</option>
                            <option value="ph_d" @isset($user->step4_phdrecord[0])
                                @selected($user->step4_phdrecord[0]->type=='ph_d') @endisset>Ph.D.</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="fieldlabels">Period of</label>
                        <input type="text" required name="period_of_from[]" value="{{  !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->period_of_from:'' }}" placeholder="Period_of_from" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels"></label> <input type="text" required name="period_of_to[]" placeholder="period_of_to" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->period_of_to:'' }}" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Name of Institute/University</label>
                        <input type="text" required name="name_of_institute_university[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->name_of_institute_university:'' }}" placeholder="Name of Institute/University" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File</label>
                        <input type="file"  name="research_b[]" placeholder="Name of Institute/University"  @isset($user->step4_phdrecord[0]) {{ $user->step4_phdrecord[0]->file?'required':'' }} @endisset/>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label class="fieldlabels">Research Topic(Dissertation)</label>
                        <input type="text" required name="research_topic[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->research_topic:'' }}" placeholder="Research Topic(Dissertation)" />
                    </div>
                    <div class="col-4">
                        <label class="fieldlabels">Date of Notification of result</label>
                        <input type="text" required name="date_of_notification_result_conferring_the_degree[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->date_of_notification_result_conferring_the_degree:'' }}" placeholder="Date of Notification of result conferring the degree" />
                    </div>
                    <div class="col-2">
                        <label class="fieldlabels">Encl. No.</label>
                        <input type="text" required name="encl_no[]" value="{{ !empty($user->step4_phdrecord[0])?$user->step4_phdrecord[0]->encl_no:'' }}" placeholder="Encl. No." />
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-info add3 mt-4">+</button>
                    </div>
                </div>
                <div class="add_input3">

                    <div class="parerent3 ">
                        <hr />
                        @for($i=1;$i<count($user->step4_phdrecord);$i++ )
                            <div class="row mt-3 ">
                                <div class="col-3">

                                    <label class="fieldlabels">Years Spent in:</label>
                                    <select class="form-select form-select-lg mb-3" required name="type[]" aria-label=".form-select-lg example">
                                        <option value="" selected disabled>choose option...</option>
                                        <option value="m_phil" @isset($user->step4_phdrecord[$i])
                                            @selected($user->step4_phdrecord[$i]->type=='m_phil') @endisset>M. Phil.
                                        </option>
                                        <option value="ph_d" @isset($user->step4_phdrecord[$i])
                                            @selected($user->step4_phdrecord[$i]->type=='ph_d') @endisset>Ph.D.</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="fieldlabels">Period of</label>
                                    <input type="text" required name="period_of_from[]" value="{{  !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->period_of_from:'' }}" placeholder="Period_of_from" />
                                </div>
                                <div class="col-3">
                                    <label class="fieldlabels"></label> <input type="text" required name="period_of_to[]" placeholder="period_of_to" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->period_of_to:'' }}" />
                                </div>
                                <div class="col-3">
                                    <label class="fieldlabels">Name of Institute/University</label>
                                    <input type="text" required name="name_of_institute_university[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->name_of_institute_university:'' }}" placeholder="Name of Institute/University" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <label class="fieldlabels">Research Topic(Dissertation)</label>
                                    <input type="text" required name="research_topic[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->research_topic:'' }}" placeholder="Research Topic(Dissertation)" />
                                </div>
                                <div class="col-4">
                                    <label class="fieldlabels">Date of Notification of result</label>
                                    <input type="text" required name="date_of_notification_result_conferring_the_degree[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->date_of_notification_result_conferring_the_degree:'' }}" placeholder="Date of Notification of result conferring the degree" />
                                </div>
                                <div class="col-2">
                                    <label class="fieldlabels">Encl. No.</label>
                                    <input type="text" required name="encl_no[]" value="{{ !empty($user->step4_phdrecord[$i])?$user->step4_phdrecord[$i]->encl_no:'' }}" placeholder="Encl. No." />
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger remove3 mt-4">-</button>
                                </div>
                            </div>
                            @endfor


                    </div>
                </div>
            </div>
            @if ($user->step1->promotion_level =='1' || $user->step1->promotion_level =='2')
            <div class="row">
                <div class="col-12">
                    <h3 class="fs-title h3">Post Doctoral Research Experience as a research scientist, research
                        associate etc. (in yrs) :</h3>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-3">
                    Are you want to fill this form
            <input type="checkbox" name="" class="form-check" id="section4_check">
        </div>
        </div>
            <div class="row mt-3 border border-4 rounded rounded-5 p4 border-danger mb-5 p-3">
                <h3 class="fs-title h3">Years of Guiding Ph.D.: </h3>
                   
                @if ($user->step1->promotion_level =='1' || $user->step1->promotion_level =='2')
                <div class="col">
                    <label class="fieldlabels">Completed</label>
                    <input type="text" required name="years_of_guiding_completed" value="{{ $user->step4->years_of_guiding_completed??'' }}" placeholder="Completed" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Registered</label>
                    <input type="text" required name="years_of_guiding_registered" value="{{ $user->step4->years_of_guiding_registered??'' }}" placeholder="Registered" />
                </div>
                @else
                <div class="col">
                    <label class="fieldlabels">Ph.D.</label>
                    <input type="text" required name="years_of_guiding_phd" value="{{ $user->step4->years_of_guiding_phd??'' }}" placeholder="Ph.D" />
                </div>
                @endif

                <div class="col">
                    <label class="fieldlabels">File (Attachement)</label>
                    <input type="file"  name="pd_file" placeholder="Registered" />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Are you want to fill this form
            <input type="checkbox" name="" class="form-check" id="section5_check">
        </div>
            <div class="row mt-3 border border-4 rounded rounded-5  p5 border-danger mb-5 p-3">
                <h3 class="fs-title h3">Total No. of Papers Published:</h3>
                <div class="col">
                    <label class="fieldlabels">International Journals</label>
                    <input type="text" required name="papers_published_international_journals" value="{{ $user->step4->papers_published_international_journals??'' }}" placeholder="International Journals" />
                </div>
                <div class="col">
                    <label class="fieldlabels">National Journals</label>
                    <input type="text" required name="papers_published_national_journals" value="{{ $user->step4->papers_published_national_journals??'' }}" placeholder="National Journals" />
                </div>
                <div class="col">
                    <label class="fieldlabels">State Level Journals </label>
                    <input type="text" required name="papers_published_state_level_journals" value="{{ $user->step4->papers_published_state_level_journals??'' }}" placeholder="State Level Journals " />
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement)</label>
                    <input type="file"  name="paper_file" placeholder="Registered" />
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="fs-title h3">Total No. of Conferences/Seminars/Workshops Attended and papers presented:
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Are you want to fill this form
            <input type="checkbox" name="" class="form-check" id="section6_check">
        </div>
            <div class="border border-4 rounded rounded-5  border-danger p6 mb-5 p-3">
                <div class="row mt-2 ">
                    <h2 class="fs-title">i. International:</h2>
                    <div class="col">
                        <label class="fieldlabels">Attended</label>
                        <input type="text" required name="conferences_seminars_international_attended" value="{{ $user->step4->conferences_seminars_international_attended??'' }}" placeholder="Attended" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels"> Attended and Papers Presented</label>
                        <input type="text" required name="conferences_seminars_international_papers_presented" value="{{ $user->step4->conferences_seminars_international_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File (Attachement)</label>
                        <input type="file"  name="conference_international" placeholder="Registered" />
                    </div>
                </div>
                <div class="row mt-2">
                    <h2 class="fs-title">ii. National: </h2>
                    <div class="col">
                        <label class="fieldlabels">Attended</label>
                        <input type="text" required name="conferences_seminars_national_attended" value="{{ $user->step4->conferences_seminars_national_attended??'' }}" placeholder="Attended" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels"> Attended and Papers Presented</label>
                        <input type="text" required name="conferences_seminars_national_papers_presented" value="{{ $user->step4->conferences_seminars_national_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File (Attachement)</label>
                        <input type="file"  name="conference_national" placeholder="Registered" />
                    </div>
                </div>
                <div class="row mt-2">
                    <h2 class="fs-title">iii. State Level:</h2>
                    <div class="col">
                        <label class="fieldlabels">Attended</label>
                        <input type="text" required name="conferences_seminars__state_level_attended" value="{{ $user->step4->conferences_seminars__state_level_attended??'' }}" placeholder="Attended" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels"> Attended and Papers Presented</label>
                        <input type="text" required name="conferences_seminars__state_level_papers_presented" value="{{ $user->step4->conferences_seminars__state_level_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File (Attachement)</label>
                        <input type="file"  name="conference_state" placeholder="Registered" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label class="fieldlabels">Total:</label>
                        <input type="text" required name="papers_published_total" value="{{ $user->step4->papers_published_total??'' }}" placeholder="Total" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Attended</label>
                        <input type="text" required name="conferences_seminars_total_attended" value="{{ $user->step4->conferences_seminars_total_attended??'' }}" placeholder="Attended" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels"> Attended and Papers Presented</label>
                        <input type="text" required name="conferences_seminars_total_papers_presented" value="{{ $user->step4->conferences_seminars_total_papers_presented??'' }}" placeholder=" Attended and Papers Presented" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="fs-title h3">AWARDS /PRIZES/HONOURS/RECOGNITIONS :</h3>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Are you want to fill this form
            <input type="checkbox" name="" class="form-check" id="section7_check">
        </div>
            <div class="row mt-2 border border-4 rounded rounded-5 p7 border-danger mb-5 p-3">
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
                        <textarea class="form-control" required name="specialization_in_the_subject_discipline" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->step4->specialization_in_the_subject_discipline??''    }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        @isset($user->step) @if($user->step>=4)<a href="{{route('promotion-form.step-5')}}" class="action-button">Next</a> @endif @endisset

        <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

        <a type="button" href="{{ route('promotion-form.step-3') }}" class="action-button">Previous</a>
        
    </form>
</fieldset>
@endsection

@section('script')
<script>
    var html3 =
        '<div class="parerent3"><hr/>\
                                    <div class="row mt-3">\
                                    <div class="col-3">\
                                    <label class="fieldlabels">Years Spent in:</label>\
                                    <select class="form-select form-select-lg mb-3" required name="type[]" aria-label=".form-select-lg example">\
                                        <option selected disabled>choose option...</option>\
                                        <option value="m_phil">M. Phil.</option>\
                                        <option value="ph_d">Ph.D.</option>\
                                        </select>\
                                    </div><div class="col">\
                                    <label class="fieldlabels">Period of</label>\
                                    <input type="text" required name="period_of_from[]" placeholder="Period_of_from" />\
                                    </div><div class="col">\
                                    <label class="fieldlabels"></label> <input type="text" required name="period_of_to[]" placeholder="period_of_to" />\
                                    </div><div class="col">\
                                    <label class="fieldlabels">Name of Institute/University</label>\
                                    <input type="text" required name="name_of_institute_university[]" placeholder="Name of Institute/University" />\
                                    </div>\
                                    <div class="col">\
                                        <label class="fieldlabels" id="research_file">File (Attachement)</label> \
                                        <input type="file"  name="research_b[]" placeholder="research_file" />\
                                    </div>\
                                    </div><div class="row mt-3"><div class="col-4">\
                                    <label class="fieldlabels">Research Topic(Dissertation)</label>\
                                    <input type="text" required name="research_topic[]" placeholder="Research Topic(Dissertation)" />\
                                    </div><div class="col-4"><label class="fieldlabels">Date of Notification of result</label>\
                                    <input type="text" required name="date_of_notification_result_conferring_the_degree[]" placeholder="Date of Notification of result conferring the degree" />\
                                    </div><div class="col-2">\
                                    <label class="fieldlabels">Encl. No.</label>\
                                    <input type="text" required name="encl_no[]" placeholder="Encl. No." />\
                                    </div><div class="col-2"><button type="button" class="btn btn-danger remove3 mt-4">-</button></div></div></div>';
    $(document).on('click', '.add3', function() {
        $('.add_input3').append(html3);
    });
    $(document).on('click', '.remove3', function() {
        $(this).closest('.parerent3').remove();
    });
    $(document).on('click','#section2_check',function(){
        if($(this).is(':checked')){
            $('.p2').find('input').removeAttr('disabled');
        }
        else
        {
            $('.p2').find('input').attr('disabled','true');
        }
    });
    $(document).on('click','#section3_check',function(){
        if($(this).is(':checked')){
            $('.parerent3').find('input').removeAttr('disabled');
            $('.parerent3').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parerent3').find('input').attr('disabled','true');
            $('.parerent3').find('select').attr('disabled','true');
        }
    });
    $(document).on('click','#section4_check',function(){
        if($(this).is(':checked')){
            $('.p4').find('input').removeAttr('disabled');
        }
        else
        {
            $('.p4').find('input').attr('disabled','true');
        }
    });
    $(document).on('click','#section5_check',function(){
        if($(this).is(':checked')){
            $('.p5').find('input').removeAttr('disabled');
        }
        else
        {
            $('.p5').find('input').attr('disabled','true');
        }
    });
    $(document).on('click','#section6_check',function(){
        if($(this).is(':checked')){
            $('.p6').find('input').removeAttr('disabled');
        }
        else
        {
            $('.p6').find('input').attr('disabled','true');
        }
    });
    $(document).on('click','#section7_check',function(){
        if($(this).is(':checked')){
            $('.p7').find('textarea').removeAttr('disabled');
        }
        else
        {
            $('.p7').find('textarea').attr('disabled','true');
        }
    });

    $(document).ready(function(){
        @if(isset($user->step4->mphil_phd_in_years) and $user->step4->mphil_phd_in_years!=null)
        $('#section2_check').attr('checked',true);
        @else
        $('#section2_check').removeAttr('checked');
        $('.p2').find('input').attr('disabled',true);
        @endif

        @if(isset($user->step4_phdrecord) and count($user->step4_phdrecord)>0)
        $('#section3_check').attr('checked',true);
        @else
        $('#section3_check').removeAttr('checked');
        $('.parerent3').find('input').attr('disabled','true');
        $('.parerent3').find('select').attr('disabled','true');
        @endif


        // section 4
        @if(isset($user->step4->years_of_guiding_phd) and $user->step4->years_of_guiding_phd!=null)
        $('#section4_check').attr('checked',true);
        @else
        $('#section4_check').removeAttr('checked');
        $('.p4').find('input').attr('disabled','true');
        @endif

        //section 5
        @if(isset($user->step4->papers_published_international_journals) and $user->step4->papers_published_international_journals!=null)
        $('#section5_check').attr('checked',true);
        @else
        $('#section5_check').removeAttr('checked');
        $('.p5').find('input').attr('disabled','true');
        @endif

        //section 6
        @if(isset($user->step4->conferences_seminars_international_attended) and $user->step4->conferences_seminars_international_attended!=null)
        $('#section6_check').attr('checked',true);
        @else
        $('#section6_check').removeAttr('checked');
        $('.p6').find('input').attr('disabled','true');
        @endif

        //section 7
        @if(isset($user->step4->conferences_seminars_international_attended) and $user->step4->conferences_seminars_international_attended!=null)
        $('#section7_check').attr('checked',true);
        @else
        $('#section7_check').removeAttr('checked');
        $('.p7').find('textarea').attr('disabled','true');
        @endif
    });
</script>
@endsection