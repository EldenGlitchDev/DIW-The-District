<?php
/*echo time();
echo "<br>";
echo date("l");
echo "<br>";
echo date("Y.m.d");
echo "<br>";
echo date("H:i:s");*/

date_default_timezone_set("Europe/Paris");
$Date= DateTime::createFromFormat("d/m/Y H:i:s", "14/07/2019");
echo $date;


/*$numero_semaine=date("W", $timestamp);
echo "le numéro de la semaine est ". $date;*/

?>