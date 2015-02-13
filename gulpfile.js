var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

elixir.extend("stylistPublish", function() {
    gulp.task("stylistPublish", function() {
        gulp.src("").pipe(shell("php ../../artisan stylist:publish"));
    });
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
            "AdminLTE.less"
        ])
        .stylistPublish();

    /**
     * Concat scripts
     */
    //mix.scripts([
    //
    //], null, 'resources');

    /**
     * Copy Font Awesome fonts
     */
    mix.copy(
        'resources/vendor/font-awesome/fonts',
        'assets/css/fonts'
    );
});
