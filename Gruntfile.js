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