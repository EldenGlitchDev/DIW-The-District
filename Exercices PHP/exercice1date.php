<?php
/*echo time();
echo "<br>";
echo date("l");
echo "<br>";
echo date("Y.m.d");
echo "<br>";
echo date("H:i:s");*/

date_default_timezone_set("Europe/Paris");
$date= new DateTime('2019-07-14');
$weekNumber = $date->format('W');
echo "Numéro de semaine est : $weekNumber";




?>