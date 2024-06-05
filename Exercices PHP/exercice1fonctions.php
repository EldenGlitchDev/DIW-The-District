<?php
    function generateLink($url,$anchorText){
        //Echappe les caractères spéciaux pour éviter les failles XSS(Cross-site Scripting -> consiste à utiliser une palteforme vulnérable pour introduire un script malveillant aux internautes (définition MDN))
        //OPTIONNEL CAR NON VU EN COURS !!!!!!!!
        $url=htmlspecialchars($url,ENT_QUOTES, 'UTF-8');
        $anchorText=htmlspecialchars($anchorText, ENT_QUOTES, 'UTF-8');
        
        //Retourne la balise <a> correctement formatée
        return "<a href=\"https://www.reddit.com\">$anchorText</a>";
    }

    //Utilisation de la fonction
    $url="https://www.reddit.com";
    $anchorText="Reddit Hug";
    $link=generateLink($url,$anchorText);
    echo $link;
?>

