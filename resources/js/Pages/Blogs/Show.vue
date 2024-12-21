<script setup>
const blogProp = defineProps(["blog"]);
const blog = blogProp["blog"];
</script>

<template>
    <div>
        <div class="mb-4">
            <h1>{{ blog.title }}</h1>
            <h2>By: {{ blog.user.name }}</h2>
        </div>
        <hr />
        <div class="mt-4 mb-4">
            <p>{{ blog.content }}</p>
        </div>
        <hr />
        <div class="mt-4">
            <span>Comments:</span>
        </div>
    </div>
</template>
