<script setup>
defineProps({
    message: String,
});
</script>
<style>
.error-msg {
    color:goldenrod;

}
</style>
<template>
    <div v-show="message">
        <p class="text-sm error-msg">
            {{ message }}
        </p>
    </div>
</template>
