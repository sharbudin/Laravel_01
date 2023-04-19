<?php $__env->startSection('Title','Reset Password @ DreamDev'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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

        <form method="POST" action="<?php echo e(url('ResetPassCode')); ?>">
            <?php echo csrf_field(); ?>
            <?php if(Session::has("success")): ?>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-success alert-dismissible"><button type="button"
                            class="close">&times;</button><?php echo e(Session::get('success')); ?></div>
                </div>
            </div>
            <?php elseif(Session::has("warning")): ?>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-warning alert-dismissible"><button type="button"
                            class="close">&times;</button><?php echo e(Session::get('warning')); ?></div>
                </div>
            </div>
            <?php elseif(Session::has("error")): ?>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-warning alert-dismissible"><button type="button"
                            class="close">&times;</button><?php echo e(Session::get('error')); ?></div>
                </div>
            </div>
            <?php endif; ?>

            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="validationDefaultUsername" class="form-label"> Email ID </label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" autocomplete="off" name="username" id="username"
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

    </div>
</body>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/Laravel/ajith/dream-dev/resources/views/forgetpass.blade.php ENDPATH**/ ?>