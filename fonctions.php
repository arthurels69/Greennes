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


// fonctions titre onglet

function onglet($tableau)
{
    foreach ($tableau as $nom => $lien) {
        if ($lien[0] === ($_SERVER["REQUEST_URI"])) {
            echo "<title> $nom </title>";

        }
    }

}

// fonction tableau

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $surnameErr = $phoneErr = $emailErr = $messageErr = "";
$name = $surname = $mail = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = 0;

    if (empty($_POST["name"])) {
        $nameErr = "*Votre nom est requis";
        $errors++;
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["firstname"])) {
        $surnameErr = "*Votre prénom est requis";
        $errors++;
    } else {
        $surname = test_input($_POST["firstname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "*Votre mail requis ";


    } else {
        $mail = test_input($_POST["mail"]);
        $errors++;
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "*Votre téléphone est requis";
        $errors++;
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "*Merci de laisser un message";
        $errors++;
    } else {
        $region = test_input($_POST["message"]);
    }
    if ($errors === 0) {
        header("location:succes.php?name=" . $_POST["name"] . "&mail=" . $_POST['mail']);

    }

}
//fonction contact

$tableaucontact = [
    "Nom :" => ["name", $nameErr],
    "Prénom :" => ["firstname", $surnameErr],
    "Email :" => ["mail", $emailErr],
    "Téléphone" => ["phone", $phoneErr],
];
function contact($tableau)
{
    foreach ($tableau as $valeur => $id) {
        echo "<div class=\"col-12 col-md-6\">
                        <label for=\"$id[0]\"> $valeur </label>
                        <input type=\"text\" name=\"$id[0]\" id=\"$id[0]\" class=\"form-control\">
                        <p> $id[1]</p>
                        <span class=\"error\"></span>
                    </div>";
    }
}

;


?>