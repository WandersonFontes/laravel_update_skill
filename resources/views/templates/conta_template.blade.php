<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body><!-- Estrutura de Navegação -->
    <!-- Dropdown Structure -->
    <nav>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#">one</a></li>
            <li><a href="#">two</a></li>
            <li class="divider"></li>
            <li><a href="#">three</a></li>
        </ul>
        <div class="nav-wrapper blue darken-1">
            <!--<a href="#!" class="brand-logo">Total </a>-->
            <a href="#" class="brand-logo center"> Total Controle</a>
        </div>
    </nav>
    @yield('content')<!-- cadastrar contas => CONTA_INDEX -->
    @yield('show')<!-- mostar contas => CONTA_SHOW -->
</body>
</html>