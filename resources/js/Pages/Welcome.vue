<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import SectionHeader from '@/Components/SectionHeader.vue';

defineProps({
    version: String,
});
</script>

<template>
    <Head title="Bienvenue" />

    <MainLayout>
        <section class="bg-white">
            <div class="mx-auto grid max-w-[var(--spacing-container)] gap-12 px-6 py-20 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                <div class="space-y-6">
                    <SectionHeader
                        eyebrow="Portail institutionnel"
                        title="Bienvenue sur le site officiel de l’Université de Mahajanga"
                        subtitle="Accédez aux informations clés sur les formations, la recherche, la gouvernance et les services aux étudiants."
                    />
                    <div class="flex flex-wrap gap-4">
                        <Link href="/modern-home" class="rounded-full bg-primary-700 px-6 py-3 text-sm font-semibold text-white">
                            Accéder à l’accueil
                        </Link>
                        <Link href="/contactez-nous" class="rounded-full border border-slate-200 px-6 py-3 text-sm font-semibold text-slate-700">
                            Nous contacter
                        </Link>
                    </div>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-secondary-500">Environnement</p>
                    <p class="mt-4 text-sm text-slate-600">Cette instance tourne sur Laravel {{ version }}.</p>
                    <div class="mt-6 space-y-3 text-sm text-slate-600">
                        <div class="flex items-center justify-between">
                            <span>Version UI</span>
                            <span class="font-semibold text-slate-900">2024.1</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Statut</span>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Opérationnel</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>
