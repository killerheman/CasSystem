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
                                <select class="form-control" name="district">
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
                                <select class="form-control" name="college_type">
                                    <option value="" selected disabled>-- College Type --</option>
                                    <option value="constituent_college" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='constituent_college') @endisset>Constituent</option>
                                    <option value="affiliated_degree" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='affiliated_degree') @endisset>Affiliated Degree College</option>
                                    <option value="affiliated_bed" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='affiliated_bed') @endisset>Affiliated B.Ed College</option>
                                    <option value="govt_college" @isset($college->NaacReport)@selected($college->NaacReport->college_type=='govt_college') @endisset>Govt. College</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="aished_id" placeholder="ASIHE ID" value="{{ $college->NaacReport->address??'' }}">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="academic_level">
                                    <option value="" selected disabled>-- Academic Level --</option>
                                    <option value="ug" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='ug')@endisset>UG</option>
                                    <option value="pg" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='pg')@endisset>PG</option>
                                    <option value="both" @isset($college->NaacReport)@selected($college->NaacReport->academic_level=='both')@endisset>Both UG & PG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Address" name="address">{{ $college->NaacReport->address??'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="accredited_status" name="accrediation_status">
                                    <option value="" selected disabled>-- Accredited Status --</option>
                                    <option value="1" @isset($college->NaacReport)@selected($college->NaacReport->accrediation_status==true)@endisset>Accredited</option>
                                    <option value="0" @isset($college->NaacReport)@selected($college->NaacReport->accrediation_status==false)@endisset>Not Accredited</option>
                                </select>
                            </div>
                            <div id="accredited">
                                <div class="form-group">
                                    <label>Date of last Accredition</label>
                                    <input type="date" name="last_accredition_date" id="last_accredition_date" value="{{ $college->NaacReport->last_accredetion??'' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="accredition_upto"> Accredition upto</label>
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
                                    <label>Proposed date of submission of pending AQAR</label>
                                    <input type="date" name="proposed_aqar_date" id="proposed_aqar_date" value="{{ $college->NaacReport->praposed_date_of_pending_aqar??''}}"
                                        class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>AQAR Submitted Upto</label>
                                    <input type="date" id="aqar_submitted_upto" name="aqar_submitted_upto" value="{{ $college->NaacReport->aqar_submition_upto??'' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="iiqa">Proposed date of submission of pending IIQA</label>
                                    <input type="date" id="iiqa" name="iiqa" value="{{ $college->NaacReport->praposed_date_of_pending_iiqa??'' }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ssr_staus">
                                    <option value="" selected disabled>-- SSR Status --</option>
                                    <option value="1"  @isset($college->NaacReport)@selected($college->NaacReport->ssr_status==true)@endisset>Yes</option>
                                    <option value="0"  @isset($college->NaacReport)@selected($college->NaacReport->ssr_status==false)@endisset>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="remark" placeholder="Remarks">{{ $college->NaacReport->remark??'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="checkbox" name="accept" value="1" required  @isset($college->NaacReport)@checked($college->NaacReport->accept==true)@endisset>
                                <span class="check-label">I do hereby declare that all the above information given by me
                                    are true to the best of my knowledge and belief.</span>
                            </div>
                            <button type="submit" class="btn signup">Submit</button>
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
            $('#accredited').hide();

            $("#accredited_status").change(function() {
                var status = $('#accredited_status').val();
                if (status == 1) {
                    $('#accredited').show();
                } else {
                    $('#accredited').hide();
                }
            });
        });
    </script>
</body>

</html>
