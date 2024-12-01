const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
  mode: 'production',
  entry: {
    main: './src/js/index.js', // Entrada para archivos JS
    styles: './src/scss/styles.scss', // Entrada para archivos SCSS
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/[name].min.js', // Archivos JS en dist/js
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader, // Extrae el CSS
          'css-loader', // Procesa el CSS
          {
            loader: 'sass-loader', // Compila SCSS a CSS
            options: {
              implementation: require('sass'), // Usa Dart Sass
            },
          },
        ],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].min.css', // Archivos CSS en dist/css
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [
      new CssMinimizerPlugin(),
      new TerserPlugin(),
    ],
  },
  resolve: {
    extensions: ['.js', '.scss'],
  },
  watch: true, // Habilitar el modo watch
};