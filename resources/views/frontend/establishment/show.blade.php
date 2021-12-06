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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>

    <div id="after-header"></div>

    <section>
        <div class="atext-pos pt-90px">
            <img src="{{asset('frontend/images/profile-background.png')}}" alt="profile page background image" class="w-100 prof-resimg">
            <a href="manager-profile.html" class="back link_a pos-img-link">
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
                            <h4 class="profile-name">Crèche des bambins</h4>
                            <p class="mb-0">Type de structure : crèche</p>
                            <p class="">Municipalisé</p>
                        </div>
                    </div>
                    <div class="full-divmain" id="view-account2" style="display: none;">
                        <div class="mb-3 mt-5 profile">
                            <h4 class="profile-name">Crèche XXXXX</h4>
                            <p class="mb-0">Garderie</p>
                            <p class="">Municipalisé</p>
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
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">Paris</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group custom-drop-paris mb-3">
                                <div class="pos-icons">
                                    <img src="{{asset('frontend/images/group100.svg')}}" class="house-drop-icon">
                                </div>
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">Île de France</option>
                                    </select>
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
                                                            <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}"
                                                                    alt="check"></span>Etablissement
                                                        </div>
                                                        <div class="applicants-veri">
                                                            <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}"
                                                                    alt="check"></span> E-mail
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
                                                    <p class="mb-0 ouvert-p mr-3">Ouvert depuis le 15 Février 1999</p>
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
                                        <ul class="applicants-img-ul">
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash5.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash7.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash6.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash11.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash3.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <img src="{{asset('frontend/images/imgs-svg/unsplash5.svg')}}">
                                                    <div>
                                                        <img src="{{asset('frontend/images/project/cancel-red.svg')}}" width="12px" height="12px" class="unplash-closeimg">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_content_pro">
                                                    <div class="view-image-upload">
                                                        <div class="upload-div">
                                                            <div><img src="{{asset('frontend/images/project/download.svg')}}" alt="upload-profile" class="view-upload-img1">
                                                            </div>
                                                            <p class="mb-0">Télécharger une image</p>
                                                        </div>
                                                        <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" class="views-upload-input1">
                                                    </div>
                                                </div>
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
                            <a href="publish-job-offer.html" class="btn post-an-btn">Publier une offre</a>
                        </div>
                        <div>
                            <ul class="nav nav-pills tab-inside-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">Annonces en ligne
                                        <span>(3)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-sec-tab" data-toggle="pill" href="#pills-sec" role="tab" aria-controls="pills-sec" aria-selected="false">Annonces expirées
                                        <span>(0)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Restaurer l’annonce
                                        <span>(1)</span></a>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-4">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 d-flex align-items-end mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn-met">
                                                                        Mettre en pause
                                                                    </button>
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">31 oct 8:30</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir">
                                                                    <a href="applicarion-offer.html" class="btn btn-blue">Voir les postulants
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-4">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 d-flex align-items-end mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn-met">
                                                                        Mettre en pause
                                                                    </button>
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">31 oct 8:30</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir">
                                                                    <a href="applicarion-offer.html" class="btn btn-blue">Voir les postulants
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-4">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 d-flex align-items-end mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn-met">
                                                                        Mettre en pause
                                                                    </button>
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">31 oct 8:30</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir">
                                                                    <a href="applicarion-offer.html" class="btn btn-blue">Voir les postulants
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-4">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 d-flex align-items-end mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn-met">
                                                                        Mettre en pause
                                                                    </button>
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">31 oct 8:30</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir">
                                                                    <a href="applicarion-offer.html" class="btn btn-blue">Voir les postulants
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-4">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 d-flex align-items-end mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn-met">
                                                                        Mettre en pause
                                                                    </button>
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">31 oct 8:30</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir">
                                                                    <a href="applicarion-offer.html" class="btn btn-blue">Voir les postulants
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                            <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                <div class="card sr-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="border-job">
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche du bonheur
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">1 350 € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                                <div class="metters-btns">
                                                                    <button class="btn btn btn-met">
                                                                        Modifier
                                                                    </button>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
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
                                                                <div class="max-annouse-content">
                                                                    <div class="font-icons">
                                                                        <div>
                                                                            <i class="fa fa-eye"></i>
                                                                        </div>
                                                                        <div>
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div>60</div>
                                                                        <div>120</div>
                                                                    </div>
                                                                </div>

                                                                <div class="button-voir text-right-voir">
                                                                    <button class="btn btn-blue w-95">Voir les
                                                                        postulants
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s</p>
                                        </div>
                                        <div class="overflow-auto">
                                            <table class="download-table w-100">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                                                <p class="mb-0">Uploaded projet pédagogique</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href=""><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                                                <p class="mb-0">Uploaded projet pédagogique</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href=""><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                                                <p class="mb-0">Uploaded projet pédagogique</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href=""><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                                        </td>
                                                    </tr>
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
</body>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
</html>