let mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js').sass('resources/css/app.scss', 'css').setPublicPath('public');