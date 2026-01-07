<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    title: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
    meta: {
        type: String,
        default: '',
    },
    href: {
        type: String,
        default: '#',
    },
});
</script>

<template>
    <Link
        :href="href"
        class="group flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg"
    >
        <p v-if="meta" class="text-xs font-semibold uppercase tracking-[0.2em] text-secondary-500">
            {{ meta }}
        </p>
        <h3 class="mt-3 text-lg font-semibold text-slate-900 group-hover:text-primary-700">
            {{ title }}
        </h3>
        <p class="mt-3 text-sm text-slate-600">
            {{ description }}
        </p>
        <span class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-700">
            Découvrir
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </span>
    </Link>
</template>
