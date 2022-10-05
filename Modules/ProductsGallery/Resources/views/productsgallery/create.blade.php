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

<!-- ------------------------------------------------------------------------------------------------------------------ -->

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px;backgroud:hsl(0deg 0% 95%); ">
                    <h2>Create productsgallery</h2><br>
                    <div class="form-group">
                        <form action="/productsgallery/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="text">
                                    <label for="Product_id">
                                        <select name="product_id" class="form-control">
                                            <option selected>Chọn sản phẩm</option>
                                            @foreach($products as $item)
                                            <option value="{{ $item->product_id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </label><br>
                                    <span style="color: red">@error('product_id'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text">
                                    <label for="image">
                                        Image:
                                    </label> 
                                </div>
                                <input type="file" name="image" class="form-control"><br>
                                <!-- <span style="color: red">@error('image'){{$message}}@enderror</span> -->
                            </div>
                            <div class="form-group">
                                <div class="text">
                                    <label for="Title">
                                            Title:
                                    </label>
                                    <input type="text" name="title" class="form-control"><br>
                                    <span style="color: red">@error('title'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text">
                                    <label for="Description">
                                            Description:
                                    </label>
                                    <input type="text" name="description" class="form-control"><br>
                                    <span style="color: red">@error('description'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text">
                                    <label for="Money">
                                            Money:
                                    </label>
                                    <input type="text" name="money" class="form-control"><br>
                                    <span style="color: red">@error('money'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-select">
                                    <option selected value="In Stock">In Stock</option>
                                    <option value="Sold Out">Sold Out</option>
                                </select> <br>
                                <span style="color: red">@error('status'){{$message}}@enderror</span>
                            </div>
                            <button type="submit" class="btn btn-info text-right">Create</button>
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