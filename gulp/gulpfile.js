/**
 * Created by Administrator on 2017/1/13.
 */
var gulp = require("gulp");
var sass = require("gulp-sass");
var connect=require("gulp-connect");
var concat = require("gulp-concat");
var ugligy = require ("gulp-uglify");
var rename = require("gulp-rename");

gulp.task("copy",function(){
    gulp.src("src/index.html").pipe(gulp.dest("dist")).pipe(connect.reload());

});
gulp.task("copy-img",function(){
    gulp.src("src/images/*.{jpg,png}").pipe(gulp.dest("dist/images"))
});
gulp.task("copy-img-all",function(){
    gulp.src("src/images/**/*.jpg").pipe(gulp.dest("dist/images"))
});
gulp.task("copy-png",function(){
    gulp.src(["src/images/**/*.png","!src/images/2.png"]).pipe(gulp.dest("dist/png"));
});
gulp.task("watch",function(){
    gulp.watch("src/index.html",["copy"]);
    //gulp.watch("src/scss/style.scss",["sass"]);

});
gulp.task("sass",function(){
    gulp.src("src/scss/style.scss").pipe(sass())
    .pipe(gulp.dest("dist/css")).pipe(connect.reload());
});
gulp.task("server",function(){
    connect.server({
        root:"dist",
        port:8888,
        livereload:true
    })
});
gulp.task("watch-html",["server","watch"]);
gulp.task("concat",function(){
    gulp.src(["src/js/js1.js","src/js/js2.js"])
        .pipe(concat("main.js")).pipe(gulp.dest("dist/js"))
        .pipe(ugligy()).pipe(rename("main.min.js")).pipe(gulp.dest("dist/js"));
});


gulp.task("watch-sass",function(){
    gulp.watch("src/scss/style.scss",["sass"]);
});
gulp.task("watch-all",["server","watch-sass","watch"]);
