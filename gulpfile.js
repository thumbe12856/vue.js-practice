const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

elixir(mix => {
    mix.webpack('test.js');
});


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
elixir(function(mix) {
    mix.less('app.less');
});
*/