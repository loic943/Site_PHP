<?php
require_once(__DIR__ . '/../fonctions.php');
affiche('public_header', ['title' => 'Boutique']);
?>
<header class="bg-white">
    <div class="flex justify-between w-1/2 mx-auto h-44 ">
        <img src="img/Logo.webp" alt="Coeur de Choc" class="h-44">
        <button class="transition duration-300 ease-in-out font-semibold border-2 border-black px-14 mx-auto py-3 my-auto hover:bg-[#b9165a] transform hover:text-white hover:font-medium hover:border-0" href="mailto:contact@coeurdechoc.fr">Contactez-nous</button>
        <div class="border-2 border-black pt-8 px-5 mb-2">
            <img src="img/Agri_bio.webp" alt="Coeur de Choc" class="h-20 mx-auto mb-1">
            <div class="flex flex-col text-sm p-1">
                <p>Issu de l'agriculture biologique UE/NON UE</p>
                <p class="mx-auto">Certifié FR-BIO-01</p>
            </div>
        </div>
    </div>
</header>
<nav class="flex bg-[#b9165a] h-14 sticky top-0 z-50">
    <ul class="flex justify-center items-center w-1/2 mx-auto text-white">
        <a href="#" class="transition duration-300 ease-in-out mx-4 p-4 cursor-pointer hover:bg-white transform hover:text-[#b9165a]">
            Accueil
        </a>
        <a href="#" class="transition duration-300 ease-in-out mx-4 p-4 cursor-pointer hover:bg-white transform hover:text-[#b9165a]">
            La boutique
        </a>
        <a href="#" class="transition duration-300 ease-in-out mx-4 p-4 cursor-pointer hover:bg-white transform hover:text-[#b9165a]">
            A Propos
        </a>
        <a href="#" class="transition duration-300 ease-in-out mx-4 p-4 cursor-pointer hover:bg-white transform hover:text-[#b9165a]">
            Nos revendeurs
        </a>
        <a href="#" class="transition duration-300 ease-in-out mx-4 p-4 cursor-pointer hover:bg-white transform hover:text-[#b9165a]">
            Contact
        </a>
    </ul>

</nav>
<div style="background-image: url('img/bg_1.webp');" class="h-full bg-fixed bg-center bg-cover bg-no-repeat">
    <section class="font-sans">
        <div class=" flex items-center h-96 text-white text-5xl pl-10">
            <p class="w-1/2 leading-relaxed">Votre boutique de chocolats 100 % bio <br> à Montigny-sur-Loing</p>
        </div>
        <div class="h-60 bg-white pt-14">
            <p class="w-1/2 mx-auto text-center text-base text-gray-700 leading-loose">Basé à Montigny-sur-Loing, Coeur de Choc fabrique de manière artisanale des chocolats 100 % bio, sans lécithine et <br>sans gluten. Avec notre boutique en ligne, nous vous proposons de découvrir nos produits où que vous soyez, car nous <br>pensons que la gourmandise se partage ! Sachets de chocolat, rochers, tablettes, cadeaux en chocolat... <br>De nombreuses surprises vous attendent !</p>
        </div>
    </section>
</div>
<div style="background-image: url('img/bg_2.webp');" class="bg-fixed bg-center bg-cover bg-no-repeat">
    <main>
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
        <div class="w-1/2 flex items-center mx-auto">
            <div class="flex flex-col w-1/2 bg-white border-2 border-[#b9165a] rounded-3xl p-8 my-24">
                <img src="img/smartphone.svg" alt="Téléphone" class="h-12 mx-auto">
                <p class="my-4 text-2xl text-center">Commandez dès maintenant votre chocolat 100 % bio.</p>
                <div class="mx-auto">
                    <button class="transition duration-300 ease-in-out font-semibold border-2 border-black px-14 py-3 hover:bg-[#b9165a] transform hover:text-white hover:font-medium hover:border-2 hover:border-[#b9165a]" href="www.coeurdechoc.fr/contact">
                        Contactez-nous
                    </button>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-white grid grid-cols-3 mb-2">
        <div class="flex justify-center items-center text-center leading-8">
            <p>1 Rue Roger Genty, Sorques, Montigny-sur-Loing, <br>France 77690</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="img/C-de-Choc_logo.webp" alt="Coeur de Choc Logo" class="w-48">
            <div class="my-4">
                <span>Tel:</span>
                <span class="text-[#b9165a] font-bold">06 23 43 04 37</span>
            </div>
            <div>
                <span>E-mail:</span>
                <span class="text-[#b9165a] font-bold">contact@coeurdechoc.fr</span>
            </div>
            <div class="flex flex-col items-center gap-4 mt-4">
                <a href="#">
                    <img src="img/facebook.svg" alt="Facebook" class="w-8">
                </a>
                <a href="#" class="text-[#b9165a]">
                    Mentions Légales
                </a>
            </div>
        </div>
        <div class="flex">
            <div class="flex grow flex-col justify-center items-center leading-10">
                <p>Lun - Sam</p>
                <p>Dimanche</p>
            </div>
            <div class="flex grow flex-col justify-center items-center leading-10">
                <p>Uniquement sur rendez-vous</p>
                <p>Fermé</p>
            </div>
        </div>
    </footer>
</div>