<?php
$dateauj=new DateTime();
$dateauj->modify('+1 month');
echo $dateauj->format('d-m-Y');
?>