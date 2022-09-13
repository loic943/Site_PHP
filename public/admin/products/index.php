<?php
require_once(__DIR__ . '/../../../fonctions.php');
admin_only();

import('Product');
$products = (new Product)->get_all();

?>
<?php affiche('header_admin', ['title' => 'Produits']) ?>

<div class="flex items-center mb-4">
    <h1 class="text-xl">Administration des Produits</h1>
    <a href="/admin/products/add.php" class="ml-3 border px-2 py-1 uppercase text-xs">Céer produit</a>
</div>

<?php foreach ($products as $product) : ?>
    <div class="mb-6">
        <h2 class="text-xl"><?= $product->name ?></h2>
        <p><?= $product->description ?></p>
        <div class="-mx-2 flex border-t pt-1 mt-1">
            <a class="mx-2" href="/admin/products/edit.php?id=<?= $product->id ?>">Modifier</a>
            <form method="post" action="/admin/products/delete.php?id=<?= $product->id ?>">
                <button>Supprimer</button>
            </form>
        </div>
    </div>

<?php endforeach ?>

<?php affiche('footer_admin') ?>