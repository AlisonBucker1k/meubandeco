"use strict";

const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const svgSprite = require("gulp-svg-sprite");

const resources_setup = {
  base_folder: "resources",
  get raw_style(){
    return this.base_folder + "/scss";
  },
  get svg(){
    return this.base_folder + "/svg"
  }
};
const public_setup = {
  base_folder: "public",
  get assets(){ return this.base_folder + "/assets"},
  get styles(){ return this.base_folder + "/css"},
  get svg(){ return this.base_folder + "/svg"}
};
const sprite_config = {
  mode: {
    css: false,
    view: false
  }
};

function generate_style(cb) {
  return gulp
    .src(resources_setup.raw_style + "/**/*.scss")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(gulp.dest(public_setup.styles));
};
function generate_svg_sprite(cb) {
  return gulp
    .src(resources_setup.svg)
    .pipe(svgSprite(sprite_config))
    .pipe(gulp.dest(public_setup.svg));
}
function watch_scss() {
  gulp.watch(resources_setup.styles + "/**/*.scss", generate_style);
};
function watch_svg(cb) {
  gulp.watch(resources_setup.svg + "/**/*.svg", generate_svg_sprite);
};
function default_fnc(cb) {
  watch_scss();
  watch_svg();
};
exports.gerar_sprite = generate_svg_sprite;
exports.gerar_estilo = generate_style;
exports.default = default_fnc;