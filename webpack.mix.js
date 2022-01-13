const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .react()
    // .postCss("resources/css/app.css", "public/css", [
    //     require("tailwindcss"),
    // ]);
    .sass('resources/sass/app.scss', 'public/css',)
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })

    // .version()
    // .browserSync("localhost:8000");
    // .postCss('resources/css/tailwindcss.css', 'public/css', [
    //     require('tailwindcss')
    // ])
