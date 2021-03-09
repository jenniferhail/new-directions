var $ = require("jquery");
var anime = require("animejs");
var Rellax = require("rellax");

module.exports = {
	init: function () {
		var rellax = new Rellax(
			".wp-block-mightily-hero-03.block.hero.style-4 .image",
			{
				speed: -2,
				center: true,
				wrapper: null,
				round: true,
				vertical: true,
				horizontal: false,
			}
		);

		// Fade in all blocks
		var mightyBlocks = document.querySelectorAll(".block");
		$(document).ready(function () {
			for (var i = 0; i < mightyBlocks.length; i++) {
				var mightyBlock = mightyBlocks[i];

				// Fade in the blocks
				new Waypoint({
					element: mightyBlock,
					handler: function () {
						anime({
							targets: this.element,
							opacity: 1,
							duration: 500,
							easing: "cubicBezier(.5, .05, .1, .3)",
						});
					},
					offset: "85%",
				});
			}
		});

		// Intro blocks - Animate the line
		var introBlocks = document.querySelectorAll(".intro.block.line");
		$(document).ready(function () {
			for (var i = 0; i < introBlocks.length; i++) {
				var introBlock = introBlocks[i];
				new Waypoint({
					element: introBlock,
					handler: function () {
						this.element.classList.add("animate");
					},
					offset: "25%",
				});
			}
		});

		// Hero 5 block - Animate the title

		// Check to see if the preloader cookie exists
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

		var preloaderCookie = getCookie("mightilyPreloader");
		var heroFiveTitles = document.querySelectorAll(
			".wp-block-mightily-hero-05 .title"
		);
		var heroFiveTitleSpans = document.querySelectorAll(
			".wp-block-mightily-hero-05 .title span"
		);

		if (
			preloaderCookie == false &&
			document.querySelector("body").classList.contains("home")
		) {
			// If the cookie does not exist, the preloader will run, so delay the AOS
			$(document).ready(function () {
				for (var i = 0; i < heroFiveTitles.length; i++) {
					var heroFiveTitle = heroFiveTitles[i];
					// console.log("Cookie does not exist");
					new Waypoint({
						element: heroFiveTitle,
						handler: function () {
							// Animate the line
							this.element.classList.add("animate-slow");
							anime({
								targets: this.element,
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 6500, // 6500 + 500
							});
							anime({
								targets: this.element.querySelectorAll(
									"span"
								)[0],
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 7000, // 7000 + 500
							});
							anime({
								targets: this.element.querySelectorAll(
									"span"
								)[1],
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 7500,
							});
						},
						offset: "85%",
					});
				}
			});
		} else {
			// If the cookie does exist, the preloader will not run, so do not delay the AOS
			$(document).ready(function () {
				for (var i = 0; i < heroFiveTitles.length; i++) {
					var heroFiveTitle = heroFiveTitles[i];
					// console.log("Cookie does exist");
					new Waypoint({
						element: heroFiveTitle,
						handler: function () {
							// Animate the line
							this.element.classList.add("animate");
							anime({
								targets: this.element,
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 800, // 800 + 500
							});
							anime({
								targets: this.element.querySelectorAll(
									"span"
								)[0],
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 1300, // 1300 + 500
							});
							anime({
								targets: this.element.querySelectorAll(
									"span"
								)[1],
								opacity: 1,
								duration: 1000,
								easing: "cubicBezier(.5, .05, .1, .3)",
								delay: 1800,
							});
						},
						offset: "85%",
					});
				}
			});
		}
	},
};
