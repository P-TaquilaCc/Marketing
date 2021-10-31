<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>MT-Technology</title>


     {{-- CARPETAS DENTRO DE ADMIN--}}
     <link rel="stylesheet" href="../../css/menu-lateral.css">
     <link rel="stylesheet" href="../../css/admin-negocio.css">
     <link rel="stylesheet" href="../../css/app.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
    <body>
        <input type="checkbox" id="check">

    <header class ="header">
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            {{--<img src="../img/trabajemosportacna.png" width="170px" style= "margin-top: -40px" height="50px" alt="Trabajemos por tacna"> --}}
        </div>
    </header>

    <!-- Navegación para móvil-->
    <div class="mobile_nav">

        <div class="nav_bar">
            <i class="fas fa-bars nav_btn"></i>
        </div>

        <div class="mobile_nav_items">
            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></i><span>Dashboard</span></i></a>
            <a href="{{ route('admin.listBusiness') }}"><i class="fas fa-store"></i></i><span>Negocio</span></i></a>
            <a href="{{ route('admin.generateReport') }}"><i class="fas fa-chart-bar"></i><span>Reportes</span></i></a>
            <a href="{{ route('admin.listCategory') }}"><i class="fas fa-edit"></i><span>Categorías</span></i></a>
            <a href="{{ route('admin.listOrder') }}"><i class="fas fa-list-alt"></i><span>Pedidos</span></i></a>
            <a href="{{ route('admin.listPlan') }}"><i class="fas fa-chart-pie"></i><span>Planes</span></i></a>

            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></i><span>Cerrar Sesión</span></i></a>
            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
        </div>
    </div>



    <div class="sidebar">
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></i><span>Dashboard</span></i></a>
        <a href="{{ route('admin.listBusiness') }}"><i class="fas fa-store"></i></i><span>Negocio</span></i></a>
        <a href="{{ route('admin.generateReport') }}"><i class="fas fa-chart-bar"></i><span>Reportes</span></i></a>
        <a href="{{ route('admin.listCategory') }}"><i class="fas fa-edit"></i><span>Categorías</span></i></a>
        <a href="{{ route('admin.listOrder') }}"><i class="fas fa-list-alt"></i><span>Pedidos</span></i></a>
        <a href="{{ route('admin.listPlan') }}"><i class="fas fa-chart-pie"></i><span>Planes</span></i></a>

        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></i><span>Cerrar Sesión</span></i></a>
        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>

    </div>

    <div class="content">
        @yield('content')
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.nav_btn').click(function(){
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

    </body>
</html>
