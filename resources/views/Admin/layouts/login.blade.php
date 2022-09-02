<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Trabalhe Conosco - unimed Nordeste Paulista') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="{{ asset('libs/adm/css/fontawesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/adm/css/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/adm/css/dist/css/adminlte.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition">

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('libs/adm/js/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('libs/adm/js/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('libs/adm/js/dist/js/adminlte.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.all.js"></script>
    <script>
        @if(Session::has('message'))
           swal.fire({
                position: "top-center",
                icon: "{{ Session::get('alert-type') }}",
                title: "{{ Session::get('message') }}",
                showConfirmButton: false,
                timer: 2300
            })

        @endif

           
    </script>
</body>
</html>
