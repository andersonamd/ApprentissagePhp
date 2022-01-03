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
        <h1>Exercice 5</h1>

        <?php
    if (!empty($_POST)){ 
        if ($_POST["message"]){
            $message = strip_tags($_POST["message"]);
        }
        if ($_POST["key"]){
            $key = strip_tags($_POST["key"]);
        }
        if ($_POST["encodedMessage"]){
            $encodedMessage = strip_tags($_POST["encodedMessage"]);
        }
    }
        ?>


    <h3>Système d'encodage de vigenère</h3>
    <p>Vous pouvez entrer un message ou un code et la clé, ATTENTION en Majuscule</p>
        <form method="post">
            <div class="form-group">
                <label for="message">LE MESSAGE</label>
                <textarea name="message" class="form-control border border-3" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="key">LA CLÉ</label>
                <input type="text" class="form-control border border-3" name="key">
            </div>
            <div class="form-group">
                <label for="encodedMessage">LE CODE</label>
                <textarea name="encodedMessage" class="form-control border border-3" rows="2"></textarea>   
            </div>
            <a href="./exo5.php" class="btn btn-primary mt-3 mb-3" >Annuler</a>
            <input type="submit" class="btn btn-primary mt-3" value="vigenèriser">
        </form>
    </div>
    


    <script src="./JS/bootstrapmin.js"> </script>
</body>
</html>