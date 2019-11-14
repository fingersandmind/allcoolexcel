@extends('layouts.master')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Data Tables</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
            </ol>
            <button type="button" class="btn btn-outline-primary"><i class="fa fa-pencil mr-2"></i>Edit Page</button>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">List of Items</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table card-table table-vcenter table-info" style="width:100%">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th class="wd-10p">Item Code</th>
                                        <th class="wd-15p">Brand</th>
                                        <th class="wd-15p">Model</th>
                                        <th class="wd-20p">Description</th>
                                        <th class="wd-15p">Net</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->ItemCode }}</td>
                                            <td>{{ $item->brand->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ Str::limit($item->description, $limit=30 , $end='..') }}</td>
                                            <td>P{{ number_format($item->net,2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form action="">
                    <div class="form-group">
                        <div id="details"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('additionalCSS')
        <link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
@endpush

@push('additionalJS')
    <script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function(e) {
            $('#example').DataTable();
        } );
    </script>
@endpush