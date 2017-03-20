<?php

    require_once "db/class.conexion.php";

    $tipo = "";
    if(isset($_GET['tipo']))
    {
        $tipo = $_GET['tipo'];
        if($tipo>0)
        {
            $tipo=1;
        }
        else{
            $tipo=0;
        }
    }
    else
    {
        //die;
    $tipo = "2";

    }

    //echo $tipo;
    //echo '<input  type="hidden" id="tipo" name = "tipo" value = "'.$tipo.'" >';
?>


<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Encuesta de Diagnóstico Organizacional</title>

    <!-- Bootstrap Core CSS -->



    <link href="framework/css/bootstrap.min.css" rel="stylesheet">
    <link href="framework/datepicker/css/bootstrap-datepicker.min.css">

    <!-- Custom CSS -->
    <link href="framework/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="framework/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="framework/fonts/css.css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="framework/js/html5shiv.js"></script>
    <script src="framework/js/respond.min.js"></script>
    <![endif]-->

    <link rel="icon" href="data:;base64,iVBORw0KGgo=">

    <link rel="icon" type="image/png" href="ico/favicon.png" />

<script>
    function agentes()
    {




        window.location.href='index.php?tipo=0#item1'

    }
</script>
</head>

<body>
<?php
    echo '<input  type="hidden" id="tipo" name = "tipo" value = "'.$tipo.'" >';
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ticket" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticket"><b>Encuesta de Diagnóstico Organizacional</b></h5>
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button id="btnGracias" type="button" class="btn btn-primary">Gracias</button>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->


<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i  class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();  >Inicio</a>
        </li>
        <li>
            <a href="#item1" onclick=$("#menu-close").click();>Item 1</a>
        </li>
        <li>
            <a href="#item2" onclick=$("#menu-close").click();>Item 2</a>
        </li>
        <li>
            <a href = "#item3" onclick = $("#menu-close") . click();>Item 3 </a >
        </li >
<!--        <li >-->
<!--            <a href = "#item4" onclick = $("#menu-close") . click();>Item 4 </a >-->
<!--        </li >-->
        <li>
            <a href="#item4" onclick=$("#menu-close").click();>Item 4</a>
        </li>

        <li>
            <a href="#fin" onclick=$("#menu-close").click();>Finalizar Encuesta</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">

    <!--
        <h1 style="text-align: center" >
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <img style=" margin: 0 auto;background-color: #fff;" class="img-responsive img-rounded" src="framework/img/logo.png">
            </div>

        </h1>

        <h2 class="transparencias"  style=" color: #fff; margin-top: 50px;">Encuesta de Diagnóstico Organizacional</h2>
        <h3 class="transparencias"><b>Gestión de RRHH | <span style="color:#ccc"> Dirección Administrativa</span> </b></h3>
        <br>
        -->

       <!-- <a href="javascript:agentes();" class="btn btn-dark btn-lg">Encuesta</a> -->

        <!--
        <a href="index.php?tipo=1" class="btn btn-dark btn-lg">Encuesta para Agentes con Personal a Cargo</a>
        -->
        <a href="#top" class="btn btn-dark btn-lg">Comenzar</a>

    </div>
</header>

<section  id="item1" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2 class="titulo_preg">Encuesta para Agentes </h2>
                <h4>

                    <i>La encuesta es una técnica para el relevamiento de datos. Permitirá conocer su opinión respecto de su puesto y lugar de trabajo. Para ello es fundamental que le brinde la mayor importancia y honestidad a sus respuestas ya que estos datos nos servirán para evaluar alternativas de solución y pensar en estrategias que puedan mejorar su labor diaria.
                    <p></p><b>Esta encuesta es <u>anónima</u></b> y no persigue otro objetivo final y general más  que mejorar el trabajo de todos los colaboradores del Ministerio de Salud Pública.</i>
                    </p>
                    <br>
                    <br>
                    <span class="col-sm-12 col-lg-12 col-xs-12 text-center"> <div class="checkbox"> <input  type="checkbox" id="leido" name="leido" value="1"><u>He leido este enunciado.</u></div></span>
                </h4>
        </div>
        <!-- /.row -->
    </div>
        </div>
    <!-- /.container -->
</section>

