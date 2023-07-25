<?php


// removing this constant will mess up any modules that add to the theme options dashboard area.
define( 'PURE', true );


// require multiple - a little helper function to require multiple files from the library directory in a one 
function require_multi( $files ) {
    $files = func_get_args();
    foreach ( $files as $file )
        require_once 'library/' . $file . '.php';
}


// include utility functions
require_multi( 'core', 'admin', 'images', 'paginate', 'showcase' );


require_multi( 'shortcode/button', 'shortcode/articles' );


// include components
require_multi( 'component/header', 'component/slides', 'component/icons', 'component/accordions', 'component/photos', 'component/image-text', 'component/separator', 'component/agenda', 'component/content', 'component/list' );

