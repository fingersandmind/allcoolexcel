@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="excel"> Import Excel File <br>
                        <br>

                        <button class="btn btn-warning btn-sm" type="submit">Submit</button>
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
    </div>
</div>
@endsection