<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION["error"]);
    }
    ?>

    <br><br>
    <form action="verif.php" method="post">

    <label for="username">Nom d'utilisateur :</label>   
    <input type="text" name="username" id="username"/><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password"  id="password"/>
    
    <input type="submit" name="login" value="Se connecter">

    </form>
</body>
</html>