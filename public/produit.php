<?php
require_once(__DIR__ . '/../fonctions.php');
affiche('public_header', ['title' => 'Boutique']);
?>

<div class=" flex justify-center py-32 bg-white">
    <div class="w-1/4">
        <div>
            <h3 class="text-4xl mb-4 pb-3 border-b-2 border-gray-500">Rochers au Lait</h3>
            <div class="text-3xl">10.00€</div>
            <span>Le prix comprend la TVA à</span>
            <span>5,5%</span>
            <span>(0,52€)</span>
        </div>
        <div class="pt-2 font-semibold">En stock</div>
        <button class="transition duration-300 ease-in-out font-semibold border-2 border-black px-14 py-3 my-2 hover:bg-[#b9165a] transform hover:text-white hover:font-medium hover:border-2 hover:border-[#b9165a]">
            Ajouter au Panier
        </button>
        <p class="my-2 w-2/3">
            Ingrédients : chocolat de couverture noir *(sucre de canne Cristallino*, masse de cacao*, beurre de cacao*, poudre de cacao*) Issu du Commerce Equitable, billette à la crème de marron* (riz complet*, farine de châtaigne*, crème de châtaigne* (châtaigne*, sucre de canne*, extrait de vanille*)), amandes*, noisettes*, cube d'écorce d'orange confite* (écorces d'orange*, sucre de canne*, sirop de glucose de riz* ), raisins secs* (raisin*, huile de tournesol désodorisée*) - Teneur en cacao : 70% minimum<br />*Issu de l'agriculture biologique Certifié FR-BIO-01<br />Valeurs nutritionnelles pour 100g : Energie : 2182kJ / 524kcal, Mat. grasses : 35g, Dont acides gras saturés : 20g, Glucides : 42g, Dont sucres : 29g, Protéines : 7.9g, Sel : 0.18g
        </p>
        <div class="font-bold mb-2">Partagez votre achat avec vos amis</div>
        <span>Facebook</span><span>Twitter</span><span>Pinterest</span>
    </div>
    <div class="w-1/4 flex justify-center">
        <img src="img/rochers-lait.jpg" alt="Rochers au Lait" class="rounded-full border border-[#b9165a]">
    </div>
</div>

<?php affiche('public_footer'); ?>