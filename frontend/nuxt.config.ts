// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  runtimeConfig: {
    public: {
      apiBase: 'http://127.0.0.1:8000/api'
    }
  },
  /*modules: ['@nuxtjs/proxy'],
  proxy: {
    '/api/': { target: 'http://127.0.0.1:8000', changeOrigin: true }
  },*/
  css: [
    'bootstrap/dist/css/bootstrap.min.css',
    'bootstrap-icons/font/bootstrap-icons.css'
  ],
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true }
})

