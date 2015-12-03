'use strict';

var gulp  = require('gulp');
var sass  = require('gulp-sass');

gulp.task('sass', function () {
    gulp
        .src('./app/Resources/public/css/main.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./web/css/'))
    ;
});
