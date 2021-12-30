@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection

@section('content')

<section class="back-f6 ">
    {!! Form::model(null,['method' => 'POST', 'route' => ['update-establishment',$establishment->id], 'files' => true,'id'=>'update-establishment']) !!}
    <div class="add-establish">
        <div class="container">
            <div class="card sr-card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10 col-md-11 add-label-establish">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-5">

                                        {!! Form::label('Type d’Établissement', 'Type d’Établissement') !!}<span class="invalid-error text-danger">*</span>
                                        {!! Form::select('type_of_establishment',['Crèche collective' => 'Crèche collective','Micro-crèche' => 'Micro-crèche','Crèche privée d’entreprise ou inter-entreprises' => 'Crèche privée d’entreprise ou inter-entreprises'] ,$establishment->type_of_establishment, [ 'id' => 'type_of_establishment', 'class' => 'cus-drop select2 form-add-establish']) !!}
                                        <span class="establishment-error text-danger"></span>

                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('A propre de notre structure', 'A propre de notre structure') !!}<span class="invalid-error text-danger">*</span>
                                        {!! Form::text('own_of_our_structure',$establishment->own_of_our_structure, ['class' => 'form-control inputicon2 form-add-establish','id'=>'own_of_our_structure']) !!}
                                        <span class="structure-error text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::label('Date d’ouverture', 'Date d’ouverture') !!}<span class="invalid-error text-danger">*</span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::date('opening_date',$establishment->opening_date, [ 'id' => 'opening_date', 'class' => 'form-control form-add-establish inputicon2 fn-family']) !!}
                                        <span class="opening-date-error text-danger"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    {!! Form::label('Effectif', 'Effectif') !!}<span class="invalid-error text-danger">*</span>
                                    {!! Form::select('effective',['1-10 personnes' => '1-10 personnes','11-20 personnes' => '11-20 personnes','21-30 personnes' => '21-30 personnes','31-40 personnes' => '31-40 personnes','41-50 personnes' => '41-50 personnes'],$establishment->effective, [ 'id' => 'effective','placeholder'=>'' ,'class' => 'cus-drop select2 form-add-establish']) !!}
                                    <span class="effective-error text-danger"></span>


                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ">
                                    {!! Form::label('Nombre de groupes et tranches d’âges', 'Nombre de groupes et tranches d’âges') !!}<span class="invalid-error text-danger">*</span>
                                    {!! Form::select('number_of_groups_and_age_groups',['1-10 ans' => '1-10 ans','11-20 ans' => '11-20 ans','21-30 ans' => '21-30 ans','31-40 ans' => '31-40 ans','41-50 ans' => '41-50 ans'],$establishment->number_of_groups_and_age_groups, [ 'id' => 'number_of_groups_and_age_groups','placeholder'=>'' ,'class' => 'cus-drop select2 form-add-establish']) !!}
                                    <span class="age-groups-error text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ">
                                    {!! Form::label("Capacité d'accueil", "Capacité d'accueil") !!}<span class="invalid-error text-danger">*</span>
                                    {!! Form::select('accommodation_capacity',['35' => '35'],$establishment->accommodation_capacity, [ 'id' => 'accommodation_capacity','class' => 'cus-drop select2 form-add-establish']) !!}
                                    <span class="capacity-error text-danger"></span>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group position-rel value-color">
                                    {!! Form::label("Superficie de l'établissement", "Superficie de l'établissement") !!}<span class="invalid-error text-danger">*</span>
                                    {!! Form::text('surface_area_of_the_establishment',$establishment->surface_area_of_the_establishment, ['class' => ' form-control form-add-establish inputicon2','id'=>'surface_area_of_the_establishment']) !!}

                                    <div class="m2-label"> {!! Form::label("m²", "m²") !!}</div>
                                    <span class="surface-area-error text-danger"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                {!! Form::label('Votre établissement possède t-il un jardin ?', 'Votre établissement possède t-il un jardin ?') !!}<span class="invalid-error text-danger">*</span>

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
                                        <span class="garden-error text-danger"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            {!! Form::label('Pédagogie appliquée', 'Pédagogie appliquée') !!}<span class="invalid-error text-danger"> *</span>
                            <div class="type-drops add-establish-drop maria-placeholder-select">
                                {!! Form::select('applied_pedagogy[]',['Maria Montessori' => 'Maria Montessori','Pédagogie Interactive' => 'Pédagogie Interactive','Pédagogie Faber et Mazlish' => 'Pédagogie Faber et Mazlish','Pickler Loczy' => 'Pickler Loczy','Pédagogie Reggio' => 'Pédagogie Reggio','Snoezelen'=>'Snoezelen','Parler Bambin'=>'Parler Bambin','Aucune en particulier'=>'Aucune en particulier','Autres'=>'Autres'],null, [ 'id' => 'applied_pedagogy','class' => 'select-multi','multiple'=>'multiple']) !!}
                                <span class="pedagogy-error text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group sr-pos">
                            <div class="upload-file-input">
                                {!! Form::label("Notre projet pédagogique", "Notre projet pédagogique") !!}<span class="invalid-error text-danger"> *</span>
                                <input id="uploadFile" value="" class="form-add-establish w-100 inputicon2" disabled>
                                <div class="fileUpload btn btn-primary attach-file">
                                    <span><i class="fa fa-paperclip mr-2"></i>Attacher un
                                        document</span>
                                    {!! Form::file('document[]', ['id' => 'document', 'name' => 'document[]', 'class' => 'upload', 'multiple' => true ],[]) !!}
                                </div>
                                <span class="document-error text-danger"></span>
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
                                                        plus d’informations</label><span class="text-danger">*</span>
                                                    <div class="preview-zone hidden">
                                                        <div class="box box-solid">
                                                            <div class="box-body"></div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="dropzone-wrapper">
                                                                    <div class="dropzone-desc">
                                                                        <img src="{{asset('frontend/images/profile-feather-upload.svg')}}" width="30px" class="mb-1">
                                                                   
                                                                        <p>Drag and drop here or<span style="color:#192842;font-family: 'Quicksand-Bold'">
                                                                                Browse</span> </p>
                                                                    </div>
                                                                    {!! Form::file('more_infomation[]', ['id' => 'more_infomation', 'name' => 'more_infomation[]', 'class' => 'dropzone','multiple' => true]) !!}
                                                                 
                                                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end mt-5">
                                <button class="btn btn-outline-cancel annuler-btns">Annuler</button>
                                <button class="btn btn-yellow">Mettre à jour</button>
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
@endsection
@section('script')
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


    function validation() {
        var temp = 0;

        var typeestablishment = $('#type_of_establishment').val();
        var structure = $('#own_of_our_structure').val();
        var openingdate = $('#opening_date').val();
        var effective = $('#effective').val();
        var agegroups = $('#number_of_groups_and_age_groups').val();
        var capacity = $('#accommodation_capacity').val();
        var surfacearea = $('#surface_area_of_the_establishment').val();
        var pedagogy = $('#applied_pedagogy').val();
        var number = /([0-9])/;

        if (typeestablishment == "") {
            $('.establishment-error').html("Please enter Type of establishment");
            temp++
        } else {
            $('.establishment-error').html("");
        }

        $('.structure-error').html('');
        if (structure == "") {
            $('.structure-error').html("Please enter Own of our structure");
            temp++
        } else {
            if (structure.match(number)) {
                $('.structure-error').html("Numbers not allowed");
                temp++
            }
        }

        if (openingdate == "") {
            $('.opening-date-error').html("Please enter Opening date");
            temp++
        } else {
            $('.opening-date-error').html("");
        }

        if (effective == "") {
            $('.effective-error').html("Please enter Effective");
            temp++
        } else {
            $('.effective-error').html("");
        }

        if (agegroups == "") {
            $('.age-groups-error').html("Please enter Number of groups and age groups");
            temp++
        } else {
            $('.age-groups-error').html("");
        }

        if (capacity == "") {
            $('.capacity-error').html("Please enter Accommodation capacity ");
            temp++
        } else {
            $('.capacity-error').html("");
        }

        $('.surface-area-error').html("");
        if (surfacearea == "") {
            $('.surface-area-error').html("Please enter Surface area of ​​the establishment");
            temp++
        } else {
            if (!surfacearea.match(number)) {
                $('.surface-area-error').html('Surface area of ​​the establishment must be a number');
                temp++
            }

        }

        if ($('input[name="garden"]:checked').length == 0) {
            $('.garden-error').html("Please select garden");
            temp++
        } else {
            $('.garden-error').html("");
        }

        if (pedagogy == "") {
            $('.pedagogy-error').html("Please enter Applied pedagogy");
            temp++
        } else {
            $('.pedagogy-error').html("");
        }


        $('.document-error').html('');
        var fuData = document.getElementById('document'); // CHOICE FILE (IMAGE) VILADITION 
        var FileUploadPath = fuData.value;
        if (FileUploadPath == '') {
            $('.document-error').html('Please enter a Image');
            temp++;
        } else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

            if (Extension == "png" || Extension == "jpeg" || Extension == "jpg" || Extension == "gif" || Extension == "svg") {
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {}
                    reader.readAsDataURL(fuData.files[0]);
                }
            } else {
                $('.document-error').html('File must Image!! Like:jpeg, png, jpg, gif, svg.');
                temp++
            }
        }

        if (temp == 0) {
            return true;
        } else {
            return false;
        }
    }
</script>


</body>

</html>