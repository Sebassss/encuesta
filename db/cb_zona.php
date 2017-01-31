<?php
/**
 * Created by PhpStorm.
 * User: SEbas
 * Date: 31/01/2017
 * Time: 8:41
 */

require_once "class.conexion.php";

$db = new Conexion();

$consulta = $db->query("select cszId, cszNombre from catCentroDeSaludZona");

$i=0;
$x = array();
while($row = $db->fetch_array($consulta))
{
    $x[$i] =array("value" => $row['cszId'], "text" => $row['cszNombre']);
    $i++;
}

echo json_encode($x);