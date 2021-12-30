<!DOCTYPE html>
<html lang="en">

<head>
    <title>ApiLink</title>
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
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />

</head>

<style>
    .file-download{
        position: absolute;
    top: 0;
    bottom: 0;
    opacity: 0;
    z-index: 999;
    }
    </style>

<body>
    <div style="background-image: linear-gradient(
        180deg, rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), url({{asset('frontend/images/eng1/engagement-bg.png')}});" class="engagement-sec">
        <div class="container">
            <div>
                <div class="perinfo-steps">
                    <ul class="perinfo-ul ">
                        <li class="active">
                            <span class="step">1</span>
                            <p>Infos Personnelles</p>
                        </li>
                        <li>
                            <span class="step">2</span>
                            <p>Situation actuelle</p>
                        </li>
                        <li>
                            <span class="step">3</span>
                            <p>Mon parcours</p>
                        </li>
                        <li>
                            <span class="step">4</span>
                            <p>A propos de moi</p>
                        </li>
                        <li>
                            <span class="step">5</span>
                            <p>CV</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="step1-sec" style="display:block;">
            <form action="#" method="post" id="steponeform">
                <div class="container">
                    <div class="wel-hgt">
                        <div class="row d-flex justify-content-center">
                            <div class="cuscol-10 mt-45">
                                <div class="row justify-content-between">
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Prénom</label>
                                            <input type="text" name="first_name" id="first_name" value="{{$updateUser->first_name}}" class=" form-control input-info" placeholder="Felix">
                                            <span style="color: red;" class="error" id="first_nameerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Nom de famille</label>
                                            <input type="text" name="last_name" value="{{$updateUser->last_name}}" id="last_name" class=" form-control input-info" placeholder="Harris">
                                            <span style="color: red;" class="error" id="last_nameerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                    <div class="form-group  mb-4 personinfo-form">
                                            <label class="">Civilité<span class="text-danger">*</span></label>
                                            <select class="cus-drop pl-23 select2 form-add-establish" name="civility" style="width: 100%;">
                                                <option value="Mr">M.</option>
                                                <option value="Mrs">Madame.</option>
                                            </select>
                                            <span class="civility-error text-danger">@error ('civility') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Date de naissance</label>
                                            <input type="date" name="dob" id="dob" class="form-control input-info" placeholder="Date" onkeypress="return isNumber(event)">
                                            <span style="color: red;" class="error" id="doberror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>E-mail</label>
                                            <input type="text" value="{{$updateUser->email}}" name="email" id="email" class=" form-control input-info" placeholder="felixharris123@email.com">
                                            <span style="color: red;" class="error" id="emailerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Numéro de téléphone</label>
                                            <input type="text" name="phone" id="phone" class=" form-control input-info" placeholder="0102030405" maxlength="10" onkeypress="return isNumber(event)">
                                            <span style="color: red;" class="error" id="phoneerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Ville</label>
                                            <input type="text" name="city" id="city" class=" form-control input-info" placeholder="Montpellier">
                                            <span style="color: red;" class="error" id="cityerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 customcol-6 pb-2">
                                        <div class="form-group  mb-4 personinfo-form">
                                            <label>Code postal</label>
                                            <input type="text" name="postal_code" id="postal_code" class=" form-control input-info" placeholder="34000" maxlength="5" onkeypress="return isNumber(event)">
                                            <span style="color: red;" class="error" id="postal_codeerror"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="text-right">
                         <button type="button" class="btn eng-btn mb-20 mr-3 w-200px" id="step1-btn">Etape suivante</button>
                          </div>
                    </div>
                </div>
             </form>
        </div>

        <div id="step2-sec" style="display: none;">
            <form action="#" method="post" id="steptwoform">
                <div class="container">
                    <div class="wel-hgt">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 mt-45">
                                <div class="sr-rel personinfo-form mb-4">
                                    <label>Situation actuelle :</label>
                                    <select name="current_situation" id="current_situation" class="form-control arrow-down">
                                        <!-- <option value="" hidden=""></option> -->
                                        <option value="En recherche active">En recherche active</option>
                                        <option value="Lorem ipsum">Lorem ipsum</option>
                                    </select>
                                    <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg">
                                    <span style="color: red;" class="error" id="current_situationerror"></span>

                                </div>
                                <div class="sr-rel personinfo-form mb-4">
                                    <label>Recherche :</label>
                                    <div class="check-tranche cdi-select">
                                        <select name="research[]" id="research" title="Basic example" multiple="multiple" name="example-basic" class="select-multi">
                                            <option value="CDI">CDI</option>
                                            <option value="CDD">CDD</option>
                                            <option value="stage">stage</option>
                                            <option value="multi-âge">multi-âge</option>
                                            <option value="alternance">alternance</option>
                                            <option value="missions en tant qu'indépendant">missions en tant qu'indépendant </option>
                                            <option>remplaçements</option>
                                        </select>
                                        <span style="color: red;" class="error" id="researcherror"></span>
                                    </div>
                                </div>
                                <div class="sr-rel personinfo-form mb-4 mt-45">
                                    <label>Disponible :</label>
                                    <select name="available_day" id="available_day" class="form-control arrow-down">
                                        <option value="">Please select disponible</option>
                                        <option value="Dès aujourd’hui">Dès aujourd’hui</option>
                                        <option value="Lorem ipsum">Lorem ipsum</option>
                                    </select>
                                    <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg">
                                    <span style="color: red;" class="error" id="available_dayerror"></span>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox step4-check">
                                        <input type="checkbox" name="available_time[]" value="fulltime" class="custom-control-input" id="available_time" >
                                        <label class="custom-control-label login-cus-check">à temps plein</label>
                                    </div>
                                    <div class="custom-control custom-checkbox step4-check">
                                        <input type="checkbox" name="available_time[]" class="custom-control-input" value="part time" id="available_time">
                                        <label class="custom-control-label login-cus-check">à temps partiel</label>
                                    </div>
                                    <span style="color: red;" class="error" id="available_dayerror"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn eng-btn mb-20 mr-3 w-200px" id="step2-btn">Etape suivante</button>
                        </div>
                    </div>
                </div>
               
            </form>
        </div>

        <div id="step3-sec" style="display:none;">
            <form action="#" method="post" id="stepthreeform">
                <div class="container">
                    <div class="wel-hgt ">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-md-6 mt-45">

                                <div class="row ">
                                    <div class="journey-custcol1">
                                        <div class="sr-rel personinfo-form mb-4 ">
                                            <label>Diplômes :</label>
                                            <select name="diplomas" id="diplomas" class="form-control arrow-down">
                                                <option value="cap-aepe">CAP AEPE</option>
                                            </select>
                                            <img src="frontend/images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg">
                                            <span style="color: red;" class="error" id="diplomaserror"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="journey-custcol1">
                                        <div class="sr-rel personinfo-form mb-4 ">
                                            <label>Mon rôle dans l'établissement </label>
                                            <select name="roles" id="roles" class="form-control arrow-down">
                                                <!-- <option value="" hidden=""></option> -->
                                                <option value="compétences pédagogiques auprès des enfants">compétences pédagogiques auprès des enfants</option>
                                                <option value="compétences médicales et psychologiques auprès des enfants">compétences médicales et psychologiques auprès des enfants</option>
                                                <option value="compétences technniques (agents d'entretien, cuisinier, lingère)">compétences technniques (agents d'entretien, cuisinier, lingère) </option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg">
                                            <span style="color: red;" class="error" id="roleserror"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="journey-custcol1">
                                        <div class="sr-rel personinfo-form mb-4 ">
                                            <label>Expérience dans le domaine : </label>
                                            <select name="experiences_of" id="experiences_of" class="form-control arrow-down">
                                                <option value="6 mois">6 mois</option>
                                                <option value="1 an">1 an</option>
                                                <option value="2 ans">2 ans</option>
                                                <option value="3 ans">3 ans </option>
                                                <option value="until 20 years">(until 20 years) </option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg">
                                            <span style="color: red;" class="error" id="experiences_oferror"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="journey-custcol1">
                                        <div class="sr-rel personinfo-form mb-4 ">
                                            <label>Tranche d'âge avec expérience :</label>
                                            <div class="check-tranche change-select">
                                                <select name="experiences_at[]" id="experiences_at" multiple="multiple" class="select-multi">
                                                    <option value="0-1 an">0-1 an</option>
                                                    <option value="1-2 ans">1-2 ans</option>
                                                    <option value="S2-3 ans">S2-3 ans</option>
                                                    <option value="multi-âge">multi-âge</option>
                                                </select>
                                                <span style="color: red;" class="error" id="experiences_aterror"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="journey-custcol1">
                                        <div class="sr-rel personinfo-form mb-4 ">
                                            <label>Pédagogie appliquée</label>
                                            <div class="check-tranche maria-select">
                                                <select multiple="multiple" name="pedagogy[]" id="pedagogy" class="select-multi">
                                                    <option value="Maria Montessori">Maria Montessori</option>
                                                    <option value="Pédagogie Reggio">Pédagogie Reggio</option>
                                                    <option value="Parler Bambin">Parler Bambin</option>
                                                    <option value="Autres">Autres</option>
                                                    <option value="Pédagogie Interactive">Pédagogie Interactive</option>
                                                    <option value="Pickler Loczy">Pickler Loczy</option>
                                                    <option value="Pédagogie Steiner-Waldorf">Pédagogie Steiner-Waldorf</option>
                                                    <option value="Aucune en particulier">Aucune en particulier</option>
                                                    <option value="Pédagogie Faber et Mazlish">Pédagogie Faber et Mazlish</option>
                                                    <option value="Snoezelen">Snoezelen</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <div class="text-right">
                    <button type="button" class="btn eng-btn mb-20 mr-3 w-200px" id="step3-btn">Etape
                        suivante</button>
                </div>
                    </div>
                </div>
               
            </form>
        </div>

        <div id="step4-sec" style="display:none;">
            <form action="#" method="post" id="stepfourform">
                <div class="container">
                    <div class="wel-hgt">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 mt-45">
                                <div class="sr-rel personinfo-form mb-4">
                                    <label>Mes qualités</label>
                                    <div class="check-tranche bienveillance-text">
                                        <select name="qualities[]" id="qualities" multiple="multiple" class="select-multi">
                                            <option value="Bienveillance">Bienveillance</option>
                                            <option value="Optimisme">Optimisme</option>
                                            <option value="Adaptabilité">Adaptabilité</option>
                                            <option value="Motivation">Motivation</option>
                                            <option value="Curiosité">Curiosité</option>
                                            <option value="Bon relationnel">Bon relationnel</option>
                                            <option value="Dynamique">Dynamique</option>
                                            <option value="Sériosité">Sériosité</option>
                                            <option value="Patience">Patience</option>
                                            <option value="Empathie">Empathie</option>
                                            <option value="Autonomie">Autonomie</option>
                                            <option value="Organisation">Organisation</option>
                                            <option value="Ambition">Ambition</option>
                                            <option value="Passion">Passion</option>
                                            <option value="Sens du service">Sens du service</option>
                                            <option value="Goût du challenge">Goût du challenge</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                        <span style="color: red;" class="error" id="qualitieserror"></span>
                                    </div>

                                </div>
                                <div class="sr-rel personinfo-form mb-4">
                                    <label>Langues parlées couramment</label>
                                    <div class="check-tranche  français-select">
                                        <select name="languages_spoken[]" id="languages_spoken" multiple="multiple" class="select-multi">
                                            <option value="Français">Français</option>
                                            <option value="Anglais">Anglais</option>
                                            <option value="Espagnol">Espagnol</option>
                                            <option value="Allemand">Allemand</option>
                                            <option value="Italien">Italien</option>
                                            <option value="Portugais">Portugais</option>
                                            <option value="Russe">Russe</option>
                                            <option value="Arabe">Arabe</option>
                                            <option value="Chinois">Chinois</option>
                                            <option value="Néerlandais">Néerlandais</option>
                                            <option value="NAutres">NAutres</option>
                                        </select>
                                        <span style="color: red;" class="error" id="languages_spokenerror"></span>
                                    </div>
                                </div>

                                <div class="form-group  mb-4 personinfo-form sr-rel">
                                    <label>Mobilité :</label>
                                    <input type="text" name="mobility" id="mobility" class=" form-control input-info sr-rel" placeholder="Harris">
                                    <a href="#"><img src="{{asset('images/imgs-svg/edit-icon.svg')}}" alt="" class="arrw-downimg"></a>
                                    <span style="color: red;" class="error" id="mobilityerror"></span>
                                </div>

                                <!-- range  -->
                                <div class="mb-4">
                                    <div class="min-max-km">
                                        <div class="min-div">
                                            <input type="hidden" name="kmmin" class="min" />km
                                            <!-- <span id="kmmin"></span>km -->
                                        </div>
                                        <div id="slider"></div>

                                        <div class="min-div">
                                            <input type="hidden" name="kmmax" class="max" />km
                                            <!-- <span id="kmmax"></span>km -->
                                            <!-- <span name="kmmax"></span>km -->
                                        </div>

                                    </div>
                                    <!-- <div id="slider"></div> -->

                                </div>

                                <!-- end range -->
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox step4-check">
                                        <input type="checkbox" name="permit_vehicle[]" id="permit_vehicle" value="Permis" class="custom-control-input">
                                        <label class="custom-control-label login-cus-check" for="permit_vehicle">Permis</label>
                                    </div>
                                    <div class="custom-control custom-checkbox step4-check">
                                        <input type="checkbox" value="Véhicule" name="permit_vehicle[]" class="custom-control-input">
                                        <label class="custom-control-label login-cus-check" for="permit_vehicle">Véhicule</label>
                                    </div>

                                </div>



                            </div>
                        </div>
                        <div class="text-right">
                    <button type="button" class="btn eng-btn mb-20 mr-3 w-200px" id="step4-btn">Etape suivante</button>
                </div>
                    </div>
                </div>
               
            </form>
        </div>

        <div id="step5-sec" style="display: none;">
          <form action="{{route('uploadcv')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="editid" value="{{$updateUser->id}}">
            <div class="container">
                <div class="wel-hgt d-flex justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center">
                        <div class="position-relative">
                            <input name="cv" type="file" class="file-download">
                            <a  class="btn btn-blue download-btn"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="" class="mr-2" download>Télécharger mon cv</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn eng-btn mb-20 mr-3 w-200px" id="step5-btn">Etape suivante</button>
            </div>
            </form>
        </div>

    </div>
</body>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
<script>
  var geocoder = new maptiler.Geocoder({
    input: 'city',
    key: 'aGdYhIz2jXHVxE7pwlGa'
  });
  geocoder.on('select', function(item) {
    $('#city').val(item.text);
  });
</script>
<script>
  var geocoder = new maptiler.Geocoder({
    input: 'mobility',
    key: 'aGdYhIz2jXHVxE7pwlGa'
  });
  geocoder.on('select', function(item) {
    $('#mobility').val(item.text);
  });
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
<script type="text/javascript">
    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });

    //-------------
    $(document).ready(function() {

        $("#step1-btn").on('click', function() {
            step1validation();
        });
        $("#step2-btn").on('click', function() {
            step2validation();
        });
        $("#step3-btn").on('click', function() {
            step3validation();
        });
        $("#step4-btn").on('click', function() {
            step4validation();
        });
    });
