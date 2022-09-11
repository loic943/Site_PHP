<?php

// Affiche les erreurs PHP
ini_set('display_errors', 1);

session_start();

/**
 * Vérifie si formulaire validé
 *
 * @return boolean
 */
function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * Affiche un html_partial
 *
 * @param string $name
 * @param array $params
 * @return void
 */
function affiche(string $name, array $params = []): void
{
    extract($params);
    require(__DIR__ . "/html_partials/{$name}.html.php");
}

/**
 * Connexion à la BDD
 *
 * @return object
 */
function pdo()
{
    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=site", 'site', 'site');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

/**
 * Redirige vers une url
 *
 * @param string $url
 * @return void
 */
function redirect(string $url)
{
    header("Location: $url");
    die();
}

/**
 * Redirige si pas Admin
 *
 * @return void
 */
function admin_only()
{
    if(!$_SESSION['admin'] ?? null) {
        redirect('/admin/login.php');
    }
}

/**
 * Retourne 404 Not Found
 *
 * @return void
 */
function abort_404()
{
    http_response_code(404);
    die();
}
