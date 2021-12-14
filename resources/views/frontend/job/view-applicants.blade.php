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
    <style>
        .navbar-collapse {
            display: none !important;
        }

        .navbar-expand-lg .navbar-collapse {
            display: none !important;
        }

        .taper-text {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .taper-text p {
            font-size: 27px;
            font-family: 'Quicksand-Regular';
            max-width: 332px;
            color: #2A2960;
            margin-top: 20px;
        }

        .pink-border-span {
            width: 206px;
            height: 6px;
            border-radius: 8px;
            display: block;
            background-color: #EC91BC;
        }

        .modal-textarea {
            height: 350px !important;
            min-height: 350px;
            width: 100%;
            border: 1px solid #707070 !important;
            background: #ffffff !important;
            font-size: 21px !important;
            color: #2A2960;
            font-family: 'Quicksand-Regular';
            white-space: pre;
            padding: 20px 31px 10px 30px;
            resize: none;
        }

        .padding-taper {
            padding: 0px 48px;
        }

        .form-messages {
            margin-top: 25px;
        }

        .tosend-btn,
        .tosend-btn:hover,
        .tosend-btn.active {
            background: #2A2960;
            color: #fff;
            width: 188px;
            border-radius: 12px;
            height: 43px;
            margin: 10px 0px 32px 0px;
            font-size: 20px;
        }

        .offer-editor {
            min-height: 816px;
        }

        .min-hgt-500px {
            min-height: 500px;
        }

        .candidate-modal-textarea {
            height: 500px;
            width: 100%;
            resize: none;
            background: #ffff !important;
            border: 1px solid #2a374d !important;
            padding: 18px;
            color: #7D7D7D;
            font-family: 'Quicksand-Medium';
            font-size: 15px !important;
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
                    <div class="full-divmain" >
                        <div class="mb-3 mt-5 profile">
                            <h4 class="profile-name">{{$jobDetail->title}}</h4>
                            <p class="mb-0">Type de structure : garderie</p>
                            <p class="">Municipalisé</p>
                        </div>
                        <div>
                            <a href="{{route('searchjob')}}" class="btn-recruit btn">RECRUTER</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="{{asset('frontend/images/home.svg')}}" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">{{$jobDetail->country}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="{{asset('frontend/images/group100.svg')}}" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">{{$jobDetail->city}}</option>
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
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-homNotre institutione" aria-selected="true">Les postulants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-editoffer-tab" data-toggle="pill" href="#editoffer" role="tab" aria-controls="pills-homNotre institutione" aria-selected="true">Editer</a>
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
                                        <a href="#editoffer" class="btn post-an-btn mt-4 mb-5 editer-offer">Editer</a>
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
                                                <a href="{{route('candidatePortfolio')}}" class="mr-3 btn btn-viewjob offer-application ">Voir le profil
                                                    Apilink</a> 
                                                
                                                <button id="trigger" class="btn btn-apply offer-application" {{$job->document_name == "" ? 'disabled' : ''}}>Voir le CV</button>
                                           
                                                <div style="display:none">
                                                    <iframe id="dialog" src="{{asset($job->document_name)}}"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center">No Job Data Found!..</p>
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
                                <form action="{{route('acceptJobDetails')}}" method="post">
                                    @csrf
                                    @if($applyJob)
                                    @foreach($applyJob as $job)
                                    <div class="job-card ">
                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <div class="offer2-text d-flex">
                                                    <div class="custom-edit-radio">
                                                        <div class="custom-control custom-radio">
                                                            <input type="hidden" name="job_id" data-id="{{$job->job_id}}" id="job_id">
                                                            <input type="hidden" name="user_id" user_id="{{$job->user_id}}" id="user_id">
                                                            <input type="radio" name="jobCheck" checked id="customRadio1" name="customRadio" class="custom-control-input">

                                                            <div class="div-edit-radio"></div>
                                                            <label class="check-labels">
                                                                <img src="{{asset('frontend/images/project/dark-white-check.svg')}}">
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="ml-offer-edit">
                                                        <p class="mb-0 offer-app-one">{{$job->user->first_name}}{{$job->user->last_name}}</p>
                                                        <p class="mb-0 offer-app-sec">Educateur Jeunes enfants</p>
                                                        <p class="mb-0 offer-app-sec">{{$jobDetail->minimum_experience}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 mt-2">
                                                <div class="float-right">
                                                    <a href="javacript:void(0);" job-id="{{$job->job_id}}" user-id="{{$job->user_id}}" class="btn btn-light-accept" data-toggle="modal" data-target="#message-modal">
                                                        Accepter
                                                    </a>
                                                    <a href="javacript:void(0);" job-id="{{$job->job_id}}" user-id="{{$job->user_id}}" class="btn btn-blue-refuse" data-toggle="modal" data-target="#refusal-modal">
                                                        Refuser
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </form>

                            </div>
                            @endforeach
                            @else
                            <p class="text-center">No Job Data Found!..</p>
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

        <!-- modal-message start -->

        <div class="modal fade modal-back-blue" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header resume_header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                        </button>
                    </div>
                    <div class="modal-body bravo-body padding-taper">
                        <div class="text-center">
                            <div class="taper-text">
                                <p>Taper votre message pour accepter le(s) candidat(s)</p>
                                <span class="pink-border-span"></span>
                            </div>
                            <div class="form-messages">
                                <div class="form-group">
                                    <textarea class="form-control modal-textarea" id="message">Bonjour,Nous</textarea>
                                </div>
                            </div>
                            <div>
                                <a data-dismiss="modal" data-toggle="modal" href="#message-modal"><button class="tosend-btn btn accept"> Envoyer</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- modal message-second start -->

        <div class="modal fade modal-back-blue" id="refusal-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header resume_header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                        </button>
                    </div>
                    <div class="modal-body bravo-body padding-taper">
                        <div class="text-center">
                            <div class="taper-text">
                                <p>Taper votre message de refus au(x) candidat(s)</p>
                                <span class="pink-border-span"></span>
                            </div>
                            <div class="form-messages">
                                <div class="form-group">
                                    <textarea class="form-control modal-textarea">Bonjour ,
                                             Nous sommes dans le regret 
                                              de refuser votre candidature  ! </textarea>
                                </div>
                            </div>
                            <div>
                                <a data-dismiss="modal" data-toggle="modal" href="#refusal-modal"> <button class="tosend-btn btn"> Envoyer </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript ">
    $(".select2 ").select2();
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
    $("#trigger").click(function() {
        var myIframe = document.getElementById("dialog").contentWindow;
        myIframe.focus();
        myIframe.print();
        return false;
    });
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



    $(document).on("click", ".tosend-btn", function() {
        var job_id = $('#job_id').attr("data-id");
        var user_id = $('#user_id').attr("user_id");
        var message = $('#message').val();

        $.ajax({
            url: "{{ route('acceptJobDetails') }}",
            method: "POST",
            data: {
                'jobid': job_id,
                'userid': user_id,
                'message': message,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success == true) {
                    console.log(response);
                    toastr.success(response.message);
                    $('#message-modal').modal('hide');
                    $('#refusal-modal').modal('hide');
                }
            }
        });

    });
</script>

</html>