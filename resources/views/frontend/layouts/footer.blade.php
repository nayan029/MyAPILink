<div id="footer">

<footer>
    <div class="sr-footer">
        <div class="footer-head">
            <div class="container">
                <div class="d-flex justify-content-between res-btn-column">
                    <img src="{{asset('frontend/images/footer/apilink_logo_dark.svg')}}" width="150px">
                    <div class="btn-footer-left">
                        <button class="btn footer-btn-white">INSCRIVEZ-VOUS</button>
                        <button class="btn footer-btn2">SE CONNECTER</button>
                    </div>
                </div>
            </div>
        </div>

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
                                            Dummy address <br> 742 Meadowcrest Lane <br> Freeburn, KY 41528
                                        </p>

                                    </a>

                                </li>
                                <li>
                                    <a class="footer-content" href="">
                                        <img src="{{asset('frontend/images/footer/footer-phone.png')}}" alt="footre phone image">
                                        <p class="mb-0">
                                            + 33 6 23 12 32 04
                                        </p>

                                    </a>

                                </li>
                                <li>
                                    <a class="footer-content" href="">
                                        <img src="{{asset('frontend/footer/footer-mail.png')}}" alt="footre mail image">
                                        <p class="mb-0">
                                            contact@apilink.fr
                                        </p>

                                    </a>

                                </li>
                                <li>
                                    <div class="d-flex">
                                        <a href="" class="social-icon">
                                            <img src="{{asset('frontend/images/footer/you-tube.svg')}}" alt="youtube img" width="20px">
                                        </a>
                                        <a href="" class="social-icon">
                                            <img src="{{asset('frontend/images/footer/facebook.svg')}}" alt="facebook img" width="20px">
                                        </a>
                                        <a href="" class="social-icon">
                                            <img src="{{asset('frontend/images/footer/instagram.svg')}}" alt="instagram img" width="20px">
                                        </a>
                                        <a href="" class="social-icon">
                                            <img src="{{asset('frontend/images/footer/twitter.svg')}}" alt="twitter img" width="20px">
                                        </a>
                                        <a href="" class="social-icon">
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
                                    <a href="">
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
                                <li>
                                    <a href="">
                                        <img src="{{asset('frontend/images/footer/img1.png')}}" alt="">
                                    </a>

                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('frontend/images/footer/img2.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('frontend/images/footer/img3.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('frontend/images/footer/img4.png')}}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

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
</body>

<script src="{{asset('frontend/js/jquery.min.js')}} "></script>
<script src="{{asset('frontend/js/popper.min.js')}} "></script>
<script src="{{asset('frontend/js/bootstrap.min.js ')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script type="{{asset('frontendtext/javascript')}} ">
    $(".select2 ").select2();
</script>
<script>
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
<script>
    var togglePassword = document.getElementById("toggle-password");

    if (togglePassword) {
        togglePassword.addEventListener('click', function() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        });
    }
</script>

</html>