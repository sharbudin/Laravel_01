<?php $__env->startSection('Title','Register @ Dream Dev '); ?>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-multiselect.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>

<style>
    .body {
        background: url("<?php echo e(asset('images/bg-01.jpg')); ?>");
        width: 100%;
        height: 100%;
        font-weight: bold;
    }

    .btn-group {
        width: 100%;
        height: 50%;
    }

    form input,
    form i {
        cursor: pointer;
    }

    form label {
        padding-top: 10px;
    }

    .span-required {
        color: red;
    }

    @media (max-width: 992px) {
        .reg-cont {
            margin: auto;
            width: 50%;
            height: 100%;
        }
    }

    @media (max-width: 768px) {
        .reg-cont {
            margin: auto;
            width: 64%;
            height: 100%;
        }
    }

    @media (max-width: 576px) {
        .reg-cont {
            margin: auto;
            width: 90%;
            height: 100%;
        }
    }

</style>
</head>

<body class="body">
    <div class="reg-cont">
        <div class="container-fluid" style="padding: 5vh">
            <form method="POST" action="<?php echo e(url('registerUser')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <?php if(Session::has("message")): ?>
                        <label for="idLabel" class="form-label"><span
                                class="span-required">***</span><?php echo e(Session::get('message')); ?><span class="span-required">***</span></label>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(count($errors) > 0): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <label for="idLabel" class="form-label"><span
                                    class="span-required">***</span><?php echo e($error); ?><span class="span-required">***</span></label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <label for="idLabel" class="form-label">Employee ID<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text justify-content-center" id="idSpan">SIPL</span>
                            <input type="text" class="form-control" autocomplete="off" value="<?php echo e(old('id')); ?>" name="id" id="id"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="usernameLabel" class="form-label">Username<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text" id="usernameSpan">@</span>
                            <input type="text" class="form-control" autocomplete="off" value="<?php echo e(old('username')); ?>" name="username"
                                id="username" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <label for="passwordLabel" class="form-label">Password<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <input type="password" class="form-control" autocomplete="off" name="password" id="password"
                                aria-describedby="inputGroupPrepend2" required>
                            <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="password_confirmationLabel" class="form-label">Confirm<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <input type="password" class="form-control" autocomplete="off" name="password_confirmation"
                                id="password_confirmation" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <label for="firstnameLabel" class="form-label">First name<span
                                class="span-required">*</span></label>
                        <input type="text" class="form-control" autocomplete="off" value="<?php echo e(old('firstname')); ?>" name="firstname" id="firstname"
                            required>
                    </div>
                    <div class="col-lg-3">
                        <label for="lastnameLabel" class="form-label">Last name</label>
                        <input type="text" class="form-control" autocomplete="off" value="<?php echo e(old('lastname')); ?>" name="lastname" id="lastname">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <label for="dobLabel" class="form-label">DOB<span class="span-required">*</span></label>
                        <input type="date" class="form-control" autocomplete="off" value="<?php echo e(old('dob')); ?>" name="dob" id="dob" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="validationDefaultUsername" class="form-label">Gender<span
                                class="span-required">*</span></label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" id="Male" value="Male"
                                required>
                            <span class="form-check-label" for="inlineRadio1">Male</span>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" id="Female" value="Female">
                            <span class="form-check-label" for="inlineRadio2">Female</span>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" id="Other" value="Others">
                            <span class="form-check-label" for="inlineRadio3">Others</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-3">
                        <label for="emailLabel" class="form-label">Email ID<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" value="<?php echo e(old('email')); ?>" name="email" id="email"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="phoneLabel" class="form-label">Contact<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text justify-content-center" id="countryPhoneCode"></span>
                            <input type="number" class="form-control" autocomplete="off" value="<?php echo e(old('phone')); ?>" name="phone" id="phone"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <label for="qualificationLabel" class="form-label">Qualification<span
                                class="span-required">*</span></label>
                        <div class="input-group">
                            <input class="form-control" list="EduOption" autocomplete="off" value="<?php echo e(old('qualification')); ?>" name="qualification" id="qualification"
                                placeholder="Search" required>
                            <datalist id="EduOption">
                                <?php $__currentLoopData = $studies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EudOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($EudOption->qualification); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </datalist>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label for="skill-multi-selectLabel" class="form-label">Skills</label>
                        <div>
                            <select name="skill-multi-select[]" autocomplete="off" class="form-control" id="multiple-checkboxes" value="<?php echo e(old('skill-multi-select[]')); ?>" multiple="multiple">
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                                <option value="sql">SQL</option>
                                <option value="jquery">Jquery</option>
                                <option value=".net">.Net</option>
                                <option value="HTML">HTML</option>
                                <option value="CSS">CSS</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="Bootstrap">Bootstrap</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="container-fluid">
                            <div class="row">
                                <label for="addressLabel" class="form-label">Address</label>
                                <textarea class="form-control" autocomplete="off" value="<?php echo e(old('address')); ?>" name="address" id="address"
                                    rows="4"></textarea>
                            </div>
                            <div class="row">
                                <label for="zipLabel" class="form-label">Zip</label>
                                <input type="text" class="form-control" value="<?php echo e(old('zip')); ?>" name="zip" id="zip">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="container-fluid">
                            <div class="row">
                                <label for="country">Country<span class="span-required">*</span></label>
                                <select class="form-control" value="<?php echo e(old('country')); ?>" name="country" id="country-dropdown" required>
                                    <datalist id="datalistOptions1">
                                        <option value="">Select Country</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>">
                                            <?php echo e($country->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>
                                </select>
                            </div>
                            <div class="row">
                                <label for="state">State<span class="span-required">*</span></label>
                                <select class="form-control" value="<?php echo e(old('state')); ?>" name="state" id="state-dropdown" required>
                                </select>
                            </div>
                            <div class="row">
                                <label for="city">City<span class="span-required">*</span></label>
                                <select class="form-control" value="<?php echo e(old('city')); ?>" name="city" id="city-dropdown" required>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo e(old('checkbox')); ?> name="checkbox" value="" id="checkbox"
                                required>
                            <span class="form-check-label agree" for="invalidCheck2">
                                Agree to terms and conditions<span class="span-required">*</span>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="container-fluid">
                            <div class="row">
                                <button class="btn btn-primary" type="submit"><strong>Register My Account</strong></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="container-fluid">
                            <div class="row">
                                <a class="btn btn-warning" href="login"><strong> Registered? -> Login </strong></a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

<?php echo $__env->make('partials.registerHelper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/register.blade.php ENDPATH**/ ?>