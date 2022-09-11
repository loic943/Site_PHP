<?php 

require_once(__DIR__ . '/../../fonctions.php');
admin_only();

if (!is_post()) {
    abort_404();
}

unset($_SESSION['admin']);
redirect('/admin/login.php');

