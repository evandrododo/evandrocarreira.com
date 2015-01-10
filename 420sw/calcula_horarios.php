<?php
$gm_sec = gmdate("H")*3600 +gmdate("i")*60 + gmdate("s");

//conecta no BD
$servidor = 'localhost';
$usuario = 'root';
$senha = 'h4t3th3l1f3';
$banco = '420sw';
 
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);


$login=$_POST['login'];
$senha=$_POST['passwd'];

//consulta o ultimo time_start válido 
//No banco está guardado várias "configurações" de tempo ordenados pela data de início daquela configuração (time_start)
$consulta_tempo_valido = "
    SELECT zone_id, MAX(time_start) as time_valido
    FROM `timezone` 
    WHERE   
    time_start < UNIX_TIMESTAMP(UTC_TIMESTAMP()) 
    GROUP BY zone_id ORDER BY gmt_offset DESC";

//consulta o gmt certo de cada timezone no banco
$query = "
    SELECT tz.gmt_offset, tz.dst, z.country_code, z.zone_name  FROM 
      (".$consulta_tempo_valido.") tv,
      `timezone` tz , `zone` z 
    WHERE 
    tz.zone_id=tv.zone_id 
    AND tz.time_start=tv.time_valido
    AND z.zone_id=tz.zone_id
";
$consulta = $mysqli->prepare($query);
/* execute statement */
$consulta->execute();
/* bind result variables */
$consulta->bind_result($gmt_offset, $dst, $country_code, $zone_name);

$numrows = $consulta->num_rows;
$timezones = array();
if(!$consulta)
{
  $erro = "Nenhum dado encontrado.";
}
else
{
  $i_tz = 0;  
  while( $consulta->fetch() )
  {
    $timezones[$i_tz]["zone_name"] = $zone_name;
    $timezones[$i_tz]["country_code"] = $country_code;
    if($dst == 1)
      $timezones[$i_tz]["gmt_atual"] = $gmt_offset+3600;
    else    
      $timezones[$i_tz]["gmt_atual"] = $gmt_offset;
          
    $i_tz++;
  }
}
$paises_420_now = array();
$proximos_420 = array();

$i_420_now=0; 
$i_proximos_420=0;
for($i=0;$i<$i_tz;$i++)
{
  $hora_atual=($timezones[$i]["gmt_atual"]+$gm_sec);  
  //testa onde é maior ou igual a 4:20/16:20 e menor que 4:30/16:30 
  if(($hora_atual>=15600 && $hora_atual<16200) ||
    ($hora_atual>=58800 && $hora_atual<59400))
  {
      $paises_420_now[$i_420_now]=$timezones[$i]; 
      $i_420_now++;
  }

  //testa onde é maior que 3:20/15:20 e menor que 4:20/16:20
  if(($hora_atual>12000 && $hora_atual<15600) || ($hora_atual>55200 && $hora_atual<58800))
  { 
      $proximos_420[$i_proximos_420]=$timezones[$i];
    $i_proximos_420++;  
  }
}

//organiza por horario maior>menor
for($i=0;$i<$i_420_now;$i++)
{
  for($j=$i;$j<$i_420_now;$j++)
  {
      if($paises_420_now[$i]>$paises_420_now[$j])
      {
        $pais_aux=$paises_420_now[$j];    
        $paises_420_now[$j]=$paises_420_now[$i];    
        $paises_420_now[$i]=$pais_aux;    
      } 
  }
        
}
for($i=0;$i<$i_proximos_420;$i++)
{
  for($j=$i;$j<$i_proximos_420;$j++)
  {
      if($proximos_420[$i]>$proximos_420[$j])
      {
        $pais_aux=$proximos_420[$j];    
        $proximos_420[$j]=$proximos_420[$i];    
        $proximos_420[$i]=$pais_aux;    
      } 
  }
        
}

?>