<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyApi Link</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
    <link rel="stylesheet" href="location/to/intl-tel-input/css/intlTelInput.css">
    <style>
        .error {
            font-size: 12px;
        }

        .intl-tel-input.allow-dropdown.separate-dial-code .selected-dial-code {
            padding-left: 15px !important;
        }

        .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 .selected-flag {
            padding-left: 0;
        }

        .intl-tel-input.allow-dropdown.separate-dial-code .selected-dial-code {
            padding-left: 20px !important;
        }

        #country_code+.intl-tel-input {
            width: 100%;
        }
    </style>
</head>

<body>



    <div class="row mx-0">
        <div class="col-md-6 login-back ">
            <div class="loginimg-text ">
                <img src="{{asset('frontend/images/login-img-bg.png')}}" class="">


                <!-- <p class="mt-3">To keep connected with us please <br>login with your personal info</p> -->
            </div>
            <h4 class="log-wel">La compétence <br>au service de l'enfant</h4>


        </div>
        <div class="col-md-6 p-5">
            <div>
                <div class="Se-connecter-text">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#Modallogin2" class="">Se
                        connecter</a>
                </div>
                <div>
                    <h3 class="quelle">Quelle est votre situation ?</h3>
                </div>
                <div class="space-quella">
                    <div class="mt-5">
                        <a href="{{route('manager')}}">
                            <div class="login-etablissement-sec">
                                <div class="d-flex w-100">
                                    <img src="{{asset('frontend/images/imgs-svg/build-blue.svg')}}" alt="build image" class="mr-4">
                                    <div class="login-text w-100">
                                        <h4>Établissement</h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Je recherche des candidats</p>
                                            <img src="{{asset('frontend/images/imgs-svg/arrow-right.svg')}}" alt="" class="W-100">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="" data-toggle="modal" data-target="#header-Modallogin1">
                            <div class="login-etablissement-sec">
                                <div class="d-flex w-100">
                                    <img src="{{asset('frontend/images/imgs-svg/user-blue.svg')}}" alt="build image" class="mr-4">
                                    <div class="login-text w-100">
                                        <h4>Candidat</h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Je recherche un emploi</p>
                                            <img src="{{asset('frontend/images/imgs-svg/arrow-right.svg')}}" alt="" class="W-100">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- header modal1 -->

<div class="modal fade login_modal" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body login-modal-body">
                <form id="manager-login" method="post">
                    @csrf
                    <div class="">
                        <div class="lmodal-logo mb-20">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <button class="btn social-btn facebook mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/facebook-f.svg')}}"> Connexion avec
                            Facebook
                        </button>
                        <button class="btn social-btn google mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/google.svg')}}"> Connexion avec
                            Google
                        </button>
                        <div class="ordiv mb-20"><span>OU</span></div>
                        <div class="mb-20">
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email / Nom d'utilisateur*" class="form-control email-place login-input inputicon2">
                                <span class="email-error text-danger">@error ('email') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="form-group sr-rel">
                                <input type="password" name="password" placeholder="Mot de passe*" class="form-control  email-place login-input inputicon2 sr-rel" id="password">
                                <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye" id="toggle-password">
                                <span class="password-error text-danger">@error ('password') {{$message}} @enderror</span>
                                <span class="invalid-error text-danger">@error ('invalid') {{$message}} @enderror</span>

                            </div>
                        </div>

                        <div class="mb-20 text-right">
                            <a href="#" data-toggle="modal" data-target="#forgot_password_modal" class="forgot-link forgot_password_mdl">J'ai perdu mon mot de passe?</a>
                        </div>
                        <div class="col-md-12 text-center res-dec mb-3 ">
                            <button id="loginbtn" type="submit" class="btn btn-blue w-100">Connexion</button>
                        </div>
                        <div class=" meconnecter">
                            <p class="proxima-nove">Pas encore membre?<a href="javascript:void(0);" class="openRegister"> Inscrivez-vous</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade login-modal" id="forgot_password_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">



                <form id="forgotPasswordForm" action="{{route('send-forgot-password-mail')}}" method="post">

                    @csrf

                    <div class="text-center">

                        <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">

                    </div>

                    <h4 class="forgot-h4 text-center color-black">Mot de passe oublié?</h4>

                    <p class="forgot-p text-center mb-20">Indiquez le nom d’utilisateur ou l’adresse e-mail du compte afin de recevoir un e-mail et réinitialiser votre mot de passe.</p>

                    <div class="mb-20">

                        <input type="email" name="email" class="form-control" placeholder="Email / Nom d'utilisateur*">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-yellow w-100">Soumettre</button>

                    </div>


                </form>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="header-Modallogin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login-modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="images/material-close.svg"></span>
                </button>
            </div> -->
            <div class="modal-body login-modal-body">
                <div class="">
                    <div class="lmodal-logo">
                        <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                    </div>
                    <form action="#" method="post" id="register_form_data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" placeholder="Prénom*" class="form-control login-input inputicon2" id="firstname">
                                    <span class="text-danger error" id="firstname-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" placeholder="Nom de famille*" class="form-control login-input inputicon2" id="lastname">
                                    <span class="text-danger error" id="lastname-error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email*" class="form-control login-input inputicon2" id="email">

                                    <span class="text-danger error" id="email-error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="country_code" name="country_code" />
                                    <input type="text" name="phone" placeholder="Téléphone*" class="form-control login-input inputicon2" onkeypress="return isNumber(event)" id="phone" maxlength="10">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                    <span class="text-danger error" id="phone-error"></span>
                                    <span class="text-danger error" id="mobile-error"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Mot de passe*" class="form-control  login-input inputicon2" id="password">
                                    <span class="text-danger error" id="password-error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms" name="terms[]">
                                    <label class="custom-control-label login-cus-check" for="terms">J'accepte
                                        les
                                        conditions générales d'utilisation d'APILINK - J'accepte que mon profil soit
                                        visible
                                        par l'ensemble des établissements employeurs, partenaires d'APILINK.
                                        <br><span class="text-danger error" id="terms-error"></span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms" name="terms">

                                    <label class="custom-control-label login-cus-check" for="terms">J'accepte
                                        que mes
                                        données sensibles soient traitées par APILINK pour me fournir le
                                        service.
                                        <br> <span class="text-danger error" id="accept_sensitive_data-error"></span>

                                    </label>
                                </div>

                            </div>

                            <div class="col-md-12 text-center res-dec mt-3 mb-3 ">
                                <!-- <a href="engagement-step1.html" class="btn btn-blue w-100">S'inscrire</a> -->
                                <!-- <a class="btn btn-blue w-100" id="bravo-btn">S'inscrire</a> -->

                                <button type="button" class="btn btn-blue w-100 registerUser" id="registerUser">S'inscrire</button>
                            </div>

                            <div class="col-md-12 text-center res-dec mt-3">
                                <div class=" meconnecter Connectez-vous">
                                    <p class="">Déjà membre?<a href="javascript:void(0);" class="openLogin"> Connectez-vous</a></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<button class="invisible" type="button" data-toggle="modal" data-target="#bravo-success"></button>
