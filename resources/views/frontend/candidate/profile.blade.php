@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')
<div id="after-header"></div>

<section class="back-f6 pt-5 pb-5">
    <div class="container">

        <div class="card sr-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-profile-sec">
                            <div class="d-flex align-items-center">
                                <img src="{{URL::to('/')}}/{{auth()->user()->profile_photo_path}}" onerror='this.onerror=null;this.src="{{URL::to("/")}}/frontend/images/profile-change.svg";' alt="candidate-profile" class="c-profimage">
                                <div class="pl-3">
                                    <h5 class="dark-tit">{{auth()->guard('web')->user()->first_name}} {{auth()->guard('web')->user()->last_name}} </h5>
                                    <div class="c-prof-headertext">
                                        <p class="mb-0">Auxiliaire de crèche</p>
                                        <p class="mb-0">
                                            <span><img src="{{asset('frontend/images/map.svg')}}" width="12px"></span> {{auth()->guard('web')->user()->city}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-end">
                        <div class="progress-main">
                            <span>Mon profil rempli</span>
                            <div class="profile-progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card sr-card tab-card">
            <ul class="nav connection-tab edit-line-tab tab-card-ul" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="
                        professional-profile-tab" data-toggle="tab" href="#professional-profile" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="21.963" height="24.333" viewBox="0 0 21.963 24.333">
                            <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(1.5 1.5)">
                                <path id="Path_3483" class="svg-stroke" data-name="Path 3483" d="M24.963,29.611v-2.37A4.741,4.741,0,0,0,20.222,22.5H10.741A4.741,4.741,0,0,0,6,27.241v2.37" transform="translate(-6 -8.278)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                </path>
                                <path id="Path_3484" class="svg-stroke" data-name="Path 3484" d="M21.482,9.241A4.741,4.741,0,1,1,16.741,4.5,4.741,4.741,0,0,1,21.482,9.241Z" transform="translate(-7.259 -4.5)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                </path>
                            </g>
                        </svg>Profil professionnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="applicationfile-tab" data-toggle="tab" href="#applicationfile" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="23.622" height="31" viewBox="0 0 23.622 31">
                            <g id="Group_233" data-name="Group 233" transform="translate(0 0)">
                                <path id="Path_3478" class="paths-svg" data-name="Path 3478" d="M739,703H720.1a.216.216,0,0,0-.052-.031,2.736,2.736,0,0,1-2.31-2.974q0-9.53,0-19.06c0-2.057,0-4.115,0-6.172a2.567,2.567,0,0,1,1.153-2.243A6.9,6.9,0,0,1,720.1,672h13.322a5.363,5.363,0,0,1,.565.435q3.485,3.471,6.962,6.95a1.308,1.308,0,0,1,.41,1c-.009,3.178-.005,6.356-.005,9.534q0,5.145,0,10.291a2.72,2.72,0,0,1-1.813,2.634C739.366,702.9,739.18,702.947,739,703Zm-6.721-29.183H720.642c-.745,0-1.082.341-1.082,1.1q0,12.593,0,25.185c0,.746.342,1.086,1.094,1.086h17.8a.947.947,0,0,0,1.088-1.091q0-9.338,0-18.677v-.333h-.374c-1.393,0-2.785.008-4.178,0a2.688,2.688,0,0,1-2.664-2.27,6.409,6.409,0,0,1-.048-1.025C732.273,676.474,732.276,675.164,732.276,673.816Zm1.818,1.365c0,1.079-.01,2.146,0,3.212a.885.885,0,0,0,.9.869c1.027.009,2.054,0,3.081,0a.257.257,0,0,0,.078-.018Z" transform="translate(-717.742 -672)" fill="#7d7d7d"></path>
                                <path id="Path_3479" class="paths-svg" data-name="Path 3479" d="M791.6,830.98c1.784,0,3.569,0,5.354,0a.91.91,0,1,1-.017,1.816q-2.48,0-4.961,0-2.889,0-5.777,0a.908.908,0,0,1-.909-1.267.923.923,0,0,1,.926-.55C788.014,830.982,789.808,830.98,791.6,830.98Z" transform="translate(-779.763 -818.144)" fill="#7d7d7d"></path>
                                <path id="Path_3480" class="paths-svg" data-name="Path 3480" d="M791.567,875.98c1.795,0,3.589,0,5.384,0a.91.91,0,1,1-.013,1.816q-2.193,0-4.386,0-3.176,0-6.352,0a.908.908,0,0,1-.912-1.265.922.922,0,0,1,.925-.552C788,875.982,789.783,875.98,791.567,875.98Z" transform="translate(-779.76 -859.511)" fill="#7d7d7d"></path>
                                <path id="Path_3481" class="paths-svg" data-name="Path 3481" d="M791.568,920.98c1.795,0,3.589,0,5.384,0a.91.91,0,1,1-.014,1.816q-2.253,0-4.507,0-3.115,0-6.231,0a.908.908,0,0,1-.912-1.265.922.922,0,0,1,.925-.552C788,920.982,789.784,920.98,791.568,920.98Z" transform="translate(-779.76 -900.878)" fill="#7d7d7d"></path>
                                <path id="Path_3482" class="paths-svg" data-name="Path 3482" d="M789.847,965.995q1.738,0,3.477,0a.914.914,0,1,1,.012,1.815q-3.522,0-7.045,0a.913.913,0,1,1-.012-1.815Q788.063,965.992,789.847,965.995Z" transform="translate(-779.823 -942.26)" fill="#7d7d7d"></path>
                            </g>
                        </svg>Dossier de candidature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="myapplication-tab" data-toggle="tab" href="#myapplication" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" id="Group_1876" class="tab-img1" data-name="Group 1876" width="47" height="47" viewBox="0 0 47 47">
                            <g id="Ellipse_112" data-name="Ellipse 112" fill="#fff" stroke="#7d7d7d" stroke-width="1" class="svg-stroke">
                                <circle cx="23.5" cy="23.5" r="23.5" stroke="none" />
                                <circle cx="23.5" cy="23.5" r="23" fill="none" />
                            </g>
                            <path id="Icon_feather-bookmark" class="svg-stroke" data-name="Icon feather-bookmark" d="M23.969,25.674l-8.234-5.882L7.5,25.674V6.853A2.353,2.353,0,0,1,9.853,4.5H21.616a2.353,2.353,0,0,1,2.353,2.353Z" transform="translate(7.365 8.413)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>Mes candidatures </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="portfolio1-tab" data-toggle="tab" href="#Portfolio1" role="tab" aria-controls="home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="31.788" height="31.79" viewBox="0 0 31.788 31.79">
                            <g id="Group_412" data-name="Group 412" transform="translate(-659.637 -659.617)">
                                <path id="Path_3745" class="paths-svg" data-name="Path 3745" d="M691.325,676.314v.494a.294.294,0,0,0-.053.07q-2.4,6.726-4.8,13.454a1.405,1.405,0,0,1-.889.975H660.112a.747.747,0,0,1-.375-.745q.01-9.776,0-19.553c0-.6.158-.758.771-.758H665v-.408q0-4.441,0-8.882a1.1,1.1,0,0,1,1.252-1.244h12.272a1.071,1.071,0,0,1,1.214,1.211c0,.391,0,.781,0,1.172a2.483,2.483,0,0,0,.029.254c.462,0,.9,0,1.343,0,.874,0,1.263.389,1.264,1.256,0,.449,0,.9,0,1.367.481,0,.922,0,1.363,0a1.107,1.107,0,0,1,1.27,1.261c0,1.213,0,2.426,0,3.639v.373h.824c.892,0,1.283.388,1.283,1.273q0,1.82,0,3.639v.349c.964,0,1.888.024,2.81-.008A1.277,1.277,0,0,1,691.325,676.314Zm-30.3,13.932h24.366l4.886-13.684h-.346q-11.843,0-23.685-.005a.4.4,0,0,0-.459.316q-1.833,5.181-3.69,10.354C661.74,688.22,661.387,689.215,661.021,690.246ZM674.642,675.5a4.769,4.769,0,0,1-1.719-3.464,4.645,4.645,0,0,1,1.4-3.59,4.752,4.752,0,0,1,6.077-.46,4.62,4.62,0,0,1,1.96,3.674,4.709,4.709,0,0,1-1.724,3.836h3.29v-9.443H671.347V675.5Zm4.032-14.7h-12.6v14.7h1.565v-.349q0-5.752,0-11.5a2.184,2.184,0,0,1,.028-.46,1.072,1.072,0,0,1,1.2-.828q4.718,0,9.435,0h.371Zm-9.964,2.634v12.062h1.563v-.392q0-4.426,0-8.852a1.112,1.112,0,0,1,1.262-1.266q4.7,0,9.406,0h.371v-1.553Zm-7.86,10.5-.038.014v13.63l.04.007,3.881-10.871c-.582.1-1.087.18-1.591.268a1.128,1.128,0,0,1-1.492-.86Q661.252,675.02,660.851,673.926Zm15.27-1.143c-.779-1.171-.753-2.234.061-3a2.12,2.12,0,0,1,2.714-.167,2.061,2.061,0,0,1,.8,1.274,2.137,2.137,0,0,1-.556,1.888,2.33,2.33,0,0,1,1.09,1.6,3.6,3.6,0,0,0,.205-4.942,3.668,3.668,0,1,0-5.4,4.956A2.419,2.419,0,0,1,676.121,672.783Zm-15.091-1.462c.551,1.519,1.091,3,1.623,4.485.067.186.193.148.322.127.576-.1,1.151-.208,1.729-.286.233-.031.305-.109.3-.345-.012-1.119-.005-2.238-.005-3.357v-.624Zm16.609,4.26c.472-.12.936-.231,1.4-.362a.3.3,0,0,0,.182-.2,1.3,1.3,0,0,0-.541-1.288,1.961,1.961,0,0,0-1.191-.325,1.433,1.433,0,0,0-1.413,1.587.329.329,0,0,0,.187.229C676.705,675.355,677.161,675.461,677.638,675.581Zm8.4-.084v-4.174h-1.009V675.5Zm-8.413-5.242a1.047,1.047,0,0,0-1.041,1.04,1.07,1.07,0,0,0,1.064,1.058,1.053,1.053,0,0,0,1.033-1.081A1.032,1.032,0,0,0,677.627,670.256Z" transform="translate(0)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2">
                                </path>
                                <path id="Path_3746" class="paths-svg" data-name="Path 3746" d="M988.142,814.126h-1.009v-4.174h1.009Z" transform="translate(-302.102 -138.628)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                                <path id="Path_3747" class="paths-svg" data-name="Path 3747" d="M796.122,898.2c-1.172,0-2.343,0-3.515,0a1.586,1.586,0,0,1-1.724-1.726,1.259,1.259,0,0,1,0-.154.911.911,0,0,0-.581-1.109,1.975,1.975,0,0,1-.9-2.391,2.1,2.1,0,0,1,4.074.291,2.073,2.073,0,0,1-1.259,2.27.374.374,0,0,0-.287.447c.017.235,0,.473,0,.709a.541.541,0,0,0,.607.61c.73.007,1.459,0,2.189,0h4.841c.625,0,.773-.15.774-.786a1.136,1.136,0,0,1,0-.123.837.837,0,0,0-.541-1.012,1.986,1.986,0,0,1-.933-2.406,2.1,2.1,0,0,1,4.09.36,2.077,2.077,0,0,1-1.276,2.2.379.379,0,0,0-.291.448,7.255,7.255,0,0,1-.007.863,1.548,1.548,0,0,1-1.6,1.5C798.568,898.2,797.345,898.2,796.122,898.2Zm-4.16-3.881a1,1,0,0,0,.424-1.219,1.053,1.053,0,0,0-1.084-.689,1.066,1.066,0,0,0-.946.945.905.905,0,0,0,.51.94c.052-.6.184-.814.524-.825S791.881,893.67,791.962,894.314Zm9.48-.03a.932.932,0,0,0,.446-1.088,1.062,1.062,0,0,0-1.011-.793,1.087,1.087,0,0,0-1.022.825.934.934,0,0,0,.467,1.055c.082-.609.217-.811.546-.819S801.3,893.629,801.441,894.285Z" transform="translate(-119.554 -213.735)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                            </g>
                        </svg>Portfolio</a>
                </li>

            </ul>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="professional-profile" role="tabpanel" aria-labelledby="professional-profile-tab">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card sr-card">
                                    <div class="card-body">
                                        <div class="profile-sidebar-sec">
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Situation actuelle :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->current_situation}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Recherche :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->research}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Disponible :</h5>
                                                <ul class="prof-view-ul">
                                                    <li>{{auth()->guard('web')->user()->available_day}}</li>
                                                    <li>{{auth()->guard('web')->user()->available_time}}</li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Diplômes :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->diplomas}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Expériences :</h5>
                                                <p class="profside-text">7 ans d’expériences</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Tranche d’âge :</h5>
                                                <ul class="prof-viewcheck-ul">
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 0-1 an
                                                    </li>
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 2-3 an
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Mobilité :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->mobility}}</p>
                                            </div>
                                            <div class="prof-side mb-60">
                                                <h5 class="dark-tit profside-title">Vérifications :</h5>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> Charte d’engagement Apilink
                                                </div>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> E-mail
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card sr-card tab-hgt">
                                    <div class="card-body">
                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Paul en quelques mots (OU A propos de Paul)
                                            </h5>
                                            <p class="profside-text">{{auth()->guard('web')->user()->about_me}}
                                            </p>
                                        </div>

                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Expériences</h5>
                                            <div class="exper">
                                                <p class="experience-title">2012 – 2018 : Crèche A, Montpellier</p>
                                                <p class="experience-text">Auxiliaire - CDI</p>
                                            </div>
                                            <div class="exper">
                                                <p class="experience-title">2018 – 2021 : crèche B, Alès</p>
                                                <p class="experience-text">Auxiliaire - CDI</p>
                                            </div>
                                            <div class="exper">
                                                <p class="experience-title">Pédagogies appréciées</p>
                                                <p class="experience-text">{{auth()->guard('web')->user()->pedagogy}}</p>
                                            </div>
                                        </div>

                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Pédagogies appréciées</h5>
                                            <p class="profside-text">{{auth()->guard('web')->user()->pedagogy}}</p>
                                        </div>
                                        <div class="prof-side mb-4">
                                            <h5 class="dark-tit profside-title">Mes qualités</h5>
                                            @php $qualities=explode(",",auth()->guard('web')->user()->qualities); @endphp
                                            <ul class="prof-view-ul Mes-ul">
                                                @foreach($qualities as $qualitie)
                                                <li>{{$qualitie}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="prof-side ">
                                            <h5 class="dark-tit profside-title">Mes valeurs</h5>
                                            <ul class="prof-view-ul Mes-ul">
                                                <li>{{auth()->guard('web')->user()->values}}</li>
                                            </ul>
                                        </div>
                                        <div class="text-right edit-btns">
                                            <a href="{{URL::to('/candidate-profile-edit')}}" class="btn btn-yellow"><img src="{{asset('frontend/images/imgs-svg/feather-edit.svg')}}" class="edit-profile mr-4" alt="edit" height="16" width="16">Editer mon profil</a>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                    <div class="tab-pane fade " id="applicationfile" role="tabpanel" aria-labelledby="applicationfile-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card sr-card">
                                    <div class="card-body">
                                        <div class="profile-sidebar-sec">
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Situation actuelle :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->current_situation}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Recherche :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->research}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Disponible :</h5>
                                                <ul class="prof-view-ul">
                                                    <li>{{auth()->guard('web')->user()->available_day}}</li>
                                                    <li>{{auth()->guard('web')->user()->available_time}}</li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Diplômes :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->diplomas}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Expériences :</h5>
                                                <p class="profside-text">7 ans d’expériences</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Tranche d’âge :</h5>
                                                <ul class="prof-viewcheck-ul">
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 0-1 an
                                                    </li>
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 2-3 an
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Mobilité :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->mobility}}</p>
                                            </div>
                                            <div class="prof-side mb-60">
                                                <h5 class="dark-tit profside-title">Vérifications :</h5>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> Charte d’engagement Apilink
                                                </div>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> E-mail
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card sr-card tab-hgt">
                                    <div class="card-body">
                                        <div class="overflow-auto can-download-btn">
                                            <table class="download-table w-100">
                                                <tbody id="appendcv">
                                                   <tr>
                                                        <td>
                                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px">
                                                        </td>
                                                        <td>
                                                          <a href="{{route('candidate.resume',auth()->guard('web')->user()->id)}}" target="_blank"><p class="mb-0">Api link cv.pdf</p></a>
                                                        </td>
                                                        <td>
                                                            <!-- <div class="input-dupload">
                                                                <input type="file" class="dupload-file">
                                                                <img src="{{asset('frontend/images/feather-download.svg')}}" class="download-img">
                                                            </div> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px">
                                                        </td>
                                                        <td>
                                                          <a href="{{url(''.auth()->guard('web')->user()->cv)}}" target="_blank"><p class="mb-0">Uploded cv.pdf</p></a>
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                    @foreach($candidateCV as $cv)
                                                    <tr>
                                                        <td>
                                                            <img src="{{asset('frontend/images/pdf.svg')}}" width="30px">
                                                        </td>
                                                        <td>
                                                          <a href="{{url(''.$cv->cv)}}" target="_blank"><p class="mb-0">Uploded cv.pdf</p></a>
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="downlaod-all">
                                        <form method="post" enctype="multipart/form-data" name="myForm1" id="myForm1">
                                                        @csrf
                                            <div class="sr-pos downlaod-mr res-sr-mr">
                                                <img src="{{asset('frontend/images/feather-download-white.svg')}}" class="contra-icon">
                                                <input type="file" name="cv" id="cv" style="display: none;" onchange="uploadCV();">
                                                
                                                <button class="btn btn-apply iconbtn" type="button" id="cvbtn">Télécharger un cv </button>
                                                <span class="cv-upload-error text-danger"></span>
                                                
                                            </div>
                                        </form>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="myapplication" role="tabpanel" aria-labelledby="myapplication-tab">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="nav connection-tab profile-tab2" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="
                                            postulation-tab" data-toggle="tab" href="#postulation" role="tab" aria-controls="home" aria-selected="true"> <span><img src="{{asset('frontend/images/imgs-svg/tick.svg')}}" alt="" class="firt-postulation"></span>Mes Postulations
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="save-file-tab" data-toggle="tab" href="#save-file" role="tab" aria-controls="home" aria-selected="true"><span><img src="{{asset('frontend/images/imgs-svg/book-mark-yellow.svg')}}" alt="" class="book-yellow-img mr-2"></span>Mes offres sauvegardées</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="postulation" role="tabpanel" aria-labelledby="postulation-tab">
                                        <div class="sr-card tab-minus">
                                            <div class="card-body pos-card">
                                                <div class="card-pd">

                                                    @if(count($applyJobData) > 0)
                                                    @foreach($applyJobData as $applyJob)
                                                    @if($applyJob['jobApplay']!=null)
                                                    @php
                                                    $createDate = date('d-m-Y',strtotime($applyJob->created_at));
                                                    $now = date('d-m-Y');
                                                    $diff = strtotime($createDate) - strtotime($now);
                                                    $finalDays = abs(round($diff / 86400));
                                                    @endphp
                                                    <div class="job-card">
                                                        <div class="d-flex justify-content-between mb-4">
                                                            <div>
                                                                <h5 class="mb-0 c-prof-jobtext">{{$applyJob['jobApplay']->title}}
                                                                </h5>
                                                                <p class="mb-0 job_cre_text">{{$applyJob->type_of_contract}}</p>
                                                            </div>

                                                            <span class="c-prof-public-text mr-5">Publié il y a {{$finalDays}}
                                                                jours</span>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6 ">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <p class="mb-0 ">Montpellier (34)</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">{{$applyJob->maximum_gross_salary}} € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience :{{$applyJob->minimum_experience}}
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 mt-2 align-items-end d-flex justify-content-end">
                                                                <p class="c-prof-public-text mb-0">Candidature envoyée le xx/xx/xxxx
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @else
                                                    <div class="job-card">
                                                        <p class="text-center">No Data Available.</p>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade " id="save-file" role="tabpanel" aria-labelledby="save-file-tab">
                                        <div class="sr-card tab-minus">
                                            <div class="card-body pos2-card">
                                                <div class="card-pd">
                                                    @if(count($jobSaveData)>0)
                                                    @foreach($jobSaveData as $jobSave)
                                                    @if($jobSave['job'])
                                                    @php
                                                    $isApplyed = $jobSave->applyJob!=null ? "disabled":"";
                                                    $createDate = date('d-m-Y',strtotime($jobSave->created_at));
                                                    $now = date('d-m-Y');
                                                    $diff = strtotime($createDate) - strtotime($now);
                                                    $finalDays = abs(round($diff / 86400));
                                                    @endphp
                                                    <div class="job-card ">
                                                        <div class="d-flex justify-content-between mb-4 ">
                                                            <div>
                                                                <h5 class="mb-0 c-prof-jobtext">{{$jobSave['job']->title}}
                                                                </h5>
                                                                <p class="mb-0 job_cre_text">{{$jobSave['job']->type_of_contract}}
                                                                </p>
                                                            </div>

                                                            <span class="c-prof-public-text">Publié il y a {{$finalDays}}
                                                                jours<img src="{{asset('frontend/images/imgs-svg/book-mark-yellow.svg')}}" alt="bookmark image " class="ml-3 book-yellow-img"></span>
                                                        </div>
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-8 ">
                                                                <ul class="search-image-ul">
                                                                    <li>
                                                                        <!-- <p class="mb-0 ">Montpellier (34)</p> -->
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">{{$jobSave['job']->maximum_gross_salary}} € par mois</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="mb-0 ">Expérience :{{$jobSave['job']->minimum_experience}}
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 mt-2 align-items-end d-flex justify-content-end">
                                                                <div class="d-flex">
                                                                    <a href="{{URL::to('details-job'.'/'.$jobSave['job']->id)}}" class="btn btn-viewjob mr-4">Voir
                                                                        l’offre</a>
                                                                    <button class="btn btn-apply" @if($jobSave->applyJob != null) @else onclick="openJobModal('{{$jobSave->id}}','{{$jobSave->user_id}}')" @endif {{$isApplyed}}>Postuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @else
                                                    <div class="job-card ">
                                                        <p class="text-center">No Data Available.</p>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="Portfolio1" role="tabpanel" aria-labelledby="portfolio1-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card sr-card">
                                    <div class="card-body">
                                        <div class="profile-sidebar-sec">
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Situation actuelle :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->current_situation}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Recherche :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->research}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Disponible :</h5>
                                                <ul class="prof-view-ul">
                                                    <li>{{auth()->guard('web')->user()->available_day}}</li>
                                                    <li>{{auth()->guard('web')->user()->available_time}}</li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Diplômes :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->diplomas}}</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Expériences :</h5>
                                                <p class="profside-text">7 ans d’expériences</p>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Tranche d’âge :</h5>
                                                <ul class="prof-viewcheck-ul">
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 0-1 an
                                                    </li>
                                                    <li> <span><img src="{{asset('frontend/images/imgs-svg/blue-md-checkmark.svg')}}" alt=""></span> 2-3 an
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="prof-side">
                                                <h5 class="dark-tit profside-title">Mobilité :</h5>
                                                <p class="profside-text">{{auth()->guard('web')->user()->mobility}}</p>
                                            </div>
                                            <div class="prof-side mb-60">
                                                <h5 class="dark-tit profside-title">Vérifications :</h5>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> Charte d’engagement Apilink
                                                </div>
                                                <div class="verification-view">
                                                    <span> <img src="{{asset('frontend/images/imgs-svg/green-check.svg')}}" alt=""></span> E-mail
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card sr-card tab-hgt">
                                    <div class="card-body">
                                        <div class="dossier_sec personal_detail_edit pb-0">
                                            <ul class="img-ul" id="appendid">
                                                @foreach($images as $image)
                                                <li id="image{{$image->id}}">
                                                    <div class="img_section">
                                                        <div class="img_content">
                                                            <img src='{{asset("$image->image")}}' />

                                                        </div>
                                                        <img onclick="removeImage({{$image->id}})" src="{{asset('frontend/images/close.svg')}}" width="12px" class="c-prof-closeimg">
                                                        <div class="text-imgs">
                                                            <p class="mb-0">Project Name 1</p>
                                                            <p class="work-from">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <button class="btn btn-small" data-toggle="modal" data-target="#cv-modal1">view more</button>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                <li>

                                                    <form method="post" enctype="multipart/form-data" name="myForm" id="myForm">
                                                        @csrf
                                                        <div class="img_section">
                                                            <div class="profimage-upload">
                                                                <div class="upload-div">
                                                                    <div><img src="{{asset('frontend/images/upload-icon.svg')}}" alt="upload-profile" class="upload-img1">
                                                                    </div>
                                                                    <p class="mb-0">Télécharger <br>une image</p>
                                                                </div>
                                                                <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" onchange="imageUploadGallery();" class="upload-input1">
                                                            </div>
                                                        </div>
                                                        <span class="image-upload-error text-danger">@error ('image') {{$message}} @enderror</span>
                                                    </form>
                                                </li>
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


    </div>
