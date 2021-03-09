var $ = require('jquery');

module.exports = {
	init: function () {

        // Nav scroll effect
        // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        var lastScrollTop = 0;
        var navBar = document.querySelector('.header');
        window.addEventListener('scroll', function(){
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop){
                // Scrolling down
                if ( !navBar.classList.contains('hide') ) {
                    navBar.classList.remove('reveal');
                    navBar.classList.add('hide');
                }
            } else {
                // Scrolling up
                if ( !navBar.classList.contains('reveal') ) {
                    navBar.classList.remove('hide');
                    navBar.classList.add('reveal');
                }
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);

        // Hamburger
        // Click to open and change text
        $('.nav-toggle').on('click', function () {
            $('.header').toggleClass('active');
            $('.header-nav').toggleClass('active');
            $('.header .nav-toggle .toggle-text').toggleClass('close');
            if ( $('.header').hasClass('active') ) {
                $('.header .nav-toggle .toggle-text').text('Close');
            } else {
                $('.header .nav-toggle .toggle-text').text('Menu');
            }
        });

        // Search Icom
        // Get the search menu item
        var searchMenuItem = document.querySelector('.menu-item.search a');
        // If it exists and the window is larger than 1111, change the text out for an icon
        if ( searchMenuItem && window.innerWidth > 1111 ) {
            var searchIcon = '<i class="far fa-search"></i>';
            searchMenuItem.innerHTML = searchIcon;
        }
        // If the window size changes, change the search link accordingly
        if ( searchMenuItem ) {
            window.addEventListener('resize', function() {
                // Use the icon if larger than 1111
                if ( window.innerWidth > 1111 ) {
                    var searchIcon = '<i class="far fa-search"></i>';
                    searchMenuItem.innerHTML = searchIcon;
                // Use the word if smaller than 1111
                } else {
                    searchMenuItem.innerHTML = 'Search';
                }
            });
        }

        // Notification - Positioning the header when the notice is in use
        var notice = document.querySelector('.option.notification.top');
        // If the notification exists AND it's not set to hide
        if ( notice && !notice.classList.contains('hide') ) {
            // Get the notification height
            var noticeHeight = notice.offsetHeight;
            // Move the header down below the notificiation
            $('.header').css('top', noticeHeight);
            // When the window resizes, get the height again
            window.addEventListener('resize', function() {
                noticeHeight = notice.offsetHeight;
                $('.header').css('top', noticeHeight);
            });
            // Notification close button - Event listener
            document.querySelector('.option.notification.top .close').addEventListener('click', function() {
                // If the notification is closed, 
                $('.header').css('top', '0');
            });
        }

	}
}