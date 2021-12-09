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
                                    <div>
                                        <h5 class="mb-0 job_aux_text">Auxiliaire Puéricultrice . CDI</h5>
                                        <p class="mb-0 job_cre_text">Crèche du bonheur</p>
                                    </div>

                                    <span class="public-span mr-4">Publié il y a 5 jours<img src="frontend/images/bookmark.svg " alt="bookmark image " class="ml-3 bookmark-img"></span>
                                </div>

                                <div class="job-information">
                                    <h4 class="job-info-text">Informations sur le poste</h4>
                                    <ul class="search-image-ul">

                                        <li>
                                            <p class="mb-0 ">1 350 € par mois</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 ">Expérience : Minimum 2 ans</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 ">Durée du contrat : 2 ans et plus</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 "> Type d 'emploi : temps plein</p>
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-light" data-toggle="modal" data-target="#establishment">Postuler avec mon profil</button>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4 mt-2 ">
                                        <div>
                                            <h5 class="mb-0 ul_check_color ">Site internet</h5>
                                            <p class="mb-0 www-text mb-2">www. crechedubonheur.fr</p>
                                        </div>

                                        <a class="btn establishment-btn" href="institution-view-applicants.html">Voir la fiche de
                                            l’établissement</a>
                                    </div>
                                </div>
                            </div>

                            <div class="border-grays"></div>

                            <div class="pb-4 listing-side-pd ">
                                <div class="job-infosdetail mb-4">
                                    <h5 class="job-infos-title">Description</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="job-infosdetail mb-4">
                                    <h5 class="job-infos-title">Mission</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <ul class="job-infos-li">
                                        <li>Lorem Ipsum is simply dummy text</li>
                                        <li>Lorem Ipsum is simply dummy </li>
                                        <li>Lorem Ipsum is simply dummy </li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and</li>
                                    </ul>
                                </div>
                                <div class="job-infosdetail mb-4">
                                    <h5 class="job-infos-title">Que recherchons-nous ?</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <ul class="job-infos-li">
                                        <li>Lorem Ipsum is simply dummy text</li>
                                        <li>Lorem Ipsum is simply dummy </li>
                                        <li>Lorem Ipsum is simply dummy </li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and</li>
                                    </ul>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between listing-side-pd  mb-4 ">
                                <div class="pb-5">
                                    <h5 class="mb-0 job-location fn-19 ">Lieu du poste</h5>
                                    <p class="mb-0 www-text">34 avenue Charles de Gaulle</p>
                                    <p class="mb-0 www-text mb-2">Montpellier (34)</p>
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

<div class="modal fade modal-back-blue" id="establishment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog center-modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content m-32">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
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
                            <button class="btn btn-modals-blue cv-radius" id="cv-btn" type="button"><img src="frontend/images/project/feather-download.svg" alt="download" class="mr-3">Télécharger et envoyer mon cv</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bravo modal -->
<div class="modal fade modal-back-blue" id="bravo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software
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
@endsection

@section('script')
<script type="text/javascript">
    $("#bravo-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#cv-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
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
</script>
@endsection
</body>

</html>