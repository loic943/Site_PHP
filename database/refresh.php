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
    id SERIAL PRIMARY KEY,
    name TEXT UNIQUE,
    password TEXT
)');

// Création table categories
$pdo->exec('CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name TEXT UNIQUE
)');

$pdo->exec("INSERT INTO categories (name) VALUES ('tablette')");
$pdo->exec("INSERT INTO categories (name) VALUES ('rochers')");
$pdo->exec("INSERT INTO categories (name) VALUES ('assortiment')");
$pdo->exec("INSERT INTO categories (name) VALUES ('cadeaux')");

// Création table products
$pdo->exec('CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    category_id INTEGER REFERENCES categories,
    name TEXT,
    description TEXT
)');

?>