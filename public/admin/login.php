<?php 
require_once(__DIR__ . '/../../fonctions.php');

if ($_SESSION['admin'] ?? null) {
    redirect('/admin/dashboard.php');
}

if (is_post()) {
    $query = pdo()->prepare('SELECT * FROM admins WHERE name = ?');
    $query->execute([$_POST['name']]);
    $admin = $query->fetch();

    if ($admin and password_verify($_POST['password'], $admin['password'])) {
        $_SESSION['admin'] = $admin;
        redirect('/admin/dashboard.php');
    } else {
        $errors['credentials'] = 'Identifiants incorrects';
    }
}

?>

<?php affiche('header', ['title' => 'Connexion Admin']) ?>

<h1>Connexion Admin</h1>

<form method="post">
    <?php if (isset($errors['credentials'])): ?>
    <p>
        <?= $errors['credentials'] ?>
    </p>
    <?php endif ?>
    <p>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <button>Connexion</button>
    </p>
</form>

<?php affiche('footer') ?>
