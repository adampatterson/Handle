let mix = require('laravel-mix')

let scssOptions = {
    processCssUrls: false
}

let bundles = {
    'all': [
        './src/js/app.js'
    ]
}

let extractLibs = [
    'jquery',
    'bootstrap',
]

mix
    .setPublicPath('./assets')
    .sass('src/scss/base.scss', 'css').options(scssOptions)
    // Extract libraries requires ECMAScript 6 imports in your code.
    .js(bundles.all, 'js/app.js')
    .extract(extractLibs)

    .autoload({
        'jquery': ['$', 'window.jQuery', 'jQuery']
    })

    .version()


// Production
if (mix.inProduction()) {
    mix.options({
        terser: {
            terserOptions: {
                warnings: true
            }
        }
    })
} else {
    mix.webpackConfig({
        devtool: 'source-map',
    })

    mix.sourceMaps()
}

// BrowserSync and LiveReload on `npm run watch` command
//mix.browserSync({
//    proxy: 'http://wordpress.local',
//    port: 8080,
//    If you want to use HTTPS, update the proxy path
//    and add tour local certificate paths
//    https: {
//        key: '/your/certificates/location/your-local-domain.key',
//        cert: '/your/certificates/location/your-local-domain.crt'
//    },
//    files: [
//        '**/*.php',
//        'assets/css/**/*.css',
//        'assets/js/**/*.js',
//        '!node_modules',
//        '!vendor',
//    ],
//    ghostMode: false,
//    open: false,
//    injectChanges: true,
//})
