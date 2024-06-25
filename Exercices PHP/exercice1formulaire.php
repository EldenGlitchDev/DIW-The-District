
<?php


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $sexe = $_REQUEST['sexe'];
    $ddn = $_REQUEST['ddn'];
    $code_postal = $_REQUEST['code_postal'];
    $adresse = $_REQUEST['adresse'];
    $ville = $_REQUEST['ville'];
    $email = $_REQUEST['email'];

echo "nom :" . htmlspecialchars($name) . "<br>";
echo "prenom :" . htmlspecialchars($prenom) . "<br>";
echo "sexe :" . htmlspecialchars($sexe) . "<br>";
echo "ddn :" . htmlspecialchars($ddn) . "<br>";
echo "code_postal :" . htmlspecialchars($code_postal) . "<br>";
echo "adresse :" . htmlspecialchars($adresse) . "<br>";
echo "ville :" . htmlspecialchars($ville) . "<br>";
echo "email :" . htmlspecialchars($email) . "<br>";

}

else {
    echo "Formulaire non soumis";
}




?>