<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TALLER UNO - @yield('name')</title>
    </head>
    <body>

        <center>
        <table border=1>
            <tr>
                <td colspan=2><center><b>@yield('title')</b</center></td>
            </tr>
            <tr>
                <td><b>NOMBRE: </b></td><td>{{$name}}</td>
            </tr>
            <tr>
                <td><b>TELEFONO: </b></td><td>-{{$phone}}</td>
            </tr>
            <tr>
                <td><b>EMAIL: </b></td><td>{{$email}}</td>
            </tr>
            <tr>
                <td colspan=2><center><b>@yield('footer')</b</center></td>
            </tr>
        </table>
        </center>
        
    </body>
</html>