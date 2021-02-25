<?php
include ('campeones/funciones.php');
$idCampeon = $_REQUEST['idCampeon'];
$idTitulo = $_REQUEST['idTitulo'];
$cuentaTitulo = '';


try {
      $conn = new PDO('mysql:host=.webapps.net;dbname=', '', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

    for ($titulo = 1; $titulo < 15; $titulo++) {
        switch ($titulo) {
            case 1:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato de Espa&ntilde;a Individual Absoluto: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 2:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato de Espa&ntilde;a Individual Femenino: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 3:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-muted'>Campeonato de Espa&ntilde;a Individual Abierto: <strong>" . $row[0] . "</strong></span><br>";
                    }
                }
                break;
            case 4:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo Oficial 1886 - 1993: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 5:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo FIDE 1993 - 2006: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 6:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo Cl&aacute;sico 1993 - 2006: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 7:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo FIDE: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 8:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo no oficial: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 9:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "Campeonato del Mundo Femenino FIDE: <strong>" . $row[0] . "</strong><br>";
                    }
                }
                break;
            case 10:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-warning' style='color:#ff9933'>Campeonato Iberoamericano Individual Absoluto: " . $row[0] . "</span><br>";
                        $iberoamericano = 1;
                    }
                }
                break;
            case 11:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-muted'>Campeonato de Espa&ntilde;a R&aacute;pido: " . $row[0] . "</span><br>";
                    }
                }
                break;
            case 12:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-muted'>Campeonato de Espa&ntilde;a Rel&aacute;mpago: " . $row[0] . "</span><br>";
                    }
                }
                break;	
            case 13:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-muted'>Campeonato de Espa&ntilde;a R&aacute;pido Femenino: " . $row[0] . "</span><br>";
                    }
                }
                break;	
            case 14:
                $sql = "SELECT COUNT(idtitulo) FROM CAMPEONATO WHERE idCampeon=";
                $sql .= $idCampeon . " AND idtitulo=" . $titulo . "";
                $resultado = $conn->query($sql);

                foreach ($resultado as $row) {
                    if ($row[0] > 0) {
                        $cuentaTitulo .= "<span class='text-muted'>Campeonato de Espa&ntilde;a Rel&aacute;mpago Femenino: " . $row[0] . "</span><br>";
                    }
                }
                break;
				default:
                $cuentaTitulo = "<p>No fue posible seleccionar un t&iacute;tulo</p>";
                break;
        }
    }

    $sql = 'SELECT campeon.*, sede.sede, estado.estado, estado.bandera 
        FROM campeon, sede, estado	
        WHERE campeon.idSede = sede.idSede
        AND campeon.idEstado = estado.idEstado
        AND campeon.idCampeon = :idCampeon';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idCampeon', $idCampeon, PDO::PARAM_INT);

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$cuenta_col = $stmt->columnCount();
    //echo $cuenta_col;
            // print_r($resultado);?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="ISO-8859-1">
            <title><?php
                foreach ($resultado as $row) {
                    echo $row['nombre'] . " " . $row['apellido1'] . " " . $row['apellido2'] . ". ";
                    if ($row['sexo'] == 'h') {
                        echo "Campe&oacute;n ";
                    } else {
                        echo "Campeona ";
                    }
                    if ($row['idEstado'] == 2) {
                        echo "de Espa&ntilde;a ";
                        if ($iberoamericano == 1) {
                            echo " e Iberoamericano ";
                        }
                    } elseif ($iberoamericano == 1) {
                        echo " Iberoamericano";
                    } else {
                        echo "del Mundo";
                    }
                    echo "&nbsp;de Ajedrez";
                }
                ?></title>
<meta name="Description" content="Campeones y campeonas de ajedrez <?php 
                    if ($row['idEstado'] == 2) {
                        echo "de Espa&ntilde;a ";
					    if ($iberoamericano == 1) {
                            echo " e Iberoamericano ";
                        }
                    } elseif ($iberoamericano == 1) {
                        echo " Iberoamericano ";
                    } else {
                        echo "del Mundo ";
					} ?>">
