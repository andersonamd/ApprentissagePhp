<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./CSS/bootstrap.css">

    <title>Document</title>
</head>
<body>
    <?php include("./_navbar.php"); ?>
   
    <div class="container">
    <h1>Exercice 3</h1>
        <?php
        $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];
        ?>
        <p>voici les éléments du tableau de base:
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
            <li><?php echo $tab1[5]; ?></li>
            <li><?php echo $tab1[6]; ?></li>
            <li><?php echo $tab1[7]; ?></li>
        </ul>
        </p>
        <h3>Premier exercice:</h3>
        <p>retirer les 3 intrus: et afficher les valeurs</p>
        <p>résultat: 
            <?php
            // delete the 5th element
            array_splice($tab1, 4, 1);
            // delete the first element
            array_shift($tab1);
            // elete the last element
            array_pop($tab1);
            ?> 
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
        </ul>
        </p>
        <h3>Second exercice:</h3>
        <p>transformaer la chaîne de caractère "bleu, vert, noir, rouge, jaune" en un tableau</p>
        <p>ajouter en première position du tableau la valeur "violet"</p>
        <p>résultat:
            <?php
            $startString = "bleu, vert, noir, rouge, jaune";
            // convert the string into an array
            $tab2 = explode(", ", $startString);
            // insert at the beginning of a table an array
            array_unshift($tab2, "violet");
            ?>
            <ul>
                <li><?php  echo $tab2[0]; 
                    ?></li>
                <li><?php  echo $tab2[1]; 
                    ?></li>
                <li><?php  echo $tab2[2]; 
                    ?></li>
                <li><?php  echo $tab2[3]; 
                    ?></li>
                <li><?php  echo $tab2[4]; 
                    ?></li>
                <li><?php  echo $tab2[5]; 
                    ?></li>
            </ul>
        </p>
   
    </div>
    


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>