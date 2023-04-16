<?php
require_once __DIR__ . '/pdo/dsn.php';

$login = "test";
$password = "test";

$query = "INSERT INTO administrateur VALUES (NULL, :pseudo, :mot_de_passe)";

$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
    'pseudo' => $login,
    'mot_de_passe' => password_hash($password, PASSWORD_DEFAULT)
]);

if ($insert) {
    echo "Utilisateur enregistré";
} else {
    echo "Échec lors de l'insertion";
}