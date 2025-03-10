<?php
session_start();

include_once './controller/bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nom && $prenom && $email && $password) {
        $check = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $check->execute(['email' => $email]);
        $count = $check->fetchColumn();

        if ($count > 0) {
            $error = 'Cet email est déjà enregistré.';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            setcookie('email', $email, time() + 3600, '/', '', isset($_SERVER["HTTPS"]), true); # one hour

            $stmt = $pdo->prepare('INSERT INTO users (nom, prenom, email, pwd) VALUES (:nom, :prenom, :email, :pwd)');
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':pwd' => $hashedPassword,
            ]);

            header('Location: connexion.php');
            exit;
        }
    } else {
        $error = 'Veuillez remplir les champs !'; 
    }
}

?>
