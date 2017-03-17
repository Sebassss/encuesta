<?php
/**
 * Created by PhpStorm.
 * User: SEbas
 * Date: 31/01/2017
 * Time: 10:03
 *
 *
 */
date_default_timezone_set('America/Argentina/San_Juan');

require_once "class.conexion.php";
$db = new Conexion();


$params_1 = array();
parse_str($_POST['1'], $params_1);

// 1 - Campos
$tipo = !isset($_POST['tipo']) ? 0 : $_POST['tipo'];
$cb_zona= !isset($params_1['cb_zona']) ? 0 : $params_1['cb_zona'];
$cb_areaprog = !isset($params_1['cb_areaprog']) ? 0 : $params_1['cb_areaprog'];
$fechanac = !isset($params_1['fechanac']) ? "" : $params_1['fechanac'];
$sexo = !isset($params_1['sexo']) ? 0 : $params_1['sexo'];
$formacion = !isset($params_1['formacion']) ? 0 : $params_1['formacion'];
$puesto = !isset($params_1['puesto']) ? 0 : $params_1['puesto'];
$antiguedad = !isset($params_1['antiguedad']) ? 0 : $params_1['antiguedad'];
$situacion_trabajo = !isset($params_1['situacion_trabajo']) ? 0 : $params_1['situacion_trabajo'];

$ley = !isset($params_1['ley']) ? 0 : $params_1['ley'];
$cat = !isset($params_1['cat']) ? 0 : $params_1['cat'];

// 2 - Campos
$params_2 = array();
parse_str($_POST['2'], $params_2);

$a1 = !isset($params_2['1a']) ? 0 : $params_2['1a'];
$b1 = !isset($params_2['1b']) ? 0 : $params_2['1b'];
$c1 = !isset($params_2['1c']) ? 0 : $params_2['1c'];
$d1 = !isset($params_2['1d']) ? 0 : $params_2['1d'];
$e1 = !isset($params_2['1e']) ? 0 : $params_2['1e'];
$f1 = !isset($params_2['1f']) ? 0 : $params_2['1f'];
$g1 = !isset($params_2['1g']) ? 0 : $params_2['1g'];
$h1 = !isset($params_2['1h']) ? 0 : $params_2['1h'];


$a2 = !isset($params_2['2a']) ? 0 : $params_2['2a'];
$b2 = !isset($params_2['2b']) ? 0 : $params_2['2b'];
$c2 = !isset($params_2['2c']) ? 0 : $params_2['2c'];
$d2 = !isset($params_2['2d']) ? 0 : $params_2['2d'];
$e2 = !isset($params_2['2e']) ? 0 : $params_2['2e'];

$a3 = !isset($params_2['3a']) ? 0 : $params_2['3a'];
$b3 = !isset($params_2['3b']) ? 0 : $params_2['3b'];
$c3 = !isset($params_2['3c']) ? 0 : $params_2['3c'];
$d3 = !isset($params_2['3d']) ? 0 : $params_2['3d'];
$e3 = !isset($params_2['3e']) ? 0 : $params_2['3e'];

$a4 = !isset($params_2['4a']) ? 0 : $params_2['4a'];
$b4 = !isset($params_2['4b']) ? 0 : $params_2['4b'];
$c4 = !isset($params_2['4c']) ? 0 : $params_2['4c'];
$d4 = !isset($params_2['4d']) ? 0 : $params_2['4d'];

$a5 = !isset($params_2['5a']) ? 0 : $params_2['5a'];
$b5 = !isset($params_2['5b']) ? 0 : $params_2['5b'];
$c5 = !isset($params_2['5c']) ? 0 : $params_2['5c'];
$d5 = !isset($params_2['5d']) ? 0 : $params_2['5d'];
$e5 = !isset($params_2['5e']) ? 0 : $params_2['5e'];


// 3 - Campos
$params_3 = array();
parse_str($_POST['3'], $params_3);
$option_1_3 =  !isset($params_3['Option_1']) ? 0 : $params_3['Option_1'];
$option_2_3 =  !isset($params_3['Option_2']) ? 0 : $params_3['Option_2'];
$option_3_3 =  !isset($params_3['Option_3']) ? 0 : $params_3['Option_3'];
$option_4_3 =  !isset($params_3['Option_4']) ? 0 : $params_3['Option_4'];
$option_5_3 =  !isset($params_3['Option_5']) ? 0 : $params_3['Option_5'];
$option_6_3 =  !isset($params_3['Option_6']) ? 0 : $params_3['Option_6'];
$option_7_3 =  !isset($params_3['Option_7']) ? 0 : $params_3['Option_7'];
$option_8_3 =  !isset($params_3['Option_8']) ? 0 : $params_3['Option_8'];
$option_9_3 =  !isset($params_3['Option_9']) ? 0 : $params_3['Option_9'];
$option_10_3 = !isset($params_3['Option_10']) ? 0 : $params_3['Option_10'];
$option_11_3 = !isset($params_3['Option_11']) ? 0 : $params_3['Option_11'];
$option_12_3 = !isset($params_3['Option_12']) ? 0 : $params_3['Option_12'];


