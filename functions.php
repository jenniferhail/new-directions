<?php
    // =========================================================================
    // HELPER FUNCTIONS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/helpers.php';

    // =========================================================================
    // WORDPRESS HOOKS AND FUNCTIONS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/wp/base.php';
    require_once dirname(__FILE__) . '/functions/wp-hooks.php';

    // =========================================================================
    // ADVANCED CUSTOM FIELDS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/acf/options.php';

    // =========================================================================
    // FACETWP
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/facetwp/options.php';

    // =========================================================================
    // CUSTOM POST TYPES
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/cpt/people.php';
    require_once dirname(__FILE__) . '/functions/cpt/documents.php';
    require_once dirname(__FILE__) . '/functions/cpt/properties.php';
