<?php
include_once __DIR__."/includes/head.inc.php";
?>

<body>

<?php
include_once __DIR__."/includes/header.inc.php";
?>

    <main> 
    
        <section class="section-home">
    
            <h2>Retrouvez la fluidité et la <br> simplicité de Gmail sur <br> vos appareils </h2>
    
            <a href="#formu" class="boutton">Créer un compte</a>
    
            <figure>
              <figcaption hidden>Image vers le bas</figcaption>
    
              <a href="#formu">
                <img src="./asset/arrow.png" alt="fleche">
              </a>
            </figure>
          </section>
    
    
    
    
        <section class = "form" id="formu"> 
            <h2>Une boite de réception entièrement repensée</h2>
            <p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaiter lire en priorité</p>
              
                <form  method="post">
                  <fieldset>
                    <legend>Créer un compte</legend>
                <label for="nom">Nom *</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
    
                <label for="prenom">Prénom *</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
    
                <label for="email">Mail *</label>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required>
    
                <label for="password">mot de passe *</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
    
                <button type="submit">VALIDER VOTRE COMPTE</button>
              </fieldset>
            </form>
           
        </section>  
   
<?php
    include_once __DIR__."/includes/footer.inc.php";
?>

    </main>
    </body>
