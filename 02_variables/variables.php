<!doctype html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 - Introduction</title>
    <!-- Mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="jumbotron bg-secondary text-center">
        <h1 class="display-3 pt-3">Cours_php2022</h1>
        <p class="lead pb-3">PHP signifie aujourd'hui Hypertext Preprocessor</p>
    </div>

    <div class="row">

        <?php
        require('../inc/sidenav.inc.php'); //ici on appelle le fichier sidenav.inc.php
        ?>

        <!-- ========================================================= -->
        <!-- Contenu principal -->
        <!-- ========================================================= -->
        <div class="col-sm-8">
            <main class="container-fluid">
                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definition"><u>1-Définition</u></h2>
                    <div class="col-sm-12 col-lg-4">
                        <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar($) suivi du nom de la variable. Les règles de création des noms de variables sonty les suivants :</p>
                        <ul>
                            <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret bas (_).</li>
                            <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                            <li>Les fonctions n'ont pas les mêmes attentes , par exemple : <code> __FILE__
                                </code>, qui permet d'afficher le chemin complet :
                                <?php
                                echo "Nom du fichier inclus:" . __FILE__;
                                ?>
                            </li>
                            <li>La longueur du nom n'est pas limité mais il convient d'être raisonnable sous peine de confusion dans la saisie du code . Il est conseillé de créer des noms de variable le plus "parlant" possible .en réalisant le code contenant la variable <code>$nomClient</code>, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit <code>$x</code> ou <code>$y</code>.</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <ul>
                            <li>La déclaration des variables n'est pas obligatoire en début de script. C'est là une différence notable avec les langages fortement typés comme Java ou C. Vous pouvez créer des variables n'importe où, à condition bien sûr de les créer avant de les utiliser, même s'il reste possible d'appeler une variable qui n'existe pas sans provoquer d'erreur.</li>
                            <li>L'initialisation des variables n'est pas non plus obligatoire et une variable non initialisée n'a pas de type précis.</li>
                            <li>Les noms des variables sont sensibles à la casse (majuscules et minuscules). $mavar et $MaVar ne désignent donc pas la même variable.</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h5>a. Les noms de variables suivants sont corrects</h5>
                        <ul>
                            <li>$mavar</li>
                            <li>$_mavar</li>
                            <li>$mavar2</li>
                            <li>$M1</li>
                            <li>$_123</li>
                        </ul>
                        <h5>b. Les noms de variables suivants sont illégaux</h5>
                        <ul>
                            <li>$*mavar</li>
                            <li>$5_mavar</li>
                            <li>$mavar2+</li>
                        </ul>
                    </div>
                </div><!-- fin de la rangée -->

                <hr>

                <div class="row">
                    <h2 class="col-sm-12 text-center" id="affectation"><u>2-Affectation</u></h2>
                    <div class="col-sm-12">
                        <p>L'affection consiste à, donner un valeur à une variable. Lors de la création de variable, vous ne déclarez pas son type. C'est la valeur que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou par référence. </p>
                        <ul>
                            <li>$mavar=75;</li>
                            <li>$mavar="Paris";</li>
                            <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat</li>
                            <li>$mavar=mysql_connect($a,$b,$c); // la fonction retourne une ressource</li>
                            <li>$mavar=isset($var$$($var==9)); // la fonction retourne une valeur booléenne</li>
                        </ul>
                    </div><!-- fin de la colonne -->
                </div><!--  fin de la rangée (row) -->

                <hr>

                <div class="row">
                    <h2 class="text-center col-sm-12" id="variablesPredefinies"><u>3-Les variables prédéfinies</u></h2>
                    <div class="col-sm-12">
                        <p>Le PHP dispose d'un grand nombre de variables prédéfinies qui contiennent des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les autres valeurs saisies dans un formulaire, les cookies ou les sessions.</p>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Variable</th>
                                    <th scope="col">utilisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">$GLOBALS</th>
                                    <td>Contient le nom et la variables de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau.<code>$GLOBALS["mavar"]</code> récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions par exemple)</td>
                                </tr>
                                <tr>
                                    <th scope="row">$_COOKIE</th>
                                    <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookie sont les clés de ce tableau.</td>
                                </tr>
                                <tr>
                                    <th scope="row">$_ENV</th>
                                    <td>Contient le nom et la valeur des variables d'environnements qui sont changeantes selon les serveurs.</td>
                                </tr>
                                <tr>
                                    <th scope="row">$_FILES</th>
                                    <td>Contient le nom des fichiers téléchargés à partir du poste client</tr>
                                </tr>
                                <tr>
                                    <th scope="row">$_POST</th>
                                    <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode $_POST. Les noms des champs du formulaire sont les clés dans ce tableau</td>
                                </tr>
                                <tr>
                                    <th scope="row">$_REQUEST</th>
                                    <td>Contient l4ENSEMBLE DES VARIABLES SUPERGLOBALES / $_GET, $_POST, $_COOKIE et $_FILES</td>
                                </tr>
                                <tr>
                                    <th scope="row">$_SERVER</th>
                                    <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cour d'execution. retenons les variables suivantes :
                                        <ul>
                                            <li><code>$_SERVER["HTTP_ACCESS_LANGUAGE"]</code>, qui contient le code de la ngue du navigateur client</li>
                                            <li><code>$_SERVER["HTTP_COOKIE"]</code>, qui contient le nom et la valeur des cookies lus sur le poste client</li>
                                            <li><code>$_SERVER["HTTP_HOST"]</code>, qui donne de domaine</li>
                                            <li><code>$_SERVER["HTTP_SELF"]</code>, qui contient le nom du script en cours. Nous l'utiliserons souvent dans les formulaires</li>
                                            <li><code>$_SERVER["HTTP_ADDR"]</code>, qui indique l'adresse IP du serveur.</li>
                                            <li><code>$_SERVER["QUERY_STRING"]</code>, qui contient la chaîne de la requête utilisée pour au script</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h2 class="text-center"><u>4-Les opérateurs d'affectation combinés</u></h2>
                    <p>En plus de l'operateur classique d'affectation =, il existe plusieurs opérations d'affectation combinés. Ces opérateurs réalisent à la fois une opération entre deux opérandes et l'affectation du resultat à l'opérande de gauche.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Opérateur</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">+=</th>
                                <td>Addition puis affectation :<br>
                                $x += $y équivaut à $x = $x + $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">-=</th>
                                <td>Soustraction puis affectation :<br>
                                $x -= $y équivaut à $x = $x - $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">*=</th>
                                <td>Multiplication puis affectation :<br>
                                $x *= $y équivaut à $x = $x * $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">**=</th>
                                <td>Puissance puis affectation :<br>
                                $x**=2 équivaut à $x=($x)²</td>
                            </tr>

                            <tr>
                                <th scope="row">/=</th>
                                <td>Addition puis affectation :<br>
                                $x /= $y équivaut à $x = $x / $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">%=</th>
                                <td>Modulo puis affectation :<br>
                                $x %= $y équivaut à $x = $x % $y $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">.=</th>
                                <td>Concaténation puis affectation :<br>
                                $x .= $y équivaut à $x = $x . $y<br>
                                $y peut être une expression complexe dont la valeur est une chîne de caractère.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-sm-12 px-4">
                        <h2 class="text-center"><u>5-Les constantes</u></h2>
                        <p>Vous serrez parfois à amenés à utiliser de manière répétitives des informations devant rester constantes dans toutes les pages d'un même site. Il peut s'agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l'éecrasement accidentel de ces valeurs, qui pourrait produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
                        <p>On peut définir ses constantes soi-même cf. ; pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante : 
                        <strong>boolean define(string nom_cte, divers valeur_cte, boolean casse)</strong>Voir la page <a href="../00_pages/03-page.php" target="_blank"><strong>suivante</strong></a>
                        </p>
                    </div><!--  fin de la colonne -->
                </div>
                <div class="col-sm-12 col-md-6">
                    <table class="table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Constantes</th>
                                <th scope="col">Résultats</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">PHP_VERSION</th>
                            <td>Version de PHP installé sur le serveur : 
                                <?php
                                    echo PHP_VERSION;
                                ?></td>
                            </tr>

                            <tr>
                            <th scope="row">PHP_OS</th>
                            <td>Nom du système d'explatation du serveur : 
                                <?php
                                    echo PHP_OS;
                                ?></td>
                            </tr>

                            <tr>
                            <th scope="row">DEFAULT_INCLUDE_PATH</th>
                            <td>Chemin d'accès aux fichiers par defaut : 
                                <?php
                                    echo DEFAULT_INCLUDE_PATH;
                                ?></td>
                            </tr>

                            <tr>
                            <th scope="row">__FILE__</th>
                            <td>Numéro de la ligne en cours d'execution : 
                                <?php
                                    echo __LINE__;
                                ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>                        
            </main>
        </div>

        <!-- fin de la partie principale, col-8 -->





    </div>

    <?php
    require('../inc/footer.inc.php'); //ici on appelle le fichier footer.inc.php
    ?>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!-- mon script js pour la navigation -->
    <script src="../inc/sidenav.js"></script>
</body>

</html>