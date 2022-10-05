@extends('adminlte::layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- ------------------------------------------------------------------------------------------------------- -->

<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h1>Table Productsgallery</h1>
            </div>
            <div class="col-md-5" style="text-align: right">
                <div class="search-bt">
                    <form action="">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>                        
            </div>
            <div class="col-md-3" style="text-align: right">
                <a href="/productsgallery/create" class="btn btn-primary float-end">Create new productsgallery</a>
            </div>
        </div>
    </div>
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="4%">Id</th>
                <th>Product_id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Money</th>
                <th>Status</th>
                <th width="14%"></th>
                <th width="14%"></th>
                <th width="14%"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($productsgallery as $productgallery)
            <tr>
                <td>{{ $productgallery->productgallery_id }}</td>
                <td>{{optional($productgallery->products)->title }}</td>
                {{-- <td>{{ $productgallery->product_id }}</td> --}}
                <td><img src="{{ asset('img/'.$productgallery->image) }}" style="height: 100px; width: 100px;"></td>
                <td>{{ $productgallery->title }}</td>
                <td>{{ $productgallery->description }}</td>
                <td>{{ $productgallery->money }}</td>
                <td>{{ $productgallery->status }}</td>
                <td>{{ $productgallery->created_at }}</td>
                <td>{{ $productgallery->updated_at }}</td>
                <td>
                    <form action="">
                        <a href="/productsgallery/update/{{ $productgallery->productgallery_id }}" class="btn btn-info">Update</a>
                        <a href="/productsgallery/delete/{{ $productgallery->productgallery_id }}" class="btn btn-danger">Delete</a>
                    </form>
                <td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$productsgallery->links()}}
</div>


</body>
<style>
    .inp-search{
        border: 2px solid #dee2e6;
        border-radius: 5px;
        margin-top: 6px;
    }
    .btn-aaaa {
        margin-top: -6px;
    }
    .btn-aaaa:hover {
        border: none;
        margin-top: -6px;
    }
</style>
</body>
</html>
@endsection