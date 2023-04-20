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
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
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
                    <img src="{{ asset('asset/logo.jpg') }}"
                      style="width: 100px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The LNMU Family</h4>
                  </div>
  
                  <form method="post" action="{{ route('promotion-form.user-login-otp-verify') }}">
                    @csrf
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                        <div class="input-group mb-3">
                                <input type="email" id="email"  name='email' class="form-control" value="{{ old('email') }}" />
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
                  <h4 class="mb-4">Welcome to Promotion Zone </h4>
                  <p class="small mb-0">We apreciate our teachers,professors and teaching staff , Welcome to portal where you can full fill your promotion dream. We are the best 
                    team ever Keep distributing your knowledge and your experience</p>
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
                'OTP send!',
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