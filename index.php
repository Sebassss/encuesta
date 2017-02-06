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
        die;
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
    <title>Encuesta de Relevamiento</title>

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


</head>

<body>
<?php
    echo '<input  type="hidden" id="tipo" name = "tipo" value = "'.$tipo.'" >';
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ticket" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticket"><b>Encuesta de Relevamiento - Dirección administrativa</b></h5>
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
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
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
        <?php
        if($tipo==1)
        {
         echo '<li >
            <a href = "#item3" onclick = $("#menu-close") . click();>Item 3 </a >
        </li >
        <li >
            <a href = "#item4" onclick = $("#menu-close") . click();>Item 4 </a >
        </li >
        <li>
            <a href="#item5" onclick=$("#menu-close").click();>Item 5</a>
        </li>
        ';
        }
        ?>

        <li>
            <a href="#fin" onclick=$("#menu-close").click();>Finalizar Encuesta</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1 style="text-align: center" >
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <img style=" margin: 0 auto;background-color: #fff" class="img-responsive img-rounded" src="framework/img/logo.png">
            </div>
        </h1>
        <h3 class="transparencias"  style="color: #fff;">Dirección Administrativa</h3>
        <h3 class="transparencias"><b>Dpto. de Gestión de RRHH.</b></h3>
        <h2  class="transparencias">Encuesta de Relevamiento</h2>
        <br>
        <a href="#top" class="btn btn-dark btn-lg">Comenzar</a>
    </div>
</header>

<section id="item1" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h3>
                    <i>La encuesta es una técnica para el relevamiento de datos. Permitirá conocer su opinión respecto de su puesto y lugar de trabajo. Para ello es fundamental que le brinde la mayor importancia y honestidad es sus respuestas ya que estos datos nos servirán para evaluar alternativas de solución y pensar en estrategias que puedan mejorar su labor diaria.
                    <b>Esta encuesta es <u>anónima</u></b> y no persigue otro objetivo final y general más  que mejorar el trabajo de todos los colaboradores del Ministerio de Salud Pública.</i>
                    <input  type="checkbox" id="leido" name="leido" value="1"><u>He leido este enunciado.</u>
                </h3>
        </div>
        <!-- /.row -->
    </div>
        </div>
    <!-- /.container -->
</section>

<section id="item2" class="services bg-info">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-10 col-lg-offset-1">
                <h2> 1 - Responda los siguientes campos y seleccione el que corresponda.</h2>
                <hr class="small">
                <div class="col-lg-12" >
                    <form id="1" name="1" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Zona Sanitaria</label>
                            <div class="col-sm-9">
                                <select name="cb_zona" id="cb_zona" class="form-control">
                                    <option value="0" selected>Seleccione...</option>
                                </select>
                            </div>
                        </div> <!-- /.form-group -->
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
                                <div class="checkbox">
                                    <label>
                                        <input  onclick="javascript:cantidadSeleccionados2(this);" type="checkbox" id="primario" name="primario" value="1">Primario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input  onclick="javascript:cantidadSeleccionados2(this);" type="checkbox" id="secundario" name="secundario" value="1">Secundario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input  onclick="javascript:cantidadSeleccionados2(this);" type="checkbox" id="terciario" name="terciario" value="1">Terciario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input  onclick="javascript:cantidadSeleccionados2(this);" type="checkbox" id="universitario" name="universitario" value="1">Universitario
                                    </label>
                                </div>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Puesto que ocupa</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="50" value="" id="puesto" name="puesto" placeholder="Puesto que ocupa" class="form-control" autofocus>
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

                    </form> <!-- /form -->
                </div>

            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section id="item3" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>2 - Para cada afirmación marque la casilla correspondiente al numero que mejor identifica su opinion.</h2>
                <hr class="small">
                <div class="row ">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-center">
                                <th class="text-center">CALIFICACION</th>
                                <th class="text-center">PUNTUACION</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>No sabe / No contesta</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Totalmente en desacuerdo</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>En Desacuerdo</td>
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
                    <div class="col-md-3"></div>
                </div>
                <!-- /.row (nested) -->
                <div class="row">
                    <div class="col-md-12 text-left">
                        <form id="2" name="2">
                            <table class="table table-striped">
                                <thead>
                                <tr>
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
                                <tr>
                                    <td>Tengo conocimientos especificos sobre cuales son mis tareas y funciones.</td>
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

                                <tr>
                                    <td>Conozco los objetivos funciones y procesos que tiene el área en la que me desempeño.</td>
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

                                <tr>
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

                                <tr>
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


                                </tbody>
                            </table>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Respecto a mi Jefe o Superior</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr>
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

                                <tr>
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

                                <tr>
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

                                <tr>
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
                                <tr>
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

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Respecto Medioambiente de trabajo</th>
                                    <th class="text-center">NS / NC</th>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!--Pregunta 1-->
                                <tr>
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

                                <tr>
                                    <td>Mi lugar de trabajose encuentra limpio y ordenado.</td>
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

                                <tr>
                                    <td>Trabajo en un ambiente amigable y de trato cordial.</td>
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


                                </tbody>
                            </table>

                            <table class="table table-striped">
                                <thead>
                                <tr>
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
                                <tr>
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

                                <tr>
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

                                <tr>
                                    <td>Tengo fácil acceso a novedades y comunicaciones que se realizan a nivel central.</td>
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

