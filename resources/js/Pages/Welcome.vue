<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    version: String,
});
</script>

<template>
    <Head title="Welcome" />
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md max-w-md w-full text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Hello Inertia!</h1>
            <p class="text-gray-600 dark:text-gray-300">
                Running locally on Laravel {{ version }}.
            </p>
        </div>
    </div>
</template>
