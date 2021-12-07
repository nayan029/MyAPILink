@extends('frontend.master')
@section('title')
<title>ApiLink | SearchJob</title>
@endsection
@section('content')
<section class="search-bg" style="background-image: url(frontend/images/project/profile-background.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="vacancies-text">
                    <h2 class="text-center">Nos offres d'emploi</h2>
                </div>
                <div class="vacancies-search">
                    <div class="row m-0">
                        <div class="col-md-9 p-0">
                            <div class="with-icon search-btn-hide">
                                <div class="yellow-line"></div>
                                <img class="icon-img res-icon" src="frontend/images/search.svg">
                                <input type="text" name="" class="form-control fn-form" placeholder="Titre du poste, mots clés ou entreprise..">
                            </div>
                        </div>
                        <div class="col-md-3 p-0">
                            <div class="emp-btn-end">
                                <button class="btn-find-job btn p-2">Trouver des emplois</butto>
                            </div>
                        </div>
                    </div>
                </div>
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

                <div class="cusdrop-list">
                    <div class="position-type change-placeholder-select type-width">
                        <select title="Basic example" multiple="multiple" name="example-basic" class="select-multi">
                            <option value="option1">CDI</option>
                            <option value="option2">CDD</option>
                            <option value="option3">Stages</option>
                            <option value="option4">Alternance</option>
                            <option value="option5">IFreelance / Indépendant</option>
                            <option value="option6">Remplaçements</option>
                        </select>
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
                        <button class="btn btn-yellow filters-btns ml-4">Appliquer les filtres</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div>
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="text-right pb-4">
                        <div class="btn-group">
                            <button class="btn btn-outline-blue btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Trier par
                            </button>
                            <div class="dropdown-menu">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 padding-search">
                    <div class="">
                        <div class="card-pd">
                            <div class="job-card">
                                @foreach($list as $data)
                                <div class="d-flex justify-content-between mb-4 ">
                                    <div>
                                        <h5 class="mb-0 job_aux_text">{{$data->title}}</h5>
                                        <p class="mb-0 job_cre_text">{{$data->address}}</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="public-span">Publié il y a 5 jours</span>
                                        <button class="btn fav-btn" type="button" id="book1"><img src="frontend/images/bookmark.svg " alt="bookmark image " class="b1 bookmark-img"><img src="frontend/images/imgs-svg/book-mark-yellow.svg " alt="bookmark image " class="b2 bookmark-img"></button>
                                    </div>


                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-md-8 ">
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
                                            <a href="listing-details.html" class="btn btn-viewjob ">Voir l’offre</a>
                                            <button data-toggle="modal" data-target="#establishment" class="btn btn-apply ">Postuler</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>





                        </div>
                    </div>

                    <div class="custom-pagination pt-5 pb-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <!-- <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fa fa-angle-left pagination-right"></i></a>
                                    </li> -->
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
</script>
@endsection
</body>

</html>