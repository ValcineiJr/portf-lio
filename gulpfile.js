
var gulp = require('gulp');
var sass = require('gulp-sass');
sass.compiler = require('node-sass');

//task para o sass
gulp.task('sass', function () {
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('assets/css'));
});

//taask para watch
gulp.task('sass:watch', function () {
    gulp.watch('assets/scss/**/*.scss', gulp.series(['sass']));
});

//task default
gulp.task('default', gulp.series(['sass', 'sass:watch']));