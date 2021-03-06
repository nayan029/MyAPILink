@extends('frontend.master')
@section('title')
<title>ApiLink | SearchJob</title>
@endsection
@section('content')
<style>
    .modal-textareas {
        width: 100%;
        resize: none;
        padding: 20px 25px;
    }
</style>
<section class="search-bg" style="background-image: url(frontend/images/project/profile-background.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="vacancies-text">
                    <h2 class="text-center">Nos offres d'emploi</h2>
                </div>
                <form method="POST" action="{{route('searchjob')}}" onsubmit="return validation()">
                    @csrf
                    <div class="vacancies-search">
                        <div class="row m-0">
                            <div class="col-md-9 p-0">
                                <div class="with-icon search-btn-hide">
                                    <div class="yellow-line"></div>
                                    <img class="icon-img res-icon" src="frontend/images/search.svg">
                                    <input type="text" name="searchtext" id="searchtext" class="form-control fn-form" placeholder="Titre du poste, mots clés ou entreprise..">
                                    <span style="color: #ea5455;font-size: 0.857rem;" id="searchtexterror">
                                </div>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="emp-btn-end">
                                    <button type="submit" id="submitbtn1" class="btn-find-job btn p-2">Trouver des emplois</butto>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div class="location-input">
                                <img src="frontend/images/project/location.svg" class="location-img" alt="location">
                                <input class="form-control loaction-control" placeholder="Localisation actuel">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div class="min-max-km search-km">
                                <div class="min-div">
                                    <span name="min"></span>km
                                </div>
                                <div id="slider" class="search-slider"></div>
                                <div class="min-div">
                                    <span name="max"></span>km
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="found-offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="found-text">
                    <h2 class="text-center mt-3">NOUS AVONS TROUVÉ 120 OFFRES D'EMPLOI</h2>
                </div>
                <form action="{{route('searchjob')}}" method="POST" onsubmit="return filtervalidation()">
                    @csrf
                    <div class="cusdrop-list">
                        <div class="position-type change-placeholder-select type-width">
                            <select title="Basic example" multiple="multiple" name="typeofContract[]" id="typeofContract" class="select-multi">
                                <!-- <option value="">Type Of Contract</option> -->
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Stages">Stages</option>
                                <option value="Alternance">Alternance</option>
                                <option value="IFreelance / Indépendant">IFreelance / Indépendant</option>
                                <option value="Remplaçements">Remplaçements</option>
                            </select>
                            <span style="color: #ea5455;font-size: 0.857rem;" id="typeofContracterror">
                        </div>
                        <div class="diplo-drop icon-none type-width ">
                            <select class="select2 " id="cmbIdioma2">
                                <option value="option1" selected>Catégories</option>
                                <option value="option1">compétences pédagogiques</option>
                                <option value="option2">compétences médicales</option>
                                <option value="option3">compétences techniques</option>
                            </select>
                        </div>
                        <div class="position-type post-placeholder-select type-width">
                            <select title="Basic example" multiple="multiple" name="example-basic" class="select-multi">
                                <option value="option1">Crèche collective</option>
                                <option value="option2">Crèche multi-accueil</option>
                                <option value="option3">Halte garderie</option>
                                <option value="option4">Crèche municipale</option>
                                <option value="option5">Jardin d’enfants</option>
                                <option value="option6">Micro-crèche</option>
                                <option value="option7">Crèche parentale</option>
                                <option value="option8">Crèche privée d’entreprise</option>
                                <option value="option9">Psychomotricienne - Psychomotricien</option>
                                <option value="option10">Crèche associative</option>
                            </select>
                        </div>
                        <div class="diplo-drop type-width ">
                            <select class="select2 " id="cmbIdioma">
                                <option value="option1" selected>Diplômes</option>
                                <option value="option7">Éducateur de jeunes enfants</option>
                                <option value="option1">Auxiliaire de puériculture</option>
                                <option value="option2">Diplôme d’État d’infirmière</option>
                                <option value="option3">Diplôme d’État de Puériculture</option>
                                <option value="option4">CAP Petite enfance</option>
                                <option value="option5">CAP Accompagnant éducatif Petite enfance</option>
                                <option value="option6">Formation d’Assistante maternelle</option>
                                <option value="option5">BAFA</option>
                                <option value="option6">Autres</option>
                            </select>
                        </div>
                        <div class="type-width">
                            <button type="submit" class="btn btn-yellow filters-btns ml-4" id="submitbtn2">Appliquer les filtres</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container">
        <div>
            <div class="row justify-content-center">
                <!-- <div class="col-md-12 ">
                    <div class="text-right pb-4">
                        <div class="btn-group">
                            <button class="btn btn-outline-blue btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Trier par
                            </button>
                            <div class="dropdown-menu">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-10 padding-search">
                    <div class="">
                        <div class="card-pd">
                            @if(count($list)>0)
                            @foreach($list as $data)
                            @php
                            $isApplyed = $data->applyJob!="" ? "disabled":"";
                            $createDate = date('d-m-Y',strtotime($data->created_at));
                            $now = date('d-m-Y');
                            $diff = strtotime($createDate) - strtotime($now);
                            $finalDays = abs(round($diff / 86400));
                            $saveJob = $data->savedJob!=null && count($data->savedJob)>0 ? $data->savedJob[0]->job_save : '';
                            @endphp
                            <div class="job-card">
                                <div class="d-flex justify-content-between mb-4 ">
                                    <div>
                                        <h5 class="mb-0 job_aux_text">{{$data->title}}</h5>
                                        <p class="mb-0 job_cre_text">{{$data->address}}</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="public-span">Publié il y a {{$finalDays}} jours</span>
                                        <input type="hidden" name="job_id" id="job_id">
                                        <input type="hidden" name="user_id" id="user_id">
                                        <button id="saveclass{{$data->id}}" class="btn fav-btn save-fav" type="button" data-job="{{$data->id}}" data-user="{{$data->user_id}}" data-rowid="{{$data->id}}">
                                            <img id="saveicon{{$data->id}}" src="{{$saveJob=='1' ? 'frontend/images/imgs-svg/book-mark-yellow.svg' : 'frontend/images/bookmark.svg'}}" alt="bookmark image " class="b1 bookmark-img">
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <ul class="search-image-ul">
                                            <li>
                                                <p class="mb-0 ">Montpellier (34)</p>
                                            </li>
                                            <li>
                                                <p class="mb-0 ">{{$data->minimum_gross_salary}}€ par mois</p>
                                            </li>
                                            <li>
                                                <p class="mb-0 ">Expérience : {{$data->minimum_experience}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 mt-2 align-items-end d-flex justify-content-end">
                                        <div class="d-flex">
                                            <a href="{{route('details-job',$data->id)}}" class="btn btn-viewjob ">Voir l’offre</a>
                                            <button class="btn btn-apply" @if($data->applyJob != '') @else onclick="openJobModal('{{$data->id}}','{{$data->user_id}}')" @endif {{$isApplyed}}>Postuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="job-card">
                                <p class="text-center">No Data Available.</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="custom-pagination pt-5 pb-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $list->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
                </button>
            </div>
            <div class="modal-body resume_modal">
                <div class="candidate_modal">
                    <h4 class="mb-3">Lettre de motivation</h4>
                    <div class="candidate_modal_title">
                        <h5 class="candidate_modal_text pb-2">Description</h5>
                        <div class="candidate_modal_desc">
                            <textarea id="jobdesc" class="modal-textareas" rows="8"></textarea>
                        </div>
                        <div class="text-right pt-4 pb-3">
                            <a href="javascript:void(0)" class="btn btn-blue ml-auto skip-btn tele-modal-btn">
                                Passer cette étape</a>
                            <a href="javascript:void(0)" class="btn btn-blue ml-3 ok-btn tele-modal-btn">
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
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
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
                                    <td style="width: 0px;">

                                        <input type="radio" onclick="getcv();" value="{{auth()->guard('web')->user()->cv}}" name="applay_cv">

                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                            <p class="mb-0"> Uploded cv.pdf</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{url(''.auth()->guard('web')->user()->cv)}}" download="{{auth()->guard('web')->user()->cv}}"><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                    </td>
                                </tr>
                                @foreach($candidateCV as $cv)
                                <tr>
                                    <td style="width: 0px;">
                                        <input type="radio" onclick="getcv();" name="applay_cv" value="{{$cv->cv}}">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px" class="mr-3">
                                            <p class="mb-0"> Uploded cv.pdf</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{url(''.$cv->cv)}}" download="{{$cv->cv}}"><img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img"></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h4 class="ou_text border-modal">Ou télécharger un nouveau cv </h4>
                    </div>
                    <div class="upload-drop-btns">
                        <form method="POST" id="mainForm" class="d-content" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <button class="btn btn-modals-blue mb-0 cv-radius btn-tele position-relative" id="cv-btn" type="button"><img src="frontend/images/project/feather-download.svg" alt="download" class="mr-3">
                                <input type="file" class="upload-modal-cv" name="document_name" id="document_name">
                                Télécharger un cv </button>
                            <span class="text-danger" id="document_name-error"></span>
                            <input type="hidden" name="pdf_name" id="pdf_name">
                            <button type="button" class="btn btna-oky mt-5 bravo-btn" id="byResume" value="1">Ok</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script>
    function validation() {
        $('#submitbtn1').attr('disabled', 'disabled');
        var temp = 0;
        var f = 0;
        var searchtext = $('#searchtext').val();
        if (searchtext.trim() == '') {
            $('#searchtexterror').html('Please search job title ,keywords or company');
            temp++;
            f++;
            if (f == 1) {
                $('#searchtext').focus()
            }
        } else {
            $('#searchtexterror').html('');
        }
        if (temp == 0) {
            return true;
        } else {
            $('#submitbtn1').removeAttr('disabled');
            return false;
        }
    }
