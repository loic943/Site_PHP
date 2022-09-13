<?php
require_once(__DIR__ . '/../../../fonctions.php');
admin_only();

import('Category');
import('Product');
$product = (new Product)->get($_GET['id']);
//var_dump($product);


if (is_post()) {

    validate([
        'categories' => ['required'],
        'name' => ['required'],
        'description' => ['required']
    ]);

    $product->set($product->id, [
        'category_id' => $_POST['categories'],
        'name' => $_POST['name'],
        'description' => $_POST['description']
    ]);
    flash_success("Le produit '$product->name' a été modifié avec succès");
    redirect("/admin/products/edit.php?id={$product->id}");
}

?>
<?php affiche('header_admin', ['title' => 'Edit Produit']) ?>

<h1 class="text-xl">Modifier: <?= $product->name ?></h1>

<form action="" method="post">
    <p class="mb-3 max-w-sm">
        <label for="name" class="block text-sm px-3">Nom</label>
        <input type="text" name="name" id="name" class="border focus:border-black px-3 py-1 w-full" value="<?= $previous_inputs['name'] ?? $product->name?>">
    </p>
    <?php if (isset($previous_errors['name'])) : ?>
        <p class="max-w-sm border border-red-900 bg-red-200 text-red-900 mb-4 px-3 py-1">
            <?= $previous_errors['name'] ?>
        </p>
    <?php endif ?>
    <p class="mb-3 max-w-sm">
        <label for="description" class="block text-sm px-3">Description</label>
        <textarea name="description" id="description" class="border focus:border-black px-3 py-1 h-32 w-full"><?= $product->description ?? $previous_inputs['description'] ?></textarea>
    </p>
    <?php if (isset($previous_errors['description'])) : ?>
        <p class="max-w-sm border border-red-900 bg-red-200 text-red-900 mb-4 px-3 py-1">
            <?= $previous_errors['description'] ?>
        </p>
    <?php endif ?>
    <p class="mb-3 max-w-sm">
        <label for="categories" class="block text-sm px-3">Categorie</label>
        <select name="categories" id="gategories" class="border focus:border-black px-3 py-1 w-full bg-gray-100">
            <?php $categories = (new Category)->get_all() ?>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->id ?>"<?= $category->id === $product->category_id ? 'selected' : '' ?> ><?= $category->name ?></option>
            <?php endforeach ?>
        </select>
    </p>
    <p class="mt-6 max-w-sm">
        <button class="border w-full py-1 shadow-lg bg-gray-100">Modifier</button>
    </p>
</form>


<?php affiche('footer_admin') ?>