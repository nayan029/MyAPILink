@extends('frontend.master')
@section('title')
<title>ApiLink | SeeJob</title>
@endsection
@section('content')
<section class="listing-section back-f6">
    <div class="listing-details">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3 ml-3">
                        <a href="" class="back link_a">
                            <span><i class="fa fa-angle-left mr-2"></i></span>Retour à mes offres d'emploi
                        </a>
                    </div>
                    <div class="card sr-card">
                        <div class="card-body">
                            <div class="listing-side-pd">
                                <div class="d-flex justify-content-between mb-4 ">

                                    @php
                                    $createDate = date('d-m-Y',strtotime($showList->created_at));
                                    $now = date('d-m-Y');
                                    $diff = strtotime($createDate) - strtotime($now);
                                    $finalDays = abs(round($diff / 86400));

                                    $isApplyed = $showList->applyJob!="" ? "disabled":"";
                                    $saveJob = $showList->savedJob ? $showList->savedJob[0]->job_save : '';
                                    $isSaved = $showList->savedJob[0]->job_save=='0' ? "disabled":"";
                                    @endphp
                                    <div>
                                        <h5 class="mb-0 job_aux_text">{{$showList->title}}</h5>
                                        <p class="mb-0 job_cre_text">{{$showList->address}}</p>
                                    </div>

                                    <span class="public-span mr-4 save-fav" data-job="{{$showList->id}}" data-user="{{$showList->user_id}}" data-rowid="{{$showList->id}}">Publié il y a {{$finalDays}} jours<img id="saveicon{{$showList->id}}" src="{{$saveJob=='1' ? asset('frontend/images/imgs-svg/book-mark-yellow.svg') : asset('frontend/images/bookmark.svg')}}" alt="bookmark image " class="ml-3 bookmark-img"></span>

                                </div>

                                <div class="job-information">
                                    <h4 class="job-info-text">Informations sur le poste</h4>
                                    <ul class="search-image-ul">

                                        <li>
                                            <p class="mb-0 ">{{$showList->minimum_gross_salary}} € par mois</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 ">Expérience : Minimum {{$showList->minimum_experience}} ans</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 ">Durée du contrat : {{$showList->contract_length}}</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 "> Type d 'emploi : {{$showList->type_of_employment}}</p>
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-light" data-target="#establishment" onclick="openJobModal()" {{$isApplyed}}>Postuler avec mon profil</button>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4 mt-2 ">
                                        <div>
                                            <h5 class="mb-0 ul_check_color ">Site internet</h5>
                                            <p class="mb-0 www-text mb-2">www. crechedubonheur.fr</p>
                                        </div>

                                        <a class="btn establishment-btn" href="{{route('details-company',$showList->user_id)}}">Voir la fiche de
                                            l’établissement</a>
                                    </div>

                                </div>
                            </div>

                            <div class="border-grays"></div>

                            <div class="pb-4 listing-side-pd ">
                                <div class="job-infosdetail mb-4">
                                    <h5 class="job-infos-title">Description</h5>
                                    <p>{{$showList->job_description}}</p>
                                </div>


                            </div>

                            <div class="d-flex justify-content-between listing-side-pd  mb-4 ">
                                <div class="pb-5">
                                    <h5 class="mb-0 job-location fn-19 ">Lieu du poste</h5>
                                    <p class="mb-0 www-text">{{$showList->address}}</p>
                                </div>
                            </div>

                            <!-- <div class="d-flex justify-content-end listing-side-pd pb-4 offer-prs">
                                    <button class="btn  btn-yellow ">Modifier mon offre</button>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                {{asset('frontend/images/material-close.svg')}}
            </div>
            <div class="modal-body bravo-body">
                <div class="text-center">
                    <div class="bravo-text">
                        <h3>BRAVO !</h3>
                    </div>
                    <div>
                        {{asset('frontend/images/project/green-checkmark.svg')}}
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
                                        <a href=""><img src=" {{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>

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
                                        <a href=""><img src=" {{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src=" {{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
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
@endsection

@section('script')
<script type="text/javascript">
    $("#bravo-btn").on('click', function() {
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

    var favSave = "{{$showList->savedJob[0]->job_save}}";

    if (favSave == '1') {
        $('.public-span').removeClass('save-fav');
    }

    $(document).on("click", '.save-fav', function() {
        var job_id = $(this).data('job');
        var user_id = $(this).data('user');
        var rowid = $(this).data('rowid');

        $.ajax({
            url: "{{route('store-savedjobs')}}",
            method: "POST",
            data: {
                'job_id': job_id,
                'user_id': user_id,

                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    $("#saveicon" + rowid).attr("src", 'frontend/images/imgs-svg/book-mark-yellow.svg');
                    $('#saveicon' + rowid).addClass("b1 bookmark-img");
                    if (response.data.job_save == 0) {
                        $("#saveicon" + rowid).attr("src", 'frontend/images/bookmark.svg');
                        $('#saveicon' + rowid).addClass("b1 bookmark-img");
                    }

                }

            }
        });


    });

    $(document).on("click", "#bravo-btn", function() {
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

    function openJobModal(job_id, user_id) {
        $('#jobid').val(job_id);
        $('#userid').val(user_id);
        $('#establishment').modal('show');
    }
</script>
@endsection
</body>

</html>