<section  id="item2" class="services  grad_1" >
    <div class="container">
        <div class="row text-left" style="margin-top: 50px;">
            <div class="col-lg-10 col-lg-offset-1">
                <h2 class="titulo_preg"> 1 - Responda los siguientes campos y seleccione el que corresponda.</h2>

                <div class="col-lg-12" >
                    <form id="1" name="1" class="form-horizontal" role="form">

                        <div class="form-group" style="margin-top: 50px;">
                            <label for="country" class="col-sm-3 control-label">Zona Sanitaria</label>
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

                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-9">
                                <input type="date"  id="fechanac" name="fechanac" class="form-control">
                            </div>
                        </div>
                        <div  class="form-group">
                            <label class="control-label col-sm-3">Sexo</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio"  name="sexo" value="F">Femenino
                                            </label>
                                        </div>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio"  name="sexo" value="M">Masculino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label col-sm-3">Formación( última finalizada )</label>
                            <div class="col-sm-9">
                                <div >
                                    <label class="radio-inline">
                                        <input   type="radio"  name="formacion" value="0">Primario
                                    </label>
                                </div>
                                <div >
                                    <label class="radio-inline">
                                        <input   type="radio" name="formacion" value="1">Secundario
                                    </label>
                                </div>
                                <div >
                                    <label class="radio-inline">
                                        <input   type="radio"  name="formacion" value="2">Terciario
                                    </label>
                                </div>
                                <div >
                                    <label class="radio-inline">
                                        <input   type="radio"  name="formacion" value="3">Universitario
                                    </label>
                                </div>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group" style="display:none">
                            <label for="firstName" class="col-sm-3 control-label">Puesto que ocupa</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="50" value="campo anulado" id="puesto" name="puesto" placeholder="Puesto que ocupa" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Antiguedad en MSP(en años cumplidos)</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="2" onkeypress="return justNumbers(event);" id="antiguedad" name="antiguedad" value="" placeholder="Antiguedad en años" class="form-control" autofocus>
                            </div>
                        </div>



                        <div class="form-group">

                            <label  class="col-sm-3 control-label">Planta Permanente</label>
                            <div class="col-sm-9">
                                <input id="pp" type="radio" onclick="add_options();"  name="situacion_trabajo" value="0" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Contratado</label>
                            <div class="col-sm-9" >
                                <input type="radio" onclick="add_options();" name="situacion_trabajo" value="1"  class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Médico comunitario</label>
                            <div class="col-sm-9" >
                                <input type="radio" onclick="add_options();" name="situacion_trabajo" value="2"  class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Residente</label>
                            <div class="col-sm-9" >
                                <input type="radio" onclick="add_options();" name="situacion_trabajo" value="3"  class="form-control" autofocus>
                            </div>
                        </div>

                    </form> <!-- /form -->
                </div>

            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section  id="item3" class="portfolio grad_4 " >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2 class="titulo_preg">2 - Para cada afirmación marque la casilla correspondiente al número que mejor identifica su opinión.</h2>
                <div class="row " style="margin-top: 50px;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" >
                        <table  class="table" style="border: solid 5px #ccc" >
                            <thead class="thead-inverse">
                            <tr class="text-center " style="background-color: #ccc; color:#000">
                                <th class="text-center">CALIFICACIÓN</th>
                                <th class="text-center">PUNTUACIÓN</th>

                            </tr>
                            </thead>
                            <tbody style="background-color: #fff; font-weight: 700; color: gray;">

                            <tr>
                                <td>No sabe / No contesta</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Totalmente en desacuerdo</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>En desacuerdo</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>De acuerdo</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Totalmente de acuerdo</td>
                                <td>4</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <!-- /.row (nested) -->
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12 text-left">
                        <form id="2" name="2">
                            <table class="table table-striped" style="border: solid 5px #7b2622;">
                                <thead>
                                <tr style="background-color: #7b2622; color:#fff;">
                                    <th class="text-center">Respecto a mi puesto</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr ><!--1a-->
                                    <td>Tengo conocimientos específicos sobre cuáles son mis tareas y funciones.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1a" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1a" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1a" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1a" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1a" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr><!--1b-->
                                    <td>Conozco los objetivos, funciones y procesos que tiene el área en la que me desempeño.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1b" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1b" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1b" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1b" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1b" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--1c-->
                                    <td>Conozco con claridad sobre cuales son los resultados que se espera de mi colaboración.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1c" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1c" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1c" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1c" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1c" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr><!--1d-->
                                    <td>Me siento a gusto con las tareas y funciones que realizo.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1d" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1d" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1d" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1d" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1d" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--1e-->
                                    <td>Conozco cuáles son los objetivos de mi organización.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1e" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1e" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1e" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1e" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1e" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--1f-->
                                    <td>Conozco la Visión y Misión de mi organización.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1f" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1f" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1f" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1f" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1f" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--1g-->
                                    <td>Estoy de acuerdo con los objetivos laborales que se me plantearon.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1g" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1g" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1g" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1g" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1g" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--1h-->
                                    <td>Es importante que se brinde capacitación adecuada para mejorar mi desempeño.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1h" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1h" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1h" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1h" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="1h" value="4">
                                        </label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="table table-striped" style="border: solid 5px #a03a21;">
                                <thead>
                                <tr style="background-color: #a03a21; color:#fff;" >
                                    <th class="text-center">Respecto a mi Jefe o Superior Inmediato</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr> <!--2a-->
                                    <td>Identifico claramente quien es mi Jefe o Superior.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2a" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2a" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2a" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2a" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2a" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--2b-->
                                    <td>Encuentro apoyo y confianza en mi Jefe o Superior para el desarrollo de mis actividades.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2b" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2b" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2b" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio" name="2b" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2b" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--2c-->
                                    <td>Mi Jefe o Superior me imparte funciones y tareas de manera clara.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2c" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2c" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2c" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2c" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2c" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--2d-->
                                    <td>Tengo un excelente Jefe/Superior.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2d" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2d" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2d" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2d" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2d" value="4">
                                        </label>
                                    </td>
                                </tr>
                                <tr> <!--2e-->
                                    <td>Mi Jefe o Superior me alienta a proponer nuevas ideas o escucha mis sugerencias .</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2e" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2e" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2e" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2e" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="2e" value="4">
                                        </label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="table table-striped" style="border: solid 5px #c68a56;">
                                <thead>
                                <tr style="background-color: #c68a56; color:#fff;">
                                    <th class="text-center">Respecto al Medio Ambiente de trabajo</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr> <!--3a-->
                                    <td>Cuento con las herramientas e instrumentos necesarios para poder realizar mi trabajo adecuadamente.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3a" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3a" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3a" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3a" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3a" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--3b-->
                                    <td>Los equipos que utilizo (PC, teléfono, escritorios, sillas) son mantenidas en forma adecuada..</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3b" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3b" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3b" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3b" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3b" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--3c-->
                                    <td>Mi lugar de trabajo se encuentra limpio y ordenado.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3c" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3c" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3c" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3c" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3c" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--3d-->
                                    <td>Cuento con espacio suficiente y seguro para realizar mi trabajo.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3d" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3d" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3d" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3d" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3d" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--3e-->
                                    <td>Me interesa la posibilidad de trabajar en otra área del MSP.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3e" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3e" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3e" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3e" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="3e" value="4">
                                        </label>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            <table class="table table-striped" style="border: solid 5px #d7ceb3;">
                                <thead>
                                <tr class="text-center" style="background-color: #d7ceb3; color:#000">
                                    <th class="text-center">Respecto a la comunicación</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr> <!--4a-->
                                    <td>Cuento con la información necesaria para desarrollar mi trabajo eficientemente.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4a" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4a" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4a" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4a" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4a" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--4b-->
                                    <td>La información de interés es comunicada oportunamente.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4b" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4b" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4b" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4b" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4b" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--4c-->
                                    <td>Siempre estoy enterado de los reglamentos, normas, procedimientos, etc..</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4c" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4c" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4c" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4c" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4c" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--4d-->
                                    <td>Tengo fácil acceso a novedades y comunicaciones que se realizan a Nivel Central.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4d" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4d" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4d" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4d" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="4d" value="4">
                                        </label>
                                    </td>
                                </tr>




                                </tbody>
                            </table>

                            <table class="table table-striped" style="border: solid 5px #58b6a8;">
                                <thead>
                                <tr  style="background-color: #58b6a8; color:#000;">
                                    <th class="text-center">Respecto a mi Área y Compañeros</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr> <!--5a-->
                                    <td>En mi equipo trabajamos juntos para resolver los problemas de la organización.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5a" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5a" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5a" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5a" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5a" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--5b-->
                                    <td>Trabajo en un ambiente amigable y de trato cordial.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5b" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5b" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5b" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5b" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5b" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--5c-->
                                    <td>Comparto actividades extralaborales con mis compañeros.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5c" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5c" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5c" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5c" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5c" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--5d-->
                                    <td>Ante mi ausencia, cuento con el soporte y apoyo de mi área/compañeros para no obstaculizar la labor.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5d" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5d" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5d" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5d" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5d" value="4">
                                        </label>
                                    </td>
                                </tr>

                                <tr> <!--5e-->
                                    <td>Hay buena cooperación entre las distintas áreas para el desarrllo de un trabajo en común.</td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5e" value="0">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5e" value="1">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5e" value="2">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5e" value="3">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="radio-inline">
                                            <input type="radio"  name="5e" value="4">
                                        </label>
                                    </td>
                                </tr>




                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section id = "item4" class="map  grad_3"  >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-10 col-lg-offset-1 text-center" >
                <h2 class="titulo_preg"  >
    3 - Selecciones las 4 capacitaciones que considera Ud.  que le ayudarían a mejorar su desempeño:
                </h2 >
                <form id = "3" name = "3" >
                <table class="table table-striped" style="border: solid 5px #ccc" >
                    <thead >
                    </tr >
                    </thead >
                    <tbody >
                    <tr >
                        <td > Trabajo en equipo </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_1" name = "Option_1" value = "1" >
                            </label >
                        </td >
                        <td > Liderazgo</td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_2" name = "Option_2" value = "1" >
                            </label >
                        </td >
                    </tr >
                    <tr >
                        <td > Gestión del Cambio </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_3" name = "Option_3" value = "1" >
                            </label >
                        </td >
                        <td > Diversidad Generacional </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_4" name = "Option_4" value = "1" >
                            </label >
                        </td >
                    </tr >
                    <tr >
                        <td > Comunicación efectiva </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_5" name = "Option_5" value = "1" >
                            </label >
                        </td >
                        <td > Planificación Estrategica </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_6" name = "Option_6" value = "1" >
                            </label >
                        </td >
                    </tr >

                  

                    <tr >
                        <td > Oratoria</td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_7" name = "Option_7" value = "1" >
                            </label >
                        </td >
                        <td > Gestión del talento </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_8" name = "Option_8" value = "1" >
                            </label >
                        </td >
                    </tr >

                    <tr >
                        <td > Office(Word, Excel)</td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_9" name = "Option_9" value = "1" >
                            </label >
                        </td >
                        <td > Clima Laboral </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_10" name = "Option_10" value = "1" >
                            </label >
                        </td >
                    </tr >

                    <tr >
                        <td > Manejo de correo electrónico </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_11" name = "Option_11" value = "1" >
                            </label >
                        </td >
                        <td > Otros(Describa)</td >
                        <td >
                            <label class="radio-inline" >
                                <input maxlength="20" type = "text" id = "Option_12" placeholder="Otro" name = "Option_12" >
                            </label >
                        </td >
                    </tr >

                    </tbody >
                </table >
                </form >
            </div >
        </div >
    </div >
