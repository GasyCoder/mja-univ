<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

// Mock Data mimicking the original Livewire controllers
const posts = [
    { title: "Cérémonie de remise de diplômes 2024", date: "12 Mars 2024", category: "Actualité", image: "https://placehold.co/600x400/png?text=Diplome" },
    { title: "Nouveau partenariat avec l'Université de Lyon", date: "10 Mars 2024", category: "Coopération", image: "https://placehold.co/600x400/png?text=Partenariat" },
    { title: "Rentrée solennelle de l'École Doctorale", date: "05 Mars 2024", category: "Pédagogie", image: "https://placehold.co/600x400/png?text=Doctorat" },
];

const events = [
    { title: "Conférence sur la Biodiversité", date: "25 Mars", location: "Grand Amphi", day: "25", month: "MAR" },
    { title: "Journée Portes Ouvertes", date: "02 Avril", location: "Campus Ambondrona", day: "02", month: "AVR" },
];

const motPresident = {
    title: "Le mot du Président",
    content: "Chers étudiants, chers collègues, bienvenue sur le nouveau portail de l'Université de Mahajanga. Notre engagement envers l'excellence académique reste notre priorité...",
    name: "Pr. RAJAONARIVELO Paul",
    image: "https://placehold.co/200x200/png?text=President"
};

const stats = [
    { value: "12 000+", label: "Étudiants actifs" },
    { value: "6", label: "Établissements" },
    { value: "120+", label: "Enseignants-chercheurs" },
    { value: "45+", label: "Programmes accrédités" },
];

const quickLinks = [
    {
        title: "Admissions 2024",
        description: "Dossiers, calendriers et critères d'accès.",
        href: "/admissions",
    },
    {
        title: "Espace Étudiant",
        description: "Accédez à vos services numériques.",
        href: "/espace-etudiant",
    },
    {
        title: "International",
        description: "Mobilités, conventions et coopérations.",
        href: "/international",
    },
    {
        title: "Recherche & Innovation",
        description: "Laboratoires et projets structurants.",
        href: "/recherche",
    },
];
</script>

