@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection

@section('content')

<section>
    <div class="atext-pos pt-90px">
        <img src="{{asset('frontend/images/profile-background.png')}}" alt="profile page background image" class="w-100 prof-resimg">
        <a href="{{URL::to('/manager-profile')}}" class="back link_a pos-img-link">
            <span><i class="fa fa-angle-left mr-2"></i></span>breadcrumb
        </a>
    </div>
    <div class="container">
        <div class="row profile-top jus-res">
            <div class="col-lg-3 col-md-4 col-9">

                <div class="profile-img" id="profile-id">
                    <img src="{{asset('frontend/images/project/profile-accounts.png')}}" alt="profile image">
                </div>
                <div class="profile-img" id="profile-id2" style="display: none;">
                    <img src="{{asset('frontend/images/profile.png')}}" alt="profile image">
                </div>
            </div>
            <div class="col-md-9">
                <div class="full-divmain" id="view-account1">
                    <div class="mb-3 mt-5 profile">
                        <h4 class="profile-name">{{auth()->guard('web')->user()->organization}}</h4>
                        <p class="mb-0">{{auth()->guard('web')->user()->address}}</p>
                        <p class="">
                            @if(auth()->guard('web')->user()->represent=="municipality")Une municipalité @endif
                            @if(auth()->guard('web')->user()->represent=="private_structure")Une structure privée @endif
                            @if(auth()->guard('web')->user()->represent=="associative_structure")Une structure associative @endif
                            @if(auth()->guard('web')->user()->represent=="other") Autre @endif
                        </p>
                    </div>
                </div>
                <div class="full-divmain" id="view-account2" style="display: none;">
                    <div class="mb-3 mt-5 profile">
                        <h4 class="profile-name">{{auth()->guard('web')->user()->organization}}</h4>
                        <p class="mb-0">{{auth()->guard('web')->user()->address}}</p>
                        <p class="">
                            @if(auth()->guard('web')->user()->represent=="municipality")Une municipalité @endif
                            @if(auth()->guard('web')->user()->represent=="private_structure")Une structure privée @endif
                            @if(auth()->guard('web')->user()->represent=="associative_structure")Une structure associative @endif
                            @if(auth()->guard('web')->user()->represent=="other") Autre @endif
                        </p>
                    </div>
                    <div>
                        <a href="find-candidate.html" class="btn-recruit btn">RECRUTER</a>
                    </div>
                </div>
                <div class="full-divmain" id="view-account3" style="display: none;">
                    <div class="mb-3 mt-5 profile">
                        <h4 class="profile-name">Crèche XXXXX</h4>
                        <p class="mb-0">Type de structure : garderie</p>
                        <p class="">Municipalisé</p>
                    </div>
                    <div>
                        <a href="find-candidate.html" class="btn-recruit btn">RECRUTER</a>
                    </div>
                </div>
                <div class="full-divmain" id="view-account4" style="display: none;">
                    <div class="mb-3 mt-5 profile">
                        <h4 class="profile-name">Crèche XXXXX</h4>
                        <p class="mb-0">Type de structure : garderie</p>
                        <p class="">Municipalisé</p>
                    </div>
                    <div>
                        <a href="find-candidate.html" class="btn-recruit btn">RECRUTER</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-5 paris-width pr-0">
                        <div class="form-group custom-drop-paris mb-3">
                            <img src="{{asset('frontend/images/home.svg')}}" class="drop-icon">
                            <div class="applicants-drop bg-dropdown">
                                <!-- <select class="form-control input-drop bg-transparent">
                                        <option value=""></option>
                                    </select> -->
                                <input type="text" class="form-control input-drop bg-transparent" readonly value="{{auth()->guard('web')->user()->city}}">
                            </div>
                        </div>
                        <div class="form-group custom-drop-paris mb-3">
                            <div class="pos-icons">
                                <img src="{{asset('frontend/images/group100.svg')}}" class="house-drop-icon">
                            </div>
                            <div class="applicants-drop bg-dropdown">
                                <!-- <select class="form-control input-drop bg-transparent">
                                        <option value="">Île de France</option>
                                    </select> -->
                                <input type="text" class="form-control input-drop bg-transparent" readonly value="Île de France">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 progress-center">
                        <div class="progress-main">
                            <span>Votre profil rempli</span>
                            <div class="profile-progress">
                                <div class="progress cust-progress">
                                    <div class="progress-bar" style="width:50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="prof-head2">
        <div class="container">
            <div class="prof-head2-inner">
                <div>
                    <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Notre institution</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-educational" data-toggle="pill" href="#educational" role="tab" aria-controls="educational" aria-selected="false">Notre projet
                                pédagogique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-job-offers" data-toggle="pill" href="#job-offers" role="tab" aria-controls="job-offers" aria-selected="false">Nos offres d’emploi</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="tab-content sr-tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <section class="prof-backsec">
                <div class="container">
                    <div class="card sr-card">
                        <div class="row">
                            <div class="col-md-4 cust-col4">
                                <div class="card sr-card min-card-app">
                                    <div class="card-body">
                                        <div>
                                            <div class="account-manager">
                                                <h5>Profil du gestionnaire<br>de compte :</h5>
                                            </div>
                                            <div class="mt-4">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group ">
                                                                <!-- <select class="from-control view-form-select">
                                                                        <option selected disabled>Civilité</option>
                                                                        <option>Mme </option>
                                                                        <option>Mr</option>
                                                                    </select> -->
                                                                <input class="form-control view-form" readonly value="{{auth()->guard('web')->user()->civility}}" type="text" placeholder="Civilité">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" readonly value="{{auth()->guard('web')->user()->last_name}}" type="text" placeholder="Nom">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" readonly value="{{auth()->guard('web')->user()->first_name}}" type="text" placeholder="Prénom">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" readonly value="{{auth()->guard('web')->user()->email}}" type="text" placeholder="Mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="pt-5">
                                            <div class="account-manager">
                                                <h5>Rôle du gestionnaire <br>de compte :</h5>
                                            </div>
                                            <div class="mt-4">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" readonly value="{{auth()->guard('web')->user()->roles}}" placeholder="Directrice de l'établissement">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="pt-5">
                                            <div class="account-manager">
                                                <h5>Vérifications :</h5>
                                            </div>
                                            <div class="mt-4">
                                                <div class="">
                                                    <div class="applicants-veri">
                                                        <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt="check"></span>Etablissement
                                                    </div>
                                                    <div class="applicants-veri">
                                                        <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt="check"></span> E-mail
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 cust-col8">
                                <div class="card sr-card sa-border-radius">
                                    <div class="card-body applicants-body">
                                        <div class="tab-views">
                                            <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active nav-custom"><img src="{{asset('frontend/images/project/bulid.svg')}}" class="bulid" alt="bulid"> Établissement</a>
                                                </li>
                                            </ul>
                                            <div>
                                                <p class="mb-0 ouvert-p mr-3">Ouvert depuis le {{$establishment->opening_date}} {{$establishment->year}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="applicants-inside-details">
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <h5 class="propos">À propos de la structure</h5>
                                                <p class="propos-text">
                                                    {{$establishment->own_of_our_structure}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Effectif :</h5>
                                                    <span class="span-propos">{{$establishment->effective}} personnes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Nombre de groupes et tranche d’âges :
                                                    </h5>
                                                    <span class="span-propos">{{$establishment->number_of_groups_and_age_groups}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Pédagogie appréciées :</h5>
                                                    <span class="span-propos">Maria Montéssori</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Peut accueillir :</h5>
                                                    <span class="span-propos">35 enfants</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Superficie de l'établissement</h5>
                                                    <span class="span-propos">{{$establishment->surface_area_of_the_establishment}} m²</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Autres informations : </h5>
                                                    <span class="span-propos">Jardin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <h5 class="propos">Nos valeurs :</h5>
                                                <p class="propos-text">
                                                    {{$establishment->our_values}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{URL::to('edit-establishment')}}/{{$establishment->id}}" class="btn btn-edit-establishment"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="mr-2 edit-hgt">Editer l'établissement
                            </a>
                        </div>
                    </div>
                </div>


            </section>
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <section class="prof-backsec">
                <div class="container">
                    <div class="card sr-card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card sr-card sa-border-radius">
                                    <div class="card-body applicants-body">
                                        <div class="tab-views">
                                            <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active nav-custom  ml-3"><img src="{{asset('frontend/images/project/protfolio.svg')}}" class="bulid" alt="bulid">Portfolio</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="portfolio-inside-details">
                                    <ul class="applicants-img-ul " id="appendid">
                                        @foreach($images as $image)
                                        <li id="image{{$image->id}}">
                                            <div class="img_content_pro">
                                                <img src='{{asset("$image->image")}}'>
                                                <div>
                                                    <img onclick="removeImage({{$image->id}})" src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <li>
                                            <form method="post" enctype="multipart/form-data" name="myForm" id="myForm">
                                                @csrf
                                                <div class="img_content_pro">
                                                    <div class="view-image-upload">
                                                        <div class="upload-div">
                                                            <div><img src="{{asset('frontend/images/project/download.svg')}}" alt="upload-profile" class="view-upload-img1">
                                                            </div>
                                                            <p class="mb-0">Télécharger une image</p>
                                                        </div>

                                                        <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" onchange="imageUploadGallery();" class="views-upload-input1">
                                                        <input type="hidden" value="{{$establishment->id}}" name="establishment_id">


                                                    </div>
                                                </div>
                                                <span class="image-upload-error text-danger">@error ('image') {{$message}} @enderror</span>
                                            </form>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
        <div class="tab-pane fade" id="job-offers" role="tabpanel" aria-labelledby="pills-job-offers">
            <section class="prof-backsec">
                <div class="container">
                    <div class="post-right">
                        <a href="{{route('addjob',$establishment->id)}}" class="btn post-an-btn">Publier une offre</a>
                    </div>
                    <div>
                        <ul class="nav nav-pills tab-inside-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">Annonces en ligne
                                    <span>({{$jobListing ? count($jobListing):'0'}})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-sec-tab" data-toggle="pill" href="#pills-sec" role="tab" aria-controls="pills-sec" aria-selected="false">Annonces expirées
                                    <span>({{$remaining ? count($remaining):'0'}})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Restaurer l’annonce
                                    <span>({{$deleted ? count($deleted):'0'}})</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-inside-pills" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($jobListing)
                                                @foreach($jobListing as $value)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-4">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                    <h5 class="mb-0 job_aux_text fn-19">{{$value->title}}</h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$value->job_description}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$value->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$value->minimum_gross_salary}} € par mois</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">Expérience : Minimum {{$value->minimum_experience}} ans</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 d-flex align-items-end mb-3">
                                                            <div class="metters-btns">
                                                                <button class="btn btn-met">
                                                                    Mettre en pause
                                                                </button>
                                                                <a href="{{route('editjob',$value->id)}}" class="btn btn btn-met">
                                                                    Modifier</a>
                                                                <a href="{{route('destroy',$value->id)}}" class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <div class="space-date">
                                                                <div class="text-center date-details">
                                                                    <p class="mb-0">Date</p>
                                                                    <p class="mb-0">{{$value->contract_start_date}}</p>
                                                                    <p class="mb-0">51 jours restants

                                                                    </p>

                                                                </div>
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span>{{$value->total_view}}</span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>{{$value->total_reg}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-voir">
                                                                <a href="{{route('see-applicants')}}"> <button class="btn btn-blue">Voir les postulants
                                                                    </button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>
                                            <div class="custom-pagination pt-5 pb-3">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1" id="prev">
                                                                &lt; </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" id="next">&gt;</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-sec" role="tabpanel" aria-labelledby="pills-sec-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($remaining)
                                                @foreach($remaining as $remain)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-3 pr-0">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                    <h5 class="mb-0 job_aux_text fn-19">{{$remain->title}}
                                                                    </h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$remain->job_description}}
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->minimum_gross_salary}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->minimum_experience}}</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                            <div class="metters-btns">
                                                                <a href="{{route('editjob',$remain->id)}}" class="btn btn btn-met">
                                                                    Modifier</a>
                                                                <a href="{{route('destroy',$remain->id)}}" class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mr-renew">
                                                            <div>
                                                                <div class="renew-top">
                                                                    <button class="btn btn-outline-renew">Renouveler
                                                                        l'annonce
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2 pl-0">
                                                            <div class="space-date justify-content-end">
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span>{{$remain->total_view}}</span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>{{$remain->total_reg}}</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-voir text-right-voir">
                                                                <a href="applicarion-offer.html" class="btn btn-blue w-95">Voir les
                                                                    postulants
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($deleted)
                                                @foreach($deleted as $delete)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-3 pr-0">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                    <h5 class="mb-0 job_aux_text fn-19">{{$delete->title}}
                                                                    </h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$delete->job_description}}
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$delete->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$delete->minimum_gross_salary}} € par mois</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">Expérience : {{$delete->minimum_experience}}</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                            <div class="metters-btns">
                                                                <a href="{{route('editjob',$delete->id)}}" class="btn btn btn-met">
                                                                    Modifier</a>
                                                                <a href="{{route('destroy',$delete->id)}}" class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mr-renew">
                                                            <div>
                                                                <div class="renew-top">
                                                                    <a href="{{route('users.restore',$delete->id)}}" class="btn btn-outline-renew">Renouveler
                                                                        l'annonce
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2 pl-0">
                                                            <div class="space-date justify-content-end">
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span></span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-voir text-right-voir">
                                                                <a href="applicarion-offer.html" class="btn btn-blue w-95">Voir les
                                                                    postulants
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>
                                            <div class="custom-pagination pt-5 pb-3">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1" id="prev">
                                                                &lt; </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" id="next">&gt;</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>

        <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="pills-educational">
            <section class="prof-backsec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card sr-card min-hegiht-download">
                                <div class="card-body">
                                    <div class="educational-project">
                                        <div class="edu-pro sec-edu-pro">
                                            <h2 class="text-center">NOTRE PROJET PÉDAGOGIQUE</h2>
                                        </div>
                                    </div>
                                    <div class="educational-details">
                                        <p>{{$establishment->our_values}}</p>
                                    </div>
                                    <div class="overflow-auto">
                                        <table class="download-table w-100">
                                            <tbody>
                                                @php $documents=explode(",",$establishment->document); @endphp
                                                @foreach($documents as $document)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                                            <p class="mb-0">Uploaded projet pédagogique</p>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <a href="{{URL::to('/')}}/{{$document}}" download="{{$document}}"><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>

                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>
        </div>
    </div>




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

    // ------------------
    $("#pills-profile-tab").on('click', function() {
        $("#view-account1").hide();
        $("#view-account2").show();
        $("#view-account3").hide();
        $("#view-account4").hide();
        $("#profile-id2").show();
        $("#profile-id").hide();
    });
    $("#pills-home-tab").on('click', function() {
        $("#view-account2").hide();
        $("#view-account4").hide();
        $("#view-account3").hide();
        $("#view-account1").show();
        $("#profile-id2").hide();
        $("#profile-id").show();
    });
    $("#pills-educational").on('click', function() {
        $("#view-account1").hide();
        $("#view-account2").hide();
        $("#view-account4").hide();
        $("#view-account3").show();
        $("#profile-id2").show();
        $("#profile-id").hide();
    });
    $("#pills-job-offers").on('click', function() {
        $("#view-account1").hide();
        $("#view-account2").hide();
        $("#view-account3").hide();
        $("#view-account4").show();
        $("#profile-id").hide();
        $("#profile-id2").show();
    });
    //upload Image
    function imageUploadGallery() {
        $('.image-upload-error').text('');
        event.preventDefault();
        $.ajax({
            url: '{{ route("upload-image") }}',
            method: 'POST',
            data: new FormData(myForm),
            _token: '{{ csrf_token() }}',
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    $("#appendid").prepend("<li id='image" + response.data.id + "'><div class='img_content_pro'><img src='{{asset('/')}}" + response.data.image + "'><div><img imageId=" + response.data.id + " onclick='removeImage(" + response.data.id + ")'  src='{{asset('frontend/images/project/cancel-red.svg')}}' width='12px' height='12px' class='unplash-closeimg'></div></div></li>");
                } else {
                    $('.image-upload-error').text(response.errors.image);
                }
            }
        });
    }
    //Remove Image
    function removeImage(id) {
        $.ajax({
            url: "{{ route('remove-image') }}",
            type: "POST",
            data: {
                id: id,
                _token: "{{csrf_token()}}"
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);

                    $("#image" + id).remove();

                } else {
                    toastr.error(response.message);
                }

            }
        });
    }
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $imageValidator->selector('#upload-image') !!}
@endsection
</body>

</html>