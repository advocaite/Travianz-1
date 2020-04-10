@extends('layouts.admin')

@section('title')
    Admin - Mods
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <h2 class="page-title">
                    Users
                </h2>
            </div>
            <div class="col-auto">
                <div class="text-muted text-h5 mt-2">1-18 of 413 people</div>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ml-auto d-print-none">
                <div class="d-flex">
                    <input type="search" class="form-control d-inline-block w-8 mr-3" placeholder="Search user…">
                    <a href="#" class="btn btn-primary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        New user
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row row-sm align-items-center">
                            <div class="col-auto">
                                <span class="avatar avatar-md">{{ ucfirst(mb_substr($user->name, 0, 2, "UTF-8")) }}</span>
                            </div>
                            <div class="col">
                                <h3 class="mb-0"><a href="#">{{ $user->name }}</a></h3>
                                <div class="text-muted text-h5">{{ $user->role }}</div>
                            </div>
                            <div class="col-auto lh-1 align-self-start">
                      <span class="badge bg-green-lt">
                        online
                      </span>
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col-auto">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-secondary btn-sm">
                                        Chat
                                    </a>
                                    <a href="#" class="btn btn-secondary btn-sm">
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('modal')

@endsection

@section('css')

@endsection

@section('js')
@endsection
