<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College NAAC Status</title>
    <link rel="icon" href="{{ asset('asset/logo.jpg') }}" />
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="form-bg">
        @if(Session::has('college_id'))
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">Enter Your OTP</h3>
                        <span class="description">OTP is sended on your email. you can also proceed with link sended on your email</span>
                        <form class="form-horizontal" action="{{ route('college-register.show',Session::get('college_id')) }}" method="get">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="college_id" value="{{ Session::get('college_id') }}">
                                <input type="text" name="otp"   class="form-control" placeholder="Enter OTP" required>
                            </div>
                            <button type="submit" class="btn signup">Verify</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">Create Your Account</h3>
                        <span class="description">Use College email for registration:</span>
                        <form class="form-horizontal" action="{{ route('college-register.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="college_name"  value='{{ old('college_name') }}' class="form-control" placeholder="Enter College name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="aishe_code"  value='{{ old('aishe_code') }}' class="form-control" placeholder="Enter AISHE code" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" value='{{ old('college_email') }}' name="college_email" placeholder="Email" required>
                            </div>
                            <button type="submit" class="btn signup">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
