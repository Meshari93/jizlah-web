@extends('layouts.app')

@section('content')
@include('layouts.int.header.admin_header')

<div class="wrapper">
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">

          @if ($errors->any())
              @foreach ($errors->all() as $error)
                 {{  Toastr::info($error, 'Error Alert:', ["positionClass" => "toast-bottom-left"])  }}
                @endforeach
           @endif
          <div class="row">
						<div class="col-md-12 ">
              <a href="{{ route('animal') }}" class="btn btn-success  btn-dashbord"> رجوع <div class="ripple-container"></div></a>
              <div class="col-md-1 pull-right rtl  btn-warning  pull-right btn-dashbord">
                <span>أضافة</span>
              </div>
 						</div>
          </div>
        <!-- //////////////////////////////////////////////// -->
          <div class="space-10"></div>

          <div id="input" class="content">
           <form class="form-horizontal" method="POST" action="{{ route('store.animal') }}" enctype="multipart/form-data">
               {{ csrf_field() }}
                    <div class="col-sm-12 pull-right rtl">
                      <div class="form-group is-empty">
                        <label class="control-label"><h4> النوع </h4></label>
                        <div class="row ">
                          <div class="col-sm-2 pull-right">
                            <div class="radio">
              								<label>
              									<input type="radio" name="typeAnimal" value="najdi" ><span class="circle"  ></span><span class="check"></span>
                                نجدي
              								</label>
              							</div>
                          </div>
                          <div class="col-sm-2 pull-right">
                            <div class="radio">
              								<label>
              									<input type="radio"   name="typeAnimal" value="naimi"><span class="circle"></span><span class="check"></span>
                                نعمي
              								</label>
              							</div>
                          </div>
                          <div class="col-sm-2 pull-right">
                          <div class="radio">
            								<label>
            									<input type="radio" name="typeAnimal" value="huri"  ><span class="circle"></span><span class="check"></span>
                               حري
            								</label>
            							</div>
                          </div>
                           <div class="col-sm-2 pull-right">
                           <div class="radio">
             								<label>
             									<input type="radio" name="typeAnimal" value="barbry"  ><span class="circle"></span><span class="check"></span>
                                بربري
             								</label>
             							</div>
                           </div>
                          <div class="col-sm-2 pull-right">
                          <div class="radio">
            								<label>
            									<input type="radio" name="typeAnimal" value="sawakini"  ><span class="circle"></span><span class="check"></span>
                              سواكني
            								</label>
            							</div>
                          </div>
                          <div class="col-sm-2 pull-right">
                            <div class="radio">
              								<label>
              									<input type="radio" name="typeAnimal" value="tays"  ><span class="circle"></span><span class="check"></span>
                                تيس
              								</label>
              							</div>
                          </div>

                        </div>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-8 pull-right">
                      <div class="col-sm-4 pull-right">
                        <div class="form-group is-empty">
                          <label class="control-label"><h4> الجنس  </h4></label>
                          <div class="row ">
                            <div class="col-sm-4 pull-right">
                              <div class="radio">
                								<label>
                									<input type="radio" name="genderAnimal" value="male" ><span class="circle"   ></span><span class="check"></span>
                                  ذكر
                								</label>
                							</div>
                            </div>
                            <div class="col-sm-4 pull-right">
                              <div class="radio">
                								<label>
                									<input type="radio" name="genderAnimal" value="female"  ><span class="circle"></span><span class="check"></span>
                                  أنثى
                								</label>
                							</div>
                            </div>
                          </div>
                        <span class="material-input"></span>
                      </div>
  		                <div class="form-group is-empty">
                        <label class="control-label"><h4> العمر </h4></label>
		        	        	<input type="number" value="" name="ageAnimal"placeholder=""   class="form-control">
  		                	<span class="material-input"></span>
                      </div>
                       <div class="form-group is-empty">
                         <label class="control-label"><h4> الوزن </h4></label>
  		        	        	<input type="number" name="weightAnimal" value="" placeholder=""   class="form-control">
     		                	<span class="material-input"></span>
                       </div>
                        <div class="form-group is-empty">
                          <label class="control-label"><h4> سعر الشراء </h4></label>
  		        	        	<input type="number" name="purchasingPrice" value=""   placeholder="" class="form-control">
    		                	<span class="material-input"></span>
                        </div>
   		               	</div>
                      <div class="col-sm-4 pull-left">
                        <div class="form-group is-empty">
                          <label class="control-label"><h4> سعر البيع </h4></label>
                          <input type="number" name="sellingPrice" value="" placeholder=""   class="form-control">
                          <span class="material-input"></span>
                        </div>
  		                <div class="form-group is-empty">
                          <label class="control-label"><h4> المورد </h4></label>
  		        	        	<input type="text" name="suppliy"   placeholder="" class="form-control" >
  		                	<span class="material-input"></span>
                      </div>
                       <div class="form-group is-empty">
                           <label class="control-label"><h4> تاريخ الشراء </h4></label>
   		        	        	<input name="dateOfPurchase" class="datepicker form-control" type="text"     />

   		                	<span class="material-input"></span>
   		               	</div>
                       <div class="form-group is-empty">
                           <label class="control-label"><h4> الحالة الصحية </h4></label>
                           <div class="togglebutton ">
                            	<label > سليم
                                	<input type="checkbox" name="healthStatus" value="fit" >
                              	</label>
                                <label >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp نشط
                                  	<input type="checkbox" name="active" value="active" >
                                	</label>
                            </div>
    		                	<span class="material-input"></span>
   		               	</div>
                       	</div>
                     </div>
                        <div class="col-sm-2  ">
                          <div class="">
                              <label class="control-label"><h4> الفيديو </h4></label>
                             <input type="file" name="video">
                           <span class="material-input"></span>
                          </div>
                          <div class="">
                              <label class="control-label"><h4> الصور </h4></label>
                             <input type="file" name="images[]" multiple>
                           <span class="material-input"></span>
                          </div>
                         <div class="space-50"></div>
                       <div class="footer btn-add text-center">

                         <button type="submit" class="btn btn-primary  btn-dashbord">
                             أضافة
                         </button>

                       </div>
                       </div>
                  </div>
             </form>
        <!-- /////////////////////////////// -->

 						</div>
					</div>
  	    	</div>
	</div>

  @include('layouts.int.footer.admin_footer')


</div>
 @endsection
