@extends('layout.teacher_promotion', ['activeClass' => 7])
@section('content')

<form action="{{ route('promotion-form.step-7-store') }}" method="post" enctype="multipart/form-data">
    @csrf
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
                    <select class="form-select form-select-lg mb-3" name="type[]" aria-label=".form-select-lg example">
                        <option selected disabled hidden>Open this select menu</option>
                        <option value="1" @isset($user->step7[0]) @selected($user->step7[0]->type=='1') @endisset>Editor of Book by National Publisher</option>
                        <option value="2" @isset($user->step7[0]) @selected($user->step7[0]->type=='2') @endisset>Editor of Book by International Publisher
                        </option>
                        <option value="3" @isset($user->step7[0]) @selected($user->step7[0]->type=='3') @endisset>Chapter in Edited Book</option>
                        <option value="4" @isset($user->step7[0]) @selected($user->step7[0]->type=='4') @endisset>National publishers</option>
                        <option value="5" @isset($user->step7[0]) @selected($user->step7[0]->type=='5') @endisset>International publishers</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Book:</label> <input type="text" name="title[]" placeholder="Title_of_the_Book" @isset($user->step7[0]) value="{{ $user->step7[0]->title??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text" name="author[]" placeholder="Author" @isset($user->step7[0]) value="{{ $user->step7[0]->auth??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text" name="co_auther[]" placeholder="Co_Author(s)" @isset($user->step7[0]) value="{{ $user->step7[0]->co_author??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement):</label>
                    <input type="file" name="book_file[]" placeholder="File" @isset($user->step7[0]) {{ $user->step7[0]->file?'required':'' }} @endisset />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN</label>
                    <input type="text" name="isbn[]" placeholder="ISBN" @isset($user->step7[0]) value='{{ $user->step7[0]->isbn_issn??'' }}' @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" name="publisher[]" placeholder="Name of the Publisher" @isset($user->step7[0]) value="{{ $user->step7[0]->publisher??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Month, Year</label>
                    <input type="month" name="publish_date[]" placeholder="Month, Year" @isset($user->step7[0]) value="{{ $user->step7[0]->publisher_month_year??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" name="book_claimed_Score[]" placeholder="Claimed Score" @isset($user->step7[0]) value="{{ $user->step7[0]->claimed_score??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels"> Verified Score</label>
                    <input type="text" name="iqac_score[]" placeholder=" Verified Score" @isset($user->step7[0]) value="{{ $user->step7[0]->verify_by_committee??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" name="book_encl_no[]" placeholder="Encl. No." @isset($user->step7[0]) value="{{ $user->step7[0]->encl_no??'' }}" @endisset/>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-info add7 mt-3">+</button>
                </div>
            </div>
            <hr>
            <div class="add_input7">
                @isset($user->step7)
                @for($i=1;$i<count($user->step7->whereIn('type',[1,2,3,4,5]));$i++)
                    <div class="parent7">
                        <div class="row">
                            (a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                                <select class="form-select form-select-lg mb-3" name="type[]" aria-label=".form-select-lg example">
                                    <option selected disabled hidden>Open this select menu</option>
                                    <option value="1" @isset($user->step7[$i]) @selected($user->step7[$i]->type=='1') @endisset>Editor of Book by National Publisher</option>
                                    <option value="2" @isset($user->step7[$i]) @selected($user->step7[$i]->type=='2') @endisset>Editor of Book by International Publisher
                                    </option>
                                    <option value="3" @isset($user->step7[$i]) @selected($user->step7[$i]->type=='3') @endisset>Chapter in Edited Book</option>
                                    <option value="4" @isset($user->step7[$i]) @selected($user->step7[$i]->type=='4') @endisset>National publishers</option>
                                    <option value="5" @isset($user->step7[$i]) @selected($user->step7[$i]->type=='5') @endisset>International publishers</option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Title of the Book:</label> <input type="text" name="title[]" placeholder="Title_of_the_Book" @isset($user->step7[$i]) value="{{ $user->step7[$i]->title??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Author:</label> <input type="text" name="author[]" placeholder="Author" @isset($user->step7[$i]) value="{{ $user->step7[$i]->auth??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Co_Author(s):</label> <input type="text" name="co_auther[]" placeholder="Co_Author(s)" @isset($user->step7[$i]) value="{{ $user->step7[$i]->co_author??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">File (Attachement):</label>
                                <input type="file" name="book_file[]" placeholder="File" @isset($user->step7[$i]) {{ $user->step7[$i]->file?'required':'' }} @endisset />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="fieldlabels">ISBN</label>
                                <input type="text" name="isbn[]" placeholder="ISBN" @isset($user->step7[$i]) value='{{ $user->step7[$i]->isbn_issn??'' }}' @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Name of the Publisher</label>
                                <input type="text" name="publisher[]" placeholder="Name of the Publisher" @isset($user->step7[$i]) value="{{ $user->step7[$i]->publisher??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Month, Year</label>
                                <input type="month" name="publish_date[]" placeholder="Month, Year" @isset($user->step7[$i]) value="{{ $user->step7[$i]->publisher_month_year??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Claimed Score</label>
                                <input type="number" name="book_claimed_Score[]" placeholder="Claimed Score" @isset($user->step7[$i]) value="{{ $user->step7[$i]->claimed_score??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Verified Score</label>
                                <input type="text" name="iqac_score[]" placeholder="Verified Score" @isset($user->step7[$i]) value="{{ $user->step7[$i]->verify_by_committee??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Encl. No.</label>
                                <input type="text" name="book_encl_no[]" placeholder="Encl. No." @isset($user->step7[$i]) value="{{ $user->step7[$i]->encl_no??'' }}" @endisset/>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-danger remove7 mt-3">-</button>
                            </div>
                        </div>
                        <hr>

                        <div class="mb-5">Note: Attach front, index and back pages justifying the claim showing the ISBN/ISSN No.
                        </div>
                    </div>

                    @endfor
                    @endisset
            </div>
        </div>
    </div>
    <div class="parent8 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row">
            (b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type[]">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="6" @isset($step7_a[0]) @selected($step7_a[0]->type==6) @endisset>CHAPTER OR RESEARCH PAPER</option>
                    <option value="7" @isset($step7_a[0]) @selected($step7_a[0]->type==7) @endisset>BOOK</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text" name="title[]" placeholder="Title_of_the_Book" value="{{ isset($step7_a[0]->title)?$step7_a[0]->title:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text" name="author[]" placeholder="Author" value="{{ isset($step7_a[0]->auth)?$step7_a[0]->auth:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text" value="{{ isset($step7_a[0]->co_author)?$step7_a[0]->co_author:'' }}" name="co_auther[]" placeholder="Co_Author(s)" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement):</label>
                <input type="file" name="book_file[]" placeholder="File" {{ isset($step7_a[0]->file)?'required':'' }} />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN</label>
                <input type="text" name="isbn[]" placeholder="ISBN" value="{{ isset($step7_a[0]->isbn_issn)?$step7_a[0]->title:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" name="publisher[]" placeholder="Name of the Publisher " value="{{ isset($step7_a[0]->publisher)?$step7_a[0]->publisher:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Month, Year</label>
                <input type="month" name="publish_date[]" placeholder="Month, Year" value="{{ isset($step7_a[0]->publisher_month_year)?$step7_a[0]->publisher_month_year:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" name="book_claimed_Score[]" placeholder="Claimed Score" value="{{ isset($step7_a[0]->claimed_score)?$step7_a[0]->claimed_score:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified Score</label>
                <input type="text" name="iqac_score[]" placeholder=" Verified Score" value="{{ isset($step7_a[0]->verify_by_committee)?$step7_a[0]->verify_by_committee:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="book_encl_no[]" placeholder="Encl. No." value="{{ isset($step7_a[0]->encl_no)?$step7_a[0]->encl_no:'' }}" />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add8 mt-3">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input8">
            @isset($step7_a)
            @for($j=1;$j
            <count($step7_a);$j++) <hr />
            <div class="row mt-3">
                <div class="col-4">
                    <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type[]">
                        <option selected disabled hidden>Open this select menu</option>
                        <option value="6" @isset($step7_a[$j]) @selected($step7_a[$j]->type==6) @endisset>CHAPTER OR RESEARCH PAPER</option>
                        <option value="7" @isset($step7_a[$j]) @selected($step7_a[$j]->type==7) @endisset>BOOK</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Book:</label> <input type="text" name="title[]" placeholder="Title_of_the_Book" value="{{ isset($step7_a[$j]->title)?$step7_a[$j]->title:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text" name="author[]" placeholder="Author" value="{{ isset($step7_a[$j]->auth)?$step7_a[$j]->auth:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text" value="{{ isset($step7_a[$j]->co_author)?$step7_a[$j]->co_author:'' }}" name="co_auther[]" placeholder="Co_Author(s)" />
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement):</label>
                    <input type="file" name="book_file[]" placeholder="File" {{ isset($step7_a[$j]->file)?'required':'' }} />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN</label>
                    <input type="text" name="isbn[]" placeholder="ISBN" value="{{ isset($step7_a[$j]->isbn_issn)?$step7_a[$j]->title:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" name="publisher[]" placeholder="Name of the Publisher " value="{{ isset($step7_a[$j]->publisher)?$step7_a[$j]->publisher:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Month, Year</label>
                    <input type="month" name="publish_date[]" placeholder="Month, Year" value="{{ isset($step7_a[$j]->publisher_month_year)?$step7_a[$j]->publisher_month_year:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" name="book_claimed_Score[]" placeholder="Claimed Score" value="{{ isset($step7_a[$j]->claimed_score)?$step7_a[$j]->claimed_score:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Verified Score</label>
                    <input type="text" name="iqac_score[]" placeholder="Verified Score" value="{{ isset($step7_a[$j]->verify_by_committee)?$step7_a[$j]->verify_by_committee:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" name="book_encl_no[]" placeholder="Encl. No." value="{{ isset($step7_a[$j]->encl_no)?$step7_a[$j]->encl_no:'' }}" />
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-danger remove8 mt-3">-</button>
                </div>
            </div>
            @endfor
            @endisset

        </div>
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
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="ict_type[]">
                    <option selected disabled hidden>Open this select menu</option>
                    <optgroup label="PEDAGOGY">
                        <option value="1" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==1) @endisset> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                        <option value="2" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==2) @endisset>DESIGN OF NEW CURRICULA AND COURSES</option>
                    </optgroup>
                    <optgroup label="MOOCs">
                        <option value="3" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==3) @endisset>Development of complete MOOCs in 4 quadrants
                            (4 credit course) (In case of MOOCs of lesser
                            credits 05 marks/credit)
                        </option>
                        <option value="4" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==4) @endisset>MOOCs (developed in 4 quadrant) per
                            module/lecture</option>
                        <option value="5" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==5) @endisset>Content writer/subject matter expert for
                            each module of MOOCs (at least one quadrant)
                        </option>
                        <option value="6" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==6) @endisset>
                            Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                            of lesser credits 02 marks/credit)
                        </option>
                    </optgroup>
                    <optgroup label="E-CONTENT">
                        <option value="7" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==7) @endisset>Development of e-Content in 4 quadrants for
                            a complete course/e-book
                        </option>
                        <option value="8" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==8) @endisset>e-Content (developed in 4 quadrants) per
                            module</option>
                        <option value="9" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==9) @endisset>Contribution to development of e-content
                            module in complete course/paper/e-book (at least one
                            quadrant)
                        </option>
                        <option value="10" @isset($user->step7_b[0]) @selected($user->step7_b[0]->type==10) @endisset>
                            Editor of e-content for complete course/ paper /e-book
                        </option>
                    </optgroup>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Activity*</label> <input type="text" name="ict_activity[]" placeholder="Activity*" @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->activity??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="number" name="ict_claimed_score[]" placeholder="Claimed Score" @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->claimed_score??'' }}" @endisset />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" name="ict_committee[]" placeholder="Verified by the Committee" @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->verify_by_committee??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" name="ict_encl_no[]" placeholder="Encl. No." @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->encl_no??'' }}" @endisset />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label>
                <input type="file" name="ict_file[]" placeholder="File" @isset($user->step7_b[0]) {{ $user->step7_b[0]->file?'required':'' }} @endisset/>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add9 mt-4">+</button>
            </div>
        </div>
        <hr>
        <div class="add_input9">
            @isset($user->step7_b)
            @for($u=1;$u<count($user->step7_b);$u++)
                <div class="parent9 ">
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Select Type</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="ict_type[]">
                                <option selected disabled hidden>Open this select menu</option>
                                <optgroup label="PEDAGOGY">
                                    <option value="1" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==1) @endisset> DEVELOPMENT OF INNOVATIVE PEDAGOGY</option>
                                    <option value="2" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==2) @endisset>DESIGN OF NEW CURRICULA AND COURSES</option>
                                </optgroup>
                                <optgroup label="MOOCs">
                                    <option value="3" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==3) @endisset>Development of complete MOOCs in 4 quadrants
                                        (4 credit course) (In case of MOOCs of lesser
                                        credits 05 marks/credit)
                                    </option>
                                    <option value="4" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==4) @endisset>MOOCs (developed in 4 quadrant) per
                                        module/lecture</option>
                                    <option value="5" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==5) @endisset>Content writer/subject matter expert for
                                        each module of MOOCs (at least one quadrant)
                                    </option>
                                    <option value="6" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==6) @endisset>
                                        Course Coordinator for MOOCs (4 credit course)(In case of MOOCs
                                        of lesser credits 02 marks/credit)
                                    </option>
                                </optgroup>
                                <optgroup label="E-CONTENT">
                                    <option value="7" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==7) @endisset>Development of e-Content in 4 quadrants for
                                        a complete course/e-book
                                    </option>
                                    <option value="8" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==8) @endisset>e-Content (developed in 4 quadrants) per
                                        module</option>
                                    <option value="9" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==9) @endisset>Contribution to development of e-content
                                        module in complete course/paper/e-book (at least one
                                        quadrant)
                                    </option>
                                    <option value="10" @isset($user->step7_b[$u]) @selected($user->step7_b[$u]->type==10) @endisset>
                                        Editor of e-content for complete course/ paper /e-book
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Activity*</label> <input type="text" name="ict_activity[]" placeholder="Activity*" @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->activity??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label> <input type="number" name="ict_claimed_score[]" placeholder="Claimed Score" @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->claimed_score??'' }}" @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" name="ict_committee[]" placeholder="Verified by the Committee" @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->verify_by_committee??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" name="ict_encl_no[]" placeholder="Encl. No." @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->encl_no??'' }}" @endisset />
                        </div>
                        <div class="col">
                            <label class="fieldlabels">File</label>
                            <input type="file" name="ict_file[]" placeholder="File" @isset($user->step7_b[$u]) {{ $user->step7_b[$u]->file?'required':'' }} @endisset/>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger remove9 mt-4">-</button>
                        </div>
                    </div>
                    <hr>
                </div>
                @endfor
                @endisset
        </div>
        <div>* Each activity should be claimed by the applicant with supporting documents.</div>
    </div>
    @isset($user->step) @if($user->step>=7)<a href="{{route('promotion-form.step-8')}}" class="action-button">Next</a>
    @endif @endisset

    <input type="submit" name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-6') }}" class="action-button">Previous</a>
