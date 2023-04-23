@extends('layout.teacher_promotion')
@section('progress-width','50%')
@section('content')
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
    <div class="parent4  border border-4 rounded rounded-5  border-danger mb-5 p-3">
        <div class="row mt-3 ">
            <div class="col">
                <label class="fieldlabels"></label>
                <select class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">ORIENTATION/REFRESHER COURSE OR ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL /
                        WORKSHOPS/ QIP/ FIP ETC
                        ATTENDED: (Attach certificates)
                    </option>
                    <option value="1"> ORIENTATION/REFRESHER COURSE ATTENDED (ONLY UGC
                        RECOGNIZED):(Attach certificates)</option>
                </select>
            </div>
            <div class="col">
                <label class="fieldlabels">Place:</label> <input type="text"
                    name="Place_from" placeholder="Place from" />
            </div>
            <div class="col">
                <label class="fieldlabels">Particulars:</label> <input type="text"
                    name="Particulars_from" placeholder="Particulars from" />
            </div>
            <div class="col">
                <label class="fieldlabels">Duration:</label> <input type="text"
                    name="duration_from" placeholder="Duration from" />
            </div>
            <div class="col">
                <label class="fieldlabels"></label> <input type="text" name="duration_to"
                    placeholder="duration_to" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <label class="fieldlabels">Sponsoring Agency</label>
                <input type="text" name="sponsoring_agency"
                    placeholder="Sponsoring Agency" />
            </div>
            <div class="col-3">
                <label class="fieldlabels">Sponsoring Agency</label>
                <input type="text" name="sponsoring_agency"
                    placeholder="Sponsoring Agency" />
            </div>
            <div class="col-4">
                <label class="fieldlabels">Attach (certificates)</label>
                <input type="file" name="attach_certificates"
                    placeholder="Attach certificates" />
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info add4 mt-3">+</button>
            </div>
        </div>
        <div class="add_input4"></div>
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
      var html4 = '<div class="parent4"><hr/>\
                                        <div class="row mt-3">\
                                        <div class="col">\
                                        <label class="fieldlabels"></label>\
                                        <select class="form-select form-select-lg mb-3"\
                                        aria-label=".form-select-lg example">\
                                        <option selected>Open this select menu</option>\
                                        <option value="1">ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL /\
                                        WORKSHOPS/ QIP/ FIP ETC\
                                        ATTENDED: (Attach certificates)\
                                        </option>\
                                        <option value="1"> ORIENTATION/REFRESHER COURSE ATTENDED (ONLY UGC\
                                        RECOGNIZED):(Attach certificates)</option>\
                                        </select></div><div class="col">\
                                        <label class="fieldlabels">Place:</label> <input type="text"\
                                        name="Place_from" placeholder="Place from" />\
                                        </div><div class="col">\
                                        <label class="fieldlabels">Particulars:</label> <input type="text"\
                                        name="Particulars_from" placeholder="Particulars from" />\
                                        </div><div class="col">\
                                        <label class="fieldlabels">Duration:</label> <input type="text"\
                                        name="duration_from" placeholder="Duration from" />\
                                        </div><div class="col">\
                                        <label class="fieldlabels"></label> <input type="text" name="duration_to"\
                                        placeholder="duration_to" />\
                                        </div></div><div class="row mt-2">\
                                        <div class="col-4">\
                                        <label class="fieldlabels">Sponsoring Agency</label>\
                                        <input type="text" name="sponsoring_agency"\
                                        placeholder="Sponsoring Agency" />\
                                        </div><div class="col-3">\
                                        <label class="fieldlabels">Sponsoring Agency</label>\
                                        <input type="text" name="sponsoring_agency"\
                                        placeholder="Sponsoring Agency" />\
                                        </div><div class="col-3">\
                                        <label class="fieldlabels">Attach (certificates)</label>\
                                        <input type="file" name="attach_certificates"\
                                        placeholder="Attach certificates" /></div>\
                                        <div class="col-1">\
                                        <button type="button" class="btn btn-danger remove4 mt-3">-</button>\
                                        </div></div></div>';
            $(document).on('click', '.add4', function() {
                $('.add_input4').append(html4);
            });
            $(document).on('click', '.remove4', function() {
                $(this).closest('.parent4').remove();
            });
</script>
@endsection