</section >


<section class="grad_2" >
<section  id="item5" class="map " style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2 class="titulo_preg">
                    4 - Seleccione las capacitaciones que le ayudarían a Ud. a mejorar su desempeño:
                </h2>
                <form id="4" name="4">
                <table class="table table-striped" style="border: 1px solid #000">
                    <thead>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trabajo en equipo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_1" name="Option_1" value="1">
                            </label>
                        </td>
                        <td>Liderazgo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_2" name="Option_2" value="1">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gestión del Cambio</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_3" name="Option_3" value="1">
                            </label>
                        </td>
                        <td>Diversidad Generacional</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="1">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_5" name="Option_5" value="1">
                            </label>
                        </td>
                        <td>Planificación Estratégica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_6" name="Option_6" value="1">
                            </label>
                        </td>
                    </tr>



                    <tr>
                        <td>Oratoria</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_7" name="Option_7" value="1">
                            </label>
                        </td>
                        <td>Gestión del talento</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_8" name="Option_8" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Office (Word, Excel)</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_9" name="Option_9" value="1">
                            </label>
                        </td>
                        <td>Clima Laboral</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_10" name="Option_10" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Manejo de correo electrónico</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_11" name="Option_11" value="1">
                            </label>
                        </td>
                        <td>Otros (Describa)</td>
                        <td>
                            <label class="radio-inline">
                                <input maxlength="20" type="text" id="Option_12" placeholder="Otro" name="Option_12" >
                            </label>
                        </td>
                    </tr>

                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</section>


