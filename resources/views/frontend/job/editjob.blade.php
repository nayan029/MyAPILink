@extends('frontend.master')
@section('title')
<title>ApiLink | Dashboard</title>
@endsection
@section('content')

<section class="back-f6 pb-5">
    <div class="container">
        <div class="publier-title">
            <a href="#" class="dark-text">
                <h1 class="publish-title">modifier l'offre d'emploi</h1>
            </a>
        </div>
        <div class="card sr-card">
            <div class="card-body">
                <form action="{{route('addorupdatejob',$id)}}" id="jobupdate" method="POST">
                    @csrf
                    <input type="hidden" value="{{$jobDetails->id}}" name="edit_id">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-xl-10 col-lg-10 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="publish-sec">
                                        <div class="form-group  mb-4">
                                            <label class="publish-labeldark mt-0">Intitulé du poste<span class="text-danger">*</span></label>
                                            <input type="text" value="{{$jobDetails->title}}" name="title" class="form-control inputicon2 form-publish">
                                            <span class="title-error text-danger"></span>
                                        </div>

                                        <h5 class="publish-labeldark">Lieu du poste<span class="text-danger">*</span></h5>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->address}}" name="address" class="form-control inputicon2 form-publish">
                                                    <span class="address-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Code postale<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->zip_code}}" name="postal_code" class="form-control inputicon2 form-publish" placeholder="04300">
                                                    <span class="postalcode-error text-danger"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="publish-smalllabel">Ville<span class="text-danger">*</span></label>
                                                    <select name="city" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        @if($jobDetails->city)
                                                        <option value=""></option>
                                                        <option value="{{$jobDetails->city}}" selected>{{$jobDetails->city}}</option>
                                                        @endif
                                                    </select>
                                                    <span class="city-error text-danger"></span>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Pays<span class="text-danger">*</span></label>
                                                    <select name="country" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        @if($jobDetails->country)
                                                        <option value=""></option>
                                                        <option value="{{$jobDetails->country}}" selected>{{$jobDetails->country}}</option>
                                                        @endif
                                                    </select>
                                                    <span class="country-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4 ">
                                                    <label class="publish-labeldark">Type de contrat proposé<span class="text-danger">*</span></label>
                                                    <select name="type_of_contract" class="cus-drop select2 form-publish" style="width: 100%;">
                                                        @if($jobDetails->type_of_contract)
                                                        <option value="{{$jobDetails->type_of_contract}}" selected>{{$jobDetails->type_of_contract}}</option>

                                                        @endif
                                                    </select>
                                                    <span class="contract-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group  mb-4 mt-4">
                                                    <label class="publish-smalllabel">Durée du contrat<span class="text-danger">*</span><span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->contract_length}}" name="duration_of_the_contract" class="form-control inputicon2 form-publish">
                                                    <span class="duration-contract-error text-danger"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            @php
                                           $arraynew = explode(",", $jobDetails->type_of_employment);
                                            @endphp

                                            <div class="col-md-6 pb-2">
                                                <h5 class="publish-labeldark">Type d'emploi<span class="text-danger">*</span></h5>
                                                <div class="custom-control custom-checkbox profile-check ">

                                                    <input type="checkbox" name="job_type[]" class="custom-control-input" id="Temps plein" value="Full-time" {{ ($jobDetails->type_of_employment = in_array('Full-time',$arraynew)  ? ' checked' : '') }}>
                                                    <label class="custom-control-label pro-check publish-check" for="Temps plein">Temps plein</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check">
                                                    <input type="checkbox" name="job_type[]" class="custom-control-input" id="Temps partiel" value="Part-time" {{($jobDetails->type_of_employment = in_array('Part-time',$arraynew)  ? ' checked' : '') }}>
                                                    <label class="custom-control-label pro-check publish-check" for="Temps partiel">Temps partiel</label>
                                                </div>
                                                <span class="job-type-error text-danger"></span>
                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-labeldark">Date de début du
                                                        contrat<span class="text-danger">*</span></label>
                                                    <input type="date" value="{{$jobDetails->contract_start_date}}" name="contract_start_date" class="form-control inputicon2 form-publish" placeholder="01/11/2021">
                                                    <span class="start-date-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut minimum<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{$jobDetails->minimum_gross_salary}}" name="minimum_gross_salary" class="num-input form-control inputicon2 form-publish">
                                                    <span class="min-salary-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Salaire brut
                                                        maximum<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{$jobDetails->maximum_gross_salary}}" name="maximum_gross_salary" class="num-input form-control inputicon2 form-publish">
                                                    <span class="max-salary-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Expérience Minimum<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->minimum_experience}}" name="minimum_experience" class="form-control inputicon2 form-publish" placeholder="2 ans">
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
                                                    <input type="date" value="{{$jobDetails->deadline_for_receipt_of_applications}}" name="deadline_for_receipt_of_applications" class="datepicker1 form-control inputicon2 form-publish">
                                                    <span class="deadlineapp-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input type="checkbox" name="deadline_for_receipt_of_applications" class="custom-control-input" id="checkone">
                                                    <label class="custom-control-label pro-check publish-check" for="checkone">Je ne souhaite pas ajouter de date limite
                                                        de
                                                        candidature<span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Adresse e-mail<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->email}}" name="email_address" class="datepicker1 form-control inputicon2 form-publish">
                                                    <span class="email-error text-danger"></span>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Numéro de téléphone<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->phone}}" name="phone" class="datepicker1 form-control inputicon2 form-publish">
                                                    <span class="phone-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox profile-check ">
                                                @php
                                           $contract = explode(",", $jobDetails->contact_thorugh);
                                            @endphp
                                                    <input name="contact_thorugh[]" type="checkbox" class="custom-control-input" value="email_regarding" id="check1" {{ ($jobDetails->contact_thorugh = in_array('email_regarding',$contract)  ? ' checked' : '') }}>
                                                    <label class="custom-control-label pro-check publish-check" for="check1">J'autorise les candidats à me contacter par
                                                        mail au sujet de leur candidature<span class="text-danger">*</span></label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input name="contact_thorugh[]" type="checkbox" class="custom-control-input " value="phone_regarding" id="check2" {{ ($jobDetails->contact_thorugh = in_array('phone_regarding',$contract)  ? ' checked' : '') }}>
                                                    <label class="custom-control-label pro-check publish-check" for="check2">J'autorise les candidats à me contacter par
                                                        téléphone au sujet de leur candidature</label>
                                                </div>
                                                <div class="custom-control custom-checkbox profile-check ">
                                                    <input name="contact_thorugh[]" type="checkbox" class="custom-control-input" value="apilink_regarding" id="check3" {{ ($jobDetails->contact_thorugh = in_array('apilink_regarding',$contract)  ? ' checked' : '') }}>
                                                    <label class="custom-control-label pro-check publish-check" for="check3">Je souhaite recevoir les candidatures
                                                        uniquement via Apilink</label>
                                                </div>
                                                <span class="contract-through-error text-danger"></span>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Site Internet<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{$jobDetails->website}}" name="website" class="form-control inputicon2 form-publish">
                                                    <span class="website-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Description de
                                                        l'emploi</label>
                                                    <textarea name="job_description" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->job_description}}</textarea>
                                                    <span class="desc-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Mission de l’emploi<span class="text-danger">*</span></label>
                                                    <textarea name="job_mission" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->employment_mission}}</textarea>
                                                    <span class="mission-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group  mb-4">
                                                    <label class="publish-smalllabel">Ce que vous recherchez<span class="text-danger">*</span></label>
                                                    <textarea name="what_you_are_looking_for" id="" cols="30" rows="6" class="form-control textarea-form inputicon2">{{$jobDetails->what_you_are_looking}}</textarea>
                                                    <span class="looking-error text-danger"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end mt-5">
                                            <button type="button" class="btn btn-outline-cancel annuler-btns publish-btns">Annuler</button>
                                            <button type="submit" class="btn btn-yellow publish-btns" onclick="return validation();">Sauvegarder</button>
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
        var email = $('#email').val();
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


        var emailverify = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
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
                    if (msg == 1) {
                        $('.email-error').html("This Email is already exist.");
                        response = true;
                    } else {
                        response = false;

                    }
                },
                error: function(jqXHR, textStatus) {
                    response = false;
                }
            });
            return response;
        }

        if (email.trim() == "") {
            $('.email-error').html('Please enter Email');
            temp++;
        } else {
            if (uniqueEmailCheck(email) == true) {
                $('.email-error').html("This email is already exist.");
                temp++;
            } else {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // for valid email validation
                if (!regex.test(email)) {
                    alert("ss")
                    $('.email-error').html('Please enter Valid Email');
                    temp++;
                }
            }
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

        if ($('input[name="contact_thorugh[]"]:checked').length == 0) {
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
      
        if (temp == 0) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection