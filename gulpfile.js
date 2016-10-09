var gulp = require('gulp-param')(require('gulp'), process.argv),
	concat = require('gulp-concat'),
	less = require('gulp-less'),
	path = require('path'),
	del = require('del'),
	util = require('gulp-util'),
	ftp = require('gulp-ftp'),
	jshint = require('gulp-jshint');

//Routes for archives types
var routes = {
  templates: '*.php',
  icons: 'icon/*',
	scripts: 'js/*.js',
	less : 'css/*.less',
  css : 'css/style.css',
	images: 'images/*',
  js: 'js/*.js'
};

//FTP configuration
var configFTP = function(path){
	return {
		host: 'ftp.xxx.com',
		user: 'xxx',
		pass: 'xxx',
		remotePath: '/public_html/open-charity/sites/all/themes/OpenCharity/' + path
	};
};

gulp.task('cleanCSS', function() {
	return del([routes.css]);
});

gulp.task('buildCSS',['cleanCSS'], function() {
	return gulp.src(routes.less)
	.pipe(less({
		paths: [ path.join(__dirname, 'less', 'includes') ]
	}))
	.pipe(gulp.dest('css'));
});

gulp.task('pubIcons', function(){
	return gulp.src(routes.icons )
	.pipe(ftp(configFTP('icon')))
	.pipe(util.noop());
});

gulp.task('pubTemplates', function(){
	return gulp.src(routes.templates)
	.pipe(ftp(configFTP('')))
	.pipe(util.noop());
});

gulp.task('pubImg', function(){
	return gulp.src(routes.images)
	.pipe(ftp(configFTP('images')))
	.pipe(util.noop());
});

gulp.task('pubCSS', function(){
	return gulp.src(routes.css)
	.pipe(ftp(configFTP('css')))
	.pipe(util.noop());
});

gulp.task('pubJS', function(){
	return gulp.src(routes.js)
	.pipe(ftp(configFTP('js')))
	.pipe(util.noop());
});

gulp.task('pubInfo', function(){
	return gulp.src('opencharity.info')
	.pipe(ftp(configFTP('')))
	.pipe(util.noop());
});

gulp.task('pubLogo', function(){
	return gulp.src('logo.png')
	.pipe(ftp(configFTP('')))
	.pipe(util.noop());
});

gulp.task('pubScreenshot', function(){
	return gulp.src('screenshot.png')
	.pipe(ftp(configFTP('')))
	.pipe(util.noop());
});

//Publish All Source Files
gulp.task('publish', ['pubTemplates','pubCSS','pubJS','pubInfo','pubLogo','pubScreenshot'], function(){
	return gulp.src('')
	.pipe(ftp(configFTP('')))
	.pipe(util.noop());
});

//Default Gulp Action Watch buildJS and buildCSS
gulp.task('default', ['buildCSS'], function(){
	gulp.watch(routes.less, ['buildCSS']);
});
