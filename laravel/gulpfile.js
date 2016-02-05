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

 var path = {
 	bower: './vendor/bower_components/',
 	foundation: 'foundation-sites/',
 	motionui: 'motion-ui/',
 };


 elixir(function(mix) {
 	mix.browserSync({
 		proxy: 'localhost:8000',
 		notify: false
 	});
	/// app.js
	mix.browserify('app.js');
	// sass

	mix.sass('app.scss', null, {
		includePaths: [
		'resources/assets/sass/',
		path.bower + path.foundation + 'scss/',
		path.bower + path.motionui + 'src/',
		]
	});
	// top.js
	mix.scripts([
	//
	], 'public/js/top.js', './');
	// vendor.js
	mix.scripts([
	// vendor
	path.bower + 'jquery/dist/jquery.js',
	path.bower + 'underscore/underscore.js',
	path.bower + 'what-input/what-input.js',
	// foundation core
	// path.bower + path.foundation + 'dist/foundation.js',
	path.bower + path.foundation + 'js/foundation.core.js',
	path.bower + path.foundation + 'js/foundation.util.mediaQuery.js',
	// foundation plug-ins
	path.bower + path.foundation + 'js/foundation.util.box.js',
	path.bower + path.foundation + 'js/foundation.util.nest.js',
	path.bower + path.foundation + 'js/foundation.util.motion.js',
	path.bower + path.foundation + 'js/foundation.util.keyboard.js',
	path.bower + path.foundation + 'js/foundation.util.triggers.js',
	path.bower + path.foundation + 'js/foundation.abide.js',
	path.bower + path.foundation + 'js/foundation.dropdownMenu.js',
	path.bower + path.foundation + 'js/foundation.responsiveMenu.js',
	path.bower + path.foundation + 'js/foundation.responsiveToggle.js',
	path.bower + path.foundation + 'js/foundation.toggler.js',
	path.bower + path.motionui + 'dist/motion-ui.js',
	], 'public/js/vendor.js', './');
});