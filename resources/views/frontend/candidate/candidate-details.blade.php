@extends('frontend.master')
@section('title')
<title>ApiLink | SeeJob</title>
@endsection
@section('content')
<section class="back-f6 pt-2 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-3">
                    <a href="{{route('showallcandidate')}}" class="back link_a">
                        <span><i class="fa fa-angle-left mr-2"></i></span>Retour à mes offres d'emploi
                    </a>
                </div>
                <div class="card sr-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 mt-3 mb-3">
                                <div class="c-profile-sec">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('frontend/images/imgs-svg/view-profile.svg')}}" alt="candidate-profile" class="c-profimage">
                                        <div class="pl-3">
                                            <h5 class="dark-tit">{{$details->first_name}}</h5>
                                            <div class=" c-prof-headertext">
                                                <p class="mb-0">Auxiliaire de crèche</p>
                                                <p class="mb-0">
                                                    <span><img src="{{asset('frontend/images/map.svg')}}" width="12px"></span> {{$details->address}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 portfolio-headright">

                                <div class="d-flex">
                                    <div class="view-profbtn mr-4">
                                        <span> <img src="images/imgs-svg/green-check.svg" alt="" class="mr-2"></span> Profil vérifié
                                    </div>
                                    <div class="view-profbtn">
                                        <span> <img src="images/imgs-svg/greendot.png" alt="" class="mr-2"></span> Disponible
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end message-btn-profile ">
                                    <div class="sr-pos mr-2 res-sr-pos">
                                        <a href="establish-message.html" class="btn btn-profile">
                                            <img src="images/message-square.svg" class="msquareicon">Contacter par message
                                        </a>
                                    </div>
                                    <button class="btn btn-profile " style="background:#75BFD3;">Organiser un RDV
                                        Visio</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card sr-card">
                            <div class="card-body">
                                <div class="profile-sidebar-sec">
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Situation actuelle :</h5>
                                        <p class="profside-text">{{$details->current_situation}}</p>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Recherche :</h5>
                                        <p class="profside-text">{{$details->research}}</p>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Disponible :</h5>
                                        <ul class="prof-view-ul">
                                            <li>{{$details->available_day}}</li>
                                            <li>{{$details->available_time}}</li>
                                        </ul>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Diplômes :</h5>
                                        <p class="profside-text">{{$details->diplomas}}</p>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Expériences :</h5>
                                        <p class="profside-text">{{$details->experience_at}}</p>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Tranche d’âge :</h5>
                                        <ul class="prof-viewcheck-ul">
                                            <li> <span><img src="images/imgs-svg/blue-md-checkmark.svg" alt=""></span> {{$details->age_range}}
                                            </li>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="prof-side">
                                        <h5 class="dark-tit profside-title">Mobilité :</h5>
                                        <p class="profside-text">{{$details->mobility}}</p>
                                    </div>
                                    <div class="prof-side mb-60">
                                        <h5 class="dark-tit profside-title">Vérifications :</h5>
                                        <div class="verification-view">
                                            <span> <img src="images/imgs-svg/green-check.svg" alt=""></span> Charte d’engagement Apilink
                                        </div>
                                        <div class="verification-view">
                                            <span> <img src="images/imgs-svg/green-check.svg" alt=""></span> E-mail
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card sr-card ">
                            <ul class="nav connection-tab edit-line-tab tab-cardul2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="
                                        portfolio-profile-tab" data-toggle="tab" href="#portfolio-profile" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="21.963" height="24.333" viewBox="0 0 21.963 24.333">
                                            <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(1.5 1.5)">
                                                <path id="Path_3483" class="svg-stroke" data-name="Path 3483" d="M24.963,29.611v-2.37A4.741,4.741,0,0,0,20.222,22.5H10.741A4.741,4.741,0,0,0,6,27.241v2.37" transform="translate(-6 -8.278)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                                </path>
                                                <path id="Path_3484" class="svg-stroke" data-name="Path 3484" d="M21.482,9.241A4.741,4.741,0,1,1,16.741,4.5,4.741,4.741,0,0,1,21.482,9.241Z" transform="translate(-7.259 -4.5)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                                </path>
                                            </g>
                                        </svg>Profil professionnel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="portfolio3-tab" data-toggle="tab" href="#Portfolio3" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="31.788" height="31.79" viewBox="0 0 31.788 31.79">
                                            <g id="Group_412" data-name="Group 412" transform="translate(-659.637 -659.617)">
                                                <path id="Path_3745" class="paths-svg" data-name="Path 3745" d="M691.325,676.314v.494a.294.294,0,0,0-.053.07q-2.4,6.726-4.8,13.454a1.405,1.405,0,0,1-.889.975H660.112a.747.747,0,0,1-.375-.745q.01-9.776,0-19.553c0-.6.158-.758.771-.758H665v-.408q0-4.441,0-8.882a1.1,1.1,0,0,1,1.252-1.244h12.272a1.071,1.071,0,0,1,1.214,1.211c0,.391,0,.781,0,1.172a2.483,2.483,0,0,0,.029.254c.462,0,.9,0,1.343,0,.874,0,1.263.389,1.264,1.256,0,.449,0,.9,0,1.367.481,0,.922,0,1.363,0a1.107,1.107,0,0,1,1.27,1.261c0,1.213,0,2.426,0,3.639v.373h.824c.892,0,1.283.388,1.283,1.273q0,1.82,0,3.639v.349c.964,0,1.888.024,2.81-.008A1.277,1.277,0,0,1,691.325,676.314Zm-30.3,13.932h24.366l4.886-13.684h-.346q-11.843,0-23.685-.005a.4.4,0,0,0-.459.316q-1.833,5.181-3.69,10.354C661.74,688.22,661.387,689.215,661.021,690.246ZM674.642,675.5a4.769,4.769,0,0,1-1.719-3.464,4.645,4.645,0,0,1,1.4-3.59,4.752,4.752,0,0,1,6.077-.46,4.62,4.62,0,0,1,1.96,3.674,4.709,4.709,0,0,1-1.724,3.836h3.29v-9.443H671.347V675.5Zm4.032-14.7h-12.6v14.7h1.565v-.349q0-5.752,0-11.5a2.184,2.184,0,0,1,.028-.46,1.072,1.072,0,0,1,1.2-.828q4.718,0,9.435,0h.371Zm-9.964,2.634v12.062h1.563v-.392q0-4.426,0-8.852a1.112,1.112,0,0,1,1.262-1.266q4.7,0,9.406,0h.371v-1.553Zm-7.86,10.5-.038.014v13.63l.04.007,3.881-10.871c-.582.1-1.087.18-1.591.268a1.128,1.128,0,0,1-1.492-.86Q661.252,675.02,660.851,673.926Zm15.27-1.143c-.779-1.171-.753-2.234.061-3a2.12,2.12,0,0,1,2.714-.167,2.061,2.061,0,0,1,.8,1.274,2.137,2.137,0,0,1-.556,1.888,2.33,2.33,0,0,1,1.09,1.6,3.6,3.6,0,0,0,.205-4.942,3.668,3.668,0,1,0-5.4,4.956A2.419,2.419,0,0,1,676.121,672.783Zm-15.091-1.462c.551,1.519,1.091,3,1.623,4.485.067.186.193.148.322.127.576-.1,1.151-.208,1.729-.286.233-.031.305-.109.3-.345-.012-1.119-.005-2.238-.005-3.357v-.624Zm16.609,4.26c.472-.12.936-.231,1.4-.362a.3.3,0,0,0,.182-.2,1.3,1.3,0,0,0-.541-1.288,1.961,1.961,0,0,0-1.191-.325,1.433,1.433,0,0,0-1.413,1.587.329.329,0,0,0,.187.229C676.705,675.355,677.161,675.461,677.638,675.581Zm8.4-.084v-4.174h-1.009V675.5Zm-8.413-5.242a1.047,1.047,0,0,0-1.041,1.04,1.07,1.07,0,0,0,1.064,1.058,1.053,1.053,0,0,0,1.033-1.081A1.032,1.032,0,0,0,677.627,670.256Z" transform="translate(0)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2">
                                                </path>
                                                <path id="Path_3746" class="paths-svg" data-name="Path 3746" d="M988.142,814.126h-1.009v-4.174h1.009Z" transform="translate(-302.102 -138.628)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                                                <path id="Path_3747" class="paths-svg" data-name="Path 3747" d="M796.122,898.2c-1.172,0-2.343,0-3.515,0a1.586,1.586,0,0,1-1.724-1.726,1.259,1.259,0,0,1,0-.154.911.911,0,0,0-.581-1.109,1.975,1.975,0,0,1-.9-2.391,2.1,2.1,0,0,1,4.074.291,2.073,2.073,0,0,1-1.259,2.27.374.374,0,0,0-.287.447c.017.235,0,.473,0,.709a.541.541,0,0,0,.607.61c.73.007,1.459,0,2.189,0h4.841c.625,0,.773-.15.774-.786a1.136,1.136,0,0,1,0-.123.837.837,0,0,0-.541-1.012,1.986,1.986,0,0,1-.933-2.406,2.1,2.1,0,0,1,4.09.36,2.077,2.077,0,0,1-1.276,2.2.379.379,0,0,0-.291.448,7.255,7.255,0,0,1-.007.863,1.548,1.548,0,0,1-1.6,1.5C798.568,898.2,797.345,898.2,796.122,898.2Zm-4.16-3.881a1,1,0,0,0,.424-1.219,1.053,1.053,0,0,0-1.084-.689,1.066,1.066,0,0,0-.946.945.905.905,0,0,0,.51.94c.052-.6.184-.814.524-.825S791.881,893.67,791.962,894.314Zm9.48-.03a.932.932,0,0,0,.446-1.088,1.062,1.062,0,0,0-1.011-.793,1.087,1.087,0,0,0-1.022.825.934.934,0,0,0,.467,1.055c.082-.609.217-.811.546-.819S801.3,893.629,801.441,894.285Z" transform="translate(-119.554 -213.735)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                                            </g>
                                        </svg>Portfolio</a>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="portfolio-profile" role="tabpanel" aria-labelledby="portfolio-profile-tab">
                                    <div class="card-body">
                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">À propos de Paul
                                            </h5>
                                            <p class="profside-text">Passionné par les enfants, j’en ai fais ma vocation. Ayant terminé récemment <br> mon CDD, je suis à la recherche d’un nouvel emploi.
                                            </p>
                                        </div>

                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Expériences</h5>
                                            <div class="exper">
                                                <p class="experience-title">2012 – 2018 : Crèche A, Montpellier
                                                </p>
                                                <p class="experience-text">Auxiliaire - CDI</p>
                                            </div>
                                            <div class="exper">
                                                <p class="experience-title">2018 – 2021 : crèche B, Alès</p>
                                                <p class="experience-text">Auxiliaire - CDI</p>
                                            </div>
                                            <div class="exper">
                                                <p class="experience-title">Pédagogies appréciées</p>
                                                <p class="experience-text">Maria Montessori</p>
                                            </div>
                                        </div>

                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Pédagogies appréciées</h5>
                                            <p class="profside-text">{{$details->pedagogy}}</p>
                                        </div>
                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Mes qualités</h5>
                                            <ul class="prof-view-ul Mes-ul">
                                                <li>{{$details->qualities}}</li>

                                            </ul>
                                        </div>
                                        <div class="prof-side ">
                                            <h5 class="dark-tit profside-title">Mes valeurs</h5>
                                            <ul class="prof-view-ul Mes-ul">
                                                <li>{{$details->values}}</li>

                                            </ul>
                                        </div>
                                        <div class="prof-side ">
                                            <h5 class="dark-tit profside-title">Langue parlées couramment</h5>
                                            <ul class="prof-view-ul Mes-ul">
                                                <li>{{$details->languages_spoken}}</li>

                                            </ul>
                                        </div>

                                        <!-- <div class="text-right edit-btns">
                                                <a href="editcandidate-profile.html" class="btn btn-yellow"><img src="images/imgs-svg/feather-edit.svg" class="edit-profile mr-4" alt="edit" height="16" width="16">Edit Profile</a>
                                            </div> -->


                                    </div>


                                </div>
                                <div class="tab-pane fade " id="Portfolio3" role="tabpanel" aria-labelledby="Portfolio3-tab">
                                    <div class="dossier_sec personal_detail_edit">
                                        <ul class="img-ul">
                                            @foreach($images as $data)
                                            <li>
                                                <div class="img_section">
                                                    <div class="img_content img-space">
                                                        <img src="{{asset($data->image)}}" />
                                                    </div>

                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="d-flex justify-content-end btn-image-view mt-4">
                                            <a class="btn btn-blue d-flex"><img src="{{asset('frontend/images/imgs-svg/ionic-md-eye.svg')}}" class="mr-4" alt="eye-icon">Plus ...</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>





    </div>
</section>
@endsection