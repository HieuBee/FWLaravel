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
                <h1>Table Blogs</h1>
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
                <a href="/blogs/create" class="btn btn-primary float-end">Create new blogs</a>
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
                <th style="width: 8%">Writer</th>
                <th style="width: 20%">Image</th>
                <th style="width: 10%">Title</th>
                <th style="width: 33%">Description</th>
                <th width="15%"></th>
                <th width="14%"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->writer }}</td>
                <td><img src="{{ asset('img/'.$blog->image) }}" style="height: 100px; width: 150px;"></td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->created_at }}</td>
                <td>
                    <form action="">
                        <a href="/blogs/update/{{ $blog->id }}"  class="btn btn-info">Update</a>
                        <a href="/blogs/delete/{{ $blog->id }}" class="btn btn-danger">Delete</a>
                    </form>
                <td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$blogs->links()}}
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