</section>

<!-- See the establishment's file Modal -->
<div class="modal fade modal-back-blue" id="establishment" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog center-modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content m-32">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
                </button>
            </div>

            <input type="hidden" name="jobid" id="jobid">
            <input type="hidden" name="userid" id="userid">
            <div class="modal-body resume_modal">
                <div class="establishment_modal">
                    <h4 class="">Comment souhaitez-vous postuler ?</h4>

                    <div class="padding-150px ">
                        <div class="text-center pb-5 mb-5">
                            <button class="btn btn-modals-blue bravo-btn" type="submit" data-target="#bravo" value="0" id="bravo-btn">Envoyer mon profil profesionnel<br>au recruteur</button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-modals-blue cv-radius" id="updateCv" type="submit"><img src="frontend/images/project/feather-download.svg" alt="download" class="mr-3">

                                Télécharger et
                                envoyer mon cv</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- bravo modal -->
<div class="modal fade modal-back-blue" id="bravo" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
                </button>
            </div>
            <div class="modal-body bravo-body">
                <div class="text-center">
                    <div class="bravo-text">
                        <h3>BRAVO !</h3>
                    </div>
                    <div>
                        <img src="frontend/images/project/green-checkmark.svg" alt="checkmark" class="green-checkmarks">
                        <p class="votres-check">Votre candidature a bien été envoyé</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- cv modal -->
