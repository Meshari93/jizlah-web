  <!doctype html>
  <html lang="{{ app()->getLocale() }}">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Jizlah') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
      <div id="app">
          <!-- Navbar -->
          <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
              <div class="container">
                  <div class="navbar-header">

                      <a href="{{ url('/') }}">
                          <div class="logo-container">
                              <div class="logo">
                                  <img src="/img/logo2.png" alt="Jizlah Logo" rel="tooltip" data-placement="bottom" data-html="true">
                              </div>
                              <div class="brand">
                                  <!-- Creative Tim -->
                              </div>

                          </div>
                      </a>
                  </div>

                  <div class="collapse navbar-collapse" id="navigation-index">
                      <ul class="nav navbar-nav navbar-right">
                          <li>
                              <a href="{{ route('home')}} ">
                                  <i class="material-icons">shopping_cart</i>
                                  <span class="menu-label"> مشترياتي </span>
                              </a>
                          </li>
                          @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                          @else

                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
                    <b class="caret"></b>
                  </a>

                              <ul class="dropdown-menu dropdown-menu-right">
                                  <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                               Logout
                           </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  @endif

                              </ul>
                          </li>

                      </ul>
                  </div>
              </div>
          </nav>

          <div class="wrapper">
              <div class="main main-raised">
                  <div class="section section-basic">
                    <div class="space-50"></div>

                    <div class="container">
                      <!-- <div class="row">
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
                                /////////////////////////////// -->
                            <!-- </div>
                        </form>
                        </div> -->
                        <form class="form-horizontal" method="get" action="{{ route('welcome') }}" enctype="multipart/form-data">

                            <div class="row ">
                            <div class="col-sm-11  pull-right ">
                            <div class="col-sm-12  pull-right ">

                              <div class="col-sm-1 pull-right">
                                <h6 class="ptm rtl" style=" margin-top: 6px;"> الصنف :  </h6>
                              </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -20px;">
                                  <div class="checkbox pull-right ">
                                      <label>
                                          <input type="checkbox" value="najdi" name="typenajdi"><span class="checkbox-material"></span>نجدي
                                      </label>
                                  </div>
                                </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -65px;">
                                  <div class="checkbox pull-right">
                                    <label>
                                      <input type="checkbox" value="naimi" name="typenaimi"><span class="checkbox-material"></span>نعيمي
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -65px;">
                                  <div class="checkbox pull-right">
                                    <label>
                                      <input type="checkbox" value="huri" name="typehuri"><span class="checkbox-material"></span>حري
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -65px;">
                                  <div class="checkbox pull-right">
                                    <label>
                                      <input type="checkbox" value="sawakini" name="typesawakini"><span class="checkbox-material"></span> سواكني
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -65px;">
                                  <div class="checkbox pull-right">
                                    <label>
                                      <input type="checkbox" value="barbry" name="typebarbry"><span class="checkbox-material"></span> بربري
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-2 pull-right" style="margin-right: -65px;">
                                  <div class="checkbox  pull-right">
                                    <label>
                                      <input type="checkbox" value="tays" name="typetays"><span class="checkbox-material"></span> ماعز
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-3 pull-right" style="margin-right: -60px;">
                                  <div class="col-sm-3 pull-right" style=" margin-top: 6px;">
                                    <h6 class="ptm rtl"> النوع </h6>
                                  </div>
                                    <div class="col-sm-5 pull-right" style="margin-right: -20px;">
                                      <div class="checkbox  pull-right">
                                        <label>
                                          <input type="checkbox" value="male" name="gendermale"><span class="checkbox-material"></span> ذكر
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5 pull-right" >
                                      <div class="checkbox  pull-right">
                                        <label>
                                          <input type="checkbox" value="female" name="genderfemale"><span class="checkbox-material"></span> أنثى
                                        </label>
                                      </div>
                                    </div>

                                <div class="space-50"></div>
                              </div>
                            </div>
                            <div class="col-sm-12 pull-right">
                                 <div class="col-sm-1 pull-right" style=" margin-top: 6px;">
                                  <h6 class="ptm rtl"> السعر :  </h6>
                                </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -21px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="200" name="price200"><span class="checkbox-material"></span> أقل من 200 ريال
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 pull-right">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="200" name="200price600"><span class="checkbox-material"></span> من 200 إلى 600 ريال
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 pull-right" style="margin-right: -50px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="600" name="600price900"><span class="checkbox-material"></span>من 600 إلى 900 ريال
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -48PX;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="900" name="price900"><span class="checkbox-material"></span>أكثر من 900
                                      </label>
                                    </div>
                                  </div>

                            </div>
                            <div class="col-sm-12 pull-right">
                                 <div class="col-sm-1 pull-right" style=" margin-top: 6px;">
                                  <h6 class="ptm rtl"> العمر :  </h6>
                                </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -7px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="2" name="age2"><span class="checkbox-material"></span> أقل من شهرين
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 pull-right" style="margin-right: -11px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="6" name="2age6" ><span class="checkbox-material"></span> من شهرين إلى 6 أشهر
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -30px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="9" name="6age9"><span class="checkbox-material"></span> من 6 إلى 9 أشهر
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: 3px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="9" name="9age"><span class="checkbox-material"></span>أكثر من 9 أشهر
                                      </label>
                                    </div>
                                  </div>
                             </div>
                            <div class="col-sm-12 pull-right" >
                                 <div class="col-sm-1 pull-right" style=" margin-top: 6px;">
                                  <h6 class="ptm rtl"> الوزن :  </h6>
                                </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -2px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="10" name="10weight"><span class="checkbox-material"></span>اقل من 10 ك
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 pull-right" style="margin-right: -3px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="20" name="10weight20"><span class="checkbox-material"></span>من 10 ك إلى 20 ك
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 pull-right" style="margin-right: -53px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="30" name="20weight30"><span class="checkbox-material"></span>من 20 ك إلى 30 ك
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-2 pull-right" style="margin-right: -66px;">
                                    <div class="checkbox  pull-right">
                                      <label>
                                        <input type="checkbox" value="30" name="weight30"><span class="checkbox-material"></span>أكثر من 30 ك
                                      </label>
                                    </div>
                                  </div>
                             </div>
                            </div>

                            <div class="col-sm-1 pull-right text-center ">
                              <div class="footer btn-add text-center pull-right">
                                <button type="submit" class="btn btn-primary  btn-dashbord">
                                  تطبيق
                                </button>
                              <a href "{{ route('welcome') }}" style=" width: 78px;" class="btn btn-danger btn-dashbord">  إلغاء </a>

                              </div>
                            </div>
                         </div>
                        </form>

                    </div>

                      <div class="container">
                        <!-- <div class="space-10"></div> -->
                        @foreach($animals as $animal)
                          <div class="col-lg-6  col-sm-6 pull-right">
                            <div class="space-50"></div>
                         <div class="card card-stats">
                           <div class="content ">
                             <div class="row ">
                               <div class="col-xs-12 rtl   pull-right">
                                  <video   muted autoplay width="510" height="300">
                                    <source src="/video/videoAnimal/{{ $animal->Video}}">
                                  </video>
                               </div>
                             </div>
                             <div class="footer">
                               <hr>
                              <div class="col-sm-4 pull-right ">
                                <div class="col-sm-6 pull-right">
                                  <h6> : الصنف</h6>
                                  </div>
                                  <div class="col-sm-6 pull-right" style="margin-top: 10px;margin-right: -35px;">
                                      @if($animal->type == 'najdi')
                                      <p>نجدي</p>
                                      @elseif($animal->type == 'naimi')
                                      <p>  نعيمي</p>
                                      @elseif($animal->type == 'huri')
                                      <p> حري </p>
                                      @elseif($animal->type == 'barbry')
                                      <p> بربري </p>
                                      @elseif($animal->type == 'sawakini')
                                      <p> سواكني </p>
                                      @elseif($animal->type == 'tays')
                                      <p> ماعز </p>
                                      @endif
                                  </div>

                              </div>
                              <div class="col-sm-3 pull-right rtl">
                                <div class="col-sm-6 pull-right">
                                  <h6> النوع </h6>
                                </div>
                                <div class="col-sm-6 pull-right">
                                  @if($animal->gender == 'male')
                                  <p>ذكر</p>
                                  @elseif($animal->gender == 'female')
                                  <p>  أنثى </p>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-4 pull-right rtl ">
                                <div class="col-sm-6 pull-right">
                                  <h6> : العمر </h6>
                                </div>
                                <div class="col-sm-2 pull-right">
                                  <p>  {{ $animal->age}} </p>
                                </div>
                                <div class="col-sm-4 pull-right" >
                                  <p>شهر</p>
                                </div>
                              </div>
                              <div class="col-sm-4 pull-right">
                                <div class="col-sm-6 pull-right" >
                                  <h6>  الوزن </h6>
                                </div>
                                <div class="col-sm-2 pull-right" >
                                  <p>{{ $animal->weight}}</p>
                                </div>
                                <div class="col-sm-4 pull-right">
                                  <p>كيلو</p>
                                </div>
                              </div>
                              <div class="col-sm-4 pull-right">
                                <div class="col-sm-6 pull-right">
                                  <h6> السعر </h6>
                                </div>
                                <div class="col-sm-2 pull-right"</p>
                                </div>
                                <div class="col-sm-4 pull-right">
                                  <p>ريال   </p>
                                </div>
                              </div>
                              @if(Auth::user())
                              <div class="col-sm-3 pull-right">
                                <button type="button" class="btn btn-primary  btn-dashbord" name="button"> شراء </button>
                              </div>
                              @else
                              <div class="col-sm-3 pull-right">
                                <button type="button" class="btn btn-danger  btn-dashbord" name="button"> شراء </button>
                              </div>
                              @endif
                             </div>
                           </div>
                         </div>
                       </div>
                       @endforeach
                      </div>
                  </div>
                  <div class="space-30"></div>
                  <div class="space-50"></div>
                  <div class="space-50"></div>
              </div>

          </div>

          <footer class="footer">
              <div class="container">
                  <nav class="pull-left">
                      <ul>
                          <li>
                              <a href="http://www.creative-tim.com">
         							Creative Tim
         						</a>
                          </li>
                          <li>
                              <a href="http://presentation.creative-tim.com">
         						   About Us
         						</a>
                          </li>
                          <li>
                              <a href="http://blog.creative-tim.com">
         						   Blog
         						</a>
                          </li>
                          <li>
                              <a href="http://www.creative-tim.com/license">
         							Licenses
         						</a>
                          </li>
                      </ul>
                  </nav>
                  <div class="copyright pull-right">
                      &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
                  </div>
              </div>
          </footer>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script type="text/javascript">
          $(".select2-multpl").select2();
          // $('.js-example-basic-single').select2();
          $(".js-example-rtl").select2({
              dir: "rtl"
          });
          $('.js-example-basic-single').select2();

          $(".js-example-basic-multiple-limit").select2({
              maximumSelectionLength: 1
          });
      </script>
  </body>
  </html>
