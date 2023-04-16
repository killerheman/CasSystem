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
                        <form class="form-horizontal">
                            <div class="form-group">
                                <input disabled type="email" value="dummy@gmail.com" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected disabled>-- Select District --</option>
                                    <option value="darbhanga">Darbhanga</option>
                                    <option value="madhubani">Madhubani</option>
                                    <option value="samastipur">Samastipur</option>
                                    <option value="begusarai">Begusarai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="College Name">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected disabled>-- College Type --</option>
                                    <option value="constituent_college">Constituent</option>
                                    <option value="affiliated_degree">Affiliated Degree College</option>
                                    <option value="affiliated_bed">Affiliated B.Ed College</option>
                                    <option value="govt_college">Govt. College</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ASIHE ID">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected disabled>-- Academic Level --</option>
                                    <option value="ug">UG</option>
                                    <option value="pg">PG</option>
                                    <option value="both">Both UG & PG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected disabled>-- Accredited Status --</option>
                                    <option value="1">Accredited</option>
                                    <option value="0">Not Accredited</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Proposed date of submission of pending AQAR">
                            </div>
                            <div class="form-group">
                                <input type="date" name="aqar_submitted_upto" class="form-control" placeholder="AQAR Submitted Upto">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ssr_staus">
                                    <option value="" selected disabled>-- SSR Status --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="remark" placeholder="Remarks"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">I do hereby declare that all the above information given by me are true to the best of my knowledge and belief.</span>
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
</body>

</html>
