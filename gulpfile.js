var gulp = require('gulp');
var concat = require('gulp-concat');
var templateCache = require('gulp-angular-templatecache');

gulp.task('concat:js', function() {
	return gulp.src([
		'./src/*.module.js', 
		'./src/*.js'
	])
		.pipe(concat('app.js'))
		.pipe(gulp.dest('.'))
	;
});

gulp.task('concat:html', function() {
	return gulp.src('./src/*.html')
		.pipe(templateCache({standalone: true}))
		.pipe(gulp.dest('.'))
	;
});

gulp.task('watch', function() {
	gulp.watch('./src/*.js', ['concat:js']);
	gulp.watch('./src/*.html', ['concat:html']);
});

gulp.task('default', ['concat', 'watch']);
gulp.task('concat', ['concat:js', 'concat:html']);
