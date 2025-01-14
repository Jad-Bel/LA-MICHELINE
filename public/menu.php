<?php 
    include "/laragon/www/LA-MICHELINE/public/bin/connect.php";
    require "/laragon/www/LA-MICHELINE/public/bin/session_check.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black text-white">
    <nav class="fixed w-full z-50 bg-black/90 px-4 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-light">LA MICHELINE</a>
            <div class="hidden md:flex space-x-8 text-sm">
                <a href="../public/index.php" class="hover:text-gray-300 transition">Accueil</a>
                <a href="../public/menu.php" class="hover:text-gray-300 transition">Menu</a>
                <a href="../public/reservation.php" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="../public/bin/logout.php" class="hover:text-gray-300 transition">log Out</a>
            </div>
            <button id="burger-menu" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-black/90 py-4">
            <div class="flex flex-col items-center space-y-4 text-sm">
                <a href="../public/index.php" class="hover:text-gray-300 transition">Accueil</a>
                <a href="../public/menu.php" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
            </div>
        </div>
    </nav>

    <!-- menu section -->
    <section class="max-w-7xl mx-auto px-4 py-24 bg-white text-black">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="relative">
                <img src="../public/assets/cc439a_7ca4c898b5804094bfde7bcc48112852~mv2.jpeg"
                    alt="Plat gastronomique avec poisson" class="w-[90%] shadow-lg" />
            </div>

            <!-- Menu Content Column -->
            <div class="space-y-8">
                <h2 class="text-3xl font-light tracking-wide">NOS MENUS DU RESTAURANT</h2>

                <div class="space-y-6">
                    <a href="#" class="block text-lg hover:text-gray-600 transition-colors">
                        Le Menu du midi
                    </a>

                    <a href="#" class="block text-lg hover:text-gray-600 transition-colors">
                        Le Menu à la carte
                    </a>
                </div>

                <div class="space-y-4 text-sm leading-relaxed">
                    <p>
                        Faites simplement confiance au Chef Andrés Arocena et laissez-vous surprendre par l'un de ses
                        deux menus dégustation, disponible du mardi au samedi, le midi jusqu'à 13h00 et le soir jusqu'à
                        21h00 (prise de commande).
                    </p>

                    <p>
                        Nous proposons également un accord mets&vins pour vous faire déguster un de nos vins à chacun
                        des plats !
                    </p>
                </div>

                <div class="space-y-4 text-sm">
                    <div>
                        <p class="font-medium">Menu dégustation 5 plats / 135.-</p>
                        <p class="text-gray-600 italic">Accord mets & vins + 70.-</p>
                    </div>

                    <div>
                        <p class="font-medium">Menu dégustation 6 plats / 155.-</p>
                        <p class="text-gray-600 italic">Accord mets & vins + 80.-</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-200">
                    <p class="text-sm mb-4">
                        Nos nouveautés vous intéressent ? Vous voulez être informés des menus de la semaine chaque lundi
                        matin, des nouveautés, événements et autres news sur La Micheline ?
                    </p>
                    <a href="#"
                        class="inline-block text-sm font-medium hover:underline hover:transition-all hover:duration-700 hover:ease-in-out">
                        Recevez notre newsletter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Container 2 -->
    <section class="bg-white max-w-7xl mx-auto px-4 py-24">
        <div class="text-center p-8">
            <h2 class="text-3xl font-light tracking-wide text-black">NOS MENUS EXCLUSIFS</h2>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
                <!-- Menu Cards -->
            <div class="bg-white shadow-lg overflow-hidden">
                    <div class="relative h-64">
                        <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                            <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <span
                            class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                        <p class="text-gray-600 text-sm">
                            Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                            sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                            de coeur
                        </p>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Minimum 1 personne(s)
                        </div>
                        <div class="flex justify-between gap-4 pt-4">
                            <button
                                class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                                Offrir
                            </button>
                            <button
                                class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                                En savoir plus
                            </button>
                        </div>
                    </div>
            </div>
    
            <div class="bg-white shadow-lg overflow-hidden">
                    <div class="relative h-64">
                        <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                            <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <span
                            class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                        <p class="text-gray-600 text-sm">
                            Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                            sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                            de coeur
                        </p>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Minimum 1 personne(s)
                        </div>
                        <div class="flex justify-between pt-4">
                            <button
                                class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                                Offrir
                            </button>
                            <button
                                class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                                En savoir plus
                            </button>
                        </div>
                    </div>
            </div>
    
            <div class="bg-white shadow-lg overflow-hidden">
                    <div class="relative h-64">
                        <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                            <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <span
                            class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                        <p class="text-gray-600 text-sm">
                            Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                            sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                            de coeur
                        </p>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Minimum 1 personne(s)
                        </div>
                        <div class="flex justify-between pt-4">
                            <button
                                class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                                Offrir
                            </button>
                            <button
                                class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                                En savoir plus
                            </button>
                        </div>
                    </div>
            </div>

            <div class="bg-white shadow-lg overflow-hidden">
                    <div class="relative h-64">
                        <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                            <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <span
                            class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                        <p class="text-gray-600 text-sm">
                            Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                            sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                            de coeur
                        </p>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Minimum 1 personne(s)
                        </div>
                        <div class="flex justify-between pt-4">
                            <button
                                class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                                Offrir
                            </button>
                            <button
                                class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                                En savoir plus
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Menu Container 2 -->
    <section class="bg-white max-w-7xl mx-auto px-4 py-24">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Menu Cards -->
            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-64">
                    <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                        <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <span
                        class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                    <p class="text-gray-600 text-sm">
                        Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                        sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                        de coeur
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Minimum 1 personne(s)
                    </div>
                    <div class="flex justify-between pt-4">
                        <button
                            class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                            Offrir
                        </button>
                        <button
                            class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-64">
                    <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                        <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <span
                        class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                    <p class="text-gray-600 text-sm">
                        Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                        sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                        de coeur
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Minimum 1 personne(s)
                    </div>
                    <div class="flex justify-between pt-4">
                        <button
                            class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                            Offrir
                        </button>
                        <button
                            class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-64">
                    <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                        <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <span
                        class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                    <p class="text-gray-600 text-sm">
                        Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                        sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                        de coeur
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Minimum 1 personne(s)
                    </div>
                    <div class="flex justify-between pt-4">
                        <button
                            class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                            Offrir
                        </button>
                        <button
                            class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-64">
                    <img src="../public/assets/DSC08762.jpg" alt="Menu dégustation" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-center">
                        <h3 class="text-white text-2xl font-light">DÉCOUVRIR</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <span
                        class="inline-block px-2 py-1 border border-gray-300 border-dotted text-sm text-gray-400">Gastronomie</span>
                    <p class="text-gray-600 text-sm">
                        Laissez vous surprendre par le Chef Andrés Arocena et découvrez son menu dégustation en 5 temps,
                        sa meilleure manière pour vous faire partager sa cuisine, ses créations du moment et ses coups
                        de coeur
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Minimum 1 personne(s)
                    </div>
                    <div class="flex justify-between pt-4">
                        <button
                            class="px-6 py-2 text-black border border-black hover:bg-black hover:text-white transition-colors">
                            Offrir
                        </button>
                        <button
                            class="px-6 py-2 border-[1px] border-black bg-black text-white hover:bg-white hover:text-black transition-colors">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>
    </section>

    <!-- footer -->
    <footer class="bg-black w-full text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <!-- Address -->
                <div>
                    <h4 class="text-lg mb-4">ADRESSE</h4>
                    <p class="text-sm">Avenue de la Gare des</p>
                    <p class="text-sm">Eaux-Vives 3, 1207</p>
                    <p class="text-sm">Genève</p>
                </div>

                <!-- Hours -->
                <div>
                    <h4 class="text-lg mb-4">HORAIRES</h4>
                    <p class="text-sm">Lundi et Dimanche : Fermé</p>
                    <p class="text-sm">Mardi au Samedi : 12:00 - 14:00 / 19:00 - 22:00</p>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg mb-4">CONTACT</h4>
                    <p class="text-sm">Tél : 022 840 03 38</p>
                    <p class="text-sm">Mail : info@lamicheline.ch</p>
                </div>
            </div>

            <!-- Certifications -->
            <div class="flex justify-center space-x-8 mt-12">
                <span class="text-white/70">Guide MICHELIN</span>
                <span class="text-white/70">Gault&Millau</span>
            </div>
        </div>
    </footer>
</body>

</html>