</script>
<script>
    function filtervalidation() {
        $('#submitbtn2').attr('disabled', 'disabled');
        var temp = 0;
        var f = 0;
        var typeofContract = $('#typeofContract').val().length;
        if (typeofContract == 0) {
            $('#typeofContracterror').html('Please select Type Of Contract');
            temp++;
            f++;
            if (f == 1) {
                $('#typeofContract').focus()
            }
        } else {
            $('#typeofContracterror').html('');
        }
        if (temp == 0) {
            return true;
        } else {
            $('#submitbtn1').removeAttr('disabled');
            return false;
        }
    }
</script>
<script type="text/javascript">
    $('#establishment').modal('hide');
    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
    var count = 0;

    function openJobModal(job_id, user_id) {
        $('#jobid').val(job_id);
        $('#userid').val(user_id);
        $('#establishment').modal('show');
        count++;
    }
    var view = 0;
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

    function getcv() {

        $("#pdf_name").val($('input[name="applay_cv"]:checked').val());
    }
    $(document).on("click", "#byResume,#bravo-btn", function() {
        var type = $(this).val();
        var jobid = $('#jobid').val();
        var userid = $('#userid').val();
        var document_name = $('#pdf_name').val();
        var jobdesc = $('textarea#jobdesc').val();

        var temp = 0;
        regex = new RegExp("(.*?)\.(pdf|docs|docx)$");
        if (document_name != "") {
            if (!(regex.test(document_name))) {
                $('#document_name-error').html("Only PDF, DOCS and DOCX docs are allowed");
                temp = 1;
            }
        } else {
            $('#document_name-error').html("");
            temp = 0;
        }
        if (temp == 0) {
            $('#document_name-error').html("");
            $.ajax({
                url: "{{ route('store-jobType') }}",
                method: "POST",
                data: {
                    'type': type,
                    'jobid': jobid,
                    'userid': userid,
                    'document_name': document_name,
                    'desc': jobdesc,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success == true) {
                        toastr.success(response.message);
                        $('#establishment').modal('hide');
                        $('#tele-modal').modal('hide');
                        $('#bravo').modal('show');
                        location.reload();
                    } else {
                        $('#document_name-error').html(response.errors.document_name);
                    }
                }
            });
        }
    });
    // $(".bravo-btn").on('click', function() {
    //     $('#establishment').modal('hide');
    //     $('#bravo').modal('show');
    // });
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
    // $(".bravo-btn").on('click', function() {
    //     $('#tele-modal').modal('hide');
    //     $('#bravo').modal('show');
    //     setTimeout(function() {
    //         $('body').addClass('modal-open');
    //     }, 500);
    // });
    $(document).on("click", ".save-fav", function() {
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
</script>
@endsection
</body>

</html>