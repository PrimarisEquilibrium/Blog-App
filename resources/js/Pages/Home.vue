<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <Link :href="route('dashboard')">Dashboard</Link>
        <Link :href="route('dev-login')">Dev Login</Link>
        <span v-if="!$page.props.auth.user">
            <Link :href="route('login')">Login</Link>
            <Link :href="route('register')">Register</Link>
        </span>
        <Link :href="route('logout')" method="post" as="button">Logout</Link>
    </div>
    <div>Blog Home Page</div>
</template>
