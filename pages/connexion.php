<?php
    if(isset($_GET['conf'])){
        $log = $_GET['log'];
        $mdp = $_GET['pass'];
        if($log == "" || $mdp == ""){
            echo "Les champs ne sont pas tous remplis !";
        }
        else{
            $x = new AdminDB($cnx);
            $adm = $x->getAdmin($log, $mdp);
            if(is_null($adm)){
                echo "Erreur de login !";
            }
            else{
                $_SESSION['admin'] = $adm;
                $_SESSION['id'] = $x->getId($log, $mdp);
                $_SESSION['login'] = $log;
                $_SESSION['nbt1'] = 0;
                $_SESSION['nbt2'] = 0;
                $_SESSION['nbp1'] = 0;
                $_SESSION['nbp2'] = 0;
                $_SESSION['nbf1'] = 0;
                $_SESSION['nbf2'] = 0;
                unset($_SESSION['page']);
                print "<meta http-equiv=\"refresh\": Content=\"0;URL=./admin/index_adm.php\">";
            }
        }
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="centrer">
        <form class="form-inline">
            <div class="form-group mb-2">
              <label for="staticEmail2" class="sr-only">Login : </label>
              <input type="text" class="form-control" id="staticEmail2" placeholder="Login" name="log">
              <label for="inputPassword2" class="sr-only">Mot de passe : </label>
              <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe" name="pass">
              <button type="submit" class="btn btn-primary mb-2" name="conf">Confirmer</button>
            </div>
        </form>
        </div>
    </body>
</html>

