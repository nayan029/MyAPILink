@extends('frontend.master')
@section('title')
<title>ApiLink | SeeJob</title>
@endsection
@section('content')
<section>
    <div class="atext-pos  pt-90px">
        <img src="{{asset('frontend/images/profile-background.png')}}" alt="profile page background image" class="w-100 prof-resimg">

        <a href="" class="back link_a pos-img-link">
            <span><i class="fa fa-angle-left mr-2"></i></span>breadcrumb
        </a>
    </div>
    <div class="container">
        <div class="row profile-top jus-res">
            <div class="col-lg-3 col-md-4 col-9">

                <div class="profile-img">
                    <img src="{{asset('frontend/images/profile.png')}}" alt="profile image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 mt-5 profile">
                    <h4 class="profile-name">{{$showCompany->first_name}}</h4>
                    <p class="mb-0">Type de structure : garderie</p>
                    <p class="">Municipalisé</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-5">
                        <div class="form-group mb-3">
                            <img src="images/home.svg" class="drop-icon">
                            <div class="applicants-drop bg-dropdown">
                                <select class="form-control input-drop bg-transparent">
                                    <option value="">{{$showCompany->city}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="form-group mb-3">
                            <img src="images/group100.svg" class="drop-icon">
                            <div class="applicants-drop bg-dropdown">
                                <select class="form-control input-drop bg-transparent">
                                    <option value="">{{$showCompany->city}}</option>
                                </select>
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
                            <a class="nav-link" id="pills-job-offers" data-toggle="pill" href="#job-offers" role="tab" aria-controls="job-offers" aria-selected="false">Nos offres d’emploi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-educational" data-toggle="pill" href="#educational" role="tab" aria-controls="educational" aria-selected="false">Notre projet
                                pédagogique</a>
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
                                                            <div class="form-group view-civilite">
                                                                <select class="from-control view-form-select select2 arrow-change">
                                                                    <option selected disabled>Civilité</option>
                                                                    <option>Mme </option>
                                                                    <option>Mr</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" placeholder="Nom">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" placeholder="Prénom">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" placeholder="Mail">
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
                                                                <input class="form-control view-form" type="text" placeholder="Directrice de l'établissement">
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
                                                        <span> <img src="images/imgs-svg/green-check.svg" alt="check"></span>Etablissement
                                                    </div>
                                                    <div class="applicants-veri">
                                                        <span> <img src="images/imgs-svg/green-check.svg" alt="check"></span> E-mail
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
                                                    <a class="nav-link active nav-custom"><img src="images/project/bulid.svg" class="bulid" alt="bulid"> Établissement</a>
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
                                                    « Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. »
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Effectif :</h5>
                                                    <span class="span-propos">15 personnes</span>
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
                                                    <span class="span-propos">2 groupes - 0-3 ans; 3-6 ans</span>
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
                                                    <h5 class="propos mb-0">Peut accueillir:</h5>
                                                    <span class="span-propos"> 35 enfants</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Superficie de l'établissement</h5>
                                                    <span class="span-propos">189 m²</span>
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
                                                    « Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. »
                                                </p>
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
                                                    <a class="nav-link active nav-custom  ml-3"><img src="images/project/protfolio.svg" class="bulid" alt="bulid">Portfolio</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="portfolio-inside-details">
                                    <ul class="applicants-img-ul">
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash5.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash7.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash6.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash11.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash3.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash5.svg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="images/imgs-svg/unsplash7.svg">
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="d-flex justify-content-end btn-image-view">
                                        <a class="btn btn-blue d-flex mr-3"><img src="images/imgs-svg/ionic-md-eye.svg" class="mr-2" alt="eye-icon"> Plus ...</a>
                                    </div>
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
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="min-height-filter">
                                        <div class="filter-view-sec">
                                            <h5 class="filter-h5">Filtre</h5>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-blue btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Trier par
                                                </button>
                                                <div class="dropdown-menu">

                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-4">
                                            <form>
                                                <div class="position-type change-placeholder-select type-width">
                                                    <select title="Basic example" multiple="multiple" name="example-basic" class="select-multi">
                                                        <option value="option1">CDI</option>
                                                        <option value="option2">CDD</option>
                                                        <option value="option3">Stages</option>
                                                        <option value="option4">Remplacements</option>
                                                        <option value="option5">Indépendants</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-yellow apper-filter">Appliquer le filtre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Auxiliaire Puéricultrice</h5>

                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>
                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Directrice – Directeur de crèche
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">46 rue La Martine 06400 NIce</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">50,000€ par an</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Publié il y a 5 jours</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Pédiatre</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Coordinatrice – Coordinateur de crèche</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">50,000</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Publié il y a 5 jours</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Cuisinier de cantine</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Auxiliaire de puériculture – Auxiliaire de crèche</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">$50,000 per year</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Posted 5days ago</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Psychologue</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Éducatrice – Éducateur de jeunes enfants</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">$50,000 per year</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Posted 5days ago</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Lingère en crèche</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Puéricultrice</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">$50,000 per year</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Posted 5days ago</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Infirmière</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Infirmière – Infirmier
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">$50,000 per year</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Posted 5days ago</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">Infirmière</h5>
                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img">
                                                <img src="images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img">
                                            </button>

                                        </div>

                                        <div class="row mr-minus9 mb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <ul class="job-border-ul">
                                                        <li>
                                                            <p class="mb-0">Nom du poste : Infirmière – Infirmier
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0">Experience : Minimum 2 Year</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="images/map.svg" width="12px">
                                                        <p class="mb-0">441 East Pearl Ave. Woodstock, GA 30188</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/icon1.svg" width="12px">
                                                        <p class="mb-0">$50,000 per year</p>
                                                    </li>
                                                    <li>
                                                        <img src="images/calendar.svg" width="12px">
                                                        <p class="mb-0">Posted 5days ago</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-pagination pt-5 pb-4">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">
                                                        &lt; </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">&gt;</a>
                                                </li>
                                            </ul>
                                        </nav>
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
                                        <div class="edu-pro">
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
                                                            <img src="images/pdf.svg" width="30px" class="mr-3">
                                                            <p class="mb-0">Uploaded projet pédagogique</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href=""><img src="images/feather-download.svg" class="download-img"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="images/pdf.svg" width="30px" class="mr-3">
                                                            <p class="mb-0">Uploaded projet pédagogique</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href=""><img src="images/feather-download.svg" class="download-img"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="images/pdf.svg" width="30px" class="mr-3">
                                                            <p class="mb-0">Uploaded projet pédagogique</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href=""><img src="images/feather-download.svg" class="download-img"></a>
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



    <div id="footer"></div>

    <!-- See the establishment's file Modal -->
    <div class="modal fade modal-back-blue" id="establishment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content m-32">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/material-close.svg"></span>
                    </button>
                </div>
                <div class="modal-body resume_modal">
                    <div class="establishment_modal">
                        <h4 class="">Comment souhaitez-vous postuler ?</h4>

                        <div class="padding-150px ">
                            <div class="text-center pb-5 mb-5">
                                <button class="btn btn-modals-blue" type="button" data-target="#bravo" id="bravo-btn">Envoyer mon profil profesionnel<br>au recruteur</button>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-modals-blue cv-radius" id="cv-btn" type="button"><img src="images/project/feather-download.svg" alt="download" class="mr-3">Télécharger et envoyer mon cv</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bravo modal -->
    <div class="modal fade modal-back-blue" id="bravo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/material-close.svg"></span>
                    </button>
                </div>
                <div class="modal-body bravo-body">
                    <div class="text-center">
                        <div class="bravo-text">
                            <h3>BRAVO !</h3>
                        </div>
                        <div>
                            <img src="images/project/green-checkmark.svg" alt="checkmark" class="green-checkmarks">
                            <p class="votres-check">Votre candidature a bien été envoyé</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- cv modal -->
    <div class="modal fade modal-back-blue" id="cv-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content m-32">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/material-close.svg"></span>
                    </button>
                </div>
                <div class="modal-body resume_modal">
                    <div class="candidate_modal">
                        <h4 class="mb-3">Lettre de motivation</h4>
                        <div class="candidate_modal_title">
                            <h5 class="candidate_modal_text pb-2">Description</h5>
                            <div class="candidate_modal_desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                    to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                    to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                    to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                </p>
                            </div>
                            <div class="text-right pt-4 pb-3">
                                <a href="#" class="btn btn-blue ml-auto skip-btn">
                                    Passer cette étape</a>
                                <a href="#" class="btn btn-blue ml-3 ok-btn">
                                    Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
@endsection