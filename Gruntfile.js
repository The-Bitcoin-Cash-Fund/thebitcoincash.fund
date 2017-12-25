module.exports = function(grunt) {

  var IMAGE_ASSET_PATTERN, IS_PRODUCTION, STATIC_ASSETS_PATTERN;
  IS_PRODUCTION = grunt.option('env') === 'production';
  IMAGE_ASSET_PATTERN = '**/*.{png,jpg,jpeg,gif,svg}';
  STATIC_ASSETS_PATTERN = '**/*.{css,js,scss,css.liquid,js.liquid,scss.liquid,eot,ttf,woff}';
  DIR_FW = "D:/Software Development/Websites/Bitcoin Cash Fund/";

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    base: grunt.file.setBase('D:/Software Development/Websites/Bitcoin Cash Fund/'),

    // Copy the required files to the build directory
    copy: {
      favicon: {
        expand: true,
        cwd: 'src/',
        src: 'favicon.ico',
        dest: '.build/'
      },
      assets: {
        expand: true,
        cwd: 'src/assets/',
        src: '**',
        dest: '.build/assets/'
      }
    },

    // Clean up...
    clean: ['.build/*'],

    // Watch for changes
    watch: {
      grunt: {
        options: { spawn: false },
        files: ['Gruntfile.js'],
        tasks: ['die'] 
      },
      copy: {
        files: [
          'src/**'
        ],
        tasks: ['copy', 'preprocess']
      }
    },

    // Create a local webserver
    connect: {
      task: {
        options: {
          port: 3000,
          base: '.build/'
        }
      }
    },

    // Preprocess 
    preprocess : {
      options: {
        context : {
          DEBUG: true,
          srcDir: 'src/'
        }
      },
      html: {
        cwd: 'src/',
        src: '**/*.preproc.html',
        ext: '.html',
        dest: '.build/',
        expand: true
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-preprocess');

  grunt.registerTask('die', function() {
    console.log("* * * * * * * * * * * * * * * * * * * * \n\n\n\n\n\n");
    process.exit(code=1);
  });
  grunt.registerTask('build-live', ['concat', 'uglify', 'imagemin', 'copy']);
  grunt.registerTask('build-dev',  ['clean', 'copy', 'preprocess']);
  grunt.registerTask('test', ['clean', 'copy', 'preprocess']);
  return grunt.registerTask('default', ['build-dev', 'connect', 'watch']);
};
