@extends('frontend.master')
@section('title')
<title>ApiLink |</title>
@endsection
@section('content')


<section>
    <div class="atext-pos pt-90px">
        <img src="{{asset('frontend/images/profile-background.png')}}" alt="profile page background image" class="w-100 prof-resimg">
        <a href="" class="back link_a pos-img-link" id="bread-id" style="display: none;">
            <span><i class="fa fa-angle-left mr-2"></i></span>breadcrumb
        </a>
    </div>
    <div class="container">
        <div class="row profile-top jus-res">
            <div class="col-lg-3 col-md-4 col-9">

                <div class="profile-img bg-manager">
                    <img src="{{asset('frontend/images/project/mont1.svg')}}" alt="profile image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 mt-3 profile" id="manager-id">
                    <h4 class="profile-name">{{auth()->guard('web')->user()->organization}} <img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="ml-1 edit-manager"></h4>
                    <p class="mb-0 d-flex align-items-center">{{auth()->guard('web')->user()->address}} <img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="edit-manager ml-2"></p>
                    <p class="">
                        @if(auth()->guard('web')->user()->represent=="municipality")Une municipalité @endif
                        @if(auth()->guard('web')->user()->represent=="private_structure")Une structure privée @endif
                        @if(auth()->guard('web')->user()->represent=="associative_structure")Une structure associative @endif
                        @if(auth()->guard('web')->user()->represent=="other") Autre @endif
                    </p>
                </div>
                <div class="mb-3 mt-3 profile" id="manager-id2" style="display: none;">
                    <h4 class="profile-name">{{auth()->guard('web')->user()->organization}}</h4>
                    <p class="mb-0 d-flex align-items-center">{{auth()->guard('web')->user()->address}}</p>
                    <p class="">
                        @if(auth()->guard('web')->user()->represent=="municipality")Une municipalité @endif
                        @if(auth()->guard('web')->user()->represent=="private_structure")Une structure privée @endif
                        @if(auth()->guard('web')->user()->represent=="associative_structure")Une structure associative @endif
                        @if(auth()->guard('web')->user()->represent=="other") Autre @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="prof-head2">
        <div class="container">
            <div class="prof-head2-inner">
                <div>
                    <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Gestion du compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Les offres d'emploi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="{{URL::to('/account-setting') }}">Paramètres</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="tab-content sr-tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <section class="prof-backsec">
                <div class="container">
                    <div class="card sr-card p-4 main-card-min">
                        <div class="row">

                            <div class="col-md-4 cust-manager-col4">
                                <div class="card sr-card">
                                    {!! Form::model(null,['method' => 'POST', 'route' => ['update-profile'], 'files' => true,'id'=>'profile-update']) !!}

                                    <div class="card-body">
                                        <div class="card-min-manager">
                                            <div class="account-manager">
                                                <h5>Profil du gestionnaire<br>de compte :</h5>
                                            </div>
                                            <div class="mt-4">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group pb-2">

                                                            {!! Form::text('civility', auth()->guard('web')->user()->civility, ['class' => 'form-control view-form', 'placeholder' => 'Civilité*','id'=>'civility']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-2">
                                                        <div class="form-group">
                                                            {!! Form::text('first_name',auth()->guard('web')->user()->first_name, ['class' => 'form-control view-form', 'placeholder' => 'Prénom*','id'=>'firstname']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-2">
                                                        <div class="form-group">
                                                            {!! Form::text('last_name', auth()->guard('web')->user()->last_name, ['class' => 'form-control view-form', 'placeholder' => 'Nom*','id'=>'lastname']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-2">
                                                        <div class="form-group">
                                                            {!! Form::text('email_address',auth()->guard('web')->user()->email, ['class' => 'form-control view-form', 'placeholder' => 'Email*','id'=>'email']) !!}

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="pt-5">
                                                <div class="account-manager">
                                                    <h5>Rôle du gestionnaire <br>de compte :</h5>
                                                </div>
                                                <div class="mt-4">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                {!! Form::text('roles',auth()->guard('web')->user()->roles, ['class' => 'form-control view-form', 'placeholder' => "Directrice de l'établissement*",'id'=>'roles',('disabled')]) !!}

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-yellow d-flex align-items-center pd-btns-edit"><img src="{{asset('frontend/images/imgs-svg/edit-icon.svg')}}" alt="edit" class="mr-3 edit-manager">Mettre à jour</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            <div class="col-md-8 cust-manager-col8">
                                <div class="card sr-card sa-border-radius">
                                    <div class="card-body applicants-body">
                                        <div class="tab-views">
                                            <ul class="nav nav-pills sr-nav-pills " id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active nav-custom"><img src="{{asset('frontend/images/project/bulid.svg')}}" class="bulid" alt="bulid"> Établissement</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="applicants-inside-details">
                                    <div class="mb-30px">
                                        <a href="{{URL::to('/add-establishment')}}">
                                            <div class="card sr-card manager-card">
                                                <div class="card-body">

                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('frontend/images/project/plus.svg')}}" alt="plus" class="plus-manager">
                                                        <p class="mb-0 un-textp">Ajouter un établissement petite
                                                            enfance
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    @if($myEstablishmentList)
                                    <div class="mb-30px">
                                        <div class="card sr-card manager-card">
                                            <div class="card-body">
                                                <table class="manager-table">
                                                    @foreach($myEstablishmentList as $value)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{url(''.'/frontend/images/project/mont1.svg')}}" alt="user" class="manager-pro mr-3">
                                                                <p class="mb-0 managerp">{{$value->type_of_establishment}}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <p class="mb-0 managerp">{{$value->direction}}</p>
                                                                <a href="{{URL::to('/view-establishment-account')}}/{{$value->id}}" class="btn btn-blue voir-btn ml-4">Voir</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <section class="prof-backsec">
                <div class="container">
                    <div class="post-right">
                        <a href="{{route('addjob',auth()->guard('web')->user()->id);}}" class="btn post-an-btn">Publier une offre</a>
                    </div>
                    <div>
                        <ul class="nav nav-pills tab-inside-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">Annonces en ligne
                                    <span>({{$myJobList ? count($myJobList):'0'}})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-sec-tab" data-toggle="pill" href="#pills-sec" role="tab" aria-controls="pills-sec" aria-selected="false">Annonces expirées
                                    <span>({{$remaining ? count($remaining):'0'}})</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Annonces supprimées
                                    <span>({{$deleted ? count($deleted):'0'}})</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-inside-pills" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($myJobList)
                                                @foreach($myJobList as $value)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-4">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                       <h5 class="mb-0 job_aux_text fn-19">{{$value->title}}</h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$value->job_description}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$value->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$value->minimum_gross_salary}} € par mois</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">Expérience : Minimum {{$value->minimum_experience}} ans</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 d-flex align-items-end mb-3">
                                                            <div class="metters-btns">
                                                                <button class="btn btn-met pause" data-hold = "{{$value->is_hold }}"  data-id="{{$value->id}}">
                                                                    Mettre en pause
                                                                </button>
                                                                <a href="{{route('editjob',$value->id)}}" class="btn btn btn-met">
                                                                    Modifier</a>
                                                                <a href="javascript:void(0);" class="btn btn-delete delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                <form action="{{route('destroy',$value->id)}}" method="POST" class="deleteForm">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </div>
                                                        @php

                                                        $deadLineDate = date('Y-m-d',strtotime($value->deadline_for_receipt_of_applications));
                                                        $now = date('Y-m-d');
                                                        $diff = strtotime($deadLineDate) - strtotime($now);
                                                        $finalDays = abs(round($diff / 86400));
                                                        @endphp
                                                        <div class="col-md-4 mt-2">
                                                            <div class="space-date">
                                                                <div class="text-center date-details">
                                                                    <p class="mb-0">Date</p>
                                                                    <p class="mb-0">{{$value->contract_start_date}}</p>
                                                                    <p class="mb-0">{{$finalDays}} jours restants</p>
                                                                </div>
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span>{{$value->total_view}}</span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>{{$value->total_reg}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="button-voir">
                                                                <a href="{{route('see-applicants',$value->id)}}"> <button class="btn btn-blue">Voir les postulants
                                                                    </button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-sec" role="tabpanel" aria-labelledby="pills-sec-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($remaining)
                                                @foreach($remaining as $remain)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-3 pr-0">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                    <h5 class="mb-0 job_aux_text fn-19">{{$remain->title}}
                                                                    </h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$remain->job_description}}
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->minimum_gross_salary}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$remain->minimum_experience}}</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                            <div class="metters-btns">
                                                                <a href="{{route('editjob',$remain->id)}}" class="btn btn btn-met">
                                                                    Modifier</a>
                                                                <a href="javascript:void(0);" class="btn btn-delete delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                <!-- <form action="{{route('destroy',$remain->id)}}" method="POST" class="deleteForm">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                </form> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mr-renew">
                                                            <div>
                                                                <div class="renew-top">
                                                                    <button class="btn btn-outline-renew">Renouveler
                                                                        l'annonce
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2 pl-0">
                                                            <div class="space-date justify-content-end">
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span>{{$remain->total_view}}</span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span>{{$remain->total_reg}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-voir text-right-voir">
                                                                
                                                                <a href="{{route('see-applicants',$remain->id)}}" class="btn btn-blue w-95">Voir les
                                                                    postulants
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                            <div class="card sr-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border-job">
                                                @if($deleted)
                                                @foreach($deleted as $delete)
                                                <div class="job-card manager-job-pd">
                                                    <div class="row mb-3 ">
                                                        <div class="col-md-3 pr-0">
                                                            <ul class="search-image-ul">
                                                                <li>
                                                                    <h5 class="mb-0 job_aux_text fn-19">{{$delete->title}}
                                                                    </h5>
                                                                </li>
                                                                <li>
                                                                    <p class="manage-crep job_cre_text fn-21">{{$delete->job_description}}
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$delete->city}}</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">{{$delete->minimum_gross_salary}} € par mois</p>
                                                                </li>
                                                                <li>
                                                                    <p class="mb-0 ">Expérience : {{$delete->minimum_experience}}</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2 d-flex align-items-end btn-modifi mb-3">
                                                            <div class="metters-btns">
                                                                <a href="{{route('editjob',$delete->id)}}" class="btn btn btn-met"> 
                                                                    Modifier</a>
                                                                <a href="javascript:void(0);" class="btn btn-delete delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                <!-- <form action="{{route('destroy',$delete->id)}}" method="POST" class="deleteForm">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                </form> -->
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mr-renew">
                                                            <div>
                                                                <div class="renew-top">
                                                                    <a href="{{route('users.restore',$delete->id)}}" class="btn btn-outline-renew">Renouveler
                                                                        l'annonce
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2 pl-0">
                                                            <div class="space-date justify-content-end">
                                                                <div class="mt-images-profile">
                                                                    <div> <img src="{{asset('frontend/images/project/eyes.svg')}}" class="image-date">
                                                                        <span></span>
                                                                    </div>
                                                                    <!-- <p class="mb-0">31 oct 8:30</p> -->
                                                                    <div><img src="{{asset('frontend/images/project/users.svg')}}" class="image-date"><span></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-voir text-right-voir">
                                                                <a href="{{route('see-applicants',$delete->id)}}" class="btn btn-blue w-95">Voir les
                                                                    postulants
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <p class="text-center">No Job Data Found!..</p>
                                                @endif
                                            </div>
                                            <div class="custom-pagination pt-5 pb-3">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1" id="prev">
                                                                &lt; </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" id="next">&gt;</a>
                                                        </li>
                                                    </ul>
                                                </nav>
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
@endsection
@section('script')
<script type="text/javascript ">
    $(".select2 ").select2();
