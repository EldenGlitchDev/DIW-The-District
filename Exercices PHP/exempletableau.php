<?php
$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");
echo $tab1[0][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; 
foreach($tab1 as $key=>$value){
    foreach($value as $mois){
    echo $mois;}
echo "<br>";}
?>