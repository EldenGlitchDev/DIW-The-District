<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<?php 
    echo "IP client: ". gethostbyname($_SERVER['REMOTE_ADDR'])."<br>";
    echo "<br>"."IP serveur: ".gethostbyname($_SERVER['SERVER_NAME']);
  ?> 
</body>
</html>