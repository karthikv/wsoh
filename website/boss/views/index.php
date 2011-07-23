<?php

    // theme directory corresponds to template
    $themeRoot = $config[ 'php_root' ] . '/boss/theme';
    require_once $themeRoot . '/header.php';

    if( isset( $page ) ) {
        // $this is a Loader object
        // extract global variables to allow easy accessibility
        $path = dirname( __FILE__ ) . "/$page.php";
        if ( file_exists( $path ) ) {
            require_once $path;
        }

    }

    require_once $themeRoot . '/footer.php';

