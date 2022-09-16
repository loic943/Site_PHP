<?php 
affiche('header', ['title' => "Site PHP - $title"]) 
?>

<header class="bg-white">
    <div class="flex justify-between w-1/2 mx-auto h-44 ">
        <img src="img/Logo.webp" alt="Coeur de Choc" class="h-44">
        <button class="transition duration-300 ease-in-out font-semibold border-2 border-black px-14 mx-auto py-3 my-auto hover:bg-[#b9165a] transform hover:text-white hover:font-medium hover:border-0" href="mailto:contact@coeurdechoc.fr">Contactez-nous</button>
        <div class="border-2 border-black pt-3 px-5 mb-2">
            <img src="img/Agri_bio.webp" alt="Certifié AB" class="h-2/3 mx-auto mb-1">
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
