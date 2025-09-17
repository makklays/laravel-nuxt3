<template>
    <div>
        <h1>Nuxt 3 + Laravel 12 API</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script setup>
// Указываем layout для страницы
definePageMeta({ layout: 'default' })

const { data } = await useFetch('http://localhost:8002/api/hello')
const message = data.value.message
</script>

