let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/script.js', 'public/js')

   // Ajax
 
   .js('resources/assets/js/ajax/ajax_add_course.js', 'public/js/ajax')
   .js('resources/assets/js/ajax/ajax_edit_course.js', 'public/js/ajax')
   .js('resources/assets/js/ajax/ajax_add_round.js', 'public/js/ajax')
   .js('resources/assets/js/ajax/ajax_edit_round.js', 'public/js/ajax')

   // Charts
   .js('resources/assets/js/charts/view_round_charts.js', 'public/js/charts')
   .js('resources/assets/js/charts/view_profile_charts.js', 'public/js/charts')

   .combine('resources/assets/js/bootstrap/*.js', 'public/js/bootstrap.js')
   .combine('resources/assets/js/bundle/*.js', 'public/js/bundle.js')
   .sass('resources/assets/sass/mainstyle.scss', 'public/css')
