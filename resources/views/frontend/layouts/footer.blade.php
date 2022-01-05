<div id="footer">

    <footer>
        <div class="sr-footer">
            <div class="footer-head">
                <div class="container">
                    <div class="d-flex justify-content-between res-btn-column">
                        <img src="{{asset('frontend/images/footer/apilink_logo_dark.svg')}}" width="150px">
                        @if(!Auth::guard('web')->user())

                        <div class="btn-footer-left">
                            <button class="btn footer-btn-white" data-toggle="modal" data-target="#header-Modallogin1">INSCRIVEZ-VOUS</button>
                            <button class="btn footer-btn2" data-toggle="modal" data-target="#Modallogin2">SE CONNECTER</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- header model -->

            <div class="modal fade" id="header-Modallogin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog login-modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="images/material-close.svg"></span>
                </button>
            </div> -->
                        <div class="modal-body login-modal-body">
                            <div class="">
                                <div class="lmodal-logo">
                                    <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="">
                                </div>
                                <form action="#" method="post" id="register_form_data">
                                    @csrf
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="first_name" placeholder="Prénom*" class="form-control login-input inputicon2" id="firstname">
                                                <span class="text-danger error" id="firstname-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="last_name" placeholder="Nom de famille*" class="form-control login-input inputicon2" id="lastname">
                                                <span class="text-danger error" id="lastname-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email*" class="form-control login-input inputicon2" id="email">

                                                <span class="text-danger error" id="email-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input type="hidden" class="form-control" id="country_code" name="country_code" />
                                                <input type="text" name="phone" placeholder="Téléphone*" class="form-control login-input inputicon2" onkeypress="return isNumber(event)" id="phone" maxlength="10">
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                                </i>
                                                <span class="text-danger error" id="phone-error"></span>
                                                <span class="text-danger error" id="mobile-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Mot de passe*" class="form-control  login-input inputicon2" id="password">
                                                <span class="text-danger error" id="password-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="terms" name="terms[]">
                                                <label class="custom-control-label login-cus-check" for="terms">J'accepte
                                                    les
                                                    conditions générales d'utilisation d'APILINK - J'accepte que mon profil soit
                                                    visible
                                                    par l'ensemble des établissements employeurs, partenaires d'APILINK.
                                                    <br><span class="text-danger error" id="terms-error"></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="terms" name="terms">

                                                <label class="custom-control-label login-cus-check" for="terms">J'accepte
                                                    que mes
                                                    données sensibles soient traitées par APILINK pour me fournir le
                                                    service.
                                                    <br> <span class="text-danger error" id="accept_sensitive_data-error"></span>

                                                </label>
                                            </div>

                                        </div>

                                        <div class="col-md-12 text-center res-dec mt-3 mb-3 ">
                                            <!-- <a href="engagement-step1.html" class="btn btn-blue w-100">S'inscrire</a> -->
                                            <!-- <a class="btn btn-blue w-100" id="bravo-btn">S'inscrire</a> -->

                                            <button type="button" class="btn btn-blue w-100 registerUser" id="registerUser">S'inscrire</button>
                                        </div>

                                        <div class="col-md-12 text-center res-dec mt-3">
                                            <div class=" meconnecter Connectez-vous">
                                                <p class="">Déjà membre?<a href="javascript:void(0);" class="openLogin"> Connectez-vous</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header model -->
            <!-- header modal1 -->

            <div class="modal fade login_modal" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#forgot_password_modal" class="forgot-link forgot_password_mdl">J'ai perdu mon mot de passe?</a>
                                    </div>
                                    <div class="col-md-12 text-center res-dec mb-3 ">
                                        <button id="loginbtn" type="submit" class="btn btn-blue w-100">Connexion</button>
                                    </div>
                                    <div class=" meconnecter">
                                        <p class="proxima-nove">Pas encore membre?<a href="javasript:void(0);" data-toggle="modal" data-target="#header-Modallogin1" class="openRegister"> Inscrivez-vous</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if($contact)
            <div class="footer-inner">
                <div class="container">
                    <div class="footer-body">
                        <div class="row heading-row">
                            <div class="col-md-4">
                                <div>
                                    <h5 class="footer-headings">Nous contacter</h5>
                                </div>
                                <ul class="footer-ul1">
                                    <li>
                                        <a class="footer-content" href="">
                                            <img src="{{asset('frontend/images/footer/footer-map.png')}}" alt="footre map image">
                                            <p class="mb-0">
                                                {{$contact->address}}
                                            </p>

                                        </a>

                                    </li>
                                    <li>
                                        <a class="footer-content" href="">
                                            <img src="{{asset('frontend/images/footer/footer-phone.png')}}" alt="footre phone image">
                                            <p class="mb-0">
                                                {{$contact->mobile}}
                                            </p>

                                        </a>

                                    </li>
                                    <li>
                                        <a class="footer-content" href="">
                                            <img src="{{asset('frontend/images/footer/footer-mail.png')}}" alt="footre mail image">
                                            <p class="mb-0">
                                                {{$contact->email}}
                                            </p>

                                        </a>

                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <a href="{{$contact->youtube_link}}" class="social-icon" target="_blank">
                                                <img src="{{asset('frontend/images/footer/you-tube.svg')}}" alt="youtube img" width="20px">
                                            </a>
                                            <a href="{{$contact->facebook_link}}" class="social-icon" target="_blank">
                                                <img src="{{asset('frontend/images/footer/facebook.svg')}}" alt="facebook img" width="20px">
                                            </a>
                                            <a href="{{$contact->instagram_link}}" class="social-icon" target="_blank">
                                                <img src="{{asset('frontend/images/footer/instagram.svg')}}" alt="instagram img" width="20px">
                                            </a>
                                            <a href="{{$contact->twitter_link}}" class="social-icon" target="_blank">
                                                <img src="{{asset('frontend/images/footer/twitter.svg')}}" alt="twitter img" width="20px">
                                            </a>
                                            <a href="{{$contact->linkedin_link}}" class="social-icon" target="_blank">
                                                <img src="{{asset('frontend/images/footer/linkedin.svg')}}" alt="linkedin img" width="20px">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <h5 class="footer-headings">A propos de apilink</h5>
                                </div>
                                <ul class="footer-ul2">
                                    <li>
                                        <a href="{{route('about-us')}}">
                                            <p class="mb-0">Qui sommes-nous ?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <p class="mb-0">FAQ</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <p class="mb-0">Blog</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <h5 class="footer-headings">Nos partenaires</h5>
                                </div>
                                <ul class="partner-ul">
                                    @if($partners)
                                    @foreach($partners as $partner)
                                    <li>
                                        <a href="{{$partner->link}}" target="_blank">
                                            <img src="{{asset($partner->image)}}" alt="sas">
                                        </a>
                                    </li>
                                    @endforeach`
                                    @endif

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            @endif
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <p class="copyright_text">Copyright © 2021 Expert Petite Enfance. by trtdigital.</p>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <p class="mb-0">
                                Page de Confidentialité – Mentions Légales – Conditions Générales d’Utilisation –
                                CNIL –
                                Cookies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/popper.min.js')}} "></script>
<script src="{{asset('frontend/js/bootstrap.min.js ')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<!-- <script src="{{asset('frontend/js/custom.js')}}"></script> -->
<script src="{{asset('frontend/js/bootstrap-timepicker')}}"></script>
<script src="{{asset('frontend/js/bootstrap-colorpicker.min')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>



</script>

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
</script>
@yield('script')
</body>

</html>