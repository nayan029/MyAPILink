@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')

<!-- <div id="after-header"></div> -->




<section class="back-f6 pt-5 pb-5">
<form method="post" enctype="multipart/form-data" action="{{route('update-candidate-profile')}}" id="update-profile">
                @csrf
    <div class="container">
        <div class="row">
       
            <div class="col-md-4">
                <div class="">
                    <div class="card sr-card">
                        <div class="card-body pb-4">
                            <div>
                                <div class="view_pos_candidiate">
                                    <div class="candidate-profile view_candidate">
                                        <img src="{{URL::to('/')}}/{{auth()->user()->profile_photo_path}}" class="view-img" alt="profile">
                                    </div>
                                    <div class="camera-inputs">
                                        <div class="candidate_input_camera">
                                            <img src="{{asset('frontend/images/imgs-svg/feather-camera.svg')}}" alt="camera">
                                        </div>
                                        <input type="file" name="profile_photo_path" class="input-file-opacity">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card sr-card mt-4 p-dark-tit">
                        <div class="card-body pb-4">
                            <div>
                                <div class="mb-4">
                                    <h5 class="dark-tit">A propos de moi <span class="invalid-error text-danger">*</span></h5>
                                    <div class="">
                                        <textarea name="about_me" class="mb-0 bg-f6 edit-textarea" cols="30" rows="5">{{auth()->guard('web')->user()->about_me}}</textarea>
                                    </div>
                                </div>

                                <div>
                                    <div class="sr-rel personinfo-form mb-4">
                                        <h5 class="dark-tit">Situation actuelle : <span class="invalid-error text-danger">*</span></h5> 
                                        <select required="" name="current_situation" class="edit-select form-control arrow-down profile-drop select2 arrow-change">
                                            <!-- <option value="" hidden=""></option> -->
                                            <option @if(auth()->guard('web')->user()->current_situation=="en poste") selected  @endif value="en poste">en poste</option>
                                            <option @if(auth()->guard('web')->user()->current_situation=="En recherche active") selected  @endif value="En recherche active">En recherche active</option>
                                            <option @if(auth()->guard('web')->user()->current_situation=="à l'écoute de nouvelles opportunités") selected  @endif value="à l'écoute de nouvelles opportunités">à l'écoute de nouvelles opportunités</option>
                                        </select>
                                        <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                    </div>
                                    @php $research=explode(",",auth()->guard('web')->user()->research); @endphp
                                    <div class="sr-rel personinfo-form mb-4">
                                        <h5 class="dark-tit">Recherche : <span class="invalid-error text-danger">*</span></h5>
                                        <div class="custom-edit-muti change-text">
                                            <select title="Basic example" name="research[]" multiple="multiple" class="select-multi">
                                                <option @if(in_array('CDI',$research)) selected @endif value="CDI">CDI</option>
                                                <option  @if(in_array('CDD',$research)) selected @endif value="CDD">CDD</option>
                                                <option  @if(in_array('Stages',$research)) selected @endif value="Stages">Stages</option>
                                                <option  @if(in_array('alternance',$research)) selected @endif value="alternance">alternance</option>
                                                <option  @if(in_array("missions en tant qu'indépendant",$research)) selected @endif value="missions en tant qu'indépendant">missions en tant qu'indépendant </option>
                                                <option  @if(in_array('remplaçements',$research)) selected @endif value="remplaçements">remplaçements </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sr-rel personinfo-form mb-3">
                                        <h5 class="dark-tit">Disponible : <span class="invalid-error text-danger">*</span></h5>
                                        <select required="" name="available_day" class="edit-select form-control arrow-down profile-drop select2 arrow-change">
                                            <!-- <option value="" hidden=""></option> -->
                                            <option @if(auth()->guard('web')->user()->available_day=="Dès aujourd’hui") selected @endif value="Dès aujourd’hui">dès le …</option>
                                            <option @if(auth()->guard('web')->user()->available_day=="Lorem ipsum") selected @endif value="Lorem ipsum">préavis de ..</option>
                                        </select>
                                        <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                    </div>

                                    <div class="box-edit">
                                            <div class="form-group">
                                                <input type="text" class="datepicker1 form-control bg-f6 inputicon2 edit-placeholder pd-date" placeholder="dès le"></div>
                                        </div>
                                    <!-- <div class="sr-rel personinfo-form mb-4">
                                        <select required="" name="available_time" class="form-control arrow-down profile-drop">
                                            <option @if(auth()->guard('web')->user()->available_time=="1 mois") selected @endif value="1 mois">1 mois</option>
                                            <option  @if(auth()->guard('web')->user()->available_time=="2 mois") selected @endif value="2 mois">2 mois</option>
                                            <option  @if(auth()->guard('web')->user()->available_time=="3 mois") selected @endif value="3 mois">3 mois</option>
                                        </select>
                                        <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                    </div> -->
                                    <!-- <div class="box-edit">
                                            <div class="form-group">
                                                <input class="form-control bg-f6 inputicon2 edit-placeholder" placeholder="Autre">
                                            </div>
                                        </div> -->
                                        <!-- <div class="sr-rel  mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="editprof3">
                                                <label class="custom-control-label login-cus-check edprof-checklabel" for="editprof3">à temps plein</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="editprof4">
                                                <label class="custom-control-label login-cus-check edprof-checklabel" for="editprof4">à temps partiel</label>
                                            </div>
                                        <select required="" class="form-control arrow-down profile-drop">
                                                <option value="">À temps plein</option>
                                                <option value="">Lorem ipsum</option>
                                            </select>
                                            <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg editprof-img">
                                        </div> -->
                                    @php $diplomas=explode(",",auth()->guard('web')->user()->diplomas); @endphp
                                    <div class="mb-4">
                                        <div class="sr-rel personinfo-form mb-3">
                                            <h5 class="dark-tit">Diplômes : <span class="invalid-error text-danger">*</span></h5>
                                            <div class="custom-edit-muti diplo-text">
                                                <select title="Basic example" name="diplomas[]" multiple="multiple" class="select-multi">
                                                    <option @if(in_array('Éducateur de jeunes enfants',$diplomas)) selected @endif value="Éducateur de jeunes enfants">Éducateur de jeunes enfants</option>
                                                    <option @if(in_array('Auxiliaire de puériculture',$diplomas)) selected @endif value="Auxiliaire de puériculture">Auxiliaire de puériculture</option>
                                                    <option @if(in_array('Diplôme d’État d’infirmière',$diplomas)) selected @endif value="Diplôme d’État d’infirmière">Diplôme d’État d’infirmière</option>
                                                    <option @if(in_array('Diplôme d’État de Puériculturee',$diplomas)) selected @endif value="Diplôme d’État de Puériculturee">Diplôme d’État de Puériculturee</option>
                                                    <option @if(in_array('CAP Petite enfance',$diplomas)) selected @endif value="CAP Petite enfance">CAP Petite enfance</option>
                                                    <option @if(in_array('CAP Accompagnant éducatif Petite enfance',$diplomas)) selected @endif value="CAP Accompagnant éducatif Petite enfance">CAP Accompagnant éducatif Petite enfance</option>
                                                    <option @if(in_array('Formation d’Assistante maternelle',$diplomas)) selected @endif value="Formation d’Assistante maternelle">Formation d’Assistante maternelle</option>
                                                    <option @if(in_array('BAFA',$diplomas)) selected @endif value="BAFA">BAFA</option>
                                                    <option @if(in_array('Autres',$diplomas)) selected @endif value="Autres">Autres</option>
                                                </select>
                                            </div>
                                            <!-- <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg editprof-img"> -->
                                        </div>
                                        <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>
                                    </div>


                                    <div>
                                        <div class="sr-rel personinfo-form mb-3">
                                            <h5 class="dark-tit">Ancienneté dans le métier : <span class="invalid-error text-danger">*</span></h5>
                                            <select required="" name="seniority" class="form-control arrow-down profile-drop">
                                                <option  @if(auth()->guard('web')->user()->seniority=="7 ans d’expériences") selected @endif value="7 ans d’expériences">7 ans d’expériences</option>
                                                <option  @if(auth()->guard('web')->user()->seniority=="Lorem ipsum") selected @endif value="Lorem ipsum">Lorem ipsum</option>
                                            </select>
                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                        </div>
                                        <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>
                                    </div>

                                    <div class="sr-rel personinfo-form mb-4">
                                        <h5 class="dark-tit">Tranche d’âge : <span class="invalid-error text-danger">*</span></h5>
                                        <select required="" name="age_range" class="form-control arrow-down profile-drop">
                                            <!-- <option value="" hidden=""></option> -->
                                            <option @if(auth()->guard('web')->user()->seniority=="0-1 an") selected @endif value="0-1 an">0-1 an</option>
                                            <option @if(auth()->guard('web')->user()->seniority=="Lorem ipsum") selected @endif value="Lorem ipsum">Lorem ipsum</option>
                                        </select>
                                        <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg editprof-img">
                                    </div>

                                    <div class="form-group  mb-4 personinfo-form sr-rel">
                                        <h5 class="dark-tit">Mobilité : <span class="invalid-error text-danger">*</span></h5>
                                        <input type="text" name="mobility" value="{{auth()->guard('web')->user()->mobility}}" class=" form-control  sr-rel inputicon-2" placeholder="Montpellier">
                                        <a href=""><img src="images/imgs-svg/edit-icon.svg" alt="" class="arrw-downimg bt-16"></a>
                                    </div>
                                    @php $permit_vehicle=explode(",",auth()->guard('web')->user()->permit_vehicle); @endphp
                                    <div class="pb-5">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="permit_vehicle[]" @if(in_array('Permis',$permit_vehicle)) checked @endif  value="Permis" class="custom-control-input" id="editprof1">
                                            <label class="custom-control-label login-cus-check edprof-checklabel" for="editprof1">Permis</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="permit_vehicle[]" @if(in_array('Véhicule',$permit_vehicle)) checked @endif value="Véhicule" class="custom-control-input" id="editprof2">
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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="21.963" height="24.333" viewBox="0 0 21.963 24.333">
                                        <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(1.5 1.5)">
                                            <path id="Path_3483" class="svg-stroke" data-name="Path 3483" d="M24.963,29.611v-2.37A4.741,4.741,0,0,0,20.222,22.5H10.741A4.741,4.741,0,0,0,6,27.241v2.37" transform="translate(-6 -8.278)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                            </path>
                                            <path id="Path_3484" class="svg-stroke" data-name="Path 3484" d="M21.482,9.241A4.741,4.741,0,1,1,16.741,4.5,4.741,4.741,0,0,1,21.482,9.241Z" transform="translate(-7.259 -4.5)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
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
                                        <!-- <div class="custom-col2 col-md-6">
                                                    <div class="form-group box-shanone mb-4">
                                                        <label>Civilité</label>
                                                        <select name="civility" class="form-control arrow-change arrow-down profile-drop select2">
                                                            <option value="Mme">Mme</option>
                                                            <option value="Mr">Mr</option>
                                                        </select>
                                                        <img src="images/imgs-svg/down-arrow.svg" alt="" class="arrw-downimg civi-img">
                                                    </div>
                                                </div> -->
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Prénom <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="first_name" value="{{auth()->guard('web')->user()->first_name}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Nom de famille <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="last_name" value="{{auth()->guard('web')->user()->last_name}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Genre <span class="invalid-error text-danger">*</span></label>
                                                    <!-- <input type="text" name="gander" value="{{auth()->guard('web')->user()->gander}}" class="form-control bg-f6 inputicon2 edit-placeholder"> -->
                                                    <select required="" name="gander" class="form-control arrow-down profile-drop">
                                                        <option @if(auth()->guard('web')->user()->gander=="Male") selected @endif value="Male">Male</option>
                                                        <option @if(auth()->guard('web')->user()->gander=="Female") selected @endif value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Date de naissance <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="dob" value="{{auth()->guard('web')->user()->dob}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>E-mail <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="email" value="{{auth()->guard('web')->user()->email}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Numéro de téléphone <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="phone" value="{{auth()->guard('web')->user()->phone}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Ville <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="city" value="{{auth()->guard('web')->user()->city}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Region <span class="invalid-error text-danger">*</span></label>
                                                    <input type="text" name="region" value="{{auth()->guard('web')->user()->region}}" class="form-control bg-f6 inputicon2 edit-placeholder">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="pt-5">
                                            <h5 class="ml-2 dark-tit">Expériences <span class="invalid-error text-danger">*</span></h5>
                                            <div class="row mx-0 mt-3">
                                                    <div class="custom-col1 col-md-3">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <input type="text" name="start_date" class="datepicker1 form-control  form-add-establish fn-family pd-date" placeholder="De">
                                                        </div>
                                                    </div>
                                                    <div class="custom-col1 col-md-3">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <input type="text"  name="end_date" class="datepicker1 form-control  form-add-establish fn-family pd-date" placeholder="À">
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
                                                                <input type="text" name="" class="form-control  form-add-establish fn-family pd-date" value="poste occupé">
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn plus  "><img src="{{asset('frontend/images/imgs-svg/plus.svg')}}" alt="" class="pls-img" style="background:#75BFD3;"></a>
                                                        </div>

                                                    </div>

                                                    <div class="custom-col2 col-md-6">
                                                        <div class="sr-rel personinfo-form mb-4">
                                                            <select required="" class="form-control arrow-change arrow-down profile-drop select2">
                                                                <!-- <option value="" hidden=""></option> -->
                                                                <option value="">CDI</option>
                                                                <option value="">CDD</option>
                                                                <option value="">Stage</option>
                                                                <option value="">Alternance</option>
                                                                <option value="">Freelance / Indépendant</option>
                                                                <option value="">Remplaçements</option>
                                                            </select>
                                                            <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                        @php $pedagogy=explode(",",auth()->guard('web')->user()->pedagogy);    @endphp
                                        <div class="pt-5  personinfo-form">  
                                                <h5 class="ml-2 dark-tit">Pédagogie appliquée<span class="invalid-error text-danger">*</span></h5>
                                                <div class="custom-edit-muti maria-text">
                                                    <select  name="pedagogy[]"  title="Basic example" multiple="multiple" class="select-multi">
                                                            <option value="Maria Montessori"@if(in_array('Maria Montessori',$pedagogy)) selected @endif>Maria Montessori</option>
                                                            <option value="Pédagogie Interactive" @if(in_array("Pédagogie Interactive",$pedagogy)) selected @endif>Pédagogie Interactive</option>
                                                            <option value="Pédagogie Faber et Mazlish" @if(in_array("Pédagogie Faber et Mazlish",$pedagogy)) selected @endif>Pédagogie Faber et Mazlish</option>
                                                            <option value="Pickler Loczy" @if(in_array("Pickler Loczy",$pedagogy)) selected @endif >Pickler Loczy</option>
                                                            <option value="Pédagogie Reggio" @if(in_array("Pédagogie Reggio",$pedagogy)) selected @endif>Pédagogie Reggio</option>
                                                            <option value="Snoezelen" @if(in_array("Snoezelen",$pedagogy)) selected @endif >Snoezelen</option>
                                                            <option value="Parler Bambin" @if(in_array("Parler Bambin",$pedagogy)) selected @endif>Parler Bambin</option>
                                                            <option value="Steiner-Waldorf" @if(in_array("Steiner-Waldorf",$pedagogy)) selected @endif>Pédagogie Steiner-Waldorf</option>
                                                            <option value="Autres" @if(in_array("Autres",$pedagogy)) selected @endif>Autres</option>
                                                            <option value="Aucune en particulier" @if(in_array("Aucune en particulier",$pedagogy)) selected @endif>Aucune en particulier</option>
                                                       </select>


                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="autres" class="form-control bg-f6 inputicon2 edit-placeholder mt-3" placeholder="Autres">
                                                </div>
                                            </div>

                                        <div class="pt-5">
                                            <div class="sr-rel personinfo-form mb-4">
                                                <h5 class="dark-tit">Mes qualités <span class="invalid-error text-danger">*</span></h5>
                                                <div class="custom-edit-muti bienveillance-text">
                                                    @php $qualities=explode(",",auth()->guard('web')->user()->qualities); @endphp
                                                    <select title="Basic example" multiple="multiple" name="qualities[]" class="select-multi">
                                                        <option @if(in_array("Bienveillance",$qualities)) selected @endif value="Bienveillance">Bienveillance</option>
                                                        <option @if(in_array("Optimisme",$qualities)) selected @endif value="Optimisme">Optimisme</option>
                                                        <option @if(in_array("Adaptabilité",$qualities)) selected @endif value="Adaptabilité">Adaptabilité</option>
                                                        <option @if(in_array("Motivation",$qualities)) selected @endif value="Motivation">Motivation</option>
                                                        <option @if(in_array("Curiosité",$qualities)) selected @endif value="Curiosité">Curiosité</option>
                                                        <option @if(in_array("Bon relationnel",$qualities)) selected @endif value="Bon relationnel">Bon relationnel</option>
                                                        <option @if(in_array("Dynamique",$qualities)) selected @endif value="Dynamique">Dynamique</option>
                                                        <option @if(in_array("Sériosité",$qualities)) selected @endif value="Sériosité">Sériosité</option>
                                                        <option @if(in_array("Patience",$qualities)) selected @endif value="Patience">Patience</option>
                                                        <option @if(in_array("Empathie",$qualities)) selected @endif value="Empathie">Empathie</option>
                                                        <option @if(in_array("Autonomie",$qualities)) selected @endif value="Autonomie">Autonomie</option>
                                                        <option @if(in_array("Organisation",$qualities)) selected @endif value="Organisation">Organisation</option>
                                                        <option @if(in_array("Ambition",$qualities)) selected @endif value="Ambition">Ambition</option>
                                                        <option @if(in_array("Passion",$qualities)) selected @endif value="Passion">Passion</option>
                                                        <option @if(in_array("Sens du service",$qualities)) selected @endif value="Sens du service">Sens du service</option>
                                                        <option @if(in_array("Goût du challenge",$qualities)) selected @endif value="Goût du challenge">Goût du challenge</option>
                                                        <option @if(in_array("Autres",$qualities)) selected @endif value="Autres">Autres</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                        <input type="text" name="autres1" class="form-control bg-f6 inputicon2 edit-placeholder mt-3" placeholder="Autres">
                                                    </div>
                                            <div class="sr-rel personinfo-form mb-4 pt-3">
                                                <h5 class="dark-tit">Mes valeurs <span class="invalid-error text-danger">*</span></h5>
                                                <select required="" name="values" class="form-control arrow-change arrow-down profile-drop select2" >
                                                    <!-- <option value="" hidden=""></option> -->
                                                    <option value="Authenticité" @if(auth()->guard('web')->user()->values=="Authenticité") selected @endif>Authenticité</option>
                                                    <option value="Autonomie" @if(auth()->guard('web')->user()->values=="Autonomie") selected @endif>Autonomie</option>
                                                    <option value="Réussite" @if(auth()->guard('web')->user()->values=="Réussite") selected @endif>Réussite</option>
                                                    <option value="Créativité" @if(auth()->guard('web')->user()->values=="Créativité") selected @endif>Créativité</option>
                                                    <option value="Curiosité" @if(auth()->guard('web')->user()->values=="Curiosité") selected @endif>Curiosité</option>
                                                    <option value="Détermination" @if(auth()->guard('web')->user()->values=="Détermination") selected @endif>Détermination</option>
                                                    <option value="Justice" @if(auth()->guard('web')->user()->values=="Justice") selected @endif>Justice</option>
                                                    <option value="Honnêteté" @if(auth()->guard('web')->user()->values=="Honnêteté") selected @endif>Honnêteté</option>
                                                    <option value="Amour" @if(auth()->guard('web')->user()->values=="Amour") selected @endif>Amour</option>
                                                    <option value="Paix" @if(auth()->guard('web')->user()->values=="Paix") selected @endif>Paix</option>
                                                    <option value="Responsabilité" @if(auth()->guard('web')->user()->values=="Responsabilité") selected @endif>Responsabilité</option>
                                                    <option value="Sécurité" @if(auth()->guard('web')->user()->values=="Sécurité") selected @endif>Sécurité</option>
                                                    <option value="Respect" @if(auth()->guard('web')->user()->values=="Respect") selected @endif>Respect</option>
                                                    <option value="Sagesse" @if(auth()->guard('web')->user()->values=="Sagesse") selected @endif>Sagesse</option>
                                                    <option value="Fiabilité" @if(auth()->guard('web')->user()->values=="Fiabilité") selected @endif>Fiabilité</option>
                                                    <option value="Autres" @if(auth()->guard('web')->user()->values=="Autres") selected @endif>Autres</option>
                                                    
                                                </select>
                                                <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                            </div>
                                            <div class="sr-rel personinfo-form mb-4 pt-3">
                                                <h5 class="dark-tit">Langues parlées couramment <span class="invalid-error text-danger">*</span></h5>
                                                <select required="" name="languages_spoken" class="edit-select form-control arrow-down profile-drop select2 arrow-change">
                                                    <!-- <option value="" hidden=""></option> -->
                                                    <option value="Français" @if(auth()->guard('web')->user()->languages_spoken=="Français") selected @endif >Français</option>
                                                    <option value="Anglais" @if(auth()->guard('web')->user()->languages_spoken=="Anglais") selected @endif >Anglais</option>
                                                    <option value="Espagnol" @if(auth()->guard('web')->user()->languages_spoken=="Espagnol") selected @endif >Espagnol</option>
                                                    <option value="Allemand" @if(auth()->guard('web')->user()->languages_spoken=="Allemand") selected @endif >Allemand</option>
                                                    <option value="Italien" @if(auth()->guard('web')->user()->languages_spoken=="Italien") selected @endif >Italien</option>
                                                    <option value="Portugais" @if(auth()->guard('web')->user()->languages_spoken=="Portugais") selected @endif >Portugais</option>
                                                    <option value="Russe" @if(auth()->guard('web')->user()->languages_spoken=="Russe") selected @endif >Russe</option>
                                                    <option value="Arabe" @if(auth()->guard('web')->user()->languages_spoken=="Arabe") selected @endif >Arabe</option>
                                                    <option value="Chinois" @if(auth()->guard('web')->user()->languages_spoken=="Chinois") selected @endif >Chinois</option>
                                                    <option value="Néerlandais" @if(auth()->guard('web')->user()->languages_spoken=="Néerlandais") selected @endif >Néerlandais</option>
                                                    <option value="Autres" @if(auth()->guard('web')->user()->languages_spoken=="Autres") selected @endif >Autres</option>
                                                    
                                                </select>
                                                <img src="{{asset('frontend/images/imgs-svg/down-arrow.svg')}}" alt="" class="arrw-downimg editprof-img">
                                            </div>
                                            <div class="form-group">
                                                        <input type="text" name="Autres3" class="form-control bg-f6 inputicon2 edit-placeholder mt-0" placeholder="Autres">
                                                    </div>


                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right mt-4">
                                        <button type="button" class="btn btn-outline-cancel">Annuler</button>
                                        <button type="submit" class="btn btn-save btn-Sauvegarder">Sauvegarder</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </form>
</section>

<div id="footer"></div>




</div>

@endsection
@section('script')
<script type="text/javascript ">
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
    // -------------
    $(document).ready(function() {
        $(".change-text .multiselect").html("CDI,CDD");
        $(".diplo-text .multiselect").html("CAP AEPE");
        $(".bienveillance-text .multiselect").html("Bienveillance");

    });
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
</script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#update-profile') !!}

@endsection

</body>

</html>