@extends('layouts.app')

@section('content')
@include('layouts.int.header.admin_header')

<div class="wrapper">
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
          <div class="row">
						<div class="col-md-10 ">
 							<!-- <a class="btn btn-primary  pull-right btn-dashbord"> المبيعات<div class="ripple-container"></div></a>
              <a class="btn btn-info pull-right btn-dashbord"> المشتريات <div class="ripple-container"></div></a>-->
              <a href="{{ route('store') }}" class="btn btn-info  btn-dashbord">
                رجوع
                <div class="ripple-container"></div>
              </a>
              <a href="{{ route('health.animal') }}" class="btn btn-primary btn-dashbord"> الحالة الصحية <div class="ripple-container"></div></a>
               <a   class="btn btn-default btn-dashbord pull-left"> طباعة <div class="ripple-container"></div></a>
              <a href="{{ route('add.animal') }}" class="btn btn-success btn-dashbord"> أضافة حيوان  <div class="ripple-container"></div></a>
                 <a href="{{ route('sick.animal') }}" class="btn btn-warning  btn-dashbord">
                    الأمراض
                    <div class="ripple-container"></div>
                 </a>
                 <button class="btn btn-info btn-dashbord" data-toggle="modal" data-target="#sickModal">أضافة مرض</button>
                 <button class="btn btn-primary btn-dashbord" data-toggle="modal" data-target="#sickAnimalModal">أضافة مريض</button>
 						</div>
          </div>
          <!-- //////////////////////////////////////////////// -->
          <div class="space-30"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-sm-4 pull-right">
                <div class="card card-stats">
                  <div class="content">
                    <div class="row">
                      <div class="col-xs-12 rtl  pull-right">
                        <div class="numbers">
                          <h4>نجدي : &nbsp {{ $najdi }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="rtl">
                      ذكر : {{ $malenajdi}}  &nbsp &nbsp  أنثى : {{$femalenajdi}}
                     </div>
                    <div class="footer">
                      <hr>
                      <div class="stats rtl">
                        <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                        <div class="space-10"></div>
                        <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                        <div class="space-10"></div>
                        <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                        <div class="space-10"></div>
                        <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                        <div class="space-10"></div>
                        <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                        <div class="space-10"></div>
                        <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                      </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-2 col-sm-4 pull-right">
                 <div class="card card-stats">
                   <div class="content">
                     <div class="row">
                       <div class="col-xs-12 rtl  pull-right">
                         <div class="numbers"><h4>نعيمي : &nbsp {{ $naimi }}</h4>
                         </div>
                       </div>
                     </div>
                     <div class="rtl">
                       ذكر : {{ $malenaimi}}  &nbsp &nbsp  أنثى : {{$femalenaimi}}
                      </div>
                     <div class="footer">
                       <hr>
                       <div class="stats rtl">
                         <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-2 col-sm-4 pull-right">
                 <div class="card card-stats">
                   <div class="content">
                     <div class="row">
                       <div class="col-xs-12 rtl  pull-right">
                         <div class="numbers"><h4> حري : &nbsp  {{ $huri  }} </h4>
                         </div>
                       </div>
                     </div>
                     <div class="rtl">
                       ذكر : {{ $malehuri}}  &nbsp &nbsp  أنثى : {{$femalehuri}}
                     </div>
                     <div class="footer">
                       <hr>
                       <div class="stats rtl">
                         <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-2 col-sm-4 pull-right">
                 <div class="card card-stats">
                   <div class="content">
                     <div class="row">
                       <div class="col-xs-12 rtl  pull-right">
                         <div class="numbers">
                           <h4>سواكني :  &nbsp {{ $sawakini  }} </h4>
                          </div>
                       </div>
                     </div>
                     <div class="rtl">
                       ذكر : {{ $malesawakini}}  &nbsp &nbsp  أنثى : {{$femalesawakini}}
                      </div>
                     <div class="footer">
                       <hr>
                      <div class="stats rtl">
                         <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                      </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-2 col-sm-4 pull-right">
                 <div class="card card-stats">
                   <div class="content ">
                     <div class="row">
                       <div class="col-xs-12 rtl  pull-right">
                         <div class="numbers">
                           <h4> بربري &nbsp  {{ $barbry  }}  </h4>
                         </div>
                       </div>
                     </div>
                     <div class="rtl">
                       ذكر : {{ $malebarbry}}  &nbsp &nbsp  أنثى : {{$femalebarbry}}
                    </div>
                     <div class="footer">
                       <hr>
                       <div class="stats rtl">
                          <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                          <div class="space-10"></div>
                          <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                          <div class="space-10"></div>
                          <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                          <div class="space-10"></div>
                          <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                          <div class="space-10"></div>
                          <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                          <div class="space-10"></div>
                          <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-2 col-sm-4 pull-right">
                 <div class="card card-stats">
                   <div class="content ">
                     <div class="row">
                       <div class="col-xs-12 rtl   pull-right">
                         <div class="numbers">
                           <h4> تيوس :   &nbsp  {{ $tess  }} </h4>
                           <!-- react-text: 273 --><!-- /react-text -->
                         </div>
                       </div>
                     </div>
                       <div class="rtl">
                         ذكر : {{ $maleTess}}  &nbsp &nbsp  أنثى : {{$femaleTess}}
                    </div>
                     <div class="footer">
                       <hr>
                       <div class="stats rtl">
                         <span class="font-14 label label-default ">ثني &nbsp &nbsp  455</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-primary">جذع &nbsp &nbsp 3443</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-info  ">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class=" font-14 label label-success">رباع &nbsp &nbsp 43</span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-warning ">رباع &nbsp &nbsp 43 </span>
                         <div class="space-10"></div>
                         <span class="font-14 label label-danger">رباع &nbsp &nbsp 43 </span>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

             </div>
          </div>
 <!-- /////////////////////////////// -->
 						</div>
					</div>

  	    	</div>


	</div>
  @include('layouts.int.footer.admin_footer')
@include('template.sick.addAnimalSick')
@include('template.sick.addSick')
</div>
 @endsection
