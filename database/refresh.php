<?php
require_once(__DIR__ . '/../fonctions.php');

// Connexion à la BDD
$pdo = pdo();

// Requête SQL pour effacer les tables existantes
$pdo->exec("
DO $$ DECLARE
    r RECORD;
BEGIN
    FOR r IN (SELECT tablename FROM pg_tables WHERE schemaname = current_schema()) LOOP
        EXECUTE 'DROP TABLE IF EXISTS ' || quote_ident(r.tablename) || ' CASCADE';
    END LOOP;
END $$;
");

// Création table admins
$pdo->exec('CREATE TABLE admins (
    id SERIAL,
    name TEXT UNIQUE,
    password TEXT
)');

?>