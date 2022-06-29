@extends('admin.master')
@section('title')

@endsection
@section('content')

    <h1 class="mt-4">Product Module</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Product Page</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="category"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="brand"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Product Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-success" value="Create New Product"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

