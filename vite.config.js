import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin.css',
                'resources/css/frontend.css',
                'resources/css/app.css',
                'resources/js/admin/login.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
