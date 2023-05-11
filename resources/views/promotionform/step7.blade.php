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
        <div class="row">
            
            <div class="col-3">Are you want to fill this section ? </div>
            <div class="col-2">
                <input type="checkbox" name="" class="form-check" id="section1_check" @if(isset($user->step7) and count($user->step7)>0) checked @endif>
            </div>
        </div>
        <div class="parent7 border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row">
                (a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                    <select class="form-select form-select-lg mb-3" required name="type[]" aria-label=".form-select-lg example">
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
                    <label class="fieldlabels">Title of the Book:</label> <input type="text" required name="title[]" placeholder="Title_of_the_Book" @isset($user->step7[0]) value="{{ $user->step7[0]->title??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text" required name="author[]" placeholder="Author" @isset($user->step7[0]) value="{{ $user->step7[0]->auth??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text" required name="co_auther[]" placeholder="Co_Author(s)" @isset($user->step7[0]) value="{{ $user->step7[0]->co_author??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement):</label>
                    <input type="file" name="book_file[]" placeholder="File" @isset($user->step7[0]) {{ $user->step7[0]->file?'required':'' }} @endisset />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN</label>
                    <input type="text" required name="isbn[]" placeholder="ISBN" @isset($user->step7[0]) value='{{ $user->step7[0]->isbn_issn??'' }}' @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" required name="publisher[]" placeholder="Name of the Publisher" @isset($user->step7[0]) value="{{ $user->step7[0]->publisher??'' }}" @endisset/>
                </div>
                <div class="col">
                    <label class="fieldlabels">Month, Year</label>
                    <input type="month" required name="publish_date[]" placeholder="Month, Year" @isset($user->step7[0]) value="{{ $user->step7[0]->publisher_month_year??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" @isset($user->step7[0]) value="{{ $user->step7[0]->claimed_score??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels"> Verified Score</label>
                    <input type="text" required name="iqac_score[]" placeholder=" Verified Score" @isset($user->step7[0]) value="{{ $user->step7[0]->verify_by_committee??'' }}" @endisset />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" required name="book_encl_no[]" placeholder="Encl. No." @isset($user->step7[0]) value="{{ $user->step7[0]->encl_no??'' }}" @endisset/>
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
                                <select class="form-select form-select-lg mb-3" required name="type[]" aria-label=".form-select-lg example">
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
                                <label class="fieldlabels">Title of the Book:</label> <input type="text" required name="title[]" placeholder="Title_of_the_Book" @isset($user->step7[$i]) value="{{ $user->step7[$i]->title??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Author:</label> <input type="text" required name="author[]" placeholder="Author" @isset($user->step7[$i]) value="{{ $user->step7[$i]->auth??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Co_Author(s):</label> <input type="text" required name="co_auther[]" placeholder="Co_Author(s)" @isset($user->step7[$i]) value="{{ $user->step7[$i]->co_author??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">File (Attachement):</label>
                                <input type="file" name="book_file[]" placeholder="File" @isset($user->step7[$i]) {{ $user->step7[$i]->file?'required':'' }} @endisset />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="fieldlabels">ISBN</label>
                                <input type="text" required name="isbn[]" placeholder="ISBN" @isset($user->step7[$i]) value='{{ $user->step7[$i]->isbn_issn??'' }}' @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Name of the Publisher</label>
                                <input type="text" required name="publisher[]" placeholder="Name of the Publisher" @isset($user->step7[$i]) value="{{ $user->step7[$i]->publisher??'' }}" @endisset/>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Month, Year</label>
                                <input type="month" required name="publish_date[]" placeholder="Month, Year" @isset($user->step7[$i]) value="{{ $user->step7[$i]->publisher_month_year??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Claimed Score</label>
                                <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" @isset($user->step7[$i]) value="{{ $user->step7[$i]->claimed_score??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Verified Score</label>
                                <input type="text" required name="iqac_score[]" placeholder="Verified Score" @isset($user->step7[$i]) value="{{ $user->step7[$i]->verify_by_committee??'' }}" @endisset />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Encl. No.</label>
                                <input type="text" required name="book_encl_no[]" placeholder="Encl. No." @isset($user->step7[$i]) value="{{ $user->step7[$i]->encl_no??'' }}" @endisset/>
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
    {{-- check box --}}
    <div class="row">
            
        <div class="col-3">Are you want to fill this section ? </div>
        <div class="col-2">
            <input type="checkbox" name="" class="form-check" id="section2_check" @if(isset($user->step7) and count($user->step7)>0) checked @endif>
        </div>
    </div>
    <div class="parent8 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row">
            (b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="type[]">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="6" @isset($step7_a[0]) @selected($step7_a[0]->type==6) @endisset>CHAPTER OR RESEARCH PAPER</option>
                    <option value="7" @isset($step7_a[0]) @selected($step7_a[0]->type==7) @endisset>BOOK</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text" required name="title[]" placeholder="Title_of_the_Book" value="{{ isset($step7_a[0]->title)?$step7_a[0]->title:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text" required name="author[]" placeholder="Author" value="{{ isset($step7_a[0]->auth)?$step7_a[0]->auth:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text" value="{{ isset($step7_a[0]->co_author)?$step7_a[0]->co_author:'' }}" required name="co_auther[]" placeholder="Co_Author(s)" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement):</label>
                <input type="file" name="book_file[]" placeholder="File" {{ isset($step7_a[0]->file)?'required':'' }} />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN</label>
                <input type="text" required name="isbn[]" placeholder="ISBN" value="{{ isset($step7_a[0]->isbn_issn)?$step7_a[0]->title:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" required name="publisher[]" placeholder="Name of the Publisher " value="{{ isset($step7_a[0]->publisher)?$step7_a[0]->publisher:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Month, Year</label>
                <input type="month" required name="publish_date[]" placeholder="Month, Year" value="{{ isset($step7_a[0]->publisher_month_year)?$step7_a[0]->publisher_month_year:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" value="{{ isset($step7_a[0]->claimed_score)?$step7_a[0]->claimed_score:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified Score</label>
                <input type="text" required name="iqac_score[]" placeholder=" Verified Score" value="{{ isset($step7_a[0]->verify_by_committee)?$step7_a[0]->verify_by_committee:'' }}" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="book_encl_no[]" placeholder="Encl. No." value="{{ isset($step7_a[0]->encl_no)?$step7_a[0]->encl_no:'' }}" />
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
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="type[]">
                        <option selected disabled hidden>Open this select menu</option>
                        <option value="6" @isset($step7_a[$j]) @selected($step7_a[$j]->type==6) @endisset>CHAPTER OR RESEARCH PAPER</option>
                        <option value="7" @isset($step7_a[$j]) @selected($step7_a[$j]->type==7) @endisset>BOOK</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Title of the Book:</label> <input type="text" required name="title[]" placeholder="Title_of_the_Book" value="{{ isset($step7_a[$j]->title)?$step7_a[$j]->title:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Author:</label> <input type="text" required name="author[]" placeholder="Author" value="{{ isset($step7_a[$j]->auth)?$step7_a[$j]->auth:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Co_Author(s):</label> <input type="text" value="{{ isset($step7_a[$j]->co_author)?$step7_a[$j]->co_author:'' }}" required name="co_auther[]" placeholder="Co_Author(s)" />
                </div>
                <div class="col">
                    <label class="fieldlabels">File (Attachement):</label>
                    <input type="file" name="book_file[]" placeholder="File" {{ isset($step7_a[$j]->file)?'required':'' }} />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="fieldlabels">ISBN</label>
                    <input type="text" required name="isbn[]" placeholder="ISBN" value="{{ isset($step7_a[$j]->isbn_issn)?$step7_a[$j]->title:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Name of the Publisher</label>
                    <input type="text" required name="publisher[]" placeholder="Name of the Publisher " value="{{ isset($step7_a[$j]->publisher)?$step7_a[$j]->publisher:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Month, Year</label>
                    <input type="month" required name="publish_date[]" placeholder="Month, Year" value="{{ isset($step7_a[$j]->publisher_month_year)?$step7_a[$j]->publisher_month_year:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Claimed Score</label>
                    <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" value="{{ isset($step7_a[$j]->claimed_score)?$step7_a[$j]->claimed_score:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Verified Score</label>
                    <input type="text" required name="iqac_score[]" placeholder="Verified Score" value="{{ isset($step7_a[$j]->verify_by_committee)?$step7_a[$j]->verify_by_committee:'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" required name="book_encl_no[]" placeholder="Encl. No." value="{{ isset($step7_a[$j]->encl_no)?$step7_a[$j]->encl_no:'' }}" />
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
    <div class="row">
            
        <div class="col-3">Are you want to fill this section ? </div>
        <div class="col-2">
            <input type="checkbox" name="" class="form-check" id="section3_check" @if(isset($user->step7_b) and count($user->step7_b)>0) checked @endif>
        </div>
    </div>
    <div class="parent9 border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Select Type</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="ict_type[]">
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
                <label class="fieldlabels">Activity*</label> <input type="text" required name="ict_activity[]" placeholder="Activity*" @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->activity??'' }}" @endisset/>
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="number" required name="ict_claimed_score[]" placeholder="Claimed Score" @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->claimed_score??'' }}" @endisset />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="ict_committee[]" placeholder="Verified by the Committee"  value="Pending" readonly/>
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="ict_encl_no[]" placeholder="Encl. No." @isset($user->step7_b[0]) value="{{ $user->step7_b[0]->encl_no??'' }}" @endisset />
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
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="ict_type[]">
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
                            <label class="fieldlabels">Activity*</label> <input type="text" required name="ict_activity[]" placeholder="Activity*" @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->activity??'' }}" @endisset/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Claimed Score</label> <input type="number" required name="ict_claimed_score[]" placeholder="Claimed Score" @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->claimed_score??'' }}" @endisset />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="fieldlabels">Verified by the Committee</label>
                            <input type="text" required name="ict_committee[]" placeholder="Verified by the Committee" value="Pending" readonly/>
                        </div>
                        <div class="col">
                            <label class="fieldlabels">Encl. No.</label>
                            <input type="text" required name="ict_encl_no[]" placeholder="Encl. No." @isset($user->step7_b[$u]) value="{{ $user->step7_b[$u]->encl_no??'' }}" @endisset />
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

    <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-6') }}" class="action-button">Previous</a>
</form>


@endsection


@section('script')


@section('script')
<script>
    $(document).ready(function() {
        $(".submit").click(function() {
            return false;
        })
        var html7 =
            `<div class="parent7 ">
        <div class="row">
            (a) BOOKS AUTHORED WHICH ARE PUBLISHED BY:
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3" required name="type[]"
                    aria-label=".form-select-lg example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="1">Editor of Book by National Publisher</option>
                    <option value="2">Editor of Book by International Publisher
                    </option>
                    <option value="3">Chapter in Edited Book</option>
                    <option value="4">National publishers</option>
                    <option value="5">International publishers</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input type="text"
                    required name="title[]" placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text"
                    required name="author[]" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    required name="co_auther[]" placeholder="Co_Author(s)" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement):</label> 
                <input type="file" name="book_file[]" placeholder="File" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN</label>
                <input type="text" required name="isbn[]" placeholder="ISBN" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" required name="publisher[]"
                    placeholder="Name of the Publisher" />
            </div>
            <div class="col">
                <label class="fieldlabels">Month, Year</label>
                <input type="month" required name="publish_date[]" placeholder="Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified Score</label>
                <input type="text" required name="iqac_score[]"
                    placeholder="Verified Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="book_encl_no[]" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove7 mt-3">-</button>
            </div>
        </div>
        <hr>
        </div>
    </div> `;
        $(document).on('click', '.add7', function() {
            $('.add_input7').append(html7);
        });
        $(document).on('click', '.remove7', function() {
            $(this).closest('.parent7').remove();
        });
        var html8 =
            `
            <div class="parent8">
        <div class="row">
            (b) TRANSLATION WORKS IN INDIAN AND FOREIGN LANGUAGES BY QUALIFIED FACULTIES
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fieldlabels">BOOKS AUTHORED WHICH ARE PUBLISHED BY</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required name="type[]">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="6">CHAPTER OR RESEARCH PAPER</option>
                    <option value="7">BOOK</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Title of the Book:</label> <input  type="text" required name="title[]" placeholder="Title_of_the_Book" />
            </div>
            <div class="col">
                <label class="fieldlabels">Author:</label> <input type="text" required name="author[]" placeholder="Author" />
            </div>
            <div class="col">
                <label class="fieldlabels">Co_Author(s):</label> <input type="text"
                    required name="co_auther[]" placeholder="Co_Author(s)" />
            </div>
            <div class="col">
                <label class="fieldlabels">File (Attachement):</label> 
                <input type="file" name="book_file[]" placeholder="File" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">ISBN</label>
                <input type="text" required name="isbn[]" placeholder="duration_to" />
            </div>
            <div class="col">
                <label class="fieldlabels">Name of the Publisher</label>
                <input type="text" required name="publisher[]"
                    placeholder="Name of the Publisher " />
            </div>
            <div class="col">
                <label class="fieldlabels">Month, Year</label>
                <input type="month" required name="publish_date[]" placeholder="Month, Year" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label>
                <input type="number" required name="book_claimed_Score[]" placeholder="Claimed Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Verified Score</label>
                <input type="text" required name="iqac_score[]"
                    placeholder="Verified Score" />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="book_encl_no[]" placeholder="Encl. No." />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove8 mt-3">-</button>
            </div>
        </div>
        <hr>
    </div>
            `;
        $(document).on('click', '.add8', function() {
            $('.add_input8').append(html8);
        });
        $(document).on('click', '.remove8', function() {
            $(this).closest('.parent8').remove();
        });
        var html9 =
            ` 
            <div class="parent9 ">
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Select Type</label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required name="ict_type[]">
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
                    required name="ict_activity[]" placeholder="Activity*" />
            </div>
            <div class="col">
                <label class="fieldlabels">Claimed Score</label> <input type="number"
                    required name="ict_claimed_score[]" placeholder="Claimed Score" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="fieldlabels">Verified by the Committee</label>
                <input type="text" required name="ict_committee[]"
                    placeholder="Verified by the Committee" value="Pending" readonly />
            </div>
            <div class="col">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="ict_encl_no[]" placeholder="Encl. No." />
            </div>
            <div class="col">
                <label class="fieldlabels">File</label>
                <input type="file" name="ict_file[]" placeholder="File" />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove9 mt-4">-</button>
            </div>
        </div>
        <hr>
        </div>
            `;
            $(document).on('click', '.add9', function() {
                $('.add_input9').append(html9);
            });
            $(document).on('click', '.remove9', function() {
                $(this).closest('.parent9').remove();
            });
        });

        
    $(document).on('click','#section1_check',function(){
        if($(this).is(':checked')){
            $('.parent7').find('input').removeAttr('disabled');
            $('.parent7').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parent7').find('input').attr('disabled','true');
            $('.parent7').find('select  ').attr('disabled','true');
        }
    });
    //section 2
    $(document).on('click','#section2_check',function(){
        if($(this).is(':checked')){
            $('.parent8').find('input').removeAttr('disabled');
            $('.parent8').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parent8').find('input').attr('disabled','true');
            $('.parent8').find('select').attr('disabled','true');
        }
    });

    //section 3
    $(document).on('click','#section3_check',function(){
        if($(this).is(':checked')){
            $('.parent9').find('input').removeAttr('disabled');
            $('.parent9').find('select').removeAttr('disabled');
        }
        else
        {
            $('.parent9').find('input').attr('disabled','true');
            $('.parent9').find('select').attr('disabled','true');
        }
    });

    //on dynamic data comes 
    @if(isset($user->step7) and count($user->step7)>0) 
        $('#section1_check').prop('checked', true);
        $('#section2_check').prop('checked', true);
        @else
        $('.parent7').find('input').attr('disabled','true');
        $('.parent7').find('select').attr('disabled','true');
        $('.parent8').find('input').attr('disabled','true');
        $('.parent8').find('select').attr('disabled','true');
     @endif
     @if(isset($user->step7_b) and count($user->step7_b)>0) 
        $('#section3_check').prop('checked', true);
        @else
        $('.parent9').find('input').attr('disabled','true');
        $('.parent9').find('select').attr('disabled','true');
     @endif
    </script>
@endsection