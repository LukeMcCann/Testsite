<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=""width="device-width, initial-scal=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{--<link rel="stylesheet" href="{{mix('/css/app.css')}}">--}}

    <title>{{config('app.name'), 'PlanetDebug'}}</title>

</head>
<body>
@include('layouts.nav')
@yield('nav')
@yield('content')
@yield('content')
</body>
</head>
</html>