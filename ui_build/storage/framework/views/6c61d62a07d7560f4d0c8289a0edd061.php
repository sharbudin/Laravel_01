<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glide - Arca Lending</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Send.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body style="background: grey;">
    <div class="row containerOuterLayout">
        <img class="img_login" src="<?php echo e(asset('img/login_img.png')); ?>">
        <img class="img_header" src="<?php echo e(asset('img/header.png')); ?>">
        <img class="img_phone_symbol" src="<?php echo e(asset('img/phone_symbol.png')); ?>">
        <p class="title_header">We Need To Verify Your Identity</p>
        <input type="text" disabled class="verify_phone1" placeholder="       "><input type="number" class="verify_phone2"
            placeholder="+1 *******20">
        <span class="text_1">If your number is incorrect please reach out to</span>
        <span class="support_mail">itsupport@acrabrokerlinks.com</span>
        <a href="<?php echo e(url('verify')); ?>" class="button_Send"><span class="text_Send">SEND TEXT</span></a>
    </div>
</body>

</html>
<?php /**PATH D:\Laravel\ui_build\resources\views/send.blade.php ENDPATH**/ ?>