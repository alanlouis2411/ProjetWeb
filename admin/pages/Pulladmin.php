<?php
    if(isset($_GET['conf'])){    
        $_SESSION['nbp1'] = $_GET['quantitepull']; 
        print "Ajout ok";
    }
    if(isset($_GET['conf2'])){   
        $_SESSION['nbp2'] = $_GET['quantitepull2']; 
        print "Ajout ok";
    }
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <h3 class="blanc">Voici nos pulls :</h3>
    </head>
    <body>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <img src="./images/pull.jpg">
            <h1 class="blanc">29.99€</h1>
            <select class="noir" name="quantitepull">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <br><br>
            <input name="conf" type="submit" class="acheter" value="Ajouter au panier">
            <br><br>
            <img src="./images/pull2.jpg">
            <h1 class="blanc">34.99€</h1> 
            <select class="noir" name="quantitepull2">
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