<meta name="author" content="Anton Busto - Antonio Jose Busto Fernandez">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/all.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/pgnyui.js"> </script>    
<script type="text/javascript" src="js/pgnviewer.js"></script> 
<link type="text/css" rel="stylesheet" href="css/board-min.css">
<link rel="stylesheet" href="css/torneo-azul-responsive.css" type="text/css" media="screen">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<style type="text/css">
#tablero-moves {
	font-size:small;
	font-weight:100;
	color:#999;
}
.ct-black-square  
{  
    background-color:silver;  
}  
.ct-white-square  
{  
    background-color: white;  
}  
.ct-board-border  
{   
    border:1px solid silver;  
}
.ct-nav-buttons{padding-top:10px;}
.ct-back, .ct-forward, .ct-start, .ct-end, .ct-play, .ct-stop{vertical-align:middle; width:1.7em !important;}
	
body { background-color : #f5f5f5;}
	
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

  #marco { background-color:#FFF; text-align:left;}
.titulos {
	font-size:1.3em;
	color:#000;
	text-align:center;
}
.marcadorT {
	font-size:4em;
	color:#000;
	text-align:center;
	text-shadow: 3px 3px 2px rgba(150, 150, 150, 1);
}
.badge {font-size:1.1em; background-color:#c0c0c0;}
.well {
		background-color:#FFF;
		padding:2px;
}
.label-success {
	background-color:#999;
	}
.label-primary {
	background-color:#006699;
	}
.label-info {
	background-color:#c0c0c0;
}
</style>


<script type="text/javascript">  
var device = navigator.userAgent
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{ 
new PgnViewer(  
  { boardName: "tablero",  
    pgnFile: '<?php echo 'pgn/'. $row['nombre'] .'-'. $row['apellido1'] . '.pgn'?>',  
    pieceSet: 'merida', 
	newlineForEachMainMove: false,
    movesFormat: 'main_on_own_line',  
    pieceSize: 35,
	autoScrollMoves: true  
  }  
);
}
else
{
new PgnViewer(  
  { boardName: "tablero",  
    pgnFile: '<?php echo 'pgn/'. $row['nombre'] .'-'. $row['apellido1'] . '.pgn'?>',  
    pieceSet: 'merida', 
	newlineForEachMainMove: false,
    movesFormat: 'main_on_own_line',  
    pieceSize: 46,
	autoScrollMoves: true  
  }  
);
}
</script> 
 <?php include_once("estadisticas.php") ?>

</head>

<body>
<?php include('navbar.php'); ?>

<?php
                foreach ($resultado as $row) {					
					echo "<h1 class='titular text-center'>" . $row['nombre'] . " " . $row['apellido1'] . ". ";
                    if ($row['sexo'] == 'h') {
                        echo "Campe&oacute;n ";
                    } else {
                        echo "Campeona ";
                    }
                    if ($row['idEstado'] == 2) {
                        echo "de Espa&ntilde;a ";
					    if ($iberoamericano == 1) {
                            echo " e Iberoamericano ";
                        }
                    } elseif ($iberoamericano == 1) {
                        echo " Iberoamericano ";				
					
					} else {
                        echo "del Mundo ";
                    }
                    echo "de Ajedrez </h1>\n";
                }
                ?>

<div class="col-sm-12">
<div class="row">

<p></p>

<div class="contidos">
<div class="row">
<p></p>
<div class="col-sm-4">

<div class="panel panel-default">
<?php
echo "<div class='panel-heading'>\n<h4 class='panel-title text-center'><strong>" . $row['nombre'] . " " . $row['apellido1'] . " " . $row['apellido2'] . "</strong></h4>\n</div>\n";
echo "<div class='panel-body'>\n";
				$ruta = "fotos-campeones/";
				if (file_exists($ruta . $row['foto'])) {
                    echo"<p class='text-center'><img src='fotos-campeones/" . $row['foto'] . "' class='img-responsive center-block img-rounded'/><span class='small'> " . $row['credito'] ."</span></p>\n";
                } else {
                    echo "<img src='" . $ruta . "no.jpg' class='img-responsive center-block img-rounded'/>";
                }

echo"<p class='text-info text-center'>Naci&oacute; "; 

                if ($row['nacimiento'] <> '0000-00-00') {
                    echo "el " . cambia($row['nacimiento']) . " en " . $row['sede'] . "<br>\n";
                } else {
                    echo " en " . $row['sede'] . "<br>\n";
                }

                if ($row['fallecimiento'] <> '0000-00-00') {
                    echo "<p class='text-info text-center'>Falleci&oacute; el " . cambia($row['fallecimiento']) . "</p>\n";
                } else {
                    echo "&nbsp; </p>\n";
                }
echo"<p class='text-center'><strong>" . $cuentaTitulo . "</strong></p>\n";
?>
<p class='text-center'>
   <?php $sql = 'SELECT * 
                 FROM campeonato 
                 WHERE campeonato.idCampeon = :idCampeon
				 ORDER BY idAno';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idCampeon', $idCampeon, PDO::PARAM_INT);

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    foreach ($resultado as $row) {
		if (($row['idTitulo'] == 1) OR ($row['idTitulo'] == 2)) {
         echo "<span class='label label-primary'>" . $row['idAno'] . "</span> ";
		} elseif (($row['idTitulo'] == 10)){
         echo "<span class='label label-warning'>" . $row['idAno'] . "</span> ";
		}
		else {
         echo "<span class='label label-info'>" . $row['idAno'] . "</span> ";
		}
    }
?>
</p>

</div><!-- /.panel-body -->
</div><!-- /.panel -->

</div><!-- /.col-sm-4 -->

<div class="col-sm-4 center-block">
<div id="tablero-container"></div>
<div id="tablero-moves"></div>
<p></p>
   <?php $sql = 'SELECT * 
                 FROM campeon 
                 WHERE idCampeon = :idCampeon';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idCampeon', $idCampeon, PDO::PARAM_INT);

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    foreach ($resultado as $row) {
         echo "<span class='label label-primary'>" . $row['idAno'] . "</span> ";
    }
