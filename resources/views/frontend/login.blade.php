@extends('master.master')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
                        <form action="{{route('login-user')}}" method="POST">
                            @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                                <span class="text-danger">@error('email')
                                    {{$message}}
                                @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                                <span class="text-danger">@error('password')
                                    {{$message}}
                                @enderror</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Login    </button>
                            </div>
                            <br>
                            <a href="registration">New User !! Register Here.</a>
                        </form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
                        <form action="{{route('register-user')}}" method="POST">
                            @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
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
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                                <span class="text-danger">@error('password')
                                    {{$message}}
                                @enderror</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Register    </button>
                            </div>
                            <br>
                            <a href="login">Already Register !! Login Here.</a>
                        </form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection
