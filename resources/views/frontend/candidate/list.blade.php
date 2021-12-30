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
                                <input type="text" name="" class="form-control fn-form" placeholder="Titre du poste, mots clés ou entreprise..">
                            </div>
                        </div>
                        <div class="col-md-3 p-0">
                            <div class="emp-btn-end">
                                <button class="btn p-2 fc-trouverbtn">Trouver des candidats</butto>
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





                    <div class="cusdrop-list">
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2 " id="cmbIdioma1">
                                <option value="option1" selected>Disponibilité</option>
                                <option value="option1">Immédiate</option>
                                <option value="option2">1 mois</option>
                                <option value="option3">2 mois</option>
                                <option value="option4">3 mois</option>
                                <option value="option5">Dès que Possible</option>
                            </select>
                        </div>
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2 " id="cmbIdioma2">
                                <option value="option1" selected>Type de poste</option>
                                <option value="option1">CDI</option>
                                <option value="option2">CDD</option>
                                <option value="option3">Stages</option>
                                <option value="option4">Remplacements</option>
                                <option value="option5">Indépendants</option>
                            </select>
                        </div>


                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2 " id="cmbIdioma3">
                                <option value="option1" selected>Expériences</option>
                                <option value="option1">CDI</option>
                                <option value="option2">CDD</option>
                                <option value="option3">Stages</option>
                                <option value="option4">Remplacements</option>
                                <option value="option5">Indépendants</option>
                            </select>
                        </div>
                        <div class="diplo-drop type-width bg-trans">
                            <select class="select2 " id="cmbIdioma">
                                <option value="option1" selected>Diplômes</option>
                                <option value="option1">BAFA</option>
                                <option value="option2">BEP</option>
                                <option value="option3">BAC</option>
                                <option value="option4">LICENCE</option>
                                <option value="option5">MASTER</option>
                            </select>
                        </div>
                        <div class="type-width">
                            <button class="btn btn-yellow filters-btns">Appliquer les filtres</button>
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

@endsection
</body>

</html>