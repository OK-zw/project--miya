const gulp = require('gulp');
// const connect = require('gulp-connect');
const minjs = require('gulp-uglify'); //压缩js文件
const amdOptimize = require('amd-optimize'); //压缩require文件
const concat = require('gulp-concat') //合并
const rename = require('gulp-rename') //改名



gulp.task('minjs', function(){
    gulp.src('src/js/cloud-zoom.1.0.2.min.js')
    .pipe(minjs())
    .pipe(gulp.dest('./dist'))
})



gulp.task('rjs', function(){
    gulp.src('src/js/*.js')
    .pipe(amdOptimize('moduleAsk', {
        paths: {
            'moduleAsk': 'moduleAsk',
            'moduleAjax': 'moduleAjax',
            'jquery': 'jquery-3.3.1',
            'confirm': 'jquery-confirm',
            'http': 'moduleAjax'
        }
    }))
    .pipe(concat('moduleAsk.js'))
    .pipe(gulp.dest('dist'))
    .pipe(rename('module.min.js'))
    .pipe(minjs())
    .pipe(gulp.dest('dist'))
})