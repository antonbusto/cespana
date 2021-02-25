<?php 
$titulo = $_REQUEST['idTitulo']; 
if (empty($titulo)) {$titulo=1;}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="ISO-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>
<?php
switch ($titulo) {
    case 1:
        echo "Historial del Campeonato de Espa&ntilde;a Individual Absoluto - Listado";
        break;
    case 2:
        echo "Historial del Campeonato de Espa&ntilde;a Individual Femenino - Listado";
        break;
    case 3:
        echo "Historial del Campeonato de Espa&ntilde;a Individual Abierto - Listado";
        break;
    case 4:
        echo "Historial del Campeonato del Mundo Oficial 1886 - 1993 - Listado";
        break;
    case 5:
        echo "Historial del Campeonato del Mundo FIDE 1993 - 2006 - Listado";
        break;
    case 6:
        echo "Historial del Campeonato del Mundo Cl&aacutesico 1993 - 2006 - Listado";
        break;
    case 7:
        echo "Historial del Campeonato del Mundo FIDE - Listado";
        break;
    case 8:
        echo "Historial del Campeonato del Mundo no oficial";
        break;
    case 9:
        echo "Historial del Campeonato del Mundo Femenino FIDE";
        break;
    case 10:
        echo "Historial del Campeonato Iberoamericano Individual Absoluto"; 
        break;
    case 11:
        echo "Historial del Campeonato de Espa&ntilde;a R&aacute;pido"; 
        break;
    case 12:
        echo "Historial del Campeonato de Espa&ntilde;a Rel&aacute;mpago"; 
        break;
    case 13:
        echo "Historial del Campeonato de Espa&ntilde;a R&aacute;pido Femenino"; 
        break;
    case 14:
        echo "Historial del Campeonato de Espa&ntilde;a Rel&aacute;mpago Femenino"; 
        break;
    default:
        echo "No fue posible seleccionar un t&iacute;tulo";
        break;
}
?>  
   </title>
   <meta name="description" content="Listado detallado ordenado por fecha completo. Biografias, fotos, partidas, pgn y datos de detallados de los ganadores">
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

<?php
switch ($titulo) {
    case 1:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Absoluto - Historial</h1>";
        break;
    case 2:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Femenino - Historial</h1>";
        break;
    case 3:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Abierto - Historial</h1>";
        break;
    case 4:
        echo "<h1 class='titular text-center'>Campeonato del Mundo Oficial 1886 - 1993 - Historial</h1>";
        break;
    case 5:
        echo "<h1 class='titular text-center'>Campeonato del Mundo FIDE 1993 - 2006 - Historial</h1>";
        break;
    case 6:
        echo "<h1>Campeonato del Mundo Cl&aacutesico 1993 - 2006 - Historial</h1>";
        break;
    case 7:
        echo "<h1 class='titular text-center'>Campeonato del Mundo FIDE - Historial</h1>";
        break;
    case 8:
        echo "<h1 class='titular text-center'>Campeonato del Mundo no oficial - Historial</h1>";
        break;
    case 9:
        echo "<h1 class='titular text-center'>Campeonato del Mundo Femenino FIDE - Historial</h1>";
        break;
    case 10:
        echo "<h1 class='titular text-center'>Campeonato Iberoamericano Individual Absoluto - Historial</h1>"; 
        break;
    case 11:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a R&aacute;pido - Historial</h1>"; 
        break;
    case 12:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Rel&aacute;mpago - Historial</h1>"; 
        break;
    case 13:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a R&aacute;pido Femenino - Historial</h1>"; 
        break;
    case 14:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Rel&aacute;mpago Femenino - Historial</h1>"; 
        break;
	default:
        echo "<h1 class='titular text-center'>No fue posible seleccionar un t&iacute;tulo</h1>";
        break;
}
try {
    $conn = new PDO('mysql:host=.webapps.net;dbname=', '', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

$stmt = $conn->prepare('select edicion.edicion, titulo.titulo, ano.ano , sede.sede, campeon.idCampeon, campeon.nombre, campeon.apellido1, campeon.apellido2, campeon.foto
from campeonato, edicion, titulo, ano, sede, campeon 
where campeonato.idEdicion = edicion.idEdicion
and campeonato.idTitulo = titulo.idTitulo
and campeonato.idAno = ano.ano
and campeonato.idSede = sede.idSede
and campeonato.idCampeon = campeon.idCampeon
and campeonato.idTitulo = :idTitulo
order by campeonato.idEdicion');
    $stmt->bindParam(':idTitulo', $titulo, PDO::PARAM_INT);

    $stmt->execute();

    echo "<br>
	
	<div class='table-responsive'>
	<table class='table table-hover table-striped table-bordered'><tr>
        <th>Edici&oacute;n</th>
        <th>Sede</th>
        <th>A&ntilde;o</th>
		<th>&nbsp;</th>        
        <th>Nombre</th>
        </tr>";
    while ($datos = $stmt->fetch()) {
        echo "<tr>
        <td> $datos[edicion] </td>
        <td> $datos[sede] </td>    
        <td> $datos[ano] </td>
        <td><a href='listado-campeon-detalle.php?idCampeon=" . $datos['idCampeon'] . "&idTitulo=" . $titulo. "'><img src='fotos-campeones/" . $datos['foto'] . "' width='55' height='55' class='img-responsive img-circle center-block persona' title='" . $datos['nombre'] . " " . $datos['apellido1'] . " " . $datos['apellido2'] . "'></a></td>        
		<td> <a href='listado-campeon-detalle.php?idCampeon=" . $datos['idCampeon'] . "&idTitulo=" . $titulo. "'>" . $datos['nombre'] . " " . $datos['apellido1'] . " " . $datos['apellido2'] . "</a></td></tr>";
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