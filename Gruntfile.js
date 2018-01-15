module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    base: grunt.file.setBase('D:/Software Development/Websites/Bitcoin Cash Fund/'),

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
        host: "ftp.solomonpierce.com",
        dest: "bcf/v2",
        port: 21
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

  grunt.registerTask('die', function() {
    console.log("* * * * * * * * * * * * * * * * * * * * \n\n\n\n\n\n");
    process.exit(code=1);
  });
  grunt.registerTask('force-ftp', ['ftp_push:force', 'watch']);
  return grunt.registerTask('default', ['ftp_push:all', 'watch']);
};
