@extends('layouts.admin_login')

@section('title')
    profile
@endsection

@section('content')
    <div class="text-center mb-4">
        <img src="{{ asset('images/halloffame.png') }}" alt="travian logo" style="
    margin-top: 60px;
    z-index: 999;
    width: 464px">
    </div>
    <div style="max-width: 500px; margin: 0 auto; margin-top: -20px; z-index: 0;">
        <div class="card">
            <div class="card-body text-center py-4 p-sm-5">
                <h1 class="mt-1">Welcome to Admin!</h1>
                <p class="text-muted">There is no better place like here but do you have enough units to defeat admin ?</p>
            </div>
            <div class="hr-text hr-text-center hr-text-spaceless">Admin lock</div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="input-group input-group-flat mt-2">
                        <input type="password" name="password" class="form-control pl-1" autofocus>
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
