'use strict';
const { src, dest, watch, series } = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const browsersync = require('browser-sync').create();
var paths = {
	styles: {
		src: 'scss/**/*.scss',
		dest: 'css'
	}
}
function scssTask() {
	return src(paths.styles.src)
		.pipe(plumber())
		.pipe(sass({outputStyle: 'compressed', quietDeps: true}).on('error', sass.logError))
		.pipe(postcss([autoprefixer()]))
		.pipe(dest(paths.styles.dest))
		.pipe(browsersync.stream());
}
exports.scssTask = scssTask
// Browsersync Tasks
function browsersyncServe(cb){
	browsersync.init({
		proxy: 'http://powercityuk.test/', // Your local dev server
		host: 'powercityuk.test',
		open: 'external'
	});
	cb();
}

function browsersyncReload(cb){
	browsersync.reload();
	cb();
}
// Watch Task
function watchTask(){
	watch('**/*.php', browsersyncReload);
	watch([paths.styles.src], series(scssTask, browsersyncReload));
}
// Default Gulp task
exports.watch = series(
	scssTask,
	browsersyncServe,
	watchTask
);