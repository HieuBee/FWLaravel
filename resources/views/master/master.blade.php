<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{( '../frontend/css/bootstrap.min.css' )}}" rel="stylesheet">
    <link href="{{( '../frontend/css/font-awesome.min.css' )}}" rel="stylesheet">
    <link href="{{( '../frontend/css/prettyPhoto.css' )}}" rel="stylesheet">
    <link href="{{( '../frontend/css/price-range.css' )}}" rel="stylesheet">
    <link href="{{( '../frontend/css/animate.css' )}}" rel="stylesheet">
	<link href="{{( '../frontend/css/main.css' )}}" rel="stylesheet">
	<link href="{{( '../frontend/css/responsive.css' )}}" rel="stylesheet">
    <link href="{{( '../frontend/css/style.css' )}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{( '../frontend/images/ico/favicon.ico' )}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 main-section">
                <div class="dropdown">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['money'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ asset('img/'.$details['image']) }}" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['title'] }}</p>
                                        <span class="price text-info"> ${{ $details['money'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{--goi code trang header--}}
    @include('master.header')

    {{--noi chua noi dung thay doi--}}

    {{-- @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif --}}

    <div class="content">
    @section('content')
        @show
    </div>

    {{--goi code trang footer--}}
    @include('master.footer')

</body>
 {{--javascrtip dung chung--}}
 @yield('scripts')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{( '../frontend/js/jquery.js' )}}"></script>
	<script src="{{( '../frontend/js/bootstrap.min.js' )}}"></script>
	<script src="{{( '../frontend/js/jquery.scrollUp.min.js' )}}"></script>
	<script src="{{( '../frontend/js/price-range.js' )}}"></script>
    <script src="{{( '../frontend/js/jquery.prettyPhoto.js' )}}"></script>
    <script src="{{( '../frontend/js/main.js' )}}"></script>

</html>