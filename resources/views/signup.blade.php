@extends('layouts.login')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                    @if($errors->any())

                    <div class="alert alert-danger text-center">
                            @foreach($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                    </div>
                    @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                <form class="login100-form validate-form" method="POST" action="{{route('signup')}}">
                    @csrf
                    <span class="login100-form-title p-b-26">
                            Hotel Recommender
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="fa fa-user-o"></i>
                        </span>
                    <div class="wrap-input100 validate-input" data-validate = " Enter Fullname">
                            <input class="input100" type="text" name="fullname">
                            <span class="focus-input100" data-placeholder="FullName"></span>
                        </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password_confirmation">
                            <span class="focus-input100" data-placeholder=" Confirm Password"></span>
                        </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Sign Up
                            </button>
						</div>
                    </div>
                </form>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already Have an account?
						</span>

                    <a class="txt2" href="{{route('listhotel')}}">
							Login
						</a>
					</div>

			</div>
		</div>
	</div>

@endsection
