@extends('layout.teacher_promotion', ['activeClass' => 1])
@section('content')
    <fieldset>
        <form action="{{ route('promotion-form.step-1-store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-card">
            <div class="row">
                <div class="col-7">
                    <h2 class="fs-title">Application Information: </h2>
                </div>
                <div class="col-5">
                    <h2 class="steps">Step 1 - 10</h2>
                </div>
            </div>
            <label class="fieldlabels">Choose level for promotion :*</label>
            <select class="form-control" name="levels">
                <option selected disabled>--Select Level for Promotion--</option>
                <option value="1" @selected($user->step1->promotion_level??''==1)>Assistant Professor(Academic Level 10) to Assistant Professor (Senior
                    Scale/Academic Level 11)</option>
                <option value="2" @selected($user->step1->promotion_level??''==2)>Assistant Professor (Senior Scale/Academic Level 11) to Assistant Professor
                    (Selection
                    Grade/Academic Level 12)</option>
                <option value="3" @selected($user->step1->promotion_level??''==3)>Assistant Professor (Selection Grade/Academic Level 12) to Associate
                    Professor (Academic Level
                    13A)</option>
                <option value="4" @selected($user->step1->promotion_level??''==4)>Associate Professor (Academic Level 13A) to Professor (Academic Level 14)
                </option>
            </select>
            <div class="row">
                <div class="col-lg-10">
                <div class="row mt-3">
                    <div class="col-6">
                        <label class="fieldlabels">First Name: </label> <input type="text" name="first_name" value="{{ $user->step1->first_name??'' }}"
                            placeholder="Name" />
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">Last Name: </label> <input type="text" name="last_name" value="{{ $user->step1->last_name??'' }}"
                            placeholder="Department" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="fieldlabels">Department: </label> <input type="text" name="department" value="{{ $user->step1->department??'' }}"
                            placeholder="Department" />
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">College Name: </label> <input type="text" name="college_name" value="{{ $user->step1->college??'' }}"
                            placeholder="College Name" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="fieldlabels">Advertisement Reference No. :: </label> <input type="text" value="{{ $user->step1->notification_reference_no??'' }}"
                            name="advertisement_no" placeholder="Advertisement Reference No" />
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">Date: </label> <input type="date" name="date" value="{{ $user->step1->notification_reference_date??'' }}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="border border-dark mt-5 mb-3 " style="height:150px; width:130px">
                    <img @isset($user->step1) src="{{asset('storage/'.$user->step1->profile_image) }}" @endisset alt="Upload Your Pic" style="height: 100%; width:100%" id='profile_pic_img' >
                </div>
                    <input type="file"  onchange="image_upload(this)" name="profile_pic" accept="image/*" >
                    @error('profile_pic') <small class="text-danger"> {{ $message }} </small> @enderror
            </div>
            </div>
            <div style="border: 2px solid;padding:15px;">
                <div class="row">
                    <div class="col-2">
                        <label class="fieldlabels">Date of Appointment: </label> <input type="date"
                            name="date_of_appointment"  value="{{ $user->step1->date_of_appointment??'' }}"/>
                    </div>
                    <div class="col-2">
                        <label class="fieldlabels">Date of Confirmation: </label> <input type="date"
                            name="date_of_confirmation" value="{{ $user->step1->date_of_confirmation??'' }}" />
                    </div>
                    <div class="col-4">
                        <label class="fieldlabels">Period of Assessment for promotion: (From)
                        </label> <input type="date" name="assessment_period_for_promotion_from" value="{{ $user->step1->assessment_promotion_from??'' }}" />
                    </div>
                    <div class="col-4">
                        <label class="fieldlabels">Period of Assessment for promotion: (To) </label>
                        <input type="date" name="assessment_period_for_promotion_to" value="{{ $user->step1->assessment_promotion_to??'' }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label class="fieldlabels">Date of the Last Promotion </label> <input type="date"
                            name="date_of_last_promotion" value="{{ $user->step1->promotion_notification_date??'' }}" />

                    </div>
                    <div class="col-4">
                        <label class="fieldlabels">Notification No. of the Last Promotion </label>
                        <input type="text" name="last_promotion_notification_no"value="{{ $user->step1->promotion_notification_no??'' }}"
                            placeholder="Last Promotion Notification No." />
                    </div>
                    {{-- <div class="col-4">
                        <label class="fieldlabels">Period of Assessment for promotion: (To)
                        </label> <input type="date" name="assessment_period_for_promotion_to" />
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-8">
                        <label class="fieldlabels">Grade in Annual Performance Report of the last 3
                            years of the assessment period </label> <input type="text" name="grade_performance" value="{{ $user->step1->grade_annual_performance??'' }}" />

                    </div>
                    <div class="col-4">
                        <label class="fieldlabels">Total Academic / Research Scores </label> <input type="text"
                            name="research_score" value="{{ $user->step1->total_academic_research_scores??'' }}" />
                    </div>
                </div>
                <div class="row">
                    <p>
                        <b class="text-danger"> NOTE:</b> The research scores claimed by the applicant must be based on
                        objectively verifiable
                        criteria, and supported with documentary evidence. Research scores that
                        cannot be verified will not
                        be considered. PLEASE READ THE INSTRUCTIONS FOR EACH CATEGORY CAREFULLY,
                        AND FOLLOW THEM.
                    </p>
                </div>
            </div>

        </div>
        <input type="submit" name="next" class=" action-button" value="Next" />
    </form>
    </fieldset>
@endsection

@section('script')
<script>
    function image_upload(p){
        const file = p.files[0];
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            $('#profile_pic_img').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
    }
</script>
@endsection
