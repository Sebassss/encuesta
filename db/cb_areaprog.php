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
$consulta = $db->query("select csId, csNombre from catCentroDeSalud where cszId='$zonaId'");

$i=0;
$x = array();
while($row = $db->fetch_array($consulta))
{
    $x[$i] =array("value" => $row['csId'], "text" => $row['csNombre']);
    $i++;
}

echo json_encode($x);