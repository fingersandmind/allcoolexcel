@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 04</li>
        </ol>
        {{-- <button type="button" data-toggle="modal" data-target="#transaction" class="btn btn-outline-primary"><i class="fa fa-shopping-cart fa-spin"></i> New Purchase Order</button> --}}
        <a href="{{ route('transactions.create') }}" class="btn btn-outline-primary"><i class="fa fa-shopping-cart fa-spin"></i>Create Purchase Order</a>
    </div>

    <div class="row row-cards">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-cube text-warning icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left">Company Revenue</p>
                            <div class="">
                                <h3 class="font-weight-semibold text-left mb-0">$89,876</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1" aria-hidden="true"></i> 80% higher growth
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-receipt text-secondary icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left">Projects</p>
                            <div class="">
                                <h3 class="font-weight-semibold text-left mb-0">897</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>  Completed Projects
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-poll-box text-danger icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left">Profits</p>
                            <div class="">
                                <h3 class="font-weight-semibold text-left mb-0">8278</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Monthly Profits
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-account-location text-success icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left">Employees</p>
                            <div class="">
                                <h3 class="font-weight-semibold text-left mb-0">345</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted  mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>Employees Growth
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company profit</h3>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas  id="lineChart"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cart  Details</h3>
                </div>
                <div class="text-center">
                    <div class="">
                        <div class="table_style table-responsive">

                            <table class="table mb-0 ">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customers</th>
                                        <th >Categories</th>
                                        <th >Popularity</th>
                                        <th>Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>iPone X</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/12.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/21.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/29.jpg)"></span>
                                                  <span class="avatar brround">+8</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-info round">Mobile</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width:95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>$150.00</td>
                                    </tr>

                                    <tr>
                                        <td>iPad</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/2.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/1.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/2.jpg)"></span>
                                                  <span class="avatar brround">+21</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-success round">Tablet</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>$140.00</td>
                                    </tr>

                                    <tr>
                                        <td>OnePlus</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/3.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/4.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/5.jpg)"></span>
                                                  <span class="avatar brround">+14</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-info round">Mobile</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width:75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>$120.00</td>
                                    </tr>
                                    <tr>
                                        <td>ZenPad</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/8.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/9.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/10.jpg)"></span>
                                                  <span class="avatar brround">+20</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-success round">Tablet</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>160.00</td>
                                    </tr>
                                    <tr>
                                        <td>Desc</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/13.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/14.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/15.jpg)"></span>
                                                  <span class="avatar brround">+2</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-info round">Laptop</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>260.00</td>
                                    </tr>
                                    <tr>
                                        <td>Desc</td>
                                        <td>
                                        <ul class="users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Josh Hazlewood" class="pull-up list_membler">
                                                <div class="avatar-list avatar-list-stacked">
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/13.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/14.jpg)"></span>
                                                  <span class="avatar brround" style="background-image: url(assets/images/faces/female/15.jpg)"></span>
                                                  <span class="avatar brround">+2</span>
                                                </div>
                                            </li>
                                        </ul></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-info round">Laptop</a></td>
                                        <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div></td>
                                        <td>260.00</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row row-cards row-deck">
        
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Sales</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <label class="tx-12">Today</label>
                            <p class="font-weight-semibold">3,256</p>
                        </div><!-- col -->
                        <div class="col border-left text-center">
                            <label class="tx-12">This Week</label>
                            <p class="font-weight-semibold">25,321</p>
                        </div><!-- col -->
                        <div class="col border-left text-center">
                            <label class="tx-12">This Month</label>
                            <p class="font-weight-semibold">53,625</p>
                        </div><!-- col -->
                    </div><!-- row -->

                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%">50%</div>
                </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Profit</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <label class="tx-12">Today</label>
                            <p class="font-weight-semibold">236 $</p>
                        </div><!-- col -->
                        <div class="col border-left text-center ">
                            <label class="tx-12">This Week</label>
                            <p class="font-weight-semibold">1,365 $</p>
                        </div><!-- col -->
                        <div class="col border-left text-center">
                            <label class="tx-12">This Month</label>
                            <p class="font-weight-semibold">36,254 $</p>
                        </div><!-- col -->
                    </div><!-- row -->

                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 35%">35%</div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row row-cards">
        <div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="facebook p-4 br-tl-7 br-tr-7">
                                <div class="text-center text-white social">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="d-flex  align-items-center">
                                    <div><h3 class="font-medium">16k</h3>
                                        <h5 class="text-muted mb-0">Following</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium">1k</h3>
                                        <h5 class="text-muted mb-0">Friends</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="twitter p-4 br-tl-7 br-tr-7">
                                <div class="text-center text-white social">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="d-flex  align-items-center">
                                    <div><h3 class="font-medium">46k</h3>
                                        <h5 class="text-muted mb-0">Following</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium">40k</h3>
                                        <h5 class="text-muted mb-0">Friends</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="linkedin p-4 br-tl-7 br-tr-7">
                                <div class="text-center text-white social">
                                    <i class="fa fa-linkedin"></i>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="d-flex  align-items-center">
                                    <div><h3 class="font-medium">41k</h3>
                                        <h5 class="text-muted mb-0">Following</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium">21k</h3>
                                        <h5 class="text-muted mb-0">Friends</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="instagram p-4 br-tl-7 br-tr-7">
                                <div class="text-center text-white social">
                                    <i class="fa fa-instagram"></i>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="d-flex  align-items-center">
                                    <div><h3 class="font-medium">21k</h3>
                                        <h5 class="text-muted mb-0">Following</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium">23k</h3>
                                        <h5 class="text-muted mb-0">Friends</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('partials.modal') --}}
@endsection