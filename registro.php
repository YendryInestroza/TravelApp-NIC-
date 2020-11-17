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
        <div class="container">
            <div class="main-container p-3 border bg-light ">
                <h1 class="p-">Crea tu cuenta</h1><hr>
                <form action="" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="ml-2" for="">Nombre <span class="c-as">*</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingrese el nombre" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for=""class="ml-2">Apellido <span class="c-as">*</span></label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingrese el apellido" required>
                        </div>
                        <div class="col-md-9"><label for="">Fecha de Nacimiento</label></div>
                        <div class="col-md-3 d-none d-sm-block"><label for="">Sexo</label></div>
                        <div class="form-group col-lg-3 col-sm-3">
                            <select class="form-control" id="">
                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
                                <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                                <option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
                                <option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
                                <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-sm-3">
                            <select class="form-control" id="">
                                <option>Enero</option><option>Febrero</option><option>Marzo</option><option>Abril</option><option>Mayo</option>
                                <option>Junio</option><option>Julio</option><option>Agosto</option><option>Septiembre</option><option>Octubre</option>
                                <option>Noviembre</option><option>Diciembre</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-sm-3">
                            <select class="form-control" id="">
                                <option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option>
                                <option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option>
                                <option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option>
                                <option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option>
                                <option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option>
                                <option>2020</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-sm-3">
                            <select class="form-control" id="">
                                <option>Femenino</option><option>Masculino</option><option>Otro</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="">Correo <span class="c-as">*</span></label>
                            <input type="email" name="" id="" class="form-control" placeholder="Ingrese el Correo" required>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="">Contraseña <span class="c-as">*</span></label>
                            <input type="password" name="" id="" class="form-control" placeholder="Ingrese una contraseña" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" id="btn-login" class="btn btn-dark">Registrar</button>
                    </div>
                </form><hr>
                <p class="text-center mr-3">Si ya tienes uan cuenta<a href="login.php" class="ml-2 text-decoration-none btn btn-info">Ingresa aquí<i class="ml-2  fa fa-arrow-right"></i></a></p>
            </div>

        </div>    



<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>