<?php if((Session::has('send'))): ?>
    <?php echo Session::forget('login'); ?>

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
    <body>
        <div class="containerOuterLayout">
            <img class="img_login" src="<?php echo e(asset('img/login_img.png')); ?>">
            <img class="img_header" src="<?php echo e(asset('img/header.png')); ?>">
            <p class="title_header1">Enter Code</p>
            <?php if(Session::has("phone")): ?>
                <p class="title_header2">We texted your phone +<strong>91 XXXXXXXX<?php echo e(Session::get('phone')); ?>,</strong></p>
            <?php else: ?>
                <p class="title_header2">We texted your phone +<strong>XX XXXXXXX21,</strong></p>
            <?php endif; ?>
            <p class="title_header3">Please enter the Code to sign in.</p>
            <form action="<?php echo e(route('postcode')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="email" value="<?php echo e(Session::get('email')); ?>">
                <input type="text" name="otp" class="verify_phone2" value="<?php echo e(Session::get('verifycode')); ?>" placeholder="Enter Code">
                <span class="text_1">If your number is incorrect please reach out to</span>
                <span class="support_mail">itsupport@acrabrokerlinks.com</span>
                <button class="button_verify"><span class="text_Send">Verify</span></button>
            </form>
        </div>
    </body>
    <script>
        const container = document.querySelector('.containerOuterLayout');
        const content = document.querySelector('.containerOuterLayout');

        if (content.offsetWidth <= container.offsetWidth) {
        container.style.overflowX = 'hidden'; // hide horizontal scrollbar
        }
    </script>
    </html>
<?php else: ?>
    <?php echo redirect()->to('send'); ?>

<?php endif; ?>
<?php /**PATH D:\Ajith\ui_build\resources\views/verify.blade.php ENDPATH**/ ?>