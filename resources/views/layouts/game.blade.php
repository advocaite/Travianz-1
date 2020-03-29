<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('server.name', 'Travianz') }} - @yield('title')</title>
    <meta http-equiv="cache-control" content="max-age=0"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
    <link href="{{ asset('css/compact.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/lang.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/mt-core.js') }}"></script>
    <script src="{{ asset('js/mt-more.js') }}"></script>
    <script src="{{ asset('js/unx.js') }}"></script>
    <script src="{{ asset('js/new.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.addEvent('domready', start);
    </script>
    @yield('css')
</head>
<body class="v35 ie ie8">
<div id="app">
    <div class="wrapper">
        <img class="c1" src="{{ asset('images/x.gif') }}" id="msfilter"/>
        <div id="dynamic_header"></div>
        @include('components.header')
        <div id="mid">
            @include('components.menu')
            @yield('content')
            <br/><br/><br/><br/>
            <div id="side_info">

                @include('village.list')
                {{-- quest --}}

                @if (config('server.newsboxes.1'))
                    @include('newsboxes.newsbox1')
                @endif

                @if (config('server.newsboxes.2'))
                    @include('newsboxes.newsbox2')
                @endif

                @if (config('server.newsboxes.3'))
                    @include('newsboxes.newsbox3')
                @endif
            </div>
            <div class="clear"></div>
            {{--            @game_footer--}}
        </div>
        <div class="clear"></div>
        {{--        @if (Auth::check())--}}
        <div id="res">
            <div id="resWrap">
                <resource-component/>
            </div>
        </div>
        @include('components.resources')
        {{--        @endif--}}
        <div id="stime">
            <div id="ltime">
                <div id="ltimeWrap">
                    @lang('time.calculated_in'):
                    <b>{{ round((microtime(true) - LARAVEL_START) * 1000) }}</b> @lang('time.ms')
                    <br/>@lang('time.server_time'): <span id="tp1" class="b">{{ now()->toTimeString() }}</span>
                </div>
            </div>
        </div>
    </div>
    <div id="ce"></div>
    @yield('modal')
    @yield('js')
</div>
</body>
</html>
