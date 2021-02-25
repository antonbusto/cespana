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
        echo "Campeonato de Espa&ntilde;a Individual Absoluto - Palmar&eacute;s";
        break;
    case 2:
        echo "Campeonato de Espa&ntilde;a Individual Femenino - Palmar&eacute;s";
        break;
    case 3:
        echo "Campeonato de Espa&ntilde;a Individual Abierto - Palmar&eacute;s";
        break;
    case 4:
        echo "Campeonato del Mundo Oficial 1886 - 1993 - Palmar&eacute;s";
        break;
    case 5:
        echo "Campeonato del Mundo FIDE 1993 - 2006 - Palmar&eacute;s";
        break;
    case 6:
        echo "Campeonato del Mundo Cl&aacutesico 1993 - 2006 - Palmar&eacute;s";
        break;
    case 7:
        echo "Campeonato del Mundo FIDE - Palmar&eacute;s";
        break;
    case 8:
        echo "Campeonato del Mundo no oficial - Palmar&eacute;s";
        break;
    case 9:
        echo "Campeonato del Mundo Femenino FIDE - Palmar&eacute;s";
        break;
    case 10:
        echo "Campeonato Iberoamericano Individual Absoluto - Palmar&eacute;s"; 
        break;
    case 11:
        echo "Campeonato de Espa&ntilde;a R&aacute;pido - Palmar&eacute;s"; 
        break;
    case 12:
        echo "Campeonato de Espa&ntilde;a Rel&aacute;mpago - Palmar&eacute;s"; 
        break;
    case 13:
        echo "Campeonato de Espa&ntilde;a R&aacute;pido Femenino - Palmar&eacute;s"; 
        break;
    case 14:
        echo "Campeonato de Espa&ntilde;a Rel&aacute;mpago Femenino - Palmar&eacute;s"; 
        break;
    default:
        echo "No fue posible seleccionar un t&iacute;tulo";
        break;
}
?>  
   </title>
   <meta name="description" content="Listado cuenta campeonatos ordenado por fecha palmar&eacute;s. Biografias, fotos, partidas, pgn y datos de detallados de los ganadores">
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
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Absoluto - Palmar&eacute;s</h1>";
        break;
    case 2:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Femenino - Palmar&eacute;s</h1>";
        break;
    case 3:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Individual Abierto - Palmar&eacute;s</h1>";
        break;
    case 4:
        echo "<h1 class='titular text-center'>Campeonato del Mundo Oficial 1886 - 1993 - Palmar&eacute;s</h1>";
        break;
    case 5:
        echo "<h1 class='titular text-center'>Campeonato del Mundo FIDE 1993 - 2006 - Palmar&eacute;s</h1>";
        break;
    case 6:
        echo "<h1>Campeonato del Mundo Cl&aacutesico 1993 - 2006 - Palmar&eacute;s</h1>";
        break;
    case 7:
        echo "<h1 class='titular text-center'>Campeonato del Mundo FIDE - Palmar&eacute;s</h1>";
        break;
    case 8:
        echo "<h1 class='titular text-center'>Campeonato del Mundo no oficial - Palmar&eacute;s</h1>";
        break;
    case 9:
        echo "<h1 class='titular text-center'>Campeonato del Mundo Femenino FIDE - Palmar&eacute;s</h1>";
        break;
    case 10:
        echo "<h1 class='titular text-center'>Campeonato Iberoamericano Individual Absoluto - Palmar&eacute;s</h1>"; 
        break;
    case 11:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a R&aacute;pido - Palmar&eacute;s</h1>"; 
        break;
    case 12:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Rel&aacute;mpago - Palmar&eacute;s</h1>"; 
        break;
    case 13:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a R&aacute;pido Femenino - Palmar&eacute;s</h1>"; 
        break;
    case 14:
        echo "<h1 class='titular text-center'>Campeonato de Espa&ntilde;a Rel&aacute;mpago Femenino - Palmar&eacute;s</h1>"; 
        break;
		
    default:
        echo "<h1 class='titular text-center'>No fue posible seleccionar un t&iacute;tulo</h1>";
        break;
}
try {
   $conn = new PDO('mysql:host=.webapps.net;dbname=', '', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

$stmt = $conn->prepare('SELECT campeon.idCampeon, titulo.titulo, campeon.nombre, campeon.apellido1, campeon.apellido2, campeon.foto, count( * ) 
FROM campeonato, titulo, campeon
WHERE campeonato.idTitulo = titulo.idTitulo
AND campeonato.idCampeon = campeon.idCampeon
AND campeonato.idTitulo = :idTitulo
GROUP BY campeon.idCampeon
ORDER BY COUNT(*) DESC , campeon.apellido1 ');
    $stmt->bindParam(':idTitulo', $titulo, PDO::PARAM_INT);

    $stmt->execute();

    echo "<br>
	<div class='table-responsive'>
	<table class='table table-hover table-striped table-bordered'><tr>
        <th>&nbsp;</th>
	    <th>Nombre</th>
        <th>Cantidad</th>
        </tr>";

    // fetch() obtiene la siguiente fila de un conjunto de resultados
    // fetchAll() devuelve un array que contiene todas las filas de un conjunto
    //de resultados

    while ($datos = $stmt->fetch()) {

        echo "<tr>
<td><a href='listado-campeon-detalle.php?idCampeon=" . $datos[0] . "&idTitulo=" . $titulo.  "'>" . "<img src='fotos-campeones/" . $datos[5] . "' width='55' height='55' class='img-responsive img-circle center-block persona' title='" . $datos[2] . " " . $datos[3] . " " . $datos[4] ."'></a></td>        
<td><a href='listado-campeon-detalle.php?idCampeon=" . $datos[0] . "&idTitulo=" . $titulo.  "'>" . $datos[3] . " " . $datos[4] . ", " . $datos[2] . "</a></td>
<td>$datos[6]</td>  
</tr>";
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