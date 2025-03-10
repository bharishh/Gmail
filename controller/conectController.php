
<?php
session_start();

include_once './controller/bdd.php';


if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_SPECIAL_CHARS);


    if ($email && $password) {
        $check = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $check->execute(['email' => $email]);
        $count = $check->fetchColumn();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (password_verify($password, $hashedPassword)) {

            $_SESSION['email'] = $email;
            setcookie('email', $email, time() + 3600, '/', '', isset($_SERVER["HTTPS"]), true); // one hour
            header('Location: index.php');
            exit;
    
}else {
    $error = 'Mot de passe incorrect.';
}
} else {
$error = 'Cet email n\'est pas enregistré.';
}
}

?>