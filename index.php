<!DOCTYPE html>
<html lang="en">

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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Inicio</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>Item 1</a>
        </li>
        <li>
            <a href="#services" onclick=$("#menu-close").click();>Item 2</a>
        </li>
        <li>
            <a href="#portfolio" onclick=$("#menu-close").click();>Item 3</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Item 4</a>
        </li>

        <li>
            <a href="#contact2" onclick=$("#menu-close").click();>Item 5</a>
        </li>

        <li>
            <a href="#contact3" onclick=$("#menu-close").click();>Contact</a>
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
        <h2  class="transparencias">Encuesta de Relevamiento</h2>
        <br>
        <a href="#about" class="btn btn-dark btn-lg">Comenzar</a>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h3>
                    La encuesta es una técnica para el relevamiento de datos. Esta encuesta permitirá conocer su opinión respecto de su
                    puesto y lugar de trabajo. Para ello es fundamental que le brinde la mayor importancia y honestidad es sus respuestas
                    ya que estos datos nos serviran para evaluar alternativas de solución y pensar en estrategias que puedan mejorar su labor
                    diaria.
                </h3>


            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-info">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-10 col-lg-offset-1">
                <h2> 1 - Responda los siguientes campos y seleccione el que corresponda.</h2>
                <hr class="small">
                <div class="col-lg-12" >
                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Zona Sanitaria</label>
                            <div class="col-sm-9">
                                <select id="country" class="form-control">
                                    <option>Afghanistan</option>
                                    <option>Bahamas</option>
                                    <option>Cambodia</option>
                                    <option>Denmark</option>
                                    <option>Ecuador</option>
                                    <option>Fiji</option>
                                    <option>Gabon</option>
                                    <option>Haiti</option>
                                </select>
                            </div>
                        </div> <!-- /.form-group -->
                        <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Area Programática</label>
                            <div class="col-sm-9">
                                <select id="country" class="form-control">
                                    <option>Afghanistan</option>
                                    <option>Bahamas</option>
                                    <option>Cambodia</option>
                                    <option>Denmark</option>
                                    <option>Ecuador</option>
                                    <option>Fiji</option>
                                    <option>Gabon</option>
                                    <option>Haiti</option>
                                </select>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthDate" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Sexo</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" id="femaleRadio" value="Female">Femenino
                                        </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" id="maleRadio" value="Male">Masculino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label col-sm-3">Formación</label>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="calorieCheckbox" value="Low calorie">Primario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="saltCheckbox" value="Low salt">Secundario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="saltCheckbox" value="Low salt">Terciario
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="saltCheckbox" value="Low salt">Universitario
                                    </label>
                                </div>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Puesto que ocupa</label>
                            <div class="col-sm-9">
                                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Antiguedad(en años cumplidos)</label>
                            <div class="col-sm-9">
                                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Contratado</label>
                            <div class="col-sm-9">
                                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Planta Permanente</label>
                            <div class="col-sm-9">
                                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
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


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
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
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Respecto a mi puesto</th>
                                <th class="text-center">0</th>
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
                                        <input type="radio" id="Option_1" name="Option_1" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco los objetivos funciones y procesos que tiene el área en la que me desempeño.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco con claridad sobre cuales son los resultados que se espera de mi colaboración.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Me siento a gusto con las tareas y funciones que realizo.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="4">
                                    </label>
                                </td>
                            </tr>


                            </tbody>
                        </table>


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Respecto a mi Jefe o Superior</th>
                                <th class="text-center">0</th>
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
                                        <input type="radio" id="Option_1" name="Option_1" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco los objetivos funciones y procesos que tiene el área en la que me desempeño.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco con claridad sobre cuales son los resultados que se espera de mi colaboración.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Me siento a gusto con las tareas y funciones que realizo.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="4">
                                    </label>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Respecto Medioambiente de trabajo</th>
                                <th class="text-center">0</th>
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
                                        <input type="radio" id="Option_1" name="Option_1" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco los objetivos funciones y procesos que tiene el área en la que me desempeño.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco con claridad sobre cuales son los resultados que se espera de mi colaboración.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Me siento a gusto con las tareas y funciones que realizo.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="4">
                                    </label>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Respecto a la comunicación</th>
                                <th class="text-center">0</th>
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
                                        <input type="radio" id="Option_1" name="Option_1" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_1" name="Option_1" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco los objetivos funciones y procesos que tiene el área en la que me desempeño.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_2" name="Option_2" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Conozco con claridad sobre cuales son los resultados que se espera de mi colaboración.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_3" name="Option_3" value="4">
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>Me siento a gusto con las tareas y funciones que realizo.</td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="0">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="1">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="2">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="3">
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" id="Option_4" name="Option_4" value="4">
                                    </label>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action -->

<!-- Map -->
<section id="contact" class="map bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>
                    3 - Que temas de los ade abajo enumerados serian de prioridad para capacitar a los colaboradores de su equipo.
                    Por favor seleccione solo <b>4</b> de los que considere mas relevantes.
                </h2>

                <table class="table table-striped" style="border: 1px solid #000">
                    <thead>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trabajo en equipo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" >
                            </label>
                        </td>
                        <td>Liderazgo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gestión del Cambio</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Diversidad Generacional</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Oratoria</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Gestión del talento</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Office (Word, Excel)</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Clima Laboral</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Manejo de correo electrónico</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Otros (Describa)</td>
                        <td>
                            <label class="radio-inline">
                                <input type="text" id="Option_4" name="Option_4" >
                            </label>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="contact2" class="map bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>
                    4 - Seleccione las capacitaciones que le ayudarían a Ud. a mejorar su desempeño:
                </h2>

                <table class="table table-striped" style="border: 1px solid #000">
                    <thead>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trabajo en equipo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Liderazgo</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gestión del Cambio</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Diversidad Generacional</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Comunicación efectiva</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Planificación Estrategica</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Oratoria</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Gestión del talento</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Office (Word, Excel)</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Clima Laboral</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>Manejo de correo electrónico</td>
                        <td>
                            <label class="radio-inline">
                                <input class="zoom" type="checkbox" id="Option_4" name="Option_4" value="4">
                            </label>
                        </td>
                        <td>Otros (Describa)</td>
                        <td>
                            <label class="radio-inline">
                                <input type="text" id="Option_4" name="Option_4" >
                            </label>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="contact3" class="map bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>
                    5 - Por favor, en las siguientes lineas escriba comentarios,
                    opiniones, aclaraciones o sugerencias en torno a los temas planteados en esta encuesta.
                </h2>

                <div class="form-group">
                    <label for="comment">Comentarios:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <li><i class="fa fa-phone fa-fw"></i> (+54 0264) 4305619 / 4305575</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:msal@sanjuan.gov.ar">Area de Informática - Ministerio de Salud Pública</a>
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
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
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
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>

</body>

</html>
