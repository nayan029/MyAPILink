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

    <section class="back-f6 pb-5">
        <div class="container">
            <div class="publier-title">
                <a href="#" class="dark-text">
                    <h1 class="publish-title">modifier l'offre d'emploi</h1>
                </a>
            </div>
            <div class="card sr-card">
                <div class="card-body">
                    <form action="{{route('addorupdatejob')}}" id="jobadd" method="POST">
                        @csrf
                        <input type="hidden"  value="{{$jobDetails->id}}" name="edit_id">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-xl-10 col-lg-10 col-md-11">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="publish-sec">
                                            <div class="form-group  mb-4">
                                                <label class="publish-labeldark mt-0">Intitulé du poste</label>
                                                <input type="text" value="{{$jobDetails->title}}" name="title" class="form-control inputicon2 form-publish">
                                            </div>

                                            <h5 class="publish-labeldark">Lieu du poste</h5>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Adresse</label>
                                                        <input type="text" value="{{$jobDetails->address}}" name="address" class="form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Code postale</label>
                                                        <input type="text" value="{{$jobDetails->zip_code}}" name="zip_code" class="form-control inputicon2 form-publish" placeholder="04300">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="publish-smalllabel">Ville</label>
                                                        <select name="city" class="cus-drop select2 form-publish" style="width: 100%;">
                                                            <option value=""></option>
                                                            <option value="Micro-crèche">Micro-crèche</option>
                                                            <option value="Crèche privée d’entreprise ou
                                                                inter-entreprises">Crèche privée d’entreprise ou
                                                                inter-entreprises
                                                            </option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Pays</label>
                                                        <select name="country" class="cus-drop select2 form-publish" style="width: 100%;">
                                                            <option value=""></option>
                                                            <option value="US">US</option>
                                                            <option value="Franch">Franch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4 ">
                                                        <label class="publish-labeldark">Type de contrat proposé</label>
                                                        <select name="type_of_contract" class="cus-drop select2 form-publish" style="width: 100%;">
                                                            <option value="CDI">CDI</option>
                                                            <option value="CDD">CDD</option>
                                                            <option value="Stage">Stage</option>
                                                            <option value="Alternance">Alternance</option>
                                                            <option value="Freelance / Indépendant">Freelance / Indépendant</option>
                                                            <option value="remplaçements">remplaçements</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <div class="form-group  mb-4 mt-4">
                                                        <label class="publish-smalllabel">Durée du contrat</label>
                                                        <input type="text" value="{{$jobDetails->contract_length}}" name="contract_length" class="form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 pb-2">
                                                    <h5 class="publish-labeldark">Type d'emploi</h5>
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input type="checkbox" name="type_of_employment[]"  class="custom-control-input" id="Temps plein">
                                                        <label class="custom-control-label pro-check publish-check" for="Temps plein">Temps plein</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox profile-check">
                                                        <input type="checkbox" name="type_of_employment[]" class="custom-control-input" id="Temps partiel">
                                                        <label class="custom-control-label pro-check publish-check" for="Temps partiel">Temps partiel</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pb-2">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-labeldark">Date de début du
                                                            contrat</label>
                                                        <input type="date" value="{{$jobDetails->contract_start_date}}" name="contract_start_date" class="form-control inputicon2 form-publish" placeholder="01/11/2021">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Salaire brut minimum</label>
                                                        <input type="number"  value="{{$jobDetails->minimum_gross_salary}}" name="minimum_gross_salary" class="num-input form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Salaire brut
                                                            maximum</label>
                                                        <input type="number" value="{{$jobDetails->maximum_gross_salary}}" name="maximum_gross_salary" class="num-input form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Expérience Minimum</label>
                                                        <input type="text" value="{{$jobDetails->minimum_experience}}" name="minimum_experience" class="form-control inputicon2 form-publish" placeholder="2 ans">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="publish-labeldark">Date limite de reception des
                                                        candidatures</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <input type="text"  value="{{$jobDetails->deadline_for_receipt_of_applications}}" name="deadline_for_receipt_of_applications" class="datepicker1 form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input type="checkbox" name="deadline_for_receipt_of_applications" class="custom-control-input" id="checkone">
                                                        <label class="custom-control-label pro-check publish-check" for="checkone">Je ne souhaite pas ajouter de date limite
                                                            de
                                                            candidature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Adresse e-mail</label>
                                                        <input type="text"  value="{{$jobDetails->email}}" name="email" class="datepicker1 form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Numéro de téléphone</label>
                                                        <input type="text" value="{{$jobDetails->phone}}"  name="phone" class="datepicker1 form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input name="email_regarding" type="checkbox" class="custom-control-input " id="check1">
                                                        <label class="custom-control-label pro-check publish-check" for="check1">J'autorise les candidats à me contacter par
                                                            mail au sujet de leur candidature</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input name="phone_regarding" type="checkbox" class="custom-control-input " id="check2">
                                                        <label class="custom-control-label pro-check publish-check" for="check2">J'autorise les candidats à me contacter par
                                                            téléphone au sujet de leur candidature</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox profile-check ">
                                                        <input name="apilink_regarding" type="checkbox" class="custom-control-input " id="check3">
                                                        <label class="custom-control-label pro-check publish-check" for="check3">Je souhaite recevoir les candidatures
                                                            uniquement via Apilink</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Site Internet</label>
                                                        <input type="text" value="{{$jobDetails->website}}" name="website" class="form-control inputicon2 form-publish">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Description de
                                                            l'emploi</label>
                                                        <textarea name="job_description" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->job_description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Mission de l’emploi</label>
                                                        <textarea name="employment_mission" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->employment_mission}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group  mb-4">
                                                        <label class="publish-smalllabel">Ce que vous recherchez</label>
                                                        <textarea name="what_you_are_looking" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->what_you_are_looking}}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-outline-cancel annuler-btns publish-btns">Annuler</button>
                                                <button type="submit" class="btn btn-yellow publish-btns">Sauvegarder</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
    </section>
@endsection
@section('page-js')
      {!! $jobvalidator->selector('#jobadd') !!}
@endsection