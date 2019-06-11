<?php
session_start();
require './admin/lib/php/admin_liste_include.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);
?>
<!doctype html>
<html>  
    <head>
        <title>Boutique One Piece</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="./admin/lib/js/jquery.editable.js"></script>
        <script src="admin/lib/js/fonctionsJqueryDA.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/projet.css"/>
        
    </head>
    <body> 
        <header>
            <div>
                <?php
                if (file_exists('lib/php/p_menu.php')) {
                    include ('lib/php/p_menu.php');
                } else {
                    print "non";
                }
                ?>  
                <div class="haut">
                    <img src="./admin/images/drapeau.jpg">
                    <h3>Bienvenue dans la boutique One Piece !</h3>                   
                </div>
            </div>
        </header>
        <section>
            <div class="contenu">
                <?php
                if (!isset($_SESSION['page'])) {
                    $_SESSION['page'] = "accueil.php";
                }
                if (isset($_GET['page'])) {
                    $_SESSION['page'] = $_GET['page'];
                }
                $path = "./pages/" . $_SESSION['page'];
                if (file_exists($path)) {
                    include ($path);
                } else {
                    include ('./admin/pages/page404.php');
                }
                ?>
            </div>
        </section>
    </body>
</html>