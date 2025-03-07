<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Gmail</title>
</head>
<body>

<?php
include_once __DIR__."/includes/header.inc.php";
?>

<main>
        <section class="login">
            <h2>Bienvenue dans votre espace</h2>
            <form action="" method="post">
              <fieldset>
                <legend>Connectez-vous à votre compte</legend>
                <label for="email">Mail ou login *</label><br>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required><br>
                <label for="mot_de_passe">Mot de passe *</label><br>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
                <button type="submit">CONNEXION A VOTRE COMPTE</button>
              </fieldset>
            </form>
        </section>

      </main>
      </body>
</html>
