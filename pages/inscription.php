<?php
    if(isset($_GET['conf'])){
        $log = $_GET['log'];
        $mdp = $_GET['pass'];
        $mdp2 = $_GET['pass2'];
        if($log == "" || $mdp == "" || $mdp2 == ""){
            echo "Il faut remplir tous les champs";
        }
        else{
            if($mdp != $mdp2){
                echo "Les 2 mots de passe entrés sont différents";
            }
            else{
                $inscrip = new InscriptionDB($cnx);
                $test = $inscrip->ajoutAdmin($log, $mdp);
                if(is_null($test)){
                    print "C'est NULL";
                }
                else{
                    echo "Votre inscription à bien été enregistrée :)";
                }
            }
        }
    }	 
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <h3 class="blanc">Inscription</h3>
    </head>
    <body>
        <form name="inscription" method="get" action="<?php print $_SERVER['PHP_SELF']?>">
            <label class="blanc">Choisissez un login : </label>
            <input class="acheter" type="text" name="log"><br>
            <label class="blanc">Choisissez un mot de passe : </label>
            <input class="acheter" type="password" name="pass"><br>
            <label class="blanc">Veuillez confirmer le mot de passe :</label>
            <input class="acheter" type="password" name="pass2"><br>
            <input class="acheter" type="submit" name="conf" value="Confirmer">
        </form>
    </body>
</html>

