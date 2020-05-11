const path = require("path");
const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

var dest = {
    css: "css-leadhero",
    js: "js-leadhero",
    fonts: "fonts-leadhero",
    images: "images-leadhero"
};

module.exports = {
    entry: "./src/index.js",
    output: {
        path: path.resolve(__dirname, "./"),
        filename: dest.js + "/app.bundle.js"
    },
    module: {
        rules: [{
                test: /\.js$/,
                exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"]
                    }
                }
            },
            {
                test: /\.(s*)css$/,
                use: [
                    { loader: MiniCssExtractPlugin.loader },
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: true,
                            ident: "postcss",
                            plugins: [
                                require("autoprefixer"),
                                require("css-mqpacker")                               
                            ]
                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            outputStyle: 'compressed',
                            sourceMap: true
                        }
                    }
                ]
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                exclude: /images/,
                use: [{
                    loader: "file-loader",
                    options: {
                        outputPath: dest.css,
                        publicPath: "./",
                        name: "[name].[ext]"
                    }
                }]
            },
            {
                test: /\.(png|jpg|gif|svg|mp4)$/,
                exclude: /fonts/,
                use: [{
                    loader: "file-loader",
                    options: {
                        outputPath: dest.images,
                        publicPath: "../" + dest.images,
                        name: "[name].[ext]"
                    }
                }]
            }
        ]
    },
    resolve: {
        alias: { 'picker': 'pickadate/lib/picker' }
    },
    devtool: 'cheap-module-source-map',
    plugins: [
        new MiniCssExtractPlugin({
            filename: dest.css + "/app.min.css"
        }),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            jquery: "jquery"
        })
    ]
};