let mix = require('laravel-mix')

mix
  .setPublicPath('dist')
  .js('Assets/js/blog.js', 'js')
  .sass('Assets/sass/blog.scss', 'css')
