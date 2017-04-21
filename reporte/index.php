<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reportes Encuesta Institucional</title>
	<link href="../framework/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="../ico/favicon.png" />

	<!-- jQuery -->
	<script src="framework/js/jquery-2.2.3.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="framework/js/bootstrap.min.js"></script>


	<!-- ChartsJS -->
	<script src="js/chart.js"></script>

	<!-- Funciones -->
	<script src="js/functions.js"></script>

</head>
<body style="background-color:#e5e1de">
	
	<section>
		<div class="container">
			<h2>Reporte Encuesta Institucional</h2>

			<div class="row">

				<div class="col-lg-12" >
				<form id="form_1" name="1" class="form-horizontal" role="form">
					<div class="form-group" style="margin-top: 50px;">
			            <label for="country" class="col-sm-3 control-label">Lugar de trabajo</label>
			            	<div class="col-sm-9">
			            		<select name="cb_zona" id="cb_zona" class="form-control">
			            			<option value="0" selected="">Seleccione...</option>
			            		</select>
			        		</div>
			   	    </div>
			   	    <div class="form-group">
                        <label for="country" class="col-sm-3 control-label">Area Programática</label>
                            <div class="col-sm-9">
                                <select id="cb_areaprog" name="cb_areaprog" class="form-control">
                                </select>
                            </div>
                    </div> <!-- /.form-group -->
                    <div class="col-lg-12 text-center">
			    		<button onclick="generar();" id="btn_generar" class="btn btn-danger">Generar Reporte</button>
			    	</div>
                </form>
			    </div>
			    
	        </div>


		</div>
	</section>


<section>
	<div class="container" style="margin-top:100px">
		<div class="row">
			<div class="col-lg-12" style="" >
				<div id="canvas-holder" class="text-center">

					<div class="col-lg-12 text-center" style="border: solid 5px #ccc;box-shadow: 12px 12px 5px #999; ">
						<h1>Femenino / Masculino</h1>
						<div class="col-lg-3"></div>
						<div class="col-lg-3">
						<canvas id="canvas" width="300" height="300"></canvas>
						</div>
						<div id="datos_sexo" class="col-lg-3">
						<p>Información<p>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" style="margin-top:100px">
		<div class="row">
			<div class="col-lg-12" style="" >
				<div  class="text-center">

					<div class="col-lg-12 text-center" style="border: solid 5px #ccc;box-shadow: 12px 12px 5px #999; ">
						<h1>Formación( última finalizada )</h1>
						
						<div id="canvas-holder2" class="col-lg-8">
							<canvas id="canvas2" width="600" height="300"></canvas>
						</div>
						<div id="datos_formacion" class="col-lg-4">
						<p>Información<p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" style="margin-top:100px">
		<div class="row">
			<div class="col-lg-12" style="" >
				<div  class="text-center">

					<div class="col-lg-12 text-center" style="border: solid 5px #ccc;box-shadow: 12px 12px 5px #999; ">
						<h1>Situación Laboral</h1>
						
						<div id="canvas-holder3" class="col-lg-8">
							<canvas id="canvas3" width="600" height="300"></canvas>
						</div>
						<div id="datos_situacion" class="col-lg-4">
						<p>Información<p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>


		$("#form_1").submit(function()
        {
        	return false;
		});

		function generar()
        {
        	//Grafico por sexo F - M
	         var x = datos_grafico(document.getElementById("canvas"),'core.php?query=1');

	         var data = new Array();
	         var info="";
	         for(i=0; i<x.datos.length; i++)
	         {
	      		data[i] = x.datos[i];
				info += '<p>'+x.datos[i].label+'</p>';
	         }

			$("#datos_sexo").html(info);
			var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(data, { 		               
	        animationSteps: 100,
	        responsive: true,
	 		animationEasing: 'easeInOutQuart'});


        	//Grafico Formación( última finalizada )
	         var x = datos_grafico(document.getElementById("canvas2"),'core.php?query=2');

	         var data = new Array();
	         var info="";
	         var obj = {
						    labels: [],
						    datasets: []
						};

			var arr = new Array();
			var tmp; 

   				obj.datasets = [{
					fillColor : "#6b9dfa",
					strokeColor : "#ffffff",
					highlightFill: "#1864f2",
					highlightStroke: "#ffffff"
				}];

			console.dir(x);
	         for(i=0; i<(Object.keys(x.datos).length-1) ; i++)
	         {

	         	console.log(i);
				info += '<p>'+x.datos[i].labels_cant+'</p>';
				obj['labels'].push(x.datos[i].labels);
				temp = x.datos.datasets;
	         }

			 for(i=0; i<(Object.keys(x.datos).length-1) ; i++)
	         {
	         	arr[i] = x.datos[i].cantidades
	         }
			
			obj.datasets['0'].data = arr;

			$("#datos_formacion").html(info);
			var myPie = new Chart(document.getElementById("canvas2").getContext("2d")).Bar(obj,
			{
				responsive:true,
			});


        	//Grafico Situacion laboral
	         var x = datos_grafico(document.getElementById("canvas2"),'core.php?query=3');

	         var data = new Array();
	         var info="";
	         var obj = {
						    labels: [],
						    datasets: []
						};

			var arr = new Array();
			var tmp; 

   				obj.datasets = [{
					fillColor : "#6b9dfa",
					strokeColor : "#ffffff",
					highlightFill: "#1864f2",
					highlightStroke: "#ffffff"
				}];

			console.dir(x);
	         for(i=0; i<(Object.keys(x.datos).length-1) ; i++)
	         {

	         	console.log(i);
				info += '<p>'+x.datos[i].labels_cant+'</p>';
				obj['labels'].push(x.datos[i].labels);
				temp = x.datos.datasets;
	         }

			 for(i=0; i<(Object.keys(x.datos).length-1) ; i++)
	         {
	         	arr[i] = x.datos[i].cantidades
	         }
			
			obj.datasets['0'].data = arr;

			$("#datos_situacion").html(info);
			var myPie = new Chart(document.getElementById("canvas3").getContext("2d")).Bar(obj,
			{
				responsive:true,
			});
 			


}


</script>





</body>
</html>