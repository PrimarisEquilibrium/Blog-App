<script setup>
import { Link } from "@inertiajs/vue3";

const blogsProp = defineProps(["blogs"]);
const blogs = blogsProp["blogs"];
</script>

<template>
    <div>Blog Index Page</div>
    <div v-for="blog in blogs" :key="blog.id">
        <Link :href="route('blogs.show', { id: blog.id })">
            <div class="mt-4 mb-4">
                <div>{{ blog.title }}</div>
                <div>By: {{ blog.author }}</div>
            </div>
        </Link>
        <hr />
    </div>
</template>
