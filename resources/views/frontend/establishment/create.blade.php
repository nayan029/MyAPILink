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

    <section class="back-f6 ">
        <div class="add-establish">
            <div class="container">
                <div class="card sr-card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10 col-md-11 add-label-establish">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mt-5">
                                            <label>Type d’Établissement</label>
                                            <select class="cus-drop select2 form-add-establish" id="cmbIdioma1"
                                                style="width: 100%;">
                                                <option value="" selected></option>
                                                <option value="">Crèche collective</option>
                                                <option value="">Micro-crèche</option>
                                                <option value="">Crèche privée d’entreprise ou inter-entreprises
                                                </option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>A propre de notre structure</label>
                                            <input type="text" name=""
                                                class=" form-control inputicon2 form-add-establish">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Date d’ouverture</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="cus-drop select2 form-add-establish" style="width: 100%;">
                                                <option value="">Date</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="cus-drop select2 form-add-establish" style="width: 100%;">
                                                <option value="">Année</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Direction</label>
                                            <input type="text" name=""
                                                class=" form-control form-add-establish inputicon2">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Effectif</label>
                                            <select class="cus-drop select2 form-add-establish" style="width: 100%;">
                                                <option value=""></option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Nombre de groupes et tranches d’âges</label>
                                            <select class="cus-drop select2 form-add-establish" style="width: 100%;">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Capacité d'accueil</label>
                                            <select class="cus-drop select2 form-add-establish" style="width: 100%;">
                                                <option value="">35</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group position-rel value-color">
                                            <label>Superficie de l'établissement</label>
                                            <input type="text" name="" value="35"
                                                class=" form-control form-add-establish inputicon2">
                                            <div class="m2-label"><label>m²</label></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Votre établissement possède t-il un jardin ?</label>
                                        <div>
                                            <div class="radio-custom ">
                                                <div class=" position-rel w-120px">
                                                    <input type="radio" name="sd" id="" class="radio-yes-no" checked>
                                                    <label class="label-radios">Oui</label>
                                                </div>
                                                <div class=" position-rel w-120px">
                                                    <input type="radio" name="sd" id="" class="radio-yes-no">
                                                    <label class="label-radios">Non</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="form-group">
                                    <label>Pédagogie appliquée</label>
                                    <div>
                                        <div class="row check-box-sec check-form mb-4 m-0">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Maria Montessori" checked>
                                                    <label class="custom-control-label pro-check"
                                                        for="Maria Montessori">Maria Montessori</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input" id="Pédagogie">
                                                    <label class="custom-control-label pro-check"
                                                        for="Pédagogie">Pédagogie Faber et Mazlish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Pédagogie Reggio">
                                                    <label class="custom-control-label pro-check"
                                                        for="Pédagogie Reggio">Pédagogie Reggio</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Parler Bambin">
                                                    <label class="custom-control-label pro-check"
                                                        for="Parler Bambin">Parler Bambin</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input" id="Autres">
                                                    <label class="custom-control-label pro-check"
                                                        for="Autres">Autres</label>



                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Pédagogie Interactive">
                                                    <label class="custom-control-label pro-check"
                                                        for="Pédagogie Interactive">Pédagogie
                                                        Interactive</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Pickler Loczy">
                                                    <label class="custom-control-label pro-check"
                                                        for="Pickler Loczy">Pickler Loczy</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input" id="Snoezelen">
                                                    <label class="custom-control-label pro-check"
                                                        for="Snoezelen">Snoezelen</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Pédagogie Steiner">
                                                    <label class="custom-control-label pro-check"
                                                        for="Pédagogie Steiner">Pédagogie
                                                        Steiner-Waldorf</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="Aucune en particulier">
                                                    <label class="custom-control-label pro-check"
                                                        for="Aucune en particulier">Aucune en
                                                        particulier</label>



                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nos valeurs</label>
                                                    <textarea name="" id="" cols="30" rows="4"
                                                        class="form-control textarea-form inputicon2"></textarea>
                                                    <!-- <input type="text" name="" class="form-add-establish form-control inputicon2"> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group sr-pos">
                                    <div class="upload-file-input">
                                        <label>Notre projet pédagogique</label>
                                        <input id="uploadFile" value="" class="form-add-establish w-100 inputicon2">
                                        <div class="fileUpload btn btn-primary attach-file">
                                            <span><i class="fa fa-paperclip mr-2"></i>Attacher un
                                                document</span>
                                            <input id="uploadBtn" type="file" class="upload">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <section>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group mt-3">
                                                                <label class="control-label">Attachez vos
                                                                    documents, relatifs à votre structure pour
                                                                    plus d’informations</label>
                                                                <div class="preview-zone hidden">
                                                                    <div class="box box-solid">
                                                                        <div class="box-body"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-wrapper">
                                                                    <div class="dropzone-desc">
                                                                        <img src="{{asset('frontend/images/profile-feather-upload.svg')}}"
                                                                            width="30px" class="mb-1">
                                                                        <!-- <i class="glyphicon glyphicon-download-alt"></i> -->
                                                                        <p>Drag and drop here or<span
                                                                                style="color:#192842;font-family: 'Quicksand-Bold'">
                                                                                Browse</span> </p>
                                                                    </div>
                                                                    <input type="file" name="img_logo" class="dropzone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </section>
                                    </div>


                                    <div class="col-md-12 d-flex justify-content-end mt-5">
                                        <button class="btn btn-outline-cancel annuler-btns">Annuler</button>
                                        <a href="view-establishment-account-3.html"
                                            class="btn btn-yellow">Sauvegarder</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script type="text/javascript ">
    $(".select2 ").select2();
</script>
<script type="text/javascript">
    $("#bravo-btn").on('click', function () {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#cv-btn").on('click', function () {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
    });
</script>
<script>
    var togglePassword = document.getElementById("toggle-password ");

    if (togglePassword) {
        togglePassword.addEventListener('click ', function () {
            var x = document.getElementById("password ");
            if (x.type === "password ") {
                x.type = "text ";
            } else {
                x.type = "password ";
            }
        });
    }

    // -------------------

    $(function () {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
    $(document).ready(function () {
        $(".change-placeholder-select .multiselect").html("Type de poste");
    });

    // ----------------------------

    $('#cmbIdioma1').on('select2:open', function () {
        $("body").addClass('select2-open1');
    });
    $('#cmbIdioma1').on('select2:close', function () {
        $("body").removeClass('select2-open1');
    });
</script>

</html>