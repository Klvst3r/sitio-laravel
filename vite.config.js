import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.scss', // o app.css si usas solo CSS
        'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],
});
