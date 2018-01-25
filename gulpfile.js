
var gulp = require('gulp'),
    concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	watch = require('gulp-watch');


var config = {

	jsDir: './js',
	jsSlick: './slick',
	cssDir: './css'
	
};

gulp.task('concat', function(){
	return gulp.src([
		config.jsDir + '/jquery-3.2.1.min.js',
		config.jsDir + '/popper.min.js',
		config.jsDir + '/bootstrap.bundle.min.js',
		config.jsDir + '/bootstrap.min.js',
		config.jsDir + '/slick.min.js',
		config.jsDir + '/propio.js'


	])

	.pipe(concat('all.js'))
	.pipe(gulp.dest(config.jsDir))
});

gulp.task('compress', ['concat'], function(){
    return gulp.src(config.jsDir + '/all.js')
    .pipe(uglify())
    .on('error', console.error.bind(console))
    .pipe(gulp.dest(config.jsDir + '/min'))
});

gulp.task('concatStyles', function(){
	return gulp.src([
		config.cssDir + '/normalize.css',
		config.cssDir + '/bootstrap.min.css',
		config.cssDir + '/font-awesome.min.css',
		config.cssDir + '/bootstrap.min.js',
		config.cssDir + '/transito.css',
		config.cssDir + '/slick.css',
		config.cssDir + '/slick-theme.css'


	])

	.pipe(concat('styles.css'))
	.pipe(gulp.dest(config.cssDir))
});


