
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ApiLink</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div style="background-image: linear-gradient(
        180deg, rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), url({{asset('frontend/images/eng1/engagement-bg.png')}});" class="engagement-sec">
        <div>
            <div class="eng-logo text-center">
                <img src="{{asset('frontend/images/eng1/apilink_logo_dark-big.png')}}" alt="">
            </div>
            <div class="wel-hgt">
                <div class="row mx-0">
                    <div class="col-md-12 text-center">
                        <h3 class="eng-title bravo-title">Bravo !</h3>
                    </div>
                    <div class=" col-md-12 text-center">
                        <div class="bravo-sec">
                            <p class="mb-20">Vous avez enregistré votre profil profesionnel avec Apilink </p>
                            <h2 class="bravo-souhaitez">Souhaitez vous un entretient avec un conseiller Apilink ?</h2>
                        </div>
                    </div>
                    <div class=" col-md-12 text-center">
                        <div class="text-center bravo-btns">
                            <button class="btn btn-skyblue bravo-btns" data-dismiss="modal" data-toggle="modal"
                                data-target="#appointment3">Oui</button>
                            <a href="{{route('candidate.login',$id)}}" class="btn btn-skyblue bravo-btns">Non</a>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- modal appointment popup-3-->
    <div class="modal modal-back-blue fade" id="appointment3" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog center-modal-dialog" role="document">
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
                            <p class="modalappoint-text">Un conseiller Apilink vous contactera <br>par email pour
                                prendre
                                un<br> rendez vous
                                téléphonique</p>
                        </div>
                        <div class="mt-4 mb-2">
                            <a href="#" class="btn btn-white modal-appointment-ok">Ok</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->


</body>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
</html>