// 4 - Campos
$params_4 = array();
parse_str($_POST['4'], $params_4);
$option_1_4 =  !isset($params_4['Option_1']) ? 0 : $params_4['Option_1'];
$option_2_4 =  !isset($params_4['Option_2']) ? 0 : $params_4['Option_2'];
$option_3_4=   !isset($params_4['Option_3']) ? 0 : $params_4['Option_3'];
$option_4_4 =  !isset($params_4['Option_4']) ? 0 : $params_4['Option_4'];
$option_5_4 =  !isset($params_4['Option_5']) ? 0 : $params_4['Option_5'];
$option_6_4 =  !isset($params_4['Option_6']) ? 0 : $params_4['Option_6'];
$option_7_4 =  !isset($params_4['Option_7']) ? 0 : $params_4['Option_7'];
$option_8_4 =  !isset($params_4['Option_8']) ? 0 : $params_4['Option_8'];
$option_9_4 =  !isset($params_4['Option_9']) ? 0 : $params_4['Option_9'];
$option_10_4 = !isset($params_4['Option_10']) ? 0 : $params_4['Option_10'];
$option_11_4 = !isset($params_4['Option_11']) ? 0 : $params_4['Option_11'];
$option_12_4 = !isset($params_4['Option_12']) ? 0 : $params_4['Option_12'];



// 5 - Campos
$params_5 = array();
parse_str($_POST['5'], $params_5);
$comentario = !isset($params_5['comentario']) ? 0 : $params_5['comentario'];

$x = array();


$result = $db->query("INSERT INTO  datos (tipo,zona,area,fechanac,sexo,formacion,puesto,antiguedad,situacion,ley,cat,
                      1a,1b,1c,1d,1e,1f,1g,1h,
                      2a,2b,2c,2d,2e,
                      3a,3b,3c,3d,3e,
                      4a,4b,4c,4d,
                      5a,5b,5c,5d,5e,
                     3_op1,3_op2,3_op3,3_op4,3_op5,3_op6,3_op7,3_op8,3_op9,3_op10,3_op11,3_op12,
                     4_op1,4_op2,4_op3,4_op4,4_op5,4_op6,4_op7,4_op8,4_op9,4_op10,4_op11,4_op12,comentario) values('$tipo', '$cb_zona', '$cb_areaprog','$fechanac','$sexo','$formacion','$puesto','$antiguedad','$situacion_trabajo','$ley','$cat',
                                               '$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1', 
                                               '$a2','$b2','$c2','$d2','$e2',
                                               '$a3','$b3','$c3','$d3','$e3',
                                               '$a4','$b4','$c4','$d4',
                                               '$a5','$b5','$c5','$d5','$e5',
                                               '$option_1_3','$option_2_3','$option_3_3','$option_4_3','$option_5_3','$option_6_3','$option_7_3','$option_8_3','$option_9_3','$option_10_3','$option_11_3','$option_12_3', 
                                               '$option_1_4','$option_2_4','$option_3_4','$option_4_4','$option_5_4','$option_6_4','$option_7_4','$option_8_4','$option_9_4','$option_10_4','$option_11_4','$option_12_4', '$comentario')");

$mensaje = "No pudo Agregar.";
$estado = "false";
$code = 0;
$fecha_hora = fecha_hora(date("Y-m-d H:i:s"));

if(!$result)
{
    $mensaje = "Procesado correctamente.";
    $estado = "true";
    $code = $db->getLastID();

}
else
{
    $mensaje = "Error: ".$result;
}

$response = array(
    'mensaje' => $mensaje,
    'estado' => $estado,
    'code' => $code,
    'fecha' => $fecha_hora
);

echo json_encode($response);


function fecha_hora($fecha)
{
    $dia =  date('l',strtotime($fecha));
    if ($dia=="Monday") $dia="Lunes";
    if ($dia=="Tuesday") $dia="Martes";
    if ($dia=="Wednesday") $dia="Miércoles";
    if ($dia=="Thursday") $dia="Jueves";
    if ($dia=="Friday") $dia="Viernes";
    if ($dia=="Saturday") $dia="Sabado";
    if ($dia=="Sunday") $dia="Domingo";

    $mes =  date('F',strtotime($fecha));
    if ($mes=="January") $mes="Enero";
    if ($mes=="February") $mes="Febrero";
    if ($mes=="March") $mes="Marzo";
    if ($mes=="April") $mes="Abril";
    if ($mes=="May") $mes="Mayo";
    if ($mes=="June") $mes="Junio";
    if ($mes=="July") $mes="Julio";
    if ($mes=="August") $mes="Agosto";
    if ($mes=="September") $mes="Setiembre";
    if ($mes=="October") $mes="Octubre";
    if ($mes=="November") $mes="Noviembre";
    if ($mes=="December") $mes="Diciembre";

    $ano =  date('Y',strtotime($fecha));
    $dia2= date('d',strtotime($fecha));
    $hora = date('H:i',strtotime($fecha));
    $fecha  = $dia.', '.$dia2.' de '.$mes.' de '.$ano. ' a las '.$hora;

    return $fecha;

}