<?php include "header-p-admin.php"?>

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-hiking"></i> Tour Operadoras </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas expedita natus consequatur dolore</p>
        </div>
        <a href="#" class="btn btn-primary">Ingresar Nuevo</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover  table-bordered" id="tablatours">
                  <thead class="thead-dark">
                    <tr>
                      <th>No.</th>
                      <th>Nombre Negocio</th>
                      <th>Ubicación</th>
                      <th>Propietario</th>
                      <th>No. Teléfono</th>
                      <th>Correo</th>
                      <th>Info.</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Caribbean Nic</td>
                      <td>Somot, Madriz</td>
                      <td>Marío Cardenas</td>
                      <td>(505)2785-1569</td>
                      <td>mario24@gmail.com</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      <td class="text-center"><div class="toggle"><label><input type="checkbox"><span class="button-indecator"></span></label></div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Caribbean Nic</td>
                      <td>Somot, Madriz</td>
                      <td>Marío Cardenas</td>
                      <td>(505)2785-1569</td>
                      <td>mario24@gmail.com</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      <td class="text-center"><div class="toggle"><label><input type="checkbox"><span class="button-indecator"></span></label></div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Caribbean Nic</td>
                      <td>Somot, Madriz</td>
                      <td>Marío Cardenas</td>
                      <td>(505)2785-1569</td>
                      <td>mario24@gmail.com</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      <td class="text-center"><div class="toggle"><label><input type="checkbox"><span class="button-indecator"></span></label></div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Caribbean Nic</td>
                      <td>Somot, Madriz</td>
                      <td>Marío Cardenas</td>
                      <td>(505)2785-1569</td>
                      <td>mario24@gmail.com</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      <td class="text-center"><div class="toggle"><label><input type="checkbox"><span class="button-indecator"></span></label></div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>

<script type="text/javascript">$('#tablatours').DataTable();</script>