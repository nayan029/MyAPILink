@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')
<section class="hero-index" style="background-image: linear-gradient(180deg, rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), url('frontend/images/index-bg.png');opacity: 0.8;">
            <div class="index-gradient"></div>
            <div class="container">
                <div class="middle_text text-center">
                    <h1>VOS COMPÉTENCES AU SERVICE DE LA PETITE ENFANCE</h1>
                    <p>CDI - CDD - stage - alternance - indépendant - remplacement</p>
                    <div class="jesuis_btn_text">
                        <button class="btn btn-home-pink " data-toggle="modal" data-target="#Modallogin1">JE SUIS UN
                            CANDIDAT</button>
                        <a href="establishment-registration.html" class="btn btn-home-blue ">JE SUIS UN ÉTABLISSEMENT PETITE
                            ENFANCE</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="index_section_bg" style="background-image: url('frontend/images/register-bg2.png');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class=" discover_text color2a">Nos avantages</h3>
                    </div>
                </div>
                @if($widget)
                <ul class="nos-avantages-ul">
                    @foreach($widget as $wt)
                        @if($wt->slug=='our_advantages')
                            @php $circle = ($wt->id%2==0)?'img_discover':'img_discover'; @endphp
                            <li>
                                <div class="discover_card index-our">
                                    <div class="{{$circle}}">
                                        <img src="{{asset($wt->image)}} ">
                                    </div>
                                    <div class=" text-center ">
                                        <h4 class="mt-3 mb-3 color2a">
                                            {{$wt->title}}
                                        </h4>
                                        <div class="access_details">
                                            <p class="access_p ">{!! $wt->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    @endif
                    @endforeach
                </ul>
                @endif
                <div class="row ">
                    <div class="col-md-12 text-center">
                        <h3 class=" discover_text color2a">Notre valeur ajoutée</h3>
                    </div>
                </div>
                @if($widget)
                <ul class="nos-avantages-ul">
                    @foreach($widget as $wt)
                    @if($wt->slug == 'our_added_value')
                    <li>
                        <div class="discover_card index-our">
                            <div class="img_discover ">
                                <img src="{{asset($wt->image)}}">
                            </div>
                            <div class=" text-center ">
                                <h4 class="mt-3 mb-3 color2a">
                                {{$wt->title}}
                                </h4>
                                <div class="access_details">
                                    <p class="access_p ">{!! $wt->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                    @endif

                </ul>
            </div>
        </section>

        <img src="{{asset('frontend/images/skyblue-background.png')}}" alt="back-blue" class="skyblue-img minus-img">
        <section class="light-blue mb-minus-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class=" comment-sec comment-title">Comment ça marche ?</h3>
                    </div>
                </div>
                <div class="text-center pt-5">
                    @if($widget)
                    <ul class="comment-ul d-inline-flex">
                        @foreach($widget as $wt)
                        @if($wt->slug == 'how_it_works')
                        <li>
                            <div class="comment-img">
                                <div class="blue-border">
                                    <img src="{{asset($wt->image)}}" />
                                </div>
                            </div>

                            <div class="comment_ptext">
                                <p>{!!$wt->description!!}</p>
                            </div>
                        </li>
                        @endif
                        @endforeach

                    </ul>
                    @endif
                </div>
            </div>
        </section>

        <img src="{{asset('frontend/images/darkblue-back2.png')}}" alt="" class="darkblue-img">
        <section class="nos_bg">
            <div class="nos-hgt">
                <img src="{{asset('frontend/images/nos-bg.png')}}" class="w-100 nos-imgs-res" />
            </div>
            <div class="mt-nos-minus">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            <h3 class="nos_text comment-sec comment-title">Les professionnels que nous recrutons</h3>

                        </div>
                        <div class="col-md-12 les1-sec text-center">
                            <p>Parce que l’ensemble des compétences sont nécessaires au bon fonctionnement d’une institution petite enfance<br><br>Vous trouvez sur Apilink</p>
                        </div>
                    </div>
                    <div class="row les-professional-sec">
                        <div class="col-md-4">
                            <div class="card sr-card">
                                <img class="card-img-top nos_card_image" src="{{asset('frontend/images/card-1img.png')}}" alt="man-writing">
                                <div class="card-body sheight">
                                    <a href="#" data-toggle="modal" data-target="#Modaljob-desc">
                                        <h6 class="card-title color1">COMPÉTENCES PLURIDISCIPLINAIRES</h6>
                                        <ul class="les-professional-ul">
                                            <li>- Directrice - Directeur de crèche </li>
                                            <li>- Directrice - Directeur adjoint</li>
                                            <li>- Coordinatrice - coordinateur de crèche</li>
                                            <li>- Auxiliaire de puériculture - Auxiliaire de crèche </li>
                                            <li>- Auxiliaire petite enfance (APE)</li>
                                            <li> - Educateur de jeunes enfants (EJE) Puéricultrice
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card sr-card">
                                <img class="card-img-top nos_card_image" src="{{asset('frontend/images/card-2img.png')}}" alt="man-writing">
                                <div class="card-body sheight">
                                    <a href="#">
                                        <h6 class="card-title color1">PROFESSIONNELS DE SANTÉ</h6>
                                        <ul class="les-professional-ul">
                                            <li>- Pédiatre </li>
                                            <li>- Psychologue </li>
                                            <li>- Psychométricien </li>
                                            <li>- Infirmière - infirmier</li>

                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card sr-card">
                                <img class="card-img-top nos_card_image" src="{{asset('frontend/images/card1-new.png')}}" alt="man-writing">
                                <div class="card-body sheight">
                                    <a href="#">
                                        <h6 class="card-title color1">AGENTS TECHNIQUE</h6>
                                        <ul class="les-professional-ul">
                                            <li>- Cuisinière - Cuisinier </li>
                                            <li>- Agents d'entretien </li>
                                            <li>- Lingère, blanchisserie, couture</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-minus-200">

            <img src="{{asset('frontend/images/darkblue3.png')}}" alt="" class="w-100">
            <div class="container">
                <div>
                    <div class="row mt-minus1 vous-cher">
                        <div class="col-md-12 text-center">
                            <h2 class=" comment-sec">VOUS CHERCHEZ UN EMPLOI DANS LE <br>SECTEUR DE LA PETITE ENFANCE ?</h2>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- <section style="background-image: url(images/group7173.png);" class="index-nous-sec">
        <div class="container">
            <ul class="index-nous1-ul">
                <li>
                    <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>
                    <p>et de rentrer en contact
                        avec des établissements d’accueil du jeune enfant, proche de chez vous.</p>
                </li>
                <li>
                    <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>
                    <p>et de rentrer en contact
                        avec des établissements d’accueil du jeune enfant, proche de chez vous.</p>
                </li>
                <li>
                    <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>
                    <p>et de rentrer en contact
                        avec des établissements d’accueil du jeune enfant, proche de chez vous.</p>
                </li>

            </ul>
        </div>
    </section> -->




        <section class="subscribe_pd index-nous-sec" style="background-image: url('frontend/images/group7173.png');">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul class="index-nous1-ul">
                        <li>
                            <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>
                            <p>et de rentrer en contact avec des établissements d’accueil du jeune enfant, proche de chez vous.</p>
                        </li>
                        <li>
                            <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>

                        </li>
                        <li>
                            <h4>Nous vous offrons la possibilité de mettre en valeur vos compétences </h4>

                        </li>

                    </ul>
                </div>
                <div class="subscribe_text text-center">
                    <h1 class="subscribe_h1 mb-3">Abonnez-vous à notre newsletter</h1>
                    <!-- <p class="subscribe_p pb-4">Annoncez vos offres d'emploi à des millions d'utilisateurs mensuels <br>et
                    recherchez 15,8 millions de CV dans notre base de données.</p> -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="sub-input">
                                <div class="form-group">
                                    <input value="" class="inputicon2" placeholder="Inscrivez-vous pour des offres spéciales">
                                    <div class="btn-subscribe">
                                        <button class="btn btn-blue">S'ABONNER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection