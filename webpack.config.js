module.exports = {
	entry: './blocks/hero-block/index.js',
	output: {
		path: __dirname,
		filename: 'blocks/hero-block/index.build.js',
	},
	module: {
		loaders: [
			{
				test: /.js$/,
				loader: 'babel-loader',
				exclude: /node_modules/,
			},
		],
	},
};
