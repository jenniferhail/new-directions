var $ = require("jquery");
var lottie = require("lottie-web");

module.exports = {
	init: function () {
		// This is a button animation using Lottie JS & lots of event listeners

		// Get all of the buttons
		var mightyButtons = document.querySelectorAll(
			".wp-block-button .wp-block-button__link"
		);

		// Loop through the buttons
		mightyButtons.forEach(function (buttonEl, i) {
			// Insert a div for the lottie animation
			buttonEl.insertAdjacentHTML(
				"beforeend",
				'<div id="lottie-' + i + '" class="lottieBtn"></div>'
			);

			// Load the lottie animation
			var thisAnim = lottie.loadAnimation({
				name: "lottie-" + i,
				container: document.getElementById("lottie-" + i), // the dom element that will contain the animation
				renderer: "svg",
				loop: false,
				autoplay: false,
				// path: '/wp-content/themes/mightily/dist/assets/lottie/button.json' // the path to the animation json
				path: "../lottie/button.json", // the path to the animation json
			});

			// Set a variable to use in the animation is complete event listener
			var mouseLeave = false;

			// On mouseover, play the animation
			buttonEl.addEventListener("mouseover", function (evt) {
				// console.log('Mouseover');
				mouseLeave = false;
				// Add start class to link to animate the line
				evt.target.classList.remove("finish");
				evt.target.classList.remove("fade-out");
				evt.target.classList.add("start");
				// Play the animation
				thisAnim.setDirection(1); // Set the direction to forward
				setTimeout(function () {
					thisAnim.play();
				}, 0);
			});

			// On mouseleave, reverse the animation and then stop it
			buttonEl.addEventListener("mouseleave", function (evt) {
				// console.log('Mouseleave');
				mouseLeave = true;
				thisAnim.setDirection(-1); // Set the direction to reverse
				thisAnim.play();

				// Remove start class + add class to link to animate the line out
				buttonEl.classList.add("finish");
			});

			// When the animation is complete AND mouseleave just occurred,
			// remove the start class and change to the finish class so we
			// can animate the underline back in all nice and smooth
			thisAnim.addEventListener("complete", function (evt) {
				if (mouseLeave == true) {
					// console.log('Animation is complete');
					buttonEl.classList.remove("start");
					// buttonEl.classList.add('fade-out');
				}
			});
		});
	},
};
