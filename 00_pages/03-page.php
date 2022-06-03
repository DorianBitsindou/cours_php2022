<!DOCTYPE html>
<?php
$variable1 = "la page faite avec des fichiers en inc.";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
       echo "<title>Page faite avec des fichiers en inc.</title>";
    ?>
</head>
<body>
<?php

    echo "<div>
    <h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">Bienvenue sur $variable1</h1>
    </div>";
    //commentaire php sur une ligne
    /* Ceci est un commentaire 
    PHP sur plusieurs lignes */
    
    #********************
    #Ceci est aussi un commentaire PHP sur plusieurs lignes
    #********************
    echo "<div>
    <p>Une fonction qui donne le nom du fichier : " . $_SERVER['PHP_SELF'] ." </p>
    </div>";

?>

<?php
    define("PI", 3.1415926535, TRUE); // définition insensible à la casse (le nom de la variable), parce qu'on a mis TRUE
    echo "La constante PI vaut ".PI."<br>";
    echo "La constante pi vaut ".PI."<br>";

    // vérification de l'existence de la constante

    if(defined("PI")) echo "la constante est déjà définie. <br>";
    // if(defined("pi")) echo "la constante est déjà définie. <br>"
    // ici, on demande : si la variable est déjà définie, lance cet echo

    define("sitepsg", "https://www.psg.fr", FALSE);
    echo "L'URL du site PSG : ".sitepsg."<br>";
    // ICI la variable ne fonctionne pas car on a utilisé le booléen FALSE qui prend en compte la casse

    echo "Visitez le site du <a href=\" ".sitepsg." \" target=\"blank\">PSG</a>"
?>