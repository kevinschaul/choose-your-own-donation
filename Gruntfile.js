'use strict';

module.exports = function(grunt) {

  grunt.initConfig({
    connect: {
      server: {
        options: {
          port: 8000,
          base: 'public/',
          keepalive: true,
          open: true
        },
      }
    },
    php: {
      server: {
        options: {
          hostname: '0.0.0.0',
          port: 8000,
          base: 'public/',
          keepalive: true,
          bin: '/usr/local/bin/php', // bad hack for OS X
          open: true
        }
      }
    },
    compass: {
      dev: {
        options: {
          sassDir: 'sass',
          cssDir: 'public/css',
          watch: true
        }
      }
    },
    mochaTest: {
      test: {
        src: ['test/**/*.js']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-php');
  grunt.loadNpmTasks('grunt-mocha-test');

  grunt.registerTask('default', ['connect']);
  grunt.registerTask('server', ['connect']);
  grunt.registerTask('test', ['mochaTest']);

};

