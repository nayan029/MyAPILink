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
        {!! Form::model(null,['method' => 'POST', 'route' => ['store-establishment'], 'files' => true,'id'=>'store-establishment']) !!}
        <div class="add-establish">
            <div class="container">
                <div class="card sr-card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10 col-md-11 add-label-establish">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mt-5">

                                            {!! Form::label('Type d’Établissement', 'Type d’Établissement') !!}
                                            {!! Form::select('type_of_establishment',['Crèche collective' => 'Crèche collective','Micro-crèche' => 'Micro-crèche','Crèche privée d’entreprise ou inter-entreprises' => 'Crèche privée d’entreprise ou inter-entreprises'] ,null, [ 'id' => 'type_of_establishment', 'class' => 'cus-drop select2 form-add-establish']) !!}

                                        </div>


                                        <div class="form-group">
                                            {!! Form::label('A propre de notre structure', 'A propre de notre structure') !!}
                                            {!! Form::text('own_of_our_structure',NULL, ['class' => 'form-control inputicon2 form-add-establish','id'=>'own_of_our_structure']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::label('Date d’ouverture', 'Date d’ouverture') !!}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('opening_date',NULL, [ 'id' => 'opening_date', 'class' => 'datepicker1 form-control  form-add-establish inputicon2 fn-family']) !!}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::select('year',['Année' => 'Année'], null, [ 'id' => 'year', 'class' => 'cus-drop select2 form-add-establish']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('Direction', 'Direction') !!}
                                            {!! Form::text('direction',NULL, ['class' => 'form-control inputicon2','id'=>'direction']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {!! Form::label('Effectif', 'Effectif') !!}
                                            {!! Form::select('effective',['1-10 personnes' => '1-10 personnes','11-20 personnes' => '11-20 personnes','21-30 personnes' => '21-30 personnes','31-40 personnes' => '31-40 personnes','41-50 personnes' => '41-50 personnes'],null, [ 'id' => 'effective' ,'class' => 'cus-drop select2 form-add-establish']) !!}


                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            {!! Form::label('Nombre de groupes et tranches d’âges', 'Nombre de groupes et tranches d’âges') !!}
                                            {!! Form::select('number_of_groups_and_age_groups',['1-10 ans' => '1-10 ans','11-20 ans' => '11-20 ans','21-30 ans' => '21-30 ans','31-40 ans' => '31-40 ans','41-50 ans' => '41-50 ans'],null, [ 'id' => 'number_of_groups_and_age_groups','class' => 'cus-drop select2 form-add-establish']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            {!! Form::label("Capacité d'accueil", "Capacité d'accueil") !!}
                                            {!! Form::select('accommodation_capacity',$accommodationCapacity,null, [ 'id' => 'accommodation_capacity','class' => 'cus-drop select2 form-add-establish']) !!}

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group position-rel value-color">
                                            {!! Form::label("Superficie de l'établissement", "Superficie de l'établissement") !!}
                                            {!! Form::text('surface_area_of_the_establishment',NULL, ['class' => ' form-control form-add-establish inputicon2','id'=>'surface_area_of_the_establishment']) !!}

                                            <div class="m2-label"> {!! Form::label("m²", "m²") !!}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        {!! Form::label('Votre établissement possède t-il un jardin ?', 'Votre établissement possède t-il un jardin ?') !!}

                                        <div>
                                            <div class="radio-custom ">
                                                <div class=" position-rel w-120px">
                                                    {!! Form::radio('garden', 'Yes', true, ['id' => 'garden', 'name' => 'garden', 'class' => 'radio-yes-no']) !!}
                                                    {!! Form::label('Oui', 'Oui', ['class' => 'label-radios']) !!}

                                                </div>
                                                <div class=" position-rel w-120px">
                                                    {!! Form::radio('garden', 'No',NULL, ['id' => 'garden', 'name' => 'garden', 'class' => 'radio-yes-no']) !!}
                                                    {!! Form::label('Non', 'Non', ['class' => 'label-radios']) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="form-group">
                                    {!! Form::label('Pédagogie appliquée', 'Pédagogie appliquée') !!}

                                    <div>
                                        <div class="row check-box-sec check-form mb-4 m-0">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Maria Montessori',false,['class' => 'custom-control-input','id' =>'applied_pedagogy']) !!}
                                                    {!! Form::label('applied_pedagogy', 'Maria Montessori', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Pédagogie',false,['class' => 'custom-control-input','id' =>'Pédagogie']) !!}
                                                    {!! Form::label('Pédagogie', 'Pédagogie Faber et Mazlish', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Pédagogie Reggio',false,['class' => 'custom-control-input','id' =>'Reggio']) !!}
                                                    {!! Form::label('Reggio', 'Pédagogie Reggio', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Parler Bambin',false,['class' => 'custom-control-input','id' =>'Parler']) !!}
                                                    {!! Form::label('Parler', 'Parler Bambin', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Autres',false,['class' => 'custom-control-input','id' =>'Autres']) !!}
                                                    {!! Form::label('Autres', 'Autres', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" class="custom-control-input" id="Pédagogie Interactive">
                                                    <label class="custom-control-label pro-check" for="Pédagogie Interactive">Pédagogie
                                                        Interactive</label>
                                                    {!! Form::checkbox('applied_pedagogy','Pédagogie Interactive',false,['class' => 'custom-control-input','id' =>'Interactive']) !!}
                                                    {!! Form::label('Interactive', 'Pédagogie Interactive', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy','Pickler Loczy',false,['class' => 'custom-control-input','id' =>'Pickler']) !!}
                                                    {!! Form::label('Pickler', 'Pickler Loczy', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">

                                                    {!! Form::checkbox('applied_pedagogy','Snoezelen',false,['class' => 'custom-control-input','id' =>'Snoezelen']) !!}
                                                    {!! Form::label('Snoezelen', 'Snoezelen', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">

                                                    {!! Form::checkbox('applied_pedagogy','Pédagogie Steiner',false,['class' => 'custom-control-input','id' =>'Steiner']) !!}
                                                    {!! Form::label('Steiner', 'Pédagogie Steiner', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                  
                                                        {!! Form::checkbox('applied_pedagogy','Aucune en particulier',false,['class' => 'custom-control-input','id' =>'particulier']) !!}
                                                    {!! Form::label('particulier', 'Aucune en particulier', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {!! Form::label("Nos valeurs", "Nos valeurs") !!}
                                                    {!! Form::textarea('our_values', '', ['size' => '30x4', 'id' => 'our_values', 'name' => 'our_values', 'class' => 'form-control textarea-form inputicon2']) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group sr-pos">
                                    <div class="upload-file-input">
                                        {!! Form::label("Notre projet pédagogique", "Notre projet pédagogique") !!}

                                        <input id="uploadFile" value="" class="form-add-establish w-100 inputicon2" disabled>
                                        <div class="fileUpload btn btn-primary attach-file">
                                            <span><i class="fa fa-paperclip mr-2"></i>Attacher un
                                                document</span>
                                                
                                            {!! Form::file('document', ['id' => 'document', 'name' => 'document', 'class' => 'upload']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <section>

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
                                                                    <img src="{{asset('frontend/images/profile-feather-upload.svg')}}" width="30px" class="mb-1">
                                                                    <!-- <i class="glyphicon glyphicon-download-alt"></i> -->
                                                                    <p>Drag and drop here or<span style="color:#192842;font-family: 'Quicksand-Bold'">
                                                                            Browse</span> </p>
                                                                </div>
                                                                {!! Form::file('more_infomation', ['id' => 'more_infomation', 'name' => 'more_infomation', 'class' => 'dropzone']) !!}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </section>
                                    </div>


                                    <div class="col-md-12 d-flex justify-content-end mt-5">
                                        <button class="btn btn-outline-cancel annuler-btns">Annuler</button>
                                        <button class="btn btn-yellow">Sauvegarder</button>
                                        <!-- href="view-establishment-account-3.html" -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
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
    $("#bravo-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#cv-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
    });
</script>
<script>
    var togglePassword = document.getElementById("toggle-password ");

    if (togglePassword) {
        togglePassword.addEventListener('click ', function() {
            var x = document.getElementById("password ");
            if (x.type === "password ") {
                x.type = "text ";
            } else {
                x.type = "password ";
            }
        });
    }

    // -------------------

    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
    $(document).ready(function() {
        $(".change-placeholder-select .multiselect").html("Type de poste");
    });

    // ----------------------------

    $('#cmbIdioma1').on('select2:open', function() {
        $("body").addClass('select2-open1');
    });
    $('#cmbIdioma1').on('select2:close', function() {
        $("body").removeClass('select2-open1');
    });
    $(document).ready(function() {
        document.getElementById("document").onchange = function() {
            document.getElementById("uploadFile").value = this.value;
        };
    });

    $(document).ready(function() {
        $(".datepicker1").datepicker({
            dateFormat: 'dd-mm'
        });
        $('.time1').timepicker({
            defaultTime: null,
            timeFormat: "HH:mm",
            showMeridian: false,
        });
    });
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#store-establishment') !!}

</html>