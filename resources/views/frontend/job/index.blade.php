@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')

<section class="back-f6 pb-5">
    <div class="container">
        <div class="publier-title">
            <a href="job-listing.html" class="dark-text">
                <h1 class="publish-title">Publier une nouvelle offre d’emploi</h1>
            </a>
        </div>
        <div class="card sr-card">
            <div class="card-body">
                <form action="{{route('addorupdatejob',$id)}}" id="jobadd" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center ">
                        <div class="col-xl-10 col-lg-10 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="publish-sec">
                                        <div class="form-group  mb-4">
                                            <label class="publish-labeldark mt-0">Intitulé du poste <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control inputicon2 form-publish" placeholder="
Titre">
                                        </div>

                                        <h5 class="publish-labeldark">Lieu du poste</h5>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" class="form-control inputicon2 form-publish" placeholder="
Adresse">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Code postale<span class="text-danger">*</span></label>
                                                    <input type="text" name="postal_code" maxlength="6" onkeypress='return isNumber(event)' class="form-control inputicon2 form-publish" placeholder="
Code postal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="publish-smalllabel">Ville<span class="text-danger">*</span></label>
                                                    <select name="city" class="cus-drop select2 form-publish"  style="width: 100%;">  
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
                                                    <label class="publish-smalllabel">Pays<span class="text-danger">*</span></label>
                                                    <select name="country" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        <option value="US">US</option>
                                                        <option value="Franch">Franch</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4 ">
                                                    <label class="publish-labeldark">Type de contrat proposé<span class="text-danger">*</span></label>
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
                                                    <label class="publish-smalllabel">Durée du contrat<span class="text-danger">*</span></label>
                                                    <input type="text" name="duration_of_the_contract" class="form-control inputicon2 form-publish" placeholder="Durée du contrat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pb-2">
                                                <h5 class="publish-labeldark">Type d'emploi<span class="text-danger">*</span></h5>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input type="checkbox" name="job_type[]" value="Full-time" class="custom-control-input" id="Temps plein">
                                                    <label class="custom-control-label pro-check publish-check" for="Temps plein">Temps plein</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" name="job_type[]" value="Part-time" class="custom-control-input" id="Temps partiel">
                                                    <label class="custom-control-label pro-check publish-check" for="Temps partiel">Temps partiel</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-labeldark">Date de début du
                                                        contrat<span class="text-danger">*</span></label>
                                                    <input type="date" name="contract_start_date" class="form-control inputicon2 form-publish" placeholder="01/11/2021">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut minimum<span class="text-danger">*</span></label>
                                                    <input type="text" name="minimum_gross_salary" onkeypress='return isNumber(event)' class="num-input form-control inputicon2 form-publish" placeholder="Salaire brut minimum">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut
                                                        maximum<span class="text-danger">*</span></label>
                                                    <input type="text" name="maximum_gross_salary" onkeypress='return isNumber(event)' class="num-input form-control inputicon2 form-publish" placeholder="Salaire brut maximum">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Expérience Minimum<span class="text-danger">*</span></label>
                                                    <input type="text" name="minimum_experience" class="form-control inputicon2 form-publish" placeholder="2 ans">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="publish-labeldark">Date limite de reception des
                                                    candidatures<span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <input type="date" value="deadline_check" name="deadline_for_receipt_of_applications" class="datepicker1 form-control inputicon2 form-publish" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input type="checkbox" name="deadline_for_receipt_of_applications" class="custom-control-input" id="checkone" placeholder="">
                                                    <label class="custom-control-label pro-check publish-check" for="checkone">Je ne souhaite pas ajouter de date limite
                                                        de
                                                        candidature<span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse e-mail<span class="text-danger">*</span></label>
                                                    <input type="text" name="email_address" class="datepicker1 form-control inputicon2 form-publish" placeholder="
E-mail">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Numéro de téléphone<span class="text-danger">*</span></label>
                                                    <input type="text" name="phone" maxlength="10" class="datepicker1 form-control inputicon2 form-publish" placeholder="Numéro de téléphone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input name="contact_thorugh[]" type="checkbox" value="email_regarding" class="custom-control-input " id="check1">
                                                    <label class="custom-control-label pro-check publish-check" for="check1">J'autorise les candidats à me contacter par
                                                        mail au sujet de leur candidature<span class="text-danger">*</span></label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input name="contact_thorugh[]" type="checkbox" value="phone_regarding" class="custom-control-input " id="check2">
                                                    <label class="custom-control-label pro-check publish-check" for="check2">J'autorise les candidats à me contacter par
                                                        téléphone au sujet de leur candidature</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input name="contact_thorugh[]" type="checkbox" value="apilink_regarding" class="custom-control-input " id="check3">
                                                    <label class="custom-control-label pro-check publish-check" for="check3">Je souhaite recevoir les candidatures
                                                        uniquement via Apilink</label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Site Internet<span class="text-danger">*</span></label>
                                                    <input type="text" name="website" class="form-control inputicon2 form-publish" placeholder="Site Internet">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Description de
                                                        l'emploi<span class="text-danger">*</span></label>
                                                    <textarea name="job_description" id="" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="La description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Mission de l’emploi<span class="text-danger">*</span></label>
                                                    <textarea name="job_mission" id="" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="Mission"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Ce que vous recherchez<span class="text-danger">*</span></label>
                                                    <textarea name="what_you_are_looking_for" id="" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="que cherchez-vous"></textarea>
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
@section('script')
{!! $jobvalidator->selector('#jobadd') !!}
@endsection