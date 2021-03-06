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


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light header-bg1">
            <div class="container px-0">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" width="170px" alt="header logo" class="header-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav header-ul">
                        <li class="nav-item" id="about-us">
                            <!--active-->
                            <a class="nav-link" href="" data-toggle="modal" data-target="#header-Modallogin1">
                                <p>Qui sommes-nous ? </p> <span class="sr-only">(current)</span>
                            </a>
                            <span class="span-home"></span>
                        </li>
                    </ul>
                    <ul class="header-btns">
                        <li>
                            <button class="btn nous" data-toggle="modal" data-target="#contact">Nous Contacter</button>
                        </li>
                        <li>
                            <div class="dropdown custom-after">
                                <button class="btn btn-secondary dropdown-toggle btn-drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mon compte
                                </button>
                                <div class="dropdown-menu home-drop" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modallogin2">Se connecter </a>
                                    <a class="dropdown-item" href="login1.html">S????????inscrire</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="modal fade modal-back-blue" id="header-Modallogin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog login-modal-dialog modal-dialog-centered" role="document">
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
                                        <input type="text" placeholder="Pr????nom" class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom de famille" class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="T????l????phone" class="form-control login-input inputicon2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Mot de passe*" class="form-control  login-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label login-cus-check" for="customCheck1">J'accepte
                                            les
                                            <a href="javascript:void(0)" class="conditions-atag">conditions g????n????rales d'utilisation</a> d'APILINK - J'accepte que mon profil soit
                                            visible
                                            par l'ensemble des ????tablissements employeurs, partenaires d'APILINK.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label login-cus-check" for="customCheck2">J'accepte
                                            que <a href="javascript:void(0)" class="conditions-atag">mes
                                                donn????es sensibles </a>soient trait????es par APILINK pour me fournir le
                                            service.</label>
                                    </div>

                                </div>

                                <div class="col-md-12 text-center res-dec mt-3 mb-3 ">
                                    <!-- <a href="engagement-step1.html" class="btn btn-blue w-100">S'inscrire</a> -->
                                    <a class="btn btn-blue w-100" id="bravo-btn">S'inscrire</a>
                                </div>

                                <div class="col-md-12 text-center res-dec mt-3">
                                    <div class=" meconnecter Connectez-vous">
                                        <p class="">D????j?? membre?<a href="#" data-toggle="modal" data-target="#Modallogin2" class="openlogin"> Connectez-vous</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--header modal  -->

    <!-- contact-modal -->
    <div class="modal fade modal-back-blue" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog login-modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="images/material-close.svg"></span>
        </button>
    </div> -->
                <div class="modal-body login-modal-body">
                    <div class="">
                        <div class="lmodal-logo contact-logo">
                            <img src="images/apilink_logo_dark.png" alt="">
                        </div>
                        <div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5 class="vous_h5 contact-title">Nous contacter
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Pr????nom" class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom de famille" class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control contact-input inputicon2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" id="" rows="8" class="form-control contact-textarea inputicon2" placeholder="Votre texte ici???????"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12 text-center res-dec mt-3 mb-5 ">
                                    <a href="index.html" class="btn btn-blue w-100" style="background:#FFA500;">Poser
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


    <section class="hero-about " style="background-image:url({{asset('frontend/images/about/about-bg.png')}}); ">
        <div class="index-gradient "></div>
        <div class="container ">
            <div class="text-right ">
                <div class="qui_text ">
                    Qui sommes-nous?
                    <span class="border-span-blue "></span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container ">
            <div class="notre-equipe-title d-notre ">
                Notre ??quipe
                <span class="notre-border "></span>
            </div>
            <div class="mt-5 ">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="notre-equipe-inner ">
                            <img src="{{asset('frontend/images/about/about-user.png')}} " alt="about-user-image ">
                            <p class="notre-equipe-innertitle ">Une ??quipe exp??riment??e <br> et d??di??e</p>
                            <p class="notre-equipe-desc1 "> Nos consultants sont des <br>experts dot??s d'une <br>exp??rience significative <br>dans le domaine du
                                <br>recrutement.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="notre-equipe-inner ">
                            <img src="{{asset('frontend/images/about/tete.png')}} " alt="about-user-image ">
                            <p class="notre-equipe-innertitle ">Une sp??cialisation, <br>Une expertise </p>
                            <p class="notre-equipe-desc1 ">Nous sommes sp??cialis??s dans <br>le domaine de la petite enfance <br>et nous concentrons tous nos efforts pour ce
                                <br>secteur l?? uniquement. B??n??ficiez ainsi<br> d'un service de qualit?? et personnalis??
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div style="background-image: url({{asset('frontend/images/about/about-blue.png')}}); " class="about-minisec ">
            <!-- <img src="images/about/about-blue.png " alt=" "> -->
            <h4>Notre ??quipe est disponible du lundi au vendredi de 8h30 ?? 18h.</h4>
        </div>
    </section>

    <section class="raison-main-sec ">
        <div class="container ">
            <div class="notre-equipe-title notre-equipe-title-pink text-center ">
                Notre raison d?????tre : Favoriser <br>le bien ??tre de l'enfant
            </div>
            <div class="row raison-row ">
                <div class="col-md-6 d-flex justify-content-center pl-0 pr-0">
                    <div class="raison-text ">
                        Les neurosciences nous r??v??lent que <span class="quicksand-bold"> les 1000 premiers jours de la vie <br>d???un enfant sont une p??riode cruciale ?? son bon d??veloppement.</span><br> Durant cette p??riode les fondamentaux n??cessaires, sur le plan <br> psychologique, social,
                        ??motionnel, et physique se construisent. Et c???est<br> sur ces bases, que l???enfant s???appuiera, tout au long de sa vie.<br><br> De ce fait, en sachant qu??? <span class="quicksand-bold">un jeune enfant, en France, passe en <br>moyenne 5h par jour en ??tablissement
                            d???accueil du jeune enfant,</span><br> nous mesurons la grande responsabilit?? qui repose sur ces structures,<br> et plus particuli??rement sur les professionnels qui encadrent et<br> accompagnent ces jeunes enfants, qui constitueront
                        la soci??t?? de<br> demain. <br><br> Or face ?? cet enjeu de taille <span class="quicksand-bold">?? 90,4% des gestionnaires d???EAJE <br> rencontrent des difficult??s de recrutement ?? </span> <br>Ces difficult??s ?? compl??ter les ??quipes sur le terrain, m??nent ?? des <span class="quicksand-bold">conditions de travail difficile</span>s pour le personnel fixe. Les absences se
                        succ??dent et le turn-over s???amplifient dans les structures.

                    </div>

                </div>
                <div class="col-md-6 ">
                    <div>
                        <img src="{{asset('frontend/images/about/baby-img.png')}} " alt="baby-img " class="w-100 about-baby ">
                    </div>
                </div>
                <div class="col-md-12 ">

                    <div class="skyblu-text ">Notre but est donc d???am??liorer le quotidien des professionnels de la petite enfance et de favoriser le bien-??tre de l???enfant en structure.</div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="about-blue-sec text-center " style="background-image: url({{asset('frontend/images/about/about-blue2.png')}}); background-size: cover; ">
            <div class="container ">
                <div class="about-blue-secinner ">
                    <div class="notre-equipe-title text-center about-comment-sec-title ">
                        Comment ?
                    </div>
                    <div>
                        <h3 class="le-recrute "> Le recrutement, un facteur cl??</h3>
                        <p class="le-recrute-p ">Apilink centralise les comp??tences sp??cialis??e dans la petite enfance. L???acc??s au personnel qualifi?? est alors facilit??</p>
                    </div>
                    <ul class="about-blue-sec-ul ">
                        <li>
                            <div class="about-blue-ulinner ">
                                <img src="{{asset('frontend/images/about/pink-arrow.png')}} " alt=" ">
                                <p>Les gestionnaires RH <span class="blue-text ">recrutent plus ais??ment et les quotas
                                        d???encadrement sont
                                        respect??s.</span> </p>
                            </div>
                        </li>
                        <li>
                            <div class="about-blue-ulinner ">
                                <img src="{{asset('frontend/images/about/pink-arrow.png ')}}" alt=" ">
                                <p>Lorsque <span class="blue-text ">l?????quipe est au complet,</span> c???est un plaisir de travailler ! Le <span class="blue-text ">quotidien des
                                        professionnels de la petite enfance est alors am??lior??.</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="about-blue-ulinner ">
                                <img src="{{asset('frontend/images/about/pink-arrow.png ')}}" alt=" ">
                                <p> <span class="blue-text ">Les enfants b??n??ficient</span> de leur temps n??cessaire et ne subissent aucun stress d?? au manque de personnel. Un <span class="blue-text ">temps de qualit?? </span>leur est alors accord??.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-blue-ulinner ">
                                <img src="{{asset('frontend/images/about/pink-arrow.png')}} " alt=" ">
                                <p> Les <span class="blue-text ">parents </span>ressentent la qualit?? de l???accueil qui s???am??liore et sont<span class="blue-text "> heureux</span> de retrouver leur enfant ??panouis en structure.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>


            <div>

            </div>

        </div>

    </section>
    <section class="subscribe_pd index-nous-sec ">
        <div class="container ">

            <div class="subscribe_text text-center ">
                <h1 class="subscribe_h1 mb-3 ">Abonnez-vous ?? notre newsletter</h1>
                <!-- <p class="subscribe_p pb-4 ">Annoncez vos offres d'emploi ?? des millions d'utilisateurs mensuels <br>et
                    recherchez 15,8 millions de CV dans notre base de donn??es.</p> -->
                <form action="{{route('addnewsletter')}}" id="newsletterform" method="POST" autocomplete="off">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="sub-input">
                                <div class="form-group">
                                    <input type="text" name="email" class="inputicon2" placeholder="Inscrivez-vous pour des offres sp??ciales" autocomplete="off">
                                    <div class="btn-subscribe">
                                        <button type="submit" class="btn btn-blue">S'ABONNER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <div class="modal fade modal-back-blue " id="contact " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog login-modal-dialog modal-dialog-centered " role="document ">
            <div class="modal-content ">
                <!-- <div class="modal-header ">
                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                    <span aria-hidden="true "><img src="images/material-close.svg "></span>
                </button>
            </div> -->
                <div class="modal-body login-modal-body ">
                    <div class=" ">
                        <div class="lmodal-logo contact-logo ">
                            <img src="images/apilink_logo_dark.png " alt=" ">
                        </div>
                        <div>
                            <div class="row mt-3 ">
                                <div class="col-md-12 ">
                                    <h5 class="vous_h5 contact-title ">Nous contacter
                                    </h5>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <input type="text " placeholder="Pr??nom " class="form-control contact-input inputicon2 ">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <input type="text " placeholder="Nom de famille " class="form-control contact-input inputicon2 ">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group ">
                                        <input type="text " placeholder="Email " class="form-control contact-input inputicon2 ">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group ">
                                        <textarea name=" " id=" " rows="8 " class="form-control contact-textarea inputicon2 " placeholder="Votre texte ici??? "></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12 text-center res-dec mt-3 mb-5 ">
                                    <a href="index.html " class="btn btn-blue w-100 " style="background:#FFA500; ">Poser
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
    <!--header modal  -->

    <div class="modal fade modal-back-blue " id="Modallogin2 " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog login-modal-dialog modal-dialog-centered " role="document ">
            <div class="modal-content ">
                <div class="modal-body login-modal-body ">
                    <form action="" autocomplete="off">
                        <div class=" ">
                            <div class="lmodal-logo mb-20 ">
                                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt=" ">
                            </div>
                            <button class="btn social-btn facebook mb-20 ">
                                <img src="{{asset('frontend/images/imgs-svg/facebook-f.svg')}}"> Connexion avec
                                Facebook
                            </button>
                            <button class="btn social-btn google mb-20 ">
                                <img src="{{asset('frontend/images/imgs-svg/google.svg')}}"> Connexion avec
                                Google
                            </button>
                            <div class="ordiv mb-20 "><span>OU</span></div>
                            <div class="mb-20 ">
                                <div class="form-group ">
                                    <input type="text " placeholder="Email / Nom d 'utilisateur*" class="form-control  login-input inputicon2" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-20">
                                <div class="form-group sr-rel">
                                    <input type="password" placeholder="Mot de passe*" class="form-control  login-input inputicon2 sr-rel" id="password" autocomplete="off">
                                    <img src="{{asset('frontend/images/about/eye.svg')}}" alt="" class="sr-eye" id="toggle-password">
                                </div>
                            </div>

                            <div class="mb-20 text-right">
                                <a href="" class="forgot-link">J'ai perdu mon mot de passe?</a>
                            </div>
                            <div class="col-md-12 text-center res-dec mb-3 ">
                                <a class="btn btn-blue w-100" href="mycandidate-profile.html">Connexion</a>
                            </div>
                            <div class=" meconnecter">
                                <p class="proxima-nove">Pas encore membre?<a href="" class=""> Inscrivez-vous</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

       @include('frontend.layouts.footer')
       
    <script type="text/javascript" src="http://127.0.0.1:8000/vendor/jsvalidation/js/jsvalidation.js"></script>
    <script>
        $(".select2 ").select2();
    </script>
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        $('.noscarousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            navText: ["<img src='{{asset('frontend/images/left-arrow-owl.svg')}}'><span>Previous</span>", "<img src='{{asset('frontend/images/owl-arrow-right.svg')}}><span>Next</span>"],
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

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript" src="http://appworkdemo.com/apilink/public/vendor/jsvalidation/js/jsvalidation.js"></script>
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

    <script>
        $(document).on('click', '.openLogin', function() {
            $("#header-Modallogin1").modal('hide');
            $("#Modallogin2").modal('show');
        });
        $(document).on('click', '.openRegister', function() {
            $("#header-Modallogin1").modal('show');
            $("#Modallogin2").modal('hide');
        });
        $(document).ready(function() {

            $("#contact-us").on('submit', function(e) {
                e.preventDefault();
                var url = '{{ route("contact-us") }}';

                $.ajax({
                    url: url,
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(response) {
                        if (response.status == false) {
                            $.each(response.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#contact-us')[0].reset();
                            toastr.success(response.message);
                            $('#contact').modal('hide');
                        }
                    }
                });
            });
        });
        $(document).on('click', '#registerUser', function() {
            var token = $("meta[name='csrf-token']").attr("content");
            var formData = $('#register_form_data').serialize();
            $.ajax({

                url: "{{ route('registration.save') }}",
                method: 'post',
                data: formData,
                success: function(response) {
                    if (response.status == true) {
                        setTimeout(function() {
                            $('#header-Modallogin1').modal('hide');
                            $('.invisible').trigger('click');
                            $("#register_form_data")[0].reset();
                        });
                    }
                },
                error: function(response) {
                    $('#firstname-error').text(response.responseJSON.errors.first_name);
                    $('#lastname-error').text(response.responseJSON.errors.last_name);
                    $('#email-error').text(response.responseJSON.errors.email);
                    $('#phone-error').text(response.responseJSON.errors.phone);
                    $('#password-error').text(response.responseJSON.errors.password);
                    $('#terms-error').text(response.responseJSON.errors.terms);
                    $('#accept_sensitive_data-error').text(response.responseJSON.errors.terms);
                }
            });

        });
        $(document).on('click', '.openlogin', function() {
            $("#Modallogin2").modal('show');
            $("#header-Modallogin1").modal('hide');
        });
        $('.noscarousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            navText: ["<img src='images/left-arrow-owl.svg'><span>Previous</span>", "<img src='images/owl-arrow-right.svg'><span>Next</span>"],
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
        //-----------------
        $(document).ready(function() {
            setInterval(function() {
                $('#about-us').addClass('active');
            }, 500);

        });
    </script>
    @yield('script')
</body>

</html>