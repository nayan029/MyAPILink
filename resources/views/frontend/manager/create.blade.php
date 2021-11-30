
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyApi Link</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <ul class="fix-number-ul" id="fix-number-ul-id">
        <li class="active"><a href="#ustep1"><span>1</span></a></li>
        <li class=""><a href="#ustep2"><span>2</span></a></li>
        <li class=""><a href="#ustep3"><span>3</span></a></li>
    </ul>

    <form>
        <div class="ustep1 usetps" id="ustep1">
            <div class="container">
                <!-- <div class="mobile-show text-center">
                    <button class="retourangle-left"><i class="fa fa-angle-left sa-bolder"></i> Retour</button>
                </div> -->

                <div class="text-center pclogo">
                    <a href="javascript:void(0)"><img src="images/apilink_logo_dark.png" alt="logo"></a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 offset-md-2 col-lg-11 offset-lg-1">
                        <h5 class="pc-title">1 • MES INFORMATIONS PERSONNELLES DE GESTIONNAIRE DE COMPTE</h5>
                        <div class="row justify-content-start">
                            <div class="col-md-11 profile-label">
                                <div class="row">
                                    <div class="col-md-2 mb-2">
                                        <div class="form-group">
                                            <label class="">Civilité*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <div class="form-group">
                                            <label class="">Nom*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <div class="form-group">
                                            <label class="">Prénom*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="">Téléphone*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="">Adresse e-mail*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Mot de passe*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="">Confirmer le mot de passe*</label>
                                            <input id="" type="text" name="" class="form-control form-add-establish pl-23">
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
                <a class="cdown sa-cdown mb-0 mt-5" href="#ustep2"><i class="fa fa-angle-down"></i><i
                        class="fa fa-angle-down"></i></a>
            </div>
        </div>

        <div class="ustep2 usetps" id="ustep2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-10 ">
                        <h5 class="pc-title">2 • Gestion d'Etablissement </h5>
                        <div class="row justify-content-center">
                            <div class="col-md-7 profile-label">
                                <div class="management-radios">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" checked>
                                        <div class="custom-management-text">
                                            <p class="manage-textp" for="customRadio1">Je vais gérer
                                                plusieurs établissements </p>
                                            <p class="mb-0">Je suis une collectivité, une mairie ...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="management-radios">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input">
                                        <div class="custom-management-text">
                                            <p class="manage-textp" for="customRadio2">Je vais gérer un seul
                                                établissement </p>
                                            <p class="mb-0">Je suis un établissement privé ou public</p>
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
                <a class="cdown sa-cdown mb-0 mt-5" href="#ustep2"><i class="fa fa-angle-down"></i><i
                        class="fa fa-angle-down"></i></a>
            </div>
        </div>

        <div class="ustep3 usetps mb-5" id="ustep3">
            <div class="container">
                <!-- <div class="mobile-show text-center">
                    <button class="retourangle-left"><i class="fa fa-angle-left sa-bolder"></i> Retour</button>
                </div> -->
                <div class="col-md-8 offset-md-2 col-lg-11 offset-lg-1">
                    <h5 class="pc-title">2 • PROFIL DE VOTRE ÉTABLISSEMENT PRINCIPAL</h5>
                    <div class="row justify-content-start">
                        <div class="col-md-11 profile-label">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="">Type d’établissement</label>
                                        <input id="" type="text" name="" value="Mairie"
                                            class="form-control form-add-establish pl-23">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label class="">Adresse de l'établissement principal</label>
                                        <input id="" type="text" name="" value="Adresse"
                                            class="form-control form-add-establish pl-23">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label class="">Code postal</label>
                                        <input id="" type="text" name="" value="34000"
                                            class="form-control form-add-establish pl-23">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="">Mon rôle au sein de l'établissement</label>
                                        <input id="" type="text" name="" class="form-control form-add-establish pl-23">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mobile-show text-center mt-4">
                    <button class="suiv-btn">Suivant<i class="fa fa-arrow-right"></i> </button>
                    <ul class="step3dots">
                        <li></li>
                        <li class="active"></li>
                        <li></li>
                    </ul>
                </div> -->

                <div class="register-btns">
                    <button class="register-yellow btn" type="button" data-toggle="modal"
                        data-target="#appointment3">S'inscrire</button>
                </div>
            </div>
        </div>

    </form>


    <!-- register-modal -->
    <div class="modal modal-back-blue" id="appointment3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog center-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/material-close.svg"></span>
                    </button>
                </div>
                <div class="modal-body bravo-body">
                    <div class="text-center">
                        <div class="bravo-text">
                            <h3>BRAVO !</h3>
                        </div>
                        <div>
                            <img src="images/project/green-checkmark.svg" alt="checkmark" class="green-checkmarks">
                            <p class="modalappoint-text">Un conseiller Apilink vous contactera <br>par email pour
                                prendre
                                un<br> rendez vous
                                téléphonique</p>
                        </div>
                        <div class="mt-4 mb-2">
                            <a href="mycandidate-profile.html" class="btn btn-white modal-appointment-ok">Ok</a>

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
                        <a href="javascript:void(0)">Retour sur le site Apilink</a>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="footer-profile-ul">
                        <li>
                            © 2021 Apilink - Tous droits réservés
                        </li>
                        <li>
                            Développé par Crawler Agency
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="footer-profile-ul">
                        <li>
                            Politique de confidentialité
                        </li>
                        <li>
                            Mentions légales
                        </li>
                        <li class="mr-0">
                            Conditions générales de vente
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="js/jquery.min.js "></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/popper.min.js "></script>
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<script src="js/bootstrap.min.js "></script>
<script src="js/select2.min.js "></script>
<script src="js/jquery.magnific-popup.min.js "></script>
<script src="js/owl.carousel.js "></script>
<script src="js/custom.js "></script>
<script type="text/javascript ">
    $(".select2 ").select2();
</script>
<script>
    $("#ustep1 .suiv-btn").on('click', function () {
        $("#ustep1").hide();
        $("#ustep2").show();
    });
    $("#ustep2 .retourangle-left").on('click', function () {
        $("#ustep1").show();
        $("#ustep2").hide();
    });
    $("#ustep2 .suiv-btn").on('click', function () {
        $("#ustep2").hide();
        $("#ustep3").show();
        $("#bottomid").show();
    });
    $("#ustep3 .retourangle-left").on('click', function () {
        $("#ustep2").show();
        $("#ustep3").hide();
        $("#bottomid").hide();
    });

    // --------------

    $(window).scroll(function () {
        inViewport();
        inViewport1();
        inViewport2();
    });

    $(window).resize(function () {
        inViewport();
        inViewport1();
        inViewport2();
    });




    $("#fix-number-ul-id li:nth-child(1)").addClass('scale');




    function inViewport() {

        $('.ustep2').each(function () {
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
        $('.ustep3').each(function () {
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
</script>

</html>