var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');


// SASS =================================================

var sassDirectory = './resources/assets/sass/**/*.scss'
var cssDirectory = './public/css'

// Compiles sass files to mainstyle.css
gulp.task('sass', function() {
    gulp.src(sassDirectory)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('/maps'))
        .pipe(gulp.dest(cssDirectory))
});

// Minify mainstyle.css
gulp.task('minify-css', function() {
    gulp.src('./public/css/mainstyle.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename("mainstyle.min.css"))
        .pipe(gulp.dest(cssDirectory))
});

// Auto-prefix mainstyle.css
gulp.task('prefix', function() {
    gulp.src('./public/css/mainstyle.min.css')
        .pipe(autoprefixer({browsers: ['last 2 versions']}))        
        .pipe(gulp.dest(cssDirectory))
});


// JAVASCRIPT ===========================================

var jsDest = 'public/js'

// Build Bootstrap JavaScript files 
gulp.task('bootstrapjs', function() {
    return gulp.src([
        'resources/assets/js/bootstrap/popper/popper.min.js',
        'resources/assets/js/bootstrap/util.js',
        'resources/assets/js/bootstrap/alert.js',
        'resources/assets/js/bootstrap/button.js',
        'resources/assets/js/bootstrap/carousel.js',
        'resources/assets/js/bootstrap/collapse.js',
        'resources/assets/js/bootstrap/dropdown.js',
        'resources/assets/js/bootstrap/modal.js',
        'resources/assets/js/bootstrap/scrollspy.js',
        'resources/assets/js/bootstrap/tab.js',
        'resources/assets/js/bootstrap/tooltip.js',
        'resources/assets/js/bootstrap/popover.js'
    ])
   .pipe(concat('bootstrap.js'))
   .pipe(gulp.dest(jsDest)) 
   .pipe(rename('bootstrap.min.js'))
   .pipe(uglify())
   .pipe(gulp.dest(jsDest)); 
});

// Bundle
var jsFiles = 'resources/assets/js/bundle/**/*.js'

gulp.task('bundles', function() {
    return gulp.src(jsFiles)
        .pipe(concat('bundle.js'))
        .pipe(gulp.dest(jsDest)) 
        .pipe(rename('bundle.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));        
});

// Script
var scriptPath = 'resources/assets/js/script.js'

gulp.task('scriptjs', function() {
    return gulp.src(scriptPath)
        .pipe(gulp.dest(jsDest)) 
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));        
});

// Cookie
var cookiePath= 'resources/assets/js/cookieLaw/cookieLaw.js'
var cookieDest = 'public/js'

gulp.task('cookies', function() {
    return gulp.src(cookiePath)
        .pipe(gulp.dest(cookieDest)) 
        .pipe(rename('cookieLaw.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'));           
});


// DEFAULT TASK ========================================= 

gulp.task('default', ['sass'], function() {

    gulp.watch(sassDirectory, ['sass']);
    gulp.watch('./public/css/mainstyle.css', ['minify-css']);
    gulp.watch('./public/css/mainstyle.min.css', ['prefix']);
    gulp.watch(scriptPath, ['scriptjs']);
    gulp.watch(cookiePath, ['cookies']);
    gulp.watch(jsFiles, ['bundles']);

})