<script type="text/javascript">
    $(document).ready(function () {
        $('#country-dropdown').on('change', function () {
            var country_id = this.value;
            var pcode  = "";
            $("#state-dropdown").html('');
            $.ajax({
                url: "{{url('get-states-by-country')}}",
                type: "POST",
                data: {
                    country_id: country_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state-dropdown').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                            pcode = value.phone_code;
                    });
                    $('#city-dropdown').html(
                        '<option value="">Select State First</option>');



                    $('#countryPhoneCode').html(pcode);
                }
            });
        });

        $('#state-dropdown').on('change', function () {
            var state_id = this.value;
            $("#city-dropdown").html('');
            $.ajax({
                url: "{{url('get-cities-by-state')}}",
                type: "POST",
                data: {
                    state_id: state_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#city-dropdown').html('<option value="">Select City</option>');
                    $.each(result.cities, function (key, value) {
                        $("#city-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#empCheckBox').on('change', function () {
            var pass1 = $("#password").val();
            var pass2 = $("#password_confirmation").val();

        });

        $('#password_confirmation').focusout(function(){
            var pass = $('#password').val();
            var pass2 = $('#password_confirmation').val();
            if(pass != pass2){
                $('#password').val('');
                $('#password_confirmation').val('');
                confirm('Password didn\'t match');
            }
        });

    });

    $("#password_confirmation").on('change', function () {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirmation").val();
        if (password != confirmPassword)
            $("#password").css("background-color", "red");
        else if (password == confirmPassword)
            $("#password").css("background-color", "chartreuse");
        $("#password_confirmation").css("background-color", "chartreuse");
    });


    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('bi-eye');
    });
</script>
