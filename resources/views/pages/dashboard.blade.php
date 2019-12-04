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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="excel" class="form-control @error('excel') is-invalid @enderror"> Import Excel File <br>
                        @error('excel')
                            <code class="text-danger">{{ $message }}</code>
                        @enderror
                        <br>

                        <button class="btn btn-warning btn-sm" type="submit">Submit</button>
                        <a href="{{ route('destroy') }}" onclick="return confirm('Are you really really sure you want to delete all of the records?');" class="btn btn-danger btn-sm">DESSSTTTRRROOOOYYY</a>
                    </form>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Basic Table</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Model</th>
                                            <th>Description</th>
                                            <th>Cap</th>
                                            <th>SRP</th>
                                            <th>COST</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lists as $list)
                                        <tr>
                                            <td scope="row">{{ $list->id }}</td>
                                            <th scope="row">{{ $list->brand }}</th>
                                            <th scope="row">{{ $list->type }}</th>
                                            <th scope="row">{{ $list->model }}</th>
                                            <th scope="row">{{ $list->description }}</th>
                                            <th scope="row">{{ $list->cap }}</th>
                                            <th scope="row">{{ $list->srp }}</th>
                                            <th scope="row">{{ $list->cost }}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cart  Details</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('upload.data') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="region" class="form-control">Upload Region Data</label>
                            <input type="file" id="region" name="region" class="form-control @error('region') is-invalid @enderror">
                            @error('region')
                                <code class="text-danger">{{ $message }}</code>
                            @enderror
                            <br>

                            <label for="province" class="form-control">Upload Province Data</label>
                            <input type="file" id="province" name="province" class="form-control @error('province') is-invalid @enderror">
                            @error('province')
                                <code class="text-danger">{{ $message }}</code>
                            @enderror
                            <br>

                            <label for="city" class="form-control">Upload City Data</label>
                            <input type="file" id="city" name="city" class="form-control @error('city') is-invalid @enderror">
                            @error('city')
                                <code class="text-danger">{{ $message }}</code>
                            @enderror
                            <br>

                            <label for="baranggay" class="form-control">Upload Brgy Data</label>
                            <input type="file" id="baranggay" name="baranggay" class="form-control @error('baranggay') is-invalid @enderror">
                            @error('baranggay')
                                <code class="text-danger">{{ $message }}</code>
                            @enderror
                            <br>
                        </div>

                        <button class="btn btn-warning btn-sm" type="submit">Submit</button>
                        
                    </form>
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
</div>
{{-- @include('partials.modal') --}}
@endsection

@push('additionalCSS')
    <link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endpush

@push('additionalJS')
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(function(e) {
            $('#datatable').DataTable();
        } );
    </script>
@endpush