var $ = require("jquery");
var lottie = require("lottie-web");

module.exports = {
	init: function () {
		var preloader = document.querySelector(".preloader");

		function runPreloader() {
			if (preloader) {
				window.addEventListener("load", function () {
					// Display the preloader
					preloader.style.display = "flex";
					// Run the lottie animation
					lottie.loadAnimation({
						container: document.getElementById("preloader-lottie"), // the dom element that will contain the animation
						renderer: "svg",
						loop: true,
						autoplay: true,
						// path:
						// "/wp-content/themes/mightily/dist/assets/lottie/data.json", // the path to the animation json
						path: "../lottie/data.json", // the path to the animation json
					});
					// Give the animation enough time to play
					setTimeout(function () {
						var fadeEffect = setInterval(function () {
							// if we don't set opacity 1 in CSS, then
							// it will be equaled to "" -- that's why
							// we check it, and if so, set opacity to 1
							if (!preloader.style.opacity) {
								preloader.style.opacity = 1;
							}
							if (preloader.style.opacity > 0) {
								preloader.style.opacity -= 0.1;
							} else {
								clearInterval(fadeEffect);
							}
						}, 100);
					}, 5000);
					// Then hide it, so people can navigate the site like normal
					setTimeout(function () {
						preloader.style.display = "none";
					}, 6100);
				});
			}
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(";");
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == " ") {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}

		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		// if ( $('#preloader-lottie').length > 0 ) {
		// If the popup exists, check for the cookie
		var cookie = getCookie("mightilyPreloader");
		// If the cookie does not exist
		if (cookie == false) {
			runPreloader();
			// And set a cookie for one day
			setCookie("mightilyPreloader", "seen", 1);
			// console.log(
			// 	"The cookie is false and the preloader is running. Set the cookie."
			// );
		}
		// }
	},
};
