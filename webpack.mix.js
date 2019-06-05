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

const webpack = require('webpack');

mix.webpackConfig({
  // ... rest of webpack config
  plugins: [
    new webpack.IgnorePlugin(/^codemirror$/),
  ],
});

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

/*
 * FRONTEND
 */
mix.setPublicPath('./');

// Trail
mix.autoload({
  jquery: ['$', 'jQuery', 'jquery', 'window.jQuery', 'window.$'],
})
  .js('src/js/app.js', 'dist/js')
  .version();

mix.sass('src/scss/app.scss', 'dist/css')
  .options({
    autoprefixer: false,
    postCss: [
      require('autoprefixer')({
        remove: false,
        overrideBrowserslist: ['last 2 version', 'safari 5', 'ie 6', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'ios 7', 'ios 8', 'ios 9', 'android 4'],
      }),
      require('postcss-flexbugs-fixes')(),
    ],
  })
  .version();

// mix.copy('assets/images', 'public/images', false);
// mix.copy('assets/fonts', 'public/fonts', false);

// Because "dingaling dong" is annoying
mix.disableSuccessNotifications();
