<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
    title: String,
});

const logout = () => {
    router.post(route('logout'));
};

</script>

<template>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
</template>
