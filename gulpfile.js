var gulp = require('gulp');
var concat = require('gulp-concat');
var templateCache = require('gulp-angular-templatecache');

var JS_SOURCE_PATH = 'src/AppBundle/Resources/js/';
var DESTINATION = 'web/assets/';

gulp.task('concat:js', function () {
    return gulp.src([
            JS_SOURCE_PATH + '*.module.js',
            JS_SOURCE_PATH + '*.js'
        ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest(DESTINATION))
        ;
});

gulp.task('concat:html', function () {
    return gulp.src(JS_SOURCE_PATH + '*.html')
        .pipe(templateCache({standalone: true}))
        .pipe(gulp.dest(DESTINATION))
        ;
});

gulp.task('watch', function () {
    gulp.watch(JS_SOURCE_PATH + '*.js', ['concat:js']);
    gulp.watch(JS_SOURCE_PATH + '*.html', ['concat:html']);
});

gulp.task('default', ['concat', 'watch']);
gulp.task('concat', ['concat:js', 'concat:html']);
