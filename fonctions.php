<?php

// Affiche les erreurs PHP
ini_set('display_errors', 1);

session_start();

if (is_post()) {
    $previous_errors = [];
    $_SESSION['previous_errors'] = [];
    $previous_inputs = [];
    $_SESSION['previous_inputs'] = [];
} else {
    $previous_errors = $_SESSION['previous_errors'] ?? [];
    $previous_inputs = $_SESSION['previous_inputs'] ?? [];
    $_SESSION['previous_errors'];
    $_SESSION['previous_inputs'];
}

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
function pdo(): object
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
function redirect(string $url): void
{
    header("Location: $url");
    die();
}

/**
 * Redirige si pas Admin
 *
 * @return void
 */
function admin_only(): void
{
    if (!$_SESSION['admin'] ?? null) {
        redirect('/admin/login.php');
    }
}

/**
 * Retourne 404 Not Found
 *
 * @return void
 */
function abort_404(): void
{
    http_response_code(404);
    die();
}

/**
 * Vérifie la page courante
 *
 * @param string $page
 * @return boolean
 */
function is_on_page(string $page): bool
{
    return $_SERVER['SCRIPT_NAME'] === $page;
}

/**
 * Vérifie la dossier courant
 *
 * @param string $directory
 * @return boolean
 */
function is_on_directory(string $directory): bool
{
    return strpos($_SERVER['SCRIPT_NAME'], $directory) === 0;
}
