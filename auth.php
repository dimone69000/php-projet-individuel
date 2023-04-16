<?php

session_start();

require_once __DIR__ . '/function.php';
require_once __DIR__ . '/classes/connexion-message.php';

if (empty($_POST) || !isset($_POST['username']) || !isset($_POST['password'])) {
  redirect('index.php');
}

require_once __DIR__ . '/pdo/dsn.php';

$login = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT pseudo FROM administrateur WHERE pseudo=:pseudo";
$stmt = $pdo->prepare($query);
$stmt->execute(['pseudo' => $login]);

$admin = $stmt->fetch();

if ($admin === false) {
  redirect('index.php?msg=' . ConnexionMessages::INVALID_USER);
}

$query = "SELECT mot_de_passe FROM administrateur WHERE mot_de_passe=:mdp";
$stmt = $pdo->prepare($query);
$stmt->execute(['mdp' => password_hash($password, PASSWORD_DEFAULT)]);

$hashedPassword = $admin['password'];
if (password_verify($password, $hashedPassword) === false) {
  redirect('index.php?msg=' . ConnexionMessages::INVALID_PASSWORD);
}

$_SESSION['isConnected'] = true;
redirect('index.php?msg=' . ConnexionMessages::CONNEXION_IS_VALID);