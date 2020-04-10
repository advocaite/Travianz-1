<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Admin lock</title>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <link href="{{ asset('admin_public/css/style.min.css') }}" rel="stylesheet"/>
</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column" style="background: url({{ asset('admin_public/bgg.jpg') }}) no-repeat;">
<div class="flex-fill d-flex flex-column justify-content-center">
    <div class="container-tight py-6">
        @yield('content')
    </div>
</div>
</body>
</html>
