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

<!------------------------------------------------------------------------------------------------------------------->

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px;backgroud: ">
            <h2>Update Categories</h2><br>
                <div class="form-group">
                    <form action="/categories/update/{{ $categories->category_id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="text">
                                <label for="Title">
                                        Title:
                                </label>
                                <input type="text" name="title" class="form-control" value="{{ $categories->title }}"><br>
                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
    
    
</body>
</html>
@endsection