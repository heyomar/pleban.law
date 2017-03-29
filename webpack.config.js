module.exports = {
	entry: './scripts/entry.js',
	output: {
		path: __dirname + '/build/',
		publicPath: '/build/',
		filename: 'bundle.js'
	},
	module: {
		loaders: [
				{
					test: /\.js$/,
					loader: 'babel-loader',
					query: {
						presets: ['es2015']
					}
				}
		]
  }
}
