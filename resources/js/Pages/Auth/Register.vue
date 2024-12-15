<script setup>
import { useForm } from "@inertiajs/vue3";

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
        <div>
            <label for="name">Name: </label>
            <input type="name" name="name" id="name" v-model="form.name" />
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>

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

        <div>
            <label for="password_confirmation">Confirm Password: </label>
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                v-model="form.password_confirmation"
            />
        </div>

        <button>Submit</button>
    </form>
</template>
