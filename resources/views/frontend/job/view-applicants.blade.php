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
            <a href="" class="back link_a pos-img-link">
                <span><i class="fa fa-angle-left mr-2"></i></span>Retour à mon profil
            </a>
        </div>
        <div class="container">
            <div class="row profile-top jus-res">
                <div class="col-lg-3 col-md-4 col-9">

                    <div class="profile-img">
                        <img src="{{asset('frontend/images/profile.png')}}" alt="profile image">

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full-divmain">
                        <div class="mb-3 mt-5 profile">
                            <h4 class="profile-name"></h4>
                            <p class="mb-0">Type de structure : garderie</p>
                            <p class="">Municipalisé</p>
                        </div>
                        <div>
                            <a href="search-for-ad.html" class="btn-recruit btn">RECRUTER</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="images/home.svg" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value=""></option>       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="images/group100.svg" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value=""></option>
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
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-homNotre institutione" aria-selected="true">Les postulants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-editoffer-tab" data-toggle="pill" href="#editoffer"
                                    role="tab" aria-controls="pills-homNotre institutione"
                                    aria-selected="true">Editer</a>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a  id="pills-editoffer-tab" data-toggle="pill" href="#editoffer"
                                    role="tab" aria-controls="pills-homNotre institutione"
                                    aria-selected="true" class="btn post-an-btn mt-4 mb-5 editer-offer">Editer</a>
                                    </div>
                                </div>
                                @if($applyJob)
                                @foreach($applyJob as $job)
                                <div class="job-card ">
                                    <div class="row mb-2">
                                        <div class="col-md-7">
                                            <div class="offer-text">
                                                <p class="mb-0 offer-app-one">{{$job->user->first_name}} {{$job->user->last_name}}</p>
                                                <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                <p class="mb-0 offer-app-sec">{{$jobDetail->minimum_experience}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-end">
                                                <a href="establishment-portfolio-of-candidate.html" class="mr-3 btn btn-viewjob offer-application ">Voir le profil
                                                    Apilink</a>
                                                <button class="btn btn-apply offer-application">Voir le CV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach   
                                @endif     
                                <div class="row ">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="#">
                                            <i class="fa fa-angle-right btn-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <div class="tab-pane fade show active" id="editoffer" role="tabpanel" aria-labelledby="pills-editoffer-tab">
                <section class="prof-backsec">
                    <div class="container">
                        <div class="card sr-card">
                            <div class="card-body">
                                <div class="offer-edit-hgt">
                                    <div class="row py-5 mt-3">
                                        <div class="col-md-12">
                                            <p class="color-black fn-19">1 élément sélectionné</p>
                                        </div>
                                        <!-- <div class="col-md-6 d-flex justify-content-end">
                                            <a href="javascript:void(0)"
                                                class="btn btn-blue btn-super mr-4">Supprimer</a>
                                            <a href="javascript:void(0)" class="btn btn-blue btn-refuser">Refuser le
                                                candidat</a>
                                        </div> -->
                                    </div>
                                    <div class="job-offer-edit mt-4">
                                        <div class="job-card ">
                                            <div class="row mb-2">
                                                <div class="col-md-7">
                                                    <div class="offer2-text d-flex">
                                                        <div class="custom-edit-radio">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" checked id="customRadio1"
                                                                    name="customRadio"  class="custom-control-input">
                                                                <div class="div-edit-radio"></div>
                                                                <label class="check-labels">
                                                                    <img src="{{asset('frontend/images/project/dark-white-check.svg')}}">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="ml-offer-edit">
                                                            <p class="mb-0 offer-app-one">Jean Claude Payet</p>
                                                            <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                            <p class="mb-0 offer-app-sec">3 ans d'expériences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 mt-2">
                                                    <div class="float-right">
                                                        <a href="" class="btn btn-light-accept">
                                                            Accepter
                                                        </a>
                                                        <a href="" class="btn btn-blue-refuse">
                                                            Refuser
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-card ">
                                            <div class="row mb-2">
                                                <div class="col-md-7">
                                                    <div class="offer2-text d-flex">
                                                        <div class="custom-edit-radio">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio"
                                                                    class="custom-control-input">
                                                                <div class="div-edit-radio"></div>
                                                                <label class="check-labels">
                                                                    <img src="images/project/dark-white-check.svg">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="ml-offer-edit">
                                                            <p class="mb-0 offer-app-one">Jean Claude Payet</p>
                                                            <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                            <p class="mb-0 offer-app-sec">3 ans d'expériences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 mt-2">
                                                    <div class="float-right">
                                                        <a href="" class="btn btn-light-accept">
                                                            Accepter
                                                        </a>
                                                        <a href="" class="btn btn-blue-refuse">
                                                            Refuser
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-card ">
                                            <div class="row mb-2">
                                                <div class="col-md-7">
                                                    <div class="offer2-text d-flex">
                                                        <div class="custom-edit-radio">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio"
                                                                    class="custom-control-input">
                                                                <div class="div-edit-radio"></div>
                                                                <label class="check-labels">
                                                                    <img src="images/project/dark-white-check.svg">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="ml-offer-edit">
                                                            <p class="mb-0 offer-app-one">Jean Claude Payet</p>
                                                            <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                            <p class="mb-0 offer-app-sec">3 ans d'expériences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="float-right mt-2">
                                                        <a href="" class="btn btn-light-accept">
                                                            Accepter
                                                        </a>
                                                        <a href="" class="btn btn-blue-refuse">
                                                            Refuser
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-card ">
                                            <div class="row mb-2">
                                                <div class="col-md-7">
                                                    <div class="offer2-text d-flex">
                                                        <div class="custom-edit-radio">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio"
                                                                    class="custom-control-input">
                                                                <div class="div-edit-radio"></div>
                                                                <label class="check-labels">
                                                                    <img src="images/project/dark-white-check.svg">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="ml-offer-edit">
                                                            <p class="mb-0 offer-app-one">Jean Claude Payet</p>
                                                            <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                            <p class="mb-0 offer-app-sec">3 ans d'expériences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="float-right mt-2">
                                                        <a href="" class="btn btn-light-accept">
                                                            Accepter
                                                        </a>
                                                        <a href="" class="btn btn-blue-refuse">
                                                            Refuser
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-card ">
                                            <div class="row mb-2">
                                                <div class="col-md-7">
                                                    <div class="offer2-text d-flex">
                                                        <div class="custom-edit-radio">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio"
                                                                    class="custom-control-input">
                                                                <div class="div-edit-radio"></div>
                                                                <label class="check-labels">
                                                                    <img src="images/project/dark-white-check.svg">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="ml-offer-edit">
                                                            <p class="mb-0 offer-app-one">Jean Claude Payet</p>
                                                            <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                            <p class="mb-0 offer-app-sec">3 ans d'expériences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="float-right mt-2">
                                                        <a href="" class="btn btn-light-accept">
                                                            Accepter
                                                        </a>
                                                        <a href="" class="btn btn-blue-refuse">
                                                            Refuser
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="#">
                                            <i class="fa fa-angle-right btn-arrow"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
          
          
</body>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}} "></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<script src="{{asset('frontend/js/custom.js ')}}"></script>
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

</html>