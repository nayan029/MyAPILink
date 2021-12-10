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
                            <img src="{{asset('frontend/images/home.svg')}}" class="drop-icon">
                            <div class="applicants-drop bg-dropdown">
                                <select class="form-control input-drop bg-transparent">
                                    <option value="">{{$showCompany->city}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-5">
                        <div class="form-group mb-3">
                            <img src="{{asset('frontend/images/group100.svg')}}" class="drop-icon">
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
                                                                <input class="form-control view-form" type="text" placeholder="Nom" value="{{$showCompany->first_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" placeholder="Prénom" value="{{$showCompany->last_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control view-form" type="text" placeholder="Mail" value="{{$showCompany->email}}">
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
                                                                <input class="form-control view-form" type="text" placeholder="Directrice de l'établissement" value="{{$showCompany->roles}}">
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
                                                    <a class="nav-link active nav-custom"><img src=" {{asset('frontend/images/project/bulid.svg')}}" class="bulid" alt="bulid"> Établissement</a>
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
                                                    Indisponible
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Effectif :</h5>
                                                    <span class="span-propos">Indisponible</span>
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
                                                    <span class="span-propos">Indisponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Pédagogie appréciées :</h5>
                                                    <span class="span-propos">Indisponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Peut accueillir:</h5>
                                                    <span class="span-propos">Indisponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Superficie de l'établissement</h5>
                                                    <span class="span-propos">Indisponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <h5 class="propos mb-0">Autres informations : </h5>
                                                    <span class="span-propos">Indisponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-30px">
                                        <div class="card sr-card">
                                            <div class="card-body">
                                                <h5 class="propos">Nos valeurs :</h5>
                                                <p class="propos-text">
                                                    Indisponible
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
                                                    <a class="nav-link active nav-custom  ml-3"><img src=" {{asset('frontend/images/project/protfolio.svg')}}" class="bulid" alt="bulid">Portfolio</a>

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
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash5.svg')}}">
                                            </div>

                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash7.svg')}}">
                                            </div>

                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash6.svg')}}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash11.svg')}}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash3.svg')}}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash.svg')}}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash5.svg')}}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content_pro">
                                                <img src="{{asset('frontend/images/imgs-svg/unsplash7.svg')}}">
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="d-flex justify-content-end btn-image-view">
                                        <a class="btn btn-blue d-flex mr-3"><img src="{{asset('frontend/images/imgs-svg/ionic-md-eye.svg')}}" class="mr-2" alt="eye-icon"> Plus ...</a>
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
                                    @foreach($showJobs as $data)

                                    @php

                                    $createDate = date('d-m-Y',strtotime($data->created_at));
                                    $now = date('d-m-Y');
                                    $diff = strtotime($createDate) - strtotime($now);
                                    $finalDays = abs(round($diff / 86400));
                                    @endphp
                                    <div class="job-card">
                                        <div class="job-listing-flex">
                                            <h5 class="ml-2 mb-0 linkcolor">{{$data->title}}</h5>

                                            <button class="btn fav-btn mb-fav-btn" type="button" id="book1">
                                                <img src="{{asset('frontend/images/bookmark.svg')}}" alt="bookmark image " class="b1 bookmark-img">
                                                <img src="{{asset('frontend/images/imgs-svg/book-mark-yellow.svg')}}" alt="bookmark image " class="b2 bookmark-img">
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
                                                            <p class="mb-0">Experience : {{$data->minimum_experience}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="job-image-ul">
                                                    <li>
                                                        <img src="{{asset('frontend/images/map.svg')}}" width="12px">
                                                        <p class="mb-0">46 rue La Martine 06400 NIce</p>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend/images/icon1.svg')}}" width="12px">
                                                        <p class="mb-0">{{$data->minimum_gross_salary}} par an</p>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend/images/calendar.svg')}}" width="12px">
                                                        <p class="mb-0">Publié il y a {{$finalDays}} jours</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="d-flex justify-content-end align-items-center resbtn-flex">
                                                    <a href="listing-details.html" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                                                    <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment" onclick="openJobModal('{{$data->id}}','{{$data->user_id}}')">Postuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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



    <div id="footer"></div>

    <!-- See the establishment's file Modal -->
    <div class="modal fade modal-back-blue" id="establishment" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content m-32">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                    </button>
                </div>

                <input type="hidden" name="jobid" id="jobid">
                <input type="hidden" name="userid" id="userid">
                <div class="modal-body resume_modal">
                    <div class="establishment_modal">
                        <h4 class="">Comment souhaitez-vous postuler ?</h4>

                        <div class="padding-150px ">
                            <div class="text-center pb-5 mb-5">
                                <button class="btn btn-modals-blue bravo-btn" type="submit" data-target="#bravo" value="0" id="bravo-btn">Envoyer mon profil profesionnel<br>au recruteur</button>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-modals-blue cv-radius" id="updateCv" type="submit"><img src="{{asset('frontend/images/project/feather-download.svg')}}" alt="download" class="mr-3">

                                    Télécharger et
                                    envoyer mon cv</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- bravo modal -->
    <div class="modal fade modal-back-blue" id="bravo" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                    </button>
                </div>
                <div class="modal-body bravo-body">
                    <div class="text-center">
                        <div class="bravo-text">
                            <h3>BRAVO !</h3>
                        </div>
                        <div>
                            <img src="{{asset('frontend/images/project/green-checkmark.svg')}}" alt="checkmark" class="green-checkmarks">
                            <p class="votres-check">Votre candidature a bien été envoyé</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- cv modal -->
    <div class="modal fade modal-back-blue" id="cv-modal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog modal-xl" role="document">
            <div class="modal-content m-32">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                </p>
                            </div>
                            <div class="text-right pt-4 pb-3">
                                <a href="javasscript:void(0)" class="btn btn-blue ml-auto skip-btn tele-modal-btn">
                                    Passer cette étape</a>
                                <a href="javasscript:void(0)" class="btn btn-blue ml-3 ok-btn tele-modal-btn">
                                    Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tele modal -->

    <div class="modal" id="tele-modal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header resume_header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                    </button>
                </div>
                <div class="modal-body bravo-body pb-4">
                    <div class="text-center">
                        <div class="veui-detail">
                            <h5 class="veui-text border-modal">Veuillez choisir un Cv à envoyer au recruteur</h5>
                        </div>
                        <div class="overflow-auto px-4">
                            <table class="download-table w-100">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                                <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
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
                                                <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
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
                                                <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=""><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <h4 class="ou_text border-modal">Ou télécharger un nouveau cv </h4>
                        </div>
                        <div class="upload-drop-btns">
                            <form method="POST" id="mainForm" class="d-content">
                                @method('POST')
                                @csrf
                                <button class="btn btn-modals-blue cv-radius btn-tele position-relative" id="cv-btn" type="button"><img src="{{asset('frontend/images/project/feather-download.svg')}}" alt="download" class="mr-3">
                                    <input type="file" class="upload-modal-cv" name="document_name" id="document_name">
                                    Télécharger un cv </button>
                                <input type="hidden" name="pdf_name" id="pdf_name">
                                <button href="javascript:void(0)" class="btn btna-oky bravo-btn" id="byResume" value="1">Ok</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</section>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script>
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
    function openJobModal(job_id, user_id) {
        $('#jobid').val(job_id);
        $('#userid').val(user_id);
        $('#establishment').modal('show');
    }



    $(document).on("change", "#document_name", function() {
        $.ajax({
            url: "{{route('getDocumentName')}}",
            method: "POST",
            data: new FormData(mainForm),
            _token: '{{ csrf_token() }}',
            contentType: false,
            processData: false,
            success: function(response) {
                if (response) {
                    $("#pdf_name").val(response);
                }
            }
        });
    });

    $(document).on("click", "#byResume,#bravo-btn", function() {
        var type = $(this).val();
        var jobid = $('#jobid').val();
        var userid = $('#userid').val();
        var document_name = $('#pdf_name').val();


        $.ajax({
            url: "{{ route('store-jobType') }}",
            method: "POST",
            data: {
                'type': type,
                'jobid': jobid,
                'userid': userid,
                'document_name': document_name,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    $('#establishment').modal('hide');
                    $('#bravo').modal('show');
                    location.reload();

                } else {
                    toastr.danger(response.message);
                }
            }
        });

    });



    $(".bravo-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#updateCv").on('click', function() {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });
    $(".tele-modal-btn").on('click', function() {
        $('#cv-modal').modal('hide');
        $('#tele-modal').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });
    $(".bravo-btn").on('click', function() {
        $('#tele-modal').modal('hide');
        $('#bravo').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });
    $('.fav-btn').click(function() {
        $(this).toggleClass('active');
    });
    $(document).on("click", ".save-fav", function() {
        var saveType = $(this).hasClass('active') == true ? 1 : 0;
        var job_id = $(this).data('job');
        var user_id = $(this).data('user');

        $.ajax({
            url: "{{route('store-savedjobs')}}",
            method: "POST",
            data: {
                'job_id': job_id,
                'user_id': user_id,
                'saveType': saveType,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                if (response) {

                }
            }
        });
    });
</script>
@endsection

</body>

</html>