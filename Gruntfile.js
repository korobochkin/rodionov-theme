module.exports = function (grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            style: {
                files: {
                    'style.css': 'styles/main.scss'
                }
            }
        },

        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')(
                        {
                            browsers: ['last 1 version']
                        }
                    ),
                    require('cssnano')
                ]
            },
            style: {
                src: 'style.css',
                dest: 'style.min.css'
            }
        }

        /*autoprefixer: {
          options: {
            browsers: configBridge.config.autoprefixerBrowsers
          },
          style: {
            options: {
              map: true
            },
            src: [
              'style.css',
              'assets/css/admin/main-debug.css'
            ]
          }
        },*/

        /*cssmin: {
          options: {
            compatibility: 'ie8',
            keepSpecialComments: '*',
            sourceMap: true,
            sourceMapInlineSources: false,
            advanced: false
          },
          style: {
            src: 'style.css',
            dest: 'style.min.css'
          }
        },*/

        // Copy
        /*copy: {
            scripts__select2: {
                expand: true,
                cwd: 'node_modules/select2/dist/',
                src: ['**!/!*'],
                dest: 'assets/js/select2/'
            }
        }*/
    });

    require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

    grunt.registerTask('default', [
        'styles'
    ]);

    grunt.registerTask('style', [
        'sass:style',
        'postcss:style'
    ]);

    grunt.registerTask('scripts', [

    ]);

};