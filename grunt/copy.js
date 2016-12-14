module.exports = {
	js_vendors: {
		expand: true,
		flatten: true,
		src: [
			'bower_components/uikit/js/uikit.js'
		],
		dest: 'assets/src/js/vendors/'
	},
	picturefill: {
		expand: true,
		flatten: true,
		src: [
			'assets/src/js/vendors/picturefill.js'
		],
		dest: 'assets/build/js/'
	},
	img: {
		expand: true,
		flatten: true,
		src: 'assets/src/img/*',
		dest: 'assets/build/img'
	}
};
