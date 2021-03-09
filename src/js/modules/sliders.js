var $ = require('jquery');
var slick = require('slick-carousel');

module.exports = {
	init: function () {

        var sliders = $('.block.slider .slides');

        // Sliders
        if (sliders.length > 0) {
            for (var i = 0; i < sliders.length; i++) {
                // This slider
                var thisSlider = sliders[i];
                // Get the slide counter
                var slideCounter = $(thisSlider).parent().find('.paging-info');
                // Change the slide counter each time the slider moves
                $(thisSlider).on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                    var i = (currentSlide ? currentSlide : 0) + 1;
                    $(slideCounter).text(i + '/' + slick.slideCount);
                });
                // Init slick
                $(thisSlider).slick({
                    adaptiveHeight: true
                });
                // Count the number of slides
                var theseSlides = thisSlider.querySelectorAll('.slick-slide');
                // If there is only 1 slide, hide the counter
                if ( theseSlides.length == 1 ) {
                    $(slideCounter).css('display', 'none');
                }
            }
        }
	}
}