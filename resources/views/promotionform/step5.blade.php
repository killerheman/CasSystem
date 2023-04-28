@extends('layout.teacher_promotion', ['activeClass' => 5])
@section('content')
<form action="{{ route('promotion-form.step-5-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-card">
        <div class="row">
            <div class="col-9">
                <h2 class="fs-title">ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL / WORKSHOPS/ QIP/
                    FIP ETC
                    ATTENDED: (Attach certificates)
                </h2>
            </div>
            <div class="col-3">
                <h2 class="steps">Step 5 - 10</h2>
            </div>
        </div>
        <div class="parent4 border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <div class="row mt-3 ">
                <div class="col">
                    <label class="fieldlabels"></label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="type[]">
                        <option selected value="" disabled selected>Open this select menu</option>
                        <option value="1" {{!empty($user->step5[0])?($user->step5[0]->type=='1'?'selected':''):'' }}>
                            ORIENTATION/REFRESHER COURSE OR ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL /
                            WORKSHOPS/ QIP/ FIP ETC
                            ATTENDED: (Attach certificates)
                        </option>
                        <option value="2" {{!empty($user->step5[0])?($user->step5[0]->type=='2'?'selected':''):'' }}>
                            ORIENTATION/REFRESHER COURSE ATTENDED (ONLY UGC
                            RECOGNIZED):(Attach certificates)</option>
                            <option value="3" {{!empty($user->step5[0])?($user->step5[0]->type=='3'?'selected':''):'' }}>
                                Other
                            </option>
                    </select>
                </div>
                <div class="col">
                    <label class="fieldlabels">Place:</label> <input type="text" required name="place[]" placeholder="Place from" value=" {{!empty($user->step5[0])?($user->step5[0]->place):'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Particulars:</label> <input type="text" required name="particulars[]" placeholder="Particulars from" value="{{!empty($user->step5[0])?($user->step5[0]->particulars):'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels">Duration:</label> <input type="text" required name="duration_from[]" placeholder="Duration from" value="{{!empty($user->step5[0])?($user->step5[0]->duration_from):'' }}" />
                </div>
                <div class="col">
                    <label class="fieldlabels"></label> <input type="text" required name="duration_to[]" placeholder="duration_to" value="{{!empty($user->step5[0])?($user->step5[0]->duration_to):'' }}" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <label class="fieldlabels">Sponsoring Agency</label>
                    <input type="text" required name="sponsoring_agency[]" placeholder="Sponsoring Agency" value="{{!empty($user->step5[0])?($user->step5[0]->sponsoring_agency):'' }}" />
                </div>
                <div class="col-3">
                    <label class="fieldlabels">Encl. No.</label>
                    <input type="text" placeholder="Sponsoring Agency" required name="encl_no[]" value="{{!empty($user->step5[0])?($user->step5[0]->encl_no):'' }}" />
                </div>
                <div class="col-4">
                    <label class="fieldlabels">Attach (certificates)</label>
                    <input type="file"  name="file[]" placeholder="Attach certificates" {{!empty($user->step5[0])?($user->step5[0]->file?'required':''):'' }} />
                    @error('file.0') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-info add4 mt-3">+</button>
                </div>
            </div>
            <div class="add_input4">
                @isset($user->step5)
                @for($j=1;$j<count($user->step5);$j++)
                    <div class="parent4 ">
                        <div class="row mt-3 ">
                            <div class="col">
                                <label class="fieldlabels"></label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="type[]">
                                    <option selected value="" disabled selected>Open this select menu</option>
                                    <option value="1" {{!empty($user->step5[$j])?($user->step5[$j]->type=='1'?'selected':''):'' }}>
                                        ORIENTATION/REFRESHER COURSE OR ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL /
                                        WORKSHOPS/ QIP/ FIP ETC
                                        ATTENDED: (Attach certificates)
                                    </option>
                                    <option value="2" {{!empty($user->step5[$j])?($user->step5[$j]->type=='2'?'selected':''):'' }}>
                                        ORIENTATION/REFRESHER COURSE ATTENDED (ONLY UGC
                                        RECOGNIZED):(Attach certificates)</option>
                                        <option value="3" {{!empty($user->step5[$j])?($user->step5[$j]->type=='3'?'selected':''):'' }}>
                                            Other
                                        </option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Place:</label> <input type="text" required name="place[]" placeholder="Place from" value=" {{!empty($user->step5[$j])?($user->step5[$j]->place):'' }}" />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Particulars:</label> <input type="text" required name="particulars[]" placeholder="Particulars from" value="{{!empty($user->step5[$j])?($user->step5[$j]->particulars):'' }}" />
                            </div>
                            <div class="col">
                                <label class="fieldlabels">Duration:</label> <input type="text" required name="duration_from[]" placeholder="Duration from" value="{{!empty($user->step5[$j])?($user->step5[$j]->duration_from):'' }}" />
                            </div>
                            <div class="col">
                                <label class="fieldlabels"></label> <input type="text" required name="duration_to[]" placeholder="duration_to" value="{{!empty($user->step5[$j])?($user->step5[$j]->duration_to):'' }}" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <label class="fieldlabels">Sponsoring Agency</label>
                                <input type="text" required name="sponsoring_agency[]" placeholder="Sponsoring Agency" value="{{!empty($user->step5[$j])?($user->step5[$j]->sponsoring_agency):'' }}" />
                            </div>
                            <div class="col-3">
                                <label class="fieldlabels">Encl. No.</label>
                                <input type="text" placeholder="Sponsoring Agency" required name="encl_no[]" value="{{!empty($user->step5[$j])?($user->step5[$j]->encl_no):'' }}" />
                            </div>
                            <div class="col-4">
                                <label class="fieldlabels">Attach (certificates)</label>
                                <input type="file"  name="file[]" placeholder="Attach certificates" {{!empty($user->step5[$j])?($user->step5[$j]->file?'required':''):'' }} />
                                @error('file.'.$j) <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-danger remove4 mt-3">-</button>
                            </div>
                        </div>
                        <div class="add_input4"></div>
                    </div>
                    @endfor
                    @endisset
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="fs-title"> YOUR VISION FOR THE DEPARTMENT /COLLEGE/UNIVERSITY:
                </h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" required name="vision_to_the_department" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->step4->vision_to_the_department??'' }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="fs-title"> YOUR CONTRIBUTION TO THE DEPARTMENT /COLLEGE/UNIVERSITY
                    (Attach relevant documents and mention Enclosure No. here for each document)
                </h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" required name="contribution_to_the_department" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->step4->contribution_to_the_department??'' }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="fs-title"> FUTURE ACADEMIC DEVELOPMENT PLAN FOR SELF AS WELL AS DEPARTMENT
                    /COLLEGE/UNIVERSITY:
                </h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" required name="future_academic_development_plan" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->step4->future_academic_development_plan??'' }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="fs-title"> ANY OTHER RELEVANT INFORMATION:</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required name="other_relevant_information">{{ $user->step4->other_relevant_information??'' }}</textarea>
                </div>
            </div>
        </div>
    </div>

    @isset($user->step) @if($user->step>=5)<a href="{{route('promotion-form.step-6')}}" class="action-button">Next</a>
    @endif @endisset

    <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />

    <a type="button" href="{{ route('promotion-form.step-4') }}" class="action-button">Previous</a>
</form>
@endsection


@section('script')
<script>
    var html4 = `<div class="parent4"><hr/>
        <div class="row mt-3 ">
            <div class="col">
                <label class="fieldlabels"></label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required name="type[]">
                    <option selected value="" disabled selected>Open this select menu</option>
                    <option value="1">ORIENTATION/REFRESHER COURSE OR ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL /
                        WORKSHOPS/ QIP/ FIP ETC
                        ATTENDED: (Attach certificates)
                    </option>
                    <option value="2" > ORIENTATION/REFRESHER COURSE ATTENDED (ONLY UGC
                        RECOGNIZED):(Attach certificates)</option>
                        <option value="3">
                                Other
                        </option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Place:</label> <input type="text"
                    required name="place[]" placeholder="Place from"  />
            </div>
            <div class="col">
                <label class="fieldlabels">Particulars:</label> <input type="text"
                    required name="particulars[]" placeholder="Particulars from"  />
            </div>
            <div class="col">
                <label class="fieldlabels">Duration:</label> <input type="text"
                    required name="duration_from[]" placeholder="Duration from"/>
            </div>
            <div class="col">
                <label class="fieldlabels"></label> <input type="text" required name="duration_to[]" placeholder="duration_to"  />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <label class="fieldlabels">Sponsoring Agency</label>
                <input type="text" required name="sponsoring_agency[]"
                    placeholder="Sponsoring Agency" />
            </div>
            <div class="col-3">
                <label class="fieldlabels">Encl. No.</label>
                <input type="text" required name="sponsoring_agency"
                    placeholder="Sponsoring Agency" required name="encl_no[]"/>
            </div>
            <div class="col-4">
                <label class="fieldlabels">Attach (certificates)</label>
                <input type="file"  name="file[]"
                    placeholder="Attach certificates" />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger remove4 mt-3">-</button>
            </div>
        </div>
                </div>`;
    $(document).on('click', '.add4', function() {
        $('.add_input4').append(html4);
    });
    $(document).on('click', '.remove4', function() {
        $(this).closest('.parent4').remove();
    });
</script>
@endsection