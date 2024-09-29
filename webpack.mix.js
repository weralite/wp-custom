// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist')
.postCss('src/app.css', 'style.css', [
    require('tailwindcss'),
    require('autoprefixer'),
  ]);
