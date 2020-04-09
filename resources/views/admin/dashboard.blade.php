@extends('layouts.admin')

@section('title')
    dashboard
@endsection

@section('content')
    <div class="row">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn btn-secondary">
                    New view
                  </a>
                </span>
                    <a href="#" class="btn btn-primary ml-3 d-none d-sm-inline-block" data-toggle="modal"
                       data-target="#modal-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary ml-3 d-sm-none btn-icon" data-toggle="modal"
                       data-target="#modal-report" aria-label="Create new report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">New users</div>
                        <div class="ml-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 mr-2">4,300</div>
                        <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon ml-1"><polyline
                                  points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                  points="17 6 23 6 23 12"></polyline></svg>
                      </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Online users</div>
                        <div class="ml-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 mr-2">4,300</div>
                        <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon ml-1"><polyline
                                  points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                  points="17 6 23 6 23 12"></polyline></svg>
                      </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">banned users</div>
                        <div class="ml-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 mr-2">300</div>
                        <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon ml-1"><polyline
                                  points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                  points="17 6 23 6 23 12"></polyline></svg>
                      </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">invitations</div>
                        <div class="ml-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 mr-2">54</div>
                        <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon ml-1"><polyline
                                  points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                  points="17 6 23 6 23 12"></polyline></svg>
                      </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="col-sm-12">
                <div class="card card-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="col-6 mr-3 lh-sm">
                            <div class="strong">
                                Server restart
                            </div>
                            <div class="text-muted">in 380 days</div>
                        </div>
                        <div class="col-6 pull-right">
                            <a href="#" class="btn btn-danger">Restart server now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card card-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="mr-3">
                            <div class="chart-sparkline chart-sparkline-square" id="sparkline-7" style="display: none;">
                                56/100
                            </div>
                            <svg class="peity" height="40" width="40">
                                <path
                                    d="M 20 0 A 20 20 0 1 1 12.637508946306433 38.595529717765025 L 13.741882604360468 35.80620026010027 A 17 17 0 1 0 20 3"
                                    data-value="56" fill="#fa4654"></path>
                                <path
                                    d="M 12.637508946306433 38.595529717765025 A 20 20 0 0 1 19.999999999999996 0 L 19.999999999999996 3 A 17 17 0 0 0 13.741882604360468 35.80620026010027"
                                    data-value="44" fill="rgba(126, 133, 144, 0.24)"></path>
                            </svg>
                        </div>
                        <div class="mr-3 lh-sm">
                            <div class="strong">
                                215 days
                            </div>
                            <div class="text-muted">natars spawn in</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card card-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="mr-3">
                            <div class="chart-sparkline chart-sparkline-square" id="sparkline-7" style="display: none;">
                                56/100
                            </div>
                            <svg class="peity" height="40" width="40">
                                <path
                                    d="M 20 0 A 20 20 0 1 1 12.637508946306433 38.595529717765025 L 13.741882604360468 35.80620026010027 A 17 17 0 1 0 20 3"
                                    data-value="56" fill="#fa4654"></path>
                                <path
                                    d="M 12.637508946306433 38.595529717765025 A 20 20 0 0 1 19.999999999999996 0 L 19.999999999999996 3 A 17 17 0 0 0 13.741882604360468 35.80620026010027"
                                    data-value="44" fill="rgba(126, 133, 144, 0.24)"></path>
                            </svg>
                        </div>
                        <div class="mr-3 lh-sm">
                            <div class="strong">
                                235 days
                            </div>
                            <div class="text-muted">WW start in</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Most Visited Pages</h4>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                        <tr>
                            <th>Page name</th>
                            <th>Visitors</th>
                            <th>Unique</th>
                            <th colspan="2">Bounce rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                /field
                                <a href="#" class="link-secondary ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">4,896</td>
                            <td class="text-muted">3,654</td>
                            <td class="text-muted">82.54%</td>
                        </tr>
                        <tr>
                            <td>
                                /town
                                <a href="#" class="link-secondary ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">3,652</td>
                            <td class="text-muted">3,215</td>
                            <td class="text-muted">76.29%</td>
                        </tr>
                        <tr>
                            <td>
                                /map
                                <a href="#" class="link-secondary ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">3,256</td>
                            <td class="text-muted">2,865</td>
                            <td class="text-muted">72.65%</td>
                        </tr>
                        <tr>
                            <td>
                                /map-full
                                <a href="#" class="link-secondary ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">986</td>
                            <td class="text-muted">865</td>
                            <td class="text-muted">44.89%</td>
                        </tr>
                        </tbody>
                    </table>
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
