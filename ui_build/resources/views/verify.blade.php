@if ((Session::has('send')))
    {!!Session::forget('login')!!}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1366, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Glide - Arca Lending</title>
        <link rel="stylesheet" href="{{asset('css/verify.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="containerOuterLayout">
            <img class="img_login" src="{{asset('img/login_img.png')}}">
            <img class="img_header" src="{{asset('img/header.png')}}">
            <p class="title_header1">Enter Code</p>
            @if (Session::has("phone"))
                <p class="title_header2">We texted your phone +<strong>91 XXXXXXXX{{Session::get('phone')}},</strong></p>
            @else
                <p class="title_header2">We texted your phone +<strong>XX XXXXXXX21,</strong></p>
            @endif
            <p class="title_header3">Please enter the Code to sign in.</p>
            <form action="{{route('postcode')}}" method="post">
                @csrf
                <input type="hidden" name="email" value="{{Session::get('email')}}">
                <input type="text" name="otp" class="verify_phone2" value="{{Session::get('verifycode')}}" placeholder="Enter Code">
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
@else
    {!! redirect()->to('send') !!}
@endif
