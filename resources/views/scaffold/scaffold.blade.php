<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('style/hockplan.css') }}" rel="stylesheet">
    <title>Hockplan</title>
</head>
<body>
    @include('scaffold/partials/header')
    <div id="content">
        <div class="inner">
            @yield('content')
        </div>
    </div>
</body>
</html>