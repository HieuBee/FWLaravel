@extends('master.master')
@section('content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="{{ url('homeshop') }}">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			{{-- `````````````````````````````````````````````````````````````````````` --}}
			<div class="table-responsive cart_info">
				<form action="{{route('checkout')}}" method="POST">
					{{-- chekout --}}
					@if (Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if (Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif
					@csrf
					{{-- end checkout --}}
					<table class="table table-condensed table-hover" id="cart">
						<thead>
							<tr class="cart_menu">
								<td class="image">Image</td>
								<td class="title">Title</td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td class="delete"></td>
							</tr>
						</thead>
						<tbody>
							@php $total = 0 @endphp
							@if(session('cart'))
								@foreach(session('cart') as $id => $details)
									@php $total += $details['money'] * $details['quantity'] @endphp
									<tr data-id="{{ $id }}">
										<td  data-th="Product" class="cart_product" style="margin: opx;padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;margin: 0px;">
											<img src="{{ asset('img/'.$details['image']) }}" width="100" height="100"/>
										</td>
										<td class="cart_title">
											<h4>{{ $details['title'] }}</h4>
											<input type="hidden" name="ids[]" value="{{ $id }}">
                                            <input type="hidden" name="nameProduct[]" value="{{ $details['title'] }}">
										</td>
										<td data-th="Price" class="cart_price">${{ $details['money'] }}</td>
										<td data-th="Quantity">	
											<input style="width: 80px" name="quantity[]" class="cart_quantity_input quantity update-cart" type="number" min="1" name="quantity" value="{{ $details['quantity'] }}" size="2"/>
										</td>
										<td data-th="Subtotal" class="cart_total text-center">
											<p class="cart_total_price">
												${{ $details['money'] * $details['quantity'] }}
											</p>
											<input type="hidden" name="Subtotal[]" value="{{ $details['money'] * $details['quantity'] }}">
										</td>
										<td class="actions" data-th="">
											<button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr>
								@endforeach
							@endif
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
							</tr>
							<tr>
								<td colspan="5" class="text-right">
									{{-- <a href="{{ url('/homeshop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
									<button type="submit" class="btn btn-success">Checkout</button> --}}
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="form-checkout" style="margin: 10px">
						<div class="form-group">
							<label for="name">Full Name</label>
							<input type="text" class="form-control"
							placeholder="Enter Full Name" name="name" value="{{old('name')}}">
							<span class="text-danger">@error('name')
								{{$message}}
							@enderror</span>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
							<span class="text-danger">@error('email')
								{{$message}}
							@enderror</span>
						</div>
						<div class="form-group">
							<label for="address">address</label>
							<input type="text" class="form-control" placeholder="Enter address" name="address" value="{{old('address')}}">
							<span class="text-danger">@error('address')
								{{$message}}
							@enderror</span>
						</div>
						<div class="form-group">
							<label for="phone_number">Phone Number</label>
							<input type="text" class="form-control" placeholder="Enter Phone number " name="phone_number" value="{{old('phone_number')}}">
							<span class="text-danger">@error('phone_number')
								{{$message}}
							@enderror</span>
						</div>
						<div class="button-checkout" style="text-align: right">
							<tfoot>
								<tr>
									<td colspan="5" class="text-right">
										<a href="{{ url('/homeshop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
										<button type="submit" class="btn btn-success">Checkout</button>
									</td>
								</tr>
							</tfoot>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section> <!--/#cart_items-->

	{{-- <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

@endsection
@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection