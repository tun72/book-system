import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

import ckeditor5 from "@ckeditor/vite-plugin-ckeditor5";

import { createRequire } from "node:module";
const require = createRequire(import.meta.url);

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/readlist.js",
                "resources/js/myslider.js",
                "resources/js/browse.js",
                'resources/js/countdown.js',
                'resources/js/darkmode.js',
                'resources/js/dashboard.js',
                'resources/js/form.js',
                'resources/js/help.js',
                'resources/js/image.js',
                'resources/js/other.js',
                'resources/js/select.js',
                'resources/js/ckeditor.js',

                


               








            ],
            refresh: true,
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
        ckeditor5({ theme: require.resolve("@ckeditor/ckeditor5-theme-lark") }),
    ],
});

