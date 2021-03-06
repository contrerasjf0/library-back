var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");


var sourcemaps = require('gulp-sourcemaps');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var browserify = require('browserify');
var watchify = require('watchify');
var babel = require('babelify');


gulp.task('styles', function() {
   return  gulp.src('./resources/assets/sass/app.scss')
        .pipe(sass().on('error', sass.logError))
         .pipe(cleanCSS())
        .pipe(gulp.dest('./public/css/'));

});

gulp.task('minify', ['styles'], function(){
     return gulp.src(['./public/css/app.css'])
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./public/css/'))
})





function compile(watch) {
  var bundler = watchify(browserify('./resources/assets/js/index.js', { debug: true, plugins: [ "es2015",'syntax-async-functions', 'transform-regenerator' ] }).transform(babel));

  function rebundle() {
    bundler.bundle()
      .on('error', function(err) { console.error(err); this.emit('end'); })
      .pipe(source('build.js'))
      .pipe(buffer())
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('./public/js/build/'));
  }

  if (watch) {
    bundler.on('update', function() {
      console.log('-> bundling...');
      rebundle();
    });
  }

  rebundle();
}

function watch() {
  return compile(true);
};

gulp.task('build', function() { return compile(); });
gulp.task('watch', function() { return watch(); });

//Watch task
gulp.task('watch',function() {
    gulp.watch('./resources/assets/sass/**//*.scss',['styles']);
});

gulp.task('start', ['styles', 'minify']);
gulp.task('default', ['styles', 'build']);