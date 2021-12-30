@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection

@section('content')

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
                        <img src="{{asset('frontend/images/project/mont1.svg')}}" alt="profile image">

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full-divmain">
                        <div class="mb-3 mt-5 profile">
                            <h4 class="profile-name">Nom de l’institution</h4>
                            <p class="mb-0">Type de structure : garderie</p>
                            <p class="">Municipalisé</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="images/home.svg" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">Paris</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group mb-3">
                                <img src="images/group100.svg" class="drop-icon">
                                <div class="applicants-drop bg-dropdown">
                                    <select class="form-control input-drop bg-transparent">
                                        <option value="">Île de France</option>
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
                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-homNotre institutione" aria-selected="true">Notre institution</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="progress-main mt-2">
                                <span>Mon profil rempli</span>
                                <div class="profile-progress">
                                    <div class="progress">
                                        <div class="progress-bar" style="width:60%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <form action="{{ route('manager-register-step-two-insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="tab-content sr-tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <section class="prof-backsec">
                    <div class="container">
                        <div class="card sr-card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="form-group sr-pos">
                                            <div class="upload-file-input">
                                                <label>Notre projet pédagogique</label>
                                                <input id="uploadFile" value="" class="form-add-establish w-100 inputicon2" disabled>
                                                <div class="fileUpload btn btn-primary attach-file">
                                                    <span><i class="fa fa-paperclip mr-2"></i>Attacher un
                                                        document</span>
                                                    <input id="uploadBtn" type="file" name="document[]" multiple class="upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <section>
                                          
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12 p-0">
                                                            <div class="form-group mt-3">
                                                                <label class="control-label">Attachez vos
                                                                    documents, relatifs à votre structure pour
                                                                    plus d’informations</label>
                                                                <div class="preview-zone hidden">
                                                                    <div class="box box-solid">
                                                                        <div class="box-body"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-wrapper">
                                                                    <div class="dropzone-desc">
                                                                        <img src="{{asset('frontend/images/profile-feather-upload.svg')}}" width="30px" class="mb-1">
                                                                        <!-- <i class="glyphicon glyphicon-download-alt"></i> -->
                                                                        <p>Drag and drop here or<span style="color:#192842;font-family: 'Quicksand-Bold'">
                                                                                Browse</span> </p>
                                                                    </div>
                                                                    <input type="file" name="more_infomation[]" multiple class="dropzone">
                                                                <input type="hidden" name="user_id" value="{{$id}}" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            
                                        </section>
                                        <div class="border-grays mt-3"></div>

                                        <div class="cher-text">
                                            <p>Chère Madame, Cher Monsieur,</p>
                                            <p>
                                                Nous vous proposons un rendez-vous téléphonique avec un membre de notre équipe afin de vous présenter nos services, étayer ensemble vos besoins, et y répondre au mieux.
                                            </p>
                                        </div>

                                        <div class="text-center je-btn-pd">
                                            <button type="submit" data-dismiss="modal" data-toggle="modal" data-target="#appointment3" class="btn btn-yellow">Je prends un rendez-vous</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
            </div>
        </div>
        </form>
        <!-- modal appointment popup-3-->
        <div class="modal modal-back-blue fade" id="appointment3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog center-modal-dialog" role="document">
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
                                <p class="modalappoint-text">Un conseiller Apilink vous contactera <br>par email pour prendre un
                                    <br> rendez vous téléphonique
                                </p>
                            </div>
                            <div class="mt-4 mb-2">
                                <a href="view-establishment-account-2.html" class="btn btn-white modal-appointment-ok">Ok</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->



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

    //---------------
    $(document).ready(function() {
        document.getElementById("uploadBtn").onchange = function() {
            document.getElementById("uploadFile").value = this.value;
        };
    });
</script>
@endsection
</body>

</html>