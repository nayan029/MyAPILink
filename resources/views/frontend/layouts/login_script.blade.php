<script>
    var togglePassword = document.getElementById("toggle-password");

    if (togglePassword) {
        togglePassword.addEventListener('click', function() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        });
    }

    $('#manager-login').on('submit', function(e) {
        e.preventDefault();
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
                    if (response.user == 2) {
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
    });
    // function userLogin() {

    //     $('.email-error').text('');
    //     $('.password-error').text('');
    //     $('.invalid-error').text('');

    //     $('#loginbtn').prop('disabled', true);

    //     $.ajax({
    //         url: '{{ route("user-auth") }}',
    //         method: 'POST',
    //         data: $('#manager-login').serialize(),
    //         success: function(response) {
    //             console.log(response.success);
    //             if (response.success == true) {

    //                 toastr.success(response.message);

    //                 if(response.user==2){

    //                 window.location.href ='{{ route("profile") }}';
    //                 }else{
    //                 window.location.href ='{{ route("mycandidate-profile") }}';
    //                 }

    //                 $('#loginbtn').prop('disabled', false);

    //             } else {
    //                 $('.email-error').text(response.errors.email);
    //                 $('.password-error').text(response.errors.password);
    //                 $('.invalid-error').text(response.errors.invalid);

    //                 $('#loginbtn').prop('disabled', false);
    //             }
    //         }
    //     });
    // }
    $(".forgot_password_mdl").click(function() {

        // $('#register_modal').modal('hide');

        $('.login_modal').modal('hide');

        $('#forgot_password_modal').modal('show');

    });
</script>