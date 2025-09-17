// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  runtimeConfig: {
    public: {
      apiBase: 'http://127.0.0.1:8002/api'
    }
  },
  css: [
    'bootstrap/dist/css/bootstrap.min.css'
  ],
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true }
})

