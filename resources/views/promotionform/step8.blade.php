@extends('layout.teacher_promotion', ['activeClass' => 8])
@section('content')
<form action="{{ route('promotion-form.step-8-store') }}" method="post" enctype="multipart/form-data">
    @csrf
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
                    <label class="fieldlabels">Name of the Scholar</label> <input type="text" required name="Name_of_the_Scholar[]" placeholder="Name of the Scholar" @isset($phd[0]) value="{{ $phd[0]->name_of_the_scholar??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">University </label> <input type="text" required name="University[]" placeholder="University " @isset($phd[0]) value="{{ $phd[0]->university??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Thesis</label> <input type="text" required name="Title_of_the_Thesis[]" placeholder="Title of the Thesis" @isset($phd[0]) value="{{ $phd[0]->thesis??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Awarded/Thesis submitted</label> <input type="text" required name="Awarded_Thesis_submitted[]" placeholder="Awarded/Thesis submitted" @isset($phd[0]) value="{{ $phd[0]->awarded_thesis_submitted??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement)</label>
                    <input type="file"  name="file[]" placeholder="Attachement" @isset($phd[0]) {{ $phd[0]->file?'required':'' }} @endisset />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">Month and Year</label>
                    <input type="text" required name="Month_and_Year[]" placeholder="Month and Year" @isset($phd[0]) value="{{ $phd[0]->month_and_year??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Verified by the Committee</label>
                    <input type="text" required name="Verified_by_the_Committee[]" @isset($phd[0]) value="{{ $phd[0]->verify_by_committee??'' }}" @endisset placeholder="Verified by the Committee" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" required name="Claimed_Score[]" placeholder="Claimed Score" @isset($phd[0]) value="{{ $phd[0]->claimed_score??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" required name="encl_no[]" placeholder="Encl. No." @isset($phd[0]) value="{{ $phd[0]->encl_no??'' }}" @endisset />
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-info add10 mt-4">+</button>
                </div>
            </div>
            <hr>
            <div class="add_input10">
                @isset($phd[0])
                @for($j=1;$j<count($phd);$j++) <div class="parent10">
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Name of the Scholar</label> <input type="text" required name="Name_of_the_Scholar[]" placeholder="Name of the Scholar" @isset($phd[0]) value="{{ $phd[0]->name_of_the_scholar??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">University </label> <input type="text" required name="University[]" placeholder="University " @isset($phd[0]) value="{{ $phd[0]->university??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Title of the Thesis</label> <input type="text" required name="Title_of_the_Thesis[]" placeholder="Title of the Thesis" @isset($phd[0]) value="{{ $phd[0]->thesis??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Awarded/Thesis submitted</label> <input type="text" required name="Awarded_Thesis_submitted[]" placeholder="Awarded/Thesis submitted" @isset($phd[0]) value="{{ $phd[0]->awarded_thesis_submitted??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File (Attachement)</label>
                            <input type="file"  name="file[]" placeholder="Attachement" @isset($phd[0]) {{ $phd[0]->file?'required':'' }} @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Month and Year</label>
                            <input type="text" required name="Month_and_Year[]" placeholder="Month and Year" @isset($phd[0]) value="{{ $phd[0]->month_and_year??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="Verified_by_the_Committee[]" @isset($phd[0]) value="{{ $phd[0]->verify_by_committee??'' }}" @endisset placeholder="Verified by the Committee" />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label>
                            <input type="number" required name="Claimed_Score[]" placeholder="Claimed Score" @isset($phd[0]) value="{{ $phd[0]->claimed_score??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="encl_no[]" placeholder="Encl. No." @isset($phd[0]) value="{{ $phd[0]->encl_no??'' }}" @endisset />
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-info add10 mt-4">+</button>
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
            <h2 class="fs-title">M.Phil./P.G. Dissertation Supervised </h2>
        </div>
    </div>
    <div class="parent11 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">No. of the Scholar</label> <input type="text" required name="Name_of_the_Scholar_b[]" @isset($mphil[0]) value="{{ $mphil[0]->name_of_the_scholar??'' }}" @endisset placeholder="No of the Scholar" />
            </div>
            <div class="col">
                <label class="fieldlabels">M.Phil./ P.G.</label> <input type="text" required name="M_Phil_P_G_b[]" placeholder="M.Phil./ P.G." @isset($mphil[0]) value="{{ $mphil[0]->mphil_phd??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Name Of The Department</label> <input type="text" required name="Title_of_the_Thesis_b[]" placeholder="Title of the Thesis" @isset($mphil[0]) value="{{ $mphil[0]->thesis??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">University / College</label> <input type="text" required name="University_b[]" placeholder="University" @isset($mphil[0]) value="{{ $mphil[0]->university??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement)</label> <input type="file"  name="file_b[]" @isset($mphil[0]) {{ $mphil[0]->file?'required':'' }} @endisset placeholder="File" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Month and Year</label>
                <input type="month" required name="Month_and_Year_b[]" placeholder="Month and Year" @isset($mphil[0]) value="{{ $mphil[0]->month_and_year??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="Verified_by_the_Committee_b[]" placeholder="Verified by the Committee" @isset($mphil[0]) value="{{ $mphil[0]->verify_by_committee??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="Claimed_Score_b[]" placeholder="Claimed Score" @isset($mphil[0]) value="{{ $mphil[0]->claimed_score??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_b[]" placeholder="Encl. No." @isset($mphil[0]) value="{{ $mphil[0]->encl_no??'' }}" @endisset />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add11 mt-4">+</button>
            </div>
        </div>
        <div class="add_input11">
            @isset($mphil[0])
            @for($j=0;$j<count($mphil);$j++) <div class="parent11 ">
                <hr />
                <div class="row mt-5">
                    <div class="col">
                        <label class="fieldlabels">No. of the Scholar</label> <input type="text" required name="Name_of_the_Scholar_b[]" @isset($mphil[$j]) value="{{ $mphil[$j]->name_of_the_scholar??'' }}" @endisset placeholder="No of the Scholar" />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">M.Phil./ P.G.</label> <input type="text" required name="M_Phil_P_G_b[]" placeholder="M.Phil./ P.G." @isset($mphil[$j]) value="{{ $mphil[$j]->mphil_phd??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Name Of The Department</label> <input type="text" required name="Title_of_the_Thesis_b[]" placeholder="Title of the Thesis" @isset($mphil[$j]) value="{{ $mphil[$j]->thesis??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">University / College</label> <input type="text" required name="University_b[]" placeholder="University" @isset($mphil[$j]) value="{{ $mphil[$j]->university??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">File (Attachement)</label> <input type="file"  name="file_b[]" placeholder="File" @isset($mphil[$j]) {{ $mphil[$j]->file?'required':'' }} @endisset />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label class="fieldlabels">Month and Year</label>
                        <input type="month" required name="Month_and_Year_b[]" placeholder="Month and Year" @isset($mphil[$j]) value="{{ $mphil[$j]->month_and_year??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Verified by the Committee</label>
                        <input type="text" required name="Verified_by_the_Committee_b[]" placeholder="Verified by the Committee" @isset($mphil[$j]) value="{{ $mphil[$j]->verify_by_committee??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Claimed Score</label>
                        <input type="number" required name="Claimed_Score_b[]" placeholder="Claimed Score" @isset($mphil[$j]) value="{{ $mphil[$j]->claimed_score??'' }}" @endisset />
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Encl. No.</label>
                        <input type="text" required name="encl_no_b[]" placeholder="Encl. No." @isset($mphil[$j]) value="{{ $mphil[$j]->encl_no??'' }}" @endisset />
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger remove11 mt-4">-</button>
                    </div>
                </div>
        </div>
        @endfor
        @endisset
        <div class="row">
            <div class="col">
                <span class="text-danger">Note :</span> Attachement certitifacte duly certified by the Head Of Department.
            </div>
        </div>
    </div>
    <hr>

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
                <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" required name="project[]">
                    <option selected disabled value="">Open this select menu</option>
                    <option value="1" @isset($user->step8_b[0]) @selected($user->step8_b[0]->type=='1') @endisset>
                        RESEARCH PROJECTS COMPLETED</option>
                    <option value="2" @isset($user->step8_b[0]) @selected($user->step8_b[0]->type=='2') @endisset>RESEARCH PROJECTS ONGOING</option>
                    <option value="3" @isset($user->step8_b[0]) @selected($user->step8_b[0]->type=='3') @endisset>CONSULTANCY</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Project (More than 10 lakhs)</label> <input type="text" required name="Title_of_the_Project[]" placeholder="Title of the Project (More than 10 lakhs)" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->title_of_the_project??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Names of  PI and Co-PI</label> <input type="text" required name="Names_of_Pand_co_PI[]" placeholder="Names of  PI and Co-PI" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->name_of_pi_and_co_pi??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Funding Agency</label> <input type="text" required name="Funding_Agency[]" placeholder="Funding Agency" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->funding_agency??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label> <input type="file"  name="research_file[]" placeholder="File" @isset($user->step8_b[0]) {{ $user->step8_b[0]->file?'required':'' }} @endisset />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Grant Sanctioned</label>
                <input type="text" required name="Grant_Sanctioned[]" placeholder="Grant Sanctioned" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->grant_sanctioned_or_component??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="Claimed_Score[]" placeholder="Claimed Score" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->claimed_score??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Duration (from)</label>
                <input type="text" required name="Duration_from[]" placeholder="From" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->duration_from??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Duraction (to)</label>
                <input type="text" required name="Duration_to[]" placeholder="To" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->duration_to??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="Verified_by_the_Committee_project[]" placeholder="Verified by the Committee" @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->verify_by_committee??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_project[]" placeholder="Encl. No." @isset($user->step8_b[0]) value="{{ $user->step8_b[0]->encl_no??'' }}" @endisset />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add12 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input12">
            @isset($user->step8_b)
            @for($j=1;$j<count($user->step8_b);$j++)
                <div class="parent12 ">
                    <div class="row mt-5">
                        <div class="col">
                            <label class="fieldlabels"> RESEARCH PROJECTS</label>
                            <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" required name="project[]">
                                <option selected disabled value="">Open this select menu</option>
                                <option value="1" @isset($user->step8_b[$j]) @selected($user->step8_b[$j]->type=='1') @endisset>
                                    RESEARCH PROJECTS COMPLETED</option>
                                <option value="2" @isset($user->step8_b[$j]) @selected($user->step8_b[$j]->type=='2') @endisset>RESEARCH PROJECTS ONGOING</option>
                                <option value="3" @isset($user->step8_b[$j]) @selected($user->step8_b[$j]->type=='3') @endisset>CONSULTANCY</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Title of the Project (More than 10 lakhs)</label> <input type="text" required name="Title_of_the_Project[]" placeholder="Title of the Project (More than 10 lakhs)" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->title_of_the_project??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Names of PI and Co-PI</label> <input type="text" required name="Names_of_Pand_co_PI[]" placeholder="Names of  PI and Co-PI" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->name_of_pi_and_co_pi??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Funding Agency</label> <input type="text" required name="Funding_Agency[]" placeholder="Funding Agency" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->funding_agency??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File</label> <input type="file"  name="research_file[]" placeholder="File" @isset($user->step8_b[$j]) {{ $user->step8_b[$j]->file?'required':'' }} @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Grant Sanctioned</label>
                            <input type="text" required name="Grant_Sanctioned[]" placeholder="Grant Sanctioned" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->grant_sanctioned_or_component??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label>
                            <input type="number" required name="Claimed_Score[]" placeholder="" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->claimed_score??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Duration (from)</label>
                            <input type="text" required name="Duration_from[]" placeholder="From" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->duration_from??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Duraction (to)</label>
                            <input type="text" required name="Duration_to[]" placeholder="To" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->duration_to??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="Verified_by_the_Committee_project[]" placeholder="Verified by the Committee" @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->verify_by_committee??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="encl_no_project[]" placeholder="Encl. No." @isset($user->step8_b[$j]) value="{{ $user->step8_b[$j]->encl_no??'' }}" @endisset />
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger remove12 mt-4">-</button>
                        </div>
                    </div>
                    <hr>
                </div>
                @endfor
                @endisset

        </div>
    </div>
    </div>
    @isset($user->step) @if($user->step>=8)<a href="{{route('promotion-form.step-9')}}" class="action-button">Next</a>
    @endif @endisset

    <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-7') }}" class="action-button">Previous</a>
</form>
@endsection


@section('script')
<script>
    $(document).ready(function() {

        $(".submit").click(function() {
            return false;
        })
        var html10 = `
        <div class="parent10 ">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                    required name="Name_of_the_Scholar[]" placeholder="Name of the Scholar" />
            </div>
            <div class="col">
                <label class="fieldlabels">University </label> <input type="text"
                    required name="University[]" placeholder="University " />
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Thesis</label> <input type="text"
                    required name="Title_of_the_Thesis[]" placeholder="Title of the Thesis" />
            </div>
            <div class="col">
                <label class="fieldlabels">Awarded/Thesis submitted</label> <input
                    type="text" required name="Awarded_Thesis_submitted[]"
                    placeholder="Awarded/Thesis submitted" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement)</label> <input
                    type="file"  name="file[]"
                    placeholder="Attachement" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Month and Year</label>
                <input type="text" required name="Month_and_Year[]" placeholder="Month and Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="Verified_by_the_Committee[]"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels"></label>
                <input type="number" required name="Claimed_Score[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no[]" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove10 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
        `;
        $(document).on('click', '.add10', function() {
            $('.add_input10').append(html10);
        });
        $(document).on('click', '.remove10', function() {
            $(this).closest('.parent10').remove();
        });

        var html11 = `
    <div class="parent11 ">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels">Name of the Scholar</label> <input type="text"
                    required name="Name_of_the_Scholar_b[]" placeholder="Name of the Scholar" />
            </div>
            <div class="col">
                <label class="fieldlabels">M.Phil./ P.G.</label> <input type="text"
                    required name="M_Phil_P_G_b[]" placeholder="M.Phil./ P.G."/>
            </div>
            <div class="col">
                <label class="fieldlabels">Name Of The Department</label> <input type="text"
                    required name="Title_of_the_Thesis_b[]" placeholder="Title of the Thesis" />
            </div>
            <div class="col">
                <label class="fieldlabels">University / College</label> <input
                    type="text" required name="University_b[]"
                    placeholder="University" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement)</label> <input
                    type="file"  name="file_b[]"
                    placeholder="File" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Month and Year</label>
                <input type="month" required name="Month_and_Year_b[]" placeholder="Month and Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="Verified_by_the_Committee_b[]"
                    placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="Claimed_Score_b[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_b[]" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove11 mt-4">-</button>
            </div>
        </div>
        <hr>
    </div>
    `;
        $(document).on('click', '.add11', function() {
            $('.add_input11').append(html11);
        });
        $(document).on('click', '.remove11', function() {
            $(this).closest('.parent11').remove();
        });

        var html12 = `
        <div class="parent12 ">
        <div class="row mt-5">
            <div class="col">
                <label class="fieldlabels"> RESEARCH PROJECTS</label>
                <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" required name="project[]">
                    <option selected disabled value="">Open this select menu</option>
                    <option value="1">RESEARCH PROJECTS COMPLETED</option>
                    <option value="2">RESEARCH PROJECTS ONGOING</option>
                    <option value="3">CONSULTANCY</option>
                  </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Project (More than 10 lakhs)</label> <input type="text"
                    required name="Title_of_the_Project[]" placeholder="Title of the Project (More than 10 lakhs)" />
            </div>
            <div class="col">
                <label class="fieldlabels">Names of  PI and Co-PI</label> <input type="text"
                    required name="Names_of_Pand_co_PI[]" placeholder="Names of  PI and Co-PI"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Funding  Agency</label> <input type="text"
                    required name="Funding_Agency[]" placeholder="Funding Agency" />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label> <input type="file"
                    required name="research_file[]" placeholder="File" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Grant Sanctioned</label>
                <input type="text" required name="Grant_Sanctioned[]" placeholder="Grant Sanctioned" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="Claimed_Score[]"
                    placeholder="Claimed Score"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Duration (from)</label>
                <input type="text" required name="Duration_from[]" placeholder="From" />
            </div>
            <div class="col">
                <label class="fieldlabels">Duraction (to)</label>
                <input type="text" required name="Duration_to[]" placeholder="To" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="Verified_by_the_Committee_project[]" placeholder="Verified by the Committee" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="encl_no_project[]" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove12 mt-4">-</button>
            </div>
        </div>
        <hr>
        <div class="add_input12"></div>
    </div>
        `;
        $(document).on('click', '.add12', function() {
            $('.add_input12').append(html12);
        });
        $(document).on('click', '.remove12', function() {
            $(this).closest('.parent12').remove();
        });
    });
</script>
@endsection