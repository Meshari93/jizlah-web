  <!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="{{ url('/') }}">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="/img/logo2.png" alt="Jizlah Logo" rel="tooltip"  data-placement="bottom" data-html="true">
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
					<a href="{{ route('dashbord')}} " >
						<i class="material-icons">dashboard</i><span class="menu-label"> لوحة التحكم </span>
					</a>
				</li>

					<!-- <a href="{{ route('dashbord')}} " >
						<i class="material-icons">local_grocery_store</i><span class="menu-label"> المتجر</span>
					</a> -->

          <li>
        		  <a href="{{ route('store')}} " >
   						<i class="material-icons">local_grocery_store</i><span class="menu-label"> المتجر</span>
   					</a>
        	</li>





          <!-- /////////////////////////////////// -->

        <li>
					<a href="{{ route('dashbord')}} " >
						<i class="material-icons">insert_emoticon</i><span class="menu-label"> المستخدمين</span>
					</a>
				</li>
        <li>
					<a   href="{{ route('dashbord')}} "  >
						<i class="material-icons">insert_drive_file</i><span class="menu-label"> التقارير  </span>
					</a>
				</li>
        <li>
					<a   href="{{ route('dashbord')}} "  >
						<i class="material-icons">settings</i> <span class="menu-label"> الإعدادات </span>
					</a>
				</li>
				<!-- <li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li> -->
         @if (Auth::guest())
             <li><a href="{{ route('login') }}">Login</a></li>
             <li><a href="{{ route('register') }}">Register</a></li>
         @else

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
            <b class="caret"></b>
          </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li  > <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
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
<!-- End Navbar -->
