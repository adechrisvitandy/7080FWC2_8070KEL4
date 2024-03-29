<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
              @if(Auth::check() != null)
              <h1>{{ Auth::user()->username }}</h1>
              <h3>{{ Auth::user()->level }}</h3>
              @else
               cie blum login
              @endif
               @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div>
            @endif
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    
                  </li>
                        <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">siswa <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-labelledby="dLabel">
                        <li class="divider"></li>
                            <li><a href="{{url('siswa')}}">Data siswa</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('nilai')}}">Data Nilai</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('jadwal_pelajaran')}}">Jadwal Pelajaran</a></li>

                          </ul>
                        <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-labelledby="dLabel">
                            <li><a href="{{url('guru')}}">Data guru</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('guru_mengajar')}}">Jadwal Guru Mengajar</a></li> 
                        </ul>
                            <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-labelledby="dLabel">
                            <li><a href="{{ url('pengguna') }}">Pengguna</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('kelas') }}">Kelas</a></li>
                            <li><a href="{{ url('pelajaran') }}">Pelajaran</a></li>                           
                        </ul>
                    </li>

                    <li><a href="{{url('logout')}}">Logout</a></li>
                     <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wali murid<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-labelledby="dLabel">
                            <li><a href="{{url('wali')}}">Data wali murid</a></li>     
                        </ul>
                    </li>                           
                        </ul>                            
                        
                    </li>
                  
                </ul>
              </div>
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a> -->
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    <span class=" fa fa-angle-down"></span>
                 <!--  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li> -->
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                   -->
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
        <div class="container">
            <!-- @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div> -->
            <!-- @endif -->
            @yield('container')
            @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
            @endif
            </div>
                    </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          SMA 70 SAMARINDA
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('gentelella/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('gentelella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('gentelella/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('gentelella/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('gentelella/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('gentelella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('gentelella/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>
  
  </body>
</html>