</script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#profile-update') !!}



<script type="text/javascript">
    $("#bravo-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#bravo').modal('show');
    });
    $("#cv-btn").on('click', function() {
        $('#establishment').modal('hide');
        $('#cv-modal').modal('show');
    });
    
</script>
<script>
    // -------------------

    $(function() {
        $(".select-multi").multiselect({
            includeSelectAllOption: true
        });
    });
    $(document).ready(function() {
        $(".change-placeholder-select .multiselect").html("Type de poste");
    });

    // --------------------
    $("#pills-profile-tab").on('click', function() {
        $("#manager-id2").show();
        $("#manager-id").hide();
        $("#bread-id").show();
    });
    $("#pills-home-tab").on('click', function() {
        $("#manager-id2").hide();
        $("#manager-id").show();
        $("#bread-id").hide();
    });
</script>

<script>
    $(document).on('click', '#pills-sec-tab', function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var url = "{{route('profile')}}"
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                _token: CSRF_TOKEN,
            }
        });
    });
    $(document).on('click', '.delete', function(event) {
        var form = $(".deleteForm").closest("form");
        event.preventDefault();
        swal({
                title: 'Are you sure you want to delete this record?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
    $(document).on('click', '.pause', function(event) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var url = "{{route('holdJobData')}}"
        var id = $(this).attr("data-id");
        var hold = $(this).attr("data-hold") == 0 ? 1 : 0;
    
        $.ajax({
            url: url,
            method: 'POST',
            data: {id:id,hold:hold,
                _token: CSRF_TOKEN,
            },
            success: function(response) {
                if (response.success == true) {   //Message come from controller
                    toastr.success(response.message);
                    if(response.hold == '1'){
                        $('.pause'+id).addClass("btn-primary");
                        $('.pause'+id).removeClass("btn-met");
                    }else{
                        $('.pause'+id).removeClass("btn-primary");
                        $('.pause'+id).addClass("btn-met");
                    }
                }
            },
    });
    });

</script>


@endsection

</html>