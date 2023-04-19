<script type="text/javascript">
    function checkPasswordStrength() {
        var number = /([0-9])/;
        var alphabets = /([a-zA-Z])/;
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        var password = $("#passwordReset").val();
        if(password.length<6) {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('weak-password');
            $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
        } else {
            if(password.match(number) && password.match(alphabets) && password.match(special_characters)) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('strong-password');
                $('#password-strength-status').html("Strong");
            }
            else {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('medium-password');
                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
            }
        }

        $('#passwordReset_confirmation').focusout(function(){
            var pass = $('#passwordReset').val();
            var pass2 = $('#passwordReset_confirmation').val();
            if(pass != pass2){
                $('#passwordReset').val('');
                $('#passwordReset_confirmation').val('');
                confirm('Password didn\'t match');
            }
        });
    }
</script>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#passwordReset');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('bi-eye');
    });



</script>
<?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/partials/resetHelper.blade.php ENDPATH**/ ?>