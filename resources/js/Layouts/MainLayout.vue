<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isMobileMenuOpen = ref(false);

const mobileNavSections = [
    {
        title: 'Université',
        links: [
            { label: 'Historique', href: '/historique' },
            { label: 'Organigramme', href: '/organigramme' },
            { label: 'Staff & Leadership', href: '/staff' },
            { label: 'Textes et arrêtés', href: '#' },
            { label: 'Relations', href: '#' },
        ],
    },
    {
        title: 'Recherche',
        links: [
            { label: 'Publications Scientifiques', href: '/publications' },
            { label: 'Laboratoires', href: '#' },
            { label: 'Jardin Botanique', href: '#' },
            { label: 'Musées', href: '#' },
        ],
    },
    {
        title: 'Formations',
        links: [
            { label: 'Établissements', href: '/etablissements' },
            { label: 'Écoles Doctorales', href: '/ecoles-doctorales' },
            { label: 'Système LMD', href: '#' },
        ],
    },
    {
        title: 'Événements',
        links: [
            { label: "Université d'Été", href: '#' },
            { label: 'Séminaires', href: '#' },
        ],
    },
];

const utilityLinks = [
    { label: 'Actualités', href: '/actualites' },
    { label: 'Événements', href: '#' },
    { label: 'Contact', href: '/contact' },
];
</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-50 text-gray-800 font-sans">
        <a href="#contenu-principal" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:top-4 focus:left-4 focus:bg-white focus:text-gray-900 focus:px-4 focus:py-2 focus:rounded-full focus:shadow">
            Aller au contenu principal
        </a>
        <!-- Sticky Header with Glassmorphism -->
        <header class="sticky top-0 z-50 w-full backdrop-blur-md bg-white/70 border-b border-gray-200/50 shadow-sm transition-all duration-300">
            <div class="container mx-auto px-4 h-16 flex items-center justify-between">
                <!-- Logo -->
                <Link href="/" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white font-bold shadow-lg group-hover:scale-105 transition-transform">
                        UM
                    </div>
                    <span class="text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-primary-700 to-primary-500">
                        Univ Mahajanga
                    </span>
                </Link>

                <!-- Desktop Nav -->
                <nav class="hidden lg:flex items-center gap-6 font-medium text-gray-700">
                    <Link href="/" class="hover:text-primary-600 transition-colors flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                        </svg>
                        Accueil
                    </Link>

                    <!-- Universite Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 hover:text-primary-600 transition-colors py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h6v4H7V5zm13 1.58V19a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2H6v2a1 1 0 01-1 1H3a1 1 0 01-1-1V6.58L4 8l8-1.58L20 6.58z" clip-rule="evenodd" />
                            </svg>
                            Université
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 group-hover:rotate-180 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-0 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2 space-y-1">
                                <Link href="/historique" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Historique</Link>
                                <Link href="/organigramme" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Organigramme</Link>
                                <Link href="/staff" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Staff & Leadership</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Textes et arrêtés</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Relations</Link>
                            </div>
                        </div>
                    </div>

                    <!-- Recherche Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 hover:text-primary-600 transition-colors py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                            </svg>
                            Recherche
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 group-hover:rotate-180 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-0 w-60 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2 space-y-1">
                                <Link href="/publications" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Publications Scientifiques</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Laboratoires</Link>
                                <div class="h-px bg-gray-100 my-1"></div>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Jardin Botanique</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Musées</Link>
                            </div>
                        </div>
                    </div>

                    <!-- Formations Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 hover:text-primary-600 transition-colors py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" clip-rule="evenodd" />
                            </svg>
                            Formations
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 group-hover:rotate-180 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-0 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2 space-y-1">
                                <Link href="/etablissements" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Établissements</Link>
                                <Link href="/ecoles-doctorales" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Écoles Doctorales</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Système LMD</Link>
                            </div>
                        </div>
                    </div>

                    <!-- Evenements Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 hover:text-primary-600 transition-colors py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            Événements
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 group-hover:rotate-180 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-0 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2 space-y-1">
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Université d'Été</Link>
                                <Link href="#" class="block px-4 py-2 text-sm rounded-lg hover:bg-primary-50 hover:text-primary-700">Séminaires</Link>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Auth/CTA -->
                <div class="hidden lg:flex items-center gap-4">
                     <Link href="/contact" class="p-2 text-gray-400 hover:text-primary-600 transition-colors rounded-full hover:bg-primary-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                        </svg>
                    </Link>
                    <Link href="/mja/user-auth" class="px-5 py-2.5 bg-gray-900 hover:bg-gray-800 text-white font-semibold rounded-full shadow-lg transition-all transform hover:-translate-y-0.5 text-sm">
                        Connexion
                    </Link>
                </div>

                <!-- Mobile Menu Button (Placeholder) -->
                <button
                    class="md:hidden text-gray-600"
                    type="button"
                    @click="isMobileMenuOpen = !isMobileMenuOpen"
                    :aria-expanded="isMobileMenuOpen.toString()"
                    aria-controls="mobile-menu"
                    aria-label="Afficher le menu"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <transition
                enter-active-class="transition ease-out duration-200"
                enter-from-class="opacity-0 -translate-y-2"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition ease-in duration-150"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-2"
            >
                <div v-show="isMobileMenuOpen" id="mobile-menu" class="md:hidden border-t border-gray-200 bg-white shadow-lg">
                    <div class="px-4 py-6 space-y-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-2 gap-3">
                                <Link
                                    v-for="link in utilityLinks"
                                    :key="link.label"
                                    :href="link.href"
                                    class="px-3 py-2 rounded-lg bg-gray-50 text-sm font-semibold text-gray-700 hover:bg-primary-50 hover:text-primary-700 transition-colors"
                                    @click="isMobileMenuOpen = false"
                                >
                                    {{ link.label }}
                                </Link>
                            </div>
                        </div>
                        <div class="space-y-5">
                            <div v-for="section in mobileNavSections" :key="section.title" class="space-y-3">
                                <h3 class="text-xs font-bold uppercase tracking-widest text-gray-400">{{ section.title }}</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    <Link
                                        v-for="link in section.links"
                                        :key="link.label"
                                        :href="link.href"
                                        class="text-sm text-gray-700 hover:text-primary-600"
                                        @click="isMobileMenuOpen = false"
                                    >
                                        {{ link.label }}
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex flex-col gap-3">
                            <Link href="/mja/user-auth" class="px-5 py-2.5 bg-gray-900 text-white font-semibold rounded-full shadow-lg text-center" @click="isMobileMenuOpen = false">
                                Connexion
                            </Link>
                            <Link href="/contact" class="px-5 py-2.5 border border-gray-200 rounded-full text-center text-gray-600 font-semibold hover:border-primary-300 hover:text-primary-700" @click="isMobileMenuOpen = false">
                                Nous contacter
                            </Link>
                        </div>
                    </div>
                </div>
            </transition>
        </header>

        <!-- Main Content -->
        <main id="contenu-principal" class="grow">
            <slot />
        </main>

        <!-- Modern Footer -->
        <footer class="bg-gray-900 text-gray-300 py-12">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h3 class="text-white text-lg font-bold">Université de Mahajanga</h3>
                    <p class="text-sm text-gray-400">Excellence, Innovation et Développement depuis 1977.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Liens Rapides</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-primary-400 transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Actualités</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Événements</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Ressources</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Bibliothèque</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Espace Étudiant</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Espace Personnel</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li>Campus Ambondrona</li>
                        <li>Mahajanga 401, Madagascar</li>
                        <li>contact@mja-univ.mg</li>
                    </ul>
                </div>
            </div>
            <div class="container mx-auto px-4 mt-8 pt-8 border-t border-gray-800 text-center text-sm text-gray-500">
                © {{ new Date().getFullYear() }} Université de Mahajanga. Tous droits réservés.
            </div>
        </footer>
    </div>
</template>
