<script>
    $(document).ready(function () {
        $('#country-dropdown').on('change', function () {
            var country_id = this.value;
            var pcode  = "";
            $("#state-dropdown").html('');
            $.ajax({
                url: "<?php echo e(url('get-states-by-country')); ?>",
                type: "POST",
                data: {
                    country_id: country_id,
                    _token: '<?php echo e(csrf_token()); ?>'
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
                url: "<?php echo e(url('get-cities-by-state')); ?>",
                type: "POST",
                data: {
                    state_id: state_id,
                    _token: '<?php echo e(csrf_token()); ?>'
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
    });

</script>
<?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/partials/countryStateCity.blade.php ENDPATH**/ ?>