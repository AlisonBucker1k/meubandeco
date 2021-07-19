"use strict";

const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const svgSprite = require("gulp-svg-sprite");

const resources_setup = {
  base_folder: "resources",  
  get raw_style() {
    return this.base_folder + "/scss";
  },
  get svg() {
    return this.base_folder + "/svg"
  }
};
const public_setup = {  
  base_file_name : "mbdc-sprite", 
  base_folder: "public",
  get assets() { return this.base_folder + "/assets" },
  get styles() { return this.base_folder + "/assets/css" },
  get svg() { return this.base_folder + "/assets/svg" }
};
const sprite_config = {
  "svg": {
    "rootAttributes": {}, //{ style: "display: none;"}
    "namespaceIDs": false,
    "dimensionAttributes": false
  },
  "shape": {
    "id": {
      // "generator": "%s",
      "separator": "-",
      "generator": "%s" //Gera com id do svg         	
    },

    "spacing": {
      "padding": 10
    }
  },
  "mode": {
    "defs": {
      "sprite": public_setup.base_file_name+ '-defs.svg',
    },
    "symbol": {
      "sprite": public_setup.base_file_name + '-symb.svg'
    },
    "stack": {
      "sprite": public_setup.base_file_name + '-stac.svg'
    }
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
    .src(resources_setup.svg + "/**/*.svg")
    .pipe(svgSprite(sprite_config))
    .pipe(gulp.dest(public_setup.svg));
}
function watch_scss() {
  gulp.watch(resources_setup.raw_style + "/**/*.scss", generate_style);
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