<!-- bravo modal -->
<div class="modal fade" id="bravo-success" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                </button>
            </div>
            <div class="modal-body bravo-body">
                <div class="text-center">
                    <div class="bravo-text">
                        <h3>BRAVO !</h3>
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/project/green-checkmark.svg')}}" alt="checkmark" class="green-checkmarks">
                        <div class="d-flex justify-content-center">
                            <p class="votres-check register-vous">Vous allez recevoir un email pour
                                confirmer votre inscription </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- bravo end -->

<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/popper.min.js ')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js ')}}"></script>
<script src="{{asset('frontend/js/select2.min.js ')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<script src="{{asset('frontend/js/custom.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>

<script src="location/to/intl-tel-input/js/intlTelInput.js"></script>
{!! $forgotPasswordValidator->selector('#forgotPasswordForm') !!}
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    $(function() {

        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
        @endif
    });
</script>
<script>
    $(document).on('click', '.openLogin', function() {
        $("#header-Modallogin1").modal('hide');
        $("#Modallogin2").modal('show');
    });
    $(document).on('click', '.openRegister', function() {
        $("#header-Modallogin1").modal('show');
        $("#Modallogin2").modal('hide');
    });
    $(document).on('click', '.registerUser', function() {
        var posid = $(this).attr('position-id');
        var token = $("meta[name='csrf-token']").attr("content");
        var formData = $('#register_form_data').serialize();

        $.ajax({
            url: "{{ route('registration.save') }}",
            method: 'post',
            data: {
                formData,
                posid: posid
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    setTimeout(function() {
                        $('#header-Modallogin1').modal('hide');
                        $('.invisible').trigger('click');
                        $("#register_form_data")[0].reset();
                    }, 2000);
                }
            },
            error: function(response) {
                $('#firstname-error').text(response.responseJSON.errors.first_name);
                $('#lastname-error').text(response.responseJSON.errors.last_name);
                $('#email-error').text(response.responseJSON.errors.email);
                $('#phone-error').text(response.responseJSON.errors.phone);
                $('#password-error').text(response.responseJSON.errors.password);
                $('#terms-error').text(response.responseJSON.errors.terms);
                $('#accept_sensitive_data-error').text(response.responseJSON.errors.terms);
            }
        });

    });
</script>
<script>
    //   var telInput = $("#phone"),
    //         errorMsg = $("#phone-error").html(''),
    //         validMsg = $("#valid-msg");
    //     errorMsg.addClass("hide");
    //     telInput.intlTelInput({
    //         preferredCountries: ['gb'],
    //         separateDialCode: true,
    //         utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    //     });
    //     var reset = function() {

    //         telInput.removeClass("error");
    //         errorMsg.addClass("hide");
    //         validMsg.addClass("hide");
    //     };

    //     // on blur: validate
    //     telInput.blur(function() {
    //         reset();
    //         if ($.trim(telInput.val())) {
    //             if (telInput.intlTelInput("isValidNumber")) {
    //                 console.log("if");
    //                 validMsg.removeClass("hide");
    //                 var getCode = telInput.intlTelInput('getSelectedCountryData').dialCode;
    //                 $('#country_code').val(getCode);
    //                 $("#phone-error").html("");
    //                 $("#mobile-error").html("");
    //             } else {
    //                 console.log("else");
    //                 telInput.addClass("error");
    //                 errorMsg.removeClass("hide");
    //                 $("#phone-error").html('Invalid Mobile Number');
    //                 $("#mobile-error").html('');
    //             }
    //         }
    //     });
</script>
@include('frontend.layouts.login_script')

</body>

</html>