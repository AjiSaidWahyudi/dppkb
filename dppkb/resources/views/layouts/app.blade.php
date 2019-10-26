<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin DPPKB</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    @yield('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="/" class="logo">
                <span class="logo-mini">DPPKB</span>
                <span class="logo-lg">DPPKB</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                    <p>
                                        {{Auth::user()->name}}
                                        <small>{{Auth::user()->level}}</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{Auth::user()->name}}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                    <li><a href="{{route('tag.index')}}"><i class="fa fa-home"></i>Tag</a></li>
                    <li><a href="{{route('infografis.index')}}"><i class="fa fa-home"></i> <span>Infografis</span></a></li>
                    <li><a href="{{route('berita.index')}}"><i class="fa fa-home"></i> <span>Berita</span></a></li>
                    <li><a href="{{route('pengumuman.index')}}"><i class="fa fa-home"></i> <span>Pengumuman</span></a></li>
                    <li><a href="{{route('album.index')}}"><i class="fa fa-home"></i> <span>Galeri</span></a></li>
                    <li><a href="{{route('agenda.index')}}"><i class="fa fa-home"></i> <span>Agenda</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Master Program</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('bidang.index')}}"><i class="fa fa-circle-o"></i>Bidang</a></li>
                            <li><a href="{{route('unit.index')}}"><i class="fa fa-circle-o"></i>Unit</a></li>
                            <li><a href="{{route('program.index')}}"><i class="fa fa-circle-o"></i>Program</a></li>
                            <li><a href="{{route('kegiatan.index')}}"><i class="fa fa-circle-o"></i>Kegiatan</a></li>
                            <li><a href="{{route('subkeg.index')}}"><i class="fa fa-circle-o"></i>Subkegiatan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('kelola_program.index')}}"><i class="fa fa-home"></i> <span>Kelola Program</span></a></li>
                </ul>
            </section>
        </aside>
        @yield('content')
        <footer class="main-footer">
            <strong>Copyright 2019 Dinas Pengendalian Penduduk dan Keluarga Berencana Kota Samarinda. All rights reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    @yield('js')
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>
</body>
</html>
