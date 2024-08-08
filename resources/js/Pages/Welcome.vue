<script setup>
import {Link} from "@inertiajs/vue3";
</script>
<template>
    <h1>surprise mother fucker</h1>
    <Link href="/auth/login">Login</Link>
    <br>
    <Link href="/auth/register">Register</Link>
    <br>
    <Link href="/auth/logout" method="post" as="button" type="button">Logout</Link></template>
