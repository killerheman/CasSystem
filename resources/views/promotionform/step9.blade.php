@extends('layout.teacher_promotion', ['activeClass' => 9])
@section('content')

<form action="{{ route('promotion-form.step-9-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">(a) PATENTS
            </div>
            <div class="col-5">
                <h2 class="steps">Step 9 - 10</h2>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-3">Are you want to fill this section ? </div>
            <div class="col-2">
                <input type="checkbox" name="" class="form-check" id="section1_check" @if(isset($patents) and count($patents)>0) checked @endif>
            </div>
        </div>
        <div class="main border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">Details of Patent </label> <input type="text" required name="details_of_patents_or_policy_document[]" placeholder="Details of Patent " @isset($patents[0]) value="{{ $patents[0]->details_of_patents_or_policy_document??'' }}" @endisset>
                </div>
                <div class="col">
                    <label class="fieldlabels">International/National</label> <input type="text" required name="international_national_state[]" @isset($patents[0]) value="{{ $patents[0]->international_national_state??'' }}" @endisset placeholder="International/National " />
                </div>
                <div class="col">
                    <label class="fieldlabels">Year</label> <input type="text" required name="year[]" placeholder="Year" @isset($patents[0]) value="{{ $patents[0]->year??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" required name="claimed_score[]" placeholder="Claimed Score" @isset($patents[0]) value="{{ $patents[0]->claimed_score??'' }}" @endisset />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">Verified by the Committee</label>
                    <input type="text" required name="verify_by_committee[]" placeholder="Verified by the Committee" @isset($patents[0]) value="{{ $patents[0]->verify_by_committee??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" required name="encl_no[]" @isset($patents[0]) value="{{ $patents[0]->encl_no??'' }}" @endisset placeholder="Encl. No." />
                </div>
                <div class="col">
                    <label class="fieldlabels">File </label>
                    <input type="file"  name="patent_file[]" @isset($patents[0]) {{ $patents[0]->file?'required':'' }} @endisset placeholder="Encl. No." />
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-info add13 mt-4">+</button>
                </div>
            </div>
            <hr>
            <div class="add_input13">
                @isset($patents)
                @for($j=1;$j<count($patents);$j++) <div class="main ">
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Details of Patent </label> <input type="text" required name="details_of_patents_or_policy_document[]" placeholder="Details of Patent " @isset($patents[$j]) value="{{ $patents[$j]->details_of_patents_or_policy_document??'' }}" @endisset>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">International/National</label> <input type="text" required name="international_national_state[]" @isset($patents[$j]) value="{{ $patents[$j]->international_national_state??'' }}" @endisset placeholder="International/National " />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Year</label> <input type="text" required name="year[]" placeholder="Year" @isset($patents[$j]) value="{{ $patents[$j]->year??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label>
                            <input type="number" required name="claimed_score[]" placeholder="Claimed Score" @isset($patents[$j]) value="{{ $patents[$j]->claimed_score??'' }}" @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="verify_by_committee[]" placeholder="Verified by the Committee" @isset($patents[$j]) value="{{ $patents[$j]->verify_by_committee??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="encl_no[]" @isset($patents[$j]) value="{{ $patents[$j]->encl_no??'' }}" @endisset placeholder="Encl. No." />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File </label>
                            <input type="file"  name="patent_file[]" @isset($patents[$j]) {{ $patents[$j]->file?'required':'' }} @endisset placeholder="Encl. No." />
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger remove13 mt-4">-</button>
                        </div>
                    </div>
                    <hr>

            </div>

            @endfor
            @endisset
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title">(b) *Policy Document (Submitted to an International body/organization like
                UNO/UNESCO/World Bank/International Monetary Fund etc. or Central Government or State
                Government)
            </h2>
        </div>
    </div>
    <div class="row">
            
        <div class="col-3">Are you want to fill this section ? </div>
        <div class="col-2">
            <input type="checkbox" name="" class="form-check" id="section2_check" @if(isset($policies) and count($policies)>0) checked @endif>
        </div>
    </div>
    <div class="parent14 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Details of Policy Document</label> <input type="text" required name="details_of_patents_or_policy_document_b[]" placeholder="Details of Policy Document" @isset($policies[0]) value="{{ $policies[0]->details_of_patents_or_policy_document??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">International /National /State</label>
                <input type="text" required name="international_national_state_b[]" placeholder="International/National /State" @isset($policies[0]) value="{{ $policies[0]->international_national_state??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Year</label> <input type="text" required name="year_b[]" placeholder="Year" @isset($policies[0]) value="{{ $policies[0]->year??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="number" required name="claimed_score_b[]" placeholder="Claimed Score" @isset($policies[0]) value="{{ $policies[0]->claimed_score??'' }}" @endisset />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="verify_by_committee_b[]" placeholder="Verified by the Committee" @isset($policies[0]) value="{{ $policies[0]->verify_by_committee??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_b[]" placeholder="Encl. No." @isset($policies[0]) value="{{ $policies[0]->encl_no??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">File </label>
                <input type="file"  name="file_b[]" placeholder="Encl. No." @isset($policies[0]) value="{{ $policies[0]->file?'required':'' }}" @endisset />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add14 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input14">
            @isset($policies)
            @for($j=1;$j<count($policies);$j++) <div class="parent14 ">
                <div class="row mt-5">
                    <div class="col">
                        <label class="fieldlabels">Details of Policy Document</label> <input type="text" required name="details_of_patents_or_policy_document_b[]" placeholder="Details of Policy Document" @isset($policies[$j]) value="{{ $policies[$j]->details_of_patents_or_policy_document??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">International /National /State</label>
                        <input type="text" required name="international_national_state_b[]" placeholder="International/National /State" @isset($policies[$j]) value="{{ $policies[$j]->international_national_state??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Year</label> <input type="text" required name="year_b[]" placeholder="Year" @isset($policies[$j]) value="{{ $policies[$j]->year??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Claimed Score</label> <input type="number" required name="claimed_score_b[]" placeholder="Claimed Score" @isset($policies[$j]) value="{{ $policies[$j]->claimed_score??'' }}" @endisset />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label class="fieldlabels">Verified by the Committee</label>
                        <input type="text" required name="verify_by_committee_b[]" placeholder="Verified by the Committee" @isset($policies[$j]) value="{{ $policies[$j]->verify_by_committee??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Encl. No.</label>
                        <input type="text" required name="encl_no_b[]" placeholder="Encl. No." @isset($policies[$j]) value="{{ $policies[$j]->encl_no??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File </label>
                        <input type="file"  name="file_b[]" placeholder="Encl. No." @isset($policies[$j]) value="{{ $policies[$j]->file?'required':'' }}" @endisset />
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger remove14 mt-4">-</button>
                    </div>
                </div>
                <hr>
        </div>
        @endfor
        @endisset
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title">(c) Awards/Fellowship
            </h2>
        </div>
    </div>
    <div class="row">
            
        <div class="col-3">Are you want to fill this section ? </div>
        <div class="col-2">
            <input type="checkbox" name="" class="form-check" id="section3_check" @if(isset($user->step9_b) and count($user->step9_b)>0) checked @endif>
        </div>
    </div>
    <div class="parent15 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Name of the Award / Fellowship </label>
                <input type="text" required name="name_of_the_award_followship[]" placeholder="Name of the Award / Fellowship " @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->name_of_the_award_followship }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Awarding Institute/Organization</label> <input type="text" required name="awarding_institute_organization[]" placeholder="Awarding Institute/Organization" @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->awarding_institute_organization }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">International/ National</label> <input type="text" required name="international_national_state[]" placeholder="International/ National" @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->international_national_state }}" @endisset/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Date Awarded </label>
                <input type="text" required name="date_awarded[]" placeholder="Grant Sanctioned" @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->date_awarded }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="claimed_score[]" placeholder="Claimed Score" @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->claimed_score }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="verify_by_committee[]" placeholder="Verified by the Committee" @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->verify_by_committee }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no[]" placeholder="Encl. No." @isset($user->step9_b[0]) value="{{ $user->step9_b[0]->encl_no }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">File </label>
                <input type="file"  name="award_file_b[]" placeholder="Encl. No." @isset($user->step9_b[0]) {{ $user->step9_b[0]->file?'required':'' }} @endisset />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add15 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input15">
            @isset($user->step9_b)
            @for($j=1;$j<count($user->step9_b);$j++)
                <div class="parent15">
                    <div class="row mt-5">
                        <div class="col">
                            <label class="fieldlabels">Name of the Award / Fellowship </label>
                            <input type="text" required name="name_of_the_award_followship[]" placeholder="Name of the Award / Fellowship " @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->name_of_the_award_followship }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Awarding Institute/Organization</label> <input type="text" required name="awarding_institute_organization[]" placeholder="Awarding Institute/Organization" @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->awarding_institute_organization }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">International/ National</label> <input type="text" required name="international_national_state[]" placeholder="International/ National" @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->international_national_state }}" @endisset/>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Date Awarded </label>
                            <input type="text" required name="date_awarded[]" placeholder="Grant Sanctioned" @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->date_awarded }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label>
                            <input type="number" required name="claimed_score[]" placeholder="Claimed Score" @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->claimed_score }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="verify_by_committee[]" placeholder="Verified by the Committee" @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->verify_by_committee }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="encl_no[]" placeholder="Encl. No." @isset($user->step9_b[$j]) value="{{ $user->step9_b[$j]->encl_no }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File </label>
                            <input type="file"  name="award_file_b[]" placeholder="Encl. No." @isset($user->step9_b[$j]) {{ $user->step9_b[$j]->file?'required':'' }} @endisset />
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger remove15 mt-4">-</button>
                        </div>
                    </div>
                    <hr>

                </div>
                @endfor
                @endisset

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title">*INVITED LECTURES / RESOURCE PERSON/ PAPER PRESENTATION IN SEMINARS/
                CONFERENCES/FULL PAPER IN CONFERENCE PROCEEDINGS (Paper presented in
                Seminars/Conferences and also published as full paper in Conference Proceedings will be
                counted only once)
            </h2>
        </div>
    </div>
    
    <div class="parent16 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Title</label>
                <input type="text" required name="inv_title[]" placeholder="Title" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->title??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Event</label> <input type="text" required name="name_of_the_event[]" placeholder="Name of the Event" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->name_of_the_event??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Invited/Oral/Poster</label> <input type="text" required name="invited_or_al_poster[]" placeholder="Invited/Oral/Poster" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->invited_or_al_poster??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Organiser/Institute</label>
                <input type="text" required name="organiser_institute[]" placeholder="Organiser/Institute" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->organiser_institute??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Duration</label>
                <input type="text" required name="duration[]" placeholder="Duration" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->duration??'' }}" @endisset />
            </div>
        </div>
        <div class="row mt-2">

            <div class="col">
                <label class="fieldlabels">International(Abroad)/Internation al(within country) / National / State / University level</label>
                <input type="text" required name="international_national_state[]" placeholder="International(Abroad)/Internation al(within  country) / National / State / University level" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->international_national_state??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="inv_claimed_score[]" placeholder="Claimed Score" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->claimed_score??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="inv_verify_by_committee[]" placeholder="Verified by the Committee" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->verify_by_committee??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="inv_encl_no[]" placeholder="Encl. No." @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->encl_no??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label>
                <input type="file"  name="inv_file[]" @isset($user->step9_c[0]) value="{{ $user->step9_c[0]->file?'required':'' }}" @endisset
                placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add16 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input16">
            @isset($user->step9_c)
            @for($k=1;$k<count($user->step9_c);$k++)
                <div class="parent16 border border-4 rounded rounded-5  border-danger mb-5 p-3">
                    <div class="row mt-5">
                        <div class="col">
                            <label class="fieldlabels">Title</label>
                            <input type="text" required name="inv_title[]" placeholder="Title" @isset($user->step9_c) value="{{ $user->step9_c[$k]->title??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Name of the Event</label> <input type="text" required name="name_of_the_event[]" placeholder="Name of the Event" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->name_of_the_event??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Invited/Oral/Poster</label> <input type="text" required name="invited_or_al_poster[]" placeholder="Invited/Oral/Poster" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->invited_or_al_poster??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Organiser/Institute</label>
                            <input type="text" required name="organiser_institute[]" placeholder="Organiser/Institute" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->organiser_institute??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Duration</label>
                            <input type="text" required name="duration[]" placeholder="Duration" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->duration??'' }}" @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col">
                            <label class="fieldlabels">International(Abroad)/Internation al(within country) / National / State / University level</label>
                            <input type="text" required name="international_national_state[]" placeholder="International(Abroad)/Internation al(within  country) / National / State / University level" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->international_national_state??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label>
                            <input type="number" required name="inv_claimed_score[]" placeholder="Claimed Score" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->claimed_score??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="inv_verify_by_committee[]" placeholder="Verified by the Committee" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->verify_by_committee??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="inv_encl_no[]" placeholder="Encl. No." @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->encl_no??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File</label>
                            <input type="file"  name="inv_file[]" @isset($user->step9_c[$k]) value="{{ $user->step9_c[$k]->file?'required':'' }}" @endisset
                            placeholder="Encl. No." />
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger remove16 mt-4">-</button>
                        </div>
                    </div>
                    <hr>
                </div>
                @endfor
                @endisset

        </div>
    </div>
    </div>
    @isset($user->step) @if($user->step>=9)<a href="{{route('promotion-form.step-10')}}" class="action-button">Next</a>
    @endif @endisset

    <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-8') }}" class="action-button">Previous</a>
