@extends('layouts.auth')

@section('content')
    <div id="content" class="login">
        <h1>
            <img class="img_login" src="{{ asset('images/x.gif') }}"/>
        </h1>
        <h5>
            <img class="img_u04" src="{{ asset('images/x.gif') }}"/>
        </h5>
        <p>@lang('auth/login.cookies')</p>

        @if (Carbon\Carbon::parse(config('server.start_date') . ' ' . config('server.start_time')) >= now())

            <br/>
            <div
                style="text-align: center; font-size: 25px">{{ config('server.name') }} @lang('auth/login.will_start_in')
                :
            </div>
            <div class="timer" id="activation_time">{{ $serverStartCountdown }}</div>

        @else

            <form method="post" action="login">
                @csrf
                <script>
                    Element.implement({
                        showOrHide: function (imgid) {
                            if (this.getStyle('display') == 'none') {
                                if (imgid != '') $(imgid).className = 'open';
                            } else if (imgid != '') $(imgid).className = 'close';
                            this.toggleClass('hide');
                        }
                    });
                </script>
                <table id="login_form">
                    <tbody>
                    <tr class="top">
                        <th>@lang('auth/login.username'):</th>
                        <td>
                            <input class="text" type="text" name="name" pattern=".{6,20}"
                                   value="{{ old('name', Cookie::get('name')) }}" required/>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                        </td>
                        @endif
                    </tr>
                    <tr class="btm">
                        <th>@lang('auth/login.password'):</th>
                        <td>
                            <input class="text" type="password" name="password" pattern=".{8,100}"
                                   value="{{ old('password') }}" required/>
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                        </td>
                        @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="btn">
                    <button class="trav_buttons" name="action" value="login">@lang('auth/login.title')</button>
                </p>
            </form>
        @endif

        @if (session('verified'))
            <p class="error_box">
                <span class="success">@lang('auth/login.email_verified')</span>
            </p>
        @endif

        @if (session()->has('resetPassword'))
            <p class="error_box">
                <span class="success">{{ session('resetPassword') }}</span>
            </p>
        @endif

        @if ($errors->has('email'))
            <p class="error_box">
                <span class="error">{{ $errors->first('email') }}</span>
                <br>@lang('auth/login.email_follow')
                <br>
                <a href="{{ route('verification.notice') }}">@lang('auth/login.resend_activation_code')</a>
            </p>
        @elseif ($errors->has('vacation'))
            <p class="error_box">
                <span class="error">{{ $errors->first('vacation') }}</span>
            </p>
        @elseif ($errors->has('password'))
            <p class="error_box">
                <span class="error">@lang('auth/login.password_forgotten')</span>
                <br>@lang('auth/login.password_can_reset')
                <br>
                <a href="{{ route('password.request') }}">@lang('auth/login.password_reset_password')</a>
            </p>
        @endif

    </div>
@endsection
