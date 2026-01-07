<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import SectionHeader from '@/Components/SectionHeader.vue';
import InfoCard from '@/Components/InfoCard.vue';

const heroStats = [
    { label: 'Étudiants', value: '12 300' },
    { label: 'Formations accréditées', value: '52' },
    { label: 'Laboratoires', value: '14' },
    { label: 'Partenaires internationaux', value: '38' },
];

const pathways = [
    {
        title: 'Admissions & orientation',
        description: 'Calendriers, procédures d’inscription et accompagnement personnalisé.',
        meta: 'Futurs étudiants',
        href: '/resultats-preinscription',
    },
    {
        title: 'Espace étudiant',
        description: 'Services numériques, ressources pédagogiques et vie associative.',
        meta: 'Étudiants',
        href: '#',
    },
    {
        title: 'Espace enseignant',
        description: 'Accès aux outils pédagogiques, recherche et mobilité.',
        meta: 'Enseignants',
        href: '#',
    },
    {
        title: 'Administration',
        description: 'Procédures internes, services et ressources RH.',
        meta: 'Institution',
        href: '/mja/user-auth',
    },
];

const formations = [
    {
        title: 'Sciences & Technologies',
        description: 'Ingénierie, mathématiques appliquées, sciences de la mer.',
        meta: '6 mentions',
        href: '/offres-de-formation',
    },
    {
        title: 'Santé & Sciences de la vie',
        description: 'Médecine, biologie, environnement et nutrition.',
        meta: '4 mentions',
        href: '/offres-de-formation',
    },
    {
        title: 'Lettres & Sciences humaines',
        description: 'Langues, histoire, patrimoine et médiation culturelle.',
        meta: '5 mentions',
        href: '/offres-de-formation',
    },
];

const researchHighlights = [
    {
        title: 'Observatoire littoral & climat',
        description: 'Programmes de recherche sur la résilience côtière et l’adaptation climatique.',
        meta: 'Recherche',
        href: '/publications-scientifiques',
    },
    {
        title: 'Innovation agroalimentaire',
        description: 'Valorisation des filières locales et laboratoire d’innovation alimentaire.',
        meta: 'Innovation',
        href: '/publications-scientifiques',
    },
    {
        title: 'Patrimoine & société',
        description: 'Projets interdisciplinaires sur les dynamiques sociales régionales.',
        meta: 'Sciences humaines',
        href: '/publications-scientifiques',
    },
];

const news = [
    {
        title: 'Ouverture du centre de ressources numériques',
        date: '08 avril 2024',
        category: 'Université',
        href: '/voir-tous-actualites/',
    },
    {
        title: 'Partenariat stratégique avec l’Université de Nantes',
        date: '02 avril 2024',
        category: 'International',
        href: '/voir-tous-actualites/',
    },
    {
        title: 'Bourses d’excellence pour les masters 2024-2025',
        date: '25 mars 2024',
        category: 'Formation',
        href: '/voir-tous-actualites/',
    },
];

const events = [
    {
        title: 'Forum des métiers et de l’orientation',
        date: '18 mai',
        location: 'Grand amphithéâtre',
    },
    {
        title: 'Semaine de la recherche',
        date: '03 juin',
        location: 'Campus Ambondrona',
    },
    {
        title: 'Journée portes ouvertes',
        date: '21 juin',
        location: 'Site universitaire',
    },
];

const partnerships = [
    'Agence Universitaire de la Francophonie',
    'Institut de Recherche pour le Développement',
    'Université de Lyon',
    'Université de Montpellier',
];
</script>

