<div id="footer">

    <footer>
        <div class="sr-footer">
            <div class="footer-head">
                <div class="container">
                    <div class="d-flex justify-content-between res-btn-column">
                        <img src="{{asset('frontend/images/footer/apilink_logo_dark.svg')}}" width="150px">
                        @if(!Auth::guard('web')->user())
                        
                        <div class="btn-footer-left">
                            <button class="btn footer-btn-white">INSCRIVEZ-VOUS</button>
                            <button class="btn footer-btn2" data-toggle="modal" data-target="#Modallogin2">SE CONNECTER</button>
                        </div>
                        @endif
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

                                    @foreach($partners as $partner)

                                    <li>
                                        <a href="{{$partner->link}}" target="_blank">
                                            <img src="{{$partner->image}}" alt="">
                                        </a>

                                    </li>

                                    @endforeach

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('frontend/js/select2.min.js')}} "></script>

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
</script>
@yield('script')
</body>
</html>