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


</head>

<body>

    <!-- <div id="after-header"></div> -->




    <section class="back-f6 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <div class="card sr-card">
                            <div class="card-body pb-4">
                                <div>
                                    <div class="view_pos_candidiate">
                                        <div class="candidate-profile view_candidate">
                                            <img src="{{asset('frontend/images/imgs-svg/view-profile.svg')}}" class="view-img" alt="profile">
                                        </div>
                                        <div class="camera-inputs">
                                            <div class="candidate_input_camera">
                                                <img src="{{asset('frontend/images/imgs-svg/feather-camera.svg')}}" alt="camera">
                                            </div>
                                            <input type="file" name="" class="input-file-opacity">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card sr-card mt-4 p-dark-tit">
                            <div class="card-body pb-4">
                                <div>
                                    <div class="mb-4">
                                        <h5 class="dark-tit">A propos de moi</h5>
                                        <div class="cand-job-sec mt-4 bg-f6">
                                            <p class="mb-0">Passionné par les enfants, j’en ai fais ma vocation. Ayant terminé récemment mon CDD, je suis à la recherche d’un nouvel emploi.
                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="sr-rel personinfo-form mb-4">
                                            <h5 class="dark-tit">Situation actuelle :</h5>
                                            <select required="" class="form-control arrow-down profile-drop">
                                                <!-- <option value="" hidden=""></option> -->
                                                <option>en poste</option>
                                                <option value="">En recherche active</option>
                                                <option value="">à l'écoute de nouvelles opportunités</option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                        </div>

                                        <div class="sr-rel personinfo-form mb-4">
                                            <h5 class="dark-tit">Recherche :</h5>
                                            <div class="custom-edit-muti change-text">
                                                <select title="Basic example" multiple="multiple" class="select-multi">
                                                        <option value="option1">CDI</option>
                                                        <option value="option2">CDD</option>
                                                        <option value="option3">Stages</option>
                                                        <option value="option4">alternance</option>
                                                        <option value="option5">missions en tant qu'indépendant	</option>
                                                        <option value="option6">remplaçements	</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="sr-rel personinfo-form mb-3">
                                            <h5 class="dark-tit">Disponible :</h5>
                                            <select required="" class="form-control arrow-down profile-drop">
                                                <!-- <option value="" hidden=""></option> -->
                                                <option value="">Dès aujourd’hui</option>
                                                <option value="">Lorem ipsum</option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                        </div>
                                        <div class="sr-rel personinfo-form mb-4">
                                            <select required="" class="form-control arrow-down profile-drop">
                                                <!-- <option value="" hidden=""></option> -->
                                                <option value="">À temps plein</option>
                                                <option value="">Lorem ipsum</option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                        </div>
                                        <div class="mb-4">
                                            <div class="sr-rel personinfo-form mb-3">
                                                <h5 class="dark-tit">Diplômes :</h5>
                                                <div class="custom-edit-muti diplo-text">
                                                    <select title="Basic example" multiple="multiple" class="select-multi">
                                                        <option value="option1">Éducateur de jeunes enfants</option>
                                                        <option value="option2">Auxiliaire de puériculture</option>
                                                        <option value="option3">Diplôme d’État d’infirmière</option>
                                                        <option value="option4">Diplôme d’État de Puériculturee</option>
                                                        <option value="option5">CAP Petite enfance</option>
                                                        <option value="option6">CAP Accompagnant éducatif Petite enfance</option>
                                                        <option value="option7">Formation d’Assistante maternelle</option>
                                                        <option value="option8">BAFA</option>
                                                        <option value="option9">Autres</option>
                                                    </select>
                                                </div>
                                                <!-- <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg editprof-img"> -->
                                            </div>
                                            <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>
                                        </div>


                                        <div>
                                            <div class="sr-rel personinfo-form mb-3">
                                                <h5 class="dark-tit">Ancienneté dans le métier :</h5>
                                                <select required="" class="form-control arrow-down profile-drop">
                                                    <option value="">7 ans d’expériences</option>
                                                    <option value="">Lorem ipsum</option>
                                                </select>
                                                <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                            </div>
                                            <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>

                                        </div>

                                        <div class="sr-rel personinfo-form mb-4">
                                            <h5 class="dark-tit">Tranche d’âge :</h5>
                                            <select required="" class="form-control arrow-down profile-drop">
                                                <!-- <option value="" hidden=""></option> -->
                                                <option value="">0-1 an</option>
                                                <option value="">Lorem ipsum</option>
                                            </select>
                                            <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg editprof-img">
                                        </div>

                                        <div class="form-group  mb-4 personinfo-form sr-rel">
                                            <h5 class="dark-tit">Mobilité :</h5>
                                            <input type="text" name="" class=" form-control  sr-rel inputicon-2" placeholder="Montpellier">
                                            <a href=""><img src="images/imgs-svg/edit-icon.svg" alt="" class="arrw-downimg bt-16"></a>
                                        </div>

                                        <div class="pb-5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="editprof1">
                                                <label class="custom-control-label login-cus-check edprof-checklabel" for="editprof1">Permis</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="editprof2">
                                                <label class="custom-control-label login-cus-check edprof-checklabel" for="editprof2">Véhicule</label>
                                            </div>
                                        </div>
                                        <div class="mb-60"></div>


                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-8">
                    <div class="">
                        <div class="card sr-card">
                            <ul class="nav connection-tab edit-line-tab" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="21.963" height="24.333"
                                            viewBox="0 0 21.963 24.333">
                                            <g id="Icon_feather-user" data-name="Icon feather-user"
                                                transform="translate(1.5 1.5)">
                                                <path id="Path_3483" class="svg-stroke" data-name="Path 3483"
                                                    d="M24.963,29.611v-2.37A4.741,4.741,0,0,0,20.222,22.5H10.741A4.741,4.741,0,0,0,6,27.241v2.37"
                                                    transform="translate(-6 -8.278)" fill="none" stroke="#7d7d7d"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                                </path>
                                                <path id="Path_3484" class="svg-stroke" data-name="Path 3484"
                                                    d="M21.482,9.241A4.741,4.741,0,1,1,16.741,4.5,4.741,4.741,0,0,1,21.482,9.241Z"
                                                    transform="translate(-7.259 -4.5)" fill="none" stroke="#7d7d7d"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                                </path>
                                            </g>
                                        </svg>Infos Personnelle</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="card-body">
                                        <div class="personal_detail_edit detail-person">
                                            <h5 class="ml-2 dark-tit">Détails personnels</h5>
                                            <div class="row mx-0 mt-3">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Prénom</label>
                                                        <input type="text" name="" value="Felix" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nom de famille</label>
                                                        <input type="text" name="" value="Harris" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Genre</label>
                                                        <input type="text" name="" value="Male" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Date de naissance</label>
                                                        <input type="text" name="" value="March 20, 1992" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>E-mail</label>
                                                        <input type="text" name="" value="felixharris123@email.com" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Numéro de téléphone</label>
                                                        <input type="text" name="" value="213-984-8576" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Ville</label>
                                                        <input type="text" name="" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Region</label>
                                                        <input type="text" name="" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="pt-5">
                                                <h5 class="ml-2 dark-tit">Expériences</h5>
                                                <div class="row mx-0 mt-3">
                                                    <div class="custom-col1 col-md-3">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <select required="" class="form-control arrow-down profile-drop">
                                                                <!-- <option value="" hidden=""></option> -->
                                                                <option value="">De</option>
                                                                <option value="">Lorem ipsum</option>
                                                            </select>
                                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                        </div>
                                                    </div>
                                                    <div class="custom-col1 col-md-3">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <select required="" class="form-control arrow-down profile-drop">
                                                                <!-- <option value="" hidden=""></option> -->
                                                                <option value="">À</option>
                                                                <option value="">Lorem ipsum</option>
                                                            </select>
                                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                        </div>
                                                    </div>
                                                    <div class="custom-col2 col-md-6">
                                                        <div class="form-group  mb-4 personinfo-form sr-rel">

                                                            <input type="text" name="" class=" form-control  sr-rel inputicon-2 input-new" placeholder="Nom de l’entreprise">
                                                            <a href=""><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="" class="arrw-downimg bt-16"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mx-0">
                                                    <div class="custom-col3 col-md-6">
                                                        <div class="">
                                                            <div class="sr-rel personinfo-form mb-3">
                                                                <select required="" class="form-control arrow-down profile-drop">
                                                                    <option value="">Fonction</option>
                                                                    <option value="">Lorem ipsum</option>
                                                                </select>
                                                                <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>
                                                        </div>

                                                    </div>

                                                    <div class="custom-col2 col-md-6">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <select required="" class="form-control arrow-down profile-drop">
                                                                <!-- <option value="" hidden=""></option> -->
                                                                <option value="">Type de poste (CDi, CDD…</option>
                                                                <option value="">Lorem ipsum</option>
                                                            </select>
                                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="pt-5">
                                                <h5 class="ml-2 dark-tit">Pédagogie appliquée</h5>
                                                <div class="row mx-0 mt-3 editprof-checksec box-edit-profile">
                                                    <div class="col-md-7">
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Maria Montessori">
                                                            <label class="custom-control-label pro-check" for="Maria Montessori">Maria
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Pédagogie">
                                                            <label class="custom-control-label pro-check" for="Pédagogie">Pédagogie
                                                                Faber et</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Pédagogie Reggio">
                                                            <label class="custom-control-label pro-check" for="Pédagogie Reggio">Pédagogie Reggio</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Parler Bambin">
                                                            <label class="custom-control-label pro-check" for="Parler Bambin">Parler
                                                                Bambin</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Autres">
                                                            <label class="custom-control-label pro-check" for="Autres">Autres</label>



                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Pédagogie Interactive">
                                                            <label class="custom-control-label pro-check" for="Pédagogie Interactive">Pédagogie
                                                                Interactive</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Pickler Loczy">
                                                            <label class="custom-control-label pro-check" for="Pickler Loczy">Pickler
                                                                Loczy</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Snoezelen">
                                                            <label class="custom-control-label pro-check" for="Snoezelen">Snoezelen</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Pédagogie Steiner">
                                                            <label class="custom-control-label pro-check" for="Pédagogie Steiner">Pédagogie
                                                                Steiner-</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox profile-check">
                                                            <input type="checkbox" class="custom-control-input" id="Aucune en particulier">
                                                            <label class="custom-control-label pro-check" for="Aucune en particulier">Aucune en
                                                                particulier</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pt-5">
                                                <div class="sr-rel personinfo-form mb-4">
                                                    <h5 class="dark-tit">Mes qualités</h5>
                                                    <div class="custom-edit-muti bienveillance-text">
                                                        <select title="Basic example" multiple="multiple" class="select-multi">
                                                                <option value="option1">Bienveillance</option>
                                                                <option value="option2">Optimisme</option>
                                                                <option value="option3">Adaptabilité</option>
                                                                <option value="option4">Motivation</option>
                                                                <option value="option5">Curiosité</option>
                                                                <option value="option6">Bon relationnel</option>
                                                                <option value="option7">Dynamique</option>
                                                                <option value="option8">Sériosité</option>
                                                                <option value="option9">Patience</option>
                                                                <option value="option10">Empathie</option>
                                                                <option value="option11">Autonomie</option>
                                                                <option value="option12">Organisation</option>
                                                                <option value="option8">Ambition</option>
                                                                <option value="option9">Passion</option>
                                                                <option value="option10">Sens du service</option>
                                                                <option value="option11">Goût du challenge</option>
                                                                <option value="option12">Autres</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="sr-rel personinfo-form mb-4 pt-3">
                                                    <h5 class="dark-tit">Mes valeurs</h5>
                                                    <select required="" class="form-control arrow-down profile-drop">
                                                        <!-- <option value="" hidden=""></option> -->
                                                        <option value="">Paix</option>
                                                        <option value="">Lorem ipsum</option>
                                                    </select>
                                                    <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                </div>
                                                <div class="sr-rel personinfo-form mb-4 pt-3">
                                                    <h5 class="dark-tit">Langues parlées couramment</h5>
                                                    <select required="" class="form-control arrow-down profile-drop">
                                                        <!-- <option value="" hidden=""></option> -->
                                                        <option value="">Français</option>
                                                        <option value="">Lorem ipsum</option>
                                                    </select>
                                                    <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right mt-4">
                                            <button class="btn btn-outline-cancel">Annuler</button>
                                            <a href="mycandidate-profile.html" class="btn btn-save btn-Sauvegarder">Sauvegarder</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>

    <div id="footer"></div>




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
    //----
    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
</script>
<script>
    $('.noscarousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        navText: ["<img src='{{asset('frontend/images/left-arrow-owl.svg')}}'><span>Previous</span>", "<img src='{{asset('frontend/images/owl-arrow-right.svg')}}'><span>Next</span>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
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

    // -------------
    $(document).ready(function() {
        $(".change-text .multiselect").html("CDI,CDD");
        $(".diplo-text .multiselect").html("CAP AEPE");
        $(".bienveillance-text .multiselect").html("Bienveillance");

    });
</script>

</html>