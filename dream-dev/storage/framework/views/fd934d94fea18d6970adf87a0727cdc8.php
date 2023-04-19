<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
        $(function () {
            $("#tabs").tabs();
        });

    </script>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.recaptcha.sitekey')); ?>"></script>
<script>
         grecaptcha.ready(function() {
             grecaptcha.execute('<?php echo e(config('services.recaptcha.sitekey')); ?>', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
</script>

    <title>Form Testing</title>

</head>

<body style="color:rgb(154, 154, 158);">
    <div class="container-fluid ">
        <?php if($chk == 'register'): ?>
            <?php echo $__env->make('register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <input type="hidden" name="recaptcha" id="recaptcha">
        <?php elseif($chk == 'login'): ?>
            <?php echo $__env->make('login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

    </div>

</body>

</html>
<?php /**PATH D:\Laravel\dream-dev\resources\views/home.blade.php ENDPATH**/ ?>