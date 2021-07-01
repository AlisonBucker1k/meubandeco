"use strict";

const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));

const base_scss_dir = "resources/scss";
const base_output_style_dir = "resources/css";


function generate_style(cb) {
  return gulp
    .src( base_scss_dir + "/**/*.scss")
    .pipe( sass({ outputStyle: "compressed" }).on("error", sass.logError ))
    .pipe( gulp.dest( base_output_style_dir ));
};
function watch_scss() {
  gulp.watch(base_scss_dir, generate_style);
};
function default_fnc(cb) {
  watch_scss();
};
exports.gerar_estilo = generate_style;
exports.default = default_fnc;