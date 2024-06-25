<?php
//date_default_timezone_set("Europe/Paris");
$aujourdhui=date_create(date("Y-m-d")); //date d'aujourd'hui créée avec date_create
$fin_de_formation=date_create("2024-08-04"); //date de la fin de formation
$interval=date_diff($aujourdhui, $fin_de_formation); //l'intervale entre la date d'aujourd'hui et la date de fin de formation
$jours_restants = $interval->days; //la variable $jours_restants (la flèche '->' est la propriété de $interval)
echo "Il reste $jours_restants jours avant la fin de la formation.";
?>