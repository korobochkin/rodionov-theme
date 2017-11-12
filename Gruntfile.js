module.exports = function (grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    // This files compressed into plugin archive for WordPress.org version of plugin.
    var filesToCompress = [
        '**',
        '!vendor/**/Test[s]*/**',
        '!vendor/**/test[s]*/**',
        // vendor/twig/twig folder have strange test folder name
        '!vendor/**/test/**',
        '!.sass-cache/**',
        '!node_modules/**',
        '!dist/**'
    ];

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
        },

        compress: {
            theme: {
                options: {
                    archive: 'dist/<%= pkg.name %>.zip'
                },
                files: [
                    {
                        expand: true,
                        src: filesToCompress,
                        dest: '<%= pkg.name %>/',
                        dot: false
                    }
                ]
            },
            themeNamed: {
                options: {
                    archive: 'dist/<%= pkg.name %>.<%= pkg.version %>.zip'
                },
                files: [
                    {
                        expand: true,
                        src: filesToCompress,
                        dest: '<%= pkg.name %>/',
                        dot: false
                    }
                ]
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