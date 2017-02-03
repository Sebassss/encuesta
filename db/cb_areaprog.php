<?php
/**
 * Created by PhpStorm.
 * User: SEbas
 * Date: 31/01/2017
 * Time: 8:41
 */

require_once "class.conexion.php";

$db = new Conexion();
$zonaId = $_POST['cszId'];
$consulta = $db->query("select t.depId,t.depNombre from catdepartamento t left join enlzonadepartamento e on e.depId = t.depId where cszId ='$zonaId'");

$i=1;
$x = array();
if($db->num_rows($consulta)>0) {
    $x[0] = array("value" => '0', "text" => 'Seleccione...');
}
while($row = $db->fetch_array($consulta))
{
    $x[$i] =array("value" => $row['depId'], "text" => $row['depNombre']);
    $i++;
}

echo json_encode($x);