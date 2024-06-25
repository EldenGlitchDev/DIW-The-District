<?php
/*$date="32-17-2019"; //date erronnée
$formatDate=DateTime::createFromFormat('d-m-Y', $date);

if(!$formatDate){
    echo "$date La date est eronnée";
}
else{
    echo "$date La date est correcte";
}*/


$date = "32-17-2019"; // date erronnée
list($day, $month, $year) = explode("-", $date);

if (!checkdate($month, $day, $year)) {
    echo "$date La date est erronnée";
} else {
    echo "$date La date est correcte";
}
?>

