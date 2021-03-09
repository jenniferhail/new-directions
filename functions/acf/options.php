<?php
    //======================================================================
    // Checking if ACF is Activated
    //======================================================================
    function acf_activated() {
        if (function_exists('get_field')) {
            return true;
        }
        return false;
    }

    //======================================================================
    // SPEED UP ACF
    //======================================================================
    add_filter('acf/settings/remove_wp_meta_box', '__return_true');
    
    //======================================================================
    // ACF Responsive Image
    //======================================================================
    function acf_responsive_image($image_id, $image_size, $max_width) {

        // check the image ID is not blank
        if ($image_id != '') {

            // set the default src image size
            $image_src = wp_get_attachment_image_url($image_id, $image_size);

            // set the srcset with various image sizes
            $image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

            // generate the markup for the responsive image
            echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
        }
    }

	//======================================================================
    // ADD OPTIONS PAGE
    //======================================================================
	if ( function_exists( 'acf_add_options_page' ) ) {

		acf_add_options_page( array(
			'page_title'	=> 'Site Options',
			'menu_title'	=> 'Site Options',
			'menu_slug' 	=> 'acf-site-options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
		));
	
	}