<template>
    <Head title="Accueil" />

    <MainLayout>
        <!-- 1. Banner Slider (Replaces livewire.pages.banner) -->
        <section class="relative h-[600px] flex items-center bg-gray-900 overflow-hidden">
             <!-- Background Image (Mock) -->
            <div class="absolute inset-0 bg-[url('https://placehold.co/1920x800/png?text=Campus+Mahajanga')] bg-cover bg-center opacity-50"></div>
            <div class="absolute inset-0 bg-linear-to-t from-gray-900 via-transparent to-transparent"></div>
            
            <div class="container mx-auto px-4 relative z-10 text-white">
                <span class="inline-block px-4 py-1.5 rounded-full bg-primary-600 text-sm font-semibold mb-6 animate-fade-in">Excellence & Innovation</span>
                <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6 max-w-4xl animate-slide-up">
                    Bienvenue à l'Université de <span class="text-primary-400">Mahajanga</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-2xl animate-slide-up" style="animation-delay: 0.2s">
                    Formons les leaders de demain à travers une pédagogie innovante et une recherche impactante.
                </p>
                <div class="flex flex-wrap gap-4 animate-slide-up" style="animation-delay: 0.3s">
                    <PrimaryButton variant="primary">Découvrir l'Université</PrimaryButton>
                    <PrimaryButton variant="outline" class="!text-white !border-white hover:!bg-white/10">Nos Formations</PrimaryButton>
                </div>
            </div>
        </section>

        <!-- 2. Accès rapides & chiffres clés -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-[1.4fr_1fr] gap-10 items-start">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Accès rapides</h2>
                        <p class="text-gray-500 mb-8">Les services essentiels pour étudiants, enseignants et partenaires.</p>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <Link
                                v-for="link in quickLinks"
                                :key="link.title"
                                :href="link.href"
                                class="group rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all"
                            >
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary-600 mb-2">
                                    {{ link.title }}
                                </h3>
                                <p class="text-sm text-gray-500">{{ link.description }}</p>
                                <span class="inline-flex items-center text-sm font-semibold text-primary-600 mt-4">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </Link>
                        </div>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Chiffres clés</h3>
                        <div class="grid grid-cols-2 gap-6">
                            <div v-for="stat in stats" :key="stat.label" class="rounded-2xl bg-white border border-gray-100 p-5 shadow-sm">
                                <div class="text-2xl font-bold text-primary-600">{{ stat.value }}</div>
                                <div class="text-sm text-gray-500 mt-2">{{ stat.label }}</div>
                            </div>
                        </div>
                        <div class="mt-8 rounded-2xl bg-primary-600 text-white p-6">
                            <p class="text-sm uppercase tracking-wide text-primary-100">Objectif 2030</p>
                            <p class="text-lg font-semibold mt-2">Une université inclusive, connectée et durable au service du territoire.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Mot du President (Replaces livewire.pages.mot_president) -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/3 relative">
                        <div class="absolute inset-0 bg-primary-100 rounded-full transform -translate-x-4 translate-y-4 -z-10"></div>
                        <img :src="motPresident.image" alt="President" class="rounded-2xl shadow-xl w-full max-w-sm mx-auto">
                    </div>
                    <div class="md:w-2/3">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 relative inline-block">
                            {{ motPresident.title }}
                            <span class="absolute bottom-0 left-0 w-1/3 h-1 bg-primary-500 rounded-full"></span>
                        </h2>
                        <blockquote class="text-xl text-gray-600 italic mb-6 border-l-4 border-primary-500 pl-4">
                            "{{ motPresident.content }}"
                        </blockquote>
                        <div class="font-bold text-gray-900 text-lg">{{ motPresident.name }}</div>
                        <div class="text-primary-600">Président de l'Université</div>
                        <Link href="/mot-du-president" class="inline-flex items-center text-primary-600 font-semibold mt-6 hover:underline">
                            Lire la suite
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Actualités (Replaces livewire.pages.post) -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Actualités Récentes</h2>
                        <p class="text-gray-500 mt-2">Restez informé des dernières nouvelles du campus.</p>
                    </div>
                    <Link href="/actualites" class="hidden md:flex items-center text-primary-600 font-semibold hover:text-primary-700">
                        Voir tout
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </Link>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div v-for="(post, index) in posts" :key="index" class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                        <div class="relative h-48 overflow-hidden">
                            <img :src="post.image" :alt="post.title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur text-xs font-bold px-3 py-1 rounded-full text-primary-700">
                                {{ post.category }}
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-400 mb-2 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ post.date }}
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors line-clamp-2">
                                {{ post.title }}
                            </h3>
                            <Link href="#" class="inline-block mt-4 text-sm font-semibold text-gray-500 hover:text-primary-600">Lire l'article &rarr;</Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Events & Newsletter (Combined) -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 grid lg:grid-cols-2 gap-16">
                <!-- Events -->
                <div>
                     <h2 class="text-3xl font-bold text-gray-900 mb-8">Agenda</h2>
                     <div class="space-y-6">
                        <div v-for="(event, index) in events" :key="index" class="flex gap-6 items-start p-4 hover:bg-gray-50 rounded-xl transition-colors border border-transparent hover:border-gray-100">
                            <div class="flex-shrink-0 w-20 h-20 bg-primary-50 rounded-xl flex flex-col items-center justify-center text-primary-700 border border-primary-100">
                                <span class="text-2xl font-bold">{{ event.day }}</span>
                                <span class="text-xs font-bold uppercase tracking-wider">{{ event.month }}</span>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 hover:text-primary-600 cursor-pointer">{{ event.title }}</h4>
                                <div class="flex items-center text-gray-500 text-sm mt-2 gap-4">
                                    <span class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ event.location }}
                                    </span>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="mt-8">
                        <Link href="#" class="text-primary-600 font-semibold hover:underline">Voir tous les événements &rarr;</Link>
                     </div>
                </div>

                <!-- Newsletter -->
                <div class="bg-primary-900 rounded-3xl p-10 text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-4">Restez connecté</h3>
                        <p class="text-primary-100 mb-8">Recevez les dernières nouvelles, les annonces d'événements et les mises à jour académiques directement dans votre boîte de réception.</p>
                        
                        <form @submit.prevent class="space-y-4">
                            <div>
                                <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:bg-white/20 transition-all">
                            </div>
                            <button type="submit" class="w-full px-6 py-3 bg-white text-primary-900 font-bold rounded-xl hover:bg-primary-50 transition-colors shadow-lg">
                                S'abonner
                            </button>
                        </form>
                        <p class="text-xs text-primary-300 mt-4 text-center">Aucun spam. Désinscription à tout moment.</p>
                    </div>
                </div>
            </div>
        </section>

    </MainLayout>
</template>
