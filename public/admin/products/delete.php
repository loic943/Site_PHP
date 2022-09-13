<?php
require_once(__DIR__ . '/../../../fonctions.php');
admin_only();

import('Product');

if (! is_post()) {
    abort_404();
}

$product = (new Product)->get($_GET['id']);

if (! $product) {
    abort_404();
}

flash_success("Le produit '$product->name' a été supprimé avec succès !");
$product->delete();
redirect('/admin/products/index.php');