<?php
if($tipo==1) {
    echo '<section id = "item4" class="map bg-success" >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-10 col-lg-offset-1 text-center" >
                <h2 >
    3 - Que temas de los de abajo enumerados serian de prioridad para capacitar a los colaboradores de su equipo .
    Por favor seleccione solo <b>4</b > de los que considere mas relevantes .
                </h2 >
                <form id = "3" name = "3" >
                <table class="table table-striped" style = "border: 1px solid #000" >
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
                        <td > Comunicación efectiva </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_7" name = "Option_7" value = "1" >
                            </label >
                        </td >
                        <td > Planificación Estrategica </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_8" name = "Option_8" value = "1" >
                            </label >
                        </td >
                    </tr >

                    <tr >
                        <td > Oratoria</td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_9" name = "Option_9" value = "1" >
                            </label >
                        </td >
                        <td > Gestión del talento </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_10" name = "Option_10" value = "1" >
                            </label >
                        </td >
                    </tr >

                    <tr >
                        <td > Office(Word, Excel)</td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_11" name = "Option_11" value = "1" >
                            </label >
                        </td >
                        <td > Clima Laboral </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_12" name = "Option_12" value = "1" >
                            </label >
                        </td >
                    </tr >

                    <tr >
                        <td > Manejo de correo electrónico </td >
                        <td >
                            <label class="radio-inline" >
                                <input class="zoom" onclick="javascript:cantidadSeleccionados(this);" type = "checkbox" id = "Option_13" name = "Option_13" value = "1" >
                            </label >
                        </td >
                        <td > Otros(Describa)</td >
                        <td >
                            <label class="radio-inline" >
                                <input maxlength="20" type = "text" id = "Option_14" placeholder="Otro" name = "Option_14" >
                            </label >
                        </td >
                    </tr >

                    </tbody >
                </table >
                </form >
            </div >
        </div >
    </div >
</section >';
}
?>

<?php
if($tipo==1) {
    echo '<section id="item5" class="map bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>
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
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_6" name="Option_6" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_7" name="Option_7" value="1">
                            </label>
                        </td>
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_8" name="Option_8" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Oratoria</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_9" name="Option_9" value="1">
                            </label>
                        </td>
                        <td>Gestión del talento</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_10" name="Option_10" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Office (Word, Excel)</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_11" name="Option_11" value="1">
                            </label>
                        </td>
                        <td>Clima Laboral</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_12" name="Option_12" value="1">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Manejo de correo electrónico</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_13" name="Option_13" value="1">
                            </label>
                        </td>
                        <td>Otros (Describa)</td>
                        <td>
                            <label class="radio-inline">
                                <input maxlength="20" type="text" id="Option_14" placeholder="Otro" name="Option_14" >
                            </label>
                        </td>
                    </tr>

                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</section>';
}
?>



    <section id="fin" class="map bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>
                    <?php if($tipo==1) { echo '5'; }else{echo '3';}?> - Por favor, en las siguientes lineas escriba comentarios,
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
</section>