</form>
@endsection


@section('script')
<script>
    $(document).ready(function() {

        $(".submit").click(function() {
            return false;
        })
        var html13 = `
        <div class="main">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Details of Patent </label> <input type="text"
                    required name="details_of_patents_or_policy_document[]" placeholder="Details of Patent " />
            </div>
            <div class="col">
                <label class="fieldlabels">International/National</label> <input type="text"
                    required name="international_national_state[]" placeholder="International/National " />
            </div>
            <div class="col">
                <label class="fieldlabels">Year</label> <input type="text"
                    required name="year[]" placeholder="Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                 <input type="number" required name="claimed_score[]" placeholder="Claimed Score" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="verify_by_committee[]" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col">
                <label class="fieldlabels">File </label>
                <input type="file"  name="patent_file[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove13 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
        `;
        $(document).on('click', '.add13', function() {
            $('.add_input13').append(html13);
        });
        $(document).on('click', '.remove13', function() {
            $(this).closest('.main').remove();
        });
        var html14 = `
        
    <div class="parent14">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Details of Policy Document</label> <input type="text"
                    required name="details_of_patents_or_policy_document_b[]" placeholder="Details of Policy Document" />
            </div>
            <div class="col">
                <label class="fieldlabels">International /National /State</label>
                 <input type="text" required name="international_national_state_b[]" placeholder="International/National /State" />
            </div>
            <div class="col">
                <label class="fieldlabels">Year</label> <input type="text" required name="year_b[]" placeholder="Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="number" required name="claimed_score_b[]" placeholder="Claimed Score" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="verify_by_committee_b[]" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_b[]" placeholder="Encl. No." />
            </div>
            <div class="col">
                <label class="fieldlabels">File </label>
                <input type="file"  name="file_b[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove14 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
        `;
        $(document).on('click', '.add14', function() {
            $('.add_input14').append(html14);
        });
        $(document).on('click', '.remove14', function() {
            $(this).closest('.parent14').remove();
        });
        var html15 = ` 
        <div class="parent15">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Name of the Award / Fellowship </label>
                <input type="text" required name="name_of_the_award_followship[]" placeholder="Name of the Award / Fellowship " />
            </div>
            <div class="col">
                <label class="fieldlabels">Awarding Institute/Organization</label> <input
                    type="text" required name="awarding_institute_organization[]"
                    placeholder="Awarding Institute/Organization" />
            </div>
            <div class="col">
                <label class="fieldlabels">International/ National</label> <input type="text"
                    required name="international_national_state[]" placeholder="International/ National" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Date Awarded </label>
                <input type="text" required name="date_awarded[]"
                    placeholder="Grant Sanctioned" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="claimed_score[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="verify_by_committee[]"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no[]" placeholder="Encl. No." />
            </div>
            <div class="col">
                <label class="fieldlabels">File </label>
                <input type="file"  name="award_file_b[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove15 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
        `;
        $(document).on('click', '.add15', function() {
            $('.add_input15').append(html15);
        });
        $(document).on('click', '.remove15', function() {
            $(this).closest('.parent15').remove();
        });

        var html16 = `
        <div class="parent16 ">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Title</label>
                <input type="text" required name="inv_title[]" placeholder="Title" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Event</label> <input
                    type="text" required name="name_of_the_event[]"
                    placeholder="Name of the Event"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Invited/Oral/Poster</label> <input type="text"
                    required name="invited_or_al_poster[]" placeholder="Invited/Oral/Poster" />
            </div>
            <div class="col">
                <label class="fieldlabels">Organiser/Institute</label>
                <input type="text" required name="organiser_institute[]"
                    placeholder="Organiser/Institute" />
            </div>
            <div class="col">
                <label class="fieldlabels">Duration</label>
                <input type="text" required name="duration[]" placeholder="Duration" />
            </div>
        </div>
        <div class="row mt-2">

            <div class="col">
                <label class="fieldlabels">International(Abroad)/Internation al(within  country) / National / State / University level</label>
                <input type="text" required name="international_national_state[]"
                    placeholder="International(Abroad)/Internation al(within  country) / National / State / University level" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" required name="inv_claimed_score[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="inv_verify_by_committee[]" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="inv_encl_no[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label>
                <input type="file"  name="inv_file[]"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove16 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
        `;
        $(document).on('click', '.add16', function() {
            $('.add_input16').append(html16);
        });
        $(document).on('click', '.remove16', function() {
            $(this).closest('.parent16').remove();
        });
    });
      //section 1
      $(document).on('click','#section1_check',function(){
        if($(this).is(':checked')){
            $('.main').find('input').removeAttr('disabled');
            $('.main').find('select').removeAttr('disabled');
        }
        else
        {
            $('.main').find('input').attr('disabled','true');
            $('.main').find('select').attr('disabled','true');
        }
    });

      //section 2
      $(document).on('click','#section2_check',function(){
        if($(this).is(':checked')){
            $('.parent14').find('input').removeAttr('disabled');
            $('.parent14').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parent14').find('input').attr('disabled','true');
            $('.parent14').find('select').attr('disabled','true');
        }
    });

     //section 3
     $(document).on('click','#section3_check',function(){
        if($(this).is(':checked')){
            $('.parent15').find('input').removeAttr('disabled');
            $('.parent15').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parent15').find('input').attr('disabled','true');
            $('.parent15').find('select').attr('disabled','true');
        }
    });

     //on dynamic data comes 
     @if(isset($patents) and count($patents)>0)
    @else 
    $('.main').find('input').attr('disabled','true');
    $('.main').find('select').attr('disabled','true');
    @endif
    @if(isset($policies) and count($policies)>0)
    @else 
    $('.parent14').find('input').attr('disabled','true');
    $('.parent14').find('select').attr('disabled','true');
    @endif
    @if(isset($user->step9_b) and count($user->step9_b)>0)
    @else 
    $('.parent15').find('input').attr('disabled','true');
    $('.parent15').find('select').attr('disabled','true');
    @endif
</script>
@endsection