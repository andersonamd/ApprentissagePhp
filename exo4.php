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
    // TO 
    // create a vigenere tab
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $alphabetTab = str_split($alphabet);
        $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);
        
        $sizeAlphabet = count($alphabetTab);

        for ($i = 0; $i < $sizeAlphabet; $i++){
            for($i = 0; $j < $sizeAlphabet; $j++){
                $line = $alphabetTab[$i];
                $column = $alphabetTab[$j];
                $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
            }
        }
    

    ?>
    <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
    <?php
    $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
    $key = "BACKEND";
    $messageTab = str_split($message);
    $keyTab = str_split($key);
    $keySize = count($keyTab);
    
    $encodedMessage = [];
    $keycounter = 0;
    foreach ($messageTab as $pointer => $letterToEncode);{
        $positionKeyLetter = $keyCounter % $keySize;
        $keyLetter = $keyTab[$positionKeyLetter];
        if ($letterToEncode != " "){
            $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
        } else{
            $encodedMessage[] = " ";
        }
        $counter++;
    }
    // TO DO
    $cryptedMessage = implode($encodedMessage);
    var_dump($cryptedMessage);
    /**
    * astuce pour la rotation de la clé BACKEND
    * 14 / 7 -> 2
    * 15 / 7 -> 2 reste 1
    * pour récuperer le "reste 1" il faut faire un modulo
    * 15 % 7 -> 1
    * 176 % 7 -> 1 (25 x 7 et reste 1)
    */
    ?>
    <p>le message est: <?php echo $message; ?></p>
    <p>la clé est: <?php echo $key ?></p>
    <p>le résultat est: <?php echo $cryptedMessage; ?></p>
    <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
    <?php
    $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
    $key4decode = "VIGENERE";
    // decode message
    $encodedMessageTab = str_split($encodedMessage);
    $key4decodeTab = str_split($key4decode);
    $key4decodeSize = count($key4decodeTab);

    $keyCounter2 = 0;
    foreach ($encodedMessageTab as $pointer => $letterToDecode);{
        $positionKeyLetter= $keyCounter % $key4decodeSize;
        $keyLetter2 = $key4decodeTab[$positionKeyLetter];
        if ($letterToDecode != " "){
            for ($i = 0; $i < $sizeAlphabet; $i++){
                $lineToDecode = $alphabetTab[$i];
                if ($vigenere[$lineToDecode][$keyLetter] == $letterToDecode){
                    $decryptedMessage[] = $lineToDecode;
                }
            }
        } else{
            $decryptedMessage[] = " ";
        }
        $keyCounter++;
    }
    $decodedMessage = implode($decryptedMessage);
    ?>
    <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
    <p>la clé est: <?php echo $key4decode ?></p>
    <p>le résultat est: <?php echo $decodedMessage; ?></p>





    </div>


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>