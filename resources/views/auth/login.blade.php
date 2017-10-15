@extends('layouts.app')

@section('content')

	<div class="section section-full-screen section-signup" style="background-image: url('/img/city.jpg'); background-size: cover; background-position: top center; min-height: 650px;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="card card-signup">
							<div class="header header-primary text-center">
								<h4>Login</h4>
							</div>
							<div class="content">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

    									<div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
    										<span class="input-group-addon">
    											<i class="material-icons">email</i>
    										</span>
    										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus/>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
    									</div>

    									<div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
    										<span class="input-group-addon">
    											<i class="material-icons">lock_outline</i>
    										</span>
    										<input  id="password" type="password" class="form-control" name="password" required />

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
    									</div>
    									<div class="checkbox">
  										<label>
  											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
  											Remember Me
  										</label>
  									</div>
    								</div>
    								<div class="footer text-center">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>
                       <button type="submit" href="{{ route('password.request') }}" class="btn btn-default">
                           Forgot Your Password?
                       </button>
     								</div>
    							</form>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
