module.exports = function(grunt) {
  // Read basic info from settings.json
  var BASE_DIR = grunt.file.readJSON("settings.json").base_dir;
  var FTP_HOST = grunt.file.readJSON("settings.json").ftp_host;
  var FTP_DEST = grunt.file.readJSON("settings.json").ftp_dest;
  var FTP_PORT = grunt.file.readJSON("settings.json").ftp_port;

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    base: grunt.file.setBase(BASE_DIR),

    // Concatonate CSS files
    concat: {
      css: {
        src: [
          'html/assets/css/normalize.css',
          'html/assets/css/bootstrap.grid.css',
          'html/assets/css/bootstrap.ultralite.css',
          'html/assets/css/bootstrap.forms.css',
          'html/assets/css/bootstrap.basictype.css',
          'html/assets/css/webfonts.css',
          'html/assets/css/text.css',
          'html/assets/css/forms.css',
          'html/assets/css/layout.css',
          'html/assets/css/navbar-xs.css',
          'html/assets/css/navbar-md.css',
          'html/assets/css/mobile-nav.css',
          'html/assets/css/subscribe.css',
          'html/assets/css/footer.css',
          'html/assets/css/about.css',
          'html/assets/css/contact.css',
          'html/assets/css/donate.css',
          'html/assets/css/faqs.css',
          'html/assets/css/home.css',
          'html/assets/css/proposal.css',
          'html/assets/css/volunteer.css'
        ],
        dest: 'html/assets/css/styles.css',
      }
    },

    // Minify concatonated CSS file
    cssmin: {
      combine: {
        files: [{
          expand: true,
          cwd: 'html/assets/css',
          src: ['styles.css'],
          dest: 'html/assets/css',
          ext: '.min.css'
        }]
      }
    },

    // Minify concatonated JS file
    uglify: {
      options: {
        compress: {
          unused: true,
          drop_debugger: true,
          drop_console: true,
          dead_code: true
        },
        mangle: true,
        beautify: false,
      },
      build: {
        files: {
          'html/assets/js/scripts.min.js': [
          'html/assets/js/jquery.custom.js',
          'html/assets/js/jquery.validate.js',
          'html/assets/js/mobile-nav.js',
          'html/assets/js/menu-slider.js'
          ]
        }
      }
    },

    // Watch for changes
    watch: {
      css: {
        files: ['html/assets/css/**'],
        tasks: ['concat', 'cssmin']
      },
      js: {
        files: ['html/assets/js/**'],
        tasks: ['uglify']
      },
      ftp: {
        files: ['html/**/**'],
        tasks: ['ftp_push:all']
      }
    },

    // Push to the FTP Server
    ftp_push: {
      options: {
        authKey: "dev",
        host: FTP_HOST,
        dest: FTP_DEST,
        port: FTP_PORT
      },
      all: {
        files: [
          {
            expand: true,
            cwd: 'html',
            src: ['**/**']
          }
        ]
      },
      force: {
        options: { incrementalUpdates: false },
        files: [
          {
            expand: true,
            cwd: 'html',
            src: ['**/**']
          }
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-push');

  grunt.registerTask('compress-css', ['concat', 'cssmin']);
  grunt.registerTask('force-ftp', ['ftp_push:force', 'watch']);
  return grunt.registerTask('default', ['ftp_push:all', 'watch']);
};
