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
        <div class="row" style="margin-bottom:20px">
            <div class="col-md-4">
                <h1 style="margin: 0px;">
                    Bookings</h1>
            </div>
            <div class="col-md-8" style="text-align: right">
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
        </div>
    </div>
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
    {{-- -------------------------------------------------------------------------------------------------------------------- --}}
    <div class="table-bookings" style="padding-left:180px">
        <table class="table table-bordered" style="width: 80%">
            {{-- <thead>
                <tr>
                    <th width="50%" style="border: 1px solid #d6d5d5;">Name</th>
                    <th style="border: 1px solid #d6d5d5; text-align: center" width="10%">Quantity</th>
                    <th width="20%" style="text-align: center;border: 1px solid #d6d5d5;">Price</th>
                </tr>
            </thead> --}}
            <tbody>
                @foreach($bookings as $item)
                    <thead>
                        <tr>
                            <th>
                                Name:  <h4 style="display:contents">{{ $item->customers->name ?? ""}}</h4>
                                <br>
                                Email:  <h4 style="display:contents">{{ $item->customers->email ?? ""}}</h4>
                                <br>
                                Phone number:  <h4 style="display:contents">{{ $item->customers->phone_number ?? ""}}</h4>
                            </th>
                        </tr>
                        <tr>
                            <th width="50%" style="border: 1px solid #d6d5d5;">Name</th>
                            <th style="border: 1px solid #d6d5d5; text-align: center" width="10%">Quantity</th>
                            <th width="20%" style="text-align: center;border: 1px solid #d6d5d5;">Price</th>
                        </tr>
                    </thead>
                    @php $total = 0 @endphp
                    @foreach ( json_decode( $item->productgallery_id, true) as $key =>$val )
                        @php $total += $val['price'] @endphp
                        <tr>
                            <td style="border: 1px solid #d6d5d5;">
                                {{ $val['name'] }}
                                <br>
                            </td>
                            <td style="text-align: center; border: 1px solid #d6d5d5;">
                                {{ $val['quantity'] }}
                                <br>
                            </td>
                            <td style="text-align: center;border: 1px solid #d6d5d5;">
                                ${{ $val['price'] }}
                                <br>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="text-right">
                            <h4 style="display: contents; color: #00a65a;font-weight:600">Total: ${{ $total }}</h4>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="done" style="text-align: right; border: none;">
                                <form action="">
                                    <a href=""  class="btn btn-success"><i class="fa fa-check"> Done</i></a>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
</body>
<style>
    .bordered>tbody>tr>td {
    border: 1px solid #b8b8b8;
}
</style>
</html>
@endsection