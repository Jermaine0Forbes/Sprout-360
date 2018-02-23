var gulp = require('gulp');
var csscomb = require('gulp-csscomb');
 
gulp.task('css', function() {
  return gulp.src('wp-content/themes/sprout360/style.css')
    .pipe(csscomb())
    .pipe(gulp.dest('wp-content/themes/sprout360'));
});
