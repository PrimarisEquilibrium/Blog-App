<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    email: null,
    password: null,
});

const submit = () => {
    form.post(route("login"), {
        onError: () => {
            form.reset("password");
        },
    });
};
</script>

<template>
    <div>Login Page</div>
    <form @submit.prevent="submit">
        <TextInput type="email" name="email" :message="form.errors.email" />

        <TextInput
            type="password"
            name="password"
            :message="form.errors.password"
        />

        <button>Submit</button>
    </form>
</template>
