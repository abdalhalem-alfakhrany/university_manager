<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name:null,
    email:null,
    password:null,
    password_confirmation:null,
})
</script>

<template>
    <form @submit.prevent="form.post('/auth/register')">
        <label>Name</label>
        <input type="text" v-model="form.name">
        <br>
        <label>Email</label>
        <input type="email" v-model="form.email">
        <br>
        <label>Password</label>
        <input type="password" v-model="form.password">
        <br>
        <label>Password Confirmation</label>
        <input type="password" v-model="form.password_confirmation">
        <br>
        <button type="submit">Register</button>
    </form>
</template>

<style scoped>

</style>
