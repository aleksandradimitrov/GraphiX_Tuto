import '@unocss/reset/tailwind-compat.css'
import 'uno.css'
import './bootstrap'
import '../css/app.css'

import type { DefineComponent } from 'vue'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'
import { Ziggy } from './ziggy.js'

import AppLayout from './Layouts/AppLayout.vue'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel'

createInertiaApp({
  title: title => `${title} - ${appName}`,
  resolve: async (name) => {
    const pages = import.meta.glob<DefineComponent>('./Pages/**/*.vue')
    const page = await pages[`./Pages/${name}.vue`]()
    page.default.layout ??= AppLayout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .mount(el)
  },
  progress: {
    color: '#4B5563',
  },
})
