import { defineConfig } from 'vite';

export default defineConfig({
  root: 'resources', // Asegúrate de que los recursos de Vite estén en la carpeta 'resources'
  build: {
    outDir: '../public/build', // Compilación de archivos en el directorio 'public/build'
    rollupOptions: {
      input: '/resources/index.html', // Define el archivo de entrada correcto (index.html)
    },
  },
  server: {
    watch: {
      usePolling: true,  // Esto es para evitar el error "too many open files"
      interval: 100,
    },
  },
});
