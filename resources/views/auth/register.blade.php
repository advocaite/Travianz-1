@extends('layouts.auth')

@section('content')

{{--    @if (config('server.registrations_open'))--}}
@if(! Auth::check())
        <div id="content" class="signup">
            <h1><img src="{{ asset('images/x.gif') }}" class="anmelden" alt="@lang('auth/register.register_to_the_game')" /></h1>
            <h5><img src="{{ asset('images/x.gif') }}" class="img_u05" alt="@lang('auth/register.registration')"/></h5>
            <p>@lang('auth/register.before_register', ['serverName' => config('server.name'), 'a' => '<a href="' . route("manual.tribes") . '" target="_blank">', '_a' => '</a>'])</p>
            <?php ///TODO: remove when you have data
            $referral = false;
            /// ?>
            <form method="post" action="{{ route('register', compact('referral')) }}">
                @csrf
                <table id="sign_input">
                    <tbody>
                    <tr class="top">
                        <th>@lang('auth/register.username'):</th>
                        <td>
                            <input class="text" type="text" name="name" pattern=".{3,30}" value="{{ old('name') }}" required/>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>@lang('auth/register.email'):</th>
                        <td>
                            <input class="text" type="email" name="email" pattern=".{6,100}" value="{{ old('email') }}" required/>
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>@lang('auth/register.password'):</th>
                        <td>
                            <input class="text" type="password" name="password" pattern=".{8,100}" value="{{ old('password') }}" required/>
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>@lang('auth/register.confirm_password'):</th>
                        <td>
                            <input class="text" type="password" name="password_confirmation" pattern=".{8,100}" value="{{ old('password_confirmation') }}" required/>
                            @if ($errors->has('password_confirmation'))
                                <span class="error">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table id="sign_select">
                    <tbody>
                    <tr class="top">
                        <th><img src="{{ asset('images/x.gif') }}" class="img_u06" alt="@lang('auth/register.choose_tribe')" /></th>
                        <th colspan="2"><img src="{{ asset('images/x.gif') }}" class="img_u07" alt="@lang('auth/register.starting_position')" /></th>
                    </tr>
                    <tr>
                        <td class="nat">
                            <label>
                                <input class="radio" type="radio" name="tribe" value="1" {{ old('tribe', 1) == 1 ? 'checked' : '' }} />&nbsp;{{ ucfirst(trans('tribes.romans')) }}</label>
                        </td>
                        <td class="pos1">
                            <label>
                                <input class="radio" type="radio" name="sector" value="0" {{ old('sector', 0) == 0 ? 'checked' : '' }} />&nbsp;@lang('auth/register.sectors.random')</label>
                        </td>
                        <td class="pos2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input class="radio" type="radio" name="tribe" value="2" {{ old('tribe') == 2 ? 'checked' : '' }} />&nbsp;{{ ucfirst(trans('tribes.teutons')) }}</label>
                        </td>
                        <td>
                            <label>
                                <input class="radio" type="radio" name="sector" value="1" {{ old('sector') == 1 ? 'checked' : '' }} />&nbsp;@lang('auth/register.sectors.north_west') <b>(-|+)</b>&nbsp;</label>
                        </td>
                        <td>
                            <label>
                                <input class="radio" type="radio" name="sector" value="2" {{ old('sector') == 2 ? 'checked' : '' }} />&nbsp;@lang('auth/register.sectors.north_east') <b>(+|+)</b></label>
                        </td>
                    </tr>
                    <tr class="btm">
                        <td>
                            <label>
                                <input class="radio" type="radio" name="tribe" value="3" {{ old('tribe') == 3 ? 'checked' : '' }} />&nbsp;{{ ucfirst(trans('tribes.gauls')) }}</label>
                        </td>
                        <td>
                            <label>
                                <input class="radio" type="radio" name="sector" value="3" {{ old('sector') == 3 ? 'checked' : '' }} />&nbsp;@lang('auth/register.sectors.south_west') <b>(-|-)</b></label>
                        </td>
                        <td>
                            <label>
                                <input class="radio" type="radio" name="sector" value="4" {{ old('sector') == 4 ? 'checked' : '' }} />&nbsp;@lang('auth/register.sectors.south_east') <b>(+|-)</b></label>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <ul class="important">

                    @if ($errors->has('tribe'))
                        <li>{{ $errors->first('tribe') }}</li>
                    @endif

                    @if ($errors->has('sector'))
                        <li>{{ $errors->first('sector') }}</li>
                    @endif

                    @if ($errors->has('referral'))
                        <li>{{ $errors->first('referral') }}</li>
                    @endif

                    @if ($errors->has('rules'))
                        <li>{{ $errors->first('rules') }}</li>
                    @endif

                </ul>
                <p>
                    <input class="check" type="checkbox" name="rules" value="1" {{ old('rules') ? 'checked' : '' }} />@lang('auth/register.accept_rules')
                </p>
                <p class="btn">
                    <button class="trav_buttons" name="action" value="register"> @lang('auth/register.register') </button>
                </p>
            </form>
            <p class="info">@lang('auth/register.one_per_server')</p>
        </div>

    @else

        <div id="content" class="signup">
            <h1><img src="{{ asset('images/x.gif') }}" class="anmelden" alt="register for the game" /></h1>
            <h5><img src="{{ asset('images/x.gif') }}" class="img_u05" alt="registration"/></h5>
            <p>@lang('auth/register.registrations_closed')</p>
        </div>

    @endif
@endsection
