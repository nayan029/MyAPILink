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
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">



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
    <section class="back-f6 pb-5">
        <div class="container">
            <div class="publier-title">
                <a href="job-listing.html" class="dark-text">
                    <h1 class="publish-title">Publier une nouvelle offre d’emploi</h1>
                </a>
            </div>
            <div class="card sr-card">
                <div class="card-body">

                    {!! Form::open(['method' => 'POST', 'route' => ['publish-job-offer.store'], 'files' => true,'id'=>'job-add']) !!}

                    <div class="row d-flex justify-content-center ">
                        <div class="col-xl-10 col-lg-10 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="publish-sec">
                                        <div class="form-group  mb-4">
                                            {!! Form::label('Intitulé du poste', 'Intitulé du poste',['class'=>'publish-labeldark mt-0']) !!}
                                            {!! Form::text('title', old('title'), ['class' => 'form-control inputicon2 form-publish','id'=>'title']) !!}
                                        </div>

                                        <h5 class="publish-labeldark">Lieu du poste</h5>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Adresse', 'Adresse',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::text('address', old('address'), ['class' => 'form-control inputicon2 form-publish','id'=>'address']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Code postale', 'Code postale',['class'=>'publish-smalllabel']) !!}
                                                    {!! Form::text('zipcode', old('zipcode'), ['class' => 'form-control inputicon2 form-publish', 'placeholder' => '04300','id'=>'zipcode']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('Ville', 'Ville',['class'=>'publish-smalllabel']) !!}
                                                    {!! Form::select('city', ['Micro-crèche' => 'Micro-crèche','Crèche privée d’entreprise ou
                                                    inter-entreprises'=>'Crèche privée d’entreprise ou
                                                    inter-entreprises'],'null', ['class' => 'cus-drop select2 form-publish','style'=>'width:100%','id' => 'city']) !!}

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label("Pays", "Pays",['class'=>'publish-smalllabel']) !!}
                                                    {!! Form::select('country',['Micro-crèche' => 'Micro-crèche','Crèche privée d’entreprise ou
                                                    inter-entreprises'=>'Crèche privée d’entreprise ou
                                                    inter-entreprises'],null, ['class' => 'cus-drop select2 form-publish','style'=>'100%','id' => 'country']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4 ">
                                                    {!! Form::label("Type de contrat proposé", "Type de contrat proposé",['class'=>'publish-labeldark']) !!}
                                                    {!! Form::select('type_of_contract',['CDI' => 'CDI','CDD'=>'CDD','Stage'=>'Stage','Alternance'=>'Alternance','Freelance / Indépendant'=>'Freelance / Indépendant','remplaçements'=>'remplaçements'],null, [ 'id' => 'type_of_contract','class' => 'cus-drop select2 form-publish','style'=>'100%']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group  mb-4 mt-4">

                                                    {!! Form::label('Durée du contrat', 'Durée du contrat',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::text('contract_length', old('address'), ['class' => 'form-control inputicon2 form-publish','id'=>'contract_length']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pb-2">
                                                <h5 class="publish-labeldark">Type d'emploi</h5>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    {!! Form::checkbox('type_of_employement','Temps plein',false,['class' => 'custom-control-input','id' =>'Temps plein']) !!}
                                                    {!! Form::label('Temps plein', 'Temps plein',['class'=>'custom-control-label pro-check publish-check']) !!}

                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">

                                                    {!! Form::checkbox('type_of_employement','Temps partiel',false,['class' => 'custom-control-input','id' =>'Temps partiel']) !!}
                                                    {!! Form::label('Temps partiel', 'Temps partiel',['class'=>'custom-control-label pro-check publish-check']) !!}
                                                </div>

                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-group  mb-4">
                                                    {!! Form::label('Date de début du
                                                    contrat', 'Date de début du
                                                    contrat',['class'=>'publish-labeldark']) !!}

                                                    {!! Form::date('contract_start_date', old('contract_start_date'), ['class' => 'form-control inputicon2 form-publish','id'=>'contract_start_date','placeholder'=>'01/11/2021']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Salaire brut minimum', 'Salaire brut minimum',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::number('min_salary', old('min_salary'), ['class' => 'num-input form-control inputicon2 form-publish','id'=>'min_salary']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    {!! Form::label('Salaire brut maximum', 'Salaire brut maximum',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::number('max_salary', old('max_salary'), ['class' => 'num-input form-control inputicon2 form-publish','id'=>'max_salary']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Expérience Minimum', 'Expérience Minimum',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::text('min_experience', old('min_salary'), ['class' => 'form-control inputicon2 form-publish','id'=>'max_salary','placeholder'=>'2 ans']) !!}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">

                                                {!! Form::label('Date limite de reception des
                                                candidatures', 'Date limite de reception des
                                                candidatures',['class'=>'publish-labeldark']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    {!! Form::text('deadline_of_applications', old('min_salary'), ['class' => 'datepicker1 form-control inputicon2 form-publish','id'=>'deadline_of_applications']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check ">

                                                    {!! Form::checkbox('add_deadline','Je ne souhaite pas ajouter de date limite
                                                    de
                                                    candidature',false,['class' => 'custom-control-input','id' =>'checkone']) !!}
                                                    {!! Form::label('checkone','Je ne souhaite pas ajouter de date limite
                                                    de
                                                    candidature',['class'=>'custom-control-label pro-check publish-check']) !!}

                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                        <input type="checkbox" name="contract_through[]" value="email" class="custom-control-input" id="check1">
                                                        <label class="custom-control-label pro-check publish-check" for="check1">J'autorise les candidats à me contacter par
                                                            mail au sujet de leur candidature</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input type="checkbox" name="contract_through[]" value="phone" class="custom-control-input " id="check2">
                                                        <label class="custom-control-label pro-check publish-check" for="check2">J'autorise les candidats à me contacter par
                                                            téléphone au sujet de leur candidature</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input type="checkbox" name="contract_through[]" value="apilink" class="custom-control-input " id="check3">
                                                        <label class="custom-control-label pro-check publish-check" for="check3">Je souhaite recevoir les candidatures
                                                            uniquement via Apilink</label>
                                                    <!-- {!! Form::label('check1','Jautorise les candidats à me contacter par
                                                    mail au sujet de leur candidature',['class'=>'custom-control-label pro-check publish-check']) !!}

                                                    {!! Form::checkbox('contract_through[]','email',null, ['class' => 'custom-control-input','id'=>'check1']) !!} -->

                                                <!-- </div>
                                                <div class="custom-control custom-checkbox profile-check ">

                                                    {!! Form::label('check2', 'Jautorise les candidats à me contacter par
                                                    téléphone au sujet de leur candidature',['class' => 'custom-control-label pro-check publish-check']) !!}

                                                    {!! Form::checkbox('contract_through[]','phone',null, ['class' => 'custom-control-input','id' => 'check2']) !!}
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check ">

                                                    {!! Form::label('check3','Je souhaite recevoir les candidatures
                                                    uniquement via Apilink',['class'=>'custom-control-label pro-check publish-check']) !!}

                                                    {!! Form::checkbox('contract_through[]','apilink',null, ['class' => 'custom-control-input','id'=>'check3']) !!}
                                                </div> -->

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    {!! Form::label('Description de
                                                    lemploi', 'Description de
                                                    lemploi',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::textarea('job_desc', old('job_desc'), ['class' => 'form-control textarea-form inputicon2','id'=>'job_desc','cols'=>'30','rows'=>'6']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Mission de l’emploi', 'Mission de l’emploi',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::textarea('employment_mission', old('employment_mission'), ['class' => 'form-control textarea-form inputicon2','id'=>'employment_mission','cols'=>'30','rows'=>'6']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">

                                                    {!! Form::label('Ce que vous recherchez', 'Ce que vous recherchez',['class'=>'publish-smalllabel']) !!}

                                                    {!! Form::textarea('looking_for', old('looking_for'), ['class' => 'form-control textarea-form inputicon2','id'=>'looking_for','cols'=>'30','rows'=>'6']) !!}
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end mt-5">
                                            <button class="btn btn-outline-cancel annuler-btns publish-btns">Annuler</button>
                                            <button type="submit" href="web-1920.html" class="btn btn-yellow publish-btns">Sauvegarder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
    </section>


    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-timepicker')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-colorpicker.min')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
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
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".datepicker1").datepicker({
                format: 'dd-M-yyyy'
            });
            // $('.time1').timepicker({
            //     defaultTime: null,
            //     timeFormat: "HH:mm",
            //     showMeridian: false,
            // });
        });
    </script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! $validator->selector('#job-add') !!}
</body>

</html>