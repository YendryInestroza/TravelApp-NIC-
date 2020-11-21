<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelApp Nic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minium-scale=1.0" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
</head>
<body>
    <!--Primera barra de navegacion-->
    <div class="container-fluid" id="c-nav-1">
        <div class="container" >
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Idiomas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-flag mr-2"></i>Español</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-flag mr-2"></i>Inglés</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-flag mr-2"></i>Frances</a>  
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fas fa-bell"></i></a></li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle"  src="img/perfil.jpg">
                    <p class="ml-2 d-none d-lg-inline text-gray">Yendry Inestroza</p></a>
                    <div class="dropdown-menu " aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="perfil-usuario.php"><i class="fas fa-user fa-sm fa-fw mr-2"></i>Perfil</a>
                        <a class="dropdown-item" href="perfil-usuario.php"><i class="fas fa-calendar-check fa-sm fa-fw mr-2 "></i>Reservaciones</a>
                        <a class="dropdown-item" href="perfil-usuario.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 "></i>Ajustes</a>
                        <a class="dropdown-item  text-danger" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    
    
     <!--Barra de navegacion principal-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo1.png" width="120"  alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="hotel.php">HOTELES</a></li>
                        <li class="nav-item"><a class="nav-link" href="tours.php">TOURS</a></li>
                        <li class="nav-item"><a class="nav-link" href="restaurantes.php">RESTAURANTES</a></li>
                        <li class="nav-item"><a class="nav-link" href="interprete.php">INTERPRETES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">CONTACTO</a></li>
                        <li class="nav-item"> 
                        <div class="buscar nav-link">
                            <input type="text" class="buscar-texto" placeholder="   Buscar....">
                            <a class="boton"><i class="fa fa-search"></i></a></li>  
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>










        