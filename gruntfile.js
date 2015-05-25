'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    project: {
//      app: [''],
//      assets: ['<%= project.app %>'],
      css: ['sass/my_styles.scss']
    },
    sass: {
      dev: {
        options: {
          style: 'expanded',
          compass: false
        },
        files: {
          'css/my_styles.css': 'sass/my_styles.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['sass/{,*/}*.{scss,sass}', 'bower_components/bootstrap-sass-official/assets/stylesheets/bootstrap/{,*/}*.{scss,sass}'],
        tasks: ['sass:dev']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', [
      'watch'
    ]);

};