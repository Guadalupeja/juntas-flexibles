import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/css/home-critical.generated.css', 'resources/js/app.js'],
      refresh: true,
      hotFile: 'storage/framework/vite.hot', // usado por AppServiceProvider para el hot-reload en local
    }),
  ],
  build: {
    minify: 'esbuild', // Mejor rendimiento que Terser en la mayoría de los casos.
  },
});
