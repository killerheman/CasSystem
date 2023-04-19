<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LNMU</title>
    <link rel="shortcut icon" href="{{ asset('asset/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <img src="{{ asset('asset/logo.jpg') }}" class="rounded mx-auto d-block" style="height:10vw" alt="" />
    <h3 class="text-center mt-2 text-danger">LALIT NARAYAN MITHILA UNIVERSITY, DARBHANGA</h3>
    <div class="container">
        <div class="card shadow-lg p-4">
            <div class="row">
                <h5 class="mb-2">Application for promotion</h5>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">From Level</label>
                    <input type="text" class="form-control" placeholder="from Level" >
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">To Level</label>
                    <input type="text" class="form-control" placeholder="to Level " >
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" >
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Department</label>
                    <input type="text" class="form-control" placeholder="department" >
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">College</label>
                    <input type="text" class="form-control" placeholder="College" >
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Notification Reference No</label>
                    <input type="text" class="form-control" placeholder="Notification Reference No" >
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Date</label>
                    <input type="date" class="form-control" placeholder="Date" >
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Paste Self attested Recent Passport Size Photograph</label>
                    <input type="text" class="form-control" placeholder="passport size photo" >
                </div>
            </div>
        </div>
    </div>
</body>

</html>
