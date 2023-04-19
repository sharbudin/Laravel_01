<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glide - Arca Lending</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body style="background: grey;">

    <div class="row containerOuterLayout">
        <img class="img_login" src="<?php echo e(asset('img/login_img.png')); ?>">
        <img  class="img_header" src="<?php echo e(asset('img/header.png')); ?>">
        <p class="title_header">Welcome to Acra Lending Broker Portal</p>
        <input type="text" class="login_email" placeholder="Email ID">
        <input type="password" class="login_password" placeholder="Password">
        <input type="checkbox" class="rembox" name="rememberBox" value="Remember me" id="rememberBox"><span class="rememberText">Remember me</span>
        <span  class="forgetPassword">Forget Your Password?</span>
        <a href="<?php echo e(url('send')); ?>" class="button_Next"><span class="text_Next">Next</span></a>
    </div>

</body>
</html>
<?php /**PATH D:\Laravel\ui_build\resources\views/login.blade.php ENDPATH**/ ?>