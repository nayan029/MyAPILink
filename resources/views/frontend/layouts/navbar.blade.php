<header>
    <nav class="navbar navbar-expand-lg navbar-light header-bg1">
        <div class="container px-0">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" width="170px" alt="header logo" class="header-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav header-ul">
                    <li class="nav-item active">
                        <!--active-->
                        <a class="nav-link" href="" data-toggle="modal" data-target="#header-Modallogin1">
                            <p>Candidats</p> <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="establishment-registration.html">
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
                            <button class="btn btn-secondary dropdown-toggle btn-drop" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Mon compte
                            </button>
                            <div class="dropdown-menu home-drop" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modallogin2">Se
                                    Connector</a>
                                <a class="dropdown-item" href="login1.html">S’inscrire</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                                    <textarea name="" id="" rows="8" class="form-control contact-textarea inputicon2"
                                        placeholder="Votre texte ici…"></textarea>
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