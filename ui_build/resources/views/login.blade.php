<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glide - Arca Lending</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerOuterLayout">
        <img class="img_login" src="{{asset('img/login_img.png')}}">
        <img  class="img_header" src="{{asset('img/header.png')}}">
        <p class="title_header">Welcome to Acra Lending Broker Portal</p>
        @if (Session::has("failed"))
        <p class="title_warning">{{Session::get('failed')}}</p>
        @endif
        <form action="{{route('postlogin')}}" method="post">
            @csrf
            <input type="email" value="{{old('email')}}" name="email" class="login_email" placeholder="Email ID">
            <input type="password" name="password" class="login_password" placeholder="Password">
            <input type="checkbox" class="rembox" name="rememberBox" value="Remember me" id="rememberBox"><span class="rememberText">Remember me</span>
            <span  class="forgetPassword">Forget Your Password?</span>
            <button class="button_Next"><span class="text_Next">Next</span></button>
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
