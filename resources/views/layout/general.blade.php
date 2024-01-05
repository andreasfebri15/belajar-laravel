<!doctype html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | Volunteer </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/fti-ukdw.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/datatables.min.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <main class="w-100 h-100">
        <div class="container">
            @yield('container')
        </div>
    </main>
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/base.js') }}"></script>
    <script src="{{ asset('/js/dt.js') }}"></script>
</body>

</html>
