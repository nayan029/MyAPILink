<header>
    @if(Auth::guard('web')->user())
    <nav class="navbar navbar-expand-lg navbar-light header-bg1">
        <div class="container">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" width="170px" alt="header logo" class="header-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav header-ul ml-auto">
                    <li class="nav-item ">
                        <!--active-->
                        <a class="nav-link" href="{{route('searchjob')}}">Rechercher un emploi<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav header-ul custom-header-drop  ml-0">
                    <li class="nav-item">
                        <img src="{{asset('frontend/images/line2.svg')}}" alt="message" class="line-header" />
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:void(0);">
                            <img src="{{asset('frontend/images/material-message.svg')}}" alt="message" class="img-header-sec" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><img src="{{asset('frontend/images/notifications-outline.svg')}}" alt="notification" class="img-header-sec"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('frontend/images/profile-change.svg')}}" class="profile-change-job job-border" alt="porfile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="@if(Auth::guard('web')->user()->user_type==1) {{URL::to('/mycandidate-profile')}} @else {{URL::to('/manager-profile')}} @endif"><img src="{{asset('frontend/images/project/user.svg')}}">Mon compte</a>
                            <a class="dropdown-item" href="javascript:void(0);"> <img src="{{asset('frontend/images/project/message.svg')}}">Messages</a>
                            <a class="dropdown-item" href="{{route('searchjob')}}"> <img src="{{asset('frontend/images/project/search.svg')}}">Rechercher un
                                job</a>
                            <a class="dropdown-item" href="{{URL::to('/account-setting')}}"><img src="{{asset('frontend/images/project/setting.svg')}}">Mes paramètres</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{asset('frontend/images/project/logout.svg')}}">Déconnexion</a>
                        </div>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('user-logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg navbar-light header-bg1">
        <div class="container px-0">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" width="170px" alt="header logo" class="header-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav header-ul">
                    <li class="nav-item">
                        <!--active-->
                        <!-- <a class="nav-link" href="" data-toggle="modal" data-target="#header-Modallogin1"> -->
                        <a class="nav-link" href="{{URL::to('/')}}">
                            <p>Candidats</p> <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li id="establish" class="nav-item ">
                        <a class="nav-link" href="{{URL::to('/establishment-dashborad')}}">
                            <p>Établissements</p><span class="sr-only">(current)</span>
                        </a>
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modallogin2">Se
                                    Connector</a>
                                <a class="dropdown-item" href="{{ route('registration') }}">S’inscrire</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endif
</header>

<!-- contact-modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        {!! Form::open(['method' => 'POST', 'route' => ['contact-us'], 'files' => true,'id'=>'contact-us']) !!}
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h5 class="vous_h5 contact-title">Nous contacter
                                </h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control contact-input inputicon2', 'placeholder' => 'Prénom*','id'=>'first_name']) !!}
                                    <span class="text-danger error-text first_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control contact-input inputicon2', 'placeholder' => 'Nom de famille*','id'=>'last_name']) !!}
                                    <span class="text-danger error-text last_name_error"></span>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    {!! Form::text('email', old('email'), ['class' => 'form-control contact-input inputicon2', 'placeholder' => 'Email*','id'=>'email']) !!}
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    {!! Form::textarea('description', old('description'), ['class' => 'form-control contact-input inputicon2', 'placeholder' => 'Votre texte ici…*','id'=>'description']) !!}
                                    <span class="text-danger error-text description_error"></span>
                                </div>
                            </div>

                            <div class="col-md-12 text-center res-dec mt-3 mb-5 ">
                                <button type="submit" class="btn btn-blue w-100" style="background:#FFA500;">Poser
                                    une
                                    question</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact modal -->