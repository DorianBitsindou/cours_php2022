<!doctype html>
<html lang="fr">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
     integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <!-- font google -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 -introduction</title>
    <!-- mes style -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body class ="bg-dark">
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours_php2022</h1>
        <p class="lead">PHP signifie aujourd'hui Hypertext Preprocessor</p>
    </div>

    <div class="row">
        <?php
            require('../inc/sidenav.inc.php'); //ici on appelle le fichier sidenav.inc.php.
        ?>
        <!-- ======================================================================== -->
        <!-- Contenu principal -->
        <!-- ======================================================================== -->

        <div class="col-sm-8">
            <main class="container-fluid">
                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center">1-Introduction</h2>
                    <!-- ouverture de la div -->
                    <div class="col-sm-12 col-lg-4">
                        <p>Pour parvenir à la réalisation de sites dynamiques, nous allons aborder successivements les points suivants :</p>
                        <ul>
                            <li>De connaître la syntaxe et les caracteristiques du language PHP</li>
                            <li>Les notions essentielles du language SQL permettant la création et la gestion d'une BDD et la réalisation des requêtes de bases</li>
                            <li>Le fonctionnement et la réalisation de BDD MYSQL et les moyens d'y accéder à l'aide de fonctions spécialitées de PHP(ou objet)</li>
                        </ul>
                    </div>
                    <!-- fermeture de la div -->

                    <div class="col-sm-12 col-lg-4">
                        <p>PHP permet en outre de créer des pages instructives. Une page personnelles. Ces dernières sont ensuite transmises au serveur, où elles peuvent rester stockées dans une base de données pour être diffusées vers d'autres utilisateurs. Un visiteur peut par exemple, s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultériere. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toutes ces caracteristiques,il est possible de créer aussi bien des sites d'e-commerces, de rencontres ou des blogs</p>
                    </div>
                    <!-- fin de la div -->

                    <div class="col-sm-12 col-lg-14">
                        <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une base de données, généralement MYSQL mais aussi SQLite, et sur des serveur Apache. PHP, MYSQL et Apache forment d'ailleurs le trio ultra dominant sur les serveurs internet. Quand ce trio est associé sur un serveur à Linux, on parle de système LAMP (Linux, Apache, Mysql, et PHP). PHP est utilisé aujourd'hui par plus des trois quarts des sites dynamiques de la planète et par les trois quarts des grandes entreprises françaises. Pour un serveur Windows, On parle de systèmes WAMP, mais ceci est beaucoup moins courant</p>
                    </div>
                    <!-- fin de la div -->

                    <div class="col-sm-12 col-lg-6">
                        <p>Avec le code suivant s'écrit dans un ficher nommé info.php, placé dans le serveur d'évacuation, on obtient toutes les infos sur le PHP éxécuter dans ce serveur. 

                        </p>
                    </div>
                
                    <div class="alert alert-success">
                        <?php
                        echo "<p>Bienvenue sur le site de cours de PHP7</p>";
                        ?>

                        <?php
                        echo "<p>Aujourd'hui nous somme le " . date("d/m/Y") . "</p>";
                        ?>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <h3>Le cycle de vie d'une page PHP</h3>
                        <ul>
                            <li>Envoi d'une rêquete HTML par le navigateur client vers le serveur du type http://www.monserveur.fr.page.php</li>
                            <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
                            <li>Envoi par le serveur d'un fichier dont le contenu est purement du HTML</li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center">2-Inclure des fichers externes</h2>
                            <table class="table table-striped" id="tableau1">
                                <thead>
                                    <tr>
                                        <th scope="col">Fonction</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>include("nom-ficher.php")</td>
                                            <td>Lors de son interpretation par le serveur, cette ligne est remplacée par tout le contenu du ficher précisé en paramètre, dont vous fournissez le nom et éventuellemnt l'adresse complète. En cas d'erreur, par exemple si le ficher n'est pas trouvé, include() ne génère qu'une alerte (un warning), et script continue. </td>
                                        </tr>
                                        <tr>
                                            <td>require("nom-fichier.php")</td>
                                            <td>A désormais une comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur fatale et met fin au script</td>
                                        </tr>
                                        <tr>
                                            <td>include_once("nom-fichier.php")</td>
                                            <td>Contrairement aux deux précédentes, ces fonctions ne sont pas éxécutées plusieurs fois, même si elles figurent dans une boucle ou si elles sont déjà éxécutées une fois dans le codequi précède</td>
                                        </tr>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- fin de la row(rangée) -->

                    <br><br>
                </div>
            </main>
        </div>
        <!-- fin de la partie principale, col-8 -->

        <div class="col-sm-2 aside">

        </div>

    </div>

        <?php
            require('../inc/sidenav.inc.php'); //ici on appelle le fichier sidenav.inc.php.
        ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="../inc/sidenav.js"></script>
  </body>
</html>
