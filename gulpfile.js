var gulp = require('gulp');
var elixir = require('laravel-elixir');
require('laravel-elixir-compress');
require('laravel-elixir-livereload');


var basejs = [
    './resources/assets/js/vendor/jquery.min.js',
    './resources/assets/js/vendor/bootstrap.min.js',
    './resources/assets/js/vendor/jquery.pjax.js',
    './resources/assets/js/vendor/nprogress.js',
    './resources/assets/js/vendor/simplemde.min.js',
    './resources/assets/js/vendor/codemirror-4.inline-attachment.js'
].concat(['resources/assets/js/app.js']);

var baseScss = [
    'base.scss',
    'app.scss'
].concat(['vendor/simplemde.min.css']);


elixir(function(mix) {
    mix
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/assets/fonts/bootstrap')
        .copy('node_modules/font-awesome/fonts', 'public/assets/fonts/font-awesome')
        .sass(baseScss, 'public/assets/css/app.css')
        .scripts(basejs, 'public/assets/js/app.js', './')
        .version([
            'assets/js/app.js',
            'assets/css/app.css'
        ]);
});