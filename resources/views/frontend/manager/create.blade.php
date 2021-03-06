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
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />


</head>
<style>
    .error {
        color: Red;
    }

    form i {
        margin-left: -30px;
        cursor: pointer;
    }
</style>

<body>
    <ul class="fix-number-ul" id="fix-number-ul-id">
        <li class="active"><a href="#ustep1"><span>1</span></a></li>
        <li class=""><a href="#ustep2"><span>2</span></a></li>
        <li class=""><a href="#ustep3"><span>3</span></a></li>
    </ul>

    <form action="#" method="post" id="regform">
        @csrf
        <div class="ustep1 usetps" id="ustep1">
            <div class="container">
                <!-- <div class="mobile-show text-center">
                    <button class="retourangle-left"><i class="fa fa-angle-left sa-bolder"></i> Retour</button>
                </div> -->

                <div class="text-center pclogo">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="logo"></a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 offset-md-2 col-lg-11 offset-lg-1">
                        <h5 class="pc-title">1 ??? MES INFORMATIONS PERSONNELLES DE GESTIONNAIRE DE COMPTE</h5>
                        <div class="row justify-content-start">
                            <div class="col-md-11 profile-label">
                                <div class="row">
                                    <div class="col-md-2 mb-2">
                                        <div class="form-group">
                                            <label class="">Civilit??<span class="text-danger">*</span></label>
                                            <select class="cus-drop pl-23 select2 form-add-establish" name="civility" style="width: 100%;">
                                                <option value="Mr">M.</option>
                                                <option value="Mrs">Madame.</option>
                                            </select>
                                            <span class="civility-error text-danger">@error ('civility') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <div class="form-group">
                                            <label class="">Pr??nom<span class="text-danger">*</span></label>
                                            <input id="firstname" type="text" name="first_name" class="form-control form-add-establish pl-23" placeholder="Pr??nom">
                                            <span class="firstname-error text-danger">@error ('firstname') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <div class="form-group">
                                            <label class="">Nom de famille<span class="text-danger">*</span></label>
                                            <input id="lastname" type="text" name="last_name" class="form-control form-add-establish pl-23" placeholder="Nom de famille">
                                            <span class="lastname-error text-danger">@error ('lastname') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="">T??l??phone<span class="text-danger">*</span></label>
                                            <input id="phone" type="text" name="phone" maxlength="10" onkeypress='return isNumber(event)' class="form-control form-add-establish pl-23" placeholder="T??l??phone">
                                            <span class="phone-error text-danger">@error ('phone') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="">Adresse e-mail<span class="text-danger">*</span></label>
                                            <input id="email" type="text" name="email_address" class="form-control form-add-establish pl-23" placeholder="Adresse e-mail">
                                            <span class="email-error text-danger">@error ('email') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group sr-rel">
                                            <label class="">Mot de passe<span class="text-danger">*</span></label>
                                            <input id="password" type="password" name="password" class="form-control form-add-establish pl-23 email-place login-input inputicon2 sr-rel" placeholder="Mot de passe">
                                            <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye " id="toggle-password" style="margin-top:30px">
                                            <span class="password-error text-danger">@error ('password') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Confirmer le mot de passe<span class="text-danger">*</span></label>
                                            <input id="confirm_password" type="password" name="confirm_password" class="form-control form-add-establish pl-23" placeholder="Confirmer le mot de passe">
                                            <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye mr-3" id="confirm-password" style="margin-top:30px">
                                            <span class="password_confirmation-error text-danger">@error ('password_confirmation') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <p class="mb-0 mon-text">mon role en tant que GESTIONNAIRE DE COMPTE</p>
                                            <div class="d-flex mb-4">
                                                <div class="custom-control custom-radio sr-radio radio_profile">
                                                    <input type="radio" class="custom-control-input" id="check1" checked="" name="radio" value="director" required="">
                                                    <span class="error">@error ('radio') {{$message}} @enderror</span>

                                                    <label class="custom-control-label" for="check1">Directrice</label>
                                                </div>
                                                <div class="custom-control custom-radio sr-radio radio_profile">
                                                    <input type="radio" class="custom-control-input" value="hr_manager" id="check2" name="radio" required="">
                                                    <span class="error">@error ('radio') {{$message}} @enderror</span>

                                                    <label class="custom-control-label" for="check2">Responsable
                                                        RH</label>
                                                </div>
                                                <div class="custom-control custom-radio sr-radio radio_profile">
                                                    <input type="radio" class="custom-control-input" value="head" id="check3" name="radio" required="">
                                                    <span class="error">@error ('radio') {{$message}} @enderror</span>

                                                    <label class="custom-control-label" for="check3">Cheffe / Chef de
                                                        service petite
                                                        enfance</label>
                                                </div>
                                                <div class="custom-control custom-radio sr-radio radio_profile">
                                                    <input type="radio" class="custom-control-input" value="others" id="check4" name="radio" required="">
                                                    <span class="error">@error ('radio') {{$message}} @enderror</span>

                                                    <label class="custom-control-label" for="check4">Autres -
                                                        pr??ciser</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mobile-show text-center">
                    <button class="suiv-btn">Suivant <i class="fa fa-arrow-right"></i> </button>
                    <ul class="step3dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> -->

            </div>
            <div class="text-center mt-auto">
                <a class="cdown sa-cdown mb-0 mt-5" href="#ustep2"><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i></a>
            </div>
        </div>

        <div class="ustep2 usetps" id="ustep2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-10 ">
                        <h5 class="pc-title">2 ??? Gestion d'Etablissement </h5>
                        <div class="row justify-content-center">
                            <div class="col-md-7 profile-label">
                                <div class="management-radios">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" onchange="hideShowStepThree()" name="management" class="custom-control-input" value="multiple" checked>
                                        <div class="custom-management-text">
                                            <p class="manage-textp">Je vais g??rer
                                                plusieurs ??tablissements </p>
                                            <p class="mb-0">Je suis une collectivit??, une mairie ...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="management-radios">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" onchange="hideShowStepThree()" name="management" class="custom-control-input" value="single">
                                        <div class="custom-management-text">
                                            <p class="manage-textp">Je vais g??rer un seul
                                                ??tablissement </p>
                                            <p class="mb-0">Je suis un ??tablissement priv?? ou public</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mobile-show text-center">
                    <button class="suiv-btn">Suivant <i class="fa fa-arrow-right"></i> </button>
                    <ul class="step3dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> -->

            </div>
            <div class="text-center mt-auto">
                <a class="cdown sa-cdown mb-0 mt-5" href="#ustep3"><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i></a>
            </div>
        </div>

        <div class="ustep3 usetps mb-5" id="ustep3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-10 offset-lg-1 ">
                        <h5 class="pc-title">3 ??? Notre organisation</h5>
                    </div>
                    <div class="col-md-8 offset-md-2 col-lg-11 offset-lg-1">

                        <div class="row justify-content-start">
                            <div class="col-md-11 profile-label">
                                <div id="multiplediv" class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Je repr??sente <span class="text-danger">*</span></label>
                                            <select class="cus-drop pl-23 select2 form-add-establish" name="represent" style="width: 100%;">
                                                <option value="municipality">Une municipalit??</option>
                                                <option value="private_structure">Une structure priv??e </option>
                                                <option value="associative_structure">Une structure associative </option>
                                                <option value="other">Autre </option>
                                            </select>
                                            <span class="represent-error text-danger">@error ('represent') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Nom de notre organisation<span class="text-danger">*</span></label>
                                            <input id="organization" type="text" name="name_of_our_organization" class="form-control form-add-establish pl-23" placeholder="Nom de notre organisation">
                                            <span class="organization-error text-danger">@error ('organization') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Nombre d'??tablissements dans l'organisation<span class="text-danger">*</span></label>
                                            <input id="number_of_establishments_in_the_organization" type="text" name="number_of_establishments_in_the_organization" class="form-control form-add-establish pl-23" placeholder="Nombre d'??tablissements dans l'organisation">
                                            <span class="establish-error text-danger">@error ('number_of_establishments') {{$message}} @enderror</span>

                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="">Adresse de l'organisation<span class="text-danger">*</span></label>
                                            <input id="address" type="text" name="organization_address" class="form-control form-add-establish pl-23" placeholder="Adresse de l'organisation">
                                            <span class="address-error text-danger">@error ('address') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="">Code postal<span class="text-danger">*</span></label>
                                            <input id="postal_code" type="text" name="postal_code" maxlength="6" onkeypress='return isNumber(event)' class="form-control form-add-establish pl-23" placeholder="Code postal">
                                            <span class="postal-error text-danger">@error ('postal_code') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="">Ville<span class="text-danger">*</span></label>
                                            <input id="city" onchange="removeOneDiv()" type="text" name="city" class="form-control form-add-establish pl-23" placeholder="Ville">
                                            <span class="city-error text-danger">@error ('city') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                </div>
                                <div id="singlediv" class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Type d'??tablissement<span class="text-danger">*</span></label>
                                            <select class="cus-drop pl-23 select2 form-add-establish" name="represent" style="width: 100%;">
                                                <option value="creche collective">Cr??che collective</option>
                                                <option value="private_structure">Cr??che multi-accueil </option>
                                                <option value="Cr??che multi-accueil">Halte garderie</option>
                                                <option value="Cr??che municipale">Cr??che municipale</option>
                                                <option value="Jardin d'enfants">Jardin d'enfants</option>
                                                <option value="Micro creche (Prive)">Micro creche (Prive)</option>
                                                <option value="Cr??che parentable">Cr??che parentable</option>
                                                <option value="Cr??che prive d'entreprise ou inter-enterpice">Cr??che prive d'entreprise ou inter-enterpice</option>
                                                <option value="Cr??che associative">Cr??che associative</option>
                                                <option value="other">Autre </option>
                                            </select>
                                            <span class="represent-error text-danger">@error ('represent') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Nom de l'etablissement<span class="text-danger">*</span></label>
                                            <input id="organization" type="text" name="name_of_our_organization" class="form-control form-add-establish pl-23" placeholder="Nom de notre organisation">
                                            <span class="organization-error text-danger">@error ('organization') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="">Adresse de l'organisation<span class="text-danger">*</span></label>
                                            <input id="address1" type="text" name="organization_address" class="form-control form-add-establish pl-23" placeholder="Adresse de l'organisation">
                                            <span class="address-error text-danger">@error ('address') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="">Code postal<span class="text-danger">*</span></label>
                                            <input id="postal_code" type="text" name="postal_code" maxlength="6" onkeypress='return isNumber(event)' class="form-control form-add-establish pl-23" placeholder="Code postal">
                                            <span class="postal-error text-danger">@error ('postal_code') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="">Ville<span class="text-danger">*</span></label>
                                            <input id="city" type="text" onchange="removeOneDiv()" name="city" class="form-control form-add-establish pl-23" placeholder="Ville">
                                            <span class="city-error text-danger">@error ('city') {{$message}} @enderror</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="register-btns">
                    <button class="register-yellow btn" type="submit">S'inscrire</button>
                </div>
            </div>
        </div>

    </form>

    <button class="invisible" type="button" data-toggle="modal" data-target="#appointment3"></button>
    <!-- register-modal -->
    <div class="modal modal-back-blue" id="appointment3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog" role="document">
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
                            <p class="modalappoint-text">Un conseiller Apilink vous contactera <br>par email pour
                                prendre
                                un<br> rendez vous
                                t??l??phonique</p>
                        </div>
                        <div class="mt-4 mb-2">
                            <a href="{{route('profile')}}" class="btn btn-white modal-appointment-ok">Ok</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="profile-footer">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-2">
                    <div class="back-apilink">
                        <a href="https://appworkdemo.com/apilink/public/">Retour sur le site Apilink</a>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="footer-profile-ul">
                        <li>
                            ?? 2021 Apilink - Tous droits r??serv??s
                        </li>
                        <li>
                            D??velopp?? par Crawler Agency
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="footer-profile-ul">
                        <li>
                            Politique de confidentialit??
                        </li>
                        <li>
                            Mentions l??gales
                        </li>
                        <li class="mr-0">
                            Conditions g??n??rales de vente
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
<script>
    var geocoder = new maptiler.Geocoder({
        input: 'address',
        key: 'aGdYhIz2jXHVxE7pwlGa'
    });
    geocoder.on('select', function(item) {
        $('#address').val(item.text);
    });
