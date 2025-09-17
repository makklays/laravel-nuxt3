<template>
  <div class="row m-0">
    <div class="col-md-12" style="margin:30px 0; border:1px solid #DBDCDD;">

      <h1>Profiles</h1>
      <a href="/profiles/1" style="margin-right:20px;" >Profile 1</a>
      <a href="/profiles/2" style="margin-right:20px;" >Profile 2</a>
      <br/><br/>

    </div>
  </div>
</template>

<script setup>
// Указываем layout для страницы
definePageMeta({ layout: 'profile' })

const { data } = await useFetch('http://localhost:8002/api/hello')
const message = data.value.message
</script>