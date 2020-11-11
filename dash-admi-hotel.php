<?php include "header-admin-hotel.php"?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-chart-line"></i> Estadísticas </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas expedita natus consequatur dolore</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="widget-small f-blue coloured-icon"><i class="icon fa fa-user fa-3x"></i>
            <div class="info">
              <h4>Reservaciones</h4>
              <p><b>150</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small f-blue coloured-icon"><i class="icon fa fa-user fa-3x"></i>
            <div class="info">
              <h4>Ingresos</h4>
              <p><b>$ 3,800</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small f-blue coloured-icon"><i class="icon fa fa-user fa-3x"></i>
            <div class="info">
              <h4>Otros</h4>
              <p><b>22</b></p>
            </div>
          </div>
        </div>
    </div>

        <h2 class="text-center">Reservaciones por Paises</h2>

        <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Reservaciones</h3>
            <div class="table-responsive table-hover">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Pais</th>
                    <th>Estadia</th>
                    <th>Monto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Francia</td>
                    <td>20%</td>
                    <td>$ 1,200</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Italia</td>
                    <td>6%</td>
                    <td>$ 1,000</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Honduras</td>
                    <td>4%</td>
                    <td>$ 600</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>EStados Unidos</td>
                    <td>25%</td>
                    <td>$ 2,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Grafico</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
    </div>
    
</main>



































    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Red"
      	},
      	{
      		value: 50,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Green"
      	},
      	{
      		value: 100,
      		color: "#FDB45C",
      		highlight: "#FFC870",
      		label: "Yellow"
      	}
      ]
      
      
      
      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);
      
      
    </script>
   