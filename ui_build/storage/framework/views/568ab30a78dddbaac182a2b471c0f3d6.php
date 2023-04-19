<?php if((Session::has('login'))): ?>
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
    <body>
        <div class="containerOuterLayout">
            <img class="img_login" src="<?php echo e(asset('img/login_img.png')); ?>">
            <img class="img_header" src="<?php echo e(asset('img/header.png')); ?>">
            <img class="img_phone_symbol" src="<?php echo e(asset('img/phone_symbol.png')); ?>">
            <p class="title_header">We Need To Verify Your Identity</p>
            <input type="text" disabled class="verify_phone1" placeholder="       ">
            <form action="<?php echo e(route('postphone')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php if(Session::has("phone")): ?>
                    <input type="hidden" name="email" value="<?php echo e(Session::get('email')); ?>">
                    <input type="number" name="phone" value="<?php echo e(old('phone')); ?>" class="verify_phone2" placeholder="+91 ********<?php echo e(Session::get('phone')); ?>">
                <?php else: ?>
                    <input type="number" name="phone" value="<?php echo e(old('phone')); ?>" class="verify_phone2" placeholder="+1 ********20">
                <?php endif; ?>
                <span class="text_1">If your number is incorrect please reach out to</span>
                <span class="support_mail">itsupport@acrabrokerlinks.com</span>
                <button class="button_Send"><span class="text_Send">SEND TEXT</span></button>
            </form>
        </div>
    </body>
    </html>
<?php else: ?>
    <?php echo redirect()->to('/'); ?>

<?php endif; ?>
<?php /**PATH D:\Laravel\Laravel_01\ui_build\resources\views/send.blade.php ENDPATH**/ ?>