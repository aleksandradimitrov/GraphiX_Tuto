import {defineConfig} from 'unocss/vite'

import { presetAttributify, presetUno, presetIcons, presetTypography } from 'unocss'
import {presetDaisy} from 'unocss-preset-daisy'
import { presetForms } from '@julr/unocss-preset-forms'

export default defineConfig({
    presets: [
        // presetForms(),
        presetUno(),
        presetAttributify(),
        presetIcons({
            scale: 1.3,
        }),
        presetTypography(),
        presetDaisy(),
    ]
})