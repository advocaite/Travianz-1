@extends('layouts.home')

@section('title')
    home
@endsection

@section('content')
    <div id="country_select">
        <div id="flags"></div>
    </div>
    <div id="header">
        <h1>@lang('index.welcome', ['serverName' => config('server.name')])</h1>
    </div>
    <div id="navigation">
        <a href="{{ route('index') }}" class="home">
            <img src="{{ asset('images/x.gif') }}" alt="{{ config('server.name') }}" />
        </a>
        <table class="menu">
            <tr>
                <td>
                    <a href="{{ route('tutorial.village') }}">
                        <span>@lang('index.tutorial')</span>
                    </a>
                </td>
                <td><a href="{{ route('manual.tribes') }}"><span>@lang('index.manual')</span></a></td>
                <td><a href="#" class="signup_link mark"><span>@lang('index.register')</span></a></td>
                <td><a href="#" class="login_link"><span>@lang('index.login')</span></a></td>
            </tr>
        </table>
    </div>
    <div id="register_now">
        <a href="#" class="signup_link">@lang('index.register')</a>
        <span>@lang('index.play_now')</span>
    </div>
    <div id="content">
        <div class="grit">
            <div class="infobox">
                <div id="what_is_travian">
                    <h2>@lang('index.what_is', ['serverName' => config('server.name')])</h2>
                    <p>@lang('index.description', ['serverName' => config('server.name'), 'b' => '<b>', '_b' => '</b>'])</p>
                    <p>@lang('index.free_to_play', ['strong' => '<strong>', '_strong' => '</strong>'])</p>
                    <p class="play_now">
                        <a href="{{ route('register') }}" class="signup_link">@lang('index.click_to_play')</a>
                    </p>
                </div>
                <div id="player_counter">
                    <table>
                        <tbody>
                        <tr>
                            <th>@lang('index.total_players'):</th>
                            <td>##TOTALUSERS##</td>
                        </tr>
                        <tr>
                            <th>@lang('index.active_players'):</th>
                            <td>###ACTIVEUSERS###</td>
                        </tr>
                        <tr>
                            <th>@lang('index.online_players'):</th>
                            <td>###ONLINEUSERS###</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="about_the_game">
                    <h2>@lang('index.about_the_game'):</h2>
                    <ul>
                        <li>@lang('index.begin')</li>
                        <li>@lang('index.build_up')</li>
                        <li>@lang('index.play_with', ['serverName' => config('server.name')])</li>
                    </ul>
                </div>
            </div>
            <div class="secondarybox">
                <div id="screenshots">
                    <h2>@lang('index.screenshots')</h2>
                    <a href="#last" class="navi prev dynamic_btn"><img class="dynamic_btn" src="{{ asset('images/x.gif') }}" alt="previous" /></a>
                    <div id="screenshots_preview">
                        <ul id="screenshot_list" class="c1">
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s1s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s2s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s3s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s4s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s5s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s6s.jpg') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/screenshots/preview/s7s.jpg') }}" /></a></li>
                        </ul>
                    </div>
                    <a href="#next" class="navi next"><img class="dynamic_btn" src="{{ asset('images/x.gif') }}" alt="next" /></a>
                </div>
                <div id="newsbox">
                    <h2>@lang('index.news')</h2>
                    <div class="news">
                        <p class="date">[@lang('index.released_by'): Travianz team]</p>
                        <p>@lang('index.thank_you')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection

