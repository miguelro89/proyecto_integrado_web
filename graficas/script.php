<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
		<?php 
           include '../conexion.php';

			function graficausuarios($conexion){
				$datos=[];
				$consulta="select id_genero, count(nombre_cancion) as cantidad from canciones group by id_genero";
				$query=mysqli_query($conexion,$consulta);
				if ($query) {
                   
					while ($fila=mysqli_fetch_array($query)) {
						$datos[]=$fila;
                         
					}

				}
				return $datos;
			}
			$valoresusuarios=graficausuarios($connection);

		?>
		 <script type="text/javascript">

		      google.charts.load("current", {packages:["corechart"]});
		      google.charts.setOnLoadCallback(drawChart);
		      function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        	["Género", "Canciones", { role: "style" } ],
		        <?php 
		            foreach ($valoresusuarios as $usuario) {
		        ?>
		        	["<?php echo $usuario['id_genero']; ?>",<?php echo $usuario['cantidad'] ?>,"#0000cf"],
		        <?php 
           		 }
          		?>
		
		        ]);

		        var view = new google.visualization.DataView(data);
		        view.setColumns([0, 1,
		                         { calc: "stringify",
		                           sourceColumn: 1,
		                           type: "string",
		                           role: "annotation" },
		                         2]);

		        var options = {
		          title: "Canciones por Género",
		          width: 600,
		          height: 400,
		          bar: {groupWidth: "95%"},
		          legend: { position: "none" },
		        };
		        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
		        chart.draw(view, options);
		    }
    	</script>
		

			<h1>Gráfica de Canciones por Género</h1>
			<div id="grafica" style="width:98%;padding:0px;margin:10px auto;height: 400px;">
			    
			    	<div class="graficas " id="barchart_values">
			    	    
			    	</div>
			   
</div>