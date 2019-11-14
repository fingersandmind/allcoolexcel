@extends('layouts.master')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Cart</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
            <button type="button" class="btn btn-outline-primary"><i class="fa fa-pencil mr-2"></i>Edit Page</button>
        </div>
        <div class="row row-cards">
            <div class="col-lg-12">
                <div class="card mt-5 store">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Description</th>
                                    <th>Net Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->ItemCode }}</td>
                                        <td>{{ $item->brand->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ str_limit($item->description, $limit=30, $end='...') }}</td>
                                        <td><strong>P{{ $item->net }}</strong></td>
                                        <td><input type="number" name="qty[{{ $item->id }}][]" min="0" max="100" step="0" id=""></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $(document).ready(function(){
        
    });
</script>