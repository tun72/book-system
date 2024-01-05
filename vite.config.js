import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
// import ckeditor5 from '@ckeditor/vite-plugin-ckeditor5';

// export default defineConfig({
//     plugins: [
//         laravel([
//             'resources/js/app.js',
//         ]),
//        {
//            name: 'blade',
//            handleHotUpdate({ file, server }) {
//                if (file.endsWith('.blade.php')) {
//                    server.ws.send({
//                        type: 'full-reload',
//                        path: '*',
//                    });
//                }
//            },
//        },
//        ckeditor5( { theme: require.resolve( '@ckeditor/ckeditor5-theme-lark' ) } )
//     ],

// })

// vite.config.js
import { createRequire } from "node:module";
const require = createRequire(import.meta.url);

import { defineConfig } from "vite";
import ckeditor5 from "@ckeditor/vite-plugin-ckeditor5";

export default defineConfig({
    plugins: [
        laravel(["resources/js/app.js"]),
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
