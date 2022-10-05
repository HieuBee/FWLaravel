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
            <h2>Update Blogs</h2><br>
                <div class="form-group">
                    <form action="/blogs/update/{{ $blogs->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="text">
                                <label for="Writer">
                                        Writer:
                                </label>
                                <input type="text" name="writer" class="form-control" value="{{ $blogs->writer }}"><br>
                                <span style="color: red">@error('writer'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Image">
                                        Image:
                                </label>
                                <input type="file" name="image" class="form-control" value="{{ $blogs->image }}" multiple><br>
                                <!-- <span style="color: red">@error('image'){{$message}}@enderror</span> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Title">
                                        Title:
                                </label>
                                <input type="text" name="title" class="form-control" value="{{ $blogs->title }}"><br>
                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Description">
                                        Description:
                                </label>
                                <input type="text" name="description" class="form-control" rows="3" value="{{ $blogs->description }}"><br>
                                {{-- <span style="color: red">@error('description'){{$message}}@enderror</span> --}}
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