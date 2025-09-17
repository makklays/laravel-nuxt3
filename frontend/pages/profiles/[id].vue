<template>
    <div class="row m-0">
        <div class="col-md-12" style="margin:30px 0; border:1px solid #DBDCDD;">
            <div v-if="pending">Загрузка...</div>
            <div v-else-if="error">Ошибка: {{ error.message }}</div>
            <div v-else>
                <div class="row">
                    <div class="col-md-1" style="background-color:#132760; color:#FFF; height:200px;">Test T</div>
                    <div class="col-md-1" style="background-color:#ddd;"></div>
                    <div class="col-md-10">{{ profile.name }}</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <pre>{{ profile }}</pre>
                    </div>
                </div>
            </div>

            <hr />

            <!-- ссылки на другие профили -->
            <NuxtLink :to="'/profiles/1'">Профиль 1</NuxtLink> |
            <NuxtLink :to="'/profiles/2'">Профиль 2</NuxtLink> |
            <NuxtLink :to="'/profiles/3'">Профиль 3</NuxtLink>
        </div>
    </div>
</template>

<script setup>
import { useRoute, useAsyncData, watch } from '#imports'

const route = useRoute()
const id = route.params.id

// useAsyncData с реактивным ключом
const { data: profile, pending, error, refresh } = await useAsyncData(
  () => `profile-${route.params.id}`, // ключ зависит от id
  () => $fetch(`http://127.0.0.1:8002/api/profiles/${route.params.id}`)
)

// когда id меняется, обновляем данные
watch(
  () => route.params.id,
  () => { refresh()
})

// Указываем layout для страницы
definePageMeta({ layout: 'profile' })
</script>
