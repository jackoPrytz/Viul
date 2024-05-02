import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import tailwindcss from 'tailwindcss';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss(resolve(__dirname, './tailwind.config.js')),
            ],
        },
    },
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            output: {
                assetFileNames: `assets/[name].[hash].[ext]`,
                chunkFileNames: `assets/[name].[hash].js`,
                entryFileNames: `[name].[hash].js`,
                // Ensure manifest.json is placed in the root of the build directory
                manifestFile: 'manifest.json'
            }
        }
    },
});