@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<section class="hero-index" style="background-image: linear-gradient(180deg, rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), url('frontend/images/index-bg.png');opacity: 0.8;">
    <div class="index-gradient"></div>
    <div class="container">
        <div class="middle_text text-center">
            <h1>VOS COMPÉTENCES AU SERVICE DE LA PETITE ENFANCE</h1>
            <p>CDI - CDD - stage - alternance - indépendant - remplacement</p>
            <div class="jesuis_btn_text">
                <button class="btn btn-home-pink " data-toggle="modal" data-target="#Modallogin2">JE SUIS UN
                    CANDIDAT</button>
                <a href="{{URL::to('/manager')}}" class="btn btn-home-blue ">JE SUIS UN ÉTABLISSEMENT PETITE
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

                @foreach($skill as $sk)
                <div class="col-md-4">
                    <div class="card sr-card">

                        <img class="card-img-top nos_card_image" src="{{asset($sk->image)}}" alt="man-writing">
                        <div class="card-body sheight">
                            <a href="javascript:void(0);" class="btn-show" data-id="{{$sk->id}}">
                                <h6 class="card-title color1m main_title">{{$sk->name}}</h6>
                                @if($sk->positions)
                                @foreach($sk->positions as $position)
                                <ul class="les-professional-ul">
                                    <li>- {{$position->position}} - {{$position->title}}</li>
                                </ul>
                                @endforeach
                                @endif
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach
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

<div class="modal fade modal-back-blue" id="Modaljob-desc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog center-modal-dialog modal-xl" role="document">
        <div class="modal-content m-32">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('frontend/images/material-close.svg')}}"></span>
                </button>
            </div>
            <div class="modal-body resume_modal">
                <div class="candidate_modal">

                   
                    <h4 class="mb-3 main_title main-title">-<h3 class="mb-3 position"></h3></h4>
                    <div class="candidate_modal_title">
                        <h5 class="candidate_modal_text pb-2 ">Description</h5>
                        <div class="candidate_modal_desc desc">

                        </div>
                        <div class="text-center pt-4 pb-3">
                            <button class="btn btn-blue btn-skyblue ml-auto" type="button" id="new-industry">Je crée
                                mon
                                profil
                                professionnel pour ce poste</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end job-desc modal  -->


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
                        <form id="newsletterform" method="POST" action="{{route('addnewsletter')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="inputicon2" placeholder="Inscrivez-vous pour des offres spéciales">
                                <div class="btn-subscribe">
                                    <button type="submit" class="btn btn-blue">S'ABONNER</button>
                                </div>
                            </div>
                        </form>
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
            </div>
</section>

</div>
</div>
</section>
<!-- header modal1 -->

<div class="modal fade" id="Modallogin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body login-modal-body">
                <form id="manager-login" method="post" action="#">
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
                            <button id="loginbtn" onclick="userLogin();" type="button" class="btn btn-blue w-100">Connexion</button>
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
@section('script')
{!! $newslettervalidator->selector('#newsletterform') !!}
<script>
    function userLogin() {
        $('.email-error').text('');
        $('.password-error').text('');
        $('.invalid-error').text('');

        $('#loginbtn').prop('disabled', true);

        $.ajax({
            url: '{{ route("user-auth") }}',
            method: 'POST',
            data: $('#manager-login').serialize(),
            success: function(response) {
                console.log(response.success);
                if (response.success == true) {

                    toastr.success(response.message);

                    $('#loginbtn').prop('disabled', false);
                    if (response.user.user_type == 2) {
                        window.location.href = '{{ route("profile") }}';
                    } else {
                        window.location.href = '{{ route("mycandidate-profile") }}';
                    }
                } else {
                    $('.email-error').text(response.errors.email);
                    $('.password-error').text(response.errors.password);
                    $('.invalid-error').text(response.errors.invalid);

                    $('#loginbtn').prop('disabled', false);
                }
            }
        });
    }
    $(document).on('click', '.btn-show', function() {
        var id = $(this).attr("data-id");
        var url = "{{route('getAjaxSkill')}}";
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var title = $('.main-title').text();
        var desc = $('.desc').text();
        var pos = $('.position').text();

        $.ajax({
            url: url,
            method: 'POST',
            data: {
                _token: CSRF_TOKEN,
                id: id,
                title: title,
                desc: desc,
                pos: pos,
            },
            success: function(data) {
                $('.main-title').text(data.skillData.position);
                $('.desc').text(data.skillData.desc);
                $('.position').text(data.skillData.title);
                $('#Modaljob-desc').modal('show');
            },
            error: function(data) {
                console.log('Failed');
                console.log(data);

            }
        });
    });
 

</script>
@endsection