@if ((Session::has('ID')))
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased" style="background-color: rgb(150, 127, 127)">
        <div style="margin: 0 auto;display: block;width: 500px;">
            <br>
            <br>
            <table width="100%" border="0">
                <tr>
                    <td colspan="2">
                        <img src="storage/images/{{$avatar}}" style="width:200px;">
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width:100px">First Name</td>
                    <td>{{$fname}}</td>
                </tr>
                <tr>
                    <td style="width:100px">Last Name</td>
                    <td>{{$lname}}</td>
                </tr>
                <tr>
                    <td style="width:100px">E-mail ID</td>
                    <td>{{$email}}</td>
                </tr>
                <tr>
                    <td style="width:100px">Phone</td>
                    <td>{{$phone}}</td>
                </tr>
                <tr>
                    <td style="width:100px">Post</td>
                    <td>{{$post}}</td>
                </tr>
            </table>
        </div>
    </body>
</html>

@else
    {{!! redirect()->to('login') !!}}
@endif

