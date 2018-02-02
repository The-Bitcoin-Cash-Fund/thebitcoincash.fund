module.exports = function(grunt) {
  // Read basic info from settings.json
  var BASE_DIR = grunt.file.readJSON("settings.json").base_dir;
  var FTP_HOST = grunt.file.readJSON("settings.json").ftp_host;
  var FTP_DEST = grunt.file.readJSON("settings.json").ftp_dest;
  var FTP_PORT = grunt.file.readJSON("settings.json").ftp_port;
  
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    base: grunt.file.setBase(BASE_DIR),

    // Watch for changes
    watch: {
      grunt: {
        options: { spawn: false },
        files: ['Gruntfile.js'],
        tasks: ['die'] 
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

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-push');

  grunt.registerTask('force-ftp', ['ftp_push:force', 'watch']);
  return grunt.registerTask('default', ['ftp_push:all', 'watch']);
};
