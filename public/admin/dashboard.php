<?php
require_once(__DIR__ . '/../../fonctions.php');
admin_only();

?>
<?php affiche('header', ['title' => 'Dashboard Admin']) ?>

<h1>Tableau de bord Admin</h1>

<form method="POST" action="/admin/logout.php">
    <button>Déconnexion</button>
</form>

<?php affiche('footer') ?>
