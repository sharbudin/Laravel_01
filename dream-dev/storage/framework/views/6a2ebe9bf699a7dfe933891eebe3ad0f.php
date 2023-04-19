<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form>
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <label for="validationDefault01" class="form-label">Employee ID</label>
            <input type="text" class="form-control" autocomplete="off" id="validationDefault01" required>
        </div>
        <div class="col-sm-3">
            <label for="validationDefaultUsername" class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" autocomplete="off" id="validationDefaultUsername"
                    aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <label for="validationDefault01" class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">*</span>
                <input type="password" class="form-control" autocomplete="off" id="validationDefaultUsername"
                    aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-sm-3">
            <label for="validationDefaultUsername" class="form-label">Confirm</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">*</span>
                <input type="password" class="form-control" autocomplete="off" id="validationDefaultUsername"
                    aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" autocomplete="off" id="validationDefault01" required>
        </div>
        <div class="col-sm-3">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" autocomplete="off" id="validationDefault02" required>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-3">
            <label for="validationDefault03" class="form-label">DOB</label>
            <input type="text" class="form-control" autocomplete="off" id="datepicker" required>
        </div>
        <div class="col-sm-3">
            <label for="validationDefaultUsername" class="form-label">Gender</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Others">
                <label class="form-check-label" for="inlineRadio3">Others</label>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-sm-3">
            <label for="validationDefaultUsername" class="form-label">Email ID</label>
            <div class="input-group">
                <input type="text" class="form-control" autocomplete="off" id="validationDefaultUsername"
                    aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-sm-3">
            <label for="validationDefaultUsername" class="form-label">Experience</label>
            <div class="input-group">
                <select class="form-control" id="exp-dropdown">
                    <option value="">Select Experience</option>
                    <option value="0-1 year">0-1 year</option>
                    <option value="1-2 year">1-2 year</option>
                    <option value="2-3 year">2-3 year</option>
                    <option value="3 + year">3 + year</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="container-fluid">
                <div class="row">
                    <label for="validationDefault03" class="form-label">Address</label>
                    <textarea class="form-control" autocomplete="off" id="FormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="row">
                    <label for="validationDefault05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="container-fluid">
                <div class="row">
                    <label for="country">Country</label>
                    <select class="form-control" id="country-dropdown">
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
                    <label for="state">State</label>
                    <select class="form-control" id="state-dropdown">
                    </select>
                </div>
                <div class="row">
                    <label for="city">City</label>
                    <select class="form-control" id="city-dropdown">
                    </select>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <button class="btn btn-primary" type="submit">Submit form</button>

        </div>
    </div>

</form>
<br>

<div class="d-flex col-sm-9 justify-content-end">
    <a href="login" style="text-decoration: none">Goto <strong>Login</strong></a>

</div>
<?php echo $__env->make('partials.countryStateCity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Laravel\dream-dev\resources\views/register.blade.php ENDPATH**/ ?>