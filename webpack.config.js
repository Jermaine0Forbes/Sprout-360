var path = require('path');
const extractPlugin = require('extract-text-webpack-plugin');
const ex = new extractPlugin('../style.css');
const autoPrefix = { loader:'postcss-loader',options:{plugins:(loader)=>[require('autoprefixer')()]}};

/*   SASS  */
const config = {
    entry:{
        style:'./wp-content/themes/sprout360/js/sass.js',
        main: './wp-content/themes/sprout360/js/type.js'
    },
    output:{
        path: path.resolve('wp-content/themes/sprout360/js'),
        filename:'[name].js'
    },
    resolve:{
        extensions:['.ts', '.tsx', '.js']
    },
    module:{
        rules:[
            {
                test:/\.scss$/i,
                use:ex.extract(['css-loader',autoPrefix,'sass-loader'])

            },
             {
                test:/\.tsx?$/,
                loader:'ts-loader'

            }
        ]
    },
    watch:true,
    plugins:[
        ex
    ]
}

module.exports = config;