<section  id="fin" class="map  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2 class="titulo_preg">
                    4 - Por favor, en las siguientes líneas escriba comentarios,
                    opiniones, aclaraciones o sugerencias en torno a los temas planteados en esta encuesta.
                </h2>

                <form id="5" name="5">
                <div class="form-group">
                    <label for="comment">Comentarios: (max: 1500 caracteres / 15 Líneas)</label>
                    <textarea  maxlength="1500" name="comentario" id="comentario" class="form-control" rows="7"></textarea>
                </div>
                </form>
            </div>
        </div>
    </div>

        <div class="col-md-12 text-center">
        <h3>
            Gracias por su colaboración, su opinión es muy valiosa.<br>
            <strong>Gestión de RRHH - MSP</strong>
        </h3>
        </div>

</section>
</section>

<div  class="col-md-12" style="margin-top: 90px">
    <div class="row text-center" style="margin-bottom: 90px">
        <div id="fin_encuesta" class="btn btn-primary">Finalizar encuesta</div>
    </div>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">

                <p>San Juan
                    <br>Argentina</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (+54 0264) 4305619 / 4305575 - msal.sanjuan@gmail.com</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:msal.sanjuan@gmail.com">Area de Informática - Ministerio de Salud Pública</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>

<!-- jQuery -->
<script src="framework/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="framework/js/bootstrap.min.js"></script>
<script src="framework/datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>


    var cant = 1;
    function add_options2()
    {
        var op_ley = '<div style="margin:0 !important; border: solid 1px #ccc; border-radius: 8px;" id="op_ley" class="form-group">'+
            '<label class="control-label col-sm-12 label-warning" style="text-align: center !important;">Indique en que categoria encuadra mejor sus funciones.</label>'+
            '<div class="col-sm-12">'+
            '<div class="row">'+
            '<div class="col-sm-3">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="1">Servicios Generales / Maestranza'+
            '</label>'+
            '</div>'+
            '<div class="col-sm-3">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="2">Funciones Administrativas'+
            '</label>'+
            '</div>'+
            '<div class="col-sm-3">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="3">Responsable o Jefe de Sector/Área con personal a cargo'+
            '</label>'+
            '</div>'+
            '<div class="col-sm-3">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="4">Otro'+
            '</label>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';

        if($('input[name=ley]:checked').val() == "1")
        {
            if(typeof($("#op_ley").val()) == 'undefined')
            {
                $('#ley').append(op_ley);
            }
        }
        else
        {
            $("#op_ley").remove();
        }
    }

    function add_options()
    {



        var ley = '<div style="margin:0 !important; border: solid 1px #ccc; border-radius: 8px;" id="ley" class="form-group">'+
            '<label class="control-label col-sm-12 label-warning" style="text-align: center !important;">Ley</label>'+
        '<div class="col-sm-12">'+
        '<div class="row">'+
        '<div class="col-sm-6" style="text-align: center !important;">'+
        '<label class="radio-inline">'+
        '<input type="radio"  onclick="add_options2();"  name="ley" value="0">71Q'+
        '</label>'+
        '</div>'+
        '<div class="col-sm-6">'+
        '<label class="radio-inline">'+
        '<input type="radio"  onclick="add_options2();" name="ley" value="1">1148Q'+
        '</label>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';




        if($('input[name=situacion_trabajo]:checked').val() == "0")
        {
            if(typeof($("#ley").val()) == 'undefined')
            {
                $('#pp').after(ley);
            }
        }
        else
        {
            $("#ley").remove();
        }
    }



    function cantidadSeleccionados(control)
    {
        var x =($(control).is(':checked'))

        if( x == false)
        {
            cant--;
            return;
        }

        if(cant > 4 )
        {
            $(control).prop("checked", false)
            alert("Ha superado el máximo permitido");
        }
        else
        {
            cant++;
        }
    }

    function valida()
    {


        var leido = $('input[name=leido]:checked').val();
        //1
        var sexo = $('input[name=sexo]:checked').val();

        var siatuacion = $('input[name=situacion_trabajo]:checked').val();
        var formacion = $('input[name=formacion]:checked').val();

        var ley =$('input[name=ley]:checked').val();
        var op_ley =$('input[name=cat]:checked').val();

        if(siatuacion == "0" && typeof(ley) == 'undefined')
        {
            alert("Seleccione una ley, en situación laboral")
            return false;
        }

        if(ley == "1" && typeof(op_ley) == 'undefined')
        {
            alert("Seleccione una categoría acorde a sus funciones, en situación laboral")
            return false;
        }

        //2
        var a1 = $('input[name=1a]:checked').val();
        var b1 = $('input[name=1b]:checked').val();
        var c1 = $('input[name=1c]:checked').val();
        var d1 = $('input[name=1d]:checked').val();
        var e1 = $('input[name=1e]:checked').val();
        var f1 = $('input[name=1f]:checked').val();
        var g1 = $('input[name=1g]:checked').val();
        var h1 = $('input[name=1h]:checked').val();

        var a2 = $('input[name=2a]:checked').val();
        var b2 = $('input[name=2b]:checked').val();
        var c2 = $('input[name=2c]:checked').val();
        var d2 = $('input[name=2d]:checked').val();
        var e2 = $('input[name=2d]:checked').val();

        var a3 = $('input[name=3a]:checked').val();
        var b3 = $('input[name=3b]:checked').val();
        var c3 = $('input[name=3c]:checked').val();
        var d3 = $('input[name=3d]:checked').val();
        var e3 = $('input[name=3e]:checked').val();

        var a4 = $('input[name=4a]:checked').val();
        var b4 = $('input[name=4b]:checked').val();
        var c4 = $('input[name=4c]:checked').val();
        var d4 = $('input[name=4d]:checked').val();


        var a5 = $('input[name=5a]:checked').val();
        var b5 = $('input[name=5b]:checked').val();
        var c5 = $('input[name=5c]:checked').val();
        var d5 = $('input[name=5d]:checked').val();
        var e5 = $('input[name=5e]:checked').val();

        //3
        //compruebo mediante cant. seleccionados

        //4
        var Option_1 = $("#4").find('input[name=Option_1]:checked').val();
        var Option_2 = $("#4").find('input[name=Option_2]:checked').val();
        var Option_3 = $("#4").find('input[name=Option_3]:checked').val();
        var Option_4 = $("#4").find('input[name=Option_4]:checked').val();
        var Option_5 = $("#4").find('input[name=Option_5]:checked').val();
        var Option_6 = $("#4").find('input[name=Option_6]:checked').val();
        var Option_7 = $("#4").find('input[name=Option_7]:checked').val();
        var Option_8 = $("#4").find('input[name=Option_8]:checked').val();
        var Option_9 = $("#4").find('input[name=Option_9]:checked').val();
        var Option_10 = $("#4").find('input[name=Option_10]:checked').val();
        var Option_11 = $("#4").find('input[name=Option_11]:checked').val();




        if( typeof(leido) == 'undefined') {alert("Indique si ha leido el enunciado."); return false; }

        if( $("#cb_zona").val()==0) {alert("Seleccione una zona sanitaria."); return false; }
        if( $("#cb_areaprog").val()==0) {alert("Seleccione un área programática."); return false; }
        if( $("#fechanac").val()=="") {alert("Proporcione una fecha de nacimiento."); return false; }
        if( typeof(sexo) == 'undefined') {alert("Seleccione tipo de sexo."); return false; }




        if($.trim($("#puesto").val()) == "")
        {
            alert("Indique su puesto.");
            return false;
        }

        if($.trim($("#antiguedad").val()) == "")
        {
            alert("Indique su antiguedad.");
            return false;
        }


        if( typeof(formacion) == 'undefined') {alert("Indique su formación."); return false; }

        if( typeof(siatuacion) == 'undefined') {alert("Indique su situación laboral."); return false; }



        if( typeof(a1)  == 'undefined' ||
            typeof(b1) == 'undefined' ||
            typeof(c1) == 'undefined' ||
            typeof(d1) == 'undefined' ||
            typeof(e1) == 'undefined' ||
            typeof(f1) == 'undefined' ||
            typeof(g1) == 'undefined' ||
            typeof(h1) == 'undefined')
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }

        if( typeof(a2) == 'undefined' ||
            typeof(b2) == 'undefined' ||
            typeof(c2) == 'undefined' ||
            typeof(d2) == 'undefined' ||
            typeof(e2) == 'undefined')
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }

        if( typeof(a3) == 'undefined' ||
            typeof(b3) == 'undefined' ||
            typeof(c3) == 'undefined' ||
            typeof(d3) == 'undefined' ||
            typeof(e3) == 'undefined' )
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }

        if( typeof(a4) == 'undefined' ||
            typeof(b4) == 'undefined' ||
            typeof(c4) == 'undefined' ||
            typeof(d4) == 'undefined' )
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }

        if( typeof(a5) == 'undefined' ||
            typeof(b5) == 'undefined' ||
            typeof(c5) == 'undefined' ||
            typeof(d5) == 'undefined' ||
            typeof(e5) == 'undefined' )
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }


        if($("#tipo").val() == 1)
        {
            if (cant < 5) {
                alert("Hay opciones sin seleccionar en el Item 3.");
                return false;
            }

            if (typeof(Option_1) == 'undefined' &&
                typeof(Option_2) == 'undefined' &&
                typeof(Option_3) == 'undefined' &&
                typeof(Option_4) == 'undefined' &&
                typeof(Option_5) == 'undefined' &&
                typeof(Option_6) == 'undefined' &&
                typeof(Option_7) == 'undefined' &&
                typeof(Option_8) == 'undefined' &&
                typeof(Option_9) == 'undefined' &&
                typeof(Option_10) == 'undefined' &&
                typeof(Option_11) == 'undefined') {
                alert("Seleccione al menos una opción del Item 4.");
                return false;
            }
        }


        return true;
    }
    $("#fin_encuesta").on( "click", function()
    {

        if(valida() == true) {
            $.ajax({
                url: 'db/add.php',
                cache: false,
                type: 'post',
                data: {
                    1: $("#1").serialize(),
                    2: $("#2").serialize(),
                    3: $("#3").serialize(),
                    4: $("#4").serialize(),
                    5: $("#5").serialize(),
                    tipo: $("#tipo").val()
                },
                dataType: "json",
                success: function (response) {
                    $("#1")[0].reset();
                    $("#2")[0].reset();
                    if($("#tipo").val() == 1) {
                        $("#3")[0].reset();
                        $("#4")[0].reset();
                    }
                    $("#5")[0].reset();

                    if(response.estado == "true")
                    {


                        cant = 1;
                        cant_formacion = 1;
                        $("#cb_areaprog").empty();
                        $("#ley").remove();
                        $("#myModal").find(".modal-body").append("<h3>Gracias por su colaboración, su opinión es muy valiosa</h3><p> código comprobante: "+response.code+"</p><p>"+response.fecha+"</p>");
                        $("#myModal").modal();

                        setTimeout(function(){
                            window.location = "index.php";
                        },10000);

                        //alert("Muchas Gracias por su respuesta.");
                    }

                },
                error: function (error) {
                    //console.log("Error: " + error)
                    //console.dir(error);
                }

            })
        }
    });

    $("#btnGracias").on('click', function()
    {
        $('#myModal').modal('hide');
//        $('html, body').animate({
//            scrollTop: $("#top").offset().top
//        }, 1000);

        window.location.reload();


    })


    $.ajax({

        url:'db/cb_zona.php',
        cache:false,
        type: 'post',
        dataType: "json",
        success: function(response)
        {

            for(i=0; i<response.length;i++)
            {
                $("#cb_zona").append("<option value=" + response[i].value + ">" + response[i].text + "</option>");
            }
        },
        error: function(error)
        {
            //console.log("Error: " + error)
        }

    })

    $('#cb_zona').on('change', function() {
        $.ajax({
            url:'db/cb_areaprog.php',
            data: {cszId : $('#cb_zona').val()},
            cache:false,
            type: 'post',
            dataType: "json",
            success: function(response)
            {

                $("#cb_areaprog").empty();
                for(i=0; i<response.length;i++)
                {

                    $("#cb_areaprog").append("<option value=" + response[i].value + ">" + response[i].text + "</option>");
                }
            },
            error: function(error)
            {
                //console.log("Error: " + error)
            }

        })
    })

    $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });

    // Closes the sidebar menu
    $("#menu-close").click(function(e) {

        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");

    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if (target.length)
                {
                    //console.log(target)
                    if(target !="#top") {
                        $('html,body').animate({
                            scrollTop: $(target).offset().top + $(target).outerHeight(false)
                        }, 1000);
                    }
                    else
                    {
                        $('html,body').animate({
                            scrollTop: $(target).offset().top
                        }, 1000);
                    }
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });



    $(document).ready(function(){
        $('html,body').animate({
            scrollTop: $("#top").offset().top
            //window.location.href='#item2';
        }, 1000);

        
    });

    function justNumbers(e)
    {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;

        return /\d/.test(String.fromCharCode(keynum));
    }



</script>

</body>

</html>
