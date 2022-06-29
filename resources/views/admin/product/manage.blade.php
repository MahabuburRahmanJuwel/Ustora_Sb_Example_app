@extends('admin.master')
@section('title')
    This is add Product page
@endsection
@section('content')
    <h1 class="mt-4">Product Module</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Manage Product Page</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Product </th>
                        <th>Category </th>
                        <th>Brand </th>
                        <th>Product description</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->Brand}}</td>
                            <td>{{$product->Description}}</td>
                            <td><img src="{{asset($product->image)}}" alt="" height="60" width="90"/></td>
                            <td>
                                <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this..')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
