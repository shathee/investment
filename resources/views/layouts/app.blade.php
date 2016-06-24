<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTable Bootstrap -->
    <link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-confirm.css" />

    <style type="text/css">
        .sidebar-nav li.active > a,
        .sidebar-nav li > a:focus {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .header {
            width: 100%;
            background: #e7e7e7;
            color: #fff;
            height: 50px;

        }
    </style>
</head>
<body id="app-layout">

<div class="container">
    <div class="row">
        <div class="col-md-5 text-center">
            <h3>Bangladesh Water Development Board</h3>
            <h4>Directorate of Finance</h4>
        </div>
        <div class="col-md-2 text-center">
            {{ Html::image('img/logo.png') }}
        </div>
        <div class="col-md-5 text-center">
            <h3>বাংলাদেশ পানি উন্নয়ন বোর্ড</h3>
            <h4>অর্থ পরিদপ্তর</h4>
        </div>


    </div>

</div>

    @if (Auth::guest())
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        InfyOm Generator
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    @else
    @include('layouts.menu')
    @endif

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <<!-- script src="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/js/jquery.js"></script>
    <script src="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/js/bootstrap.min.js"></script>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-confirm.js"></script>
    <script>

        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $('a.confirm_delete').confirm({

            animation: 'RotateY',
            closeAnimation: 'scale',
            keyboardEnabled: true,
            confirmButton: 'Yes',
            cancelButton: 'NO',
            confirmButtonClass: 'btn-danger',
            cancelButtonClass: 'btn-info',
            content: 'Are You Sure, You Want to Delete this Info?? '

        });

    </script>

    @yield('scripts')

</body>
</html>