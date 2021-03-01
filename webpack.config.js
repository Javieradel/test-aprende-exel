//require for html support
const htmlWebpackPlugin = require('html-webpack-plugin');



module.exports={
			mode: 'production',	
		
			entry:'./src/app.js',
			output: {
					filename: 'bundle.js',
					path: __dirname+ '/dist'
			},

			module: {
					rules: [
						{
							test: /\.s[ac]ss$/i,
							use: [
								// Creates `style` nodes from JS strings
								"style-loader",
								// Translates CSS into CommonJS
								"css-loader",
								// Compiles Sass to CSS
								"sass-loader",
							],
						},
						{
							test:"/\.css$/i",
							use: [
								"style-loader",
								"css-loader",
							]
						},
					/*	{
							//IMAGE LOADER
							test: /\.(jpe?g|png|gif|svg)$/i,
							 loader:'file-loader'
							},*/
						{
							// HTML LOADER
							 test: /\.html$/,
							  loader: 'html-loader'
						},
					],
				},
			plugins:[
				new htmlWebpackPlugin({
					filename: './index.html',
					template: './src/index.html'
				})
			]
}
