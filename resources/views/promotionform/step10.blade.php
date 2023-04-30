@extends('layout.teacher_promotion', ['activeClass' => 10])
@section('content')
<div class="form-card">
    <form action="{{ route('promotion-form.step-10-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-7">
                <h6 class="">NOTE:</h6>
                <ul style="font-size:12px;">
                    <li>The paper presented if part of an edited book or proceeding then it can be claimed only once.
                    </li>
                    <li>For joint supervision of research students, the formula shall be 70% of the total score for the
                        Supervisor and Co-supervisor. Supervisor and Co-supervisor, both shall get 7 marks each.</li>
                    <li>*For the purpose of calculating the research score of the teacher, the combined research score
                        from
                        the categories of 5(b). Policy Document and 6. Invited lectures/Resource Person/Paper
                        presentations
                        shall have an upper capping of thirty percent of the total research score of the teacher
                        concerned.
                    </li>
                    <li>The research score shall be from a minimum of three categories out of six categories.</li>
                </ul>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 10 - 10</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h6>Applicant Claimed Score : </h6>
            </div>
            <div class="col-3">
                <input type="text" required name="10_applicant_claimed_score" />
            </div>
        </div>
        <div class="parent border border-4 rounded rounded-5  border-danger mb-5 p-3">
            <h6 class="text-center">Summary of Total Claimed Score(1+2+3+4+5+6)</h6>
            <div class="row text-center">
                <div class="col-3">
                    <p>Assessment Period From :</p>
                </div>
                <div class="col-3">
                    <input type="date" required name="assessment_period_from" />
                </div>
                <div class="col-3">
                    <input type="date" required name="assessment_period_to" />
                </div>
            </div>
            <div class="row text-center">
                <div class="col-3">
                    <p>Entire Assessment Period From :</p>
                </div>
                <div class="col-3">
                    <input type="date" required name="entire_assessment_period_from" />
                </div>
                <div class="col-3">
                    <input type="date" required name="entire_assessment_period_to" />
                </div>
            </div>
            <div class="row g-3 add_input">
                <div class="col-3">
                    <label>Claimed Score</label>
                    <input type="text" class="claimed_score" required name="claimed_score[]" />
                </div>
                <div class="col-1 mt-5">
                    <button type="button" class="btn btn-info plus mt">+</button>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-sm-3">
                    <label> Total Claimed Score</label>
                    <input type="text" class="total_claimed_score" disabled readonly id="total_value" value="0" required name="total_claimed_score" />
                </div>
                <div class="col-sm-9 d-flex justify-content-center">
                    <button type="button" class="btn btn-warning mt-3 mb-3" data-toggle="modal" data-target="#docmodal"> View All Your Document</button>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-sm-3">
                   
                </div>
            </div>

        </div>
        <h6 class="text-center text-decoration-underline">Declaration </h6>
        <div class="row">
            <div class="col-1">
                <input type="checkbox" required name="accept_declaration" checked />
            </div>
            <div class="col-11">
                <p>I, <span style="border-bottom: 2px solid;font-weight:bold;" >{{ Auth::guard('promotion_app_user')->user()->name ?? '' }}</span> hereby solemnly certify that the information provided in
                    and
                    documents attached to this application form is true, correct, and complete to the best of my
                    knowledge
                    and belief. If any information/document is found to be fake/forged/incomplete, the University is
                    well
                    within its rights to reject my application and also to cumulatively reverse the promotion(s) awarded
                    to
                    me.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h6>Date : <span>{{ \Carbon\Carbon::now()->format('Y-m-d') }}</span></h6>
            </div>
            <div class="col-4">
                <p>Signature of the applicant :</p>
                <input type="file" name="applicant_signature" />
            </div>
        </div>
        <div class="row text-center mt-5">
            <h6>Forwarded By :</h6>
            <p>Head of the Department/Principal</p>
            <p>Name of the Department/College (With Seal)</p>
        </div>
        <input type="submit" required name="submit" class=" action-button-submit" value="Submit" />
        <a type="button" href="{{ route('promotion-form.step-9') }}" class="action-button"> Previous</a>
    </form>


    {{-- Document Modal --}}
    <div class="modal" id="docmodal" tabindex="-1"  aria-labelledby="docmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>




@endsection


    @section('script')
    <script>
        $(document).ready(function() {
            var html = `<div class='col-md-3 parent1'><div class='row'><div class="col-sm-10 parent1">
                    <label>Claimed Score</label>
                    <input type="text" class="claimed_score" required name="claimed_score[]" />
                </div>
                <div class="col-md-2 mt-4">
                    <button type="button" class="btn btn-danger remove">-</button>
                </div></div></div>`;

            $(document).on('click', '.plus', function() {
                $('.add_input').append(html);
            });
            $(document).on('click', '.remove', function() {
                $(this).closest('.parent1').remove();
            });
            // var value = $('.add').val();


        });

        $(document).on('keyup', '.claimed_score', function() {
            var scores = $(".claimed_score");
            var score_sum = 0;
            console.log(scores);
            for (var i = 0; i < scores.length; i++) {
                score_sum += parseInt($(scores[i]).val());
            }

            $('.total_claimed_score').val(score_sum >= 1 ? score_sum : 0);
        });
    </script>
    @endsection
