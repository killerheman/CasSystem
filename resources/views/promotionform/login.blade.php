@extends('promotionform.layout.master')

@section('content-area')

<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 70vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
a {
  text-decoration: none;
  color: white;
}
</style>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    {{-- <img src="{{ asset('asset/logo.jpg') }}"
                      style="width: 100px;" alt="logo"> --}}
                    <h5 class="mt-1 mb-3 pb-1">Login using your valid email address</h5>
                  </div>
  
                  <form method="post" action="{{ route('promotion-form.user-login-otp-verify') }}">
                    @csrf
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                        <div class="input-group mb-3">
                                <input type="email" id="email"  name='email' placeholder="Enter Your Email" class="form-control" value="{{ old('email') }}" />
                                    <button class="btn btn-outline-primary" type="button" id="otp-send-btn">Send OTP</button>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <div class="input-group mb-3">
                            <input type="text" id="otp" class="form-control" placeholder="OTP"  name='otp' disabled />
                            <button class="btn btn-outline-success"  type="submit" id="otp-verify-btn" disabled>Verify OTP</button>
                            @error('otp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Welcome to Portal for Promotion of Teacher </h4>
                  <p class="small mb-0">
                    <marquee behavior="" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3">
                    <ul>
                      <li> <a href="{{ asset('Bihar CAS Promotion-2018_(2023).pdf') }} " class="text-light"> CAS-2018 </a></li>
                      <li> <a href="https://laws.gsbihar.online/statutes/statutes-48.html"  class="text-light" target="_blank"> CAS-1998 </a></li>
                      <li > Notification (LNMU)</li>
                      <li><a href="{{ asset('Old Cas/C.C.R Proforma for Teacher.pdf') }}" download="">C.C.R Proforma for Teacher</a></li>
                      <li><a href="{{ asset('Old Cas/Proforma for Promotion to Reader (MPS).pdf') }}" download="">Proforma for Promotion to Reader (MPS)</a></li>
                      <li><a href="{{ asset('upload/Principal HOD Cert for Class Engagement_Format (3).pdf') }}" target="_blank">Principal HOD Cert for Class Engagement_Format</a></li>
                      <li><a href="{{ asset('upload/Principal HOD Cert for Examination work_Format (2).pdf') }}" target="_blank">Principal HOD Cert for Examination work_Format </a></li>
                      <li><a href="{{ asset('upload/LNMU_CAS_FORM OF OPTION (1).pdf') }}" target="_blank">LNMU CAS FORM OF OPTION</a></li>
                    </ul>
                    <details>
                      <summary>Proforma For CAS 1998</summary>
                      <p>
                        <ul>
                          <li><a href="{{ asset('Old Cas/Proforma For CAS 1998/Performa for promotion to Professor.pdf') }}" download="">Performa for promotion to Professor</a></li>
                          <li><a href="{{ asset('Old Cas/Proforma For CAS 1998/Proforma for promotion of Lecturer (Senior Scale).pdf') }}" download="">Proforma for promotion of Lecturer (Senior Scale)</a></li>
                          <li><a href="{{ asset('Old Cas/Proforma For CAS 1998/~$oforma for promotion to READER (CAS).pdf') }}" download="">Proforma for promotion to READER (CAS)</a></li>
                          <li><a href="{{ asset('upload/Contents(Promotion).pdf') }}">Contents(Promotion)</a></li>
                        </ul>
                      </p>
                    </details>
                    <details>
                      <summary>Proforma</summary>
                      <p>
                        <ul>
                          <li><a href="{{ asset('upload/Time Bound Promotion READER Proforma.pdf') }}" target="_blank">Time Bound Promotion READER Proforma</a></li>
                          <li><a href="{{ asset('upload/Time Bound Promotion Professor Proforma.pdf') }}" target="_blank">Time Bound Promotion Professor Proforma</a></li>
                          <li><a href="{{ asset('upload/4. Proforma for selection grade.pdf') }}" target="_blank">Proforma for selection grade</a></li>
                          <li><a href="{{ asset('upload/5. Proforma for promotion of READER (CAS).pdf') }}" target="_blank">Proforma for promotion of READER (CAS)</a></li>
                          <li><a href="{{ asset('upload/7. proforma for date shifting under CAS 01.11.12.pdf') }}" target="_blank">proforma for date shifting under CAS 01.11.12</a></li>
                          <li><a href="{{ asset('upload/Contents(Promotion).pdf') }}">Contents(Promotion)</a></li>
                          <li><a href="{{ asset('upload/Proforma for Performance Appraisal Report 1.pdf') }}">Proforma for Performance Appraisal Report 1</a></li>
                        </ul>
                        
                      </p>
                    </details>
                  </marquee>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).on('click','#otp-send-btn',function(){
        $.ajax({
            url:"{{ route('promotion-form.user-login-otp-send') }}",
            method:'post',
            data:{
                'email':$('#email').val(),
                '_token':"{{ csrf_token() }}"
            },
            beforeSend:function(){
                $('#email').attr('readonly','true');
                $('#otp-send-btn').attr('disabled','true');
                $('#otp-send-btn').html('<div class="spinner-border text-danger" role="status">\
                    </div>')
            },
        success:function(r){
           if(r==1){
            $('#otp').removeAttr('disabled');
            $('#otp-verify-btn').removeAttr('disabled');
            $('#otp-send-btn').text('Done');
            Swal.fire(
                'OTP sent!',
                'please check your email',
                'success'
                )
           }
           else if(r==0)
           {
            $('#email').removeAttr('readonly');
             $('#otp-send-btn').removeAttr('disabled');
             $('#otp-send-btn').text('Send OTP');
             $('#otp').attr('disabled','true');
            $('#otp-verify-btn').attr('disabled','true');

            Swal.fire(
                'Something Went Wrong!',
                'Try Again after sometime',
                'warning'
                )
           }
           else
           {
            $('#email').removeAttr('disabled');
             $('#otp-send-btn').removeAttr('disabled');
             $('#otp-send-btn').text('Send OTP');
             $('#otp').attr('disabled','true');
            $('#otp-verify-btn').attr('disabled','true');
            Swal.fire(
                'OOPS!',
               r,
                'fail'
                )
           }
        },
    },
        );
    });
  
  </script>
  @endsection