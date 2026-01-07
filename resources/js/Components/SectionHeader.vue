<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    title: {
        type: String,
        required: true,
    },
    subtitle: {
        type: String,
        default: '',
    },
    eyebrow: {
        type: String,
        default: '',
    },
    actionLabel: {
        type: String,
        default: '',
    },
    actionHref: {
        type: String,
        default: '#',
    },
});
</script>

<template>
    <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="space-y-3">
            <p v-if="eyebrow" class="text-xs font-semibold uppercase tracking-[0.25em] text-secondary-500">
                {{ eyebrow }}
            </p>
            <h2 class="text-3xl md:text-4xl font-semibold text-slate-900">
                {{ title }}
            </h2>
            <p v-if="subtitle" class="text-base md:text-lg text-slate-600 max-w-2xl">
                {{ subtitle }}
            </p>
        </div>
        <Link
            v-if="actionLabel"
            :href="actionHref"
            class="inline-flex items-center gap-2 text-sm font-semibold text-primary-700 hover:text-primary-900"
        >
            {{ actionLabel }}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </Link>
    </div>
</template>
