import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        // Configuración de salida de construcción
        outDir: 'public', // Nombre del directorio de salida (debería ser 'public')
      },
});
