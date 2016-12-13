module.exports = {
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
