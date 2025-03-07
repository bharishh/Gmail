
<?php
include_once __DIR__."/controller/baseController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Gmail</title>
</head>

<?php
include_once __DIR__."/includes/header.inc.php";
?>

<?php
include_once __DIR__."/includes/main.inc.php";
?>

<section class="form" id="formu">
<h2>Une boite de réception entièrement repensée</h2>
<p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaiter lire en priorité</p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Créer un compte</legend>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

            <label for="prenom">Prénom *</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

            <label for="email">Mail *</label>
            <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required>

            <label for="pwd">Mot de passe *</label>
            <input type="password" id="pwd" name="pwd" placeholder="Mot de passe" required>

            <button type="submit">VALIDER VOTRE COMPTE</button>
        </fieldset>
    </form>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</section>

<?php
include_once __DIR__."/includes/footer.inc.php";
?>
