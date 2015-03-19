var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

elixir.extend("stylistPublish", function() {
    gulp.task("stylistPublish", function() {
        gulp.src("").pipe(shell("php ../../artisan stylist:publish "+themeInfo.name));
    });

    this.registerWatcher("stylistPublish", "**/*.less");
    //this.registerWatcher("stylistPublish", "**/*.js");

    return this.queueTask("stylistPublish");
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    /**
     * Compile less
     */
    mix
        .less([
            "asgard.less"
        ])
        .stylistPublish();

    /**
     * Concat scripts
     */
    //mix.scripts([
    //    "app.js"
    //]);

    /**
     * Copy Font Awesome fonts
     */
    mix
        .copy(
            'resources/vendor/font-awesome/fonts',
            'assets/css/fonts'
        )
        .copy('resources/js/app.js', 'assets/js/app.js');
});
