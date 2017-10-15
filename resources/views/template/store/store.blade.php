@extends('layouts.app')

@section('content')
@include('layouts.int.header.admin_header')

<div class="wrapper">
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
          <div class="row">
						<div class="col-md-10 col-md-offset-2 pull-right">
 							<a class="btn btn-primary  pull-right btn-dashbord"> المبيعات<div class="ripple-container"></div></a>
              <a class="btn btn-info pull-right btn-dashbord"> المشتريات <div class="ripple-container"></div></a>
              <a href="{{ route('animal') }}" class="btn btn-warning  pull-right btn-dashbord"> المواشي<div class="ripple-container"></div></a>
              <a class="btn btn-success pull-right btn-dashbord"> الأعلاف <div class="ripple-container"></div></a>

 						</div>

          </div>

        </div>
 						</div>
					</div>

  	    	</div>




	</div>
  @include('layouts.int.footer.admin_footer')

</div>
 @endsection
