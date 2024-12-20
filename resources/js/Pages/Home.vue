<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <Link :href="route('dashboard')">Dashboard</Link>
        <Link :href="route('login')">Login</Link>
        <Link :href="route('register')">Register</Link>
        <Link :href="route('logout')" method="post" as="button">Logout</Link>
    </div>
    <div>Blog Home Page</div>
</template>
