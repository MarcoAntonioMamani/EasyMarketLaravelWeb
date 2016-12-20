<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>easyMarket | BIM</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
        <link rel="{{asset('apple-touch-icon" href="img/apple-touch-icon.png')}}">
        <link rel="{{asset('shortcut icon" href="img/favicon.ico')}}">

    </head>
    <body class="hold-transiction skin-black sidebar-mini" >
    <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>EM</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>EasyMarket</b></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-inverse" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Navegación</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>

                        </ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>

                </nav>

            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"></li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Almacén</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ url('almacen/categoria') }}">Categorías<i class="fa fa-tags pull-right"></i></a></li>
                                <li><a href="{{ url('almacen/producto') }}">Productos<i class="fa fa-beer pull-right"></i> </a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cart-arrow-down"></i>
                                <span>Ventas</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('pedidos')}}">Pedidos<i class="fa fa-cart-arrow-down pull-right"></i></a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-motorcycle"></i>
                                <span>Personal</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Enviadores<i class="fa fa-motorcycle pull-right"></i></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{url('cliente')}}">
                                <i class="fa fa-users"></i> <span>Clientes</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map"></i>
                                <span>Mapas</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ url('mapa/mapaCalor') }}">Mapa de calor<i class="fa fa-map-o pull-right"></i></a></li>
                                <li><a href="{{ url('mapa/mapaMarker') }}">Mapa de pedidos<i class="fa fa-map-marker pull-right"></i> </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Acceso</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Usuarios<i class="fa fa-user-secret pull-right"></i></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="fa fa-info-circle"></i> <span>Acerca De Nosotros</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!--Contenido-->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" >

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Grupo EmprendeCruz</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--Contenido-->
                                            @yield('contenido')
                                            <!--Fin Contenido-->
                                        </div>
                                    </div>

                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.3.0
    </div>
    <strong>Copyright &copy; 2016 <a href="#">EmprendeCruz</a>.</strong> Todos los derechos reservados.
</footer>


<!-- jQuery 2.1.4 -->
<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    @section('scripts')
    @show
</body>
</html>
