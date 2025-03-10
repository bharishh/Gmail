<?php
$servername = "localhost";
$dbname = "gmail";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Définir le mode d'erreur PDO sur exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionnel : définir le mode de récupération par défaut sur FETCH_ASSOC
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "connexion reussie";

} catch (PDOException $e) {
    // En production, il est préférable de journaliser l'erreur et d'afficher un message générique
    error_log("Erreur de connexion à la base de données: " . $e->getMessage());
    
    echo "Une erreur est survenue lors de la connexion à la base de données.";
}
?>