?>


<p class="text-center"><a  class="btn btn-primary btn-sm" href="<?php echo 'pgn/'. $row['nombre'] .'-'. $row['apellido1'] . '.pgn'?>"><i class="fas fa-arrow-circle-down"></i></a>&nbsp;


<?php if (empty($idTitulo)) {echo "<a class='btn btn-primary btn-sm' href='listado-campeones-todos.php'><i class='fas fa-trophy'></i></a>";}
 else { echo "<a class='btn btn-primary btn-sm' href='listado-campeonatos-historial.php?idTitulo=" . $idTitulo . "'><i class='fas fa-trophy'></i></a>";} ?>


 
&nbsp;<a class='btn btn-primary btn-sm' href='campeones-espana-ajedrez.php'><i class='fas fa-sitemap'></i></a></p>
<p class="small"><a href="http://chesstempo.com/" target="_blank">Visor ChessTempo</a></p>


</div><!-- /.col-sm-4 -->

<div class="col-sm-4">
 <div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
        Resumen</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body"><?php echo $row['notas']; ?></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
        Biograf&iacute;a</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><?php echo "<a href='" . $row['url'] . "' target='_blank'>Wikipedia</a>";?></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
        Enlaces</a></h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse in">
<div class="panel-body">
   <?php $sql = 'SELECT * 
                 FROM enlaces 
                 WHERE enlaces.idCampeon = :idCampeon
				 ORDER BY texto';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idCampeon', $idCampeon, PDO::PARAM_INT);

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    foreach ($resultado as $row) {
         echo "<p><a href='" . $row['enlace']. "' target='_blank'>" . $row['texto'] . "</a></p>\n";
    }
		?>
	</div>	

     </div>
  </div>
</div> 
</div>



</div>

        <?php } catch (PDOException $e) {
            echo 'Error conectando con la base de datos: ' . $e->getMessage();
        }
        ?>

</div> <!-- /.row-->
</div><!-- /contidos -->

</div><!-- /row --><!-- /container -->
<p>&nbsp;</p>
<!--<php include('footer.php'); ?> -->

</body>
</html>
