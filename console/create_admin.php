<?php 

require_once(__DIR__ . '/../fonctions.php');

$pdo = pdo();

$query = $pdo->prepare('INSERT INTO admins (name, password) VALUES (?, ?)');
$query->execute([$argv[1], password_hash($argv[2], PASSWORD_DEFAULT)]);

echo "Administrateur créé !\n";