<div class="modal fade modal-back-blue" id="cv-modal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog center-modal-dialog modal-xl" role="document">
        <div class="modal-content m-32">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
                </button>
            </div>
            <div class="modal-body resume_modal">
                <div class="candidate_modal">
                    <h4 class="mb-3">Lettre de motivation</h4>
                    <div class="candidate_modal_title">
                        <h5 class="candidate_modal_text pb-2">Description</h5>
                        <div class="candidate_modal_desc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software
                            </p>
                        </div>
                        <div class="text-right pt-4 pb-3">
                            <a href="javasscript:void(0)" class="btn btn-blue ml-auto skip-btn tele-modal-btn">
                                Passer cette étape</a>
                            <a href="javasscript:void(0)" class="btn btn-blue ml-3 ok-btn tele-modal-btn">
                                Ok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tele modal -->

<div class="modal" id="tele-modal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header resume_header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="frontend/images/material-close.svg"></span>
                </button>
            </div>
            <div class="modal-body bravo-body pb-4">
                <div class="text-center">
                    <div class="veui-detail">
                        <h5 class="veui-text border-modal">Veuillez choisir un Cv à envoyer au recruteur</h5>
                    </div>
                    <div class="overflow-auto px-4">
                        <table class="download-table w-100">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="frontend/images/pdf.svg" width="30px" class="mr-3">
                                            <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=""><img src="frontend/images/feather-download.svg" class="download-img"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="frontend/images/pdf.svg" width="30px" class="mr-3">
                                            <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=""><img src="frontend/images/feather-download.svg" class="download-img"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="frontend/images/pdf.svg" width="30px" class="mr-3">
                                            <p class="mb-0"> Uploaded CV_10-09-2020.pdf</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=""><img src="frontend/images/feather-download.svg" class="download-img"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <h4 class="ou_text border-modal">Ou télécharger un nouveau cv </h4>
                    </div>
                    <div class="upload-drop-btns">
                        <form method="POST" id="mainForm" class="d-content">
                            @method('POST')
                            @csrf
                            <button class="btn btn-modals-blue cv-radius btn-tele position-relative" id="cv-btn" type="button"><img src="frontend/images/project/feather-download.svg" alt="download" class="mr-3">
                                <input type="file" class="upload-modal-cv" name="document_name" id="document_name">
                                Télécharger un cv </button>
                            <input type="hidden" name="pdf_name" id="pdf_name">
                            <button href="javascript:void(0)" class="btn btna-oky bravo-btn" id="byResume" value="1">Ok</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- </body> -->
