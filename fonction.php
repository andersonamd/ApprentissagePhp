<?php
session_start();

function security($data): string
{ 
$result = trin($data);
$result = stripcslashes($result);
$result = htmlspecialchars($result);
return $result;
}
if ($_POST) {
    // var_dump($_POST);
    $name = trin($_POST);
    $firstName = security($_POST["$firstName"]);
    $adress = security($_POST["$adress"]);
    $email = security($_POST["$email"]);
    $postCode = security($_POST["$postCode"]);
    $password = security($_POST["$password"]);
    $city = security($_POST["$city"]);
    $country = security($_POST["$country"]);
    $phone = security($_POST["$phone"]);

    var_dump($name, $firstName, $adress, $email, $postCode, $password, $city, $country, $phone);
}

?>
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
        <h1>Bienvenue dans le monde du code fonctionnel</h1>
        <p>oui, jusqu'à présent on était d'un le code procedural</p>
        <p>on rentre dans un nouveau paradigme (🤩 ou 🥴)</p>

        <p>bon, en bref, il va falloir traiter (sécuriser) un loooong formulaire:</p>
        <form method="POST">
            <div class="form-group">
                <label for="email">Adresse de courriel :</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="name">Nom :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="firstName">Prénom :</label>
                <input type="text" class="form-control" name="firstName">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="adress">Adresse :</label>
                <input type="text" class="form-control" name="adress">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="postCode">Code Postal :</label>
                <input type="text" class="form-control" name="postCode">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="city">Ville :</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="country">Pays :</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="phone">Télephone :</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>