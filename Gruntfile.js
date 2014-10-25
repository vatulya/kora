module.exports = function (grunt) {

    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ['public/']
                },
                files: {
                    "public/css/pages/index__about.css": "public/less/pages/index/about.less",
                    "public/css/pages/index__designers.css": "public/less/pages/index/designers.less",
                    "public/css/pages/index__gallery.css": "public/less/pages/index/gallery.less",
                    "public/css/pages/index__index.css": "public/less/pages/index/index.less",
                    "public/css/pages/index__mozaika.css": "public/less/pages/index/mozaika.less"
                }
            },
            production: {
                options: {
                    paths: ['public/']
                },
                files: {
                    "public/css/pages/index/about.css": "public/less/pages/index/about.less",
                    "public/css/pages/index/designers.css": "public/less/pages/index/designers.less",
                    "public/css/pages/index/gallery.css": "public/less/pages/index/gallery.less",
                    "public/css/pages/index/index.css": "public/less/pages/index/index.less",
                    "public/css/pages/index/mozaika.css": "public/less/pages/index/mozaika.less"
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');

    grunt.registerTask('development', ['less:development']);
    grunt.registerTask('production', ['less:production']);
    grunt.registerTask('default', ['development']);

};
