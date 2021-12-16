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
        <h1>Exercice 2</h1>
                <h3>Décoder des messages</h3>
                <p>les messages à décoder</p>
                <?php
                $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
                $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
                $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
                ?>
                <ul>
                    <li>message 1 : <?php echo $message1; ?></li>
                    <li>message 2 : <?php echo $message2; ?></li>
                    <li>message 3 : <?php echo $message3; ?></li>
                </ul>
                <p>comment proceder?</p>
                <ol>
                    <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
                    <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a> de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
                    <li>Remplace les chaînes '@#?' par un espace.</li>
                    <li>Pour finir, inverse la chaîne de caractères.</li>
                </ol>
                <?php
                /**
                 * pour la division, un code à tester:
                 * $number = 50;
                 * $result = 50 / 2;
                 * echo $result;
                 */

                
                // we search for the key
                $key = strlen($message1) /2 ;
                // var_dump($key);
                // we look after the sub string with key
                $substring = substr($message1, 5, $key);
                // var_dump($substring );
                // we replace @#? by some spaces
                $messageWithSpaces = str_replace("@#?", " ", $substring);
                // var_dump($messageWithSpaces);
                // we reverse the string
                $decodedMessage1 = strrev($messageWithSpaces );
                
                
                // we search for the key
                $key = strlen($message2) /2;
                // var_dump($key);
                // we look after the sub string with key
                $substring = substr($message2, 5, $key);
                // var_dump($substring );
                // we replace @#? by some spaces
                $messageWithSpaces = str_replace("@#?", " ", $substring);
                // var_dump($messageWithSpaces);
                // we reverse the string
                $decodedMessage2 = strrev($messageWithSpaces );
                
                
                // we search for the key
                $key = strlen($message3) /2;
                // var_dump($key);
                // we look after the sub string with key
                $substring = substr($message3, 5, $key);
                // var_dump($substring );
                // we replace @#? by some spaces
                $messageWithSpaces = str_replace("@#?", " ", $substring);
                // var_dump($messageWithSpaces);
                // we reverse the string
                $decodedMessage3 = strrev($messageWithSpaces );
                
                
                
                
                
                
                
                
                
                ?>
                <p>résultats:</p>
                <p> message1: <?php echo $decodedMessage1 ?><br>
                    message2: <?php echo $decodedMessage2 ?><br>
                    message3: <?php echo $decodedMessage3 ?><br>
                </p>
   
    </div>
    


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>