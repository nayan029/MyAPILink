@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection

@section('content')

    <!-- contact-modal -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog login-modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="images/material-close.svg"></span>
            </button>
        </div> -->
                <div class="modal-body login-modal-body">
                    <div class="">
                        <div class="lmodal-logo contact-logo">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5 class="vous_h5 contact-title">Nous contacter
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Prénom"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom de famille"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" id="" rows="8"
                                            class="form-control contact-textarea inputicon2"
                                            placeholder="Votre texte ici…"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12 text-center res-dec mt-3 mb-5 ">
                                    <a href="{{URL::to('/')}}" class="btn btn-blue w-100" style="background:#FFA500;">Poser
                                        une
                                        question</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact modal -->

    <section class="first_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 center-establishment">
                    <div class="register_section">
                        <h1 class="une_h1 mb-4">Une solution sur-mesure pour les institutions de la petite enfance</h1>
                    </div>
                    <h4 class="recruter_h4 mb-3">Recruter avec Apilink, c’est :</h4>
                    <div class="ul_establishment">
                        <ul class="ul_check">
                            <li>Gagner du temps dans les recrutements</li>
                            <li>Accéder uniquement à des ressources qualifiées et expérimentées</li>
                            <li>Donner de la visibilité à votre établissement</li>
                            <li>Mettre en ligne vos annonces</li>
                            <li>Echanger plus facilement avec les candidats</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1 pos_est_rel">
                    <div class="register_card">
                        <div class="card card_establishment">
                            <div class="card-body">
                                <h5 class="vous_h5 text-center">Vous représentez un établissement
                                    d’accueil du jeune enfant ?</h5>

                                <div class="text-center">
                                    <img src="{{asset('frontend/images/home-img.png')}}" alt="home" class="home-register">
                                </div>
                                <p class="ptext_un_api mb-3 text-center">Un conseiller Apilink vous recontacte</p>
                                <div class="text-center">
                                    <a href="{{route('registration')}}" class="btn btn-blue si-login">S’INSCRIRE </a>
                                </div>


                                <div class=" meconnecter pt-5">
                                    <p class="">J’ai déjà un compte <a href="#" class="" data-toggle="modal"
                                            data-target="#Modallogin2"> Me connecter</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index_section_bg" style='background-image: url({{asset("frontend/images/register-bg2.png")}});'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="comment-sec color2a">Nos avantages</h3>
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
                    <h3 class="comment-sec">Nos avantages</h3>
                </div>
            </div>
            @if($widget)
        <ul class="nos-avantages-ul">
            @foreach($widget as $wt)
            @if($wt->slug == 'our_added_value')
            @php $circle = ($wt->id%2==0)?'img_discover':'img_discover'; @endphp
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

    <img src="{{asset('frontend/images/skyblue-background.png')}}" alt="back-blue" class="skyblue-img">
    <section class="light-blue ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class=" discover_text">TROUVEZ INSTANTANÉMENT LE CANDIDAT <br>QU’IL VOUS FAUT !</h2>
                </div>
            </div>
            <div class="text-center pt-5">
            @if($widget)
            <ul class="comment-ul d-inline-flex">
                @foreach($widget as $wt)
                @if($wt->slug == 'how_it_works')
                @php $circle = ($wt->id%2==0)?'blue-border':'pink-border'; @endphp
                <li>
                    <div class="comment-img">
                        <div class="{{$circle}}">
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
        <img src="{{asset('frontend/images/white-img-back.png')}}" alt="back-blue" class="white-img">
    </section>

    <section class="etablissement-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="comment-sec">NOS ÉTABLISSEMENTS PARTENAIRES</h3>
                </div>
                <div class="text-center col-md-12 etablissement-text">
                    <p>Qu’ils soient du domaine public, privé ou associatif, <br>Apilink répond aux
                        besoins de l’ensemble
                        des
                        établissements d’accueil du jeune enfant.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-3 d-flex justify-content-center ">
                    <img src="{{asset('frontend/images/build.png')}}" alt="etablissement-img" class="etabl-img" height="100px" width="100px">

                </div>
                <div class="col-md-7">
                    <div class="etablissement-uls">
                        <ul>
                            <li>
                                Crèche Collective
                            </li>
                            <li>Crèche Multi-Accueil</li>
                            <li>Halte-Garderie</li>
                            <li>Crèche Municipale</li>
                            <li>Jardin D’enfants</li>
                        </ul>
                        <ul>
                            <li>
                                Micro-Crèche
                            </li>
                            <li>Crèche Parentale</li>
                            <li>Crèche Privée D’entreprise Ou Inter-Entreprises </li>
                            <li>Crèche Associative</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cloud">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('frontend/images/cloud.png')}}" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <div>
                        <h2>COMMENCEZ À UTILISER APILINK EN TOUTE SÉRÉNITÉ</h2>
                        <div class="ul_establishment">
                            <ul class="ul_cloudcheck">
                                <li>Nous vous proposons des tarifs proportionnels et dégressifs au volume des
                                    institutions petite enfance</li>
                                <li>Bénéficiez d’un accompagnement sur-mesure, adapté à vos besoins</li>
                                <li>Tout inclus : aucun frais cachés</li>
                            </ul>
                            <div class="text-center res-dec mt-3 mb-3 w-100">
                                <button class="btn btn-skyblue">JE SOUHAITE RECEVOIR UNE PROPOSITION
                                    PERSONNALISÉE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="subscribe_pd index-nous-sec mt-3">
        <div class="container">

            <div class="subscribe_text text-center">
                <h1 class="subscribe_h1 mb-3">Abonnez-vous à notre newsletter</h1>
                <!-- <p class="subscribe_p pb-4">Annoncez vos offres d'emploi à des millions d'utilisateurs mensuels <br>et
                    recherchez 15,8 millions de CV dans notre base de données.</p> -->
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="sub-input">
                        <form id="newsletterform" method="POST" action="{{route('addnewsletter')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="inputicon2" placeholder="Inscrivez-vous pour des offres spéciales">
                                <div class="btn-subscribe">
                                    <button type="submit" class="btn btn-blue">S'ABONNER</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--header modal  -->

    <div class="modal fade" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog login-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-modal-body">
                <form id="manager-login" method="post">
                    @csrf
                    <div class="">
                        <div class="lmodal-logo mb-20">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <button class="btn social-btn facebook mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/facebook-f.svg')}}"> Connexion avec
                            Facebook
                        </button>
                        <button class="btn social-btn google mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/google.svg')}}"> Connexion avec
                            Google
                        </button>
                        <div class="ordiv mb-20"><span>OU</span></div>
                        <div class="mb-20">
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email / Nom d'utilisateur*" class="form-control email-place login-input inputicon2">
                                <span class="email-error text-danger">@error ('email') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="form-group sr-rel">
                                <input type="password" name="password" placeholder="Mot de passe*" class="form-control  email-place login-input inputicon2 sr-rel" id="password">
                                <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye" id="toggle-password">
                                <span class="password-error text-danger">@error ('password') {{$message}} @enderror</span>
                                <span class="invalid-error text-danger">@error ('invalid') {{$message}} @enderror</span>

                            </div>
                        </div>

                        <div class="mb-20 text-right">
                            <a href="" class="forgot-link">J'ai perdu mon mot de passe?</a>
                        </div>
                        <div class="col-md-12 text-center res-dec mb-3 ">
                            <button id="loginbtn" type="submit" class="btn btn-blue w-100">Connexion</button>
                        </div>
                        <div class=" meconnecter">
                            <p class="proxima-nove">Pas encore membre?<a href="#" class=""> Inscrivez-vous</a></p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end header modal  -->
    <div class="modal fade" id="header-Modallogin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog login-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-modal-body">
                    <div class="">
                        <div class="lmodal-logo">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Prénom"
                                            class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom de famille"
                                            class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email"
                                            class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Téléphone"
                                            class="form-control login-input inputicon2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Mot de passe*"
                                            class="form-control  login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label login-cus-check" for="customCheck1">J'accepte
                                            les
                                            conditions générales d'utilisation d'APILINK - J'accepte que mon profil soit
                                            visible
                                            par l'ensemble des établissements employeurs, partenaires d'APILINK.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label login-cus-check" for="customCheck2">J'accepte
                                            que mes
                                            données sensibles soient traitées par APILINK pour me fournir le
                                            service.</label>
                                    </div>

                                </div>

                                <div class="col-md-12 text-center res-dec mt-3 mb-3 ">
                                    <!-- <a href="engagement-step1.html" class="btn btn-blue w-100">S'inscrire</a> -->
                                    <a class="btn btn-blue w-100" id="bravo-btn">S'inscrire</a>
                                </div>

                                <div class="col-md-12 text-center res-dec mt-3">
                                    <div class=" meconnecter Connectez-vous">
                                        <p class="">Déjà membre?<a href="#" class=""> Connectez-vous</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog login-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-modal-body">
                    <div class="">
                        <div class="lmodal-logo contact-logo">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5 class="vous_h5 contact-title">Nous contacter
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Prénom"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom de famille"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email"
                                            class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" id="" rows="8"
                                            class="form-control contact-textarea inputicon2"
                                            placeholder="Votre texte ici…"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12 text-center res-dec mt-3 mb-5 ">
                                    <a href="{{URL::to('/')}}" class="btn btn-blue w-100" style="background:#FFA500;">Poser
                                        une
                                        question</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog login-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-modal-body">
                    <div class="">
                        <div class="lmodal-logo mb-20">
                            <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                        </div>
                        <button class="btn social-btn facebook mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/facebook-f.svg')}}"> Connexion avec
                            Facebook
                        </button>
                        <button class="btn social-btn google mb-20">
                            <img src="{{asset('frontend/images/imgs-svg/google.svg')}}"> Connexion avec
                            Google
                        </button>
                        <div class="ordiv mb-20"><span>OU</span></div>
                        <div class="mb-20">
                            <div class="form-group">
                                <input type="text" placeholder="Email / Nom d'utilisateur*"
                                    class="form-control  login-input inputicon2">
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="form-group sr-rel">
                                <input type="password" placeholder="Mot de passe*"
                                    class="form-control  login-input inputicon2 sr-rel" id="password">
                                <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye" id="toggle-password">
                            </div>
                        </div>

                        <div class="mb-20 text-right">
                            <a href="" class="forgot-link">J'ai perdu mon mot de passe?</a>
                        </div>
                        <div class="col-md-12 text-center res-dec mb-3 ">
                            <button class="btn btn-blue w-100">Connexion</button>
                        </div>
                        <div class=" meconnecter">
                            <p class="proxima-nove">Pas encore membre?<a href="#" class=""> Inscrivez-vous</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bravo modal -->
    <div class="modal fade" id="bravo" tabindex="-1">
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
                            <div class="d-flex justify-content-center">
                                <p class="votres-check register-vous">Vous allez recevoir un email pour
                                    confirmer votre inscription </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- bravo end -->


    </div>
    @endsection

    @section('script')
    {!! $newslettervalidator->selector('#newsletterform') !!}
    @include('frontend.layouts.login_script')
<script>
    $('.noscarousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        navText: ["<img src='{{asset('frontend/images/left-arrow-owl.svg')}}'><span>Previous</span>", "<img src='{{asset('frontend/images/owl-arrow-right.svg')}}'><span>Next</span>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<script>
  
    // --------------------------
    $(document).ready(function () {
        setInterval(function () {
            $('#establish').addClass('active');
        }, 500);

    });

    //----------------
    $("#bravo-btn").on('click', function () {
        $('#header-Modallogin1').modal('hide');
        $('#bravo').modal('show');
        setTimeout(function () { $('body').addClass('modal-open'); }, 500);
    });
</script>
@endsection

</body>
</html>