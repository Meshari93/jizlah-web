@extends('layouts.app')

@section('content')
<div class="section section-full-screen section-signup" style="background-image: url('/img/city.jpg'); background-size: cover; background-position: top center; min-height: 650px;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="card card-signup">
            <div class="header header-primary text-center">
             <h4  class="btn-dashbord"> تسجيل مستخدم جديد</h4>

            </div>
            <div class="content" style="padding: 0px 40px 0px 40px;">
              <div class="social-line" style="margin-top: 30px;">
 										<a href="#pablo" class="simpleIcon">
 											<i class="fa fa-facebook-square"></i>
 										<div class="ripple-container"></div></a>
 										<a href="#pablo" class="simpleIcon">
 											<i class="fa fa-twitter"></i>
 										</a>
 										<a href="#pablo" class="simpleIcon">
 											<i class="fa fa-google-plus"></i>
 										</a>
 									</div>
                    <form class="form-horizontal rtl" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} text-center">
                             <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="الاسم الكامل ">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="الايميل ">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="كلمة المرور ">
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      <div class="footer text-center">
                       <div class="col-md-4 col-md-offset-4">
                           <button type="submit" class="btn btn-primary btn-dashbord">
                               تسجيل
                           </button>
                       </div>
       								</div>
    							</form>
					</div>

				</div>
			</div>
		</div>
	</div>
  </div>
@endsection
