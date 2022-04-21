"use strict";

/* пути к исходным файлам (src), к готовым файлам (build), а также к тем, за изменениями которых нужно наблюдать (watch) */
var path = {
  build: {
    css: "css/",
  },
  src: {
    style: "scss/style.scss",
  },
  watch: {
    css: "scss/*.scss",
  },
  clean: "css/style.css",
};
/* подключаем gulp и плагины */
let gulp = require("gulp"); // подключаем Gulp
let plumber = require("gulp-plumber"); // модуль для отслеживания ошибок
let sourcemaps = require("gulp-sourcemaps"); // модуль для генерации карты исходных файлов
let sass = require("gulp-sass")(require("sass")); // модуль для компиляции SASS (SCSS) в CSS
let autoprefixer = require("gulp-autoprefixer"); // модуль для автоматической установки автопрефиксов
let del = require("del"); // плагин для удаления файлов и каталогов

/* задачи */

// сбор стилей
gulp.task("css:build", function () {
  return (
    gulp
      .src(path.src.style) // получим style.scss
      .pipe(plumber()) // для отслеживания ошибок
      .pipe(sass().on("error", showError)) // scss -> css
      .pipe(autoprefixer()) // добавим префиксы
      .pipe(gulp.dest(path.build.css))
      .pipe(gulp.dest(path.build.css)) // выгружаем в build
  );
});
function showError(error) {
  console.log(error.toString());
  this.emit("end");
}

// удаление каталога build
gulp.task("clean:build", function () {
  return del(path.clean);
});

// сборка
gulp.task(
  "build",
  gulp.series(
    "clean:build",
    gulp.parallel(
      "css:build",
    )
  )
);

// запуск задач при изменении файлов
gulp.task("watch", function () {
  gulp.watch(path.watch.css, gulp.series("css:build"));
});

// задача по умолчанию
gulp.task("default", gulp.series(gulp.parallel("watch")));
