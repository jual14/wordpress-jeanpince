var gulp = require('gulp')
        , gutil = require('gulp-util')
        , bower = require('gulp-bower')
        , compass = require('gulp-compass')
        , concat = require('gulp-concat')
        , cssnano = require('gulp-cssnano')
        , uglify = require('gulp-uglify')
        , rename = require('gulp-rename')
        , imagemin = require('gulp-imagemin')
        , sourcemaps = require('gulp-sourcemaps')
        , notify = require('gulp-notify');



var assets_source = 'assets/src';
var assets_dist = 'assets/dist';

var source = {
    css: assets_source + '/css',
    sass: assets_source + '/sass',
    font: assets_source + '/font/**/*',
    img: assets_source + '/img/**/*.{png,jpg,jpeg,gif,svg}',
    js: assets_source + '/js/**/*.js'
}

var dist = {
    css: assets_dist + '/css',
    font: assets_dist + '/font',
    img: assets_dist + '/img',
    js: assets_dist + '/js'
}

var bower_path = 'bower_components';



// ***** BOWER

gulp.task('bower', function () {
    return bower();
});



// ***** SASS

gulp.task('css', ['bower'], function () {
    return gulp.src(assets_source + '/sass/style.scss')
            .pipe(sourcemaps.init())
            .pipe(compass({
                config_file: './config.rb',
                css: source.css,
                sass: source.sass
            }))
            .on('error', function (error) {
               notify().write(error);
               this.emit('end');
            })
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(cssnano())
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(dist.css))
            .pipe(notify({ message: 'Compilation terminée' }));
});



// ***** FONTS

//gulp.task('font-bootstrap', function () {
//    return gulp.src(bower_path + '/bootstrap/fonts/**/*')
//            .pipe(gulp.dest(dist.font));
//});

//gulp.task('font-awesome', function () {
//    return gulp.src(bower_path + '/font-awesome/fonts/**/*')
//            .pipe(gulp.dest(dist.font));
//});

gulp.task('font', function () {
    return gulp.src(source.font)
            .pipe(gulp.dest(dist.font));
});



// ***** JS

/*gulp.task('js-bootstrap', ['bower'], function () {
    return gulp.src([bower_path + '/bootstrap/dist/js/bootstrap.js'])
            .pipe(sourcemaps.init())
            .pipe(uglify())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(dist.js));
});*/

/*gulp.task('js-history', ['bower'], function () {
    return gulp.src(bower_path + '/history.js/scripts/bundled-uncompressed/html5/jquery.history.js')
            .pipe(sourcemaps.init())
            .pipe(uglify())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(dist.js));
});*/

gulp.task('js', ['bower'], function () {    
    return gulp.src(source.js)
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .on('error', function (error) {
            notify().write(error);
            console.log(error);
            this.emit('end');
        })
        .pipe(concat('app.min.js'))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(dist.js))
        .pipe(notify({ message: 'Minification JS terminée' }));
});



// ***** IMAGES

gulp.task('img', function () {
    return gulp.src(source.img)
            .pipe(imagemin([], {verbose: true}))
            .pipe(gulp.dest(dist.img));
});



gulp.task('watch', function () {
    gulp.watch(assets_source + '/sass/style.scss', ['css']);
    gulp.watch(source.js, ['js']);
    gulp.watch(source.font, ['font']);
    gulp.watch(source.img, ['img']);
});



gulp.task('default', [
//    'bower',
//    'js-bootstrap',
//    'js-history',
//    'font-bootstrap',
//    'font-awesome',
    'font',
    'css',
    'js',
    'img',
    'watch'
]);