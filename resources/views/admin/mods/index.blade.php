@extends('layouts.admin')

@section('title')
    Admin - Mods
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <h2 class="page-title">
                    Available mods
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($mods as $mod)
            @if(!empty($mod[0]['app']['name']))
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="text-uppercase text-muted">Free</div>
                            <div class="h1 my-3">{{ ucfirst($mod[0]['app']['name']) ?: '' }}</div>
                            <p class=" my-3">{{ ucfirst($mod[0]['app']['description']) ?: '' }}</p>
                            <p class="my-3">v{{ ucfirst($mod[0]['app']['version']) ?: '' }}</p>
                            <ul class="list-unstyled lh-lg">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon mr-1 text-success">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Compatibile
                                </li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-secondary btn-block">Install</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection

@section('modal')

@endsection

@section('css')

@endsection

@section('js')
@endsection
