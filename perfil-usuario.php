<?php include "header-usuario.php" ?>

<body class="">
    
    <!--Foto de portada-->
<div class="container-fluid">
    <div class="container bg-cover">
        <img src="img/a46a92f5f7cb6a4646712db525aa42b2.jpg" class="cover-imagen img-fluid" alt="">
    </div>

<!--Información del turista-->
<div class="main container">
    <div class="row">
        <aside class="col-lg-3 col-md-3 border bg-light">
            <div class="">
                <div class="text-center" id="img-usuario"><img src="img/foto-carnet-fondo-celeste.jpg" alt="" class="img-fliud rounded-circle"></div>
                <h4 class="text-center mt-3">Yendry Inestroza</h4>
                <p id="usuario">@YendryInestroza30</p>
                <div class="infor d-none d-sm-block p-2">
                    <p id="estado">Lorem ipsum dolor sit amet consectetur, adipis.</p>
                    <i class="fa fa-envelope mr-3"></i>michy_300@hotmail.com <br>
                    <i class="fa fa-map-marker-alt mr-3"></i>Honduras <br>
                    <i class="fa fa-phone mr-3"></i>(504)9605-4816 <br>
                    <i class="fa fa-birthday-cake mr-3"></i>30 Agosto 1997</p>
                </div>  
            </div> 
        </aside>
        <!--Barra de opciones perfil del usuario-->
        <section class="col-lg-9 col-md-9 p-3">
            <ul class="nav nav-tabs user-tabs">
                <li class="nav-item"><a class="nav-link active text-dark" href="#reservaciones" data-toggle="tab">Reservaciones</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#notificacion" data-toggle="tab">Notificaciones</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#informacion" data-toggle="tab">Información</a></li>
            </ul>
        <!--Opcion de Reservaciones-->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="reservaciones" role="tabpanel" >
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mt-3">
                            <div class="card mb-4 mb-xl-0" id="bg-card-hotel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="h5 card-title text-uppercase mb-0 text-dark text-decoration-none" >Hotel La Estrella </a> 
                                            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h5>
                                            <p class="text-muted mt-1">
                                            <span class="text-nowrap"><i class="fa fa-calendar-alt mr-2"></i>23 de febrero de 2020</span><br>
                                            <span class="text-nowrap"><i class="fa fa-map-marker-alt text-danger mr-2"></i>Somoto, Madriz</span></p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white rounded-circle shadow"><i class="fas fa-bed"></i></div>
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-0 text-sm">
                                    <span class="mr-2">Habitaciones: 2</span><br>
                                    <span class="text-nowrap"><i class="fa fa-male mr-2"></i>3 Adultos </span>
                                    <span class="ml-3 text-nowrap"><i class="fa fa-child mr-2"></i>3 Niños </span></p>
                                </div>
                            </div>
                        </div>
                <!--Segunda card de reservaciones-->
                        <div class="col-lg-6 col-md-6 mt-3">
                            <div class="card mb-4 mb-xl-0" id="bg-card-tour">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="h5 card-title text-uppercase mb-0 text-dark text-decoration-none" >Canyon Tours </a> </h5>
                                            <p class="text-muted mt-1">
                                            <span class="text-nowrap"><i class="fa fa-calendar-alt mr-2"></i>30 de abril de 2020</span><br>
                                            <span class="text-nowrap"><i class="fa fa-map-marker-alt text-danger mr-2"></i>Somoto, Madriz</span></p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-success text-white rounded-circle shadow"><i class="fas fa-hiking"></i></div>
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-0 text-sm">
                                    <span class="mr-2">Tours: 3 horas</span><br>
                                    <span class="text-nowrap"><i class="fa fa-male mr-2"></i>3 Adultos </span>
                                    <span class="ml-3 text-nowrap"><i class="fa fa-child mr-2"></i>3 Niños </span></p>
                                </div>
                            </div>
                        </div>
                <!--Quinta card de reservaciones-->
                        <div class="col-lg-6 col-md-6 mt-3">
                            <div class="card mb-4 mb-xl-0" id="bg-card-hotel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="h5 card-title text-uppercase mb-0 text-dark text-decoration-none" >Hotel La Estrella </a> 
                                            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h5>
                                            <p class="text-muted mt-1">
                                            <span class="text-nowrap"><i class="fa fa-calendar-alt mr-2"></i>23 de febrero de 2020</span><br>
                                            <span class="text-nowrap"><i class="fa fa-map-marker-alt text-danger mr-2"></i>Somoto, Madriz</span></p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white rounded-circle shadow"><i class="fas fa-bed"></i></div>
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-0 text-sm">
                                    <span class="mr-2">Habitaciones: 2</span><br>
                                    <span class="text-nowrap"><i class="fa fa-male mr-2"></i>3 Adultos </span>
                                    <span class="ml-3 text-nowrap"><i class="fa fa-child mr-2"></i>3 Niños </span></p>
                                </div>
                            </div>
                        </div>
                <!--cuarta card de reservaciones-->
                        <div class="col-lg-6 col-md-6 mt-3">
                            <div class="card mb-4 mb-xl-0" id="bg-card-tour">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="h5 card-title text-uppercase mb-0 text-dark text-decoration-none" >Canyon Tours </a> </h5>
                                            <p class="text-muted mt-1">
                                            <span class="text-nowrap"><i class="fa fa-calendar-alt mr-2"></i>30 de abril de 2020</span><br>
                                            <span class="text-nowrap"><i class="fa fa-map-marker-alt text-danger mr-2"></i>Somoto, Madriz</span></p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-success text-white rounded-circle shadow"><i class="fas fa-hiking"></i></div>
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-0 text-sm">
                                    <span class="mr-2">Tours: 3 horas</span><br>
                                    <span class="text-nowrap"><i class="fa fa-male mr-2"></i>3 Adultos </span>
                                    <span class="ml-3 text-nowrap"><i class="fa fa-child mr-2"></i>3 Niños </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!--Opción de notificaciones-->
                <div class="tab-pane fade" id="notificacion" role="tabpanel" >
                    <div class="table-responsive p-3">   
                        <h4>Registro</h4>                     
                        <table class="table table-hover table-responsive" id="tablanotif">
                            <tbody>
                                <tr>
                                <td><div class="animated-checkbox">
                                    <label><input type="checkbox"><span class="label-text"> </span></label>
                                </div></td>
                                <td><i class="fa fa-star"></i></td>
                                <td><a href="#" class="text-decoration-none text-info">Mario Ponce</a></td>
                                <td><p class="text sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></td>
                                <td><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                <td>11:20 p.m</td>
                                </tr>
                                <tr>
                                <td><div class="checkbox">
                                    <label><input type="checkbox"><span class="label-text"> </span></label>
                                </div></td>
                                <td><i class="fa fa-star"></i></td>
                                <td><a href="#" class="text-decoration-none text-info">Carlos Marin</a></td>
                                <td><p class="text sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></td>
                                <td><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                <td>14 nov.</td>
                                </tr>
                                <tr>
                                <td><div class="animated-checkbox">
                                    <label><input type="checkbox"><span class="label-text"> </span></label>
                                </div></td>
                                <td><i class="fa fa-star"></i></td>
                                <td><a href="#" class="text-decoration-none text-info">Mario Ponce</a></td>
                                <td><p class="text sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></td>
                                <td><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                <td>11:20 p.m</td>
                                </tr>
                                <tr>
                                <td><div class="checkbox">
                                    <label><input type="checkbox"><span class="label-text"> </span></label>
                                </div></td>
                                <td><i class="fa fa-star"></i></td>
                                <td><a href="#" class="text-decoration-none text-info">Carlos Marin</a></td>
                                <td><p class="text sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></td>
                                <td><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                <td>14 nov.</td>
                                </tr>
                                <tr>
                                <td><div class="animated-checkbox">
                                    <label><input type="checkbox"><span class="label-text"> </span></label>
                                </div></td>
                                <td><i class="fa fa-star"></i></td>
                                <td><a href="#" class="text-decoration-none text-info">Mario Ponce</a></td>
                                <td><p class="text sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></td>
                                <td><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                <td>11:20 p.m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        <!--Opción de notificaciones-->
                <div class="tab-pane fade" id="informacion" role="tabpanel" >
                    <div class="mt-3">
                        <h4 class="ml-3">Editar Perfil <hr></h4>
                        <form action="" class="form-row p-3">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Nombre </label>
                                <input type="text" name="" id="" class="form-control" placeholder="Yendry Michelly" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Apellido </label>
                                <input type="text" name="" id="" class="form-control" placeholder="Inestroza Mendez" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Usuario </label>
                                <input type="text" name="" id="" class="form-control" placeholder="YendryInestroza30" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Fecha de Nacimiento </label>
                                <input type="date" name="" id="" class="form-control"  required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Correo</label>
                                <input type="email" name="" id="" class="form-control" placeholder="michy_300@hotmail.com" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="ml-2" for="">Contraseña</label>
                                <input type="password" name="" id="" class="form-control" placeholder="°°°°°°°°°°°°°" required>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn" id="btn-naranja">Modificar</a>
                            </div>
                        </form>
                    </div>
                </div>
                    

                  
                    
                </div>
            </section>
        </div>
        
    </div>
    
</div>
</body>




<?php include "footer.php"?>
<script type="text/javascript">$('#tablanotif').DataTable();</script>