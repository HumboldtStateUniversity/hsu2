module.exports = function (grunt) {
  
  grunt.initConfig({

    sass: {
      dist: {
        files: {
          'css/style.css': 'scss/style.scss',
          'css/horizontal.css': 'scss/horizontal.scss',
          'css/vertical.css': 'scss/vertical.scss'
        }
      }
    },

    watch:{
      css: {
        files: '**/*.scss',
        tasks: ['sass'],
      },
      
      livereload: {
        files: ['templates/*.tpl.php', 'css/*.css'],
        options: {
          livereload: true
        }
      }
    }


  });

  require('load-grunt-tasks')(grunt);

};