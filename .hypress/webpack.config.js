const path = require('path');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
	entry: ['./src/js/index.js', './src/scss/index.scss'],
	output: {
		filename: 'bundle.js',
		path: path.resolve(__dirname, '../src')
	},
	module: {
		rules: [
			{
				test: /.scss$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'style.css',
							outputPath: './'
						}
					},
					{
						loader: 'extract-loader'
					},
					{
						loader: 'css-loader',
						options: {
							url: false
						}
					},
					{
						loader: 'postcss-loader',
						options: {
							plugins: () => {}
						}
					},
					{
						loader: 'sass-loader',
						options: {
							"includePaths": [
								require('path').resolve(__dirname, '../node_modules')
							]
						}
					}
				]
			}
		]
	},
	performance: { hints: false },
	watch: true,
	watchOptions: {
		poll: 1000
	}
};