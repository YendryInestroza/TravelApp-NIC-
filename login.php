<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelApp Nic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minium-scale=1.0" type="text/css">

</head>

<body class="bg-login">
<?php include "nav-login.php"?>
    <section class="form">
        <div class="container">
            <div class="row no-gutters" id="bg-cont">
                <div class="col-lg-5 d-none d-sm-block">
                    <img src="img/IMG-20201009-WA0057.jpg" id="img-login" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-3 p-1">
                    <div class="text-center"> <i class="fa fa-user-circle" id="icon-funciones"></i> </div>
                    <h1 class=" text-center">Iniciar Sesión</h1>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-lg-10 my-2 ml-md-5">
                                <label for="">Correo:</label>
                                <div class="inner-addon left-addon">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="" id="" class="form-control d-inp">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-10 my-2 ml-md-5">
                                <label for="">Contraseña:</label>
                                <div class="inner-addon left-addon">
                                    <i class="fa fa-key"></i>
                                    <input type="password" name="" id="" class="form-control d-inp">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                           <div class="col-lg-12">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="check">Recuerdame</label>
                                </div>
                           </div>
                        </div><br>
                         <div class="text-center">
                            <a href="#" class="mt-3 text-decoration-none ">Olvidastes la contraseña</a>
                         </div>   
                        <div class="form-row text-center">
                            <div class="col-lg-12 mt-2 mb-2">
                                <button type="button" id="btn-login" class="btn btn-dark">Iniciar Sesión</button>
                            </div>
                        </div>
                        <hr>
                        <p class="text-center">Aun no tienes una cuenta? <a href="registro.php" class="text-decoration-none btn btn-info">Registrate aquí <i class="fa fa-arrow-right"></i></a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    



<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

            
                  