@endsection
@section('script')
<script type="text/javascript">$('#cvbtn').on('click', function() {
    $('#cv').trigger('click');
});
    $(".bravo-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#updateCv").on('click', function() {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });
    $(".tele-modal-btn").on('click', function() {
        $('#cv-modal').modal('hide');
        $('#tele-modal').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });
    $(".bravo-btn").on('click', function() {
        $('#tele-modal').modal('hide');
        $('#bravo').modal('show');
        setTimeout(function() {
            $('body').addClass('modal-open');
        }, 500);

    });

     // upload cv
     function uploadCV() {
     
        $('.cv-upload-error').text('');
        event.preventDefault();
        $.ajax({
            url: '{{ route("upload-cv") }}',
            method: 'POST',
            data: new FormData(myForm1),
            _token: '{{ csrf_token() }}',
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    console.log(response);
                    $("#appendcv").prepend("<tr><td><img src='{{asset('frontend/images/pdf.svg')}}' width='30px'></td><td><a href='{{url::to('/')}}/"+response.data.cv+"' target='_blank'><p class='mb-0'>Uploded cv.pdf</p></a></td><td></td></tr>");
                } else {
                    $('.cv-upload-error').text(response.errors.cv);
                }
            }
        });
    }

    // upload image
    function imageUploadGallery() {
        $('.image-upload-error').text('');
        event.preventDefault();
        $.ajax({
            url: '{{ route("upload-image") }}',
            method: 'POST',
            data: new FormData(myForm),
            _token: '{{ csrf_token() }}',
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);

                    $("#appendid").prepend("<li id='image" + response.data.id + "'><div class='img_section'><div class='img_content'><img src='{{asset('/')}}" + response.data.image + "' /></div><img imageId=" + response.data.id + " onclick='removeImage(" + response.data.id + ")'  src='{{asset('frontend/images/project/cancel-red.svg')}}' width='12px' class='c-prof-closeimg'><div class='text-imgs'><p class='mb-0'>Project Name 1</p><p class='work-from'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><button class='btn btn-small' data-toggle='modal' data-target='#cv-modal1'>view more</button></div></div></li>");
                } else {
                    $('.image-upload-error').text(response.errors.image);
                }
            }
        });
    }
    //Remove Image
    function removeImage(id) {
        $.ajax({
            url: "{{ route('remove-image') }}",
            type: "POST",
            data: {
                id: id,
                _token: "{{csrf_token()}}"
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);

                    $("#image" + id).remove();

                } else {
                    toastr.error(response.message);
                }

            }
        });
    }

    function openJobModal(job_id, user_id) {
        $('#jobid').val(job_id);
        $('#userid').val(user_id);
        $('#establishment').modal('show');
    }

    $(document).on("change", "#document_name", function() {
        $.ajax({
            url: "{{route('getDocumentName')}}",
            method: "POST",
            data: new FormData(mainForm),
            _token: '{{ csrf_token() }}',
            contentType: false,
            processData: false,
            success: function(response) {
                if (response) {
                    $("#pdf_name").val(response);
                }
            }
        });
    });

    $(document).on("click", "#byResume,#bravo-btn", function() {
        var type = $(this).val();
        var jobid = $('#jobid').val();
        var userid = $('#userid').val();
        var document_name = $('#pdf_name').val();


        $.ajax({
            url: "{{ route('store-jobType') }}",
            method: "POST",
            data: {
                'type': type,
                'jobid': jobid,
                'userid': userid,
                'document_name': document_name,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    $('#establishment').modal('hide');
                    $('#bravo').modal('show');
                    location.reload();

                } else {
                    toastr.danger(response.message);
                }
            }
        });

    });
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#upload-image') !!}
@endsection



</body>

</html>