module.exports = function(grunt) {
  grunt.initConfig({
    compass: {                  // Task
      dist: {                   // Target
        options: {    
          config: 'config/config.rb',                               
          outputStyle: 'compact',          // Target options
          compile: {
            options: {}
          },
          force: true
        }
      }
    },
    purifycss: {
      options: {

      },
      target: {
        src: ['htm/*.html'], // Observe all html files
        css: ['css/*.css'], // Take all css files into consideration
        dest: 'jpcss/purekmcss.css' // Write to this path
      }
    },
    uglify: {
      my_target: {
        options: {
          beautify: true
        },
        files: {
          'js/app.js': 
          [
          'js/unmin/*.js',
          ]
        }
      }
    },
    phplint: {
        app:['../*.php']
    },
    watch: {
        compass: {
          files: ['sass/*.scss', 'sass/**/*.scss'],
          tasks: 'compass:dist'
        },
        uglify: {
          files: 'js/unmin/*.js',
          tasks: 'uglify'
        }
      } 
  });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-purifycss');
    grunt.loadNpmTasks('grunt-phplint');

  grunt.registerTask('phplint', ['phplint']);
  grunt.registerTask('pure', ['purifycss']);
  grunt.registerTask('build', ['compass']);
  grunt.registerTask('default', ['watch']);
}
