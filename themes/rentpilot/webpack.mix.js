var siteName = 'rentpilot';


const path = require('path')
const mix = require('laravel-mix')

const sourceDir = './src'
const buildDir = './'

// JavaScript
//mix.js(`${sourceDir}/assets/js/app.js`, `${buildDir}/assets/js`)
mix.copyDirectory(`${sourceDir}/assets/js`, `${buildDir}/assets/js`);

// CSS
mix.sass(`${sourceDir}/assets/app.scss`, `${buildDir}/assets`)
mix.sass(`${sourceDir}/assets/utilities.scss`, `${buildDir}/assets`)
mix.sass(`${sourceDir}/assets/base.scss`, `${buildDir}/assets`)

// Copy directories
mix.copyDirectory(`${sourceDir}/assets/fonts`, `${buildDir}/assets/fonts`);
mix.copyDirectory(`${sourceDir}/assets/images`, `${buildDir}/assets/images`);
mix.copyDirectory(`${sourceDir}/assets/icons`, `${buildDir}/assets/icons`);


// BrowserSync - https://browsersync.io/docs/options/
mix.browserSync({
    proxy: 'http://' + siteName + '.test',
    host: siteName + '.test',
    open: 'external',
    port: 4000,
    files: [
      "./src/**/*.scss",
      './**/*.htm',
      "./../../**/**/*.htm"
  ]
})


// Options
mix.options({
    postCss: [
      require('tailwindcss')
    ],
    processCssUrls: false,
})

if (!mix.inProduction()) {
    // Sourcemaps
    mix.sourceMaps()
}

// Webpack config
mix.webpackConfig({
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                include: [path.resolve(__dirname, 'node_modules')],
            },
        ],
    },
})
