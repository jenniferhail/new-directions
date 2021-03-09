<?php
    //======================================================================
    // Checking if FacetWP is Activated
    //======================================================================
    function preselect_board($url_vars) {
        if ( 'staff-and-board-members' == FWP()->helper->get_uri() ) {
            if ( empty( $url_vars['people_type'] ) ) {
                $url_vars['people_type'] = [ 'board-of-directors' ];
            }
        }
        return $url_vars;
    }
    //======================================================================
    // Checking if FacetWP is Activated
    //======================================================================
    function facetwp_activated() {
        if (function_exists('facetwp_display')) {
            return true;
        }
        return false;
    }

    // =========================================================================
    // ADDING SUPPORT FOR FACETWP
    // =========================================================================
    add_filter( 'facetwp_is_main_query', function( $bool, $query ) {
        return ( true === $query->get( 'facetwp' ) ) ? true : $bool;
    }, 10, 2 );

    //======================================================================
    // ADDING SUBMIT/RESET BUTTON TO FACETWP
    //======================================================================
    function add_facetwp_submit() {
    ?>
    <script>(function($) {
    $(document).on('facetwp-loaded', function() {
        $('.facetwp-input-wrap').each(function() {
            if ($(this).find('.facetwp-search-submit').length < 1) {
                $(this).find('.facetwp-search').after('<button onclick="FWP.reset()">Reset</button>');
                $(this).find('.facetwp-search').after('<button class="facetwp-search-submit" onclick="FWP.refresh()">Submit</button>');
            }
        });
    });
    })(jQuery);
    </script>
    <?php
    }

    //======================================================================
    // ADDING LABELS TO FACETWP
    //======================================================================
    function fwp_add_facet_labels() {
        ?>
        <script>
        (function($) {
            $(document).on('facetwp-loaded', function() {
                $('.facetwp-facet').each(function() {
                    var $facet = $(this);
                    var facet_name = $facet.attr('data-name');
                    var facet_label = FWP.settings.labels[facet_name];
        
                    if ($facet.closest('.facet-wrap').length < 1 && $facet.closest('.facetwp-flyout').length < 1) {
                        $facet.wrap('<div class="facet-wrap"></div>');
                        $facet.before('<h3 class="h6 facet-label">' + facet_label + '</h3>');
                    }
                });
            });
        })(jQuery);
        </script>
        <?php
        }

    //======================================================================
    // DISPLAYING SEARCH TERM
    //======================================================================
    function fwp_display_term() {
        ?>
        <script>
        (function($) {
            $(document).on('facetwp-loaded', function() {
                // If we're on the search results page and the search term html exists
                if ( $('.block.search-results .search-term').length > 0 ) {
                    // Hide the search term until the user searches for something
                    $('.block.search-results .search-term').css('display', 'none');
                    // Get the site search facet
                    var searchFacet = FWP.facets.site_search;
                    // If the site search facet isn't blank,
                    // meaning a user has entered a search term,
                    if ( searchFacet != '' ) {
                        // console.log('Found the site search facet: ' + searchFacet);
                        // Change the text of the search term
                        $('.block.search-results .search-term .term').text(searchFacet);
                        // And make it visible
                        $('.block.search-results .search-term').css('display', 'block');
                    }
                }
            });
        })(jQuery);
        </script>
        <?php
        }
        

?>