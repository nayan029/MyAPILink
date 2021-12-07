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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                        <!-- <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input custom-text-input" id="customSwitch1" checked>

                            <label class="custom-control-label switch-text" for="customSwitch1">recevoir les offres et
                                les notifications par emails</label>


                        </div> -->
                    </div>
                    <div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" id="notification-email" onchange="notificationEmail()" @if(auth()->guard('web')->user()->notifications_email=='on') checked @endif class="custom-control-input custom-text-input" id="customSwitch2">
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
                        <li id="delete-account"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" class="mr-4"><span>Demander la suppression de mon
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
                        <form id="change-password" method="post" action="#">
                            @csrf
                            <div class=" row ">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group sr-rel ">
                                        <input type="password" name="password" placeholder="Nouveau mot de passe " class="form-control login-input inputicon2 sr-rel " id="password">
                                        <img src="{{asset('frontend/images/about/eye.svg')}}" alt=" " class="sr-eye " id="toggle-password">
                                        <span class="password-error text-danger">@error ('password') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group ">
                                        <input type="text " name="confirm_password" placeholder="Retaper le mot de passe " class="form-control login-input inputicon2 ">
                                        <span class="confirm-password-error text-danger">@error ('confirm_password') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="change-account-btn ">
                                    <button id="changePasswordBtn" onclick="changePassword();" type="button" class="modal-appointment-ok btn change-btn ">Réinitialiser le mot de
                                        passe</button>
                                    <button onclick="passwordModalClose()" type="button" class="account-cancel ">Annuler</button>
                                </div>
                            </div>
                        </form>
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
            <form id="change-email" method="post" action="#">
                @csrf
                <div class="modal-content">

                    <div class="modal-body login-modal-body">
                        <div class="mt-5">
                            <div class="text-center change-passtext mb-5">
                                <h4>Changer mon email</h4>
                            </div>
                            <div class=" row ">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group sr-rel ">
                                        <input type="text" name="email" placeholder="Nouvelle adresse email " class="form-control login-input inputicon2">
                                        <span class="email-error text-danger">@error ('email') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group ">
                                        <input type="text" name="confirm_email" placeholder="Confirmer votre adresse email" class="form-control login-input inputicon2 ">
                                        <span class="confirm-email-error text-danger">@error ('confirm_email') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="change-account-btn ">
                                    <button id="changeEmailBtn" onclick="changeEmail();" type="button" class="modal-appointment-ok btn change-btn ">Confirmer ma nouvelle adresse
                                        email</button>
                                    <button type="button" onclick="emailModalClose()" class="account-cancel">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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
    // change password
    function changePassword() {
        $('.password-error').text('');
        $('.confirm-password-error').text('');
        $('#changePasswordBtn').prop('disabled', true);

        $.ajax({
            url: '{{ route("update-password") }}',
            method: 'POST',
            data: $('#change-password').serialize(),
            success: function(response) {
                if (response.success == true) {

                    toastr.success(response.message);
                    passwordModalClose();
                    $('#changePasswordBtn').prop('disabled', false);

                } else {
                    $('.password-error').text(response.errors.password);
                    $('.confirm-password-error').text(response.errors.confirm_password);

                    $('#changePasswordBtn').prop('disabled', false);
                }
            }
        });
    }
    // change email
    function changeEmail() {
        $('.email-error').text('');
        $('.confirm-email-error').text('');
        $('#changeEmailBtn').prop('disabled', true);

        $.ajax({
            url: '{{ route("update-email") }}',
            method: 'POST',
            data: $('#change-email').serialize(),
            success: function(response) {
                if (response.success == true) {

                    toastr.success(response.message);
                    emailModalClose();
                    $('#changeEmailBtn').prop('disabled', false);

                } else {
                    $('.email-error').text(response.errors.email);
                    $('.confirm-email-error').text(response.errors.confirm_email);

                    $('#changeEmailBtn').prop('disabled', false);
                }
            }
        });
    }
    // close email modal
    function emailModalClose() {
        $('#email-modal').modal('hide');
    }
    // close password modal
    function passwordModalClose() {
        $('#exampleModal').modal('hide');
    }

    function notificationEmail() {
        if ($('#notification-email').prop('checked') == true) {
            var flag = 'on';
        } else {
            var flag = 'off';
        }
        $.ajax({
            url: '{{ route("update-notifications-flag") }}',
            method: 'POST',
            data: {
                flag: flag,
                _token: "{{csrf_token()}}"
            },
            success: function(response) {
                if (response.success == true) {

                    toastr.success(response.message);

                }
            }
        });
    }

    //delete
    $(document).on('click', '#delete-account', function(e) {
        e.preventDefault();
        swal({
                title: 'Êtes-vous sûr de vouloir demander la suppression du compte ?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: 'POST',
                        url:'{{ route("update-delete-flag") }}',
                        data: {
                            "_token":  "{{csrf_token()}}",
                            "delete_account_flag" :"request",
                        },
                        success: function(response) {
                            if (response.status == true) {

                                toastr.success(response.msg);
                            }
                        }
                    });
                }
            });
    });
</script>
<script>
    $(function() {

        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
        @endif
    });
</script>

</html>