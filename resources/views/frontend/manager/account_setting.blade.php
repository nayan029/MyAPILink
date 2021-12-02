<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyApi Link</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar-collapse {
            display: none !important;
        }
        
        .navbar-expand-lg .navbar-collapse {
            display: none !important;
        }
    </style>

</head>

<body>
    <div id="after-header"></div>
    <section class="back-f6">
        <div class="container">
            <div class="account-setting-title">
                <p class="mb-0 linkcolor">Paramètres du compte :</p>
            </div>

            <div class="account-setting-details">
                <div class="communication-title">
                    <p class="mb-0">Moyens de communications</p>
                </div>
                <div class="communication-switch">
                    <div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input custom-text-input" id="customSwitch1" checked>

                            <label class="custom-control-label switch-text" for="customSwitch1">recevoir les offres et
                                les notifications par emails</label>


                        </div>
                    </div>
                    <div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input custom-text-input" id="customSwitch2">
                            <label class="custom-control-label switch-text" for="customSwitch2">recevoir les offres et
                                les notifications par emails</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="account-setting-details mt-4">
                <div class="communication-title">
                    <p class="mb-0">Gestion du compte</p>
                </div>
                <div class="communication-ul">
                    <ul>
                        <li data-toggle="modal" data-target="#exampleModal"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" class="mr-4"><span>Modifier mon mot de passe</span></li>
                        <li data-toggle="modal" data-target="#email-modal"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" class="mr-4"><span>Modifier mon email de connexion</span></li>
                        <li><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" class="mr-4"><span>Demander la suppression de mon
                                compte</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- change password modal -->
    <div class="modal modal-back-black fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered logo-modal-dialog" role="document">
            <div>
                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" class="modal-logo">
            </div>
            <div class="modal-content">

                <div class="modal-body login-modal-body">
                    <div class="mt-5">
                        <div class="text-center change-passtext mb-5">
                            <h4>Réinitialiser le mot de passe</h4>
                        </div>
                        <div class=" row ">
                            <div class="col-md-12 mb-3">
                                <div class="form-group sr-rel ">
                                    <input type="password" placeholder="Nouveau mot de passe " class="form-control login-input inputicon2 sr-rel " id="password">
                                    <img src="{{asset('frontend/images/about/eye.svg')}}" alt=" " class="sr-eye " id="toggle-password">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group ">
                                    <input type="text " placeholder="Retaper le mot de passe " class="form-control login-input inputicon2 ">
                                </div>
                            </div>
                            <div class="change-account-btn ">
                                <button class="modal-appointment-ok btn change-btn ">Réinitialiser le mot de
                                    passe</button>
                                <button class="account-cancel ">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- change email modal -->
    <div class="modal  modal-back-black  fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered logo-modal-dialog" role="document">
            <div>
                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" class="modal-logo">
            </div>
            <div class="modal-content">

                <div class="modal-body login-modal-body">
                    <div class="mt-5">
                        <div class="text-center change-passtext mb-5">
                            <h4>Changer mon email</h4>
                        </div>
                        <div class=" row ">
                            <div class="col-md-12 mb-3">
                                <div class="form-group sr-rel ">
                                    <input type="email" placeholder="Nouvelle adresse email " class="form-control login-input inputicon2">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group ">
                                    <input type="text " placeholder="Confirmer votre adresse email" class="form-control login-input inputicon2 ">
                                </div>
                            </div>
                            <div class="change-account-btn ">
                                <button class="modal-appointment-ok btn change-btn ">Confirmer ma nouvelle adresse
                                    email</button>
                                <button class="account-cancel ">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</body>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script type="text/javascript ">
    $(".select2 ").select2();
</script>
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

</html>