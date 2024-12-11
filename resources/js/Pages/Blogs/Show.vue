<script setup>
const blogProp = defineProps(["blog"]);
const blog = blogProp["blog"];
</script>

<template>
    <div>
        <div class="mb-4">
            <h1>{{ blog.title }}</h1>
            <h2>By: {{ blog.author }}</h2>
        </div>
        <hr />
        <div class="mt-4">
            <p>{{ blog.content }}</p>
        </div>
    </div>
</template>
