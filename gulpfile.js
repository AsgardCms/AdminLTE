var elixir = require('laravel-elixir');

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
    mix.less([
        "AdminLTE.less"
    ]);

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
