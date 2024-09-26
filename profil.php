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
        echo "Bienvenue, ". $_SESSION["username"]. "." ;
    ?>
    <form action="logout.php" method='post'><br><br>
        <input type="submit" value="Se déconnecter">
    </form>
</body>
</html>


