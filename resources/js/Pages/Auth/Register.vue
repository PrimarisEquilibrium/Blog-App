<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    form.post(route("register"), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
</script>

<template>
    <div>Register Page</div>
    <form @submit.prevent="submit">
        <TextInput
            name="name"
            v-model="form.name"
            :message="form.errors.name"
        />

        <TextInput
            name="email"
            type="email"
            v-model="form.email"
            :message="form.errors.email"
        />

        <TextInput
            name="password"
            type="password"
            v-model="form.password"
            :message="form.errors.password"
        />

        <TextInput
            name="password_confirmation"
            type="password"
            v-model="form.password_confirmation"
            :message="form.errors.password_confirmation"
        />

        <button>Submit</button>
    </form>
</template>
