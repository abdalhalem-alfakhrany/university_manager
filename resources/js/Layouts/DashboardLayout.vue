<script setup>

import Navbar from "../Components/Navbar.vue";
import Sidebar from "../Components/Sidebar.vue";
defineProps({ auth: Object })
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <Navbar :auth="auth"></Navbar>
        <Sidebar></Sidebar>
        <main class="p-4 md:ml-64 h-auto pt-20">
            <slot></slot>
        </main>
    </div>
</template>

<style scoped></style>
