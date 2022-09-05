<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="{{ asset('libs/adm/css/fontawesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/adm/css/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/adm/css/dist/css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/adm/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/adm/css/sweetalert2/sweetalert2.css')}}">
  <link href="{{asset('libs/adm/css/datatables/jquery.dataTables.min.css')}}">
  
    <title>
        @yield('title')
    </title>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link" data-widget="control-sidebar" data-slide="true" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST"
                        style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin.dashboard')}}" class="brand-link">
            <span class="brand-text font-weight-light"><b>CCB </b>Ribeirão Preto</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item  menu-open">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('admin.church.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Casas de Oração
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                        </p>
                    </a>
                </li>
            </ul>
            </nav>
            
            </div>

        </aside> 
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> @yield('content_header')</h1>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="container">
                @yield('content')
             </div>
        </div>    
    </div>
    <script src="{{ asset('libs/adm/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/adm/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/adm/js/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('libs/adm/js/sweetalert2/sweetalert2.all.js')}}"></script>  
    <script src="{{asset('libs/adm/js/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('libs/adm/js/mask/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('assets/adm/js/app.js') }}"></script>
    <script>
       @if(Session::has('message'))
           swal.fire({
                position: "top-center",
                icon: "{{ Session::get('alert-type') }}",
                html: "<small style='font-size:15px'>{{ Session::get('message')}}</small>",
                showConfirmButton: false,
                timer: 2800
            })
            
        @endif
    </script>

  
   
</body>
</html>
