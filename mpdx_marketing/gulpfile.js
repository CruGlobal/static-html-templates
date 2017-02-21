var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('scss', function() {
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(''));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('assets/scss/**/*.scss',['scss']);
});