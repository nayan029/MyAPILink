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
                        <a href="profile-creation-1.html">
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

<div class="modal fade" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body login-modal-body">
                <div class="">
                    <div class="lmodal-logo mb-20">
                        <img src="images/apilink_logo_dark.png" alt="">
                    </div>
                    <button class="btn social-btn facebook mb-20">
                        <img src="images/imgs-svg/facebook-f.svg"> Connexion avec
                        Facebook
                    </button>
                    <button class="btn social-btn google mb-20">
                        <img src="images/imgs-svg/google.svg"> Connexion avec
                        Google
                    </button>
                    <div class="ordiv mb-20"><span>OU</span></div>
                    <div class="mb-20">
                        <div class="form-group">
                            <input type="text" placeholder="Email / Nom d'utilisateur*" class="form-control email-place login-input inputicon2">
                        </div>
                    </div>
                    <div class="mb-20">
                        <div class="form-group sr-rel">
                            <input type="password" placeholder="Mot de passe*" class="form-control  email-place login-input inputicon2 sr-rel" id="password">
                            <img src="images/about/eye.svg" alt="" class="sr-eye" id="toggle-password">
                        </div>
                    </div>

                    <div class="mb-20 text-right">
                        <a href="" class="forgot-link">J'ai perdu mon mot de passe?</a>
                    </div>
                    <div class="col-md-12 text-center res-dec mb-3 ">
                        <button class="btn btn-blue w-100">Connexion</button>
                    </div>
                    <div class=" meconnecter">
                        <p class="proxima-nove">Pas encore membre?<a href="#" class=""> Inscrivez-vous</a></p>
                    </div>
                </div>
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
                    <form action="#" method="post" id="nozel_search_form">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" placeholder="Prénom" class="form-control login-input inputicon2" id="firstname">
                                    <div id="firstname" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lastname" placeholder="Nom de famille" class="form-control login-input inputicon2" id="lastname">
                                    <div id="lastname" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control login-input inputicon2" id="email">
                                    <div id="email" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Téléphone" class="form-control login-input inputicon2" id="phone">
                                    <div id="phone" class="error"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="password" placeholder="Mot de passe*" class="form-control  login-input inputicon2" id="password">
                                    <div id="password" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1">
                                    <div id="customCheck1" class="error"></div>
                                    <label class="custom-control-label login-cus-check" for="customCheck1">J'accepte
                                        les
                                        conditions générales d'utilisation d'APILINK - J'accepte que mon profil soit
                                        visible
                                        par l'ensemble des établissements employeurs, partenaires d'APILINK.</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="customCheck2">
                                    <div id="customCheck2" class="error"></div>
                                    <label class="custom-control-label login-cus-check" for="customCheck2">J'accepte
                                        que mes
                                        données sensibles soient traitées par APILINK pour me fournir le
                                        service.</label>
                                </div>

                            </div>

                            <div class="col-md-12 text-center res-dec mt-3 mb-3 ">
                                <!-- <a href="engagement-step1.html" class="btn btn-blue w-100">S'inscrire</a> -->
                                <!-- <a class="btn btn-blue w-100" id="bravo-btn">S'inscrire</a> -->

                                <button type="button" class="btn btn-blue w-100 registerUser" id="registerUser">S'inscrire</button>
                            </div>

                            <div class="col-md-12 text-center res-dec mt-3">
                                <div class=" meconnecter Connectez-vous">
                                    <p class="">Déjà membre?<a href="#" class=""> Connectez-vous</a></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- bravo modal -->
<div class="modal fade" id="bravo" tabindex="-1">
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

<script type="text/javascript ">
    $(".select2 ").select2();

    //---------------------
    $("#bravo-btn").on('click', function() {

        $('#header-Modallogin1').modal('hide');
        $('#bravo').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);
    });


    $(document).on('click', '#registerUser', function() {
        var token = $("meta[name='csrf-token']").attr("content");
        var formData = $('#nozel_search_form').serialize();

        jQuery.ajax({
            url: "{{ route('register') }}",
            method: 'post',
            data: formData,
            success: function(data) {
                jQuery.each(data.errors, function(key, value) {
                    jQuery('.alert-danger').show();
                    jQuery('.alert-danger').append('<p>' + value + '</p>');
                });
            }

        });
    });
</script>
</script>

</body>

</html>