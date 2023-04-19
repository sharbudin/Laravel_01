@extends('partials.header')
@section('Title','Login @ DreamDev')
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
        <form method="POST" action="{{url('loginUser')}}">
            @csrf
            @if(Session::has("success"))
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-success alert-dismissible"><button type="button"
                            class="close">&times;</button>{{Session::get('success')}}</div>
                </div>
            </div>
            @elseif (Session::has("failed"))
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="alert alert-warning alert-dismissible"><button type="button"
                            class="close">&times;</button>{{Session::get('failed')}}</div>
                </div>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="validationDefaultUsername" class="form-label"> Employee ID | Username | Email ID
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" autocomplete="off" value="{{old('username')}}" name="username" id="username"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="passwordLabel" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" autocomplete="off" name="password"
                            id="password" aria-describedby="inputGroupPrepend2" required>
                        <i class="input-group-text bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <div class="container-fluid">
                        <div class="row">
                            <button class="btn btn-primary" type="submit"><strong>Login</strong></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="container-fluid">
                        <div class="row">
                            <a class="btn btn-warning" href="register"><strong>Register</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="container-fluid">
                        <div class="row">
                            <a class="btn btn-warning" href="forgetpass"><strong>Reset </strong><span
                                    class="fa-solid fa-key"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </form>
    </div>
</body>
@include('partials.loginHelper')
@include('partials.footer')
