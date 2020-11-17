<?php include "header.php"?>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">  
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/3.jpg" height="500px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/1.jpg" height="500px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>swimming pool</h5>
                        <p>Acceso gratuito a pisicna para adultos.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/2.jpg" height="500px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
       
    </div><!-- fin row-->

    <h3 class="linea mt-5"  id="color-n"><span>Servicios agregados del hotel</span></h3>
        <div class="row">
             <div class="col-md-4 col-xs-12">
                <div class="funciones text-center">
                    <i id="icon-funciones" class="fa fa-wifi"></i>
                    <p class="mt-3">Wifi Gratis.</p>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="funciones text-center">
                    <i id="icon-funciones" class="fa fa-swimming-pool"></i>
                    <p class="mt-3">Acceso gratis a piscina.</p>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="funciones text-center">
                    <i id="icon-funciones" class="fa fa-utensils"></i>
                    <p class="mt-3">Restaurante</p>
                </div>
            </div>
        </div>  <!--fin row-->  
        <h3 class="linea mt-5"  id="color-n"><span>Selecciona una habitación</span></h3>
     
</div> <!-- fin container-->

    <div class="container-fluid">
          <!--segunda fila-->
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">cama individual</h5>
                                <p class="card-text">Máx.Huespedes: 2 adultos,1 niño.</br>Desayuno incluido <br>WIFI gratis</p>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#reservacion">Reservar</button>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">cama matrimonial</h5>
                                <p class="card-text">Máx.Huespedes: 2 adultos,1 niño.</br>Desayuno incluido <br>WIFI gratis</p>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#reservacion">Reservar</button>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cama doble grande </h5>
                                <p class="card-text">Máx.Huespedes: 2 adultos,1 niño.</br>Desayuno incluido <br>WIFI gratis</p>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#reservacion">Reservar</button>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cama individual</h5>
                                <p class="card-text">Máx.Huespedes: 2 adultos,1 niño.</br>Desayuno incluido <br>WIFI gratis</p>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#reservacion">Reservar</button>
                            </div>
                    </div>
                </div>
                
            </div>
    </div> <!--fin segundo container-->
      


<?php include "footer.php"?>

<!-- Modal -->
<div class="modal fade" id="reservacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="" placeholder="María Alejandra" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="" placeholder="Carranza Mendez" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Identificación:</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">teléfono:</label>
                            <input type="text" class="form-control" id="" placeholder="(504)3696-5698">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Correo:</label>
                            <input type="text" class="form-control" id="" placeholder="mariacarranza@gmail.com" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Fecha Entrada:</label>
                            <input type="date" class="form-control" id="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Fecha Salida:</label>
                            <input type="date" class="form-control" id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Habitaciones:</label>
                            <select class="form-control" id="">
                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                                <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Adultos:</label>
                            <select class="form-control" id="">
                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                                <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Niños:</label>
                            <select class="form-control" id="">
                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                                <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                            </select>
                        </div>
                    </div>
                            
                        

                   
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info">Reservar</button>
      </div>
    </div>
  </div>
</div>