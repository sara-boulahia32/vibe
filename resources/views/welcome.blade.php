<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nexus</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-purple-50 font-sans text-gray-800">
    <!-- Header with curved bottom -->
    <header class="relative bg-white pb-16">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-600 opacity-10"></div>
        <nav class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-black tracking-tight text-purple-800">
                        <i class="fas fa-hashtag mr-1 text-purple-600"></i>Nexus
                    </span>
                </div>
                
                <div class="hidden sm:flex items-center space-x-2">
                    @if (Route::has('login'))
                        <div class="flex space-x-2">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-purple-700 transition-colors">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-purple-700 transition-colors">Connexion</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium bg-purple-600 text-white rounded-full shadow-sm hover:bg-purple-700 transition-colors">Inscription</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-20">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Découvrez la révolution de la connexion humaine
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Collaborez, innovez et élargissez votre monde à travers notre plateforme de partage d'idées et d'expériences.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="px-6 py-3 bg-purple-600 text-white font-medium rounded-full shadow-md hover:bg-purple-700 transform hover:-translate-y-1 transition duration-300">
                            Commencer gratuitement
                        </a>
                        <a href="#" class="px-6 py-3 bg-white text-purple-600 font-medium rounded-full shadow-md border border-purple-200 hover:border-purple-300 transform hover:-translate-y-1 transition duration-300">
                            En savoir plus
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="/api/placeholder/600/400" alt="Communauté diverse" class="w-full">
                        <div class="absolute inset-0 bg-gradient-to-tr from-purple-600/20 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Curved bottom -->
        <div class="absolute bottom-0 inset-x-0 h-16">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute bottom-0 w-full h-full">
                <path fill="#F9FAFB" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,90.7C640,96,800,128,960,138.7C1120,149,1280,139,1360,133.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="bg-white relative z-10 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-purple-600"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold text-gray-800">+2M</h3>
                    </div>
                    <p class="text-gray-600">Membres actifs dans notre communauté mondiale</p>
                </div>
                
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-handshake text-purple-600"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold text-gray-800">93%</h3>
                    </div>
                    <p class="text-gray-600">Taux de satisfaction chez nos utilisateurs</p>
                </div>
                
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-lightbulb text-purple-600"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold text-gray-800">+500K</h3>
                    </div>
                    <p class="text-gray-600">Idées partagées et projets lancés chaque mois</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Trouvez votre tribu, développez vos horizons
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nous offrons les outils nécessaires pour créer des connexions authentiques et stimuler l'innovation collective.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Section Communautés -->
                <div class="group bg-white rounded-2xl p-8 shadow-xl transition-all hover:shadow-2xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                        <i class="fas fa-network-wired text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Communautés Dynamiques</h3>
                    <p class="text-gray-600 mb-6">
                        Rejoignez des groupes passionnés partageant vos intérêts, votre secteur ou vos ambitions. Échangez des idées et transformez-les en opportunités.
                    </p>
                    <a href="#" class="flex items-center text-purple-600 font-medium hover:text-purple-700 transition-colors">
                        Explorer les communautés
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Section Apprentissage -->
                <div class="group bg-white rounded-2xl p-8 shadow-xl transition-all hover:shadow-2xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                        <i class="fas fa-graduation-cap text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Croissance Continue</h3>
                    <p class="text-gray-600 mb-6">
                        Accédez à une bibliothèque de ressources, de cours et d'ateliers créés par des experts pour développer vos compétences et votre réseau.
                    </p>
                    <a href="#" class="flex items-center text-purple-600 font-medium hover:text-purple-700 transition-colors">
                        Découvrir l'apprentissage
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Section Collaboration -->
                <div class="group bg-white rounded-2xl p-8 shadow-xl transition-all hover:shadow-2xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                        <i class="fas fa-puzzle-piece text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Projets Collaboratifs</h3>
                    <p class="text-gray-600 mb-6">
                        Créez ou rejoignez des initiatives qui correspondent à vos valeurs. Collaborez avec des talents complémentaires pour réaliser vos visions.
                    </p>
                    <a href="#" class="flex items-center text-purple-600 font-medium hover:text-purple-700 transition-colors">
                        Voir les projets
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Section Visibilité -->
                <div class="group bg-white rounded-2xl p-8 shadow-xl transition-all hover:shadow-2xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                        <i class="fas fa-bullhorn text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Amplification d'Impact</h3>
                    <p class="text-gray-600 mb-6">
                        Partagez vos idées, vos réussites et vos apprentissages. Gagnez en visibilité auprès d'une communauté qui valorise l'authenticité.
                    </p>
                    <a href="#" class="flex items-center text-purple-600 font-medium hover:text-purple-700 transition-colors">
                        Amplifier votre voix
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-purple-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-12 flex flex-col justify-center">
                        <div class="flex mb-6">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400 ml-1"></i>
                            <i class="fas fa-star text-yellow-400 ml-1"></i>
                            <i class="fas fa-star text-yellow-400 ml-1"></i>
                            <i class="fas fa-star text-yellow-400 ml-1"></i>
                        </div>
                        <blockquote class="text-xl font-medium text-gray-800 mb-6">
                            "Nexus a transformé ma façon de connecter avec d'autres créateurs. J'ai trouvé non seulement un réseau, mais une véritable communauté qui a propulsé mes projets vers de nouveaux sommets."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-full overflow-hidden">
                                <img src="/api/placeholder/100/100" alt="Portrait utilisateur" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Sophie Mercier</p>
                                <p class="text-gray-600 text-sm">Fondatrice, Studio Créatif Lumine</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-purple-600 p-12 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h3 class="text-2xl font-bold mb-6">Rejoignez +2 millions de créateurs et innovateurs</h3>
                            <p class="text-purple-100 mb-8">Inscrivez-vous aujourd'hui et découvrez le pouvoir de la collaboration intelligente.</p>
                            <a href="#" class="inline-block px-8 py-4 bg-white text-purple-700 font-medium rounded-full shadow-md hover:bg-purple-50 transition-colors">
                                Commencer maintenant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-12 border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <span class="text-xl font-bold text-purple-800">
                        <i class="fas fa-hashtag mr-1 text-purple-600"></i>Nexus
                    </span>
                    <p class="text-gray-500 mt-2">Connecter. Collaborer. Créer.</p>
                </div>
                <div class="flex flex-wrap justify-center space-x-6 text-sm text-gray-600">
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">À propos</a>
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">Contact</a>
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">Confidentialité</a>
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">Conditions</a>
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">Carrières</a>
                    <a href="#" class="hover:text-purple-600 transition-colors mb-3">Aide</a>
                </div>
            </div>
            <div class="border-t border-gray-100 mt-8 pt-8 text-center text-gray-500 text-sm">
                <p>© 2025 Nexus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>