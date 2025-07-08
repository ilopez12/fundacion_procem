import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'fundacionprocem.com',
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'fundacionprocem.com',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/style.css',
                'resources/assets/sass/styles.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
