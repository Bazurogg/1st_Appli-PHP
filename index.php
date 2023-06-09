

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">    <title>Ajout produit</title>
    <?php
    session_start()
    ?>
</head>

<body>

    <div class="maincontent">
        
        <nav>
            <ul style="list-style: none;">
                <li><a class="active" href="./index.php">Ajouter Produit</a></li>
                <li><a href="./recap.php">Recap</a></li>
            </ul>
        </nav> 
            
        <div class="titre01">

            <h1>. Ajouter un produit .</h1>

        </div>

        <form id=addform action="traitement.php?action=add" method="post">
            <!-- "action" indique la cible du formulaire lorsque le utilisateur soumet le formulaire -->
            <!-- "method" indique par quelle méthode les données du formulaire seront transmise au serveur  -->
            <p>
                <label>
                    Nom du produit :
                    <input id="prodname" type="text" name="name">
                </label>
            </p>
            <p>
                <label>
                    Prix du produit :
                    <input id="prodprice" type="number" step="any"  name="price">
                </label>
                
            </p>
            <p>
                <label>
                    Quantité désirée :
                    <input id="prodquantity" ="type="number" name="qtt" value="1">
                </label>           
            </p>
            <p>
                <input id="addbutton" type="submit" name="submit" value="Ajouter le produit">
            </p>

        </form>

        <?php

        $allQtt = 0;

        if (!isset($_SESSION['products']) || empty($_SESSION['products'])){

            echo "<p class='p-alert'>".$_SESSION['alert']."</p>";
            unset($_SESSION['alert']);
    
        } else {

            foreach($_SESSION['products'] as $index => $product){
    
                $allQtt += $product['qtt'];
    
            }
    
            echo "<p>".$allQtt." <-- Voilà la quantité total de produits en session"."</p>";
    
        
            if (isset($_SESSION['alert'])){

                echo "<p class='p-alert'>".$_SESSION['alert']."</p>";
                unset($_SESSION['alert']);
                
            }
            
        }


        ?>

    </div>


</body>
</html>
