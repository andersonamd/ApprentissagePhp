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
        <h1>Exercice 4</h1>
    <h5>1- créer une <a href="https://www.latoilescoute.net/table-de-vigenere" target="_blank">table de vigenère</a></h5>
   
    <?php

    // create a vigenere tab
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $alphabetTab = str_split($alphabet);
        $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);
        
        $sizeAlphabet = count($alphabetTab);

        for ($i = 0; $i < $sizeAlphabet; $i++){
            for($j = 0; $j < $sizeAlphabet; $j++){
                $line = $alphabetTab[$i];
                $column = $alphabetTab[$j];
                $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
            }
        }
    

    ?>




    </div>


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>