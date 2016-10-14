var gulp = require('gulp');
var elixir = require('laravel-elixir');
require('laravel-elixir-compress');


var basejs = [
    './resources/assets/js/vendor/jquery.min.js',
    './resources/assets/js/vendor/bootstrap.min.js',
    './resources/assets/js/vendor/jquery.pjax.js',
    './resources/assets/js/vendor/nprogress.js'
];

// gulp.task('copyBootstrapFonts', function() {
//     return gulp.src('node_modules/bootstrap-sass/assets/fonts/bootstrap/*').pipe(gulp.dest('public/assets/fonts/bootstrap'));
// });
//
// gulp.task('copyFontAwesomeFonts', function() {
//     return gulp.src('node_modules/font-awesome/fonts/*').pipe(gulp.dest('public/assets/fonts/font-awesome'));
// });
//
// gulp.task('scss', function() {
//     elixir(function(mix) {
//         mix.sass([
//             'base.scss',
//             'app.scss'
//             ], 'public/assets/css/app.css')
//             .version([
//                 'assets/css/app.css'
//             ]);
//     });
// });
//
// gulp.task('js', function() {
//     elixir(function(mix) {
//         mix.scripts(basejs.concat(['./resources/assets/js/app.js']), 'public/assets/js/app.js', '/')
//             .version([
//                 'assets/js/app.js'
//             ]);
//     });
// });
//
// gulp.task('watch', function() {
//     gulp.watch('resources/assets/js/app.js', ['js']);
//     gulp.watch('resources/assets/scss/app.scss', ['js']);
// });
//
// gulp.task('default', ['copyBootstrapFonts', 'copyFontAwesomeFonts', 'js', 'scss', 'watch'], function() {
//     console.log('start watching...');
// });


elixir(function(mix) {
    mix
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/assets/fonts/bootstrap')
        .copy('node_modules/font-awesome/fonts', 'public/assets/fonts/font-awesome')
        .sass([
            'base.scss',
            'app.scss'
        ], 'public/assets/css/app.css')
        .scripts(basejs.concat(['resources/assets/js/app.js']), 'public/assets/js/app.js', './')
        .version([
            'assets/js/app.js',
            'assets/css/app.css'
        ]);
});