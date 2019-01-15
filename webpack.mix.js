const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
	.scripts([
		'public/js/app.js'
		, 'resources/js/jquery-3.3.1.min.js'
		, 'resources/js/bootsrap.js'
		, 'resources/js/bootstrap.bundle.min.js'
		, 'resources/js/jquery.easing.min'
		, 'resources/js/jquery.dataTables.min.js'
		, 'resources/js/dataTables.bootstrap4.min.js'
		, 'resources/js/dataTables.fixedColumns.min.js'
		, 'resources/js/sb-admin.min.js'
		, 'resources/js/gijgo.min.js'
	], 'public/js/app.js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
		'resources/sass/all.min.css'
		, 'resources/sass/dataTables.bootstrap4.min.css'
		, 'resources/sass/fixedColumns.bootstrap4.min.css'
		, 'resources/sass/sb-admin.min.css'
		, 'resources/sass/gijgo.min.css'
	], 'public/css/all.css');

