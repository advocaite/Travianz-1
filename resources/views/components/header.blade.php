<div id="header">
    <div id="mtop">

        {{--            @if (Auth::id() != 1)--}}
        <a href="{{ route('fields') }}" id="n1" accesskey="1">
            <img src="{{ asset('images/x.gif') }}" title="@lang('header.village_overview')"
                 alt="@lang('header.village_overview')"/>
        </a>
        <a href="{{ route('village') }}" id="n2" accesskey="2">
            <img src="{{ asset('images/x.gif') }}" title="@lang('header.village_center')"
                 alt="@lang('header.village_center')"/>
        </a>
        {{--            @endif--}}

        <a href="{{ route('map') }}" id="n3" accesskey="3">
            <img src="{{ asset('images/x.gif') }}" title="@lang('header.map')" alt="@lang('header.map')"/>
        </a>
        <a href="{{ route('statistics') }}" id="n4" accesskey="4">
            <img src="{{ asset('images/x.gif') }}" title="@lang('header.statistics')"
                 alt="@lang('header.statistics')"/>
        </a>

        {{--            <div id="n5" class="{{ Auth::user()->hasReadAllMessages() ? (Auth::user()->hasReadAllReports() ? 'i1' : 'i2') : (Auth::user()->hasReadAllReports() ? 'i3' : 'i4') }}">--}}
        <div id="n5" class="i1">
            @if (Auth::id() != 1)
                <a href="{{ route('reports.index') }}" accesskey="5">
                    <img src="{{ asset('images/x.gif') }}" class="l" title="@choice('header.report', 2)"
                         alt="@choice('header.report', 2)"/>
                </a>
            @endif
            <a href="{{ route('messages.index') }}" accesskey="6">
                <img src="{{ asset('images/x.gif') }}" class="r" title="@choice('header.message', 2)"
                     alt="@choice('header.message', 2)"/>
            </a>
        </div>


        <a href="{{ route('plus') }}" id="plus">
                    <span class="plus_text">
                        <span class="plus_g">P</span>
                        <span class="plus_o">l</span>
                        <span class="plus_g">u</span>
                        <span class="plus_o">s</span>
                    </span>
            {{--                    <img src="{{ asset('images/x.gif') }}" id="btn_plus" class="{{ Auth::user()->isBonusActive(App\Game\Bonuses\Plus::class) ? 'active' : 'inactive'  }}" title="@lang('header.plus_menu')" alt="@lang('header.plus_menu')"/>--}}
            <img src="{{ asset('images/x.gif') }}" id="btn_plus" class="active" title="@lang('header.plus_menu')"
                 alt="@lang('header.plus_menu')"/>
        </a>


        <div id="wrapper">
            <div id="container">
                <div>
                    <div>
                        <p>
                            <img src="{{ asset('images/x.gif') }}"
                                 style="display: block; margin: 0 auto; vertical-align:middle;"
                                 class="{{ now()->between(Carbon\Carbon::parse('05:00:00'), Carbon\Carbon::parse('17:59:59')) ? 'day_image' : 'night_image' }}"/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
