module.exports = {
	dist: {
		options: {
			plugins: [
				new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
				new (require('less-plugin-clean-css'))()
			]
		},
		files: {
			'assets/build/css/theme.min.css': 'assets/src/less/theme.less'
		}
	}
};
