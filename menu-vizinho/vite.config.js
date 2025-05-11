import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import * as path from 'path';  // <-- Importa o módulo 'path' pois é necessário para realizar as alterações dos elementos definidos do bootstrap

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    // !! necessário esse alias para que eu consiga acessar as váriaveis do bootstrap e modifica-las
    resolve: {
        alias: {
            // Alias para o diretório do Bootstrap SCSS
            "@bootstrap": path.resolve(
                __dirname,
                "node_modules/bootstrap/scss"
            ),
        },
    },
});
