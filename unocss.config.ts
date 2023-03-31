import { defineConfig } from 'unocss/vite'

import {
  presetAttributify,
  presetIcons,
  presetTypography,
  presetUno,
  presetWebFonts,
} from 'unocss'
import { presetDaisy } from 'unocss-preset-daisy'

export default defineConfig({
  presets: [
    // presetForms(),
    presetUno(),
    presetAttributify(),
    presetIcons({
      scale: 1.3,
    }),
    presetWebFonts({
      provider: 'google',
      fonts: {
        montserrat: 'Montserrat',
      },
    }),
    presetTypography(),
    presetDaisy(),
  ],
})
