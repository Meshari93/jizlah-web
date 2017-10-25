@extends('layouts.app') @section('content') @include('layouts.int.header.admin_header')
<div class="wrapper">
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                @if ($errors->any()) @foreach ($errors->all() as $error) {{ Toastr::info($error, 'Error Alert:', ["positionClass" => "toast-bottom-left"]) }} @endforeach @endif
                <div class="row">
                    <div class="col-md-10 ">

                        <a class="btn btn-info btn-dashbord">
                     طباعة
                     <div class="ripple-container"></div>
                  </a>
                        <a href="{{ route('animal') }}" class="btn btn-primary  btn-dashbord">
                     رجوع
                     <div class="ripple-container"></div>
                  </a>
                        <a href="{{ route('add.animal') }}" class="btn btn-success  btn-dashbord">
                     أضافة حيوان
                     <div class="ripple-container"></div>
                  </a>
                        <a href="{{ route('sick.animal') }}" class="btn btn-warning  btn-dashbord">
                     الأمراض
                     <div class="ripple-container"></div>
                  </a>
                        <button class="btn btn-info btn-dashbord" data-toggle="modal" data-target="#sickModal">أضافة مرض</button>
                        <button class="btn btn-primary btn-dashbord" data-toggle="modal" data-target="#sickAnimalModal">أضافة مريض</button>
                    </div>
                    <div class="col-md-2 pull-right rtl  btn-warning  btn-dashbord " style="width: 115px;">
                        <span>الحالة الصحية </span>
                    </div>
                </div>
                <!-- //////////////////////////////////////////////// -->
                <div class="space-30"></div>
                <div class="container">
                  <div class="row">
                    <form class="" action="" method="post">
                        <div class="col-sm-3 pull-right rtl">
                            <div class="input-group">
                                <span class="input-group-addon">
                     <i class="material-icons">search</i>
                     </span>
                                <div class="form-group is-empty">
                                    <input type="search" class="form-control" placeholder="رقم الحيوان "><span class="material-input"></span>
                                </div>
                            </div>
                            <!-- /////////////////////////////// -->
                        </div>
                    </form>
                    </div>
                    <form class="form-horizontal" method="get" action="{{ route('health.animal') }}" enctype="multipart/form-data">

                        <div class="row ">
                        <div class="col-sm-2  pull-right ">
                            <h6 class="ptm rtl"> عناية خاصة </h6>
                            <div class="col-sm-12">
                              <div class="radio pull-right ">
                                  <label>
                                      <input type="radio" value="yes" name="specialCare"><span class="checkbox-material"></span> نعم
                                  </label>
                              </div>
                            </div>
                            <div class="col-sm-12" style="margin-left: -5px;">
                              <div class="radio  pull-right">
                                <label>
                                  <input type="radio" value="no" name="specialCare"><span class="checkbox-material"></span> لا
                                </label>
                              </div>
                            </div>
                        </div>

                        <div class="col-sm-2 pull-right">
                            <h6 class="ptm rtl">عزل الحيوان </h6>
                            <div class="col-sm-12">
                              <div class="radio  pull-right">
                                <label>
                                  <input type="radio" value="yes" name="isolation"><span class="checkbox-material"></span> نعم
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-12" style="margin-left: -5px;">
                              <div class="radio  pull-right">
                                <label>
                                  <input type="radio" value="no" name="isolation"><span class="checkbox-material"></span> لا
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-2  pull-right">
                            <h6 class="ptm rtl"> انتقال المرض </h6>
                            <div class="col-sm-12">
                              <div class="radio  pull-right">
                                <label>
                                  <input type="radio" value="contagious" name="transmission"><span class="checkbox-material"></span> معدي
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-12" style="margin-left: 22px;">
                              <div class="radio  pull-right">
                                <label>
                                  <input type="radio" value="non Infectious" name="transmission"><span class="checkbox-material"></span> غير معدي
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4  pull-right text-center">
                            <h6 class="ptm rtl text-center"> خطورة المرض </h6>
                            <div class="col-sm-5 pull-right">
                              <div class="col-sm-12">
                                <div class="checkbox pull-right ">
                                  <label>
                                    <input type="checkbox" value="very dangerous" name="riskiness"><span class="checkbox-material"></span>خطر جداَ
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-12" style="margin-left: -15px;">
                                  <div class="checkbox  pull-right">
                                    <label>
                                      <input type="checkbox" value="danger" name="riskiness"><span class="checkbox-material"></span> خطر
                                    </label>
                                  </div>
                              </div>

                            </div>
                            <div class="col-sm-6 pull-right">
                              <div class="col-sm-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="risk" name="riskiness"><span class="checkbox-material"></span> متوسط الخطورة
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-12" style="margin-left: -5px;">
                                <div class="checkbox  pull-right" >
                                  <label>
                                    <input type="checkbox" value="low risk" name="riskiness"><span class="checkbox-material"></span> ضعيف الخطورة
                                  </label>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="col-sm-1 pull-right ">

                          <div class="footer btn-add text-center pull-right">

                            <button type="submit" class="btn btn-primary  btn-dashbord">
                              أضافة
                            </button>
                            <a href "{{ route('health.animal') }}" class="btn btn-danger btn-dashbord">  ألغاء </a>

                          </div>
                        </div>
                     </div>
                    </form>

                </div>
                </div>
                <div class="space-50"></div>

                <div class="container">
                    <table class="table rtl">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">رقم الحيوان</th>
                                <th class="text-center"> اسم المرض</th>
                                <th class="text-center">الوصف</th>
                                <th class="text-center">التوصيات</th>
                                <th class="text-center">عزل الحيوان </th>
                                <th class="text-center"> عناية خاصة </th>
                                <th class="text-center"> أنتقال المرض</th>
                                <th class="text-center">درجة الخطورة </th>
                                <th class="text-center"> تاريخ الاصابة </th>

                                <th class="text-center"> خيارات </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animal_sick as $animal_sickid)
                            <tr>
                                <td class="text-center ptm">{{$animal_sickid->id}}</td>
                                <td class="text-center ptm">{{$animal_sickid->animal_id }}</td>
                                <td class="text-center ptm">
                                    @foreach ($sickName as $sick) @if($animal_sickid->sick_id == $sick->id ) {{ $sick->name}} @endif @endforeach
                                </td>
                                <td class="text-center ptm">
                                    @foreach ($sickName as $sick) @if($animal_sickid->sick_id == $sick->id ) {{ $sick->description }} @endif @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach ($sickName as $sick) @if($animal_sickid->sick_id == $sick->id )
                                    <p class="text-info ptm">{{$sick->recommendation}}</p>
                                    @endif @endforeach
                                    <p class="text-danger ptm">{{$animal_sickid->recommendation}}</p>
                                </td>
                                <td class="text-center">
                                    @if($animal_sickid->isolation == 'no')
                                    <p class="text-success ptm"> لا </p>
                                    @elseif($animal_sickid->isolation == 'yes')
                                    <p class="text-danger ptm"> نعم </p>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($animal_sickid->specialCare == 'no')
                                    <p class="text-success ptm"> لا </p>
                                    @elseif($animal_sickid->specialCare == 'yes')
                                    <p class="text-danger ptm"> نعم </p>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @foreach ($sickName as $sick) @if($animal_sickid->sick_id == $sick->id ) @if($sick->transmission == 'non Infectious')
                                    <p class="text-success ptm">غير معدي</p>
                                    @elseif($sick->transmission == 'contagious')
                                    <p class="text-danger ptm"> معدي </p>
                                    @endif @endif @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach ($sickName as $sick) @if($animal_sickid->sick_id == $sick->id ) @if($sick->riskiness == 'very dangerous')
                                    <p class="text-danger ptm"> خطر جداَ</p>
                                    @elseif($sick->riskiness == 'danger')
                                    <p class="text-warning ptm"> خطير </p>
                                    @elseif($sick->riskiness == 'risk')
                                    <p class="text-info ptm"> متوسط الخطورة </p>
                                    @elseif($sick->riskiness == 'low risk')
                                    <p class="text-primary ptm"> ضعيف الخطورة </p>
                                    @endif @endif @endforeach
                                </td>
                                <td class="text-center">
                                    {{$animal_sickid->created_at}}
                                </td>
                                <td class="text-center td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                        <a href="" </a>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- foreach ($user->sicks as $role)
                     $role->name
                endforeach -->
                </div>
                <div class="container">
                     {{ $animal_sick->links() }}
                </div>
            </div>
        </div>
        @include('layouts.int.footer.admin_footer')
    </div>
    @include('template.sick.addAnimalSick') @include('template.sick.addSick')

    <!-- /// Animal Sick -->

    @endsection
