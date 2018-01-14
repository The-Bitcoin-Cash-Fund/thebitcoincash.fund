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
        files: ['src/**/**'],
        tasks: ['ftp_push']
      }
    },

    // Push to the FTP Server
    ftp_push: {
      options: {
        authKey: "dev",
        host: "ftp.solomonpierce.com",
        dest: "bcf",
        port: 21
      },
      all: {
        files: [
          {
            expand: true,
            cwd: 'src',
            src: ['**/**']
          }
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-ftp-push');

  grunt.registerTask('die', function() {
    console.log("* * * * * * * * * * * * * * * * * * * * \n\n\n\n\n\n");
    process.exit(code=1);
  });
  return grunt.registerTask('default', ['ftp_push', 'watch']);
};
