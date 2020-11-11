<?php include "header-p-admin.php"?>

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-users"></i> Interpretes </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas expedita natus consequatur dolore</p>
        </div>
        <a href="ingr-interprete.php" class="btn btn-primary">Ingresar Nuevo</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover  table-bordered" id="tablainterp">
                  <thead class="thead-dark">
                    <tr>
                      <th>No.</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>No. Teléfono</th>
                      <th>Correo</th>
                      <th>Idiomas</th>
                      <th>Info.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Yendry Michelly</td>
                      <td>Inestroza Mendez</td>
                      <td>(504)9605-4816)</td>
                      <td>michy_yinestroza30@hotmail.com</td>
                      <td>Español</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Yendry Michelly</td>
                      <td>Inestroza Mendez</td>
                      <td>(504)9605-4816)</td>
                      <td>michy_yinestroza30@hotmail.com</td>
                      <td>Español</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Yendry Michelly</td>
                      <td>Inestroza Mendez</td>
                      <td>(504)9605-4816)</td>
                      <td>michy_yinestroza30@hotmail.com</td>
                      <td>Español</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Yendry Michelly</td>
                      <td>Inestroza Mendez</td>
                      <td>(504)9605-4816)</td>
                      <td>michy_yinestroza30@hotmail.com</td>
                      <td>Español</td>
                      <td class="text-center"><button class="btn btn-primary btn-circle">V</button></td>
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

<script type="text/javascript">$('#tablainterp').DataTable();</script>