<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyApi Link</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico" type="image/png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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

    <section>
        <div class="atext-pos pt-90px">
            <img src="{{asset('frontend/images/profile-background.png')}}" alt="profile page background image" class="w-100 prof-resimg">
            <a href="" class="back link_a pos-img-link" id="bread-id" style="display: none;">
                <span><i class="fa fa-angle-left mr-2"></i></span>breadcrumb
            </a>
        </div>
        <div class="container">
            <div class="row profile-top jus-res">
                <div class="col-lg-3 col-md-4 col-9">

                    <div class="profile-img bg-manager">
                        <img src="{{asset('frontend/images/project/mont1.svg')}}" alt="profile image">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3 mt-3 profile" id="manager-id">
                        <h4 class="profile-name">Mairie de Montpellier <img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="ml-1 edit-manager"></h4>
                        <p class="mb-0 d-flex align-items-center">31 avenue de la liberté 34000 Montpellier <img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="edit-manager ml-2"></p>
                        <p class="">Municipalisé</p>
                    </div>
                    <div class="mb-3 mt-3 profile" id="manager-id2" style="display: none;">
                        <h4 class="profile-name">Mairie de Montpellier</h4>
                        <p class="mb-0 d-flex align-items-center">31 avenue de la liberté 34000 Montpellier</p>
                        <p class="">Municipalisé</p>
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
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Gestion du compte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Les offres d'emploi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="" href="{{URL::to('/account-setting') }}">Paramètres</a>
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
                        <div class="card sr-card p-4 main-card-min">
                            <div class="row">

                                <div class="col-md-4 cust-manager-col4">
                                    <div class="card sr-card">
                                        {!! Form::model(null,['method' => 'POST', 'route' => ['update-profile'], 'files' => true,'id'=>'profile-update']) !!}

                                        <div class="card-body">
                                            <div class="card-min-manager">
                                                <div class="account-manager">
                                                    <h5>Profil du gestionnaire<br>de compte :</h5>
                                                </div>
                                                <div class="mt-4">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group pb-2">
                                                               
                                                                {!! Form::text('civility', auth()->guard('web')->user()->civility, ['class' => 'form-control view-form', 'placeholder' => 'Civilité','id'=>'civility']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 pb-2">
                                                            <div class="form-group">


                                                            
                                                            {!! Form::text('lastname', auth()->guard('web')->user()->last_name, ['class' => 'form-control view-form', 'placeholder' => 'Nom','id'=>'lastname']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 pb-2">
                                                            <div class="form-group">
                                                            {!! Form::text('firstname',auth()->guard('web')->user()->first_name, ['class' => 'form-control view-form', 'placeholder' => 'Prénom','id'=>'firstname']) !!}
                                                             
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 pb-2">
                                                            <div class="form-group">
                                                            {!! Form::text('email',auth()->guard('web')->user()->email, ['class' => 'form-control view-form', 'placeholder' => 'Mail','id'=>'email']) !!}
                                                              
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="pt-5">
                                                    <div class="account-manager">
                                                        <h5>Rôle du gestionnaire <br>de compte :</h5>
                                                    </div>
                                                    <div class="mt-4">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                {!! Form::text('roles',auth()->guard('web')->user()->roles, ['class' => 'form-control view-form', 'placeholder' => "Directrice de l'établissement",'id'=>'roles']) !!}
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-yellow d-flex align-items-center pd-btns-edit"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="mr-3 edit-manager">Editer</button>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                                <div class="col-md-8 cust-manager-col8">
                                    <div class="card sr-card sa-border-radius">
                                        <div class="card-body applicants-body">
                                            <div class="tab-views">
                                                <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active nav-custom"><img src="{{asset('frontend/images/project/bulid.svg')}}" class="bulid" alt="bulid"> Établissement</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="applicants-inside-details">
                                        <div class="mb-30px">
                                            <a href="{{URL::to('/add-establishment')}}">
                                                <div class="card sr-card manager-card">
                                                    <div class="card-body">

                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('frontend/images/project/plus.svg')}}" alt="plus" class="plus-manager">
                                                            <p class="mb-0 un-textp">Ajouter un établissement petite
                                                                enfance
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        @if($myEstablishmentList)
                                        <div class="mb-30px">
                                            <div class="card sr-card manager-card">
                                                <div class="card-body">
                                                    <table class="manager-table">
                                                        @foreach($myEstablishmentList as $value)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{url(''.$value->more_infomation)}}" alt="user" class="manager-pro mr-3">
                                                                    <p class="mb-0 managerp">{{$value->type_of_establishment}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <p class="mb-0 managerp">{{$value->direction}}</p>
                                                                    <a href="view-establishment-account-3.html" class="btn btn-blue voir-btn ml-4">Voir</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
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
                        <div class="post-right">
                            <a href="{{route('addjob')}}" class="btn post-an-btn">Publier une offre</a>
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
                                    <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Annonces supprimées
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
                                                  
                                                @foreach($myJobList as $value)
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
                                                                    <a href="{{url('editjob?id='.$value->id)}}" class="btn btn btn-met">
                                                                        Modifier</a>
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="space-date">
                                                                    <div class="text-center date-details">
                                                                        <p class="mb-0">Date</p>
                                                                        <p class="mb-0">{{$value->contract_start_date}}</p>
                                                                        <p class="mb-0">51 jours restants</p>
                                                                    </div>
                                                                    <div class="mt-images-profile">
                                                                        <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                </div>
                                                <div class="custom-pagination pt-5 pb-3">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-center">
                                                            {!! $myJobList->appends(request()->input())->links(); !!}
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
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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
                                                    <div class="job-card manager-job-pd">
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-3 pr-0">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <h5 class="mb-0 job_aux_text fn-19">Auxiliaire
                                                                            Puéricultrice
                                                                        </h5>
                                                                    </li>
                                                                    <li>
                                                                        <p class="manage-crep job_cre_text fn-21">Crèche
                                                                            du
                                                                            bonheur
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
                                                                    <a class="btn btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                                            <span>60</span>
                                                                        </div>
                                                                        <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                        <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>120</span>
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


        </div>



    </section>
</body>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js ')}}"></script>
<script type="text/javascript" src="js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}} "></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript ">
    $(".select2 ").select2();
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#profile-update') !!}



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

    // --------------------
    $("#pills-profile-tab").on('click', function() {
        $("#manager-id2").show();
        $("#manager-id").hide();
        $("#bread-id").show();
    });
    $("#pills-home-tab").on('click', function() {
        $("#manager-id2").hide();
        $("#manager-id").show();
        $("#bread-id").hide();
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