<template>
    <Head title="Accueil" />

    <MainLayout>
        <section class="relative overflow-hidden bg-primary-950 text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.15),transparent_55%)]"></div>
            <div class="mx-auto grid max-w-[var(--spacing-container)] gap-12 px-6 py-20 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                <div class="space-y-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-accent-200">Université de Mahajanga</p>
                    <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                        Une université publique engagée pour la connaissance, l’innovation et le territoire.
                    </h1>
                    <p class="text-lg text-primary-100 max-w-2xl">
                        Un campus interdisciplinaire qui accompagne les étudiants, la recherche et les partenariats régionaux à Madagascar et à l’international.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link href="/resultats-preinscription" class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-primary-900">
                            Démarrer votre parcours
                        </Link>
                        <Link href="/offres-de-formation" class="rounded-full border border-white/40 px-6 py-3 text-sm font-semibold text-white hover:border-white">
                            Découvrir les formations
                        </Link>
                    </div>
                </div>
                <div class="rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-accent-200">Repères institutionnels</p>
                    <div class="mt-6 grid grid-cols-2 gap-6">
                        <div v-for="stat in heroStats" :key="stat.label" class="space-y-2">
                            <p class="text-2xl font-semibold text-white">{{ stat.value }}</p>
                            <p class="text-xs uppercase tracking-[0.2em] text-primary-200">{{ stat.label }}</p>
                        </div>
                    </div>
                    <div class="mt-8 rounded-2xl bg-white/10 p-4 text-sm text-primary-100">
                        <p class="font-semibold text-white">Cap 2030</p>
                        <p class="mt-2">Accélérer la transformation numérique, la recherche appliquée et l’impact régional.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto max-w-[var(--spacing-container)] px-6 py-16">
                <SectionHeader
                    eyebrow="Accès essentiels"
                    title="Parcours clairs pour chaque public"
                    subtitle="Des services et informations structurés pour répondre aux besoins des étudiants, enseignants, personnels et partenaires."
                    action-label="Voir tous les services"
                    action-href="/documents"
                />
                <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <InfoCard v-for="item in pathways" :key="item.title" v-bind="item" />
                </div>
            </div>
        </section>

        <section class="bg-slate-50">
            <div class="mx-auto max-w-[var(--spacing-container)] px-6 py-16">
                <SectionHeader
                    eyebrow="Formations"
                    title="Offre académique structurée"
                    subtitle="Des parcours professionnalisants et des filières de recherche alignés avec les besoins régionaux."
                    action-label="Explorer les formations"
                    action-href="/offres-de-formation"
                />
                <div class="mt-10 grid gap-6 lg:grid-cols-3">
                    <InfoCard v-for="program in formations" :key="program.title" v-bind="program" />
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto grid max-w-[var(--spacing-container)] gap-12 px-6 py-16 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="space-y-6">
                    <SectionHeader
                        eyebrow="Recherche"
                        title="Recherche appliquée et rayonnement scientifique"
                        subtitle="La recherche à Mahajanga articule innovation territoriale, excellence scientifique et coopération internationale."
                    />
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-sm text-slate-600">
                        <p class="font-semibold text-slate-900">Données clés</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center justify-between">
                                <span>Doctorants accompagnés</span>
                                <span class="font-semibold text-slate-900">240</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Projets financés (2023)</span>
                                <span class="font-semibold text-slate-900">32</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Publications indexées</span>
                                <span class="font-semibold text-slate-900">180+</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-6">
                    <InfoCard v-for="item in researchHighlights" :key="item.title" v-bind="item" />
                </div>
            </div>
        </section>

        <section class="bg-slate-50">
            <div class="mx-auto max-w-[var(--spacing-container)] px-6 py-16">
                <SectionHeader
                    eyebrow="Actualités & agenda"
                    title="Temps forts de l’université"
                    subtitle="Suivez les annonces institutionnelles, les conférences et les rendez-vous académiques."
                    action-label="Toutes les actualités"
                    action-href="/voir-tous-actualites/"
                />
                <div class="mt-10 grid gap-8 lg:grid-cols-[1.4fr_0.6fr]">
                    <div class="grid gap-6 md:grid-cols-2">
                        <Link
                            v-for="item in news"
                            :key="item.title"
                            :href="item.href"
                            class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                        >
                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-secondary-500">{{ item.category }}</p>
                            <h3 class="mt-4 text-lg font-semibold text-slate-900 group-hover:text-primary-700">{{ item.title }}</h3>
                            <p class="mt-3 text-sm text-slate-500">{{ item.date }}</p>
                        </Link>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-6">
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-secondary-500">Agenda</p>
                        <ul class="mt-6 space-y-4">
                            <li v-for="event in events" :key="event.title" class="space-y-1 border-b border-slate-100 pb-4 last:border-none last:pb-0">
                                <p class="text-sm font-semibold text-slate-900">{{ event.title }}</p>
                                <p class="text-xs text-slate-500">{{ event.date }} · {{ event.location }}</p>
                            </li>
                        </ul>
                        <Link href="#" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-700">
                            Consulter l’agenda
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto max-w-[var(--spacing-container)] px-6 py-16">
                <SectionHeader
                    eyebrow="Vie de campus"
                    title="Un campus ouvert et solidaire"
                    subtitle="Accompagnement social, infrastructures et vie associative pour favoriser la réussite."
                />
                <div class="mt-10 grid gap-6 lg:grid-cols-3">
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <p class="text-sm font-semibold text-slate-900">Accompagnement social</p>
                        <p class="mt-3 text-sm text-slate-600">
                            Dispositifs d’aide, santé universitaire, logement et restauration pour soutenir les étudiants.
                        </p>
                        <Link href="/contactez-nous" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-700">
                            Découvrir les services
                        </Link>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-sm font-semibold text-slate-900">Infrastructures</p>
                        <p class="mt-3 text-sm text-slate-600">
                            Bibliothèques, laboratoires modernisés, espaces collaboratifs et équipements sportifs.
                        </p>
                        <Link href="/documents" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-700">
                            Visiter le campus
                        </Link>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <p class="text-sm font-semibold text-slate-900">Culture & engagement</p>
                        <p class="mt-3 text-sm text-slate-600">
                            Associations, événements culturels et initiatives citoyennes portées par la communauté.
                        </p>
                        <Link href="/voir-tous-actualites/" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-700">
                            Voir la programmation
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary-950 text-white">
            <div class="mx-auto flex max-w-[var(--spacing-container)] flex-col gap-10 px-6 py-16 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-2xl space-y-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-accent-200">Admissions 2024</p>
                    <h2 class="text-3xl font-semibold text-white">Préparer votre candidature dès maintenant</h2>
                    <p class="text-sm text-primary-100">
                        Des parcours de licence, master et doctorat accompagnés par une équipe dédiée à l’orientation.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <Link href="/resultats-preinscription" class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-primary-900">
                        Calendrier & étapes
                    </Link>
                    <Link href="/contactez-nous" class="rounded-full border border-white/30 px-6 py-3 text-sm font-semibold text-white hover:border-white">
                        Contacter l’équipe admissions
                    </Link>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto max-w-[var(--spacing-container)] px-6 py-16">
                <SectionHeader
                    eyebrow="Partenariats"
                    title="Un réseau académique ouvert"
                    subtitle="Coopérations internationales et collaborations avec les institutions publiques et privées."
                />
                <div class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        v-for="partner in partnerships"
                        :key="partner"
                        class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-6 text-center text-sm font-semibold text-slate-700"
                    >
                        {{ partner }}
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>
