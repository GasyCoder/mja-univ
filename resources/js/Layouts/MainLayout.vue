<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isMobileMenuOpen = ref(false);
const activeSection = ref('');

const portals = [
    { label: 'Étudiants', href: '/resultats-preinscription' },
    { label: 'Enseignants', href: '#' },
    { label: 'Administration', href: '/mja/user-auth' },
    { label: 'Grand public', href: '/contactez-nous' },
];

const primaryNav = [
    { label: 'Université', href: '/historique' },
    { label: 'Formations', href: '/offres-de-formation' },
    { label: 'Recherche', href: '/publications-scientifiques' },
    { label: 'International', href: '/documents' },
    { label: 'Vie du campus', href: '/nos-staffs' },
    { label: 'Actualités', href: '/voir-tous-actualites/' },
];

const utilityNav = [
    { label: 'Admissions', href: '/resultats-preinscription' },
    { label: 'Bibliothèque', href: '/documents' },
    { label: 'Contact', href: '/contactez-nous' },
];

const highlightLinks = [
    { label: 'Calendrier académique', href: '#' },
    { label: 'Espace documentaire', href: '/documents' },
    { label: 'Requêtes & recherche', href: '/requete' },
];

const mobileSections = [
    {
        key: 'portals',
        title: 'Accès directs',
        links: portals,
    },
    {
        key: 'navigation',
        title: 'Navigation',
        links: primaryNav,
    },
    {
        key: 'services',
        title: 'Services',
        links: utilityNav,
    },
];

const footerSections = [
    {
        title: 'Université',
        links: [
            { label: 'Gouvernance', href: '/organigramme' },
            { label: 'Histoire', href: '/historique' },
            { label: 'Responsabilité sociale', href: '/documents' },
        ],
    },
    {
        title: 'Études',
        links: [
            { label: 'Offre de formation', href: '/offres-de-formation' },
            { label: 'Calendrier académique', href: '#' },
            { label: 'Procédures d’inscription', href: '/resultats-preinscription' },
        ],
    },
    {
        title: 'Recherche',
        links: [
            { label: 'Laboratoires', href: '/publications-scientifiques' },
            { label: 'Publications', href: '/publications-scientifiques' },
            { label: 'Innovation', href: '/documents' },
        ],
    },
];

const toggleSection = (key) => {
    activeSection.value = activeSection.value === key ? '' : key;
};
</script>

