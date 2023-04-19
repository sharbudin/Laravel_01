<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glide - Arca Lending</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/verify.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body style="background: grey;">
    <div class="row containerOuterLayout">
        <img class="img_login" src="<?php echo e(asset('img/login_img.png')); ?>">
        <img class="img_header" src="<?php echo e(asset('img/header.png')); ?>">
        <p class="title_header1">Enter Code</p>
        <p class="title_header2">We texted your phone +<strong>XX XXXXXXX21,</strong></p>
        <p class="title_header3">Please enter the Code to sign in.</p>
        <input type="text" class="verify_phone2" placeholder="Enter Code">
        <span class="text_1">If your number is incorrect please reach out to</span>
        <span class="support_mail">itsupport@acrabrokerlinks.com</span>
        <a href="<?php echo e(url('dashboard')); ?>" class="button_verify"><span class="text_Send">Verify</span></a>
    </div>
</body>

</html>
<?php /**PATH D:\Laravel\ui_build\resources\views/verify.blade.php ENDPATH**/ ?>