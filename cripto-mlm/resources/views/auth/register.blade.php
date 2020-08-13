@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<section class="registerconts">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 text-center regisinfo">
				<div class="register-title">
					<h3>Lorem Ipsum</h3>
				</div>
					<div class="videobox">
					<video width="100%" height="100%" controls>
					  <source src="video/video.mp4" type="video/mp4">
					  <source src="video/video.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
					</div>
					<!-- <div class="imgbox">
						<img src="images/register.jpg" alt=""/>
					</div> -->
					<p>
						Lorem Ipsum is simply dummy text of the printing and 
						typesetting industry. Lorem Ipsum has been the industry
						standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</div>
				<div class="col-lg-6 col-12 regisfrom">
				<div class="register-title">
					<h3>Register</h3>
				</div>
					<div class="cform">
						<form  method="POST" action="{{ route('register') }}">
                            @csrf
							<div class="fieldrow">
								<label>First Name : <span class="pink-color">*</span></label>
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror custfield" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
							</div>
							<div class="fieldrow">
								<label>Last Name : <span class="pink-color">*</span></label>
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror custfield" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
							</div>
							<div class="fieldrow">
								<label>Email Address : <span class="pink-color">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror custfield" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							
							</div>
							<div class="fieldrow">
								<label class="d-block">Mobile No. : <span class="pink-color">*</span></label>
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror custfield" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
							
							</div>
							<div class="fieldrow">
								<label>Password : <span class="pink-color">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror custfield" name="password" required autocomplete="new-password">

							</div>
							<div class="fieldrow">
								<label>Re-Type Password : <span class="pink-color">*</span></label>
                                <input id="password-confirm" type="password" class="form-control custfield" name="password_confirmation" required autocomplete="new-password">
							</div>
							<div class="customecher">
                                <div class="custchec">
                                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                    <label for="styled-checkbox-1"></label>
                                </div>
                                <p><a href="terms.html">Terms and Conditions</a></p>
                            </div>
                            @if (isset($username))
                            <input type="hidden" name="parent" value= {{$username}}>
                            @else
                            <input type="hidden" name="parent" value='0_0'>
                            @endif
							<div class="fielbtn">
								<button type="submit" class="cbtn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</section>
@endsection
