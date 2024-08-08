<script setup>

import Navbar from "../Components/Navbar.vue";
import Sidebar from "../Components/Sidebar.vue";
defineProps({ auth: Object })
</script>

<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <slot></slot>
        </div>
    </section>
</template>

<style scoped></style>
