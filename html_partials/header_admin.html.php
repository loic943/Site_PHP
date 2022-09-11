<?php affiche('header', ['title' => "$title - Admin"]) ?>

<div class="flex max-w-6xl w-full mx-auto mt-8">
    <nav class="mr-6 w-48 flex-shrink-0 py-8">
        <div class="-my-1">
            <div class="w-full my-1 py-2 px-3 <?= is_on_page('/admin/dashboard.php') ? 'bg-gray-300' : '' ?>">
                <a class="text-gray-700 hover:text-black" href="/admin/dashboard.php">
                    Tableau de bord
                </a>
            </div>
            <div class="w-full my-1 py-2 px-3 <?= is_on_directory('/admin/products') ? 'bg-gray-300' : '' ?>">
                <a class="text-gray-700 hover:text-black" href="/admin/products/index.php">
                    Produits
                </a>
            </div>
            <div class="w-full my-1 py-2 px-3 <?= is_on_page('/admin/stats.php') ? 'bg-gray-300' : '' ?>">
                <a class="text-gray-700 hover:text-black" href="/admin/stats.php">
                    Statistiques
                </a>
            </div>
            <div class="w-full my-1 py-2 px-3">
                <form method="POST" action="/admin/logout.php">
                    <button class="text-gray-700 hover:text-black">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="bg-white shadow-xl p-8 w-full">