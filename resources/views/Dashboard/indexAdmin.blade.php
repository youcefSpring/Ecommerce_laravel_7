@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>المبيعات</h4>
                                        <h6 class="text-muted">اجمالي المبيعات</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$9,980</h4>
                                        <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="btc-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>ETH</h4>
                                        <h6 class="text-muted">Ethereum</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                        <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="eth-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>XRP</h4>
                                        <h6 class="text-muted">Balance</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                        <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>XRP</h4>
                                        <h6 class="text-muted">Balance</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                        <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">احدث الطلبات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <p class="text-muted">Total BTC available: 6542.56585</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>رقم الطلب</th>
                                        <th>العميل</th>
                                        <th>السعر </th>
                                        <th>حالو الطلب</th>
                                        <th>المجموع</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-success bg-lighten-5">
                                        <td>105</td>
                                        <td>بن عبد الرزاق</td>
                                        <td>$ 4762.53</td>
                                        <th>جاهز</th>
                                        <th>1200</th>
                                    </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">اخر التقييمات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <p class="text-muted">Total USD available: 9065930.43</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>العميل</th>
                                        <th>المنتج</th>
                                        <th>التقييم</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-danger bg-lighten-5">
                                        <td>10599.5</td>
                                        <td> 0.02000000</td>
                                        <td>$ 211.99</td>
                                    </tr>
                                                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->
           
        </div>
    </div>
</div>

@endsection