<template>
    <div class="min-h-screen bg-slate-50 text-slate-900">
        <a
            href="#contenu-principal"
            class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:left-6 focus:top-4 focus:rounded-full focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-primary-900 focus:shadow"
        >
            Aller au contenu principal
        </a>

        <header class="border-b border-slate-200 bg-white">
            <div class="border-b border-slate-100 bg-slate-50">
                <div class="mx-auto flex max-w-[var(--spacing-container)] flex-wrap items-center justify-between gap-4 px-6 py-3 text-xs text-slate-600">
                    <div class="flex flex-wrap items-center gap-5">
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.2em] text-primary-700">
                            Portail institutionnel
                        </span>
                        <span>Campus Ambondrona · Mahajanga 401</span>
                        <span>contact@mja-univ.mg</span>
                    </div>
                    <div class="hidden lg:flex items-center gap-4">
                        <span class="font-semibold uppercase tracking-[0.25em] text-slate-400">Portails</span>
                        <div class="flex items-center gap-4">
                            <Link v-for="portal in portals" :key="portal.label" :href="portal.href" class="font-semibold text-slate-700 hover:text-primary-700">
                                {{ portal.label }}
                            </Link>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-400">
                        <span>FR</span>
                        <span class="h-3 w-px bg-slate-300"></span>
                        <span>EN</span>
                    </div>
                </div>
            </div>

            <div class="mx-auto flex max-w-[var(--spacing-container)] items-center justify-between gap-6 px-6 py-5">
                <Link href="/" class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-900 text-white font-semibold">
                        UM
                    </div>
                    <div class="leading-tight">
                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-700">Université</p>
                        <p class="text-lg font-semibold text-slate-900">Université de Mahajanga</p>
                        <p class="text-xs text-slate-500">Ministère de l’Enseignement Supérieur</p>
                    </div>
                </Link>

                <div class="hidden lg:flex flex-1 items-center justify-between gap-8">
                    <nav class="flex items-center gap-8 text-sm font-semibold text-slate-700">
                        <Link v-for="item in primaryNav" :key="item.label" :href="item.href" class="hover:text-primary-700">
                            {{ item.label }}
                        </Link>
                    </nav>
                    <div class="flex items-center gap-3">
                        <div class="hidden xl:flex items-center gap-2 rounded-full border border-slate-200 px-4 py-2 text-xs text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
                            </svg>
                            <span>Rechercher une information</span>
                        </div>
                        <Link
                            v-for="item in utilityNav"
                            :key="item.label"
                            :href="item.href"
                            class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 hover:border-primary-200 hover:text-primary-700"
                        >
                            {{ item.label }}
                        </Link>
                        <Link href="/mja/user-auth" class="rounded-full bg-primary-700 px-5 py-2 text-xs font-semibold text-white hover:bg-primary-800">
                            Espace numérique
                        </Link>
                    </div>
                </div>

                <button
                    type="button"
                    class="flex items-center gap-2 rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700 lg:hidden"
                    @click="isMobileMenuOpen = !isMobileMenuOpen"
                    :aria-expanded="isMobileMenuOpen.toString()"
                    aria-controls="mobile-navigation"
                >
                    Menu
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="border-t border-slate-100 bg-white">
                <div class="mx-auto flex max-w-[var(--spacing-container)] flex-wrap items-center justify-between gap-4 px-6 py-3 text-xs text-slate-600">
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="font-semibold uppercase tracking-[0.25em] text-slate-400">Accès direct</span>
                        <div class="flex flex-wrap items-center gap-4">
                            <Link v-for="link in highlightLinks" :key="link.label" :href="link.href" class="font-semibold text-slate-700 hover:text-primary-700">
                                {{ link.label }}
                            </Link>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-slate-500">
                        <span class="font-semibold text-slate-700">Urgences</span>
                        <span>+261 20 22 000 00</span>
                    </div>
                </div>
            </div>

            <transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0 -translate-y-2"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-2"
            >
                <div v-show="isMobileMenuOpen" id="mobile-navigation" class="border-t border-slate-200 bg-white lg:hidden">
                    <div class="px-6 py-6 space-y-6">
                        <div class="space-y-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">
                            Portails & services
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <Link v-for="item in utilityNav" :key="item.label" :href="item.href" class="rounded-xl border border-slate-200 px-4 py-3 text-xs font-semibold text-slate-700">
                                {{ item.label }}
                            </Link>
                            <Link href="/mja/user-auth" class="col-span-2 rounded-xl bg-primary-700 px-4 py-3 text-center text-xs font-semibold text-white">
                                Espace numérique
                            </Link>
                        </div>

                        <div class="space-y-4">
                            <div v-for="section in mobileSections" :key="section.key" class="rounded-2xl border border-slate-200">
                                <button
                                    type="button"
                                    class="flex w-full items-center justify-between px-4 py-3 text-sm font-semibold text-slate-800"
                                    @click="toggleSection(section.key)"
                                >
                                    {{ section.title }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" :class="{ 'rotate-180': activeSection === section.key }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div v-show="activeSection === section.key" class="border-t border-slate-200 px-4 py-3">
                                    <div class="grid grid-cols-2 gap-3">
                                        <Link
                                            v-for="link in section.links"
                                            :key="link.label"
                                            :href="link.href"
                                            class="text-xs font-semibold text-slate-600 hover:text-primary-700"
                                            @click="isMobileMenuOpen = false"
                                        >
                                            {{ link.label }}
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4 text-xs text-slate-600">
                            <p class="font-semibold text-slate-800">Besoin d’aide ?</p>
                            <p class="mt-2">Admissions, scolarité, recherche : nos équipes répondent du lundi au vendredi.</p>
                            <p class="mt-2 text-primary-700">contact@mja-univ.mg</p>
                            <div class="mt-4 flex flex-wrap gap-3">
                                <Link href="/contactez-nous" class="text-xs font-semibold text-slate-700">Contact</Link>
                                <Link href="/requete" class="text-xs font-semibold text-slate-700">Requêtes</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </header>

        <main id="contenu-principal">
            <slot />
        </main>

        <footer class="border-t border-slate-200 bg-white">
            <div class="mx-auto grid max-w-[var(--spacing-container)] gap-10 px-6 py-12 lg:grid-cols-[1.4fr_1fr_1fr_1fr]">
                <div class="space-y-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-secondary-500">Université de Mahajanga</p>
                    <p class="text-lg font-semibold text-slate-900">Un campus public au service du territoire, de la recherche et de l’innovation.</p>
                    <div class="space-y-1 text-sm text-slate-600">
                        <p>Campus Ambondrona, Mahajanga 401</p>
                        <p>+261 20 22 000 00</p>
                        <p>contact@mja-univ.mg</p>
                    </div>
                </div>

                <div v-for="section in footerSections" :key="section.title">
                    <h3 class="text-sm font-semibold text-slate-900">{{ section.title }}</h3>
                    <ul class="mt-4 space-y-3 text-sm text-slate-600">
                        <li v-for="link in section.links" :key="link.label">
                            <Link :href="link.href" class="hover:text-primary-700">{{ link.label }}</Link>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-semibold text-slate-900">Suivez-nous</h3>
                    <div class="flex items-center gap-3 text-sm font-semibold text-slate-600">
                        <a href="#" class="rounded-full border border-slate-200 px-4 py-2 hover:border-primary-200 hover:text-primary-700">LinkedIn</a>
                        <a href="#" class="rounded-full border border-slate-200 px-4 py-2 hover:border-primary-200 hover:text-primary-700">Facebook</a>
                    </div>
                    <div class="rounded-2xl bg-slate-50 p-4 text-sm text-slate-600">
                        <p class="font-semibold text-slate-900">Newsletter institutionnelle</p>
                        <p class="mt-2">Recevez l’actualité, les appels à projets et les temps forts du campus.</p>
                        <div class="mt-4 flex gap-2">
                            <input type="email" placeholder="Votre email" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-sm focus:border-primary-400 focus:outline-none" />
                            <button type="button" class="rounded-xl bg-primary-700 px-4 py-2 text-xs font-semibold text-white">S’abonner</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-100 bg-slate-50">
                <div class="mx-auto flex max-w-[var(--spacing-container)] flex-col gap-2 px-6 py-4 text-xs text-slate-500 md:flex-row md:items-center md:justify-between">
                    <span>© {{ new Date().getFullYear() }} Université de Mahajanga. Tous droits réservés.</span>
                    <div class="flex items-center gap-4">
                        <Link href="/mentions-legales" class="hover:text-primary-700">Mentions légales</Link>
                        <Link href="/politique-confidentialite" class="hover:text-primary-700">Confidentialité</Link>
                        <Link href="/accessibilite" class="hover:text-primary-700">Accessibilité</Link>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
