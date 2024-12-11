<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    title: null,
    author: null,
    content: null,
});

const onSubmit = () => {
    form.post(route("blogs.store"));
};
</script>

<template>
    <div>Create Blog Post</div>
    <form @submit.prevent="onSubmit">
        <div>
            <label for="title">Title: </label>
            <input
                type="text"
                name="title"
                id="title"
                v-model="form.title"
                required
            />
        </div>

        <div>
            <label for="author">Author: </label>
            <input
                type="text"
                name="author"
                id="author"
                v-model="form.author"
                required
            />
        </div>

        <div>
            <label for="content">Content: </label>
            <textarea
                name="content"
                id="content"
                v-model="form.content"
                required
            ></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</template>
