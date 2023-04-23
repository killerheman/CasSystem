@extends('layout.teacher_promotion', ['activeClass' => 7])
@section('content')
<div class="form-card">
    <div class="row">
        <div class="col-9">
            <h2 class="fs-title">PUBLICATIONS (other than Research papers)</h2>
        </div>
        <div class="col-3">
            <h2 class="steps">Step 7 - 10</h2>
        </div>
    </div>
    <div class="parent7 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row">
            (a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="1">Editor of Book by National Publisher</option>
                    <option value="1">Editor of Book by International Publisher
                    </option>
                    <option value="1">Chapter in Edited Book</option>
                    <option value="1">National publishers</option>
                    <option value="1">International publishers</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text"
                    name="Title_of_the_Book" placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text"
                    name="Author" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    name="Co_Author(s)" placeholder="Co_Author(s)" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN /ISSN</label>
                <input type="text" name="duration_to" placeholder="duration_to" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" name="Name_of_the_Publisher_Month_Year"
                    placeholder="Name of the Publisher,Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">,Month, Year</label>
                <input type="month" name="Month_Year" placeholder=",Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">IQAC Verified Score</label>
                <input type="text" name="IQAC_Verified_Score"
                    placeholder="IQAC Verified Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_no" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add7 mt-3">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input7"></div>
        <div class="mb-5">Note: Attach front, index and back pages justifying the claim showing the ISBN/ISSN No.
        </div>
    </div>
    <div class="parent8 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row">
            (b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="1">CHAPTER OR RESEARCH PAPER</option>
                    <option value="1">BOOK</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input
                    type="text" name="Title_of_the_Book"
                    placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text"
                    name="Author" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    name="Co_Author(s)" placeholder="Co_Author(s)" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN /ISSN</label>
                <input type="text" name="duration_to" placeholder="duration_to" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" name="Name_of_the_Publisher_Month_Year"
                    placeholder="Name of the Publisher,Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">,Month, Year</label>
                <input type="month" name="Month_Year" placeholder=",Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">IQAC Verified Score</label>
                <input type="text" name="IQAC_Verified_Score"
                    placeholder="IQAC Verified Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_no" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add8 mt-3">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input8"></div>
    </div>

    <div class="row">
        <div class="col-9">
            <h2 class="fs-title">CREATION OF ICT MEDIATED TEACHING LEARNING PEDAGOGY AND
                CONTENT
                AND DEVELOPMENT OF NEW AND INNOVATIVE COURSES AND CURRICULA.</h2>
        </div>
    </div>
    <div class="parent9 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Select Type</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <optgroup label="PEDAGOGY">
                        <option value="1"> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                        <option value="2">DESIGN OF NEW CURRICULA AND COURSES</option>
                    </optgroup>
                    <optgroup label="MOOCs">
                        <option value="3">Development of complete MOOCs in 4 quadrants
                            (4 credit course) (In case of MOOCs of lesser
                            credits 05 marks/credit)
                        </option>
                        <option value="4">MOOCs (developed in 4 quadrant) per
                            module/lecture</option>
                        <option value="5">Content writer/subject matter expert for
                            each module of MOOCs (at least one quadrant)
                        </option>
                        <option value="6">
                            Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                            of lesser credits 02 marks/credit)
                        </option>
                    </optgroup>
                    <optgroup label="E-CONTENT">
                        <option value="7">Development of e-Content in 4 quadrants for
                            a complete course/e-book
                        </option>
                        <option value="8">e-Content (developed in 4 quadrants) per
                            module</option>
                        <option value="9">Contribution to development of e-content
                            module in complete course/paper/e-book (at least one
                            quadrant)
                        </option>
                        <option value="10">
                            Editor of e-content for complete course/ paper /e-book
                        </option>
                    </optgroup>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Activity*</label> <input type="text"
                    name="Activity*" placeholder="Activity*" />
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
                <button type="button" class="btn btn-info add9 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input9"></div>
        <div>* Each activity should be claimed by the applicant with supporting documents.</div>
    </div>
</div>
{{-- <input type="button" name="next" class="action-button" value="Next" /> --}}
<a type="button" href="{{ route('promotion-form.step-8') }}" class="action-button">Next</a>
<a type="button" href="{{ route('promotion-form.step-6') }}" class="action-button">Previous</a>
@endsection


@section('script')
<script>
    $(document).ready(function() {

        $(".submit").click(function() {
            return false;
        })
        var html7 =
            `<div class="parent7">
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="1">Editor of Book by National Publisher</option>
                    <option value="1">Editor of Book by International Publisher</option>
                    <option value="1">Chapter in Edited Book</option>
                    <option value="1">National publishers</option>
                    <option value="1">International publishers</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text"
                    name="Title_of_the_Book" placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text"
                    name="Author" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    name="Co_Author(s)" placeholder="Co_Author(s)" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN /ISSN</label>
                <input type="text" name="duration_to" placeholder="duration_to" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" name="Name_of_the_Publisher_Month_Year"
                    placeholder="Name of the Publisher,Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">,Month, Year</label>
                <input type="month" name="Month_Year"
                    placeholder=",Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score"/>
            </div>
            <div class="col">
                <label class="fieldlabels">IQAC Verified Score</label>
                <input type="text" name="IQAC_Verified_Score" placeholder="IQAC Verified Score"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_no" placeholder="Encl. No."/>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove7 mt-3">-</button>
            </div>
        </div><hr></div>`;
        $(document).on('click', '.add7', function() {
            $('.add_input7').append(html7);
        });
        $(document).on('click', '.remove7', function() {
            $(this).closest('.parent7').remove();
        });
        var html8 =
            `<div class="parent8">
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="1">CHAPTER OR RESEARCH PAPER</option>
                    <option value="1">BOOK</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text"
                    name="Title_of_the_Book" placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text"
                    name="Author" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    name="Co_Author(s)" placeholder="Co_Author(s)" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN /ISSN</label>
                <input type="text" name="duration_to" placeholder="duration_to" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" name="Name_of_the_Publisher_Month_Year"
                    placeholder="Name of the Publisher,Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">,Month, Year</label>
                <input type="month" name="Month_Year"
                    placeholder=",Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="text" name="Claimed_Score" placeholder="Claimed Score"/>
            </div>
            <div class="col">
                <label class="fieldlabels">IQAC Verified Score</label>
                <input type="text" name="IQAC_Verified_Score" placeholder="IQAC Verified Score"/>
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="Encl_no" placeholder="Encl. No."/>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove8 mt-3">-</button>
            </div>
        </div><hr></div>`;
        $(document).on('click', '.add8', function() {
            $('.add_input8').append(html8);
        });
        $(document).on('click', '.remove8', function() {
            $(this).closest('.parent8').remove();
        });
        var html9 =
            ` <div class="parent9">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="fieldlabels">Select Type</label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected disabled hidden>Open this select menu</option>
                                            <optgroup label="PEDAGOGY">
                                                <option value="1"> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                                                <option value="2">DESIGN OF NEW CURRICULA AND COURSES</option>
                                            </optgroup>
                                            <optgroup label="MOOCs">
                                                <option value="3">Development of complete MOOCs in 4 quadrants
                                                    (4 credit course) (In case of MOOCs of lesser
                                                    credits 05 marks/credit)
                                                </option>
                                                <option value="4">MOOCs (developed in 4 quadrant) per
                                                    module/lecture</option>
                                                <option value="5">Content writer/subject matter expert for
                                                    each module of MOOCs (at least one quadrant)
                                                </option>
                                                <option value="6">
                                                    Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                                                    of lesser credits 02 marks/credit)
                                                </option>
                                            </optgroup>
                                            <optgroup label="E-CONTENT">
                                                <option value="7">Development of e-Content in 4 quadrants for
                                                    a complete course/e-book
                                                </option>
                                                <option value="8">e-Content (developed in 4 quadrants) per
                                                    module</option>
                                                <option value="9">Contribution to development of e-content
                                                    module in complete course/paper/e-book (at least one
                                                    quadrant)
                                                </option>
                                                <option value="10">
                                                    Editor of e-content for complete course/ paper /e-book
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Activity*</label> <input type="text"
                                            name="Activity*" placeholder="Activity*" />
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
                                        <button type="button" class="btn btn-danger remove9 mt-4">-</button>
                                    </div>
                                </div>
                                <hr>
                            </div>`;
        $(document).on('click', '.add9', function() {
            $('.add_input9').append(html9);
        });
        $(document).on('click', '.remove9', function() {
            $(this).closest('.parent9').remove();
        });
    });
</script>
@endsection
