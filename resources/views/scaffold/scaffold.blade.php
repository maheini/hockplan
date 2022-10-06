<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('style/hockplan.css') }}" rel="stylesheet">
    <link href="{{ asset('style/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <title>{{$title ?? 'Hockplan'}}</title>
</head>
<body>
    @include('scaffold/partials/header')
    @if ($title ?? false)
        <div id="title">
            <div class="inner">
                <h1>{{$title ?? 'dfgdf'}}</h1>
            </div>
        </div>
    @endif
    <div id="content">
        <div class="inner">
            @yield('content')
        </div>
    </div>
</body>
</html>