<?php include "header-p-admin.php"?>

<main class="app-content">
    <div class="tile">
        <h2 class="tile-tittle text-center">Ingresar Nuevo Hotel</h2>
            <div class="tile-body">
                <p class="style-p mt-3">Datos Sobre el Propietario</p><hr>
                <form action="" class="row">
                    <div class="form-group col-md-4">
                        <label class="control-label">Nombres: </label>
                        <input class="form-control" type="text" id="" placeholder="Ingresa el Nombre">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Apellido: </label>
                        <input class="form-control" type="text" id="" placeholder="Ingresa el Apellido">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Fecha de Nacimiento: </label>
                        <input class="form-control" type="date" id="" >
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Teléfono: </label>
                        <input class="form-control" type="text" id="" placeholder="Número de Teléfono">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Correo: </label>
                        <input class="form-control" type="email" id="" placeholder="Ingresa correo electronico">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Contraseña: </label>
                        <input class="form-control" type="password" id="" placeholder="Ingresa el nombre">
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <p class="style-p">Datos Sobre el Hotel</p><hr>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Nombre del Hotel: </label>
                        <input class="form-control" type="text" id="" placeholder="Ingresa el nonbre del Negocio">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Categoría</label>
                        <select class="form-control" id="">
                            <option>Hotel</option>
                            <option>Apartamento</option>
                            <option>Cabaña</option>
                            <option>Hostal</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Localización: </label>
                        <input class="form-control" type="text" id="" placeholder="Ubicación del Negocio">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Dirección: </label>
                        <input class="form-control" type="text" id="" placeholder="Dirección del Negocio">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Teléfono: </label>
                        <input class="form-control" type="text" id="" placeholder="Número de Teléfono">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Correo: </label>
                        <input class="form-control" type="email" id="" placeholder="Ingresa correo electronico">
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <p class="style-p">Otros Datos</p><hr>
                    </div>
                    <fieldset class="form-group col-md-4">
                        <legend>Tipo de Habitaciones</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Personales
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="">Familiares
                            </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Premiun
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Dobles
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Matrimoniales
                                </label>
                            </div>
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <legend>Servicios que ofrece</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Wi-Fi
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="">Piscinas
                            </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Desayuno
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >TV por Cable
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Ducha
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Servicio a la habitación
                                </label>
                            </div>
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <legend></legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Vista al mar
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="">Pago con tarjetas
                            </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Gimnasio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Garaje
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                <input class="form-check-input" id="" type="radio" name="" value="" >Aire Acondicionado
                                </label>
                            </div>
                    </fieldset>
                </form>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary">Guardar Información</button>
                    </div>
            </div>
    </div>
</div>
</main>
















