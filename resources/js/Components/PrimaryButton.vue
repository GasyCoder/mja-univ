<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
    variant: {
        type: String,
        default: 'primary', // primary, secondary, outline, danger
    }
});

const baseClasses = "inline-flex items-center px-5 py-2.5 border font-semibold rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transition-all transform hover:-translate-y-0.5";

const variants = {
    primary: "border-transparent text-white bg-primary-600 hover:bg-primary-700 focus:ring-primary-500 shadow-primary-500/20 hover:shadow-lg hover:shadow-primary-500/30",
    secondary: "border-transparent text-white bg-secondary-600 hover:bg-secondary-700 focus:ring-secondary-500 shadow-secondary-500/20 hover:shadow-lg hover:shadow-secondary-500/30",
    outline: "border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-primary-500",
    danger: "border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500",
};
</script>

<template>
    <button :type="type" :class="[baseClasses, variants[variant]]">
        <slot />
    </button>
</template>