@section('modal')
    <div id="login_layer" class="overlay">
        <div class="mask closer"></div>
        <div id="login_list" class="overlay_content">
            <h2>@lang('index.choose_server')</h2>
            <a href="#" class="closer"><img class="dynamic_img" alt="Close" src="{{ asset('images/x.gif') }}" /></a>
            <ul class="world_list">
                <li class="w_big c3" style="background-image:url('{{ asset('images/choose/en1_big.jpg')}}');">
                    <a href="{{ route('login') }}"><img class="w_button" src="{{ asset('images/x.gif') }}" alt="World" title="##TOTALUSERS## &nbsp; @lang('players') &nbsp;|&nbsp; ###ACTIVEUSERS### &nbsp; @lang('active') &nbsp;|&nbsp; ###ONLINEUSERS### &nbsp; @lang('online')" /></a>
                    <div class="label_players c0">@lang('index.players'):</div>
                    <div class="label_online c0">@lang('index.online'):</div>
                    <div class="players c1">##TOTALUSERS##</div>
                    <div class="online c1">###ONLINEUSERS###</div>
                </li>
            </ul>
            <div class="footer"></div>
        </div>
    </div>
    <div id="signup_layer" class="overlay">
        <div class="mask closer"></div>
        <div id="signup_list" class="overlay_content">
            <h2>@lang('index.choose_server')</h2>
            <a href="#" class="closer"><img class="dynamic_img" alt="Close" src="{{ asset('images/x.gif') }}" /></a>
            <ul class="world_list">
                <li class="w_big c4" style="background-image:url('{{ asset('images/choose/en1_big.jpg')}}');">
                    <a href="{{ route('register') }}"><img class="w_button" src="{{ asset('images/x.gif') }}" alt="World" title="##TOTALUSERS## &nbsp; @lang('players') &nbsp;|&nbsp; ###ACTIVEUSERS### &nbsp; @lang('active') &nbsp;|&nbsp; ###ONLINEUSERS### &nbsp; @lang('online')" /></a>
                    <div class="label_players c0">@lang('index.players'):</div>
                    <div class="label_online c0">@lang('index.online'):</div>
                    <div class="players c1">##TOTALUSERS##</div>
                    <div class="online c1">###ONLINEUSERS###</div>
                </li>
            </ul>
            <div class="footer"></div>
        </div>
    </div>
    <div id="iframe_layer" class="overlay">
        <div class="mask closer"></div>
        <div class="overlay_content">
            <a href="#" class="closer"><img class="dynamic_img" alt="Close" src="{{ asset('images/x.gif') }}" /></a>
            <h2>@lang('index.manual')</h2>
            <div id="frame_box"></div>
            <div class="footer"></div>
        </div>
    </div>
    <div id="screenshot_layer" class="overlay">
        <div class="mask closer"></div>
        <div class="overlay_content">
            <h3>@lang('index.screenshots')</h3>
            <a href="#" class="closer"><img class="dynamic_img" alt="Close" src="{{ asset('images/x.gif') }}" /></a>
            <div class="screenshot_view">
                <h4 id="screen_hl"></h4>
                <img id="screen_view" src="{{ asset('images/x.gif') }}" alt="Screenshot" name="screen_view" />
                <div id="screen_desc"></div>
            </div>
            <a href="#prev" class="navi prev" onclick="galarie.showPrev();"><img class="dynamic_img" src="{{ asset('images/x.gif') }}" alt="previous" /></a>
            <a href="#next" class="navi next" onclick="galarie.showNext();"><img class="dynamic_img" src="{{ asset('images/x.gif') }}" alt="next" /></a>
            <div class="footer"></div>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('js')
    <script type="text/javascript">
        var screenshots = [
            {'img':"{{ asset('images/screenshots/s1.png') }}",'hl':"@lang('index.screenshot.1.title')", 'desc':"@lang('index.screenshot.1.description')"},
            {'img':"{{ asset('images/screenshots/s2.png') }}",'hl':"@lang('index.screenshot.2.title')", 'desc':"@lang('index.screenshot.2.description')"},
            {'img':"{{ asset('images/screenshots/s3.png') }}",'hl':"@lang('index.screenshot.3.title')", 'desc':"@lang('index.screenshot.3.description')"},
            {'img':"{{ asset('images/screenshots/s4.png') }}",'hl':"@lang('index.screenshot.4.title')", 'desc':"@lang('index.screenshot.4.description')"},
            {'img':"{{ asset('images/screenshots/s5.png') }}",'hl':"@lang('index.screenshot.5.title')", 'desc':"@lang('index.screenshot.5.description')"},
            {'img':"{{ asset('images/screenshots/s6.png') }}",'hl':"@lang('index.screenshot.6.title')", 'desc':"@lang('index.screenshot.6.description')"},
            {'img':"{{ asset('images/screenshots/s7.png') }}",'hl':"@lang('index.screenshot.7.title')", 'desc':"@lang('index.screenshot.7.description')"}
        ];
        var galarie = new Fx.Screenshots('screen_view', 'screen_hl', 'screen_desc', screenshots);
    </script>
@endsection
