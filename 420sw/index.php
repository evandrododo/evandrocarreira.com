<!DOCTYPE html>
<html>
<head>
  <title>It's 4:20 somewhere</title>
  <link rel="stylesheet" href="./include/jquery-jvectormap.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
  <script src="./include/jquery.min.js"></script>

    <link rel="icon" href="img/favicon-16.png" sizes="16x16">
    <link rel="icon" href="img/favicon-32.png" sizes="32x32">

  <script src="./include/jvectormap.min.js"></script>
	<script src="./include/jquery-jvectormap-world-mill-en.js"></script>


</head>
<body>

<div class="config">
<?php
include 'calcula_horarios.php';
?>

</div>
<div class="config2" draggable="true">
<?php
//mostra os 420 agora

for($i=0;$i<$i_420_now;$i++)
{
	$hora_atual=($paises_420_now[$i]["gmt_atual"]+$gm_sec);	
	echo $paises_420_now[$i]["zone_name"]." - ".gmdate("H:i",$hora_atual). "<br>";
}
?>
</div>

<div class="config3" draggable="true">>
<?php
//mostra os prox 420

for($i=0;$i<$i_proximos_420;$i++)
{
	$hora_atual=($proximos_420[$i]["gmt_atual"]+$gm_sec);	
	echo $proximos_420[$i]["zone_name"]." - ".gmdate("H:i",$hora_atual). "<br>";
}
?>
</div>


  <div id="world-map" class="world-map"></div>
  <script>
    $(function(){
      $("#world-map").mapael({
          map : {
              name : "world_countries"
          }
      });
    });
  </script>

  <script src="js/raphael/raphael-min.js" charset="utf-8" ></script>
  <script src="js/jquery.mapael.js" charset="utf-8" ></script>
  <script src="js/maps/world_countries.js" charset="utf-8" ></script>

</body>
</html>

