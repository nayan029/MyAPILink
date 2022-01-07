@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection
@section('content')

<div id="after-header"></div>

<section class="search-bg find-candidatebg" style="background-image: url({{url('frontend/images/find-candidate-bg.png')}})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="vacancies-search">
                    <div class="row m-0">
                        <div class="col-md-9 p-0">
                            <div class="with-icon search-btn-hide">
                                <div class="yellow-line"></div>
                                <img class="icon-img res-icon" src="{{url('frontend/images/search.svg')}}">
                                <input type="text" name="candidate" id="candidate" class="form-control fn-form" placeholder="Titre du poste, mots clés ou entreprise..">
                                <span id="candidate-error" class="text-danger"> </span>
                            </div>
                        </div>
                        <div class="col-md-3 p-0">
                            <div class="emp-btn-end">
                                <button type="submit" class="btn p-2 fc-trouverbtn">Trouver des candidats</butto>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div class="location-input find-location">
                                <img src="{{url('frontend/images/project/location.svg')}}" class="location-img" alt="location">
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
<section class="back-f6">
    <div class="found-offer">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-11">
                    <div class="found-text">
                        <h2 class="text-center">Les profils de candidats</h2>
                    </div>
                    <form action="javascript:void(0);" method="post" id="candidate_search_form"></form>
                    <div class="cusdrop-list">
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2" name="availablity" id="availablity">
                                <option value="Disponibilité">Disponibilité</option>
                                <option value="Immédiate">Immédiate</option>
                                <option value="1 mois">1 mois</option>
                                <option value="2 mois">2 mois</option>
                                <option value="3 mois">3 mois</option>
                                <option value="Dès que Possible">Dès que Possible</option>
                            </select>
                            <span id="availablity-error" class="text-danger"></span>
                        </div>
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2" name="position_type" id="position_type">
                                <option value="Type de poste" selected>Type de poste</option>
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Stages">Stages</option>
                                <option value="Remplacements">Remplacements</option>
                                <option value="Indépendants">Indépendants</option>
                            </select>
                            <span id="position_type-error" class="text-danger"></span>
                        </div>


                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2" name="experiences" id="experiences">
                                <option value="Expériences" selected>Expériences</option>
                                <option value="1 - 2 ans">1 - 2 ans</option>
                                <option value="3 - 5 ans">3 - 5 ans</option>
                                <option value="5 - 10 ans">5 - 10 ans</option>
                                <option value="+ de 10 ans">+ de 10 ans</option>
                            </select>
                            <span id="experiences-error" class="text-danger"></span>
                        </div>
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2" name="diplomas" id="diplomas">
                                <option value="Diplômes" selected>Diplômes</option>
                                <option value="Éducateur de jeunes enfants">Éducateur de jeunes enfants</option>
                                <option value="Auxiliaire de puériculture">Auxiliaire de puériculture</option>
                                <option value="Diplôme d’État d’infirmière">Diplôme d’État d’infirmière</option>
                                <option value="Diplôme d’État de Puériculture">Diplôme d’État de Puériculture</option>
                                <option value="CAP Petite enfance">CAP Petite enfance</option>
                                <option value="CAP Accompagnant éducatif Petite enfance">CAP Accompagnant éducatif Petite enfance</option>
                                <option value="Formation d’Assistante maternelle">Formation d’Assistante maternelle</option>
                                <option value="CBAFA">CBAFA</option>
                                <option value="Autres">Autres</option>
                            </select>
                            <span id="diplomas-error" class="text-danger"></span>
                        </div>
                        <div class="type-width">
                            <button type="submit" class="btn btn-yellow filters-btns">Appliquer les filtres</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row application_card pt-2 pb-4 mx-0 candidate-card">
                @foreach($candidateList as $value)

                <div class="col-xl-3 col-lg-4 col-md-4 mb-60">
                    <div class="card sr-card">
                        <div class="card-body candidate-card-body">
                            <div class="disponsible">
                                <div class="disponsibleinner">
                                    <span><img src="{{url('frontend/images/imgs-svg/disponsible-dot.svg')}}" alt="" class="mr-2"></span> Disponible
                                </div>

                            </div>
                            <div class="text-center">
                                <div class="application-profile">
                                    <img src="{{url('frontend/images/imgs-svg/image-line-svg.svg')}}" alt="application-line" class="view-profile-line">
                                    @if(!empty($value->profile_photo_path))
                                    <img src="{{url(''.$value->profile_photo_path)}}" alt="application-profile" class="view-application-pic">
                                    @else
                                    <img src="{{url('frontend/images/imgs-svg/app1.svg')}}" alt="application-profile" class="view-application-pic">
                                    @endif
                                </div>
                                <div class="candidate-card_content mt-2">
                                    <h5 class="bluefelix-text">{{$value->first_name}} {{$value->last_name}}</h5>
                                    <p class=" candidate-loc"><img src="{{url('frontend/images/map-gray.svg')}}" class="map_job mr-2" alt="map">{{$value->city}}</p>
                                    <!--job_location-->
                                    <p class="auxiliaire-text">Auxiliaire de Puériculture</p>

                                    <div class="candidate-exp ">
                                        <p>Expérience. : <span>{{$value->experiences_of}}</span></p>
                                        <p>Groupe avec exp. :<span>{{$value->experiences_at}}</span></p>
                                    </div>
                                </div>
                                <div class="application_btn ">
                                    <a href="{{route('candidate-details',$value->id)}}" class="btn btn-blue find-canbtn">Voir le
                                        profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </div>

</section>
@endsection
@section('script')
<script>
    $(document).on('click', '.fc-trouverbtn', function() {
        var temp = 0;

        var title = $('#candidate').val();
        if (title == "") {
            $('#candidate-error').html('Please search job title ,keywords or company');
            temp++
        } else {
            $('#candidate-error').html('');
        }

        if (temp == 0) {
            return true;
        } else {
            return false;
        }
    });

    $(document).on('click', '.filters-btns', function() {
        var formData = $('#candidate_search_form').serialize();

        $.ajax({
            url: "{{route('candidate.data')}}?" + formData,
            method: "get"
        });
    });
</script>
@endsection
</body>

</html>