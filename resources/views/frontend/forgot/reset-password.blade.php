<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyApi Link</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="images/favicon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="{{asset('text/css" href="css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
</head>
<div class="modal fade login_modal show" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 17px; display: block;">
    <div class="modal-dialog login-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body login-modal-body">

                <form action="{{route('user-reset-password')}}" method="post" id="resetform">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="">
                        <div class="lmodal-logo mb-20">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>

                        <div class="ordiv mb-20"><span>OU</span></div>

                        <div class="mb-20">
                            <div class="form-group sr-rel">
                                <input type="password" name="password" placeholder="Mot de passe*" class="form-control  email-place login-input inputicon2 sr-rel" id="password">
                                <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye" id="toggle-password">
                                <span class="password-error text-danger">@error ('password') {{$message}} @enderror</span>
                                <span class="invalid-error text-danger">@error ('invalid') {{$message}} @enderror</span>

                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="form-group">
                                <input type="text" name="confirm_password" placeholder="Confirmez mot de passe*" class="form-control email-place login-input inputicon2">
                                <span class="email-error text-danger">@error ('confirm_password') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12 text-center res-dec mb-3 ">
                            <button id="loginbtn" type="submit" class="btn btn-blue w-100">Réinitialiser</button>
                        </div>
                        <div class=" meconnecter">
                            <p class="proxima-nove"><a href="{{URL::to('/')}}" class=""> Connexion</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/popper.min.js')}} "></script>
<script src="{{asset('frontend/js/bootstrap.min.js ')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<!-- <script src="{{asset('frontend/js/custom.js')}}"></script> -->
<script src="{{asset('frontend/js/bootstrap-timepicker')}}"></script>
<script src="{{asset('frontend/js/bootstrap-colorpicker.min')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script>
      var togglePassword = document.getElementById("toggle-password");

if (togglePassword) {
    togglePassword.addEventListener('click', function() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });
}
    </script>
{!! $validator->selector('#resetform') !!}
