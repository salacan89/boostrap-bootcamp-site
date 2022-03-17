/* eslint-disable prettier/prettier */
// https://vitejs.dev/config/
// http://localhost:3005 is serving Vite on development but accessing it directly will be empty

import { defineConfig } from 'vite'
import legacy from '@vitejs/plugin-legacy'
import liveReload from 'vite-plugin-live-reload'

const { resolve, normalize } = require('path')

const dir = normalize(__dirname)
const themePath = dir.substring(dir.lastIndexOf('/wp-content/'))
// const themePath = normalize(resolve().substring(resolve().lastIndexOf('/wp-content')))
console.log(`aaaa: ${themePath}`)
console.log(`dir: ${dir}`)

export default defineConfig({
  plugins: [
    legacy({
      targets: ['defaults', 'not IE 11'],
    }),
    liveReload([`${dir}/*.php`, `${dir}/(lib|partials)/**/*.php`]),
  ],
  root: 'src',
  base: '/wp-content/themes/html5-blank-slate/src/',
  // base: process.env.APP_ENV === 'development' ? `/src` : `wp-content/themes/html5-blank-slate/dist`,
  // base: process.env.APP_ENV === 'development' ? `${themePath}/src` : `${themePath}/dist`,
  resolve: {
    alias: {
      '@images': resolve(dir, './src/assets/images'),
    },
  },
  build: {
    // output dir for production build
    outDir: resolve(dir, './dist'),
    emptyOutDir: true,

    // emit manifest so PHP can find the hashed files
    manifest: true,

    // esbuild target
    target: 'es2018',

    // our entry
    rollupOptions: {
      input: '/main.js',
    },
  },
  server: {
    // required to load scripts from custom host
    cors: true,

    // we need a strict port to match on PHP side
    strictPort: true,
    port: 3005,
  },
})