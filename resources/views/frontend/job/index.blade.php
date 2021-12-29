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
                                            <input type="text" name="title" id="title" class="form-control inputicon2 form-publish" placeholder="
Titre">
                                            <span class="title-error text-danger"></span>

                                        </div>

                                        <h5 class="publish-labeldark">Lieu du poste</h5>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" id="address" class="form-control inputicon2 form-publish" placeholder="
Adresse">
                                                    <span class="address-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Code postale<span class="text-danger">*</span></label>
                                                    <input type="text" name="postal_code" id="postal_code" maxlength="5" onkeypress='return isNumber(event)' class="form-control inputicon2 form-publish" placeholder="
Code postal">
                                                    <span class="postalcode-error text-danger"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="publish-smalllabel">Ville<span class="text-danger">*</span></label>
                                                    <select name="city" id="city" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        <option value=""></option>
                                                        <option value="Micro-crèche">Micro-crèche</option>
                                                        <option value="Crèche privée d’entreprise ou
                                                                inter-entreprises">Crèche privée d’entreprise ou
                                                            inter-entreprises
                                                        </option>
                                                    </select>
                                                    <span class="city-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Pays<span class="text-danger">*</span></label>
                                                    <select name="country" id="country" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        <option value=""></option>
                                                        <option value="US">US</option>
                                                        <option value="Franch">Franch</option>
                                                    </select>
                                                    <span class="country-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4 ">
                                                    <label class="publish-labeldark">Type de contrat proposé<span class="text-danger">*</span></label>
                                                    <select name="type_of_contract" id="type_of_contract" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        <option value=""></option>
                                                        <option value="CDI">CDI</option>
                                                        <option value="CDD">CDD</option>
                                                        <option value="Stage">Stage</option>
                                                        <option value="Alternance">Alternance</option>
                                                        <option value="Freelance / Indépendant">Freelance / Indépendant</option>
                                                        <option value="remplaçements">remplaçements</option>
                                                    </select>
                                                    <span class="contract-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group  mb-4 mt-4">
                                                    <label class="publish-smalllabel">Durée du contrat<span class="text-danger">*</span></label>
                                                    <input type="text" id="duration_of_the_contract" name="duration_of_the_contract" class="form-control inputicon2 form-publish" placeholder="Durée du contrat">
                                                    <span class="duration-contract-error text-danger"></span>
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
                                                <span class="job-type-error text-danger"></span>
                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-labeldark">Date de début du
                                                        contrat<span class="text-danger">*</span></label>
                                                    <input type="date" name="contract_start_date" id="contract_start_date" class="form-control inputicon2 form-publish" placeholder="01/11/2021">
                                                    <span class="start-date-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut minimum<span class="text-danger">*</span></label>
                                                    <input type="text" name="minimum_gross_salary" id="min_salary" onkeypress='return isNumber(event)' class="num-input form-control inputicon2 form-publish" placeholder="Salaire brut minimum">
                                                    <span class="min-salary-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut
                                                        maximum<span class="text-danger">*</span></label>
                                                    <input type="text" name="maximum_gross_salary" id="max_salary" onkeypress='return isNumber(event)' class="num-input form-control inputicon2 form-publish" placeholder="Salaire brut maximum">
                                                    <span class="max-salary-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Expérience Minimum<span class="text-danger">*</span></label>
                                                    <input type="text" name="minimum_experience" id="min_exp" class="form-control inputicon2 form-publish" placeholder="2 ans">
                                                    <span class="min-exp-error text-danger"></span>
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
                                                    <input type="date" value="deadline_check" name="deadline_for_receipt_of_applications" id="deadline_applicantions" class="datepicker1 form-control inputicon2 form-publish" placeholder="">
                                                    <span class="deadlineapp-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input type="checkbox" value="check" name="check_deadline_applicantions" class="custom-control-input" id="checkone" placeholder="">
                                                    <label class="custom-control-label pro-check publish-check" for="checkone">Je ne souhaite pas ajouter de date limite
                                                        de
                                                        candidature<span class="text-danger">*</span></label>
                                                    <!-- <span class="address-error text-danger"></span> -->

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse e-mail<span class="text-danger">*</span></label>
                                                    <input type="email" name="email_address" id="email_address" class="datepicker1 form-control inputicon2 form-publish" placeholder="E-mail">
                                                    <span class="email-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Numéro de téléphone<span class="text-danger">*</span></label>
                                                    <input type="text" name="phone" maxlength="10" id="phone" class="datepicker1 form-control inputicon2 form-publish" placeholder="Numéro de téléphone">
                                                    <span class="phone-error text-danger"></span>

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
                                                <span class="contract-through-error text-danger"></span>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Site Internet<span class="text-danger">*</span></label>
                                                    <input type="text" name="website" id="website" class="form-control inputicon2 form-publish" placeholder="Site Internet">
                                                    <span class="website-error text-danger"></span>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Description de
                                                        l'emploi<span class="text-danger">*</span></label>
                                                    <textarea name="job_description" id="job_description" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="La description"></textarea>
                                                    <span class="desc-error text-danger"></span>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Mission de l’emploi<span class="text-danger">*</span></label>
                                                    <textarea name="job_mission" id="job_mission" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="Mission"></textarea>
                                                    <span class="mission-error text-danger"></span>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Ce que vous recherchez<span class="text-danger">*</span></label>
                                                    <textarea name="what_you_are_looking_for" id="looking_for" cols="30" rows="6" class="form-control textarea-form inputicon2" placeholder="que cherchez-vous"></textarea>
                                                    <span class="looking-error text-danger"></span>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end mt-5">
                                            <button type="button" class="btn btn-outline-cancel annuler-btns publish-btns">Annuler</button>
                                            <button type="submit" onclick="return validation();" class="btn btn-yellow publish-btns">Sauvegarder</button>
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
<script>
    function validation() {
        var temp = 0;
        var title = $('#title').val();
        var address = $('#address').val();
        var postalcode = $('#postal_code').val();
        var city = $('#city').val();
        var country = $('#country').val();
        var cotracttype = $('#type_of_contract').val();
        var durationcontract = $('#duration_of_the_contract').val();
        var startdate = $('#contract_start_date').val();
        var minsalary = $('#min_salary').val();
        var maxsalary = $('#max_salary').val();
        var minexp = $('#min_exp').val();
        var deadlineapp = $('#deadline_applicantions').val();
        var email = $('#email_address').val();
        var phone = $('#phone').val();
        var website = $('#website').val();
        var description = $('#job_description').val();
        var mission = $('#job_mission').val();
        var lookingfor = $('#looking_for').val();

        var number = /([0-9])/;
        var websitecheck = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;

        $('.title-error').html("");
        if (title == "") {
            $('.title-error').html("Please enter Title");
            temp++
        } else {
            if (title.match(number)) {
                $('.title-error').html("Numbers not allowed");
                temp++
            } else {
                if (title.length >= 25) {
                    $('.title-error').html("Title must not be grater than 25 characters.");
                    temp++
                }
            }
        }

        if (address == "") {
            $('.address-error').html("Please enter Address");
            temp++
        } else {
            $('.address-error').html('');
        }


        if (postalcode == "") {
            $('.postalcode-error').html("Please enter Postal Code");
            temp++
        } else {
            if (postalcode.length != 5) {
                $('.postalcode-error').html("Postal Code must be 5 digits");
                temp++
            } else {
                $('.postalcode-error').html('');
            }
        }

        if (city == "") {
            $('.city-error').html("Please enter City");
            temp++
        } else {
            $('.city-error').html('');
        }

        if (country == "") {
            $('.country-error').html("Please enter Country");
            temp++
        } else {
            $('.country-error').html('');
        }

        if (cotracttype == "") {
            $('.contract-error').html("Please enter Type of contract");
            temp++
        } else {
            $('.contract-error').html('');
        }

        if (durationcontract == "") {
            $('.duration-contract-error').html("Please enter Duration of the contract");
            temp++
        } else {
            $('.duration-contract-error').html('');
        }

        if ($('input[name="job_type"]').length == 0) {
            $('.job-type-error').html('Please enter Job type');
            temp++
        } else {
            $('.job-type-error').html('');
        }

        if (startdate == "") {
            $('.start-date-error').html("Please enter Start Date");
            temp++
        } else {
            $('.start-date-error').html('');
        }

        $('.min-salary-error').html('');
        if (minsalary == "") {
            $('.min-salary-error').html("Please enter Minumum Salary");
            temp++
        } else {
            if (!minsalary.match(number)) {
                $('.min-salary-error').html("Minumum Salary must be a number");
                temp++
            } else {
                if (minsalary.length < 4) {
                    $('.min-salary-error').html("Minumum salary must be grater than 4 digits.");
                    temp++
                }
            }
        }

        $('.max-salary-error').html('');
        if (maxsalary == "") {
            $('.max-salary-error').html("Please enter Maximum Salary");
            temp++
        } else {
            if (!maxsalary.match(number)) {
                $('.max-salary-error').html("Maximum Salary must be a number");
                temp++
            }
        }


        if (minexp == "") {
            $('.min-exp-error').html("Please enter Minimum experience");
            temp++
        } else {
            $('.min-exp-error').html('');
        }


        if (deadlineapp == "") {
            $('.deadlineapp-error').html("Please enter Deadline of applications");
            temp++
        } else {
            $('.deadlineapp-error').html('');
        }




        $('.phone-error').html("");
        if (phone == "") {
            $('.phone-error').html("Please enter Phone");
            temp++
        } else {
            if (!phone.match(number)) {
                $('.phone-error').html("Phone number must be a digit");
                temp++
            } else {
                if (phone != 10) {
                    $('.phone-error').html("Phone number must be 10 digits");
                    temp++
                }
            }
        }

        if ($('input[name="contact_thorugh"]').length == 0) {
            $('.contract-through-error').html('Please enter Contract through application');
            temp++
        } else {
            $('.contract-through-error').html('');
        }

        $('.website-error').html('');
        if (website == "") {
            $('.website-error').html('Please enter Website');
            temp++
        } else {
            if (!website.match(websitecheck)) {
                $('.website-error').html('Please enter valid Website');
                temp++
            }
        }

        if (description == "") {
            $('.desc-error').html("Please enter Description");
            temp++
        } else {
            $('.desc-error').html("");
        }

        if (mission == "") {
            $('.mission-error').html("Please enter Job Mission");
            temp++
        } else {
            $('.mission-error').html("");
        }

        if (lookingfor == "") {
            $('.looking-error').html("Please enter What you are looking for");
            temp++
        } else {
            $('.looking-error').html("");
        }

        if (email == "") {
            $('.email-error').html("Please enter E-mail");
            temp++
        } else {
            if (uniqueEmailCheck(email) ==
                true) {
                $('.email-error').html("This Email is Already Exist.");
                temp++
            } else {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // for valid email validation
                if (!regex.test(email)) {
                    $('.email-error').html('Please Enter Valid Email');
                    temp++
                }
            }
        }

        function uniqueEmailCheck(email) {
            response = false;
            $.ajax({
                url: "{{ URL::to('/email'); }}",
                'type': "POST",
                data: {
                    email: email,
                    '_token': "{{ csrf_token(); }}"
                },
                success: function(msg) {
                    //  console.log(msg)
                    if (msg == 1) {
                        $('.email-error').html("This email is already exist.");
                        response = true;
                    } else {
                        $(".email-error").html("");
                        response = false;

                    }
                },
                error: function(jqXHR, textStatus) {
                    $(".email-error").html("");
                    response = false;
                }
            });
            return response;
        }

        if (temp == 0) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection