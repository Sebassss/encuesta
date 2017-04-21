<?php 

	require_once "db/class.conexion.php";

	$query = $_GET['query']; //consulta
	
	//$zs = $_GET['zs']; //zona sanitaria id
	//$ap = $_GET['ap']; //area programatica id

	switch($query)
	{
		case '1': //Consulta basica cantidad de sexo F y M por Zona Sanitaria y Area programatica.
		{
			$x = array();
			$i = 0;
			$db = new MySQL();
			$consulta = $db->Consulta("select count(sexo) as cantidades, sexo from datos group by sexo");
			$color = "red";
			while($row = $db->fetch_array($consulta))
			{
				
				$x[$i]['label'] = ($row['sexo']=='F') ? 'FEMENINO'.' ('.$row['cantidades'].')' : 'MASCULINO'.' ('.$row['cantidades'].')';
				$x[$i]['value'] = $row['cantidades'];
				$x[$i]['color'] = $color;
				$x[$i]['labelColor'] = 'white';
                $x[$i]['labelFontSize'] = '17';
                $color = "blue";
    			$i++;

			}

			echo json_encode($x,JSON_NUMERIC_CHECK);
			
		}break;


		case 2:
		{
			$x = array();
			$i = 0;
			$db = new MySQL();
			$consulta = $db->Consulta("select case formacion when 0 then 'PRIMARIO' 
										  					 when 1 then 'SECUNDARIO' 
                      										 when 2 then 'TERCIARIO' 
                      										 when 3 then 'UNIVERSITARIO' end as formacion , count(formacion) as cantidades  
                      				  from datos group by formacion");
			$color = "red";
			
			while($row = $db->fetch_array($consulta))
			{
				
				$x[$i]['cantidades'] = $row['cantidades'];
				$x[$i]['labels'] = $row['formacion'];
				$x[$i]['labels_cant'] = $row['formacion'].' - '.$row['cantidades'];
                
                $x['datasets']['fillColor'] = "#6b9dfa";
				$x['datasets']['strokeColor'] = "#ffffff";
				$x['datasets']['highlightFill'] = "#1864f2";
                $x['datasets']['highlightStroke'] = "#ffffff";
                
                $i++;

			}

			echo json_encode($x,JSON_NUMERIC_CHECK);
		}break;

		case 3:
		{
			$x = array();
			$i = 0;
			$db = new MySQL();
			$consulta = $db->Consulta("select case situacion when 0 then 'PLANTA PERMANENTE' 
										  	when 1 then 'CONTRATADO' 
                      						when 2 then 'MEDICO COMUNITARIO' 
                      						when 3 then 'RESIDENTE' end as situacion , count(formacion) as cantidades  from datos group by situacion");
			$color = "red";
			
			while($row = $db->fetch_array($consulta))
			{
				
				$x[$i]['cantidades'] = $row['cantidades'];
				$x[$i]['labels'] = $row['situacion'];
				$x[$i]['labels_cant'] = $row['situacion'].' - '.$row['cantidades'];
                
                $x['datasets']['fillColor'] = "#6b9dfa";
				$x['datasets']['strokeColor'] = "#ffffff";
				$x['datasets']['highlightFill'] = "#1864f2";
                $x['datasets']['highlightStroke'] = "#ffffff";
                
                $i++;

			}

			echo json_encode($x,JSON_NUMERIC_CHECK);
		}break;
	}
?>