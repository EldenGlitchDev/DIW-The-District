<?php
$year=2024;
$ann_bisex=date('L', mktime(0, 0, 0, 1, 1, $year));
if($ann_bisex){
    echo "L'année $year est bissextile";
}
else{
    echo "L'année $year n'est pas bissextile";
}




?>