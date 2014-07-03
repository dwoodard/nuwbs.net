var gulp = require('gulp');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var gutil = require('gulp-util');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
// var browserify = require('gulp-browserify');

// var exec = require('child_process').exec;
// var sys = require('sys');


var targetCSSDir = './public/css/';
// var targetJSDir = 'public/js/';

gulp.task('css', function(){
	return gulp.src([
        './public/bower/normalize-css/normalize.css',
        './public/bower/bootstrap/dist/css/bootstrap.min.css',
        './public/bower/WOW/css/libs/animate.css',
        './public/css/base.css'
        ])
        .pipe(autoprefixer('last 15 versions'))
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(concat('all.css'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify({message: 'CSS prefixed and minified'}))
})

// gulp.task('js', function(){
//  gulp.src(['public/js/main.js'])
//     .pipe(gulp.dest('./dist/'))
//         .pipe(notify({message: 'Js browserified and Renamed to bundle.js'}))
// })


// gulp.task('phpunit', function(){
//    exec('php vendor\\phpunit\\phpunit\\phpunit', function(error, stdout){
//        sys.puts(stdout);
//    });
// });

gulp.task('watch', function(){
    gulp.watch('public/css/**/*.css', ['css']);
    // gulp.watch('public/js/**/*.js', ['js']);
    // gulp.watch('app/**/*.php', ['phpunit']);
})

gulp.task('default', ['watch']);
