var gulp = require('gulp');
var sass = require('gulp-sass');
var notify = require("gulp-notify");

gulp.task('styles', function() {
  return gulp.src('./assets/scss/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(notify('Styles Processed.'))
      .pipe(gulp.dest('./'));
});


gulp.task('watch', function() {
  gulp.watch('./assets/scss/**/*.scss', ['styles']);
});