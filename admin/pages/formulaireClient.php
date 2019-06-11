<?php
    if(isset($_GET['conf'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $ville = $_GET['ville'];
        $rue = $_GET['rue'];
        $num = $_GET['numero'];
        if($nom == "" || $prenom == "" || $ville == "" || $rue == "" || $num == ""){
            print "Tous les champs ne sont pas remplis !! ";
        }
        else{
            $cli = new ClientDB($cnx);
            $rescli = $cli->ajoutClient($nom, $prenom, $ville, $rue, $num);
            $idcli = $cli->getId();
            $comm = new CommandeDB($cnx);
            $res = $comm->ajoutCommande($_SESSION['nbt1'], $_SESSION['nbt2'], $_SESSION['nbp1'], $_SESSION['nbp2'], $_SESSION['sommetot'], $idcli, $_SESSION['nbf1'], $_SESSION['nbf2']);
            if(is_null($res)){
                print "Y A UN PROBLEME pour commande";
            }
            else if(is_null($rescli)){
                print "Y A UN PROBLEME pour client";
            }
            else{
                print "<meta http-equiv=\"refresh\": Content=\"0;URL=./index_adm.php?page=confirmation.php\">";
            }
        }
    }
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <h1 class="blanc">Finalisation de l'achat</h1>
        <img src="./images/andry.jpg">
    </head>
    <body>
        <h3 class="blanc">Veuillez entrer vos coordonnées : </h3>
        <div class="formulaire">
        <form class="form-inline">
            <div class="form-group mb-2">
              <label for="name" class="blanc">Nom : </label>
              <input type="text" class="form-control" id="staticEmail2" placeholder="Dupont" name="nom">
              <br>
              <label for="prename" class="blanc">Prénom : </label>
              <input type="text" class="form-control" id="inputPassword2" placeholder="Jean" name="prenom">
              <br>
              <label for="ville" class="blanc">Ville : </label>
              <input type="text" class="form-control" id="staticEmail2" placeholder="Bruxelles" name="ville">
              <br>
              <label for="rue" class="blanc">Rue : </label>
              <input type="text" class="form-control" id="staticEmail2" placeholder="de la loi" name="rue">
              <br>
              <label for="num" class="blanc">Numéro : </label>
              <input type="text" class="form-control" id="staticEmail2" placeholder="16" name="numero">
              <br><br>
              <button type="submit" class="btn btn-primary mb-2" name="conf">Confirmer</button>
            </div>
        </form>
        </div>
    </body>
</html>