</script>.
<script>
    var geocoder = new maptiler.Geocoder({
        input: 'address1',
        key: 'aGdYhIz2jXHVxE7pwlGa'
    });
    geocoder.on('select', function(item) {
        $('#address1').val(item.text);
    });
</script>
<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}} "></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<script src="{{asset('frontend/js/custom.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(".select2").select2();
</script>
<script>
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
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    $("#ustep1 .suiv-btn").on('click', function() {
        $("#ustep1").hide();
        $("#ustep2").show();
    });
    $("#ustep2 .retourangle-left").on('click', function() {
        $("#ustep1").show();
        $("#ustep2").hide();
    });
    $("#ustep2 .suiv-btn").on('click', function() {
        $("#ustep2").hide();
        $("#ustep3").show();
        $("#bottomid").show();
    });
    $("#ustep3 .retourangle-left").on('click', function() {
        $("#ustep2").show();
        $("#ustep3").hide();
        $("#bottomid").hide();
    });

    // --------------

    $(window).scroll(function() {
        inViewport();
        inViewport1();
    });

    $(window).resize(function() {
        inViewport();
        inViewport1();
    });
    $("#fix-number-ul-id li:nth-child(1)").addClass('scale');

    function inViewport() {

        $('.ustep2').each(function() {
            var divPos = $(this).offset().top,
                topOfWindow = $(window).scrollTop();

            if (divPos < topOfWindow + 400) {

                $("#fix-number-ul-id li:nth-child(1)").removeClass('scale');
                $("#fix-number-ul-id li:nth-child(2)").addClass('scale');
                $("#fix-number-ul-id li:nth-child(3)").removeClass('scale');

                $("#fix-number-ul-id li:nth-child(2)").addClass('active');
            } else {
                $("#fix-number-ul-id li:nth-child(2)").removeClass('active');
                $("#fix-number-ul-id li:nth-child(1)").addClass('scale');
                $("#fix-number-ul-id li:nth-child(2)").removeClass('scale');
            }
        });
    }

    function inViewport1() {
        $('.ustep3').each(function() {
            var divPo = $(this).offset().top,
                topOfWindo = $(window).scrollTop();

            if (divPo < topOfWindo + 400) {
                $("#fix-number-ul-id li:nth-child(3)").addClass('active');

                $("#fix-number-ul-id li:nth-child(1)").removeClass('scale');
                $("#fix-number-ul-id li:nth-child(2)").removeClass('scale');
                $("#fix-number-ul-id li:nth-child(3)").addClass('scale');

            } else {
                $("#fix-number-ul-id li:nth-child(3)").removeClass('active');
            }
        });
    }
    $('.register-yellow').on('click', function(event) {
        event.preventDefault();

        var url = '{{ route("manager.store") }}';

        $.ajax({
            url: url,
            method: 'POST',
            data: $('#regform').serialize(),
            success: function(response) {
                console.log(response.success);
                if (response.success == true) {

                    // $('#appointment3').modal('show');     //Message come from controller
                    toastr.success(response.message);
                    setTimeout(function() {
                        $('.invisible').trigger('click');
                        $('#regform')[0].reset();
                    }, 2000);

                    if (response.data.establishment_management == 'single') {
                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: $('#regform').serialize(),
                            success: function(response) {
                                console.log(response.success);
                                if (response.success == true) {

                                    // $('#appointment3').modal('show');     //Message come from controller
                                    toastr.success(response.message);
                                    setTimeout(function() {
                                        $('.invisible').trigger('click');
                                        $('#regform')[0].reset();
                                    }, 2000);
                                    if (response.data.establishment_management == 'single') {
                                        location.href = "{{URL::to('/')}}/manager-register-step-two"
                                    }
                                    $(this).text("S'inscrire");
                                    $(this).text('En traitement...');
                                    $(this).prop('disabled', true);
                                    $(this).prop('disabled', false);

                                } else {
                                    $('.civility-error').text(response.errors.civility);
                                    $('.firstname-error').text(response.errors.first_name);
                                    $('.lastname-error').text(response.errors.last_name);
                                    $('.phone-error').text(response.errors.phone);
                                    $('.email-error').text(response.errors.email_address);
                                    $('.password-error').text(response.errors.password);
                                    $('.password_confirmation-error').text(response.errors.confirm_password);
                                    $('.radio-error').text(response.errors.radio);
                                    $('.represent-error').text(response.errors.represent);
                                    $('.organization-error').text(response.errors.name_of_our_organization);
                                    $('.establish-error').text(response.errors.number_of_establishments_in_the_organization);
                                    $('.address-error').text(response.errors.organization_address);
                                    $('.postal-error').text(response.errors.postal_code);
                                    $('.city-error').text(response.errors.city);

                                }
                            }
                        });
                        //response.data.id
                        location.href = "{{url('manager-register-step-two')}}/" + response.data.id;
                    }
                    $(this).text("S'inscrire");
                    $(this).text('En traitement...');
                    $(this).prop('disabled', true);
                    $(this).prop('disabled', false);

                } else {
                    $('.civility-error').text(response.errors.civility);
                    $('.firstname-error').text(response.errors.first_name);
                    $('.lastname-error').text(response.errors.last_name);
                    $('.phone-error').text(response.errors.phone);
                    $('.email-error').text(response.errors.email_address);
                    $('.password-error').text(response.errors.password);
                    $('.password_confirmation-error').text(response.errors.confirm_password);
                    $('.radio-error').text(response.errors.radio);
                    $('.represent-error').text(response.errors.represent);
                    $('.organization-error').text(response.errors.name_of_our_organization);
                    $('.establish-error').text(response.errors.number_of_establishments_in_the_organization);
                    $('.address-error').text(response.errors.organization_address);
                    $('.postal-error').text(response.errors.postal_code);
                    $('.city-error').text(response.errors.city);

                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#singlediv').hide();
    });

    function hideShowStepThree() {
        var radioValue = $("input[name='management']:checked").val();
        if (radioValue == "single") {
            $('#singlediv').show();
            $('#multiplediv').hide();
        } else {
            $('#multiplediv').show();
            $('#singlediv').hide();

        }
    }

    function removeOneDiv() {
        var radioValue1 = $("input[name='management']:checked").val();
        if (radioValue1 == "single") {
            $('#multiplediv').remove();
        } else {
            $('#singlediv').remove();
        }
    }

    $(document).on('click', '#toggle-password', function() {
        if ($("#password").attr("type") === "password") {
            $("#password").attr("type", "text");
        } else {
            $("#password").attr("type", "password");
        }
    });

    $(document).on('click', '#confirm-password', function() {
        if ($("#confirm_password").attr("type") === "password") {
            $("#confirm_password").attr("type", "text");
        } else {
            $("#confirm_password").attr("type", "password");
        }
    });
</script>

</html>