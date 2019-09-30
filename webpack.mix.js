/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

const mix = require('laravel-mix');

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

mix.js('src/js/app.js', 'dist/js')
  .version();

mix.sass('src/scss/app.scss', 'dist/css')
  .options({
    autoprefixer: false,
    postCss: [
      require('autoprefixer')({
        remove: false,
        overrideBrowserslist: ['> 0.01%', 'last 2 version', 'safari 5', 'ie 6', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'ios 7', 'ios 8', 'ios 9', 'android 4'],
      }),
      require('postcss-flexbugs-fixes')(),
    ],
  })
  .version();

mix.disableSuccessNotifications();