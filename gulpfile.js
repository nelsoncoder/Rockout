const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const plumber = require('gulp-plumber');
const gutil = require('gulp-util');
const browserSync = require('browser-sync').create();

const domain = 'localhost';

gulp.task('styles', function() {
    gulp.src([
        'App/Assets/css/app.css',
        'bower_components/font-awesome/css/font-awesome.css',
        'bower_components/glyphicons/glyphicons.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'node_modules/npm-font-source-sans-pro/source-sans-pro.css',
        'bower_components/roboto-and-material-icons-fonts/css/roboto.css',
        'bower_components/roboto-and-material-icons-fonts/css/material-icons.css',
        'node_modules/mdi/css/materialdesignicons.css'
    ])
    .pipe(concat("styles.css"))
    .pipe(gulp.dest("App/Output/css"));
});

gulp.task('scripts', function (){
    gulp.src([
    	'bower_components/jquery/dist/jquery.js',
        'App/Assets/js/app.js'
    ])
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(concat("scripts.js"))
    .pipe(uglify())
    .pipe(gulp.dest("App/Output/js"));
});

gulp.task('copy', function() {
    gulp.src([
        'bower_components/glyphicons/fonts/**',
        'bower_components/font-awesome/fonts/**',
        'bower_components/Ionicons/fonts/**',
        'bower_components/roboto-and-material-icons-fonts/fonts/**',
        'node_modules/mdi/fonts/**'
        ])
    .pipe(gulp.dest('App/Output/fonts'));
});

gulp.task('watch', function() {
    browserSync.init({
        proxy: domain
    });
    gulp.watch('App/Assets/scss/app.scss', function () {gulp.start('scss');});

    gulp.watch('App/Assets/css/app.css', function() {gulp.start('styles');}).on('change', browserSync.reload);

    gulp.watch('App/Assets/js/**/*.js', function() {gulp.start('scripts');}).on('change', browserSync.reload);
    
    gulp.watch('Views/**/*.tpl').on('change', browserSync.reload);
});

gulp.task('default', [ 'copy', 'scss', 'styles', 'scripts']);
 
var onError = function (err) {  
  gutil.beep();
  console.log(err);
};

gulp.task('scss', function (){
    gulp.src('App/Assets/scss/app.scss')
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sass())
    .pipe(gulp.dest('App/Assets/css'));
});



