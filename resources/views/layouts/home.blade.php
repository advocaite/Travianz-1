<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('server.name') }} - @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/index/main.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/index/flaggs.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/index/main_en.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/mt-core.js') }}"></script>
    <script src="{{ asset('js/new.js') }}"></script>
    <script src="{{ asset('js/new2.js') }}"></script>
    <meta http-equiv="imagetoolbar" content="no"/>
    <style>
        div.c2 {left: 237px;}
        ul.c1 {position: absolute;left: 0px; width: 686px;}
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="presto indexPage">
<div id="app">
    <div class="wrapper">
        @yield('content')
        <div id="footer">
            <div class="container">
                <a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/3.0/" class="logo">
                    <img style="border-width:0; height:31px; width:88px;" src="https://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" class="logo_traviangames"/>
                </a>
                <ul class="menu">
                    <li><a href="{{ route('manual.FAQ') }}">@lang('index.FAQ')</a>|</li>
                    <li><a href="https://github.com/iopietro/Travianz">@lang('index.source_code')</a>|</li>
                    <li><a href="https://discordapp.com/invite/9fbJKP9">@lang('index.discord_server')</a>|</li>
                    <li><a href="{{ route('rules') }}">@lang('index.rules')</a></li>
                    <li class="copyright">&copy; @lang('index.copyright', ['serverName' => config('server.name')])</li>
                </ul>
            </div>
        </div>
    </div>
    @yield('modal')
</div>
@yield('js')
</body>
</html>
