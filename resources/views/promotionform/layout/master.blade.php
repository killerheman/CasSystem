@include('promotionform.layout.header')

<img src="{{ asset('asset/logo.jpg') }}" class="rounded mx-auto d-block" style="height:10vw" alt="" />
<h3 class="text-center mt-2 text-danger">LALIT NARAYAN MITHILA UNIVERSITY, DARBHANGA</h3>
<div class="container">

@yield('content-area')


</div>
@include('promotionform.layout.footer')

@include('sweetalert::alert')