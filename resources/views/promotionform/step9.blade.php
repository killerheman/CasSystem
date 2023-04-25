@extends('layout.teacher_promotion', ['activeClass' => 9])
@section('content')

<div class="form-card">
    <div class="row">
        <div class="col-7">
            <h2 class="fs-title">(a) PATENTS
        </div>
        <div class="col-5">
            <h2 class="steps">Step 9 - 10</h2>
        </div>
    </div>
    <div class="main border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Details of Patent </label> <input type="text"
                    name="Details_of_Patent " placeholder="Details of Patent " />
            </div>
            <div class="col">
                <label class="fieldlabels">International/National</label> <input type="text"
                    name="International_National" placeholder="International/National " />
            </div>
            <div class="col">
                <label class="fieldlabels">Year</label> <input type="text"
                    name="Year" placeholder="Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                 <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add13 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input13"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title">(b) *Policy Document (Submitted to an International body/organization like
                UNO/UNESCO/World Bank/International Monetary Fund etc. or Central Government or State
                Government)
            </h2>
        </div>
    </div>
    <div class="parent14 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Details of Policy Document</label> <input type="text"
                    name="Details_of_Policy_Document" placeholder="Details of Policy Document" />
            </div>
            <div class="col">
                <label class="fieldlabels">International /National /State</label>
                 <input type="text" name="International_National_State" placeholder="International/National /State" />
            </div>
            <div class="col">
                <label class="fieldlabels">Year</label> <input
                    type="text" name="Year"
                    placeholder="Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="text"
                    name="Claimed_Score" placeholder="Claimed Score" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add14 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input14"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title">(c) Awards/Fellowship
            </h2>
        </div>
    </div>
    <div class="parent15 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Name of the Award / Fellowship </label>
                <input type="text" name="Name_of_the_Award_Fellowship" placeholder="Name of the Award / Fellowship " />
            </div>
            <div class="col">
                <label class="fieldlabels">Awarding Institute/Organization</label> <input
                    type="text" name="Awarding_Institute_Organization"
                    placeholder="Awarding Institute/Organization" />
            </div>
            <div class="col">
                <label class="fieldlabels">International/ National</label> <input type="text"
                    name="International_National" placeholder="International/ National" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Date Awarded </label>
                <input type="text" name="Grant_Sanctioned"
                    placeholder="Grant Sanctioned" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add15 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input15"></div>
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
                <input type="text" name="Title" placeholder="Title" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Event</label> <input
                    type="text" name="Name_of_the_Event"
                    placeholder="Name of the Event"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Invited/Oral/Poster</label> <input type="text"
                    name="Invited_Oral_Poster" placeholder="Invited/Oral/Poster" />
            </div>
            <div class="col">
                <label class="fieldlabels">Organiser/Institute</label>
                <input type="text" name="Organiser_Institute"
                    placeholder="Organiser/Institute" />
            </div>
            <div class="col">
                <label class="fieldlabels">Duration</label>
                <input type="text" name="duration" placeholder="Duration" />
            </div>
        </div>
        <div class="row mt-2">

            <div class="col">
                <label class="fieldlabels">International(Abroad)/Internation al(within  country) / National / State / University level</label>
                <input type="text" name="International(Abroad)_Internation_al(within_country_National_State_University_level"
                    placeholder="International(Abroad)/Internation al(within  country) / National / State / University level" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No"
                    placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add16 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input16"></div>
    </div>
</div>
{{-- <input type="button" name="next" class="action-button" value="Next" /> --}}
<a type="button" href="{{ route('promotion-form.step-10') }}" class="action-button">Next</a>
<a type="button" href="{{ route('promotion-form.step-8') }}" class="action-button">Previous</a>
@endsection


@section('script')
<script>
    $(document).ready(function() {

        $(".submit").click(function() {
            return false;
        })
        var html13 = `<div class="main">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Details of Patent </label> <input type="text"
                                            name="Details_of_Patent " placeholder="Details of Patent " />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">International/National</label> <input type="text"
                                            name="International_National" placeholder="International/National " />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Year</label> <input type="text"
                                            name="Year" placeholder="Year" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                         <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No"
                                            placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove13 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add13', function() {
            $('.add_input13').append(html13);
        });
        $(document).on('click', '.remove13', function() {
            $(this).closest('.main').remove();
        });
        var html14 = `<div class="parent14">
                                <div class="row mt-5">
                                    <div class="col">
                                        <label class="fieldlabels">Details of Policy Document</label> <input type="text"
                                            name="Details_of_Policy_Document" placeholder="Details of Policy Document" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">International /National /State</label>
                                         <input type="text" name="International_National_State" placeholder="International/National /State" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Year</label> <input
                                            type="text" name="Year"
                                            placeholder="Year" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label> <input type="text"
                                            name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee"
                                            placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove14 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add14', function() {
            $('.add_input14').append(html14);
        });
        $(document).on('click', '.remove14', function() {
            $(this).closest('.parent14').remove();
        });
        var html15 = ` <div class="parent15">
                                <div class="row mt-5">
                                    <div class="col">
                                        <label class="fieldlabels">Name of the Award / Fellowship </label>
                                        <input type="text" name="Name_of_the_Award_Fellowship" placeholder="Name of the Award / Fellowship " />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Awarding Institute/Organization</label> <input
                                            type="text" name="Awarding_Institute_Organization"
                                            placeholder="Awarding Institute/Organization" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">International/ National</label> <input type="text"
                                            name="International_National" placeholder="International/ National" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Date Awarded </label>
                                        <input type="text" name="Grant_Sanctioned"
                                            placeholder="Grant Sanctioned" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                        <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee"
                                            placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove15 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add15', function() {
            $('.add_input15').append(html15);
        });
        $(document).on('click', '.remove15', function() {
            $(this).closest('.parent15').remove();
        });

        var html16 = `<div class="parent16">
                                <div class="row mt-5">
                                    <div class="col">
                                        <label class="fieldlabels">Title</label>
                                        <input type="text" name="Title" placeholder="Title" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Name of the Event</label> <input
                                            type="text" name="Name_of_the_Event"
                                            placeholder="Name of the Event"/>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Invited/Oral/Poster</label> <input type="text"
                                            name="Invited_Oral_Poster" placeholder="Invited/Oral/Poster" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Organiser/Institute</label>
                                        <input type="text" name="Organiser_Institute"
                                            placeholder="Organiser/Institute" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Duration</label>
                                        <input type="text" name="duration" placeholder="Duration" />
                                    </div>
                                </div>
                                <div class="row mt-2">

                                    <div class="col">
                                        <label class="fieldlabels">International(Abroad)/Internation al(within  country) / National / State / University level</label>
                                        <input type="text" name="International(Abroad)_Internation_al(within_country_National_State_University_level"
                                            placeholder="International(Abroad)/Internation al(within  country) / National / State / University level" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                        <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No"
                                            placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove16 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add16', function() {
            $('.add_input16').append(html16);
        });
        $(document).on('click', '.remove16', function() {
            $(this).closest('.parent16').remove();
        });
    });
</script>
@endsection
