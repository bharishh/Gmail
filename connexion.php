
<?php
include_once __DIR__."/controller/conectController.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connect.css">
    <title>Gmail</title>
</head>
<body>

    <header>
        <figure>
          <a href="index.html"><img src="./asset/mail.png" alt="Gmail logo" title="Google Gmail"></a>
          <figcaption hidden>Logo Gmail</figcaption>
        </figure>
        <h1><a href="index.html">Gmail</a></h1>
        <nav>
          <ul>
            <li><a href="#">POUR LES PROS</a></li>
            <li class="connect-acc">CONNEXION</a></li>
            <li><a href="index.php#formu">CREER UN COMPTE</a></li>
          </ul>
        </nav>
      </header>


      <main>
        <section class="login">
            <h2>Bienvenue dans votre espace</h2>
            <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
            <form action="" method="POST">
              <fieldset>
                <legend>Connectez-vous à votre compte</legend>

                <label for="email">Mail ou login *</label><br>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required><br>

                <label for="pwd">Mot de passe *</label><br>
                <input type="password" id="pwd" name="pwd" required><br>

                <button type="submit">CONNEXION A VOTRE COMPTE</button>
              </fieldset>
            </form>
        </section>

      </main>
</body>
</html>
