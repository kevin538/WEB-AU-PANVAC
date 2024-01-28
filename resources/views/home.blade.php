@extends('backendlayout.Layout')
@section('content')
    <style>
        <style>.pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .pagination>li {
            margin: 0 5px;
            display: inline-block;
        }

        .pagination>li>span,
        .pagination>li>a {
            padding: 8px 12px;
            text-decoration: none;
            color: #333;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
        }

        .pagination>.active>span,
        .pagination>.active>a {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .pagination>.disabled>span,
        .pagination>.disabled>a {
            color: #ccc;
            pointer-events: none;
            cursor: not-allowed;
        }
    </style>

    <div class="row">

        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Album</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $countalbum }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-album-2 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Teams</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $countTeams }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-single-02 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Certificates</h5>
                                <span class="h2 font-weight-bold mb-0">CT:{{ $certifiedCertificate }}
                                    TP:{{ $testinProgress }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="ni ni-folder-17 text-primaary"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Services</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $countservice }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                    <i class="ni ni-key-25 text-info"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-8">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Page visits</h3>
                        </div>
                        <div class="col text-right">
                            <a href="" class="btn btn-sm btn-primary"
                                style="background-color: #479a5c; border-color:#479a5c">See all</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Page name</th>
                                <th scope="col">Visitors</th>
                                <th scope="col">Unique users</th>
                                <th scope="col">Bounce rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pageVisits as $pageVisit)
                                <tr>
                                    <th scope="row">
                                        /{{ $pageVisit->route_name }}/
                                    </th>
                                    <td>
                                        {{ $pageVisit->visits }}
                                    </td>
                                    <td>
                                        {{ $pageVisit->visits }}
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($pageVisits->hasPages())
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($pageVisits->onFirstPage())
                                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span aria-hidden="true">&laquo;</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $pageVisits->previousPageUrl() }}" rel="prev"
                                        aria-label="@lang('pagination.previous')">&laquo;</a>
                                </li>
                            @endif

                            {{-- Next Page Link --}}
                            @if ($pageVisits->hasMorePages())
                                <li>
                                    <a href="{{ $pageVisits->nextPageUrl() }}" rel="next"
                                        aria-label="@lang('pagination.next')">&raquo;</a>
                                </li>
                            @else
                                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span aria-hidden="true">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    @endif

                </div>
            </div>


        </div>



        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Traffic</h6>
                            <h5 class="h3 mb-0">Page Visits</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
