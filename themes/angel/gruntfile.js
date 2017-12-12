module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/main.css': 'scss/main.scss'
        }
      }
    },
    watch: {
      sassy: {
        files: [
          'css/*.css',
          'scss/*.scss'
        ],
        tasks: ['sass'],
        spawn: false,
        options: {
          livereload: true
        }
      },
      grunt: {
        files: 'gruntfile.js',
        options: {
          reload: true
        }
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass']);
};
