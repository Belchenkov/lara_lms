import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin.css',
                'resources/css/frontend.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/admin/login.js',
                'resources/js/admin/admin.js',
            ],
            refresh: true,
        }),
    ],
});
