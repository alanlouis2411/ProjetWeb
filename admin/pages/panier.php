<?php
    if(isset($_GET['conf'])){
        print "<meta http-equiv=\"refresh\": Content=\"0;URL=../admin/index_adm.php?page=formulaireClient.php\">";
    }
    if(isset($_GET['vider'])){
        $_SESSION['nbt1'] = 0;
        $_SESSION['nbt2'] = 0;
        $_SESSION['nbp1'] = 0;
        $_SESSION['nbp2'] = 0;
        $_SESSION['nbf1'] = 0;
        $_SESSION['nbf2'] = 0;
        print "<meta http-equiv=\"refresh\": Content=\"0;URL=../admin/index_adm.php?page=panier.php\">";
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <h3 class="blanc">Récapitulatif de commande :</h3>
    </head>
    <body>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">

            <?php 
                $s1 = $_SESSION['nbt1'] * 19.99;
                $s2 = $_SESSION['nbt2'] * 19.99;
                $s3 = $_SESSION['nbp1'] * 29.99;
                $s4 = $_SESSION['nbp2'] * 34.99;
                $s5 = $_SESSION['nbf1'] * 119.99;
                $s6 = $_SESSION['nbf2'] * 94.99;
                $st = $s1 + $s2 + $s3 + $s4 + $s5 + $s6;
                $_SESSION['sommetot'] = $st;
                if($_SESSION['nbt1'] == 0 && $_SESSION['nbt2'] == 0 && $_SESSION['nbp1'] == 0 && $_SESSION['nbp2'] == 0 && $_SESSION['nbf1'] == 0 && $_SESSION['nbf2'] == 0){
                    echo '<h3 class="blanc">Votre panier est vide !</h3>
                ';}
                if($_SESSION['nbt1'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/tshirt_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbt1'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s1.' €
                          </div>
                          <br><br><br>
                ';}            
                if($_SESSION['nbt2'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/tshirt2_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbt2'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s2.' €
                          </div>
                          <br><br><br>
                ';}
                if($_SESSION['nbp1'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/pull_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbp1'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s3.' €
                          </div>
                          <br><br><br>
                ';}
                if($_SESSION['nbp2'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/pull2_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbp2'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s4.' €
                          </div>
                          <br><br><br>
                ';}
                if($_SESSION['nbf1'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/good1_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbf1'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s5.' €
                          </div>
                          <br><br><br>
                ';}
                if($_SESSION['nbf2'] != 0){
                    echo '<div class="blanc">
                            <img class="gauche" src="./images/good2_petit.jpg">
                            <p class="blanc">Quantité souhaitée :</p> '.$_SESSION['nbf2'].'
                            <br>
                            <p class="blanc">Somme : </p> '.$s6.' €
                          </div>
                          <br><br><br>
                ';}
                if($_SESSION['nbt1'] != 0 || $_SESSION['nbt2'] != 0 || $_SESSION['nbp1'] != 0 || $_SESSION['nbp2'] != 0 || $_SESSION['nbf1'] != 0 || $_SESSION['nbf2'] != 0){
                    echo '<h2 class="blanc">Somme totale : '.$st.' €</h2><br>';
                    echo '<input class="acheter" type="submit" name="conf" value="Valider">';
                    echo '<input class="acheter" type="submit" name="vider" value="Vider">'
                ;}
            ?>
        </form>
    </body>
</html>
