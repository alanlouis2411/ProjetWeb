<?php
    if(isset($_GET['conf'])){
        print "<meta http-equiv=\"refresh\": Content=\"0;URL=../admin/index_adm.php?page=accueil_adm.php\">";
    }
?>
<h2 class="blanc">votre commande a bien été enregistrée dans notre base de données.</h2>
<br>
<img src="./images/chopper.jpg">
<form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
    <br>
    <input class="acheter" type="submit" name="conf" value="Retour à la page d'accueil">
</form>

