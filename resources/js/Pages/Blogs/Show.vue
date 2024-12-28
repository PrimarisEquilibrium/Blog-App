<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const props = defineProps(["blog", "comments", "users"]);
const blog = props["blog"];
const comments = props["comments"];
const users = props["users"];

const form = useForm({
    blog_id: blog.id,
    comment: null,
});

const submit = () => {
    form.post(route("blogs.store_comment", { blog: blog.id }), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
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
            <br />
            <form @submit.prevent="submit">
                <TextInput
                    name="comment"
                    v-model="form.comment"
                    :message="form.errors.comment"
                ></TextInput>
                <div>
                    <button type="submit">Submit Comment</button>
                </div>
            </form>
            <div>
                <div v-for="(comment, index) in comments">
                    {{ users[index].name }}
                    {{ comment.content }}
                </div>
            </div>
        </div>
    </div>
</template>
