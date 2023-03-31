import { fileURLToPath } from 'node:url'
import { defineConfig } from 'vite'

import Components from 'unplugin-vue-components/vite'
import AutoImport from 'unplugin-auto-import/vite'

import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

import UnoCSS from 'unocss/vite'

export default defineConfig({
  plugins: [
    laravel({
      input: 'resources/js/app.ts',
      refresh: true,
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),
    Components({
      dirs: [
        './resources/js/Layouts',
        './resources/js/Components',
        './resources/js/Components/**/*',
        './resources/js/Pages/**/Partials',
      ],
      directoryAsNamespace: true,
      types: [
        {
          from: '@inertiajs/vue3',
          names: ['Head', 'Link'],
        },
      ],

    }),
    AutoImport({
      dirs: [
        './resources/js/Composables/',
        './resources/shared/Composables/',
      ],
      imports: [
        'vue',
        '@vueuse/core',
        {
          '@inertiajs/vue3': ['router', 'useForm', 'Link', 'usePage'],
          '@inertiajs/core': ['Errors', 'ErrorBag'],
        },
      ],
      vueTemplate: true,

    }),
    UnoCSS(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./resources/js/', import.meta.url)),
      'ziggy-vue': fileURLToPath(new URL('./vendor/tightenco/ziggy/dist/vue.m', import.meta.url)),
    },
  },
})
