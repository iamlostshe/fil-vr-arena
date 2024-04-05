const mix = require('laravel-mix');
mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
            }),
        ]
    };
});
mix.options({
    parallel: require('os').cpus().length,
});

mix.less('resources/less/karma.less', 'public/css').version();
mix.css('resources/plugins/aos/aos.css', 'public/css/plugins/aos').version();
mix.css('resources/plugins/fancybox/jquery.fancybox.min.css', 'public/css/plugins/fancybox').version();
mix.css('resources/plugins/select2/css/select2.min.css', 'public/css/plugins/select2').version();
mix.css('resources/plugins/swiper10/swiper-bundle.min.css', 'public/css/plugins/swiper10').version();
// JavaScript
mix.js('resources/js/jquery-3.7.1.min.js', 'public/js').version();
mix.js('resources/js/device.js', 'public/js').version();
mix.js('resources/plugins/jquery.mask.min.js', 'public/js').version();
mix.js('resources/plugins/fancybox/jquery.fancybox.min.js', 'public/js/plugins/fancybox').version();
mix.copy('resources/plugins/swiper10/swiper-bundle.min.js', 'public/js/plugins/swiper10').version();
mix.js('resources/js/core.js', 'public/js').version();
mix.copy('resources/js/core.swiper.js', 'public/js').version();
// Media
mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/media', 'public/media');



