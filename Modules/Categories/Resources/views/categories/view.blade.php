@extends('adminlte::layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------- -->

<div class="container" style="overflow:auto;">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h1>Categories</h1>
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
                <a href="/categories/create" class="btn btn-primary float-end">Create new categories</a>
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
                    <th width="52%">Title</th>
                    <th width="15%"></th>
                    <th width="15%"></th>
                    <th width="14%"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->category_id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <form action="">
                            <a href="/categories/update/{{ $category->category_id }}"  class="btn btn-info">Update</a>
                            <a href="/categories/delete/{{ $category->category_id }}" class="btn btn-danger">Delete</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
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