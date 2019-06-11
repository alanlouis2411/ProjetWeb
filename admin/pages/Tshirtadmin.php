<?php
    if(isset($_GET['conf'])){   
        $_SESSION['nbt1'] = $_GET['quantite']; 
        print "ok";
    }
    if(isset($_GET['conf2'])){    
        $_SESSION['nbt2'] = $_GET['quantite2']; 
        print "ok";
    }
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <h3 class="blanc">Voici nos t-shirts :</h3>
    </head>
    <body>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <img src="./images/tshirt.jpg">
            <h1 class="blanc">19.99€</h1>
            <select class="noir" name="quantite">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <br><br>
            <input name="conf" type="submit" class="acheter" value="Ajouter au panier">
            <br><br>
            <img src="./images/tshirt2.jpg">
            <h1 class="blanc">19.99€</h1> 
            <select class="noir" name="quantite2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <br><br>
            <input name="conf2" type="submit" class="acheter" value="Ajouter au panier">
        </form>
    </body>
</html>

