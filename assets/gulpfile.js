var gulp        = require('gulp')
var watch       = require('gulp-watch');
var concat      = require('gulp-concat');
var stylus      = require('gulp-stylus');
var uglify      = require('gulp-uglify');
var browserSync = require('browser-sync').create();

gulp.task('serve', function() {
    browserSync.init({
        server: "./"
    });
    gulp.watch(
        [
            'css/stylus/**/*.styl',
            'css/stylesheets/**/*.css'
        ], gulp.parallel('css'));

    gulp.watch(
        [
            'js/src/**/*.js'
        ], gulp.parallel('js'));

    gulp.watch(
        [
            "./*.html"
        ]).on('change', browserSync.reload);
});

// Compile CSS
gulp.task('css', function() {
    return gulp.src('./css/stylus/style.styl')
        .pipe(stylus({
            'include css': true
        }))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream());
});
// Compile JS
gulp.task('js', function() {
    return gulp.src(['./js/src/vendor/*.js'])
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js'))
        .pipe(browserSync.stream());

});

gulp.task('default', gulp.parallel('serve'));