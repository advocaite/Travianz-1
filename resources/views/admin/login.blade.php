@extends('layouts.admin_login')

@section('title')
    profile
@endsection

@section('content')

    <div style="max-width: 500px; margin: 0 auto; margin-top: 200px; z-index: 0;">
        {{--        <img src="{{ asset('images/halloffame.png') }}" alt="travian logo"--}}
        {{--             style=" padding-top: -20px; z-index: 999; width: 464px;     margin-bottom: -13px;">--}}
        <div class="card" style="z-index: 1;">
            <img src="{{ asset('images/halloffame.png') }}" alt="travian logo"
                 style="    z-index: 999; width: 464px;  top: -172px; position: absolute;">
            <div class="card-body text-center py-4 p-sm-5">
                <h1 class="mt-1">Welcome to Admin!</h1>
                <p class="text-muted">There is no better place like here but do you have enough units to defeat admin
                    ?</p>
            </div>
            <div class="hr-text hr-text-center hr-text-spaceless">Admin lock</div>
            <div class="card-body"  >
                @if(\App\Models\Server::count() > 1)
                    <div class="mb-3">
                        <div class="input-group input-group-flat mt-2">
                            <select name="server" class="form-control">
                                <option value="" selected disabled>Select server</option>
                                @foreach(\App\Models\Server::all() as $server)
                                    <option value="{{ $server->id }}">{{ $server->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @else
                    <input type="hidden" value="1" name="server">
                @endif
                <div class="mb-3">
                    <div class="input-group input-group-flat mt-2">
                        <input type="text" name="username" class="form-control pl-1" placeholder="username" autofocus>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group input-group-flat mt-2">
                        <input type="password" name="password" class="form-control pl-1" placeholder="password"
                               autofocus>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn-list justify-content-center">
                        <a href="#" class="btn btn-primary">
                            Login to dashboard
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('modal')

@endsection

@section('css')

@endsection

@section('js')
@endsection