</script>

<script type="text/javascript ">
    $(".select2 ").select2();
</script>
<!-- --------------------------range script-------------------------------  -->
<script>
    $(window).ready(function() {
        $("#flexCheckDefault3").click(function() {
            $(".check-all").prop('checked', $(this).prop('checked'));
        });
        /* init widget */
        $("#slider").slider({
            range: true,
            max: 500,
            values: [0, 150],
            slide: function(event, ui) {
                var min = ui.values[0];
                var max = ui.values[1];
                $(".min").val(min);
                $(".max").val(max);
            }
        });

        /* show initial values */
        var min = $("#slider").slider("values", 0);
        var max = $("#slider").slider("values", 1);
        $(".min").val(min);
        $(".max").val(max);
        // var setmin = $("#kmmin").text(min);
        // alert(setmin);
        $(".min").attr('value', min);
        $(".max").attr('value', max);
    });
</script>
<!-- steps -->

<script>
    //----------
    $(document).ready(function() {
        $(".change-select .multiselect").html("0-1 an");
        $(".cdi-select .multiselect").html("CDI,CDD");
        $(".français-select .multiselect").html("Français");
        $(".maria-select .multiselect").html("Maria Montessori");
        $(".bienveillance-text .multiselect").html("Bienveillance");
    });
