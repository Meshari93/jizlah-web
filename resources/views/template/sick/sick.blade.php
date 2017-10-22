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
                     <a class="btn btn-info pull-right btn-dashbord"> المشتريات <div class="ripple-container"></div></a>
                     <a href="{{ route('animal') }}" class="btn btn-warning  pull-right btn-dashbord"> المواشي<div class="ripple-container"></div></a> -->
                  <a   class="btn btn-info btn-dashbord">
                     طباعة
                     <div class="ripple-container"></div>
                  </a>
                  <a href="{{ route('health.animal') }}" class="btn btn-primary  btn-dashbord">
                     رجوع
                     <div class="ripple-container"></div>
                  </a>
                  <a href="{{ route('add.animal') }}" class="btn btn-success  btn-dashbord">
                     أضافة حيوان
                     <div class="ripple-container"></div>
                  </a>
                   <button class="btn btn-info btn-dashbord" data-toggle="modal" data-target="#sickModal">أضافة مرض</button>
                   <button class="btn btn-primary btn-dashbord" data-toggle="modal" data-target="#sickAnimalModal">أضافة مريض</button>
               </div>
            </div>
            <!-- //////////////////////////////////////////////// -->
             <div class="container">
                <div class="col-sm-12 pull-right">
                  <div class="row">
                     <div class="col-sm-4 pull-right rtl">
                        <h4 class="text-info">  الحالة الصحية </h4>
                     </div>
                  </div>
                </div>
               <form class="" action="index.html" method="post">
               </form>
               <div class="col-sm-3 pull-right rtl">
                  <div class="input-group">
                     <span class="input-group-addon">
                     <i class="material-icons">search</i>
                     </span>
                     <div class="form-group is-empty"><input type="text" class="form-control" placeholder="بحث"><span class="material-input"></span></div>
                  </div>
               </div>
            </div>
                              <div class="space-50"> </div>

            <!-- /////////////////////////////// -->
            <div class="container">
              <table class="table rtl">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">أسم الامرض</th>
                        <th class="text-center">الوصف</th>
                        <th class="text-center">التوصيات</th>
                         <th class="text-center"> أنتقال المرض</th>
                        <th class="text-center">درجة الخطورة  </th>

                        <th class="text-center"> خيارات </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($sickAnimal as $sick)
                    <tr>
                        <td class="text-center">{{$i++}}</td>
                        <td class="text-center">{{  $sick->name }}</td>
                        <td class="text-center">{{  $sick->description }}</td>
                        <td class="text-center">{{ $sick->recommendation }}</td>
                        <td class="text-center">
                          @if( $sick->transmission == "non Infectious")
                          <p class="text-success"> غير معدي </p>
                          @else
                           <p class="text-danger">  معدي </p>
                           @endif
                         </td>
                        <td class="text-center">
                          {{  $sick->riskiness }}</td>
                        <td class="text-center td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs" >
                                <i class="fa fa-edit"></i>
                                <a href="/deleteSick/{{$sick->id}}"</a>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
              </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal Sick Animal -->
@include('layouts.int.footer.admin_footer')
</div>
@include('template.sick.addAnimalSick')
@include('template.sick.addSick')
@endsection
