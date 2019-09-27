<?php
/*
    if ($lien[0]==basename(__FILE__)){

    }
    // penser à fonction pour afficher lien menu actif( sortir foreach);

   $page_active=($_SERVER["REQUEST_URI"]);
*/
//fonction titre navbar actif
$navigation = [
    "Accueil" => ["/index.php"],
    "Produits" => ["/product.php"],
    "Contact" => ["/contact.php"],
];
function navbar($tableau)
{


    foreach ($tableau as $nom => $lien) {
        if ($lien[0] == ($_SERVER["REQUEST_URI"])) {

            echo "<li ><a id='actif' class=\"nav-link\"  href=\"$lien[0]\"> $nom</a>";
        } else {
            echo "<li id=''><a  class=\"nav-link\"  href=\"$lien[0]\"> $nom</a>";
        }
    }
}

;
//page en cours
define('pagencours', $_SERVER['PHP_SELF'], true);
$pages = pagencours;

//fonction contact

$tableaucontact = [
    "Nom :" => ["name"],
    "Prénom :" => ["first-name"],
    "Email :" => ["email"],
    "Téléphone" => ["phone"],
    "Adresse" => ['adress']
];
function contact($tableau)
{
    foreach ($tableau as $valeur => $id) {
        echo "<div class=\"col-12 col-md-6\">
                        <label for=\"$id[0]\"> $valeur </label>
                        <input type=\"text\" name=\"$id[0]\" id=\"$id[0]\" class=\"form-control\" required>
                    </div>";
    }
}

;
// fonctions titre onglet

function onglet($tableau)
{
    foreach ($tableau as $nom => $lien) {
        if ($lien[0] == ($_SERVER["REQUEST_URI"])) {
            echo "<title> $nom </title>";

        }
    }
}


?>