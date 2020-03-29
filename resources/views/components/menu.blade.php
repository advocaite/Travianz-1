<style>
    /* for menu */
    #container {
        width: 30px;
        height: 60px;
        position: relative;
    }

    #wrapper > #container {
        display: table;
        position: static;
    }

    #container div {
        position: absolute;
        top: 50%;
    }

    #container div div {
        position: relative;
        top: -50%;
    }

    #container > div {
        display: table-cell;
        vertical-align: middle;
        position: static;
    }
</style>

<div id="side_navi">
    <a id="logo" href="{{ route('index') }}"><img src="{{ asset('images/x.gif') }}"></a>
    <p>
        <a href="{{ route('index') }}">@lang('menu.homepage')</a>
        @if (Auth::check())
            <a href="{{ route('logout') }}">@lang('menu.logout')</a>
            <a href="{{  route('profile', ['profile' => Auth::user()->id]) }}">@lang('menu.profile')</a>
        @else
            <a href="{{ route('login') }}">@lang('menu.login')</a>
            <a href="{{ route('register') }}">@lang('menu.register')</a>
        @endif
    </p>

    @if (Auth::check())
        <p>
            <a href="{{ '' }}">@lang('menu.forum')</a>
            <a href="{{ '' }}"><b><span class="plus_g">P</span><span class="plus_o">l</span><span
                        class="plus_g">u</span><span
                        class="plus_o">s</span></b></a>
            <a href="{{ '' }}">@lang('menu.support')</a>
        </p>
    @endif

</div>
