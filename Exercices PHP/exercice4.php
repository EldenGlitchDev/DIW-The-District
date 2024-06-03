<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
<!--</head>
<body>
    <table>
        <caption>Tableau PHP</caption>
        <thhead>
        <tr>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>1</th>
        </tr>
        <tr>
            <th>2</th>
        </tr>
        <tr>
            <th>3</th>
        </tr>
        <tr>
            <th>4</th>
        </tr>
        <tr>
            <th>5</th>
        </tr>
        <tr>
            <th>6</th>
        </tr>
        <tr>
            <th>7</th>
        </tr>
        <tr>
            <th>8</th>
        </tr>
        <tr>
            <th>9</th>
        </tr>
        <tbody>
    </table>-->

<?php

$Nbrcol=9;
$Nbrligne=9;

echo '<table border="1" width="700"';

    echo '<tr>';
    echo '<td>0</td>';

    for($c=1;$c<=$Nbrcol;$c++){
        echo '<td>'.$c.'</td>';
    }
    echo '</tr>';

    /*for ($l=1;$l<$Nbrligne;$l++){
        echo '<tr>';
            for ($c=1;$c<$Nbrcol;$c++){
                switch($j==1){
                case 0:
                    echo"$j==1";
                break;
                case 1:
                    echo"$i==$j";
                break;
                }

            echo $l*$c;
            echo '</td>';
            }
    echo ''
    }*/

    for($l=1;$l<=$Nbrligne;$l++) {
        echo '<tr>';
        for ($c=1; $c<=$Nbrcol; $c++) {
           
           if ($c==1) {
              echo '<td>'.$l.'</td>';
           }
              if ($l==$c) {
                 echo '<td>';
              } else {
                 echo '<td>';
              }
           echo $l*$c;
           echo '</td>';
        }
        echo '</tr>';
        $c=1;
     }
     echo '</table>';
     ?>


</body>
</html>