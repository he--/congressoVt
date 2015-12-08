'use strict';

var gulp   = require('gulp');
var sass   = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('sass', function () {
  return gulp
    .src('./app/Resources/public/css/main.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./web/css/'))
  ;
});

gulp.task('compress', function () {
  return gulp
    .src([
      './app/Resources/public/jquery/dist/jquery.min.js',
      './app/Resources/public/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    ])
    .pipe(uglify())
    .pipe(gulp.dest('./web/js/'))
  ;
});
