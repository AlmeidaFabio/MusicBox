const { src, dest, parallel } = require('gulp');
const rename = require("gulp-rename");
const minifyJs = require("gulp-uglify");
const minifyCss = require('gulp-uglifycss');
const image = require('gulp-image');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const cssImport = require('gulp-cssimport');

function base(){
    return src('src/templates/*.html')
    .pipe(dest('public/'));
}

function Artist(){
    return src('src/templates/artists/*.html')
    .pipe(dest('public/assets/templates/'));
}

function javascript(){
    return src('src/js/*.js')
    .pipe(babel({
        presets:['@babel/env']
    }))
    .pipe(minifyJs())
    .pipe(rename({extname:'.min.js'}))
    .pipe(dest('public/assets/js/'));
}

function css(){
    return src('src/css/*.css')
    .pipe(cssImport())
    .pipe(sass())
    .pipe(minifyCss())
    .pipe(rename({extname:'.min.css'}))
    .pipe(dest('public/assets/css/'));
}

function imagensBg(){
    return src('src/images/bgs/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/bgs'));
}

function imagensMetallica(){
    return src('src/images/artist/metallica/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/artist/metallica'));
}

function imagensGuns(){
    return src('src/images/artist/guns/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/artist/guns'));
}

function imagensPinkFloyd(){
    return src('src/images/artist/pinkfloyd/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/artist/pinkfloyd'));
}

function imagensLed(){
    return src('src/images/artist/led/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/artist/led'));
}

function imagensJohan(){
    return src('src/images/artist/johanglossner/*.{jpg,png}')
    .pipe(image())
    .pipe(dest('public/assets/images/artist/johanglossner'));
}

exports.default = parallel(base, javascript, css, imagensBg, Artist, imagensMetallica, imagensGuns, imagensPinkFloyd, imagensLed, imagensJohan);