
<!Doctype html>
<html>
    <head>
    </head>
    <body>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Utilisateur connecté : <?php echo $_SESSION['login'];?></button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=accueil_adm.php">Accueil</button></a>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=Tshirtadmin.php">T-shirts</button></a>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=Pulladmin.php">Pulls</button></a>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=figurinesadmin.php">Figurines</button></a>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=panier.php">Panier</button></a>
            <button class="dropdown-item" type="button"><a href="index_adm.php?page=deconnect.php">Déconnexion</button></a>
        </div>
        </div>
    </body>
</html>

