var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
// var notify = require('gulp-notify');
var gutil = require('gulp-util');
var browserify = require('gulp-browserify');
var rename = require('gulp-rename');

// var exec = require('child_process').exec;
// var sys = require('sys');


var targetCSSDir = 'public/css';
var targetJSDir = 'public/js';

gulp.task('css', function(){
	return gulp.src('public/css/style.css')
        .pipe(autoprefixer('last 15 version'))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/min'))
        .pipe(notify({message: 'CSS prefixed and minified'}))
})

gulp.task('js', function(){
	gulp.src('public/js/main.js')
        .pipe(browserify({debug: true}))
        .pipe(rename('public/js/bundle.js'))
        .pipe(gulp.dest('./'))
        .pipe(notify({message: 'Js browserified and Renamed to bundle.js'}))
})


// gulp.task('phpunit', function(){
//    exec('php vendor\\phpunit\\phpunit\\phpunit', function(error, stdout){
//        sys.puts(stdout);
//    });
// });

gulp.task('watch', function(){
    gulp.watch('public/css/**/*.css', ['css']);
    gulp.watch('public/js/**/*.js', ['js']);
    // gulp.watch('app/**/*.php', ['phpunit']);
})

gulp.task('default', ['watch']);
