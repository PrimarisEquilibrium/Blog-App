<script setup>
import { useForm } from "@inertiajs/vue3";

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
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" v-model="form.email" />
            <div v-if="form.errors.email">{{ form.errors.email }}</div>
        </div>

        <div>
            <label for="password">Password: </label>
            <input
                type="password"
                name="password"
                id="password"
                v-model="form.password"
            />
            <div v-if="form.errors.password">{{ form.errors.password }}</div>
        </div>

        <button>Submit</button>
    </form>
</template>
