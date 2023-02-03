let mix = require('laravel-mix')

require('laravel-mix-purgecss')

let scssOptions = {
    processCssUrls: false
}

const purgecssWordpress = {
    whitelist: [
        'rtl',
        'home',
        'blog',
        'archive',
        'date',
        'error404',
        'logged-in',
        'admin-bar',
        'no-customize-support',
        'custom-background',
        'wp-custom-logo',
        'pagination',
        'alignnone',
        'alignright',
        'alignleft',
        'wp-caption',
        'wp-caption-text',
        'screen-reader-text',
        'comment-list',
    ],
    whitelistPatterns: [
        /^rtl(-.*)?$/,
        /^home(-.*)?$/,
        /^blog(-.*)?$/,
        /^archive(-.*)?$/,
        /^date(-.*)?$/,
        /^error404(-.*)?$/,
        /^logged-in(-.*)?$/,
        /^admin-bar(-.*)?$/,
        /^no-customize-support(-.*)?$/,
        /^search(-.*)?$/,
        /^nav(-.*)?$/,
        /^wp(-.*)?$/,
        /^wp-block-(a-z)?$/,
        /^wp-custom-logo(-.*)?$/,
        /^screen(-.*)?$/,
        /^navigation(-.*)?$/,
        /^(.*)-template(-.*)?$/,
        /^(.*)?-?single(-.*)?$/,
        /^postid-(.*)?$/,
        /^post-(.*)?$/,
        /^attachmentid-(.*)?$/,
        /^attachment(-.*)?$/,
        /^page(-.*)?$/,
        /^(post-type-)?archive(-.*)?$/,
        /^author(-.*)?$/,
        /^gallery(-.*)?$/,
        /^category(-.*)?$/,
        /^tag(-.*)?$/,
        /^card(-.*)?$/,
        /^menu(-.*)?$/,
        /^tags(-.*)?$/,
        /^tax-(.*)?$/,
        /^term-(.*)?$/,
        /^date-(.*)?$/,
        /^(.*)?-?paged(-.*)?$/,
        /^says(-.*)?$/,
        /^depth(-.*)?$/,
        /^comment(-.*)?$/,
        /^comments(-.*)?$/,
        /^children(-.*)?$/,
        /^crnb(-.*)?$/,
        /^custom(-.*)?$/,
        /^custom-background(-.*)?$/,
        /^port-description(-.*)?$/,
        /^gform_(.*)?$/,
        /^gfield_(.*)?$/,
        /^validation_(.*)?$/
    ],
}

mix.setResourceRoot('../../')
   .setPublicPath('./')
   .sass( 'src/scss/style.scss', '/' )
   .sass( 'src/scss/theme.scss', 'assets/css' )
   .options( scssOptions )

mix.version()

mix.purgeCss(
    {
//           enabled: mix.inProduction(),
        enabled: false,
        paths: () => [
            path.join(__dirname, '*.php'),
            path.join(__dirname, 'templates/**/*.php'),
            path.join(__dirname, 'woocommerce/**/*.php'),
            path.join(__dirname, 'assets/js/**/*.js'),
        ],
        extensions: ['html', 'js', 'php'],

        // Other options are passed through to Purgecss
        whitelist: purgecssWordpress.whitelist,
        whitelistPatterns: purgecssWordpress.whitelistPatterns,
    }
)


// Production
if (mix.inProduction()) {
    mix.options({
        terser: {
            terserOptions: {
                warnings: false
            }
        }
    })
} else {
    mix.webpackConfig({
        devtool: 'source-map',
    })

    mix.sourceMaps()
}
