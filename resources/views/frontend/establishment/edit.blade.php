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
                                         
                                        </div>


                                        <div class="form-group">
                                            {!! Form::label('A propre de notre structure', 'A propre de notre structure') !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::text('own_of_our_structure',$establishment->own_of_our_structure, ['class' => 'form-control inputicon2 form-add-establish','id'=>'own_of_our_structure']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::label('Date d’ouverture', 'Date d’ouverture') !!}<span class="invalid-error text-danger">*</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('opening_date',$establishment->opening_date, [ 'id' => 'opening_date', 'class' => 'datepicker1 form-control  form-add-establish inputicon2 fn-family']) !!}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::select('year',['Année' => 'Année'], $establishment->year, [ 'id' => 'year', 'class' => 'cus-drop select2 form-add-establish']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('Direction', 'Direction') !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::text('direction',$establishment->direction, ['class' => 'form-control inputicon2','id'=>'direction']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {!! Form::label('Effectif', 'Effectif') !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::select('effective',['1-10 personnes' => '1-10 personnes','11-20 personnes' => '11-20 personnes','21-30 personnes' => '21-30 personnes','31-40 personnes' => '31-40 personnes','41-50 personnes' => '41-50 personnes'],$establishment->effective, [ 'id' => 'effective','placeholder'=>'' ,'class' => 'cus-drop select2 form-add-establish']) !!}


                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            {!! Form::label('Nombre de groupes et tranches d’âges', 'Nombre de groupes et tranches d’âges') !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::select('number_of_groups_and_age_groups',['1-10 ans' => '1-10 ans','11-20 ans' => '11-20 ans','21-30 ans' => '21-30 ans','31-40 ans' => '31-40 ans','41-50 ans' => '41-50 ans'],$establishment->number_of_groups_and_age_groups, [ 'id' => 'number_of_groups_and_age_groups','placeholder'=>'' ,'class' => 'cus-drop select2 form-add-establish']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            {!! Form::label("Capacité d'accueil", "Capacité d'accueil") !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::select('accommodation_capacity',['35' => '35'],$establishment->accommodation_capacity, [ 'id' => 'accommodation_capacity','class' => 'cus-drop select2 form-add-establish']) !!}

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group position-rel value-color">
                                            {!! Form::label("Superficie de l'établissement", "Superficie de l'établissement") !!}<span class="invalid-error text-danger">*</span>
                                            {!! Form::text('surface_area_of_the_establishment',$establishment->surface_area_of_the_establishment, ['class' => ' form-control form-add-establish inputicon2','id'=>'surface_area_of_the_establishment']) !!}

                                            <div class="m2-label"> {!! Form::label("m²", "m²") !!}</div>
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
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    {!! Form::label('Pédagogie appliquée', 'Pédagogie appliquée') !!}<span class="invalid-error text-danger">*</span>
                                    @php $applied_pedagogy=explode(",",$establishment->applied_pedagogy); @endphp
                                    <div>
                                        <div class="row check-box-sec check-form mb-4 m-0">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Maria Montessori',in_array("Maria Montessori",$applied_pedagogy),['class' => 'custom-control-input','id' =>'applied_pedagogy']) !!}
                                                    {!! Form::label('applied_pedagogy', 'Maria Montessori', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Pédagogie',in_array("Pédagogie",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Pédagogie']) !!}
                                                    {!! Form::label('Pédagogie', 'Pédagogie Faber et Mazlish', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Pédagogie Reggio',in_array("Pédagogie Reggio",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Reggio']) !!}
                                                    {!! Form::label('Reggio', 'Pédagogie Reggio', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Parler Bambin',in_array("Parler Bambin",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Parler']) !!}
                                                    {!! Form::label('Parler', 'Parler Bambin', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Autres',in_array("Autres",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Autres']) !!}
                                                    {!! Form::label('Autres', 'Autres', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check">
                                                   
                                                    {!! Form::checkbox('applied_pedagogy[]','Pédagogie Interactive',in_array("Pédagogie Interactive",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Interactive']) !!}
                                                    {!! Form::label('Interactive', 'Pédagogie Interactive', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    {!! Form::checkbox('applied_pedagogy[]','Pickler Loczy',in_array("Pickler Loczy",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Pickler']) !!}
                                                    {!! Form::label('Pickler', 'Pickler Loczy', ['class' => 'custom-control-label pro-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                 
                                                    {!! Form::checkbox('applied_pedagogy[]','Snoezelen',in_array("Snoezelen",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Snoezelen']) !!}
                                                    {!! Form::label('Snoezelen', 'Snoezelen', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
            
                                                    {!! Form::checkbox('applied_pedagogy[]','Pédagogie Steiner',in_array("Pédagogie Steiner",$applied_pedagogy),['class' => 'custom-control-input','id' =>'Steiner']) !!}
                                                    {!! Form::label('Steiner', 'Pédagogie Steiner', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                  
                                                        {!! Form::checkbox('applied_pedagogy[]','Aucune en particulier',in_array("Aucune en particulier",$applied_pedagogy),['class' => 'custom-control-input','id' =>'particulier']) !!}
                                                    {!! Form::label('particulier', 'Aucune en particulier', ['class' => 'custom-control-label pro-check']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {!! Form::label("Nos valeurs", "Nos valeurs") !!}<span class="invalid-error text-danger">*</span>
                                                    {!! Form::textarea('our_values',$establishment->our_values, ['size' => '30x4', 'id' => 'our_values', 'name' => 'our_values', 'class' => 'form-control textarea-form inputicon2']) !!}
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group sr-pos">
                                    <div class="upload-file-input">
                                        {!! Form::label("Notre projet pédagogique", "Notre projet pédagogique") !!}<span class="text-danger">*</span>

                                        <input id="uploadFile" value="" class="form-add-establish w-100 inputicon2" disabled>
                                        <div class="fileUpload btn btn-primary attach-file">
                                            <span><i class="fa fa-paperclip mr-2"></i>Attacher un
                                                document</span>
                                                
                                            {!! Form::file('document[]', ['id' => 'document', 'name' => 'document[]', 'class' => 'upload','multiple' => true]) !!}
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
                                        <button  class="btn btn-yellow">Mettre à jour</button>
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
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#update-establishment') !!}
@endsection
</body>
</html>