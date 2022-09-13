<?php 

/**
 * Ajoute message flash dans $_SESSION
 *
 * @param string $type de flash (success, danger, info, ....)
 * @param string $message contenu du message
 * @return void
 */
function flash(string $type, string $message): void
{
    $_SESSION['flash'] = compact('type', 'message');
}

/**
 * Ajoute message fash de type success
 *
 * @param string $message
 * @return void
 */
function flash_success(string $message): void
{
    flash('success', $message);
}

/**
 * Récupère les messages flash
 *
 * @return array
 */
function get_flash(): ?array
{
    $flash = $_SESSION['flash'] ?? null;
    $_SESSION['flash'] = null;
    return $flash;
}
