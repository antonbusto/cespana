<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="ISO-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Campeones de Espa&ntilde;a de Ajedrez. Listado de Fichas de todos los Campeones</title>
   <meta name="description" content="Biografias, fotos, partidas, pgn y datos de detallados de los ganadores">
   <meta name="keywords" content="ajedrez, espana, mundo, absoluto, femenino, individual. abierto, campeon, campeona, historia, partida, biografia, contador, titulo, base datos">
   <link rel="icon" href="favicon.ico">
   <link rel="shortcut icon" href="favicon.ico">
   <meta name="author" content="Anton Busto - Antonio Jose Busto Fernandez">
  <meta name="robots" content="all | index | follow">
  <meta name="google-site-verification" content="OfoijYWkbEHEANYLEVXTnF7BcD_cOTxkRGYHp5IsC3g">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <style type="text/css">
	.detalle3 {background-color:#FFF;}
  .btn-group>a:hover, .btn-group>a:focus{background-color: #FFF; border-color:#FFF; color:#CCC;}
  .fa-search {background-color:transparent; color:#CCC;}
.titular {
	font-size: 1.22em;
	font-weight: bold;
	color: #006699;
	background-color: #FFFFFF;
	padding:6px;
	margin-bottom:0px;
	margin-top:10px;
}
.contidos, .menu {
	width:98%;
	margin:0 auto;
	padding:6px;
	max-width:1600px;
	margin-top:10px;
	background-color:#FFF;
}
.contidos, h1 {
	border:1px dotted #016ca2;
}  
.table > tbody > tr > td {
     vertical-align: middle;
}
  .persona {
	  min-height:20px;
	  min-width:20px;
  }

</style>
 <?php include_once("estadisticas.php") ?>
  
</head>

<body>

<?php include('navbar.php'); ?>

<div class="contidos container text-left">
<div class="col-sm-12">
<h1 class='titular text-center'>Listado de Fichas de Campeones de Espa&ntilde;a</h1>

<?php
try {
    $conn = new PDO('mysql:host=.webapps.net;dbname=', '', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

$stmt = $conn->prepare('select titulo.titulo, campeon.idCampeon, campeon.nombre, campeon.apellido1, campeon.apellido2, campeon.foto
from campeonato, titulo, campeon 
where campeonato.idTitulo = titulo.idTitulo
and campeonato.idCampeon = campeon.idCampeon
and campeonato.idTitulo IN (1,2,3,11,12,13,14)
group by campeon.apellido1') ;
    $stmt->bindParam(':idTitulo', $titulo, PDO::PARAM_INT);

    $stmt->execute();

    echo "<br>
	
	<div class='table-responsive'>
	<table class='table table-hover table-striped table-bordered'>
	    <tr>
		<th></th>
        <th>Apellidos, nombre</th>
        </tr>";
    while ($datos = $stmt->fetch()) {
        echo "<tr>
        <td><a href='listado-campeon-detalle.php?idCampeon=" . $datos['idCampeon'] . "&idTitulo=" . $titulo . "'><img src='fotos-campeones/" . $datos['foto'] . "' width='55' height='55' class='img-responsive img-circle center-block persona' title='" . $datos['apellido1'] . " " . $datos['apellido2'] . ", " . $datos['nombre'] . "'></a></td>        
		<td><a href='listado-campeon-detalle.php?idCampeon=" . $datos['idCampeon'] . "&idTitulo=" . $titulo . "'>" . $datos['apellido1'] . " " . $datos['apellido2'] . ", " . $datos['nombre'] . "</a></td></tr>";
    }

    echo "</table></div>
	
<p class='text-center'><a class='btn btn-primary btn-sm' href='campeones-espana-ajedrez.php'><i class='fas fa-sitemap'></i></a></p>
	
	";
} catch (PDOException $e) {
    echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
?>
  
</div>


</div>

<?php include('footer.php'); ?>


</body>
</html>