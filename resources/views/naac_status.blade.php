<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College NAAC Status</title>
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <link rel="icon" href="{{ asset('asset/logo.jpg') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-image: linear-gradient(to top, #d5dee7 0%, #ffafbd 0%, #c9ffbf 100%);">

    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-offset-4 col-md-6 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">NAAC Status Report</h3>
                        {{-- <span class="description">or use you email for registration:</span> --}}
                        <form class="form-horizontal" method="post" action="{{ route('naac-filling.update',$user) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input disabled type="email" value="{{ $college->email }}" class="form-control" placeholder="Email" readonly>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="district" required>
                                    <option value="" selected disabled>-- Select District --</option>
                                    <option value="darbhanga" @isset($college->NaacReport)@selected($college->NaacReport->district=='darbhanga')@endisset>Darbhanga</option>
                                    <option value="madhubani" @isset($college->NaacReport)@selected($college->NaacReport->district=='madhubani')@endisset>Madhubani</option>
                                    <option value="samastipur" @isset($college->NaacReport)@selected($college->NaacReport->district=='samastipur')@endisset>Samastipur</option>
                                    <option value="begusarai" @isset($college->NaacReport)@selected($college->NaacReport->district=='begusarai')@endisset>Begusarai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="College Name" value="{{ $college->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="college_type" required>
                                    <option value="" selected disabled>-- College Type --</option>
                                    <option value="constituent_college" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='constituent_college') @endisset>Constituent</option>
                                    <option value="affiliated_degree" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='affiliated_degree') @endisset>Affiliated Degree College</option>
                                    <option value="affiliated_bed" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='affiliated_bed') @endisset>Affiliated B.Ed College</option>
                                    <option value="govt_college" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='govt_college') @endisset>Govt. College</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="aished_id">ASIHE ID</label>
                                <input type="text" class="form-control" name="aished_id" placeholder="ASIHE ID" value="{{ $college->NaacReport->aished_id??'' }}" required readonly>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="academic_level" required>
                                    <option value="" selected disabled>-- Academic Level --</option>
                                    <option value="ug" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='ug')@endisset>UG</option>
                                    <option value="pg" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='pg')@endisset>PG</option>
                                    <option value="both" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='both')@endisset>Both UG & PG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Address" name="address" required>{{ $college->NaacReport->address??'' }}</textarea>
                            </div>
                           
                            <div class="form-group">
                                <select class="form-control" id="accredited_status" name="accrediation_status" required>
                                    <option value="" selected disabled>-- Accreditation Status --</option>
                                    <option value="1" @isset($college->NaacReport)@selected($college->NaacReport->accrediation_status==true)@endisset>Accredited</option>
                                    <option value="0" @isset($college->NaacReport)@selected($college->NaacReport->accrediation_status==false)@endisset>Not Accredited</option>
                                </select>
                            </div>
                            <div id="accredited" @isset($college->NaacReport) @if($college->NaacReport->accrediation_status==0) style="display:none" @endif  @endisset>
                            <div class="form-group">
                                <label for="cycle_of_acc">Cycle Of Accreditation</label>
                                <select name="cycle_of_accreditation" id="" class="form-control">
                                    <option value="" selected disabled>--select cycle --</option>
                                    <option value="1" @isset($college->NaacReport)@selected($college->NaacReport->cycle_of_accreditation==1) @endisset>Cycle - 1</option>
                                    <option value="2" @isset($college->NaacReport)@selected($college->NaacReport->cycle_of_accreditation==2) @endisset>Cycle - 2 </option>
                                    <option value="3" @isset($college->NaacReport)@selected($college->NaacReport->cycle_of_accreditation==3) @endisset>Cycle - 3</option>
                                </select>
                            </div>
                                <div class="form-group">
                                    <label>Date of last Accreditation</label>
                                    <input type="date" name="last_accredition_date" id="last_accredition_date" value="{{ $college->NaacReport->last_accredetion??'' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="accredition_upto"> Accreditation valid upto</label>
                                    <input type="date" name="accredition_upto" id="accredition_upto" value="{{ $college->NaacReport->accredetion_upto??'' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="grade"> Grade</label>
                                    <input type="text" name="grade" id="grade" value="{{ $college->NaacReport->grade??'' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cgpa"> CGPA</label>
                                    <input type="text" name="cgpa" id="cgpa" value="{{ $college->Naacreport->cgpa??'' }}"
                                        class="form-control">
                                </div>
                              
                                <div class="form-group">
                                    <label>Whether AQAR Pending ?</label>
                                    {{-- <input type="text" id="aqar_submitted_upto" name="aqar_submitted_upto" value="{{ $college->NaacReport->aqar_submition_upto??'' }}"
                                        class="form-control"> --}}
                                        <select name="whether_aqar_pending" id="whether_aqar_pending" class="form-control">
                                            <option value="" selected hidden>--Select  Status --</option>
                                            <option value="1" @isset($college->NaacReport) @selected($college->NaacReport->whether_aqar_pending==1) @endisset>Yes</option>
                                            <option value="0" @isset($college->NaacReport) @selected($college->NaacReport->whether_aqar_pending==0) @endisset>No</option>
                                        </select>
                                </div>
                                <div class="form-group aqar_pending_yes" id="aqar_pending_yes" @if(isset($college->NaacReport) and $college->NaacReport->whether_aqar_pending==0) style="display:none" @endif>
                                    Please Choose Academic Year
                                    <table class="table">
                                        <tr>
                                            <th>
                                                <input type="checkbox" name="aqar_pending_ch[]" id=""  @isset($college->NaacReport) @checked(in_array('2017-18',json_decode($college->NaacReport->aqar_pending_ch??[]))) @endisset value="2017-18">
                                            </th>
                                            <th>2017-18</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="checkbox" name="aqar_pending_ch[]" id="" value="2018-19" @isset($college->NaacReport) @checked(in_array('2018-19',json_decode($college->NaacReport->aqar_pending_ch??[]))) @endisset>
                                            </th>
                                            <th>2018-19</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="checkbox" name="aqar_pending_ch[]" id="" value="2019-20" @isset($college->NaacReport) @checked(in_array('2019-20',json_decode($college->NaacReport->aqar_pending_ch??[]))) @endisset>
                                            </th>
                                            <th>2019-20</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="checkbox" name="aqar_pending_ch[]" id="" value="2020-21" @isset($college->NaacReport) @checked(in_array('2020-21',json_decode($college->NaacReport->aqar_pending_ch??[]))) @endisset>
                                            </th>
                                            <th>2020-21</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="checkbox" name="aqar_pending_ch[]" id="" value="2021-22" @isset($college->NaacReport) @checked(in_array('2021-22',json_decode($college->NaacReport->aqar_pending_ch??[]))) @endisset>
                                            </th>
                                            <th>2021-22</th>
                                        </tr>
                                    </table>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Proposed date of submission of pending AQAR</label>
                                    <input type="date" name="proposed_aqar_date" id="proposed_aqar_date" value="{{ $college->NaacReport->praposed_date_of_pending_aqar??''}}"
                                        class="form-control" >
                                </div>
                                <div class="iiqaprapose">
                                    <div class="form-group">
                                        <label for="liqa_status_prapose">IIQA Status</label>
                                        <select name="iqa_status_prapose" id="liqa_status_prapose" class="form-control">
                                            <option value="" selected disabled>--select status--</option>
                                            <option value="1" @isset($college->NaacReport)@selected($college->NaacReport->iqa_status_prapose==1) @endisset>Submitted</option>
                                            <option value="0"  @isset($college->NaacReport)@selected($college->NaacReport->iqa_status_prapose==0) @endisset>Not-Submitted</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="iqa_submition_date_prapose" id="iqa_submition_lbl_prapose"></label>
                                        <input type="date" name="iqa_submition_date_prapose" id="iqa_submition_date_prapose" class="form-control" value="{{ $college->NaacRreport->iqa_submition_date_prapose??'' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="iiqa">Proposed date of submission of pending IIQA</label>
                                    <input type="date" id="iiqa" name="iiqa" value="{{ $college->NaacReport->praposed_date_of_pending_iiqa??'' }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div id="liqa" style="display:none">
                                <div class="form-group">
                                    <label for="liqa_status">IIQA Status</label>
                                    <select name="iqa_status" id="liqa_status" class="form-control">
                                        <option value="" selected disabled>--select status--</option>
                                        <option value="1" @isset($college->NaacReport)@selected($college->NaacReport->liqa_status==1) @endisset>Submitted</option>
                                        <option value="0"  @isset($college->NaacReport)@selected($college->NaacReport->liqa_status==0) @endisset>Not-Submitted</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="iqa_submition_date" id="iqa_submition_lbl"></label>
                                    <input type="date" name="iqa_submition_date" id="" class="form-control" value="{{ $college->NaacRreport->iqa_submition_date??'' }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ssr_status">SSR Submitted ?</label>
                                <select class="form-control" name="ssr_staus" id="ssr_status">
                                    <option value="" selected disabled>-- SSR Submitted ? --</option>
                                    <option value="1"  @isset($college->NaacReport)@selected($college->NaacReport->ssr_status==true)@endisset>Submitted</option>
                                    <option value="0"  @isset($college->NaacReport)@selected($college->NaacReport->ssr_status==false)@endisset>Not Submitted</option>
                                </select>
                            </div>
                            <div class="form-group d-none" id="ssr_div" >
                                <label for="ssr_submission_date" id="ssr_submition_date_lbl">

                                </label>
                                <input type="date" name="ssr_submission_date" id="ssr_submission_date" class="form-control" value="{{ $college->NaacReport->ssr_submission_date??'' }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="remark" placeholder="Remarks" required>{{ $college->NaacReport->remark??'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="checkbox" name="accept" value="1" required  @isset($college->NaacReport)@checked($college->NaacReport->accept==true)@endisset>
                                <span class="check-label">I do hereby declare that all the above information given by me
                                    are true as evident in the records of the college.</span>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn signup">Submit</button>
                            <button type="submit" name="submit" value="save" class="btn signup" style="background-color:green">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#accredited_status").change(function() {
                var status = $('#accredited_status').val();
                if (status == 1) {
                    $('#accredited').show();
                    $('#liqa').hide();
                } else {
                    $('#liqa').show();
                    $('#accredited').hide();

                }
            });
            $(document).on('change','#ssr_status',function(){
                var val=this.value;
                if(val==1){
                    $('#ssr_div').removeClass('d-none');
                    $('#ssr_submition_date_lbl').text('Date of submission');
                }
                else
                {
                    $('#ssr_div').removeClass('d-none');
                    $('#ssr_submition_date_lbl').text('When to be submitted');
                }
            })
        });

        //iqa
        $(document).on('change','#liqa_status',function(){
            var st=$(this).val();
            if(st==1){
                $('#iqa_submition_lbl').text('Date of Submission');
            }
            else
            {
                $('#iqa_submition_lbl').text('When to be submitted');
            }
        });
        // pending
        $(document).on('change','#liqa_status_prapose',function(){
            var st=$(this).val();
            if(st==1){
                $('#iqa_submition_lbl_prapose').text('Date of Submission');
            }
            else
            {
                $('#iqa_submition_lbl_prapose').text('When to be submitted');
            }
        });
        $(document).on('change','#whether_aqar_pending',function(){
            var v=$(this).val();
            if(v==1){
                $('#aqar_pending_yes').show();
            }
            else
            {
                $('#aqar_pending_yes').hide();
            }
        })
    </script>
</body>

</html>