<div class="col-md-12">
    <div class="row text-center">
        <div id="fin_encuesta" class="btn btn-primary">Finalizar encuesta</div>
    </div>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4>
                    Su colaboración es muy valiosa para nosotros.<br>
                    <strong>Dpto. Gestión de RRHH - MSP</strong>
                </h4>
                <p>Argentina
                    <br>San Juan</p>
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
    var cant_formacion = 1;

    function add_options2()
    {
        var op_ley = '<div style="margin:0 !important; border: solid 1px #ccc; border-radius: 8px;" id="op_ley" class="form-group">'+
            '<label class="control-label col-sm-4">Indique en que categoria encuadra mejor sus funciones.</label>'+
            '<div class="col-sm-8">'+
            '<div class="row">'+
            '<div class="col-sm-4">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="1">Servicios Generales / Maestranza'+
            '</label>'+
            '</div>'+
            '<div class="col-sm-4">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="2">Funciones Administrativas'+
            '</label>'+
            '</div>'+
            '<div class="col-sm-4">'+
            '<label class="radio-inline">'+
            '<input type="radio"  name="cat" value="3">Responsable o Jefe de Sector/Área con personal a cargo'+
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
            '<label class="control-label col-sm-4">Ley</label>'+
        '<div class="col-sm-8">'+
        '<div class="row">'+
        '<div class="col-sm-4">'+
        '<label class="radio-inline">'+
        '<input type="radio"  onclick="add_options2();"  name="ley" value="0">71Q'+
        '</label>'+
        '</div>'+
        '<div class="col-sm-4">'+
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

    function cantidadSeleccionados2(control)
    {
        var x =($(control).is(':checked'))

        if( x == false)
        {
            cant_formacion--;
            return;
        }

        if(cant_formacion > 1 )
        {
            $(control).prop("checked", false)
            alert("Ha superado el máximo permitido");
        }
        else
        {
            cant_formacion++;
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
        var primario = $('input[name=primario]:checked').val();
        var secundario = $('input[name=secundario]:checked').val();
        var terciario = $('input[name=terciario]:checked').val();
        var universitario = $('input[name=universitario]:checked').val();
        var siatuacion = $('input[name=situacion_trabajo]:checked').val();

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

        var a2 = $('input[name=2a]:checked').val();
        var b2 = $('input[name=2b]:checked').val();
        var c2 = $('input[name=2c]:checked').val();
        var d2 = $('input[name=2d]:checked').val();
        var e2 = $('input[name=2d]:checked').val();

        var a3 = $('input[name=3a]:checked').val();
        var b3 = $('input[name=3b]:checked').val();
        var c3 = $('input[name=3c]:checked').val();

        var a4 = $('input[name=4a]:checked').val();
        var b4 = $('input[name=4b]:checked').val();
        var c4 = $('input[name=4c]:checked').val();


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
        var Option_12 = $("#4").find('input[name=Option_12]:checked').val();
        var Option_13 = $("#4").find('input[name=Option_13]:checked').val();




        if( typeof(leido) == 'undefined') {alert("Indique si ha leido el enunciado."); return false; }

        if( $("#cb_zona").val()==0) {alert("Seleccione una zona sanitaria."); return false; }
        if( $("#cb_areaprog").val()==0) {alert("Seleccione un área programática."); return false; }
        if( $("#fechanac").val()=="") {alert("Proporcione una fecha de nacimiento."); return false; }
        if( typeof(sexo) == 'undefined') {alert("Seleccione tipo de sexo."); return false; }


        if( cant_formacion <= 1)
        {
            alert("Seleccione al menos una opción sobre el ítem de formación.");
            return false;
        }

        if( cant_formacion > 2)
        {
            alert("Seleccione solo un ítem sobre formación.");
            return false;
        }

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


        if( typeof(siatuacion) == 'undefined') {alert("Indique su situación laboral."); return false; }



        if( typeof(a1)  == 'undefined' ||
            typeof(b1) == 'undefined' ||
            typeof(c1) == 'undefined' ||
            typeof(d1) == 'undefined')
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
            typeof(c3) == 'undefined' )
        {
            alert("Hay opciones sin seleccionar en el Item 2.");
            return false;
        }

        if( typeof(a4) == 'undefined' ||
            typeof(b4) == 'undefined' ||
            typeof(c4) == 'undefined' )
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
                typeof(Option_11) == 'undefined' &&
                typeof(Option_12) == 'undefined' &&
                typeof(Option_13) == 'undefined') {
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
                        $("#myModal").find(".modal-body").append("<h3>Muchas gracias por su colaboración, es muy valiosa para el MPS.!</h3><p> código comprobante: "+response.code+"</p><p>"+response.fecha+"</p>");
                        $("#myModal").modal();

                        setTimeout(function(){
                            window.location.reload();
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
