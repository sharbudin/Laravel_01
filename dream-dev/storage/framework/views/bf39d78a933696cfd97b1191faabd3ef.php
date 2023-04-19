<?php $__env->startSection('Title','Reset Password @ DreamDev'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<style>
    .reg-cont {
        background: url("<?php echo e(asset('images/bg-01.jpg')); ?>");
        width: 100%;
        height: 100%;
        font-weight: bold;
    }

    form input,
    form i {
        cursor: pointer;
    }

    form label {
        padding-top: 10px;
    }

    .col-sm-2 {
        padding: 2px;
    }

</style>
</head>

<body>
    <div class="container-fluid reg-cont" style="padding: 5vh;width:100%;height:100%">
        <form method="POST" action="<?php echo e(url('ChangePassword')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="link" value=<?php echo e(Session::get('link')); ?>>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="passwordLabel" class="form-label">New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" onkeyup="checkPasswordStrength();"
                            autocomplete="off" name="password" id="password"
                            aria-describedby="inputGroupPrepend2" required>
                        <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                    <div id="password-strength-status"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="passwordLabel" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" autocomplete="off" name="password_confirmation"
                            id="password_confirmation" aria-describedby="inputGroupPrepend2" required>
                        <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <div class="row">
                        <button class="btn btn-primary" type="submit"><strong>Reset Password</strong></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<?php echo $__env->make('partials.resetHelper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/resetPassword.blade.php ENDPATH**/ ?>