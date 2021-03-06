{{-- @extends('dashboard')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-rocket icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Dashboard
                <!-- <div class="page-title-subheading">This dashboard was created as an example of the flexibility that Architect offers.</div> -->
            </div>
        </div>
    </div>
</div>
<div class="tabs-animation">
    <div class="row">
        <div class="col-lg-12 col-xl-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Income Report</h5>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                        <div style="height: 227px;">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                    <h5 class="card-title">Target Sales</h5>
                    <div class="mt-3 row">
                        <div class="col-sm-12 col-md-4">
                            <div class="widget-content p-0">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-numbers text-dark">65%</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper mt-1">
                                        <div class="progress-bar-xs progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 65%;">
                                            </div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left font-size-md">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="widget-content p-0">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-numbers text-dark">22%</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper mt-1">
                                        <div class="progress-bar-xs progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 22%;">
                                            </div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left font-size-md">Profiles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="widget-content p-0">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-numbers text-dark">83%</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper mt-1">
                                        <div class="progress-bar-xs progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 83%;">
                                            </div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left font-size-md">Tickets</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="main-card mb-3 card">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-primary"></div>
                                    <i class="fal fa-cog text-primary"></i>
                                </div>
                                <div class="widget-numbers">45.8k</div>
                                <div class="widget-subheading">Total Views</div>
                                <div class="widget-description text-success">
                                    <i class="fa fa-angle-up"></i>
                                    <span class="pl-1">175.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-info"></div>
                                    <i class="fas fa-bug text-info"></i>
                                </div>
                                <div class="widget-numbers">63.2k</div>
                                <div class="widget-subheading">Bugs Fixed</div>
                                <div class="widget-description text-info">
                                    <i class="fa fa-arrow-right"></i>
                                    <span class="pl-1">175.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-danger"></div>
                                    <i class="fal fa-file-chart-line text-danger"></i>
                                </div>
                                <div class="widget-numbers">5.82k</div>
                                <div class="widget-subheading">Reports Submitted</div>
                                <div class="widget-description text-primary">
                                    <span class="pr-1">54.1%</span>
                                    <i class="fa fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover br-br">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-success"></div>
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="widget-numbers">17.2k</div>
                                <div class="widget-subheading">Profiles</div>
                                <div class="widget-description text-warning">
                                    <span class="pr-1">175.5%</span>
                                    <i class="fa fa-arrow-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('dashboard')
@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-rocket icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Dashboard
                <div class="page-title-subheading">Containing some sort of information.</div>
            </div>
        </div>
    </div>
</div>

<div class="tabs-animation">
    <!--<div class="row">
        <div class="col-lg-12 col-xl-6">
            <div class="main-card mb-3 card">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-primary"></div>
                                    <i class="fal fa-sitemap text-primary"></i>
                                </div>
                                @php
                                    $product_count = App\Models\Product::all()->count();
                                @endphp
                                <div class="widget-numbers">{{$product_count}}</div>
                                <div class="widget-subheading">Products</div>
                                <div class="widget-description text-success">
                                    {{-- <i class="fa fa-angle-up"></i>
                                    <span class="pl-1">175.5%</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-info"></div>
                                    <i class="fal fa-graduation-cap text-info"></i>
                                </div>
                                <div class="widget-numbers">{{Auth::user()->count()}}</div>
                                <div class="widget-subheading">Users</div>
                                <div class="widget-description text-info">
                                    {{-- <i class="fa fa-arrow-right"></i>
                                    <span class="pl-1">175.5%</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-danger"></div>
                                    <i class="fal fa-file-chart-line text-danger"></i>
                                </div>
                                @php
                                    $order_count = App\Models\Order::all()->count();
                                @endphp
                                <div class="widget-numbers">{{$order_count}}</div>
                                <div class="widget-subheading">Orders</div>
                                <div class="widget-description text-primary">
                                    {{-- <span class="pr-1">54.1%</span>
                                    <i class="fa fa-angle-up"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-chart widget-chart-hover br-br">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg bg-success"></div>
                                    <i class="fal fa-laptop"></i>
                                </div>
                                @php
                                    $transaction_count = App\Models\Transaction::all()->count();
                                @endphp
                                <div class="widget-numbers">{{$transaction_count}}</div>
                                <div class="widget-subheading">Transactions</div>
                                <div class="widget-description text-warning">
                                    {{-- <span class="pr-1">175.5%</span>
                                    <i class="fa fa-arrow-left"></i> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card mb-3 widget-chart widget-chart-hover bg-white card-border">
                <div class="widget-chart-content">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-success"></div>
                        <i class="fas fa-pager text-info"></i>
                    </div>
                    @php
                        $product_count = App\Models\Product::all()->count();
                    @endphp
                    <div class="widget-numbers text-info">{{$product_count}}</div>
                    <div class="widget-subheading text-info">Products</div>
                    <div class="widget-description text-info">
                        {{-- <i class="fa fa-arrow-right"></i>
                        <span class="pl-1"></span> --}}
                    </div>
                </div>
                <div class="widget-progress-wrapper progress-wrapper-bottom">
                    <div class="progress-bar-sm progress">
                        <div class="progress-bar bg-info progress-bar-animated progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="card mb-3 widget-chart widget-chart-hover bg-white card-border">
                <div class="widget-chart-content">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-danger"></div>
                        <i class="fas fa-users text-danger"></i>
                    </div>
                    <div class="widget-numbers text-danger">{{Auth::user()->count()}}</div>
                    <div class="widget-subheading text-danger">Users</div>
                    <div class="widget-description text-danger">
                        {{-- Down by
                        <span class="text-white pl-1 pr-1 opacity-8">
                            <i class="fa fa-angle-down"></i>
                            <span class="pl-1">54.1%</span>
                        </span>
                        from 30 days ago --}}
                    </div>
                </div>
                <div class="widget-progress-wrapper progress-wrapper-bottom">
                    <div class="progress-bar-sm progress">
                        <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="card mb-3 widget-chart widget-chart-hover bg-white card-border-alternate">
                <div class="widget-chart-content">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-alternate"></div>
                        <i class="fas fa-shopping-cart text-alternate"></i>
                    </div>
                    @php
                        $order_count = App\Models\Order::all()->count();
                    @endphp
                    <div class="widget-numbers text-alternate">{{$order_count}}</div>
                    <div class="widget-subheading text-alternate">Orders</div>
                    <div class="widget-description text-alternate">
                        {{-- <i class="fa fa-arrow-right"></i>
                        <span class="pl-1">175.5%</span> --}}
                    </div>
                </div>
                <div class="widget-progress-wrapper progress-wrapper-bottom">
                    <div class="progress-bar-sm progress">
                        <div class="progress-bar bg-alternate progress-bar-animated progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="card mb-3 widget-chart widget-chart-hover bg-white card-border">
                <div class="widget-chart-content">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-success"></div>
                        <i class="fas fa-coins text-success"></i>
                    </div>
                    @php
                        $transaction_count = App\Models\Transaction::all()->count();
                    @endphp
                    <div class="widget-numbers text-success">{{$transaction_count}}</div>
                    <div class="widget-subheading text-success">Transactions</div>
                    <div class="widget-description text-success">
                        {{-- Down by
                        <span class="text-white pl-1 pr-1 opacity-8">
                            <i class="fa fa-angle-down"></i>
                            <span class="pl-1">54.1%</span>
                        </span>
                        from 30 days ago --}}
                    </div>
                </div>
                <div class="widget-progress-wrapper progress-wrapper-bottom">
                    <div class="progress-bar-sm progress">
                        <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
