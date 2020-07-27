const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('assets/js/main.js', 'public/')
    .sass('assets/scss/main.scss', 'public/');