</form>


@endsection


@section('script')
<script>
    $(document).ready(function() {
        var html =
            `<div class="parent"><hr/>
                <div class="row g-3">
            <div class="col-sm-2">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYears[]" aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="5">Year 5</option>
                    <option value="6">Year 6</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    <option value="1">Sem 1</option>
                    <option value="2">Sem 2</option>
                    <option value="3">Sem 3</option>
                    <option value="4">Sem 4</option>
                    <option value="5">Sem 5</option>
                    <option value="6">Sem 6</option>
                    <option value="7">Sem 7</option>
                    <option value="8">Sem 8</option>
                    <option value="9">Sem 9</option>
                    <option value="10">Sem 10</option>
                    <option value="11">Sem 11</option>
                    <option value="12">Sem 12</option>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="teaching">Teaching= (Number of Classes Taught / Total Classes Assigned) X
                    100%</label>
                <input type="text" id="teaching" name="teaching[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
            <div class="col-sm-3">
                <label for="activity_file">File Attachement</label>
                <input type="file" id="activity_file" name="activity_file[]" class="form-control"
                    placeholder="Activity File" aria-label="Activity File">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-2">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee">
            </div>
            <div class="col-sm-2">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col-sm-2">
                <label for="classes_Taught">Number of Classes Taught</label>
                <input type="text" id="classes_Taught" name="classes_Taught[]" class="form-control"
                    placeholder="Number of Classes Taught" aria-label="classes_Taught">
            </div>
            <div class="col-sm-2">
                <label for="class_Assigned">Total Classes Assigned</label>
                <input type="text" id="class_Assigned" name="class_Assigned[]" class="form-control"
                    placeholder="Total Classes Assigned" aria-label="Total Classes Assigned">
            </div>
            <div class="col-sm-2">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks[]" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-sm-1">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo[]" class="form-control" placeholder="enclNo"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-danger remove">-</button>
            </div>
        </div>
    </div>`;
        $(document).on('click', '.add', function() {
            $('.add_input').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('.parent').remove();
        });
        var html1=
        `<div class="parent1"><hr/>
        <div class="row g-3">
            <div class="col-md-3">
                <label for="academicyear">Academic Year</label>
                <select class="form-select form-select-lg mb-3" name="acadmicYear_b[]"
                    aria-label="Default select example">
                    <option selected disabled>Choose Years</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="5">Year 5</option>
                    <option value="6">Year 6</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="semester">Semester</label>
                <select class="form-select form-select-lg mb-3" name="semester_b[]" aria-label="Default select example">
                    <option selected disabled>Choose Semester</option>
                    <option value="1">Sem 1</option>
                    <option value="2">Sem 2</option>
                    <option value="3">Sem 3</option>
                    <option value="4">Sem 4</option>
                    <option value="5">Sem 5</option>
                    <option value="6">Sem 6</option>
                    <option value="7">Sem 7</option>
                    <option value="8">Sem 8</option>
                    <option value="9">Sem 9</option>
                    <option value="10">Sem 10</option>
                    <option value="11">Sem 11</option>
                    <option value="12">Sem 12</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="academicyear">Activity</label>
                <select class="form-select form-select-lg mb-3" name="activity[]" aria-label="Activity">
                    <option selected disabled>Choose Activity</option>
                    <option
                        value="1">
                        Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden
                        etc.
                    </option>
                    <option
                        value="2">
                        Examination and evaluation duties assigned by the Department/ College /University or attending
                        the
                        examination paper evaluation.</option>
                    <option
                        value="3">
                        Student related co-curricular, extension and field based activities such as student clubs,
                        career
                        counselling, study visits, student seminars and other events, cultural, sports, NCC, NSS and
                        community services.</option>
                    <option
                        value="4">
                        Organising seminars/ conferences/ workshops, other Department/ College/University activities.
                    </option>
                    <option value="5">Evidence of actively
                        involved
                        in guiding Ph.D students.</option>
                    <option
                        value="6">
                        Conducting minor or major research project sponsored by national or international agencies.
                    </option>
                    <option value="7">
                        At
                        least one single or joint publication in peer reviewed or UGC list of Journals.</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="involment_file">File (Attachement)</label>
                <input type="file" name="involment_file[]" class="form-control" id="involment_file" >
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="claimed_candidate">Claimed by the Candidate</label>
                <input type="text" id="claimed_candidate" name="claimed_candidate_b[]" class="form-control"
                    placeholder="Claimed by the Candidate" aria-label="claimed_candidate">
            </div>
            <div class="col">
                <label for="committee">Verified by the Committee</label>
                <input type="text" id="committee" name="committee_b[]" class="form-control"
                    placeholder="Verified by the Committee" aria-label="committee">
            </div>
            <div class="col">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks_b[]" class="form-control" placeholder="remarks"
                    aria-label="remarks">
            </div>
            <div class="col-md-3">
                <label for="enclNo">*Encl No.</label>
                <input type="text" id="enclNo" name="enclNo_b[]" class="form-control" placeholder="enclNo"
                    aria-label="enclNo">
            </div>
            <div class="col-md-1 mt-3">
                <button type="button" class="btn btn-danger remove1 mt-4">-</button>
            </div>
        </div>
    </div>`;
    $(document).on('click', '.add1', function() {
            $('.add_input1').append(html1);
        });
        $(document).on('click', '.remove1', function() {
            $(this).closest('.parent1').remove();
        });
         var html2 =
         `
         <div class="parent2 "><hr/>
        <div class="row g-3">
            <div class="col-md-2">
                <label for="research_paper">Title of the Research Paper</label>
                <input type="text" id="research_paper" name="research_paper[]" class="form-control"
                    placeholder="Title of the Research Paper" aria-label="research_paper">
            </div>
            <div class="col-md-2">
                <label for="name_journal">Name of the Journal</label>
                <input type="text" id="name_journal" name="name_journal[]" class="form-control"
                    placeholder="Name of the Journal" aria-label="name_journal">
            </div>
            <div class="col-md-2">
                <label for="vol_pp_year">Vol., PP No. & Year</label>
                <input type="text" id="vol_pp_year" name="vol_pp_year[]" class="form-control" placeholder="Vol., PP No. & Year"
                    aria-label="Vol., PP No. & Year">
            </div>
            <div class="col-md-2">
                <label for="impact_factor*">Impact Factor*</label>
                <input type="text" id="impact_factor" name="impact_factor[]" class="form-control" placeholder="Impact Factor"
                    aria-label="impact_factor">
            </div>
            <div class="col-md-2">
                <label for="name_authors*">Number of authors</label>
                <input type="text" id="name_authors" name="name_authors[]" class="form-control" placeholder="Number of authors"
                    aria-label="name_authors">
            </div>
            <div class="col-md-2">
                <label for="research_file">File</label>
                <input type="file" id="research_file" name="research_file[]" class="form-control" placeholder="research_file"
                    aria-label="research_file">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-4">
                <label for="authorship*">Type of Authorship (First author/corresponding author/principal/co-author)</label>
                <input type="text" id="authorship" name="authorship[]" class="form-control" placeholder="Type of Authorship"
                    aria-label="authorship">
            </div>
            <div class="col-sm-2">
                <label for="UGC_listed_journals*">Sr. No. in UGC listed Journals</label>
                <select name="UGC_listed_journals[]" class="form-control" id="">
                <option >UGC care listed</option>    
                <option >UGC approved</option>    
                <option >Peer Review General</option> 
                <option >Other</option>   
            </select> 
            </div>
            <div class="col-sm-2">
                <label for="verified_committee*">Verified by the Committee</label>
                <input type="text" id="verified_committee" name="verified_committee_c[]" class="form-control" placeholder="Verified by the Committee"
                    aria-label="verified_committee">
            </div>
            <div class="col-sm-2">
                <label for="claimed_score*">Claimed Score</label>
                <input type="number" id="claimed_score" name="claimed_score[]" class="form-control" placeholder="Claimed Score"
                    aria-label="claimed_score">
            </div>
            <div class="col-sm-1">
                <label for="Encl*">Encl.No.</label>
                <input type="text" id="Encl" name="encl_no_c[]" class="form-control" placeholder="Encl.No"
                    aria-label="Encl">
            </div>
            <div class="col-md-1 mt-5">
                <button type="button" class="btn btn-danger remove2 mt">-</button>
            </div>
        </div>
    </div>
         `;
    $(document).on('click', '.add2', function() {
            $('.add_input2').append(html2);
        });
        $(document).on('click', '.remove2', function() {
            $(this).closest('.parent2').remove();
        });
    });
</script>
@endsection