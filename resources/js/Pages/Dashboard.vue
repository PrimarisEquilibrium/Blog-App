<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();

const user = computed(() => page.props.auth.user);
</script>

<template>
    <div>Dashboard Page</div>
    <h1>Hello {{ user.name }}!</h1>
</template>
