<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title','Halaman Awal') | Laboratorium Pemograman FW</title>

    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
    <style type="text/css">
    body{
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .starter-template{
        padding: 40px 15px;
        text-align: center;
    }
    .form-horizontal{
        padding: 15px 10px;
    }
    footer{
        padding-top: 15px;
        text-align: right;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapse" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Laravel 5</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">siswa <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="{{url('siswa')}}">Data siswa</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('jadwal_pelajaran')}}">Jadwal Pelajaran</a></li>                            
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="{{url('guru')}}">Data guru</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('guru_mengajar')}}">Jadwal Guru Mengajar</a></li>                            
                        </ul>
                    </li>

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="{{ url('pengguna') }}">Pengguna</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('kelas') }}">Ruangan</a></li>
                            <li><a href="{{ url('pelajaran') }}">Pelajaran</a></li>                           
                        </ul>
                    </li>
                    <li><a href="{{url('logout')}}">Logout</a></li>
                     <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WALI MURID<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="{{url('wali')}}">Data WALI MURID</a></li>     
                        </ul>
                    </li>
                </ul>
                </div><!--/.nav collapse-->
            </div>
        </nav>
        <div class="clearfix"></div>
        <div class="container">
            @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div>
            @endif
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
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <footer class="container">
                    created by <a href="#"><span><i class="fa fa-twitter" style"color#1da1f2"></i>Ade C</span></a>
                    <br>
                     Tiada yang sempurna kesempurnaan hanya milik Dosen dan yg Esa
                </footer>
            </nav>
            <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script type="javascript">
            $(function(){
                $('[data-toggle="tooltip"]').tooltip()
            });
            </script>
</body>
</html>