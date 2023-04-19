@extends('partials.header')
@section('Title','Reset Password @ DreamDev')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
    .reg-cont {
        background: url("{{ asset('images/bg-01.jpg') }}");
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
        <form method="POST" action="{{url('OTPverify')}}">
            @csrf
            @if(Session::has("success"))
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-success alert-dismissible"><button type="button"
                            class="close">&times;</button>{{Session::get('success')}}</div>
                </div>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="validationDefaultUsername" class="form-label"> Email ID </label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" autocomplete="off" name="username" id="username"
                            aria-describedby="inputGroupPrepend2" value={{Session::get('checkMail')}} disabled required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="input-group">
                            <input type="hidden" name="ResetCodeMail" value={{Session::get('checkMail')}}>
                            <span class="input-group-text" id="inputGroupPrepend2">OTP : </span>
                            <input type="text" class="form-control" autocomplete="off" name="otp" id="otp"
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
    </div>
</body>

@include('partials.footer')
