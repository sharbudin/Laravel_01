<?php $__env->startSection('Title','Reset Password @ DreamDev'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
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
        <?php if(Session::has("link")): ?>
            <form method="POST" action="<?php echo e(route("ChangePassword")); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="ResetCodeMail" value=<?php echo e(Session::get('link')); ?> disabled required>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <label for="empPassLabel" class="form-label">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" onkeyup="checkPasswordStrength();" autocomplete="off" name="empPassReset" id="empPassReset"
                                aria-describedby="inputGroupPrepend2" required>
                            <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <div id="password-strength-status"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <label for="empPassLabel" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" autocomplete="off" name="empPassReset_confirmation" id="empPassReset_confirmation"
                                aria-describedby="inputGroupPrepend2" required>
                            <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                    </div>
                </div>
            </form>
            <?php echo $__env->make('partials.resetHelper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif(Session::has("checkMail")): ?>
            <form action="" method="post" action="<?php echo e(route("VerifyOtp")); ?>">
                <?php echo csrf_field(); ?>
                <?php if(Session::has("success")): ?>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('success')); ?></div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <label for="validationDefaultUsername" class="form-label"> Email ID </label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" autocomplete="off" name="ResetEmailID" id="ResetEmailID"
                                aria-describedby="inputGroupPrepend2" value=<?php echo e(Session::get('checkMail')); ?> disabled required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="input-group">
                                <input type="hidden" name="ResetCodeMail" value=<?php echo e(Session::get('checkMail')); ?> disabled required>
                                <span class="input-group-text" id="inputGroupPrepend2">OTP : </span>
                                <input type="text" class="form-control" autocomplete="off" name="empOtp" id="empOtp"
                                    aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="container-fluid">
                            <div class="row">
                                <button class="btn btn-primary" type="submit"><strong> Verify </strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        <?php else: ?>
            <form method="POST" action="<?php echo e(route("ResetPassCode")); ?>">
                <?php echo csrf_field(); ?>
                <?php if(Session::has("success")): ?>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('success')); ?></div>
                    </div>
                </div>
                <?php elseif(Session::has("warning")): ?>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="alert alert-warning alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('warning')); ?></div>
                        </div>
                    </div>
                <?php elseif(Session::has("error")): ?>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="alert alert-warning alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('error')); ?></div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <label for="validationDefaultUsername" class="form-label"> Email ID </label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" autocomplete="off" name="ResetEmailID" id="ResetEmailID"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <div class="row">
                            <button class="btn btn-primary" type="submit"><strong>Get OTP</strong></button>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        <?php endif; ?>
    </div>
</body>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/forgetPass.blade.php ENDPATH**/ ?>