</script>

<script type="text/javascript">
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    $(document).ready(function() {
        $(".datepicker1").datepicker({
            format: 'dd/mm/yyyy'
        });
        $('.time1').timepicker({
            defaultTime: null,
            timeFormat: "HH:mm",
            showMeridian: false,
        });
    });

    // form validation script

    //step one validation 

    function step1validation() {
        var temp = 0;
        var firstname = $("#first_name").val();
        var lastname = $("#last_name").val();
        var civility = $("#civility").val();
        var dob = $("#dob").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var city = $("#city").val();
        var postal_code = $("#postal_code").val();
        var firstname = $("#first_name").val();
        var firstname = $("#first_name").val();
        var firstname = $("#first_name").val();
        var firstname = $("#first_name").val();



        if (firstname.trim() == '') {
            $("#first_nameerror").html("Please enter firstname");
            temp++;
        } else {
            $("#first_nameerror").html("");
        }

        if (lastname.trim() == '') {
            $("#last_nameerror").html("Please enter lastname");
            temp++;
        } else {
            $("#last_nameerror").html("");
        }
        if (civility == '') {
            $("#civilityerror").html("Please enter civility");
            temp++;
        } else {
            $("#civilityerror").html("");
        }

        if (dob.trim() == '') {
            $("#doberror").html("Please enter dob");
            temp++;
        } else {
            $("#doberror").html("");
        }

        if (email.trim() == '') {
            $("#emailerror").html("Please enter email");
            temp++;
        } else {
            $("#emailerror").html("");
        }

        if (phone.trim() == '') {
            $("#phoneerror").html("Please enter phone");
            temp++;
        } else {
            $("#phoneerror").html("");
        }

        if (city.trim() == '') {
            $("#cityerror").html("Please enter city");
            temp++;
        } else {
            $("#cityerror").html("");
        }

        if (postal_code.trim() == '') {
            $("#postal_codeerror").html("Please enter postalcode");
            temp++;
        } else {
            $("#postal_codeerror").html("");
        }
        if (temp == 0) {
            var steponeform = $("#steponeform").serialize();
            var stepName = 'Infos Personnelles';
            saveCandidateProfile(steponeform, stepName);
            $("#step1-sec").hide();
            $("#step2-sec").show();
            $("#step3-sec").hide();
            $("#step4-sec").hide();
            $("#step5-sec").hide();
            window.scrollTo(0, 0);
            $(".perinfo-ul li:nth-child(2)").removeClass("active");
            $(".perinfo-ul li:nth-child(1)").addClass("blueactive");
            $(".perinfo-ul li:nth-child(2)").addClass("active");
            return true;
        } else {
            return false;
        }
    }

    //step two validation 

    function step2validation() {
        var temp = 0;
        var current_situation = $("#current_situation").val();
        var research = $("#research").val();
        var available_day = $("#available_day").val();
        var available_time = $("#available_time").prop('checked');

        if (current_situation == '') {
            $("#current_situationerror").html("Please select situation");
            temp++;
        } else {
            $("#current_situationerror").html("");
        }

        if (research == '') {
            $("#researcherror").html("Please select research");
            temp++;
        } else {
            $("#researcherror").html("");
        }
        if (available_day == '') {
            $("#available_dayerror").html("Please select available");
            temp++;
        } else {
            $("#available_dayerror").html("");
        }

        if (available_time == false) {
            $("#available_timeerror").html("Please checked available time");
            temp++;
        } else {
            $("#available_timeerror").html("");
        }


        if (temp == 0) {
            var steponeform = $("#steptwoform").serialize();
            var stepName = 'Situation actuelle';
            saveCandidateProfile(steponeform, stepName);
            $("#step1-sec").hide();
            $("#step2-sec").hide();
            $("#step3-sec").show();
            $("#step4-sec").hide();
            $("#step5-sec").hide();
            window.scrollTo(0, 0);
            $(".perinfo-ul li:nth-child(3)").removeClass("active");
            $(".perinfo-ul li:nth-child(2)").addClass("blueactive");
            $(".perinfo-ul li:nth-child(3)").addClass("active");
            return true;
        } else {
            return false;
        }
    }

    //step three validation 

    function step3validation() {
        var temp = 0;
        var diplomas = $("#diplomas").val();
        var roles = $("#roles").val();
        var experiences_of = $("#experiences_of").val();
        var experiences_at = $("#experiences_at").val();
        var pedagogy = $("#pedagogy").val();

        if (diplomas == '') {
            $("#diplomaserror").html("Please select diplomas");
            temp++;
        } else {
            $("#diplomaserror").html("");
        }

        if (roles == '') {
            $("#roleserror").html("Please select roles");
            temp++;
        } else {
            $("#roleserror").html("");
        }
        if (experiences_of == '') {
            $("#experiences_oferror").html("Please select experiences");
            temp++;
        } else {
            $("#experiences_oferror").html("");
        }

        if (experiences_at == false) {
            $("#experiences_aterror").html("Please select age group experiences");
            temp++;
        } else {
            $("#experiences_aterror").html("");
        }

        if (pedagogy == false) {
            $("#pedagogyerror").html("Please select pedagogy");
            temp++;
        } else {
            $("#pedagogyerror").html("");
        }


        if (temp == 0) {
            var steponeform = $("#stepthreeform").serialize();
            var stepName = 'Mon parcours';
            saveCandidateProfile(steponeform, stepName);
            $("#step1-sec").hide();
            $("#step2-sec").hide();
            $("#step3-sec").hide();
            $("#step4-sec").show();
            $("#step5-sec").hide();
            window.scrollTo(0, 0);
            $(".perinfo-ul li:nth-child(4)").removeClass("active");
            $(".perinfo-ul li:nth-child(3)").addClass("blueactive");
            $(".perinfo-ul li:nth-child(4)").addClass("active");
            return true;
        } else {
            return false;
        }
    }

    //step four validation 

    function step4validation() {
        var temp = 0;
        var qualities = $("#qualities").val();
        var languages_spoken = $("#languages_spoken").val();
        var mobility = $("#mobility").val();
        var permit_vehicle = $("#permit_vehicle").val();
        var pedagogy = $("#pedagogy").val();

        if (qualities == '') {
            $("#qualitieserror").html("Please select qualities");
            temp++;
        } else {
            $("#qualitieserror").html("");
        }

        if (languages_spoken == '') {
            $("#languages_spokenerror").html("Please select languages spoken");
            temp++;
        } else {
            $("#languages_spokenerror").html("");
        }
        if (mobility == '') {
            $("#mobilityerror").html("Please enter mobility");
            temp++;
        } else {
            $("#mobilityerror").html("");
        }

        if (permit_vehicle == false) {
            $("#permit_vehicleerror").html("Please select one checkbox");
            temp++;
        } else {
            $("#permit_vehicleerror").html("");
        }

        if (pedagogy == false) {
            $("#pedagogyerror").html("Please select pedagogy");
            temp++;
        } else {
            $("#pedagogyerror").html("");
        }


        if (temp == 0) {
            var steponeform = $("#stepfourform").serialize();
            var stepName = 'A propos de moi';
            saveCandidateProfile(steponeform, stepName);
            $("#step1-sec").hide();
            $("#step2-sec").hide();
            $("#step3-sec").hide();
            $("#step4-sec").hide();
            $("#step5-sec").show();
            window.scrollTo(0, 0);
            $(".perinfo-ul li:nth-child(5)").removeClass("active");
            $(".perinfo-ul li:nth-child(4)").addClass("blueactive");
            $(".perinfo-ul li:nth-child(5)").addClass("active");
            return true;
        } else {
            return false;
        }
    }

    function saveCandidateProfile(formData, stepName) {
        $.ajax({
            url: '{{route("candidate.profile",$updateUser->id)}}?' + formData,
            method: 'get',
            dataType: 'json',
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message + ' ' + stepName);
                }
            }
        })
    }
</script>

</html>