<script setup>
const props = defineProps({
    type: {
        type: String,
        default: "text",
    },
    name: {
        type: String,
        required: true,
    },
    message: {
        type: [String, null],
    },
});
const model = defineModel({
    required: true,
});
</script>

<template>
    <div>
        <label :for="props.name">{{ props.name }}: </label>
        <input
            :type="props.type"
            :name="props.name"
            :id="props.name"
            v-model="model"
        />
        <div v-if="props.message">{{ props.message }}</div>
    </div>
</template>
