<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        ?>
        <br><br>
        <div class="form-container">
            <form action="verif.php" method="post">
                <h2>Connexion</h2>       
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                
                <div class="text-center">
                    <button type="submit" id="btn" class="btn btn-primary">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>