@extends('layout.teacher_promotion', ['activeClass' => 8])
@section('content')

<div class="form-card">
    <div class="row">
        <div class="col-7">
            <h2 class="fs-title">(a) RESEARCH GUIDANCE - Ph.D. awarded / Thesis submitted* </h2>
        </div>
        <div class="col-5">
            <h2 class="steps">Step 8 - 10</h2>
        </div>
    </div>
    <div class="parent10 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                    name="Name_of_the_Scholar" placeholder="Name of the Scholar" />
            </div>
            <div class="col">
                <label class="fieldlabels">University </label> <input type="text"
                    name="University " placeholder="University " />
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Thesis</label> <input type="text"
                    name="Title_of_the_Thesis" placeholder="Title of the Thesis" />
            </div>
            <div class="col">
                <label class="fieldlabels">Awarded/Thesis submitted</label> <input
                    type="text" name="Awarded_Thesis_submitted"
                    placeholder="Awarded/Thesis submitted" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Month and Year</label>
                <input type="text" name="Month_and_Year" placeholder="Month and Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add10 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input10"></div>
        <div>* Submit Ph.D. Notification/Certificate of Submission.</div>
    </div>

    <div class="parent11 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                    name="Name_of_the_Scholar" placeholder="Name of the Scholar" />
            </div>
            <div class="col">
                <label class="fieldlabels">M.Phil./ P.G.</label> <input type="text"
                    name="M_Phil_P_G" placeholder="M.Phil./ P.G."/>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Dissertation/Thesis</label> <input type="text"
                    name="Title_of_the_Thesis" placeholder="Title of the Thesis" />
            </div>
            <div class="col">
                <label class="fieldlabels">University</label> <input
                    type="text" name="University"
                    placeholder="University" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Month and Year</label>
                <input type="text" name="Month_and_Year" placeholder="Month and Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add11 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input11"></div>
    </div>
    <div class="row">
        <div class="col-9">
            <h2 class="fs-title">RESEARCH PROJECTS COMPLETED
            </h2>
        </div>
    </div>
    <div class="parent12 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels"> RESEARCH PROJECTS</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">RESEARCH PROJECTS COMPLETED</option>
                    <option value="2">RESEARCH PROJECTS ONGOING</option>
                    <option value="3">CONSULTANCY</option>
                  </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Project (More than 10 lakhs)</label> <input type="text"
                    name="Title_of_the_Project" placeholder="Title of the Project (More than 10 lakhs)" />
            </div>
            <div class="col">
                <label class="fieldlabels">Names of Pand co-PI</label> <input type="text"
                    name="Names_of_Pand_co_PI" placeholder="Names of Pand co-PI"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Funding  Agency</label> <input type="text"
                    name="Funding_Agency" placeholder="Funding Agency" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Grant Sanctioned</label>
                <input type="text" name="Grant_Sanctioned" placeholder="Grant Sanctioned" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score"
                    placeholder="Claimed Score"/>
            </div>
            <div class="col-1">
                <label class="fieldlabels">Duration</label>
                <input type="text" name="Duration_from" placeholder="From" />
            </div>
            <div class="col-1">
                <label class="fieldlabels"></label>
                <input type="text" name="Duration_to" placeholder="To" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_No" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add12 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input12"></div>
    </div>
</div>
{{-- <input type="button" name="next" class="action-button" value="Next" /> --}}
<a type="button" href="{{ route('promotion-form.step-9') }}" class="action-button">Next</a>
<a type="button" href="{{ route('promotion-form.step-7') }}" class="action-button">Previous</a>
@endsection


@section('script')
<script>
    $(document).ready(function() {

        $(".submit").click(function() {
            return false;
        })
        var html10 = `<div class="parent10">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                                            name="Name_of_the_Scholar" placeholder="Name of the Scholar" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">University </label> <input type="text"
                                            name="University " placeholder="University " />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Title of the Thesis</label> <input type="text"
                                            name="Title_of_the_Thesis" placeholder="Title of the Thesis" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Awarded/Thesis submitted</label> <input type="text"
                                            name="Awarded_Thesis_submitted" placeholder="Awarded/Thesis submitted" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Month and Year</label>
                                        <input type="text" name="Month_and_Year"
                                            placeholder="Month and Year" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                        <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove10 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add10', function() {
            $('.add_input10').append(html10);
        });
        $(document).on('click', '.remove10', function() {
            $(this).closest('.parent10').remove();
        });

    var html11 = `<div class="parent11">
                                <div class="row mt-5">
                                    <div class="col">
                                        <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                                            name="Name_of_the_Scholar" placeholder="Name of the Scholar" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">M.Phil./ P.G.</label> <input type="text"
                                            name="M_Phil_P_G" placeholder="M.Phil./ P.G."/>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Title of the Dissertation/Thesis</label> <input type="text"
                                            name="Title_of_the_Thesis" placeholder="Title of the Thesis" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">University</label> <input
                                            type="text" name="University"
                                            placeholder="University" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Month and Year</label>
                                        <input type="text" name="Month_and_Year" placeholder="Month and Year" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee"
                                            placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                        <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove11 mt-4">-</button>
                                    </div>
                                    <hr>
                                </div>
                            </div>`;
        $(document).on('click', '.add11', function() {
            $('.add_input11').append(html11);
        });
        $(document).on('click', '.remove11', function() {
            $(this).closest('.parent11').remove();
        });

        var html12 = `<div class="parent12">
                                <div class="row mt-5">
                                    <div class="col">
                                        <label class="fieldlabels"> RESEARCH PROJECTS</label>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">RESEARCH PROJECTS COMPLETED</option>
                                            <option value="2">RESEARCH PROJECTS ONGOING</option>
                                            <option value="3">CONSULTANCY</option>
                                          </select>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Title of the Project (More than 10 lakhs)</label> <input type="text"
                                            name="Title_of_the_Project" placeholder="Title of the Project (More than 10 lakhs)" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Names of Pand co-PI</label> <input type="text"
                                            name="Names_of_Pand_co_PI" placeholder="Names of Pand co-PI"/>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Funding  Agency</label> <input type="text"
                                            name="Funding_Agency" placeholder="Funding Agency" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Grant Sanctioned</label>
                                        <input type="text" name="Grant_Sanctioned" placeholder="Grant Sanctioned" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Claimed Score</label>
                                        <input type="text" name="Claimed_Score"
                                            placeholder="Claimed Score"/>
                                    </div>
                                    <div class="col-1">
                                        <label class="fieldlabels">Duration</label>
                                        <input type="text" name="Duration_from" placeholder="From" />
                                    </div>
                                    <div class="col-1">
                                        <label class="fieldlabels"></label>
                                        <input type="text" name="Duration_to" placeholder="To" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Verified by the Committee</label>
                                        <input type="text" name="Verified_by_the_Committee" placeholder="Verified by the Committee" />
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Encl. No.</label>
                                        <input type="text" name="Encl_No" placeholder="Encl. No." />
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-danger remove12 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add12', function() {
            $('.add_input12').append(html12);
        });
        $(document).on('click', '.remove12', function() {
            $(this).closest('.parent12').remove();
        });
    });
</script>
@endsection
