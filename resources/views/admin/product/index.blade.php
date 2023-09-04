@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <a href="{{url('admin/product/create')}}" class="btn btn-success">+ create</a>
        <div class="card mt-4">
            <h5 class="card-header">Products</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>detail</th>
                            <th>brand</th>
                            <th>image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>1</td>
                            <td>pam</td>
                            <td>4/9/2566</td>
                            <td>4/9/2566</td>
                            <td>4/9/2566</td>
                            <td>4/9/2566</td>
                            <td>
                                <a href="" class="btn btn-warning">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
